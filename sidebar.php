<?php 
include("db.php");
include_once("functions/functions.php");
?>
<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Categories</h3>
    </div>
    
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu"> 
            <?php 
            getPCategories(); 
            ?> 
        </ul>
    </div>
</div>
<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Customer Categories</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
            <?php 
            getCategories(); 
            ?> 
        </ul>
    </div> 
</div>