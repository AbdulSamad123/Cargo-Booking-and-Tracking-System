<?php
include "connection.php";
$obj =new functions();
$obj->con();

?>
<!doctype html>
<html lang="en">
<?php include "include/head.php";?>
<body>
    <div class="wrapper">
    <?php include "include/sidebar.php";?>
      
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3 class="text-center text-warning">Booking Details</h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th> Company Name</th>
                                        <th>Type of Shipment</th>
                                        <th>Packages</th>
                                        <th>Quantity</th>
                                        <th>Weight</th>
                                        <th>Product</th>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th>Vehicle</th>
                                        <th>Date</th>
                                        <th>Delivery Date</th>
                                        <th>Time</th>
                                        <th>Amount</th>
                                        <th>Payment method</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $obj->bookview_data();?>
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include "include/footer.php";?>