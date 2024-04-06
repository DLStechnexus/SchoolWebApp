<?php

namespace App\Http\Controllers\backend\Setting;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\ContactUs;
use App\Models\LogoSetting;
use App\Models\SliderImage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function create()
    {
        $logo_setting = LogoSetting::first();
        $aboutUs = AboutUs::first();
        $contactUs = ContactUs::first();
        $sliders = SliderImage::all();
        return view('backend.pages.settings.create', compact('logo_setting', 'aboutUs', 'contactUs', 'sliders'));
    }
    public function logoStore(Request $request)
    {
        DB::beginTransaction();
        try {
            global $fileName;
            if ($request->hasFile('logo_image')) {
                $file = $request->logo_image;
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('upload/logo'), $fileName);
            }
            $logo = LogoSetting::updateOrCreate(
                [
                    'created_by' => 1,
                ],
                [
                    'logo_image' => $fileName,
                    'school_name' => $request->school_name
                ]
            );
            if ($logo) {
                DB::commit();
                return redirect()->back()->with('success', 'Content Added Successfully!');
            } else {
                DB::rollBack();
                return redirect()->back()->with('error', 'Unable to Add Content!!');
            }
        } catch (Exception $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'An unexpected error occurred.');
        }
    }
    public function aboutStore(Request $request)
    {
        DB::beginTransaction();
        try {
            $logo = AboutUs::updateOrCreate(
                [
                    'created_by' => 1,
                ],
                [
                    'about_us' => $request->about_us
                ]
            );
            if ($logo) {
                DB::commit();
                return redirect()->back()->with('success', 'Content Added Successfully!');
            } else {
                DB::rollBack();
                return redirect()->back()->with('error', 'Unable to Add Content!!');
            }
        } catch (Exception $th) {
            DB::rollBack();

            return redirect()->back()->with('error', 'An unexpected error occurred.');
        }
    }

    public function ContactStore(Request $request)
    {
        DB::beginTransaction();
        try {
            $logo = ContactUs::updateOrCreate(
                [
                    'created_by' => 1,
                ],
                [
                    'address' => $request->address,
                    'contact_no' => $request->contact_no,
                    'timing' => $request->timing,

                ]
            );
            if ($logo) {
                DB::commit();
                return redirect()->back()->with('success', 'Content Added Successfully!');
            } else {
                DB::rollBack();
                return redirect()->back()->with('error', 'Unable to Add Content!!');
            }
        } catch (Exception $th) {
            DB::rollBack();
            dd($th->getMessage());
            return redirect()->back()->with('error', 'An unexpected error occurred.');
        }
    }

    public function sliderStore(Request $request)
    {

        DB::beginTransaction();
        try {

            global $fileName;
            if ($request->hasFile('slider_image')) {
                $file = $request->slider_image;
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('upload/slider'), $fileName);
            }


            $user_details = SliderImage::create([
                'slider_image' => $fileName,
            ]);
            if ($user_details) {
                DB::commit();
                return redirect()->back()->with('success', 'Content Added Successfully!');
            } else {
                DB::rollBack();
                return redirect()->back()->with('error', 'Unable to Add Content!!');
            }
        } catch (Exception $th) {
            DB::rollBack();
            dd($th->getMessage());
            return redirect()->back()->with('error', 'An unexpected error occurred.');
        }
    }


    public function sliderDelete(Request $request)
    {
        try {
            $user  = SliderImage::find($request->slider_id);
            if ($user) {

                $user->update(['deleted_by' => auth()->user()->id]);
                $user->delete();
                return redirect()->back()->with('success', 'Image deleted Successfully!');
            } else {
                return redirect()->back()->with('Source Not Found!');
            }
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error', 'An unexpected error occurred.');
        }
    }
}
