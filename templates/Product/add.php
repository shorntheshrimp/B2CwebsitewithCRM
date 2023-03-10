<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var \Cake\Collection\CollectionInterface|string[] $category
 */
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Item</title>
    <meta name="description" content="">
    <?= $this->Html->meta(array(
        'rel' => 'shortcut icon',
        'type' => "image/x-icon",
        'link' => '/img/hemporticon.ico',
    )); ?>


    <!-- Custom fonts for this template-->
    <?= $this->Html->css('fontawesome-free/css/all.min.css') ?>

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <?= $this->Html->css('sb-admin-3.css') ?>


</head>

    <body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= $this->Url->build(['controller' => 'home', 'action'=>'#']); ?>">
            <?= $this->Html->image('Hemporticonwhite.ico'); ?>
            <div class="sidebar-brand-text mx-3">Hemport </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->

        <!--        <li class="nav-item active">-->
        <!--            <a class="nav-link" href="$this->Url->build(['controller' => 'dashboard', 'action'=>'index']); ?>">-->
        <!--                <i class="fas fa-fw fa-tachometer-alt"></i>-->
        <!--                <span>Dashboard</span></a>-->
        <!--        </li>-->

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link " href="<?= $this->Url->build(['controller' => 'seller', 'action'=>'edit']); ?>" >
                <span>User Profile</span>
            </a>

        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
               aria-expanded="true" aria-controls="collapseUtilities">
                <span>Items</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Item Utilities</h6>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller' => 'product', 'action'=>'index']); ?>">View Item</a>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller' => 'product', 'action'=>'add']); ?>">List Item</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - View orders made by buyers -->
        <li class="nav-item">
            <a class="nav-link " href="<?= $this->Url->build(['controller' => 'orderplaced', 'action'=>'index2']); ?>" >
                <span>View Orders</span>
            </a>

        </li>

        <!-- Nav Item - Pages Collapse Menu -->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"-->
<!--               aria-expanded="true" aria-controls="collapsePages">-->
<!---->
<!--                <span>Manage Delivery</span>-->
<!--            </a>-->
<!---->
<!--        </li>-->

        <!-- Nav Item - Charts -->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">





    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>


                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome back, <?= $username ?>!</span>
                           
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= $this->Url->build(['controller' => 'seller', 'action'=>'edit']); ?>">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= $this->Url->build(['controller' => 'users', 'action'=>'logout']); ?>" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href= "<?= $this->Url->build(['controller' => 'users', 'action'=>'deleteseller']); ?>" data-toggle="modal" data-target="#deleteModal">
                                <i class="fas fa-ban fa-sm fa-fw mr-2 text-gray-400"></i>
                                Delete Account
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">List New Item</h1>

                </div>

                <!-- Content Row -->
                <div class="column-responsive column-80">
                    <div class="seller form content">
                        <?= $this->Form->create($product,['type'=>'file']) ?>
                        <fieldset>
                            <?php
                            echo $this->Form->control('name',['label'=>'Product Name(*)']);
                            echo "Availability(*)";
                            echo $this->Form->select('availability',['Yes'=>'Yes','No'=>'No'],['style'=>'margin-left:81px']);
                            echo $this->Form->control('price',['label'=>'Price($)(*)']);
                            ?>
                        </fieldset>

                        <div class="row" style="margin-left:0.8px">
                            <?php
                            echo 'Description(*)';
                            echo $this->Form->textarea('description',['style'=>'margin-left:79px; margin-bottom:6px; width:194px']);
                            ?>
                        </div>

                        <fieldset>
                            <?php
                            echo $this->Form->control('amount',['label'=>'Amount(*)']);
                            echo $this->Form->control('image_file',['type'=>'file','label'=>'image1_file(*)']);
                            ?>
                        </fieldset>

                        <div class="row" style="margin-left:0.8px">
                            <?php
                            echo 'Image1 Description(*)';
                            echo $this->Form->textarea('image1des',['style'=>'margin-left:21px; margin-bottom:6px; width:194px']);
                            ?>
                        </div>

                        <fieldset>
                            <?php
                            echo $this->Form->control('image_file2',['type'=>'file']);
                            ?>
                        </fieldset>

                        <div class="row" style="margin-left:0.8px">
                            <?php
                            echo 'Image2 Description';
                            echo $this->Form->textarea('image2des',['style'=>'margin-left:38px; margin-bottom:6px; width:194px']);
                            ?>
                        </div>

                        <fieldset>
                            <?php
                            echo $this->Form->control('image_file3',['type'=>'file']);
                            ?>
                        </fieldset>

                        <div class="row" style="margin-left:0.8px">
                            <?php
                            echo 'Image3 Description';
                            echo $this->Form->textarea('image3des',['style'=>'margin-left:38px; margin-bottom:6px; width:194px']);
                            ?>
                        </div>

                        <fieldset>
                            <?php
                            echo $this->Form->control('image_file4',['type'=>'file']);
                            ?>
                        </fieldset>

                        <div class="row" style="margin-left:0.8px">
                            <?php
                            echo 'Image4 Description';
                            echo $this->Form->textarea('image4des',['style'=>'margin-left:38px; margin-bottom:6px; width:194px']);
                            ?>
                        </div>

                        <?= $this->Form->button(__('Submit'),['style'=>'margin-left:-2px']) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">



                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->

                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">??</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= $this->Url->build(['controller' => 'users', 'action'=>'logout']); ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Modal-->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 155px;">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">??</span>
                        </button>
                    </div>
                    <div class="modal-body" style="margin-left: 25px;">Select "Delete" below if you are ready to end your current session. <p style='font-size:14px'>*Your account cannot be recovered after deletion, any subsequent listings will be deleted too.</p></div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" style="align:left"type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= $this->Url->build(['controller' => 'users', 'action'=>'deleteseller']); ?>">Delete</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <?= $this->Html->script('vendor/jquery/jquery.min.js') ?>
        <?= $this->Html->script('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>
        <?= $this->Html->script('vendor/jquery-easing/jquery.easing.min.js') ?>
        <?= $this->Html->script('sb-admin-2.min.js') ?>


        <?= $this->Html->script('vendor/chart.js/Chart.min.js') ?>
        <?= $this->Html->script('demo/chart-area-demo.js') ?>
        <?= $this->Html->script('demo/chart-pie-demo.js') ?>

</body>

</html>



