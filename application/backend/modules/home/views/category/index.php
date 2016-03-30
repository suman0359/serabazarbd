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

		<div class="row">
			<div class="col-xs-12">
				<div class="box-header">
					<a href="<?php echo base_url(); ?>home/category/add" class="btn btn-success pull-right">Add New Category</a>
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
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Product Category List</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th>ID</th>
                      <th>Category Name</th>
                      <th>Category Image</th>
                      <!-- <th class="span3">Parent Category</th> -->
                      <th class="text-right">Action</th>
                    </tr>
                    <?php
                    foreach ($category_list as $value) { ?>
                    <tr>                    
                      <td><?php echo $value->id; ?></td>
                      <td>J<?php echo $value->category_name; ?></td>
                      <td><img src="<?php echo base_url() ?>../uploads/category/thumb/<?php echo $value->category_thumb_image; ?>" alt="" style="width: 70px; height: 70px;"></td>
                      <!-- <td class="span3"><span class="label label-success">Approved</span></td> -->
                      <!--  <td><?php $parent_category_id = $value->parent_category_id; $parent_category = $this->common_model->getInfo('tbl_category', $parent_category_id);  
                       echo @$parent_category->category_name; ?></td> -->
                      
                      <td class="text-right">
                          <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-settings tiny-icon"></i>
                              Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" style="right: 0; left: auto;">


                          <?php
                             $user_type = $this->session->userdata('user_role');

                           if($user_type==9){ ?>
                           <li><a href="<?php echo base_url(); ?>home/category/edit/<?php echo $value->id; ?>" >Edit</a></li>
                           <li><a href="<?php echo base_url(); ?>home/category/delete/<?php echo $value->id; ?>"  onclick="return confirm('Do you want to allow him to');">Delete</a></li>
                                                             
                          <?php } ?>
                        
                            </ul>
                          </div>
                      </td>
                    </tr>
                    <?php
                     } 
                    ?>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
