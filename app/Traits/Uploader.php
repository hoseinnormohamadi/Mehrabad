<?php


namespace App\Traits;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use const http\Client\Curl\AUTH_ANY;

trait Uploader
{
    public function UploadPic(Request $request, $name, $folder , $Mode = null)
    {
        $request->validate([
            $name => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);
        if ($Mode == 'Profile'){
            $orginalPath = 'Uploads/Profile/' . $folder . '/' ;
            $path = public_path($orginalPath);
        }else{
            $orginalPath = 'Uploads/' . $folder . '/' . date('Y/m/d' . '/');
            $path = public_path($orginalPath);
        }
        $imageName = bin2hex(random_bytes(32)) . '.jpg';
        if (!file_exists($path)) {
            \File::makeDirectory($path, 0777, true, true);
        }
        \request($name)->move($orginalPath, $imageName);

        return '/' . $orginalPath . $imageName;
    }


    public function SiteIcon(Request $request)
    {
        $request->validate([
            'SiteIcon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);
        $orginalPath = '/assets/img/';
        $path = public_path($orginalPath);
        $imageName = 'favicon.png';
        \request('SiteIcon')->move($path, $imageName);
        return true;
    }
}
