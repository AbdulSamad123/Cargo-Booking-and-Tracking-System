<?php

class functions
 {
    function con()
    {
        session_start();
        $conn = $_SESSION['conn'] = mysqli_connect( 'localhost', 'root', '', 'global' );
    }

    function book_data( $Sen_name, $Sen_num, $Sen_Address, $Sen_email ,$Rec_name, $Rec_num, $Rec_Address, $Rec_email, $name, $type, $packages, $quantity, $weight, $product, $origin, $destination, $vehicle, $Date, $Deldate, $time, $amount, $amtmet )
 {
        $conn = $_SESSION['conn'];
        $id=rand(10000000,50000000);
        echo "<script> alert($id); </script>";
        $insert = mysqli_query( $conn, "insert into booking values('$id','$Sen_name','$Sen_num','$Sen_Address','$Sen_email','$Rec_name','$Rec_num','$Rec_Address','$Rec_email','$name','$type','$packages','$quantity','$weight','$product','$origin','$destination','$vehicle','$Date','$Deldate','$time','$amount','$amtmet');" );
        if ( $insert )
 {
            echo "<script> alert('Shipment Booked'); </script>";
        }
    }
    function client()
     {
    $conn=$_SESSION['conn'];
    $insert=mysqli_query($conn,"select * from client");
    $num=mysqli_num_rows($insert);
    $count=0;
    for($i=0; $i<$num; $i++)
    {
        $count=$count+1;
    }
    echo $count;
    } 
    function contact()
	{
		$conn=$_SESSION['conn'];
		$insert=mysqli_query($conn,"select * from contact");
		$num=mysqli_num_rows($insert);
		$count=0;
		for($i=0; $i<$num; $i++)
		{
			$count=$count+1;
		}
		echo $count;
    }
    function adm()
	{
		$conn=$_SESSION['conn'];
		$insert=mysqli_query($conn,"select * from login");
		$num=mysqli_num_rows($insert);
		$count=0;
		for($i=0; $i<$num; $i++)
		{
			$count=$count+1;
		}
		echo $count;
	}
    function booking()
	{
		$conn=$_SESSION['conn'];
		$insert=mysqli_query($conn,"select * from booking");
		$num=mysqli_num_rows($insert);
		$count=0;
		for($i=0; $i<$num; $i++)
		{
			$count=$count+1;
		}
		echo $count;
	}


    function view_data()
    {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from contact' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
        {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo '<td>' . $row[4] . '</td>';
            echo '</tr>';
        }

    }

    function see_data()
 {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from client' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
 {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo '<td>' . $row[4] . '</td>';
            echo '<td>' . $row[5] . '</td>';
            echo '<td>' . $row[6] . '</td>';
            echo '<td>' . $row[7] . '</td>';
            echo '</tr>';
        }
    }

    function user_data()
 {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from login' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
 {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo '</tr>';
        }
    }

    function review_data()
 {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from booking' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
 {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo '<td>' . $row[4] . '</td>';
            echo "<td class='text-warning'>" . '<a href="edit1.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="delete.php?id='.$row[0].'"><i class="fas fa-trash"></i> </a>' . '</td>';
            echo '</tr>';
        }

    }

    function review1_data()
 {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from booking' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
 {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[5] . '</td>';
            echo '<td>' . $row[6] . '</td>';
            echo '<td>' . $row[7] . '</td>';
            echo '<td>' . $row[8] . '</td>';
             echo "<td class='text-warning'>" . '<a href="edit1.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="delete.php?id='.$row[0].'"><i class="fas fa-trash"></i> </a>' . '</td>';
            echo '</tr>';
        }

    }

    function bookview_data()
 {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from booking' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
 {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[9] . '</td>';
            echo '<td>' . $row[10] . '</td>';
            echo '<td>' . $row[11] . '</td>';
            echo '<td>' . $row[12] . '</td>';
            echo '<td>' . $row[13] . '</td>';
            echo '<td>' . $row[14] . '</td>';
            echo '<td>' . $row[15] . '</td>';
            echo '<td>' . $row[16] . '</td>';
            echo '<td>' . $row[17] . '</td>';
            echo '<td>' . $row[18] . '</td>';
            echo '<td>' . $row[19] . '</td>';
            echo '<td>' . $row[20] . '</td>';
            echo '<td>' . $row[21] . '</td>';
            echo '<td>' . $row[22] . '</td>';
            echo "<td class='text-warning'>" . '<a href="edit1.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a>'. '</td>';
            echo '</tr>';
        }

    }

    function delete()
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $select = mysqli_query($conn,"delete from booking where id='$id'");
        if ($select)
        {
            # code...
                echo "<script> alert('Data Deleted');</script>";
                header("location:booking_detail.php");
        }
                
    }

    function edit($Sen_name, $Sen_num, $Sen_Address, $Sen_email, $Rec_name, $Rec_num, $Rec_Address, $Rec_email,$name, $type, $packages, $quantity, $weight, $product, $origin, $destination, $vehicle, $Date, $Deldate, $time, $amount, $amtmet )
    {
            $conn = $_SESSION['conn'];
            $id = $_POST['id'];
            $Sen_name = $_POST['txtsenname'];
            $Sen_num = $_POST['txtsennum'];
            $Sen_Address = $_POST['txtsenadd'];
            $Sen_email = $_POST['txtsenemail'];
            $Rec_name = $_POST['txtrecname'];
            $Rec_num = $_POST['txtrecnum'];
            $Rec_Address = $_POST['txtrecadd'];
            $Rec_email = $_POST['txtrecemail'];
            $name = $_POST['txtname'];
            $type = $_POST['txtship'];
            $packages = $_POST['txtpack'];
            $quantity = $_POST['txtquan'];
            $weight = $_POST['txtweig'];
            $product = $_POST['txtpro'];
            $origin = $_POST['txtorg'];
            $destination = $_POST['txtdes'];
            $vehicle = $_POST['txtveh'];
            $Date = $_POST['txtdate'];
            $Deldate = $_POST['txtddate'];
            $time = $_POST['txttime'];
            $amount = $_POST['txtamt'];
            $amtmet = $_POST['txtmode'];
            $insert = mysqli_query( $conn, "update booking set Sen_name='".$Sen_name."', Sen_num='".$Sen_num."', Sen_Address='".$Sen_Address."', Sen_email='".$Sen_email."',Rec_name='".$Rec_name."', Rec_num='".$Rec_num."', Rec_Address='".$Rec_Address."', Rec_email='".$Rec_email."' , name='".$name."', type='".$type."', packages='".$packages."', quantity='".$quantity."',weight='".$weight."', product='".$product."', origin='".$origin."', destination='".$destination."', vehicle='".$vehicle."',Date='".$Date."', Deldate='".$Deldate."', amount='".$amount."', amtmet='".$amtmet."'  where id='".$id."'" );
            if ( $insert )
            {
                echo "<script> alert('Data Updated'); </script>";
                echo "<script> window.location.assign('booking_detail.php'); </script>";
            } 
            else
             {
                echo 'Data could not Updated';
            }
    }

    function login( $email, $pass )
 {
        $conn = $_SESSION['conn'];
        $insert = mysqli_query( $conn, "select * from login where Email='".$email."' AND Password='".$pass."'" );
        $num = mysqli_num_rows( $insert );
        if ( $num > 0 )
       {
            $_SESSION['email'] = $email;
            header( 'location:dashboard.php' );

        }
    }

 }
?>