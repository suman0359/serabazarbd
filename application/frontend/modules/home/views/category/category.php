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
          <?php foreach ($catagory_list as $value) { ?>
            <div class="col-md-3 col-xs-4 product_grid">
              <div class="product_image">
                <a href="<?php echo base_url(); ?>home/category/<?php echo $value->id; ?>">
                  <img src="<?php echo base_url();?>uploads/category/<?php echo $value->category_thumb_image; ?>" alt="">
                </a>
                
                <h4><?php echo $value->category_name; ?></h4>
              </div>
            </div>
          <?php } ?>
            
            
            
          </div>
        </div>

        </section>
