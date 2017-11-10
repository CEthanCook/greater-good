<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req) {
      $firstName = $req->input('firstName');
      $lastName = $req->input('lastName');
      $username = $req->input('username');
      $password = $req->input('password');
      $gradYear = $req->input('gradYear');

      $data = array('firstName'=>$firstName,'lastName'=>$lastName,'username'=>$username,
                    'password'=>$password, 'gradYear'=>$gradYear);

      DB::table('STUDENT')->insert($data);

      echo "Success";

    }
}
