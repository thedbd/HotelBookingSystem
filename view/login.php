<div class="container ">
        <h3 class="text-center mt-5 ">Login</h3>

        
        <p class="text-center ">        <?php

if(isset($_GET['rf'])){$rf = $_GET['rf'];
    if($rf=="reservation"){
        echo "You must login first";
    }else{
        echo "Enter your email and password";
    }}?> </p>
        <hr width="300px " style="border:1px solid red; ">
        <div class="mt-5">
            <form action="" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-4">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="email" name ="email" class="form-control" id="inputEmail4" placeholder="Enter Email">
                    </div>
                    <div class="form-group col-md-4">
                    </div>
                    <div class="form-group col-md-4">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="form-group col-md-4">
                    </div>
                    <div class="form-group col-md-4">
                    </div>
                    <div class="form-group col-md-0.1">
                        <input type="submit" class="btn btn-prime btn-lg" value="Login" />
                    </div>
                    <div class="form-group col-md-4">
                        <a href="#">Forgot Password</a>
                    </div>
                    <div class="form-group col-md-4">
                    </div>
                    <div class="form-group col-md-4">
                        Don't have an account! <a href="guest_signup.html">Sign up Here</a>
                    </div>
                    <div class="form-group col-md-4">

                    </div>
                </div>
            </form>
        </div>
    </div>