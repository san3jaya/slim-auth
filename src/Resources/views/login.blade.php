@extends('layout.auth-master',['headerName'=>'Authenticationtion','smallDescription'=>'Authenticationtion'])
@section('body-content')
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        @include('errors.messages')
        {!! Form::open(['method'=>'post']) !!}

        <div class="form-group has-feedback {{ $errors->has('username') ? ' has-error' : '' }}">
            {!! Form::text('username',null,['class'=>'form-control','placeholder'=>'Username']) !!}
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
            {!! Form::password('password',['class'=>'form-control','placeholder'=>'Password' ]) !!}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group has-feedback {{ $errors->has('company') ? ' has-error' : '' }}">
            <select class="form-control ui dropdown" name="company" id="company"></select>
            @if ($errors->has('company'))
                <span class="help-block">
                    <strong>{{ $errors->first('company') }}</strong>
                </span>
            @endif
        </div>

        <div class="row">
            <div class="col-xs-4">
                {!! Form::submit('Sign In',['class'=>'btn btn-primary btn-block btn-flat']) !!}
            </div>
        </div>

        {!! Form::close() !!}
        <div class="margin-t-5">
            <a href="#">I forgot my password</a><br>
            <a href="register.html" class="text-center">Request a new membership</a>
        </div>
    </div>
@endsection
@section('after-script')
    <script>
        $('select').dropdown();
    </script>
@endsection