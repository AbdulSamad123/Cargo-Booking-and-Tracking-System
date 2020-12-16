<?php
include "connection.php";
$obj=new functions();
$obj->con();
$conn = $_SESSION['conn'];
$C=$_SESSION['email'];
if(isset($_POST['change_pass']))
{
    $old_pass=$_POST['old_pass'];
    $new_pass=$_POST['new_pass'];
    $Cnew_pass=$_POST['Cnew_pass'];
         
    $run_real_pass = mysqli_query( $conn,"select * from login where password='$old_pass'");
    $check_pass = mysqli_num_rows($run_real_pass);
    if($check_pass==0)
    {
       echo"<script>alert('Your current Password is not valid')</script>";
    exit();
    }
         if($new_pass!=$Cnew_pass)
           {
             echo"<script>alert('New password did not match')</script>";
         exit(); 
           }
         else
           {
            $update_pass = mysqli_query( $conn,"update login set password='$new_pass' where email='$C'");
            $run_pass=mysqli_query($update_pass);

            echo"<script>alert('Your password has been succesfully Changed')</script>";
            echo"<script>window.open('login.php','_self')</script>";
            }
}   

?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>        
        <!-- META SECTION -->
        <title>Change Password | Global Cargo Service </title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="images/favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome to Admin Penal</strong>, Change Password</div>
                    <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Old Password" name="old_pass"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="New Password" name="new_pass"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Confirm New password" name="Cnew_pass"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
						<button type="submit" class="btn btn-block btn-warning text-white py-3 px-5" name="change_pass">Change Password</button>
                       </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy;  2020| Global Cargo Services                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>





