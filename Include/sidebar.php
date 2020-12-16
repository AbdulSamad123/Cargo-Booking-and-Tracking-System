<?php 
$conn=mysqli_connect("localhost","root","","global");
$email=$_SESSION['email'];
$sel=mysqli_query($conn,"select * from login where Email='".$email."'");
$fetch=mysqli_fetch_array($sel);

?>
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="assets/img/logo.png" alt="bootraper logo" class="app-logo">
                <a ><span class="text-warning p-2" style="font-size: 20px;">Global Cargo</a> 
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="add_data.php"><i class="fas fa-user-plus"></i>Add Consignment </a>
                </li>
                <li>
                    <a href="#authmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-database"></i> Show Consignment</a>
                    <ul class="collapse list-unstyled" id="authmenu">
                        <li>
                            <a href="sender.php"><i class="fas fa-user"></i>Sender Detail</a>
                        </li>
                        <li>
                            <a href="receiver.php"><i class="fas fa-user"></i>Receiver Detail</a>
                        </li>
                        <li>
                            <a href="Booking_detail.php"><i class="fas fa-user-lock"></i>Consignment Booking</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="quotation.php"><i class="fas fa-icons"></i>Quotation</a>
                </li>
                <li>
                            <a href="contact.php"><i class="fas fa-user-shield"></i> Contact</a>
                        </li>
                <li>
                    <a href="admin.php"><i class="fas fa-user-friends"></i>Admins</a>
                </li>
            </ul>
        </nav>

        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
                <button type="button" id="sidebarCollapse" class="btn btn-outline-warning default-warning-menu"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> <span><?php echo $fetch[1];?></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                        <li><a href="change_pass.php" class="dropdown-item"><i class="fas fa-key"></i> Change password</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>