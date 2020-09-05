<?php

namespace App\Http\Controllers;

use App\clientinput;
use App\control;
use App\Venuetype;
use Illuminate\Http\Request;

class VenuetypeController extends Controller
{
    //1- Create

    public function create()
    {
        $venuetypes = Venuetype::all();
        $clientinput = Clientinput::all();
        $control = Control::all();

        return view('venuetype.create')->with(['venuetypes' => $venuetypes, 'clientinput' => $clientinput, 'control' => $control]);
    }

    // postCreate
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng venuetype
        $venuetype = $request->all();
        // xử lý upload hình vào thư mục
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('venuetype/create')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move('picture', $imageName);
        } else {
            $imageName = null;
        }
        $p = new venuetype($venuetype);
        $p->picture = $imageName;
        $p->save();

        return redirect()->action('VenuetypeController@index');
    }

    // 2- Update

    public function update($id)
    {
        $p = venuetype::find($id);

        return view('venuetype.update', ['p' => $p]);
    }

    //postUpdate

    public function postUpdate(Request $request, $id)
    {
        $venuetype = $request->all();
        $p = venuetype::find($id);

        // xử lý upload hình vào thư mục
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('venuetype/update')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move('picture', $imageName);
        } else { // không upload hình mới => giữ lại hình cũ
            $imageName = $p->picture;
        }

        //$p = venuetype::find($id);

        // Page Update

        $p->name = $request['name'];
        $p->category = $request['category'];
        $p->master = $request['master'];
        $p->picture = $imageName;
        $p->specification = $request['specification'];
        $p->clientinput_id = $request['clientinput_id'];
        $p->control_id = $request['control_id'];

        $p->save();

        return redirect()->action('VenuetypeController@index');
    }

    // 3- Detail

    public function detail($id)
    {
        $p = venuetype::find($id);

        return view('venuetype.detail', ['p' => $p]);
    }

    // 4- Index
    public function index()
    {
        $venuetypes = venuetype::all();

        return view('venuetype.index')->with(['venuetypes' => $venuetypes]);
    }

    //5- Delete

    public function delete($id)
    {
        $p = venuetype::find($id);
        $p->delete();

        return redirect()->action('VenuetypeController@index');
    }
}
