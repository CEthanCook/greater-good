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
