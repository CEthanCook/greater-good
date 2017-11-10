
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
      <div class="form-group">
        <div class="ButtonContainer">
          <div class="col-lg-4">
            <button class="btn btn-primary" id="create"> Create New Schedule </button>
          </div>
          <div class="col-lg-4">
            <button class="btn btn-primary" id="make"> Edit Schedule</button>
          </div>
          <div class="col-lg-4">
            <button class="btn btn-primary" id="students"> Manage Students</button>
          </div>
        </div>
          <h1><center>November </center></h1>
        <table style = "margin-top: 20px;" class="words">
          <tr>
            <td class="words col-md-1"> </td>
            <td class="words" > </td>
            <td class="words">0 </td>
            <td class="words" >1 </td>
            <td class="words" >2 </td>
            <td class="words" >3 </td>
            <td class="words" >4 </td>
          </tr>
          <tr>
            <td class="words" >5 </td>
            <td class="words" >6 </td>
            <td class="words" >7 </td>
            <td class="words" >8 </td>
            <td class="words" >9 </td>
            <td class="words" >10 </td>
            <td class="words" >11 </td>
          </tr>
          <tr>
            <td class="words" >12 </td>
            <td class="words" >13 </td>
            <td class="words" >14 </td>
            <td class="words" >15 </td>
            <td class="words" >16 </td>
            <td class="words" >17 </td>
            <td class="words" >18 </td>
          </tr>
          <tr>
            <td class="words" >19 </td>
            <td class="words" >20 </td>
            <td class="words" >21 </td>
            <td class="words" >22 </td>
            <td class="words" >23 </td>
            <td class="words" >24 </td>
            <td class="words" >25 </td>
          </tr>
          <tr>
            <td class="words" >26 </td>
            <td class="words" >27 </td>
            <td class="words" >28 </td>
            <td class="words" >29 </td>
            <td class="words" >30</td>
            <td class="words" ></td>
            <td class="words" ></td>
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
</div>



</body>
@endsection
