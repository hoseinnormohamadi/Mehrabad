<?php

namespace App\Http\Controllers;

use App\Shop;
use App\ShopCategory;
use App\Traits\CustomAuth;
use App\Traits\Uploader;
use Illuminate\Http\Request;

class ShopController extends Controller
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
            $Items = Shop::where('Name','LIKE', '%' . request('SearchTerm') . '%')->paginate(25);
        }else {
            $Items = Shop::paginate(25);
        }
        $All = Shop::all()->count();
        return view('Admin.Shop.All')
            ->with('Items', $Items)
            ->with('All', $All);
    }

    public function Add()
    {
        $Tags = ShopCategory::all();
        return view('Admin.Shop.Add')->with('Tags' , $Tags);
    }

    public function Create(Request $request)
    {
        $request->validate([
            'Name' => 'required|string',
            'Description' => 'required|string',
            'Price' => 'required|integer',
            'Count' => 'required|integer',
            'Status' => 'required|string',
            'Category' => 'required|string',
        ]);
        try {
            foreach($request->file('Images') as $image)
            {
                $orginalPath = 'Uploads/Product/' . date('Y/m/d' . '/');
                $path = public_path($orginalPath);
                if (!file_exists($path)) {
                    \File::makeDirectory($path, 0777, true, true);
                }
                $new_name = bin2hex(random_bytes(32)) . '.jpg';
                $image->move($orginalPath, $new_name);
                $Images[] = $orginalPath . $new_name;
            }

            $Item = Shop::create([
                'Name' => $request->Name,
                'Description' => $request->Description,
                'Images' => json_encode($Images),
                'Price' => $request->Price,
                'Count' => $request->Count,
                'Status' => $request->Status == 'Available' ? 'Available' : 'UnAvailable',
                'Category' => $request->Category,
            ]);
            return RedirectController::Redirect(route('Shop.All'),'کالا با موفقیت اضافه شد.');
        } catch (\Exception $exception) {
            return RedirectController::Redirect(route('Shop.Add'),$exception->getMessage());
        }
    }

    public function Edit($id)
    {
        $Item = Shop::find($id);
        if ($Item == '' || empty($Item) || $Item->count() == 0){
            return RedirectController::Redirect(route('Shop.All'),'کالا مورد نظر شما یافت نشد');
        }
        $Tags = ShopCategory::all();
        return view('Admin.Shop.Edit')->with([
            'Item' => $Item,
            'Tags' => $Tags
        ]);
    }

    public function Update($id, Request $request)
    {
        $Item = Shop::find($id);
        if ($Item == '' || empty($Item) || $Item->count() == 0){
            return RedirectController::Redirect(route('Shop.All'),'کالا مورد نظر شما یافت نشد');
        }
        $request->validate([
            'Name' => 'required|string',
            'Description' => 'required|string',
            'Price' => 'required|integer',
            'Count' => 'required|integer',
            'Status' => 'required|string',
            'Category' => 'required|string',
        ]);
        try {
            if ($request->hasFile('Images') && $request->Images != null){
                foreach($request->file('Images') as $image)
                {

                    $orginalPath = 'Uploads/Product/' . date('Y/m/d' . '/');
                    $path = public_path($orginalPath);
                    if (!file_exists($path)) {
                        \File::makeDirectory($path, 0777, true, true);
                    }
                    $new_name = bin2hex(random_bytes(32)) . '.jpg';
                    $image->move($orginalPath, $new_name);
                    $Images[] = '/' . $orginalPath . $new_name;
                }
            }

            $Item->Name = $request->Name;
            $Item->Description = $request->Description;
            $Item->Images = $request->hasFile('Images') ? json_encode($Images) : $Item->Images;
            $Item->Price = $request->Price;
            $Item->Status = $request->Status;
            $Item->Count = $request->Count;
            $Item->Category = $request->Category;
            $Item->save();
            return RedirectController::Redirect(route('Shop.All'),'کالا با موفقیت بروزرسانی شد');

        }
        catch (\Exception $exception) {
            return RedirectController::Redirect(route('Shop.Edit',$Item->id),$exception->getMessage());
        }

    }

    public function Delete($id)
    {
        $Item = Shop::find($id);
        if ($Item == '' || empty($Item) || $Item->count() == 0){
            return RedirectController::Redirect(route('Shop.All'),'کالا مورد نظر شما یافت نشد');
        }
        try {
            $Item->delete();
            return RedirectController::Redirect(route('Shop.All'),'کالا با موفقیت حذف شد');
        }
        catch (\Exception $exception) {
            return RedirectController::Redirect(route('Shop.All'),$exception->getMessage());
        }
    }

}
