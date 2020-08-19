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

class PurchasingtypesetController extends Controller
{
    //tbPurchasingtypeset
    public function purchasingtypeset()
    {
        $purtypeset = Purchasingtypeset::all();
        $purchasing = Purchasing::all();
        $program = Program::all('id');
        $clientinput = Clientinput::all('id');
        $requirement = Requirement::all('id');
        $Client = Client::all('id');
        $project = Project::all('id');
        $vendor = Vendor::all();
        $person = Person::all('id');
        $company = Company::all('id');
        $product = Product::all();
        $purtype = Purchasingtype::all();
        $control = Control::all('id');
        return view('Pts', compact('purtypeset','Client','purchasing', 'program', 'clientinput', 'requirement', 'project', 'vendor', 'person', 'company', 'product', 'purtype', 'control'));
    }



    public function purchasingtypesetcreate(Request $request)
    {
        // nhận tất cả tham số vào mảng product
        $pts = $request->all();
        // xử lý upload hình vào thư mục
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'GIF') {
                return redirect('Pts')->with(['loipts' => 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg,GIF']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images/pro", $imageName);
        } else {
            $imageName = null;
        }
        $In = new Purchasingtypeset($pts);
        $In->picture = $imageName;
        $In->save();

        return redirect()->route('purchasingtypeset');
    }

    public function purchasingtypesetupdate($id)
    {

        $purtypeset = Purchasingtypeset::find($id);
        $purtype = Purchasingtype::all('id');
        $clientinput = Clientinput::all('id');
        $control = Control::all('id');
        return view('upPts', ['purtype'=>$purtype,'pts' => $purtypeset,'clientinput' => $clientinput,'control' => $control]);
    }

    public function purchasingtypesetpostUpdate(Request $request, $id)
    {
        // xử lý upload hình vào thư mục
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'GIF') {
                return redirect('upPts')->with(['loipts' => 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg,GIF']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images/pro", $imageName);
        } else { // không upload hình mới => giữ lại hình cũ
            $up = Purchasingtypeset::find($id);
            $imageName = $up->picture;
        }

        $up = Purchasingtypeset::find($id);
        // model eloquen value = name in input
        $up->name = $request->name;
        $up->purchasingtype1_id = $request->purchasingtype1_id;
        $up->purchasingtype2_id = $request->purchasingtype2_id;
        $up->purchasingtype3_id = $request->purchasingtype3_id;
        $up->purchasingtype4_id = $request->purchasingtype4_id;
        $up->purchasingtype5_id = $request->purchasingtype5_id;
        $up->master = $request->master;
        $up->clientinput_id = $request->clientinput_id;
        $up->control_id = $request->control_id;
        $up->picture = $imageName;
        $up->save();
        return redirect()->action('PurchasingtypesetController@purchasingtypeset');
    }


    public function purchasingtypesetdelete($id)
    {
        $pts = Purchasingtypeset::find($id);
        $pts->forceDelete();
        return redirect()->action('PurchasingtypesetController@purchasingtypeset');
    }
}
