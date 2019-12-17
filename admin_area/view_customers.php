<?php  
    if(!isset($_SESSION['admin_email'])){   
        echo "<script>window.open('login.php','_self')</script>";   
    }else{ 
?> 
<div class="row"> 
    <div class="col-lg-12">
    </div> 
</div>
<div class="row"> 
    <div class="col-lg-12"> 
        <div class="panel panel-default"> 
            <div class="panel-heading"> 
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  View Costumers
               </h3>  
            </div>
            <div class="panel-body"> 
                <div class="table-responsive"> 
                    <table class="table table-striped table-bordered table-hover">
                        <thead> 
                            <tr> 
                                <th> No: </th>
                                <th> Name: </th>
                                <th> Phone: </th>
                                <th> E-Mail: </th>
                                <th> Address: </th>
                                <th> City: </th>
                                <th> Country: </th>
                                <th> Delete: </th>
                            </tr> 
                        </thead>
                        <tbody> 
                            <?php 
                                $i=0; 
                                $get_c = "select * from customers"; 
                                $run_c = mysqli_query($con,$get_c); 
                                while($row_c=mysqli_fetch_array($run_c)){ 
                                    $c_id = $row_c['customer_id']; 
                                    $c_name = $row_c['customer_name'];
                                    $c_phone = $row_c['customer_phone'];
                                    $c_email = $row_c['customer_email'];
                                    $c_address = $row_c['customer_address'];
                                    $c_city = $row_c['customer_city'];
                                    $c_country = $row_c['customer_country'];
                                    $i++;
                            ?>
                            <tr> 
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $c_name; ?> </td>
                                <td> <?php echo $c_phone ?> </td>
                                <td> <?php echo $c_email; ?> </td>
                                <td> <?php echo $c_address ?> </td>
                                <td> <?php echo $c_city; ?> </td>
                                <td> <?php echo $c_country; ?></td> 
                                <td> 
                                     <a href="index.php?delete_customer=<?php echo $c_id; ?>"> 
                                        <i class="fa fa-trash-o"></i> Delete 
                                     </a>    
                                </td>
                            </tr> 
                            <?php } ?> 
                        </tbody> 
                    </table> 
                </div> 
            </div> 
        </div> 
    </div> 
</div> 
<?php } ?>