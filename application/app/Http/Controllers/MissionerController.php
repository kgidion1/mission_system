<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Missioner;
use Response;

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
    public function addMissioner()
    {
        return view($this->uri.'/add_missioner');
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
        return redirect($this->uri.'/missioners');
    }
}
