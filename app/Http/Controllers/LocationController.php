<?php

namespace App\Http\Controllers;

use App\Location;
use App\Requirement;
use App\Venuetype;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    //1- Create

    public function create()
    {
        $locations = Location::all();
        $venuetype = venuetype::all();
        $requirement = Requirement::all();

        return view('location.create')->with(['locations' => $locations,
        'venuetype' => $venuetype, 'requirement' => $requirement,
        ]);
    }

    // postCreate
    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng location
        $location = $request->all();
        // xử lý upload hình vào thư mục
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('location/create')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move('picture', $imageName);
        } else {
            $imageName = null;
        }
        $p = new Location($location);
        $p->picture = $imageName;
        $p->save();

        return redirect()->action('LocationController@index');
    }

    // 2- Update

    public function update($id)
    {
        $p = Location::find($id);

        return view('location.update', ['p' => $p]);
    }

    //postUpdate

    public function postUpdate(Request $request, $id)
    {
        $venue = $request->all();

        // xử lý upload hình vào thư mục

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('location/update')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move('images', $imageName);
        } else {
            // không upload hình mới => giữ lại hình cũ
            $p = Location::find($id);
            $imageName = $p->picture;
        }

        $p = Location::find($id);

        // Page Update
        $p->name = $request['name'];
        $p->address = $request['address'];
        $p->from = $request['from'];
        $p->to = $request['to'];
        $p->venuetype_id = $request['venuetype_id'];
        $p->price = $request['price'];
        $p->expireddate = $request['expireddate'];
        $p->specification = $request['specification'];
        $p->picture = $imageName;
        $p->control_id = $request['control_id'];

        /*         echo '<pre>';
                print_r('lctExprDate = '.$request['lctExprDate'].'<br>');
                print_r('p = '.$p);
                echo '<br>';
                exit(); */

        $p->save();

        return redirect()->action('LocationController@index');
    }

    // 3- Detail

    public function detail($id)
    {
        $p = location::find($id);

        return view('location.detail', ['p' => $p]);
    }

    // 4- Index
    public function index()
    {
        $locations = location::all();

        return view('location.index')->with(['locations' => $locations]);
    }

    //5- Delete

    public function delete($id)
    {
        $p = Location::find($id);
        $p->delete();

        return redirect()->action('LocationController@index');
    }
}
