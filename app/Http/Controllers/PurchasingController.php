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

class PurchasingController extends Controller
{
    //tbPurchasing
    public function purchasing()
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
        return view('Pcs', compact('purtypeset','Client','purchasing', 'program', 'clientinput', 'requirement', 'project', 'vendor', 'person', 'company', 'product', 'purtype', 'control'));
    }


    public function purchasingcreate(Request $request)
    {
        // nhận tất cả tham số vào mảng product
        $pcs = $request->all();
        // xử lý upload hình vào thư mục
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'GIF') {
                return redirect('Pcs')->with(['loipcs' => 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg,GIF']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images/pro", $imageName);
        } else {
            $imageName = null;
        }
        $In = new Purchasing($pcs);
        $In->picture = $imageName;
        $In->save();

        return redirect()->route('purchasing');
    }

    public function purchasingupdate($id)
    {

        $pcs = Purchasing::find($id);
        $project = Project::all('id');
        $client = Client::all('id');
        $requirement = Requirement::all('id');
        $purtype = Purchasingtype::all('id');
        $product = Product::all('id');
        $clientinput = Clientinput::all('id');
        $control = Control::all('id');
        $program = Program::all('id');

        return view('upPcs', ['pcs' => $pcs, 'project' => $project, 'client' => $client, 'requirement' => $requirement, 'purtype' => $purtype, 'product' => $product, 'clientinput' => $clientinput, 'control' => $control, 'program' => $program]);
    }

    public function purchasingpostUpdate(Request $request, $id)
    {
        // xử lý upload hình vào thư mục
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'GIF') {
                return redirect('upPcs')->with(['loipcs' => 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg,GIF']);
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images/pro", $imageName);
        } else { // không upload hình mới => giữ lại hình cũ
            $up = Purchasing::find($id);
            $imageName = $up->picture;
        }

        $up = Purchasing::find($id);
        // model eloquen value = name in input
        $up->project_id = $request->project_id;
        $up->client_id = $request->client_id;
        $up->requirement_id = $request->requirement_id;
        $up->purchasingtype_id = $request->purchasingtype_id;
        $up->product_id = $request->product_id;
        $up->clientinput_id = $request->clientinput_id;
        $up->control_id = $request->control_id;
        $up->program_id = $request->program_id;
        $up->picture = $imageName;
        $up->save();
        return redirect()->action('PurchasingController@purchasing');
    }


    public function purchasingdelete($id)
    {
        $prod = Purchasing::find($id);
        $prod->forceDelete();
        return redirect()->action('PurchasingController@purchasing');
    }
}
