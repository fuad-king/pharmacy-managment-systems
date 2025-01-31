<?php
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar'); 
?>
        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Stock</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item ">Stock</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row m-b-10"> 
                    <div class="col-12">
                        <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="<?php echo base_url();?>invantory/stock" class="text-white"><i class="" aria-hidden="true"></i> Add Medicine Stock</a></button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="<?php echo base_url();?>invantory/stock" class="text-white"><i class="" aria-hidden="true"></i> Manage Medicine Stock </a></button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="<?php echo base_url();?>invantory/Stock_out" class="text-white"><i class="" aria-hidden="true"></i> Out of Stock </a></button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="<?php echo base_url();?>invantory/Stock_expire_soon" class="text-white"><i class="" aria-hidden="true"></i> Soon Expire </a></button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="<?php echo base_url();?>invantory/Stock_expired" class="text-white"><i class="" aria-hidden="true"></i> Expired Medicine</a></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Manage Medicine Stock </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="myTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Medicine Name</th>
                                                <th>Generic Name</th>
                                                <th>Company</th>
                                                <th>Stock</th>
                                                <th>Sold Qty</th>
                                                <th>Selling Price</th>
                                                <th>Supplier Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach($stock as $value): ?>
                                            <tr>
                                                <td><?php echo $value->product_name?>(<?php echo $value->strength?>)</td>
                                                <td><?php echo $value->generic_name;  ?></td>
                                                <td><?php echo $value->s_name;  ?></td>
                                                <td><?php echo $value->instock;  ?></td>
                                                <td><?php echo $value->sale_qty;  ?></td>
                                                <td><?php echo $value->mrp;  ?></td>
                                                <td><?php echo $value->trade_price;  ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> ©  </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->

 
<?php 

    $this->load->view('backend/footer');

?>