
<div class="form-horizontal h ">
    <p><b>Login to your Account</b></p><br/>

    <form role="form" method="POST" action="{{ url('/login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
            <input id="username" type="text" value="{{ old('username') }}" class="form-control" name="username" required autofocus>
            @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" value="{{ old('password') }}" type="password" class="form-control" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary"> Login </button><br/>
            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                Forgot Your Password?
            </a>
        </div>
    </form>
    <div class="foot text-center" style="position:absolute; bottom:0; opacity:0.6; font-size:10pt; padding:20px;">
        <span>&copy;<?php echo date("Y");?> Hive Technologies Ltd</span>
    </div>
</div>