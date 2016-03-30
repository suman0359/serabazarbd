  <!-- Content Header (Page header) -->
<section class="content-header box box-warning">
    <h1> Advanced Form Elements <small>Preview</small></h1>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
          </ol>

	<div class="row">
		<div class="col-xs-12">
			<div class="box-header">
				<a href="<?php echo base_url(); ?>/home/product" class="btn btn-primary pull-right">View Product</a>
			</div>
		</div>
	</div>
	 <?php
       $success = $this->session->flashdata('success') ; 
       $error = $this->session->flashdata('error') ;
       if($success){
       ?>
        <div class="alert alert-success" role="alert"><?php echo $success ;?></div>
        <?php } 
       if($error){
       ?>

       <div class="alert alert-danger" role="alert"><?php echo $error ;?></div>

       <?php } ?>
	<div class="row">
		<div class="box box-warning">
			<div class="box-body">

				<?php echo form_open_multipart("");?>
				
					<div class="box-header with-border">
		                  <h3 class="box-title">General Elements</h3>
		                </div><!-- /.box-header -->
					<div class="col-md-6">
						<div class="form-group">
	                      <label>Product Name</label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'product_name',
						        'type' => 'text',
						        'class' =>'form-control ', 
						        'value' => $product_name, 
						        'required' => 'required',
						        'placeholder'=>'product Name'
						    );
						    echo form_input($form_input); 
						    ?>
	                    </div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
	                      <label>Product Quantity</label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'product_quantity',
						        'type' => 'text',
						        'class' =>'form-control ', 
						        'value' => $product_quantity, 
						        'required' => 'required',
						        'placeholder'=>'Product Quantity'
						    );
						    echo form_input($form_input); 
						    ?>
	                    </div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
	                      <label>Product Price</label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'price',
						        'type' => 'text',
						        'class' =>'form-control ', 
						        'value' => $price, 
						        'required' => 'required',
						        'placeholder'=>'Product Price'
						    );
						    echo form_input($form_input); 
						    ?>
	                    </div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
	                      <label>Product Sell Price</label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'sell_price',
						        'type' => 'text',
						        'class' =>'form-control ', 
						        'value' => $sell_price, 
						        'required' => 'required',
						        'placeholder'=>'Product Sell Price'
						    );
						    echo form_input($form_input); 
						    ?>
	                    </div>
					</div>
					

					<div class="col-md-6">
						<div class="form-group">
	                      <label>Product Image</label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'product_image',
						        'type' => 'file',
						        'value' => $product_image, 
						        'class' =>'form-control '
						    );
						    echo form_input($form_input); 
						    ?>
	                    </div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">Category</label>
							<select name="category_id" id="category_id" class="form-control">
								<option value="">Select Category..</option>
								<?php foreach ($category_list as $value) { ?>
									<option value="<?php echo $value->id; ?>" <?php if($category_id==$value->id) echo "selected"; ?>><?php echo $value->category_name; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">Category</label>
							<select name="parent_category_id" id="parent_category_id" class="form-control">
								<option value="">Select Parent Category..</option>
								<?php foreach ($parent_category_list as $value) { ?>
									<option value="<?php echo $value->id; ?>" <?php if($parent_category_id==$value->id) echo "selected"; ?>><?php echo $value->category_name; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

					<?php
					$form_input = array(
			        'name' => 'submit',
			        'class' =>'btn btn-success pull-right', 
			        'value' => $submit
			    	);
					 echo form_submit($form_input); 
					?>					
				
			</div>

        </div><!-- /.box-body -->
  	</div><!-- /.box -->
</section>
