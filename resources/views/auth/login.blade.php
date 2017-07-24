@extends('layouts.app')

@section('content')
    <div class="be-wrapper be-login be-signup">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading">
                            <a href="{{ url('/') }}"><img src="{{ asset('dashboard/assets/img/logo-xx.png') }}" alt="logo" width="102" height="27" class="logo-img"></a>
                            <span class="splash-description">Continue with us and keep enjoying the best services.</span>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('login') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="text" placeholder="email" name="email" autocomplete="off" class="form-control">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" name="password" placeholder="Password" class="form-control">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group row login-tools">
                                    <div class="col-xs-6 login-remember">
                                        <div class="be-checkbox">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="remember">
                                            <label for="remember" >Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 login-forgot-password"><a href="{{ route('password.request') }}">Forgot Password?</a></div>
                                </div>
                                <div class="form-group login-submit">
                                    <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Sign me in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="splash-footer"><span>Don't have an account? <a href="{{ url('register') }}">Sign Up</a></span></div>
                </div>
            </div>
        </div>
    </div>
@endsection
