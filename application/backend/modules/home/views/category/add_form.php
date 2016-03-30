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
				<a href="<?php echo base_url(); ?>/home/category" class="btn btn-primary pull-right">View Category</a>
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
	                      <label>Category Name</label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'category_name',
						        'type' => 'text',
						        'class' =>'form-control ', 
						        'value' => $category_name, 
						        'required' => 'required',
						        'placeholder'=>'Category Name'
						    );
						    echo form_input($form_input); 
						    ?>
	                    </div>
					</div>


					<div class="col-md-6">
						<div class="form-group">
	                      <label>Category Image</label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'category_image',
						        'type' => 'file',
						        'value' => $category_image, 
						        'class' =>'form-control ',
						        'required' => 'required'
						    );
						    echo form_input($form_input); 
						    ?>
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
