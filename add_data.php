<?php 
include "connection.php";
$obj=new functions();
$obj->con();
if(isset($_POST['sub']))
{
	$obj->book_data($_POST['txtsenname'],$_POST['txtsennum'],$_POST['txtsenadd'],$_POST['txtsenemail'],$_POST['txtrecname'],$_POST['txtrecnum'],$_POST['txtrecadd'],$_POST['txtrecemail'],$_POST['txtname'],$_POST['txtship'],$_POST['txtpack'],$_POST['txtquan'],$_POST['txtweig'],$_POST['txtpro'],$_POST['txtorg'],$_POST['txtdes'],$_POST['txtveh'],$_POST['txtdate'],$_POST['txtddate'],$_POST['txttime'],$_POST['txtamt'],$_POST['txtmode']);
}

?>
<!doctype html>
<html lang="en">
<?php include "include/head.php";?>

<body>
<div class="wrapper">
<?php include "include/sidebar.php";?>
<div class="content">
                
 <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3 class="text-center text-warning">Consignment Booking</h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body w-75 mx-auto">
                        <form class="form-inline" autocomplete="off" method="post">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-lg-12 col-md-12 col-12 w-50">
                          <h3 class="text-center text-warning">Sender Detail</h3>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 w-50">
                        <div class="form-group">
                          <label for="text">Sender Name :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="text" class="form-control" name="txtsenname" placeholder=" Enter Sender Name" required>
                        </div> <br>
                        <div class="form-group">
                            <label for="text">Sender Address :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control" name="txtsenadd" placeholder="Enter Address" required>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 w-50">
                        <div class="form-group">
                            <label for="email">Email address :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="email" class="form-control" name="txtsenemail" placeholder="Enter email" required>
                          </div><br>
                        <div class="form-group">
                          <label for="number">Phone Number :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="number" class="form-control" name="txtsennum" placeholder="Enter Phone Number" required>
                        </div>
                          </div>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <div class="col-lg-12 col-md-12 col-12 w-50">
                          <h3 class="text-center text-warning">Receiver Detail</h3>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 w-50">
                        <div class="form-group">
                          <label for="text">Receiver Name :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="text" class="form-control" name="txtrecname" placeholder=" Enter Sender Name" required>
                        </div> <br>
                        <div class="form-group">
                            <label for="text">Receiver Address :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control" name="txtrecadd" placeholder="Enter Address" required>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 w-50">
                        <div class="form-group">
                            <label for="email">Email address :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="email" class="form-control" name="txtrecemail" placeholder="Enter email" required>
                          </div><br>
                        <div class="form-group">
                          <label for="number">Phone Number :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="number" class="form-control" name="txtrecnum" placeholder="Enter Phone Number" required>
                        </div>
                          </div>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <div class="col-lg-12 col-md-12 col-12 w-50">
                          <h3 class="text-center text-warning">Consignment Detail</h3>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 w-50">
                        <div class="form-group">
                          <label for="text">Agent Name :   </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="text" class="form-control"  name="txtname" placeholder="Agent Name">
                        </div> 
                        <br>
                        <div class="form-group">
                            <label for="text">Packages :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                            <input type="text" class="form-control"  name="txtpack" placeholder="Packages"required>
                          </div>
                          <br>
                          <div class="form-group">
                          <label for="text">Weight :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="text" class="form-control"  name="txtweig" placeholder="Weight" required>
                        </div>
                        <br>
                        <div class="form-group">
                        <label for="text">Product :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" class="form-control"  name="txtpro" placeholder="Product" required>  
                          </div>
                          <br>
                          <div class="form-group">
                          <label for="number">Destination :  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="text" class="form-control"  name="txtdes" placeholder="Destination" required>
                        </div>
                        <br>
                        <div class="form-group">
                        <label for="text">Time :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control "  name="txttime" placeholder="Time" required>
                          </div>
                          <br>
                          <div class="form-group">
                          <label for="text">Amount :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="text" class="form-control"  name="txtamt" placeholder="Amount" required>
                        </div> 
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 w-50">
                        <div class="form-group">
                        <label for="text">Shipment Type :</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="txtship" class="form-control" required>
                                    <option selected>Type of shipment--->></option> 
                                    <option value="By Air">By Air</option>
                                    <option value="By Sea">By Sea</option>
                                </select>
                          </div>
                          <br>
                        <div class="form-group">
                          <label for="number">Quantity :  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="text" class="form-control"  name="txtquan" placeholder="Quantity" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="text">Origin :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control"  name="txtorg" placeholder="Origin" required>
                          </div>
                          <br>
                          <div class="form-group">
                          <label for="text">Vehicle :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="text" class="form-control"  name="txtveh" placeholder="Vehicle No" required>
                        </div>
                        <br>
                        <div class="form-group">
                        <label for="text">Date :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="date" class="form-control"  name="txtdate" placeholder="Origin" required>
                          </div>
                          <br>
                          <div class="form-group">
                          <label for="number">Delivery Date :  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="date" class="form-control"  name="txtddate" placeholder="Destination" required>
                        </div>
                        <br>
                        <div class="form-group">
                        <label for="text">Payment Mode :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="txtmode" class="form-control" required>
                                    <option selected>Payment Method-->></option>
                                    <option value="Cash">Cash</option>
                                    <option value="Cheque">Cheque</option>
                                </select>
                       </div>  
                          </div>
                        <div class="col-lg-8 col-md-8 col-12 w-75">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="form-group">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                <button type="submit" class="btn btn-primary mb-5"  name="sub">Submit</button>
                                </div>
                                </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
        
        <?php include "include/footer.php";?>      
