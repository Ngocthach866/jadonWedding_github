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

class ProductController extends Controller
{
//tbProduct

public function product()
    {
        $vendor = Vendor::all('id');
        $product = Product::all();
        $purtype = Purchasingtype::all('id');
        $control = Control::all('id');
        return view('Pro', compact('vendor', 'product', 'purtype', 'control'));
    }

public function productcreate(Request $request)
{
    // nhận tất cả tham số vào mảng product
    $prod = $request->all();
    // xử lý upload hình vào thư mục
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'GIF') {
            return redirect('Pro')->with(['loipro' => 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg,GIF']);
        }
        $imageName = $file->getClientOriginalName();
        $file->move("images/pro", $imageName);
    } else {
        $imageName = null;
    }
    $In = new Product($prod);
    $In->picture = $imageName;
    $In->save();

    return redirect()->route('product');
}

public function productupdate($id)
{

    $p = Product::find($id);
    $vendor = Vendor::all('id');
    $purchasingtype = Purchasingtype::all('id');
    $control = Control::all('id');
    return view('upPro', ['p' => $p, 'vendor' => $vendor, 'purchasingtype' => $purchasingtype, 'control' => $control]);
}

public function productpostUpdate(Request $request, $id)
{
    // xử lý upload hình vào thư mục
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'GIF') {
            return redirect('upPro')->with(['loipro' => 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg,GIF']);
        }
        $imageName = $file->getClientOriginalName();
        $file->move("images/pro", $imageName);
    } else { // không upload hình mới => giữ lại hình cũ
        $up = Product::find($id);
        $imageName = $up->picture;
    }

    $up = Product::find($id);
    $up->vendor_id = $request->vendor_id;
    $up->purchasingtype_id = $request->purchasingtype_id;
    $up->name = $request->name;
    $up->specification = $request->specification;
    $up->price = $request->price;
    $up->expireddate = $request->expireddate;
    $up->control_id = $request->control_id;
    $up->picture = $imageName;
    $up->save();
    return redirect()->action('ProductController@product');
}


public function productdelete($id)
{
    $prod = Product::find($id);
    $prod->forceDelete();
    return redirect()->action('ProductController@product');
}


}

