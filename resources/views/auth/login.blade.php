@extends('app')

@section('content')
    <div class="auth-banner"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" id="signup">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <img src="logo" alt="Whizzspace Logo"
                                     style="height: 96px; margin-bottom: 15px"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <a class="btn btn-facebook text-uppercase btn-huge btn-block" href="#">
                                    Login Up With Facebook
                                </a>
                            </div>
                        </div>
                        <hr/>
                        @if(count($errors) > 0)
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <form class="form clearfix" role="form" method="POST"
                                  action="{{ url('/auth/register') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" name="username"
                                               value="{{ old('username') }}" placeholder="username or email">
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control input-lg" name="password"
                                               placeholder="password">
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-huge btn-block text-uppercase"
                                                type="submit"> Sign In </button>
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <small class="pull-left text-uppercase">
                                        <a class="text-link" href="{{ url('/password/email') }}">Forgot Password?</a>
                                    </small>
                                    <small class="pull-right text-uppercase">
                                        New Here? <a class="text-link" href="{{ url('/auth/login') }}">Sign In</a>
                                    </small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
