<?php

namespace App\Http\Controllers\backend\Student;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetails;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = User::with('user_details')->where('role_id', 1)->orderBy('id', 'desc')->get();
        // dd($students);
        return view('backend.pages.students.list', compact('students'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.students.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        DB::beginTransaction();
        try {
            $user_data = [
                'name' => $request->first_name . ' ' . $request->last_name,
                'email' => $request->email,
                'password' => bcrypt('12345678'),
                'user_unique_id' => rand(9999999, 1000000),
                'status' => 1,
                'role_id' => 1,
            ];
            $user = User::create($user_data);
            global $fileName;
            if ($request->hasFile('profile_image')) {
                $file = $request->profile_image;
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('upload/students'), $fileName);
            }
            $user_details = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'aadhar_number' => $request->adhar_no,
                'mobile_number' => $request->phone,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,

                'profile_image' => $fileName,
                'class_standard' => $request->class_standard,
                'qualification' => $request->qualification,
                'status' => 1,
                'address' => $request->address,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'category' => $request->category,
                'pincode' => $request->pincode,
                'district' => $request->district,
                'religion' => $request->religion,
                'caste' => $request->caste,
                'blood_group' => $request->blood_group,
                'father_occupation' => $request->father_occupation,
                'user_id' => $user->id,
                'created_by' => auth()->user()->id,
            ];

            $user_details = UserDetails::create($user_details);
            if ($user && $user_details) {
                DB::commit();
                return redirect()->route('student.list')->with('success', 'Student Added Successfully!');
            } else {
                DB::rollBack();
                return redirect()->back()->with('error', 'Unable to Add Student!!');
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
        $student = User::with('user_details')->where('id', $id)->first();
        // dd($students);
        return view('backend.pages.students.details', compact('student'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = User::with('user_details')->where('id', $id)->first();
        // dd($students);
        return view('backend.pages.students.edit', compact('student'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request->all());
        // $validator = Validator::make(
        //     $request->all(),
        //     [
        //         'name'                  => 'required',
        //         'email'                 => 'required',
        //         'password'              => 'required',
        //         'aadhar_number'         => 'required',
        //         'mobile_number'         => 'required',
        //         'father_name'           => 'required',
        //         'mother_name'           => 'required',
        //     ]
        // );
        // if ($validator->fails()) {
        //     $return['code'] = 100;
        //     $return['msg'] = 'error';
        //     $return['err'] = $validator->errors();
        //     return redirect()->back()->with('error', $return);
        // }
        DB::beginTransaction();
        try {
            $user_data = [
                'name' => $request->first_name . ' ' . $request->last_name,
                'email' => $request->email,
                'password' => bcrypt('12345678'),
                'user_unique_id' => rand(9999999, 1000000),
                'status' => $request->status,
            ];
            global $fileName;
            if ($request->hasFile('profile_image')) {
                $file = $request->profile_image;
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('upload/students'), $fileName);
            } else {
                $profile = UserDetails::where('user_id', $request->user_id)->first();
                $fileName = $profile->profile_image;
            }

            $user = User::where('id', $request->user_id)->update($user_data);
            $user_details = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'aadhar_number' => $request->adhar_no,
                'mobile_number' => $request->phone,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,

                'profile_image' => $fileName,
                'class_standard' => $request->class_standard,
                'qualification' => $request->qualification,
                'status' => $request->status,
                'address' => $request->address,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'category' => $request->category,
                'pincode' => $request->pincode,
                'district' => $request->district,
                'religion' => $request->religion,
                'caste' => $request->caste,
                'blood_group' => $request->blood_group,
                'father_occupation' => $request->father_occupation,
                'updated_by' => auth()->user()->id,
            ];
            $user_details = UserDetails::where('user_id', $request->user_id)->update($user_details);
            if ($user && $user_details) {
                DB::commit();
                return redirect()->route('student.list')->with('success', 'Student Updated Successfully!');
            } else {
                DB::rollBack();
                return redirect()->back()->with('error', 'Unable to Add Student!!');
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
            $user  = User::find($request->student_id);
            if ($user) {
                UserDetails::where('user_id', $request->student_id)->delete();
                $user->update(['deleted_by' => auth()->user()->id]);
                $user->delete();
                return redirect()->route('student.list')->with('success', 'Student deleted Successfully!');
            } else {
                return redirect()->back()->with('Source Not Found!');
            }
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error', 'An unexpected error occurred.');
        }
    }
}
