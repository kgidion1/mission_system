<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Church;
use App\Parish;
use App\Diocese;
use App\Archdiocese;
use App\Archdeaconry;
use Response;
use App\church_member as members;

class ChurchController extends Controller
{
    public $uri = 'pages/church';

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewChurches()
    {
        $data = Church::all();
//        $data = DB::table('churches as c')
//            ->join('parishes as p', 'c.parishID', '=', 'p.id')
//            ->join('archdeaconry as a', 'p.archdeaconryID', '=', 'a.id')
//            ->select('c.id as id','c.name as church','c.created_at as dateCreated','p.name as parish','a.name as archdeaconry')
//            ->get();
            //->paginate(10);
        return view($this->uri.'/churches',['data'=>$data]);
    }
    public function viewMembers()
    {
        $new_members = members::all();
        return view($this->uri.'/members' , ['new_members'=>$new_members]);
    }
    public function addChurch()
    {
        return view($this->uri.'/add_church');
    }
//    public function getMembers()
//    {
//        $new_members = members::all();
//        return view('church/Members', ['new_members'=>$new_members]);
//    }
    public function addMember(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'church' => 'required',
            'contact' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
        ]);
        if($validator->fails())
        {
            $array = array(
                'status' => 500,
                'data' => $validator->errors(),
                'message' => 'some errors occured'
            );
        } else {
            $members = new members();
            $members->church = $request->church;
            $members->contact = $request->contact;
            $members->firstname = $request->firstname;
            $members->lastname = $request->lastname;

            if ($members->save()) {
                // redirect to a given page .....
                return redirect('church/Members')->with('message','new member successfully added');

            } else {
                $array = array(
                    'status' => 500,
                    'message' => 'failed to add member'
                );
            }
        }
        return response(json_encode($array))->header('Content-Type','application/json');
    }
    public function insertChurch(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'church' => 'required',
            'parish' => 'required',
            'archdeaconry' => 'required',
        ]);
        if($validator->fails())
        {
            $array = array(
                'status' => 500,
                'data' => $validator->errors(),
                'message' => 'some errors occured'
            );
        } else {
            $church = new Church();
            $church->church = $request->church;
            $church->parish = $request->parish;
            $church->archdeaconry = $request->archdeaconry;

            if ($church->save()) {
                // redirect to a given page .....
                return redirect('church/viewChurches')->with('new church successfully inserted');

            } else {
                $array = array(
                    'status' => 500,
                    'message' => 'failed to insert church'
                );
            }
        }
        return response(json_encode($array))->header('Content-Type','application/json');
    }
    public function destroy($id)
    {
        $church = Church::find($id);
        $church->delete();
        return redirect($this->uri.'/churches');
    }
    public function removeMember($id)
    {
        $member = members::find($id);
        $member->delete();
        return redirect($this->uri.'/members');
    }
}
