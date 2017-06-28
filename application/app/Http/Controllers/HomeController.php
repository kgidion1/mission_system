<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Validator;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/dashboard');
    }
    public function viewUsers()
    {
        $users = User::all();
//        $users = DB::table('users')->paginate(5);
        return view('pages/users/users',['users'=>$users]);
    }
    function createUser(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'firstname' => 'required|max:20',
            'lastname' => 'required|max:20',
            'username' => 'required',
            'password' => 'required|max:255',
            'email' => 'required|unique:users|max:50',
            'contact' => 'required|max:12',
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
            $user = new User();
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->lastname = $request->lastname;
            $user->firstname = $request->firstname;
            $user->contact = $request->contact;
            $user->email = $request->email;
            $user->remember_token = $request->remember_token;

            if($user->save())
            {
                // redirect to a given page .....
                // Session::flash('message','New User added');

                return redirect('users/viewUsers');
            }
            else
            {
                // redirect to a given page ...
                $array = array(
                    'status' => 500,
                    'message' => 'failed to create new user'
                );
            }
        }
        return response(json_encode($array))->header('Content-Type','application/json');
    }
}
