
@extends('layouts.app')

@section('content')
<head>
    <title>Mill Village Farms </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="StyleSheet1.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
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
        <div class="month">
          <ul>
            <li class="prev">&#10094;</li>
            <li class="next">&#10095;</li>
            <li>
              August<br>
              <span style="font-size:18px">2017</span>
            </li>
          </ul>
        </div>

        <ul class="weekdays">
          <li>Mo</li>
          <li>Tu</li>
          <li>We</li>
          <li>Th</li>
          <li>Fr</li>
          <li>Sa</li>
          <li>Su</li>
        </ul>

        <ul class="days">
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
          <li><span class="active">10</span></li>
          <li>11</li>
          <li>12</li>
          <li>13</li>
          <li>14</li>
          <li>15</li>
          <li>16</li>
          <li>17</li>
          <li>18</li>
          <li>19</li>
          <li>20</li>
          <li>21</li>
          <li>22</li>
          <li>23</li>
          <li>24</li>
          <li>25</li>
          <li>26</li>
          <li>27</li>
          <li>28</li>
          <li>29</li>
          <li>30</li>
          <li>31</li>
        </ul>

        <h3> February </h3>
        <table style = "margin-top: 20px;">
          <tr>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">1 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">2 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">3 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">4 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">5 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">6 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">7 </td>
          </tr>
          <tr>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">8 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">9 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">10 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">11 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">12 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">13 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">14 </td>
          </tr>
          <tr>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">15 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">16 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">17 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">18 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">19 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">20 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">21 </td>
          </tr>
          <tr>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">22 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">23 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">24 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">25 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">26 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">27 </td>
            <td style="border-style: solid; padding-left: 150px; padding-bottom: 100px;">28 </td>
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
