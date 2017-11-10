<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    function insert(Request $req) {
      $firstName = $req->input('firstName');
      $lastName = $req->input('lastName');
      $username = $req->input('username');
      $password = $req->input('password');
      $gradYear = $req->input('gradYear');

      $data = array('firstName'=>$firstName,'lastName'=>$lastName,'username'=>$username,
                    'password'=>$password, ;'gradYear'=>$gradYear);

      DB::table('STUDENT')->insert($data);

      echo "Success";

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
      $data['data'] = DB::table('users')->get();
      if (count($data[0]) > 0) {
        return view('insertForm', $data);
      }
      else {
        return view('insertForm');
      }
    }
}
