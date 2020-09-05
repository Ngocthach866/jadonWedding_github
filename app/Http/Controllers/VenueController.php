<?php

namespace App\Http\Controllers;

use App\Client;
use App\Clientinput;
use App\Control;
use App\Location;
use App\Program;
use App\Project;
use App\Requirement;
use App\Venue;
use App\Venuetype;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    //1- page CREATE

    public function create()
    {
        $venues = Venue::all();
        $project = Project::all();
        $client = Client::all();
        $requirement = Requirement::all();
        $venuetype = Venuetype ::all();
        $location = Location::all();
        $clientinput = Clientinput::all();
        $control = Control::all();
        $program = Program::all();

        return view('venue.create')->with(['venues' => $venues, 'project' => $project, 'client' => $client, 'requirement' => $requirement, 'venuetype' => $venuetype, 'location' => $location, 'clientinput' => $clientinput, 'control' => $control, 'program' => $program]);
    }

    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng venue

        $venue = $request->all();

        // xử lý upload hình vào thư mục

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('venue/create')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move('images', $imageName);
        } else {
            $imageName = null;
        }
        $p = new venue($venue);
        $p->picture = $imageName;
        $p->save();

        return redirect()->action('VenueController@index');
    }

    //2- Page UPDATE

    public function update($id)
    {
        $p = venue::find($id);

        return view('venue.update', ['p' => $p]);
    }

    public function postUpdate(Request $request, $id)
    {
        $venue = $request->all();

        // xử lý upload hình vào thư mục

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('venue/update')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move('images', $imageName);
        } else {
            // không upload hình mới => giữ lại hình cũ
            $p = Venue::find($id);
            $imageName = $p->picture;
        }

        $p = Venue::find($id);

        // Liên quan page Update; trả về index sau khi update, trừ primary key.

        $p->id = $request['id'];
        $p->project_id = $request['project_id'];
        $p->client_id = $request['client_id'];
        $p->requirement_id = $request['requirement_id'];
        $p->venuetype_id = $request['venuetype_id'];
        $p->location_id = $request['location_id'];
        $p->picture = $imageName;
        $p->clientinput_id = $request['clientinput_id'];
        $p->control_id = $request['control_id'];
        $p->program_id = $request['program_id'];

        $p->save();

        return redirect()->action('VenueController@index');
    }

    //3- Page DETAIL

    public function detail($id)
    {
        $p = venue::find($id);

        return view('venue.detail', ['p' => $p]);
    }

    //4- Page INDEX

    public function index()
    {
        $venues = Venue::all();

        return view('venue.index')->with(['venues' => $venues]);
    }

    //5- Page DELETE

    public function delete($id)
    {
        $p = venue::find($id);
        $p->delete();

        return redirect()->action('VenueController@index');
    }
}
