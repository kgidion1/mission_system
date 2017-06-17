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

class ChurchController extends Controller
{
    public $uri = 'pages/church';

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewChurches()
    {
        //$churches = Church::all();
        $data = DB::table('churches as c')
            ->join('parishes as p', 'c.parishID', '=', 'p.id')
            ->join('archdeaconry as a', 'p.archdeaconryID', '=', 'a.id')
            ->select('c.id as id','c.name as church','c.created_at as dateCreated','p.name as parish','a.name as archdeaconry')
            ->get();
            //->paginate(10);
        return view($this->uri.'/churches',['data'=>$data]);
    }
    public function addChurch()
    {
        return view($this->uri.'/add_church');
    }
    public function insertChurch(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'parish' => 'required',
            'archdeaconry' => 'required',
            //'diocese' => 'required',
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
//            $dioceseID = DB::table('diocese')
//                ->where('name', '=', $request->diocese)
//                ->value('id');
//            if(count($dioceseID) > 0)
//            {
                $archdeaconryID = DB::table('archdeaconry')
                    ->where('name', '=', $request->archdeaconry)
                   // ->where('dioceseID', '=', $dioceseID)
                    ->value('id');
                if(count($archdeaconryID) > 0)
                {
                    $parishID = DB::table('parishes')
                        ->where('name', '=', $request->parish)
                        ->where('archdeaconryID', '=', $archdeaconryID)
                        ->value('id');
                    if(count($parishID) > 0)
                    {
                        $check_name = DB::table('churches')
                            ->where('name', '=', $request->name)
                            ->value('id');
                        if(count($check_name) > 0)
                        {
                            // redirect to a given page ...
                            $array = array(
                                'status' => 500,
                                'message' => 'Church already exists !!!!'
                            );
                        } else
                        {
                            $church = new Church();
                            $church->name = $request->name;
                            $church->parishID = $parishID;

                            if ($church->save()) {
                                // redirect to a given page .....
                                return redirect('church/viewChurches')->with('new church successfully inserted');
                            } else {
                                // redirect to a given page ...
                                $array = array(
                                    'status' => 500,
                                    'message' => 'failed to add church'
                                );
                            }
                        }
                    } else{
                        $array = array(
                            'status' => 500,
                            'message' => 'failed to get parish id'
                        );
                    }
                }else{
                    $array = array(
                        'status' => 500,
                        'message' => 'failed to get archdeaconry id'
                    );
                }
//            }else{
//                $array = array(
//                    'status' => 500,
//                    'message' => 'failed to get diocese id'
//                );
//            }
        }
        return response(json_encode($array))->header('Content-Type','application/json');
    }
    public function destroy($id)
    {
        $church = Church::find($id);
        $church->delete();
        return redirect($this->uri.'/churches');
    }
}
