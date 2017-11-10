
@extends('layouts.app')

@section('content')
<head>
    <title>Mill Village Farms </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="StyleSheet1.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">

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
          <tr class="student">

          </tr>
          <tr class="student">

          </tr>
          <tr class="student">

          </tr>
          <tr class="student">

          </tr>
        </table>

    </div>




</body>
@endsection
