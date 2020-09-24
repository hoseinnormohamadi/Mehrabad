<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Traits\CustomAuth;
use App\Traits\Uploader;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use CustomAuth;
    use Uploader;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!$this->IsAdmin()) {
                return RedirectController::Redirect(route('Dashboard'), 'شما اجازه دسترسی به این بخش را ندارید!!!');
            }
            return $next($request);
        });
    }

    public function All()
    {
        if (\request('SearchTerm')) {
            $Sliders = Slider::where('Name', 'LIKE', '%' . request('SearchTerm') . '%')->paginate(25);
        } else {
            $Sliders = Slider::paginate(25);
        }
        return view('Admin.Slider.All')->with([
            'Sliders' => $Sliders,
        ]);


    }

    public function Add()
    {
        return view('Admin.Slider.Add');
    }

    public function Create(Request $request)
    {
        $request->validate([
            'Name' => 'required|string',
            'Image' => 'required|image',
            'Status' => 'required|string',
        ]);
        try {
            $Slider = Slider::create([
                'Name' => $request->Name,
                'Image' => $this->UploadPic($request, 'Image', 'Slider'),
                'Status' => $request->Status == 'Active' ? 'Active' : 'DeActive',
            ]);
            return RedirectController::Redirect(route('Slider.All'), 'اسلایدر شما با موفقیت افزوده شد.');
        } catch (\Exception $exception) {
            return RedirectController::Redirect(route('Slider.Add'), $exception->getMessage());
        }
    }

    public function Edit($id)
    {
        $Slider = Slider::find($id);
        if ($Slider->count() < 0 || $Slider == null || $Slider == "") {
            return RedirectController::Redirect('/panel/Slider/All', 'پیام مورد نظر شما پیدا نشد');
        }
        return view('Admin.Slider.Edit')->with('Slider', $Slider);
    }

    public function Update($id, Request $request)
    {
        $Slider = Slider::find($id);
        if ($Slider->count() < 0 || $Slider == null || $Slider == "") {
            return RedirectController::Redirect(route('Slider.All'), 'اسلایدر مورد نظر شما پیدا نشد');
        }

        $request->validate([
            'Name' => 'required|string',
            'Image' => 'required|image',
            'Status' => 'required|string',
        ]);
        try {
            $request->hasFile('Image') ? unlink(public_path($Slider->Image)) : null;
            $Slider->Name = $request->Name;
            $Slider->Image = $request->hasFile('Image') ? $this->UploadPic($request, 'Image', 'Slider') : $Slider->Image;
            $Slider->Status = $request->Status == 'Active' ? 'Active' : 'DeActive';
            $Slider->save();
            return RedirectController::Redirect(route('Slider.Edit', $Slider->id), 'اسلایدر شما با موفقیت بروزرسانی شد.');

        } catch (\Exception $exception) {
            return RedirectController::Redirect(route('Slider.All'), $exception->getMessage());

        }
    }

    public function Delete($id)
    {
        $Slider = Slider::find($id);
        if ($Slider->count() < 0 || $Slider == null || $Slider == "") {
            return RedirectController::Redirect(route('Slider.All'), 'اسلایدر مورد نظر شما پیدا نشد');
        }
        try {
            $Slider->delete();
            return RedirectController::Redirect(route('Slider.All'), 'اسلایدر مورد نظر شما با موفقیت حذف شد.');
        } catch (\Exception $exception) {
            return RedirectController::Redirect(route('Slider.All'), $exception->getMessage());
        }
    }
}
