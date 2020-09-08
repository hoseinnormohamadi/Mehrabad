<?php

namespace App\Http\Controllers;

use App\ShopCategory;
use App\Traits\CustomAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ShopCategoryController extends Controller
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

            $Tags =ShopCategory::where('Name','LIKE','%' . request('SearchTerm') . '%')->paginate(25);
        }else{
            $Tags = ShopCategory::paginate(4);
        }
        return view('Admin.Category.All')->with('Tags',$Tags);
    }


    public function Add(){

        return  view('Admin.Category.Add');
    }

    public function Create(Request $request){

        $request->validate([
            'Name' => 'required|string'
        ]);
        try {
            $Tag = ShopCategory::create([
                'Name' => $request->Name
            ]);
            return RedirectController::Redirect(route('Category.All'), 'دسته بندی با موفقیت افزوده شد');
        }
        catch (\Exception $exception){
            return RedirectController::Redirect(route('Category.Add'), $exception->getMessage());
        }
    }


    public function Edit($id){
        $Tag = ShopCategory::find($id);
        if ($Tag == '' || empty($Tag) || $Tag->count() == 0){
            return RedirectController::Redirect(route('Category.All'), 'دسته بندی مورد نظر شما یافت نشد');
        }
        return view('Admin.Category.Edit')->with('Category' , $Tag);
    }

    public function Update($id , Request $request){

        $Tag = ShopCategory::find($id);
        if ($Tag == '' || empty($Tag) || $Tag->count() == 0){
            return RedirectController::Redirect(route('Category.All'), 'دسته بندی مورد نظر شما یافت نشد');
        }
        $request->validate([
            'Name' => 'required|string'
        ]);
        try {
            $Tag->Name = $request->Name;
            $Tag->save();

            return RedirectController::Redirect(route('Category.All'), 'دسته بندی با موفقیت بروزرسانی شد');

        }
        catch (\Exception $exception){
            return RedirectController::Redirect(route('Category.Edit' , $Tag->id), $exception->getMessage());
        }

    }

    public function Delete($id){

        $Tag = ShopCategory::find($id);
        if ($Tag == '' || empty($Tag) || $Tag->count() == 0){
            return RedirectController::Redirect(route('Category.All'), 'دسته بندی مورد نظر شما یافت نشد');
        }
        try {
            $Tag->delete();
            return RedirectController::Redirect(route('Category.All'), 'دسته بندی با موفقیت حذف شد');

        }
        catch (\Exception $exception){
            return RedirectController::Redirect(route('Category.All'), $exception->getMessage());
        }

    }
}
