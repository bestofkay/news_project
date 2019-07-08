<style>
.cleditorMain{
    width:90% !important;
    height: 350px;
}
</style>
    <!-- start: Content -->
<div id="content" class="span10">
<?php if($form_type==1) {?>
    <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="#">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Edit <?= $news->title; ?></a>
				</li>
			</ul>
			<?php if($this->session->flashdata('fback')){
                $fback=$this->session->flashdata('fback');
            }  ?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Edit <?= $news->title; ?></h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
                    </div>
                    <?php if($this->session->flashdata('error')) {?>

                        <div class="alert alert-danger alert-dismissible">
                        <?php echo $this->session->flashdata('error'); ?>. <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        
                        <?php } ?>
                        <?php  if($this->session->flashdata('message')) {?>

                            <div class="alert alert-success alert-dismissible">
                            <?php echo $this->session->flashdata('message'); ?>. <button type="button" class="close" data-dismiss="alert">&times;</button>
                            </div>
                            
                        <?php } ?>
					<div class="box-content">
                        <form class="form-horizontal" method="post" action="<?= site_url('news_admin/update'); ?>" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $news->id;?>">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">News title </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="name" value="<?php echo $news->title;?>"> 
								<p class="help-block"></p>
							  </div>
                            </div>
                            
                          
                            <div class="control-group">
							  <label class="control-label" for="fileInput">News Caption Image</label>
							  <div class="">
                                <input type="file" name="file"><img src='<?php echo base_url().$news->imgURL;?>' style="width:100px; length:50px"/>
                                
							  </div>
							</div>    
                            
                            	<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">News Content</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" name="contents"><?php echo html_entity_decode($news->contents);?></textarea>
							  </div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit">Edit news</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
                </div><!--/span-->
<?php } ?>
<?php if($form_type==0) {?>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="#">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add news</a>
				</li>
			</ul>
			<?php if($this->session->flashdata('fback')){
                $fback=$this->session->flashdata('fback');
            }  ?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Add New News</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
                    </div>
                    <?php if($this->session->flashdata('error')) {?>

                        <div class="alert alert-danger alert-dismissible">
                        <?php echo $this->session->flashdata('error'); ?>. <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        
                        <?php } ?>
                        <?php  if($this->session->flashdata('message')) {?>

                            <div class="alert alert-success alert-dismissible">
                            <?php echo $this->session->flashdata('message'); ?>. <button type="button" class="close" data-dismiss="alert">&times;</button>
                            </div>
                            
                        <?php } ?>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="<?= site_url('news_admin/create'); ?>" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">News title </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" name="name" value="<?php if(isset($fback['title'])){echo $fback['title'];}?>"> 
								<p class="help-block"></p>
							  </div>
                            </div>
                            
                            <div class="control-group">
							  <label class="control-label" for="fileInput">News Caption Image</label>
							  <div class="">
                                <input type="file" name="file">
                                <p class="help-block">Upload caption</p>
							  </div>
							</div>    
                            
                            	<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">News Content</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" name="contents"><?php if(isset($fback['contents'])){echo $fback['contents'];}?></textarea>
							  </div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit">Save News</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
                </div><!--/span-->
                        <?php } ?>
<?php if($form_type==0) {?>
            </div><!--/row-->
            	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>News List</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
                                  <th>Title</th>
                                  <th>Content</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                            
                                <?php foreach($news as $m) {?>
	                            <tr>
                                <td><?= $m->title; ?></td>
                                <td><?= substr($m->contents, 0, 50); ?></td>
								
								<td class="center">
								
									<a class="btn btn-info" href="<?= site_url('news_admin/edit/'.$m->id); ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="<?= site_url('news_admin/delete/'.$m->id); ?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
                           <?php } ?>
						
							
                        </tbody>
                        </table>
                    </div>
        </div>
                                <?php } ?>