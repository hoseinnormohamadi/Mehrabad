<?php

namespace App\Http\Controllers;

use App\ShopCategory;
use App\SubCategory;
use App\Traits\CustomAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SubCategoryController extends Controller
{
    Use CustomAuth;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!$this->IsAdmin()) {
                return RedirectController::Redirect(route('Dashboard') , 'شما اجازه دسترسی به این بخش را ندارید');
            }
            return $next($request);
        });
    }


    public function All(){
        if (\request('SearchTerm')){

            $Tags =SubCategory::where('Name','LIKE','%' . request('SearchTerm') . '%')->paginate(25);
        }else{
            $Tags = SubCategory::paginate(4);
        }
        return view('Admin.SubCategory.All')->with('Tags',$Tags);
    }


    public function Add(){
        $Tags = ShopCategory::all();
        return  view('Admin.SubCategory.Add')->with(['Tags' => $Tags]);
    }

    public function Create(Request $request){

        $request->validate([
            'Name' => 'required|string',
            'Parent' => 'required|string'
        ]);
        try {
            $Tag = SubCategory::create([
                'Name' => $request->Name,
                'Parent' => $request->Parent
            ]);
            return RedirectController::Redirect(route('SubCategory.All'), 'دسته بندی با موفقیت افزوده شد');
        }
        catch (\Exception $exception){
            return RedirectController::Redirect(route('SubCategory.Add'), $exception->getMessage());
        }
    }


    public function Edit($id){
        $Tag = SubCategory::find($id);
        if ($Tag == '' || empty($Tag) || $Tag->count() == 0){
            return RedirectController::Redirect(route('SubCategory.All'), 'دسته بندی مورد نظر شما یافت نشد');
        }
        $Tags = ShopCategory::all();
        return view('Admin.SubCategory.Edit')->with([
            'Tags' => $Tags,
            'Tag' => $Tag
        ]);
    }

    public function Update($id , Request $request){

        $Tag = SubCategory::find($id);
        if ($Tag == '' || empty($Tag) || $Tag->count() == 0){
            return RedirectController::Redirect(route('SubCategory.All'), 'دسته بندی مورد نظر شما یافت نشد');
        }
        $request->validate([
            'Name' => 'required|string',
            'Parent' => 'required|string',
        ]);
        try {
            $Tag->Name = $request->Name;
            $Tag->Parent = $request->Parent;
            $Tag->save();

            return RedirectController::Redirect(route('SubCategory.All'), 'دسته بندی با موفقیت بروزرسانی شد');

        }
        catch (\Exception $exception){
            return RedirectController::Redirect(route('SubCategory.Edit' , $Tag->id), $exception->getMessage());
        }

    }

    public function Delete($id){

        $Tag = SubCategory::find($id);
        if ($Tag == '' || empty($Tag) || $Tag->count() == 0){
            return RedirectController::Redirect(route('SubCategory.All'), 'دسته بندی مورد نظر شما یافت نشد');
        }
        try {
            $Tag->delete();
            return RedirectController::Redirect(route('SubCategory.All'), 'دسته بندی با موفقیت حذف شد');

        }
        catch (\Exception $exception){
            return RedirectController::Redirect(route('SubCategory.All'), $exception->getMessage());
        }

    }
}
