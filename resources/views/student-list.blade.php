
@extends('layouts.app')

@section('content')
<head>
    <title>Mill Village Farms </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="StyleSheet1.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="container">

        <div class="menu">
            <a href="" id="Home"><i class="fa fa-home" aria-hidden="true"></i></a>
        </div>

        <div class="buttons">
            <button id="create"> Create </button>
            <button id="make"> Make </button>
            <button id="students"> Students </button>
        </div>
        <h3> This should be a student list </h3>
        <table style = "margin-top: 20px;">
          <tr>
            <td style="border-style:solid;">
              Name: Jeremy King <br>
              Class: 11th Grade <br>
              Phone Number: 864-555-2017 <br>
            </td>
          </tr>
          <tr>
            <td style="border-style:solid;">
              Name: Amanda Worthing <br>
              Class: 10th Grade <br>
              Phone Number: 864-555-9987 <br>
            </td>
          </tr>
          <tr>
            <td style="border-style:solid;">
              Name: Jessica Whistle <br>
              Class: 11th Grade <br>
              Phone Number: 864-555-4736 <br>
            </td>
          </tr>
          <tr>
            <td style="border-style:solid;">
              Name: Mike Wall <br>
              Class: 9th Grade <br>
              Phone Number: 864-555-2398 <br>
            </td>
          </tr>
        </table>

    </div>




</body>
@endsection
