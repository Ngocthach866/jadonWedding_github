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


class PurchasingtypeController extends Controller
{
    //tbPurchasingtype
    public function purchasingtype()
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
        return view('Pct', compact('purtypeset','Client','purchasing', 'program', 'clientinput', 'requirement', 'project', 'vendor', 'person', 'company', 'product', 'purtype', 'control'));
    }



    public function purchasingtypecreate(Request $request)
    {
        // nhận tất cả tham số vào mảng product
        $pct = $request->all();
        // xử lý upload hình vào thư mục
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'GIF') {
                return redirect('Pct')->with(['loipct' => 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg,GIF']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images/pro", $imageName);
        } else {
            $imageName = null;
        }
        $In = new Purchasingtype($pct);
        $In->picture = $imageName;
        $In->save();

        return redirect()->route('purchasingtype');
    }

    public function purchasingtypeupdate($id)
    {

        $pct = Purchasingtype::find($id);
        $clientinput = Clientinput::all('id');
        $control = Control::all('id');
        return view('upPct', ['pct' => $pct,'clientinput' => $clientinput, 'control' => $control]);
    }

    public function purchasingtypepostUpdate(Request $request, $id)
    {
        // xử lý upload hình vào thư mục
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'GIF') {
                return redirect('upPct')->with(['loipct' => 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg,GIF']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images/pro", $imageName);
        } else { // không upload hình mới => giữ lại hình cũ
            $up = Purchasingtype::find($id);
            $imageName = $up->picture;
        }

        $up = Purchasingtype::find($id);
        // model eloquen value = name in input
        $up->name = $request->name;
        $up->category = $request->category;
        $up->master = $request->master;
        $up->specification = $request->specification;
        $up->clientinput_id = $request->clientinput_id;
        $up->control_id = $request->control_id;
        $up->picture = $imageName;
        $up->save();
        return redirect()->action('PurchasingtypeController@purchasingtype');
    }


    public function purchasingtypedelete($id)
    {
        $pct = Purchasingtype::find($id);
        $pct->forceDelete();
        return redirect()->action('PurchasingtypeController@purchasingtype');
    }
}
