<div class="form-horizontal h ">
    <p><b>Login to your Account</b></p>
        <br/>
        <!--<label>Email</label>-->
        <form action="../" method="post" role="form">
            {{ csrf_field() }}

            <div class="form-group">
                <div>
                    <!-- <input type="hidden" name="token" value="login" /> -->
                    <input type="text" name="username" class="form-control" placeholder="username" required />
                </div>
            </div>
            <div class="form-group">
                <div>
                    <input type="password" name="password" class="form-control" placeholder="password" required/>
                    <a href="#" class="text-primary"><small>Forgot password?</small></a>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-primary">Login</button>
        </form>
</div>
<div class="foot text-center" style="position:absolute; bottom:0; opacity:0.6; font-size:10pt; padding:20px;">
    <span>&copy;<?php echo date("Y");?> Hive Technologies Ltd</span>
</div>