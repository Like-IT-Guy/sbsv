<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css'?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url().'assets/admin/vendors/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url().'assets/admin/vendors/nprogress/nprogress.css'?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url().'assets/admin/vendors/animate.css/animate.min.css'?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url().'assets/admin/build/css/custom.min.css'?>" rel="stylesheet">



<!-- Login Ajax -->

        <script src="<?php echo base_url().'assets/admin/js/jquery-1.11.1.min.js'?>"></script>



        <script src="<?php echo base_url().'assets/admin/js/bootstrap.min.js'?>"></script>



        <script src="<?php echo base_url().'assets/admin/js/jquery-ui.js'?>"></script>



        <link href="<?php echo base_url().'assets/admin/css/bootstrap.min.css'?>" type="text/css" rel="stylesheet"/>

    <!--  Login Ajax-->





         <style>



            #response{display: none}



        </style>




  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="frm_login" role="form" action="<?php echo base_url() ?>UserAuth/login" method="POST">
              <h1>User Login Form</h1>

              <p class="alert alert-danger" id="response"><b>INVALID USER NAME OR PASSWORD</b></p>

              <div>

                <input type="text" class="form-control" placeholder="Username" name="user_name" required="" />

              </div>

              <div>

                <input type="password" class="form-control" placeholder="Password" name="user_password" required="" />

              </div>

              <div>

               <!--  <a class="btn btn-default submit" type="submit" >Log in</a> -->

                <input style="margin-left:0px;" type="submit" class="btn btn-info btn-block" value="submit">
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!-- <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p> -->

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-hashtag"></i>Admin Login</h1>
                  <p>©2017 All Rights Reserved. Developed By <a href="https://-Step Visas</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-hashtag"></i>Admin Signup</h1>
                 <p>©2017 All Rights Reserved. Developed By <a href="https://pk.linkedin.com/in/muhammadosamaaslam">Muhammad Osama Aslam</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>


<script>

        $(document).ready(function (){

            $("#frm_login").submit(function (e){

                e.preventDefault();

                var url = $(this).attr('action');

                var method = $(this).attr('method');

                var data = $(this).serialize();

                

                $.ajax({

                   url:url,

                   type:method,

                   data:data

                }).done(function(data){

                   if(data !=='')

                    {

                        $("#response").show('fast');

                        $("#response").effect( "shake" );

                        $('#frm_login')[0].reset();

                    }

                    else

                    {

                    window.location.href='<?php echo base_url() ?>User';

                    throw new Error('go');

                    } 

                });

            });

            

            $( "div" ).each(function( index ) {

            var cl = $(this).attr('class');

            if(cl =='')

                {

                    $(this).hide();

                }

            });

            

        });

      </script>




</html>
