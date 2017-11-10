
@extends('layouts.app')

@section('content')
<head>
    <title>Mill Village Farms </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="StyleSheet1.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    td {
      border-style: solid;
      width: 150px;
      height: 100px;
      position: absolute;
      text-align: right;
    }
    </style>
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
        <h3> February </h3>
        <table style = "margin-top: 20px;">
          <tr>
            <td>1 </td>
            <td >2 </td>
            <td >3 </td>
            <td >4 </td>
            <td >5 </td>
            <td >6 </td>
            <td >7 </td>
          </tr>
          <tr>
            <td >8 </td>
            <td >9 </td>
            <td >10 </td>
            <td >11 </td>
            <td >12 </td>
            <td >13 </td>
            <td >14 </td>
          </tr>
          <tr>
            <td >15 </td>
            <td >16 </td>
            <td >17 </td>
            <td >18 </td>
            <td >19 </td>
            <td >20 </td>
            <td >21 </td>
          </tr>
          <tr>
            <td >22 </td>
            <td >23 </td>
            <td >24 </td>
            <td >25 </td>
            <td >26 </td>
            <td >27 </td>
            <td >28 </td>
          </tr>
        </table>


        <!-- <div class="calendar">
            <h2 id="month">June</h2>
            <div class="row">
                <div class="col" id="row1">
                    S
                </div>

                <div class="col" id="row1">
                    M
                </div>

                <div class="col" id="row1">
                    T
                </div>

                <div class="col" id="row1">
                    W
                </div>

                <div class="col" id="row1">
                    T
                </div>

                <div class="col" id="row1">
                    F
                </div>

                <div class="col" id="row1">
                    S
                </div>
            </div>

            <div class="row">
                <div class="col" id="row2">
                    <span>Row 2</span>
                </div>

                <div class="col" id="row2">
                    <span> </span>
                </div>

                <div class="col" id="row2">
                    <span> </span>
                </div>

                <div class="col" id="row2">
                    <span> </span>
                </div>

                <div class="col" id="row2">
                    <span> </span>
                </div>

                <div class="col" id="row2">
                    <span> </span>
                </div>

                <div class="col" id="row2">
                    <span> </span>
                </div>
            </div>


            <div class="row">
                <div class="col" id="row3">
                    <span> Row 3 </span>
                </div>

                <div class="col" id="row3">
                    <span> </span>
                </div>

                <div class="col" id="row3">
                    <span> </span>
                </div>

                <div class="col" id="row3">
                    <span> </span>
                </div>

                <div class="col" id="row3">
                    <span> </span>
                </div>

                <div class="col" id="row3">
                    <span> </span>
                </div>

                <div class="col" id="row3">
                    <span> </span>
                </div>
            </div>


            <div class="row">
                <div class="col" id="row4">
                    <span> Row 4 </span>
                </div>

                <div class="col" id="row4">
                    <span> </span>
                </div>

                <div class="col" id="row4">
                    <span> </span>
                </div>

                <div class="col" id="row4">
                    <span> </span>
                </div>

                <div class="col" id="row4">
                    <span> </span>
                </div>

                <div class="col" id="row4">
                    <span> </span>
                </div>

                <div class="col" id="row4">
                    <span> </span>
                </div>
            </div>



            <div class="row">
                <div class="col" id="row5">
                    <span> Row 5 </span>
                </div>

                <div class="col" id="row5">
                    <span> </span>
                </div>

                <div class="col" id="row5">
                    <span> </span>
                </div>

                <div class="col" id="row5">
                    <span> </span>
                </div>

                <div class="col" id="row5">
                    <span> </span>
                </div>

                <div class="col" id="row5">
                    <span> </span>
                </div>

                <div class="col" id="row5">
                    <span> </span>
                </div>
            </div>


            <div class="row">
                <div class="col" id="row6">
                    <span> Row 6 </span>
                </div>

                <div class="col" id="row6">
                    <span> </span>
                </div>

                <div class="col" id="row6">
                    <span> </span>
                </div>

                <div class="col" id="row6">
                    <span> </span>
                </div>

                <div class="col" id="row6">
                    <span> </span>
                </div>

                <div class="col" id="row6">
                    <span> </span>
                </div>

                <div class="col" id="row6">
                    <span> </span>
                </div>
            </div>

        </div> -->

    </div>




</body>
@endsection
