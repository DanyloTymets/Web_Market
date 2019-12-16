<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }else{
?> 
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Dashboard </h1> 
        <!--<ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-th-list"></i> Dashboard 
            </li>
        </ol>-->
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-color">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i> 
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> 17 </div> 
                        <div> Products </div> 
                    </div>
                </div>
            </div>
            <a href="index.php?view_products">
                <div class="panel-footer">
                    <span class="pull-left">
                        View Details 
                    </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    <div class="clearfix"></div> 
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-color">
            <div class="panel-heading"> 
                <div class="row"> 
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i> 
                    </div>
                    <div class="col-xs-9 text-right"> 
                        <div class="huge"> 7 </div> 
                        <div> Customers </div> 
                    </div>
                </div> 
            </div>
            <a href="index.php?view_customers"> 
                <div class="panel-footer">
                    <span class="pull-left"> 
                        View Details 
                    </span>
                    <span class="pull-right">  
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    <div class="clearfix"></div> 
                </div> 
            </a> 
        </div> 
    </div>
    <div class="col-lg-3 col-md-6"> 
        <div class="panel panel-color">
            <div class="panel-heading"> 
                <div class="row"> 
                    <div class="col-xs-3">
                        <i class="fa fa-tags fa-5x"></i> 
                    </div>
                    <div class="col-xs-9 text-right"> 
                        <div class="huge"> 5 </div> 
                        <div> Product Categories </div> 
                    </div>
                </div> 
            </div>
            <a href="index.php?view_p_cats"> 
                <div class="panel-footer">
                    <span class="pull-left"> 
                        View Details 
                    </span>
                    <span class="pull-right">  
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    <div class="clearfix"></div> 
                </div> 
            </a>
        </div> 
    </div>
    <div class="col-lg-3 col-md-6"> 
        <div class="panel panel-color">
            <div class="panel-heading"> 
                <div class="row"> 
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i> 
                    </div>
                    <div class="col-xs-9 text-right"> 
                        <div class="huge"> 25 </div> 
                        <div> Orders </div> 
                    </div>
                </div> 
            </div>
            <a href="index.php?view_orders"> 
                <div class="panel-footer">
                    <span class="pull-left"> 
                        View Details 
                    </span>
                    <span class="pull-right">  
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    <div class="clearfix"></div> 
                </div> 
            </a>
        </div> 
    </div>
</div>
<div class="row"> 
    <div class="col-lg-8"> 
        <div class="panel panel-color"> 
            <div class="panel-heading"> 
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> New Orders 
                </h3> 
            </div>
            <div class="panel-body"> 
                <div class="table-responsive"> 
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> Order no: </th>
                                <th> Quantity: </th>
                                <th> Customer Email: </th>
                                <th> Invoice No: </th>
                                <th> Product ID: </th> 
                                <th> Status: </th> 
                            </tr> 
                        </thead> 
                        <tbody> 
                            <tr> 
                                <td> 1 </td>
                                <td> 2 </td>
                                <td> user@gmail.com </td>
                                <td> 32sa32 </td>
                                <td> 11 </td>
                                <td> Pending </td>  
                            </tr> 
                           
                            <tr> 
                                <td> 1 </td>
                                <td> 2 </td>
                                <td> user@gmail.com </td>
                                <td> 32sa32 </td>
                                <td> 11 </td>
                                <td> Pending </td>
                            </tr> 
                            <tr> 
                                <td> 1 </td>
                                <td> 2 </td>
                                <td> user@gmail.com </td>
                                <td> 32sa32 </td>
                                <td> 11 </td>
                                <td> Pending </td> 
                            </tr> 
                            <tr> 
                                <td> 1 </td>
                                <td> 2 </td>
                                <td> user@gmail.com </td>
                                <td> 32sa32 </td>
                                <td> 11 </td>
                                <td> Pending </td>
                                
                            </tr> 
                        </tbody> 
                    </table> 
                </div> 
                <div class="text-right"> 
                    <a href="index.php?view_orders"> 
                        View All Orders <i class="fa fa-arrow-circle-right"></i>  
                    </a>
                </div>
            </div>
        </div> 
    </div>
    <div class="col-md-4"> 
        <div class="panel"> 
            <div class="panel-body"> 
                <div class="mb-md thumb-info">
                    <!--<div class="thumb-info-title">
                        <span class="thumb-info-inner"> TD </span>
                        <span class="thumb-info-type"> Webmarket creator </span> 
                    </div>-->
                </div>
                <div class="mb-md"> 
                    <div class="widget-content-expanded"> 
                        <i class="fa fa-user"></i> <span> Email: </span> TD@gmail.com <br/>
                        <i class="fa fa-flag"></i> <span> Country: </span> Faroe Islands <br/>
                        <i class="fa fa-envelope"></i> <span> Contact: </span> +8465156151 <br/>
                    </div>
                    <hr class="dotted short"> 
                    <h5 class="text-muted"> About Me</h5> 
                    <p>
                        Was working hard to create this site)  
                    </p> 
                </div>
            </div> 
        </div> 
    </div>
</div> 
<?php } ?>