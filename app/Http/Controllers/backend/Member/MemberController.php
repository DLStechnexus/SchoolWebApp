<?php

namespace App\Http\Controllers\backend\Member;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetails;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {
        $staff_member = User::with('user_details')->whereIn('role_id', [2, 3, 4, 5, 6])->orderBy('id', 'desc')->get();
        // dd($students);
        return view('backend.pages.staff.list', compact('staff_member'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.staff.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $user_data = [
                'name' => $request->first_name . ' ' . $request->last_name,
                'email' => $request->email,
                'password' => bcrypt('12345678'),
                'user_unique_id' => rand(9999999, 1000000),
                'status' => 1,
                'role_id' => $request->role_id,
            ];
            $user = User::create($user_data);
            global $fileName;
            if ($request->hasFile('profile_image')) {
                $file = $request->profile_image;
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('upload/staff'), $fileName);
            }
            $user_details = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'aadhar_number' => $request->adhar_number,
                'mobile_number' => $request->mobile_number,
                'profile_image' => $fileName,
                'status' => 1,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'qualification' => $request->qualification,
                'user_id' => $user->id,
                'created_by' => auth()->user()->id,
            ];
            $user_details = UserDetails::create($user_details);
            if ($user && $user_details) {
                DB::commit();
                return redirect()->route('staff.list')->with('success', 'Staff Added Successfully!');
            } else {
                DB::rollBack();
                return redirect()->back()->with('error', 'Unable to Add Staff!!');
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
        $staff_member = User::where('id', $id)->with('user_details')->whereIn('role_id', [2, 3, 4, 5, 6])->first();
        // dd($students);
        return view('backend.pages.staff.details', compact('staff_member'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $staff_member = User::where('id', $id)->with('user_details')->whereIn('role_id', [2, 3, 4, 5, 6])->first();
        // dd($students);
        return view('backend.pages.staff.edit', compact('staff_member'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request->all());
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
                'role_id' => $request->role_id,
            ];
            global $fileName;
            if ($request->hasFile('profile_image')) {
                $file = $request->profile_image;
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('upload/students'), $fileName);
            } else {
                $profile = UserDetails::where('user_id', $request->staff_id)->first();
                $fileName = $profile->profile_image;
            }
            $user = User::where('id', $request->staff_id)->update($user_data);
            $user_details = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'aadhar_number' => $request->adhar_number,
                'mobile_number' => $request->mobile_number,
                'profile_image' => $fileName,
                'status' => 1,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'qualification' => $request->qualification,
                'updated_by' => auth()->user()->id,
            ];
            $user_details = UserDetails::where('user_id', $request->staff_id)->update($user_details);
            if ($user) {
                DB::commit();
                return redirect()->route('staff.list')->with('success', 'Staff Updated Successfully!');
            } else {
                DB::rollBack();
                return redirect()->back()->with('error', 'Unable to Add Staff!!');
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
            $user  = User::find($request->staff_id);
            if ($user) {
                UserDetails::where('user_id', $request->staff_id)->delete();
                $user->update(['deleted_by' => auth()->user()->id]);
                $user->delete();
                return redirect()->route('staff.list')->with('success', 'Staff deleted Successfully!');
            } else {
                return redirect()->back()->with('Source Not Found!');
            }
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error', 'An unexpected error occurred.');
        }
    }
}
