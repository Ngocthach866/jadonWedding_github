<?php

namespace App\Http\Controllers;

use App\Client;
use App\Clientinput;
use Illuminate\Http\Request;
use App\Vendor;
use App\Person;
use App\Company;
use App\Product;
use App\Purchasingtype;
use App\Control;
use App\Program;
use App\Project;
use App\Purchasing;
use App\Purchasingtypeset;
use App\Requirement;

class VendorController extends Controller
{
//tbVendor
    public function vendor()
    {
        $vendor = Vendor::all();
        $person = Person::all('id');
        $company = Company::all('id');
        return view('Ven', compact('vendor', 'person', 'company'));
    }


    public function vendorcreate(Request $request)
    {
        // nhận tất cả tham số vào mảng product
        $vend = $request->all();
        // xử lý upload hình vào thư mục
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'GIF') {
                return redirect('Ven')->with(['loi' => 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg,GIF']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images\logo", $imageName);
        } else {
            $imageName = null;
        }
        $In = new Vendor($vend);
        $In->picture = $imageName;
        $In->save();

        // $ven = new Vendor;
        // $ven->name = $request->name;
        // $ven->vendorable_id = $request->vendorable_id;
        // $ven->vendorable_type = $request->vendorable_type;
        // $ven->description = $request->description;
        // $ven->picture = $imageName;
        // $ven->save();

        return redirect()->route('vendor');
    }

    public function update($id)
    {

        $v = Vendor::find($id);
        $person = Person::all('id');
        $company = Company::all('id');
        return view('upVen', ['v' => $v, 'person' => $person, 'company' => $company]);
    }

    public function postUpdate(Request $request, $id)
    {
        // xử lý upload hình vào thư mục
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'GIF') {
                return redirect('upVen')->with(['error' => 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg,GIF']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images/logo", $imageName);
        } else { // không upload hình mới => giữ lại hình cũ
            $up = Vendor::find($id);
            $imageName = $up->picture;
        }

        $up = Vendor::find($id);
        $up->name = $request->name;
        $up->vendorable_id = $request->vendorable_id;
        $up->vendorable_type = $request->vendorable_type;
        $up->description = $request->description;
        $up->picture = $imageName;
        $up->save();
        return redirect()->action('VendorController@vendor');
    }


    public function delete($id)
    {
        $vend = Vendor::find($id);
        // $vend->delete();  xóa vào delete_at ,ở dưới xóa luôn
        $vend->forceDelete();
        return redirect()->action('VendorController@vendor');
    }

}
