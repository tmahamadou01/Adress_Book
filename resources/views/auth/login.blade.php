@extends('layouts.app')

@section('content')
    <div class="main">

        <div class="container">
            <center>
                <div class="middle">
                    <div id="login">

                        <form role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <fieldset class="clearfix">

                                <p ><span class="fa fa-user"></span><input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </p> <!-- JS because of IE support; better: placeholder="Username" -->
                                <p><span class="fa fa-lock"></span><input id="password" type="password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif</p> <!-- JS because of IE support; better: placeholder="Password" -->

                                <div>
                                    <span id="forget-pass" style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#">Mot de passe oublié ?</a></span>
                                    <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="CONNEXION"></span>
                                </div>
                                <br>
                                <div>
                                    <span id="register_link">vous n'avez pas encore de compte ? <a href="{{route('register')}}">Inscrivez vous</a></span>
                                </div>

                            </fieldset>
                            <div class="clearfix"></div>
                        </form>

                        <div class="clearfix"></div>

                    </div> <!-- end login -->
                    <div class="logo"><img src="{{asset('img/calliweb.jpeg')}}" alt="">

                        <div class="clearfix"></div>
                    </div>

                </div>
            </center>
        </div>

    </div>
@endsection
