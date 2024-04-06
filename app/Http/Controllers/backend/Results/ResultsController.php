<?php

namespace App\Http\Controllers\backend\Results;

use App\Http\Controllers\Controller;
use App\Models\Result;
use App\Models\ResultMark;
use App\Models\User;
use App\Models\UserDetails;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = Result::with('marks', 'users')->orderBy('id', 'desc')->get();
        return view('backend.pages.results.list', compact('results'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.results.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $users = User::where('user_unique_id', $request->roll_number)->first();
            if (!empty($users)) {
                $data = [
                    'exam_type' => $request->exam_type,
                    'year_session' => $request->yearly_session,
                    'user_id' => $users->id,
                    'class_standard' => $request->class_standard,
                    'status' => 1,
                    'created_by' => auth()->user()->id,
                ];
                $result = Result::create($data);
                $result_marks = [];
                foreach ($request->subject_name as $key => $title) {
                    $result_marks[] = [
                        'subject_name' => $title,
                        'out_of_marks' => $request->out_of_marks[$key],
                        'obtain_marks' => $request->obtain_mark[$key],
                        'status' => 1,
                        'result_id' => $result->id,
                        'created_by' => auth()->user()->id,
                    ];
                }
                ResultMark::insert($result_marks);
                if ($result) {
                    DB::commit();
                    return redirect()->route('result.list')->with('success', 'Result Added Successfully!');
                } else {
                    DB::rollBack();
                    return redirect()->back()->with('error', 'Unable to Add Result!!');
                }
            } else {
                return redirect()->back()->with('error', 'Entered Roll No. is Incorrect!!');
            }
        } catch (Exception $th) {
            DB::rollBack();
            dd($th->getMessage());
            return redirect()->back()->with('error', 'An unexpected error occurred.');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $results = Result::where('id', $id)->with('marks', 'users')->orderBy('id', 'desc')->first();
        return view('backend.pages.results.details', compact('results'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $results = Result::where('id', $id)->with('marks', 'users')->orderBy('id', 'desc')->first();
        return view('backend.pages.results.edit', compact('results'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request->all());
        DB::beginTransaction();
        try {
            $users = User::where('user_unique_id', $request->roll_number)->first();
            if (!empty($users)) {
                $data = [
                    'exam_type' => $request->exam_type,
                    'year_session' => $request->yearly_session,
                    'user_id' => $users->id,
                    'class_standard' => $request->class_standard,
                    'status' => 1,
                    'created_by' => auth()->user()->id,
                ];
                $result = Result::where('id', $request->result_id)->update($data);

                foreach ($request->subject_name as $key => $title) {
                    $obtain_mark = $request->obtain_mark[$key];
                    $out_of_marks = $request->out_of_marks[$key];
                    if ($obtain_mark === null || $out_of_marks === null) {
                        continue;
                    }
                    ResultMark::where('id', $request->marks_id[$key])->update([
                        'subject_name' => $title,
                        'out_of_marks' => $out_of_marks,
                        'obtain_marks' => $obtain_mark,
                        'status' => 1,
                        'result_id' => $request->result_id,
                        'created_by' => auth()->user()->id,
                    ]);
                }

                if (!empty($request->subject_name1)) {
                    foreach ($request->subject_name1 as $key => $title1) {
                        $obtain_mark1 = $request->obtain_mark1[$key];
                        $out_of_marks1 = $request->out_of_marks1[$key];
                        if ($obtain_mark1 === null || $out_of_marks1 === null) {
                            continue;
                        }
                        ResultMark::create([
                            'subject_name' => $title1,
                            'out_of_marks' => $out_of_marks1,
                            'obtain_marks' => $obtain_mark1,
                            'status' => 1,
                            'result_id' => $request->result_id,
                            'created_by' => auth()->user()->id,
                        ]);
                    }
                }


                if ($result) {
                    DB::commit();
                    return redirect()->route('result.list')->with('success', 'Result Added Successfully!');
                } else {
                    DB::rollBack();
                    return redirect()->back()->with('error', 'Unable to Add Result!!');
                }
            } else {
                return redirect()->back()->with('error', 'Entered Roll No. is Incorrect!!');
            }
        } catch (Exception $th) {
            DB::rollBack();
            dd($th->getMessage());
            return redirect()->back()->with('error', 'An unexpected error occurred.');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $user  = Result::find($request->result_destroy);
            if ($user) {
                ResultMark::where('result_id', $request->result_destroy)->delete();
                $user->update(['deleted_by' => auth()->user()->id]);
                $user->delete();
                return redirect()->route('result.list')->with('success', 'Result deleted Successfully!');
            } else {
                return redirect()->back()->with('Source Not Found!');
            }
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error', 'An unexpected error occurred.');
        }
    }
}
