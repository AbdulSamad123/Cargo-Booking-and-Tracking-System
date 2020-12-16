<?php
 $conn=mysqli_connect("localhost","root","","global");
if(isset($_POST['btn_track']))
{
	 $track=$_POST['txtveh'];

	session_start();
	$_SESSION['id']=$track;
	$insert=mysqli_query($conn,"Select * from booking where id='".$track."'");
	$num=mysqli_num_rows($insert);
	if($num > 0)
	{
        $date=date("Y-m-d");
        $sel=mysqli_fetch_array($insert);

        if($sel[19] > $date)
        {
		session_start();
		$_SESSION['id']=$track;
        header("location:track.php");
        }

        else
            {
                echo "<Script> alert('Consignment has been delivered');</script>";
            }
	}
	else
	{
   echo "<Script> alert('Not Exist Please Enter Valid number');</script>";
	}
  }
?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>        
        <!-- META SECTION -->
        <title>Tracking | Global Cargo Service </title>            
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
                    <div class="login-title"><strong>Track Your Shipment</strong></div>
                    <form class="form-horizontal" method="post" autocomplete="off">
                    <div class="form-group">
                        <div class="col-md-12">
						<input type="text" class="form-control"  name="txtveh" placeholder="Enter your tracking number">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 text-center">
						<input type="submit" class="btn btn-warning text-white px-4" name="btn_track" value="Track Now">                        
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

