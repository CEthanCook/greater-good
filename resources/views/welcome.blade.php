<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mill Village Farms</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            img {
  width: auto ;
  max-width: 50% ;
  height: auto;
}
        </style>
    </head>
    <body>
      @section ('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <img src="../img/MVF-farms-logo.png" alt="Mill Village Farms">
                </div>

                <div class="container">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">Login</div>

                                <div class="panel-body">
                                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                        {!! csrf_field() !!}

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="col-md-4 control-label">Password</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <!--  <div class="col-md-6 col-md-offset-4"> -->
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                    </label>
                                                </div>
                                        <!--    </div> -->
                                        </div>

                                        <div class="form-group">
                                          <!--   <div class="col-md-8 col-md-offset-4"> -->
                                                <button type="submit" class="btn btn-primary" >
                                                   <a href= '{{ URL::to('calendar') }}'> Login </a>
                                                </button>

                                                <button
                                                     type="button"
                                                     class="btn btn-link"
                                                     data-toggle="modal"
                                                     data-target="#resetModal">
                                                    Forgot Your Password?
                                                  </button>

                                                  <div class="modal fade" id="resetModal"
                                                       tabindex="-1" role="dialog"
                                                       aria-labelledby="resetModalLabel">
                                                    <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <button type="button" class="close"
                                                            data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                          <h4 class="modal-title"
                                                          id="favoritesModalLabel">Forgot Your Password</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                          <p>
                                                          Please confirm you would like to
                                                          <b><span id="fav-title">contact the adminstrator</span></b>
                                                          about resetting your password.
                                                          </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button"
                                                             class="btn btn-default"
                                                             data-dismiss="modal">Close</button>
                                                          <span class="pull-right">
                                                            <button type="button" class="btn btn-primary">
                                                              Reset My Password
                                                            </button>
                                                          </span>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                    <!--    </div> -->
                                    </form>
                                  </div>
                                </div>
                        </div>
                    </div>
                </div>
@endsection

            </div>
        </div>
        @extends('layouts.app')
    </body>
</html>
