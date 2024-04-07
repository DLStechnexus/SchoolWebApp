<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Notice;
use App\Models\SliderImage;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutUs = AboutUs::first();
        $student = User::where('role_id', 1)->count();
        $teacher = User::where('role_id', 2)->count();
        $staff = User::whereIn('role_id', [2, 3, 4, 5, 6])->count();
        $principal = User::with('user_details')->where('role_id', 5)->orderBy('id', 'desc')->first();
        $manager = User::with('user_details')->where('role_id', 6)->orderBy('id', 'desc')->first();
        $notice = Notice::first();
        $sliders = SliderImage::all();
        return view('frontend.pages.index', compact('aboutUs', 'student', 'teacher', 'staff', 'principal', 'manager', 'notice', 'sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
