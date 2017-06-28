<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Missioner;
use Response;
use App\mission_coordinator as Coordinators;

class MissionerController extends Controller
{
    public $uri = 'pages/missioners';

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewMissioners()
    {
        $missioners = Missioner::all();
        return view($this->uri.'/missioners',['missioners'=>$missioners]);
    }
    public function viewCoordinators()
    {
        $coordinators = Coordinators::all();
        return view($this->uri.'/coordinators', ['coordinators'=>$coordinators]);
    }
    public function addMissioner()
    {
        return view($this->uri.'/add_missioner');
    }
    public function addCoordinator(Request $request)
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
            $coordinators = new Coordinators();
            $coordinators->church = $request->church;
            $coordinators->contact = $request->contact;
            $coordinators->firstname = $request->firstname;
            $coordinators->lastname = $request->lastname;

            if ($coordinators->save()) {
                // redirect to a given page .....
                return redirect('mission/Coordinators')->with('message','new Mission_Coordinator successfully added');

            } else {
                $array = array(
                    'status' => 500,
                    'message' => 'failed to add Mission_Coordinator'
                );
            }
        }
        return response(json_encode($array))->header('Content-Type','application/json');
    }
    public function createMissioner(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'firstname' => 'required|max:20',
            'lastname' => 'required|max:20',
            'contact' => 'required|max:12',
//            'church' => 'required|max:20',
            'email' => 'required|email|max:50|unique:missioners',
//            'parish' => 'required|max:20',
//            'archdeaconry' => 'required|max:20',
        ]);

        if($validator->fails())
        {
            $array = array(
                'status' => 500,
                'data' => $validator->errors(),
                'message' => 'some errors occured'
            );
        }
        else
        {
            $missioner = new Missioner();
            $missioner->lastname = $request->lastname;
            $missioner->firstname = $request->firstname;
            $missioner->contact = $request->contact;
            $missioner->email = $request->email;
//            $missioner->church = $request->church;
//            $missioner->parish = $request->parish;
//            $missioner->archdeaconry = $request->archdeaconry;

            // redirect to a given page ...
            if($missioner->save())
            {
                return redirect('missioners/viewMissioners')->with('message','New Missioner added');
            }
            else
            {
                $array = array(
                    'status' => 500,
                    'message' => 'failed to add new missioner'
                );
            }
        }
        return response(json_encode($array))->header('Content-Type','application/json');
    }
    public function destroy( $id)
    {
        $missioner = Missioner::find($id);
        $missioner->delete();
        return redirect('missioners/viewMissioners');
    }
    public function removeCoordinator($id)
    {
        $coordinator = Coordinators::find($id);
        $coordinator->delete();
        return redirect('mission/Coordinators');
    }
}
