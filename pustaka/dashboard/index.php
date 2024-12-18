<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('components/style.php'); ?>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <?php include('components/topnav.php'); ?>
                <!-- LOGO -->
                <?php include('components/logo.php'); ?>

                <?php include('components/search.php'); ?>
            </div>
            <!-- end Topbar -->

            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <?php include('components/sidemenu.php'); ?>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <?php
                            $page = $_REQUEST['page'];
                            include($page.'.php'); 
                        ?>
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

                <!-- Footer Start -->
                <?php include('components/footer.php'); ?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        
        <?php include('components/script.php'); ?>
        
    </body>
</html>