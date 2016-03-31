<section class="content-header">
  <div class="slider">
    <div class="row">
      <div class="col-md-12"><img src="<?php echo base_url(); ?>img/photo2.png" alt=""></div>
    </div>
  </div>
  
</section>
      

      
        <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Advanced Form Elements
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">Advanced Elements</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

<div class="">
  <div class="row ">
  <?php foreach ($product_list as $value) { ?>
    <div class="col-md-3 col-xs-4 product_grid">
      <div class="product_image">
        <img src="<?php echo base_url();?>uploads/product/<?php echo $value->product_thumb_image; ?>" alt="">
        
        <h4><?php echo $value->product_name; ?></h4>
        <div class="product_footer">
          <div class="">
             <span class="price pull-left">Price : <strong class="text_strike "><?php echo $value->price; ?></strong></span>
             <span class="sell_price pull-right">Sell Price : <strong class=" "><?php echo $value->sell_price; ?></strong></span>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
    
    
    
  </div>
</div>

</section>