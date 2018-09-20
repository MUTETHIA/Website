
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-6">
                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <i class="fa fa-upload fa-fw"></i> Image Upload
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <?php
                                  if($this->session->flashdata('error')){
                                      echo $this->session->flashdata('error');
                                  }
                                  else if($this->session->flashdata('success')){
                                      echo $this->session->flashdata('success');
                                  }
                                ?>
                                <form action="<?php echo site_url('Site/upload');  ?>" method="post" enctype="multipart/form-data">
                               <div class="row">
                                    <div class="col-md-4">
                                         <div class="form-group">
                                                <label>Image One:</label>
                                                <input type="file" name="filename" required="required">
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" name="up" class="btn btn-success">Upload Image</button>
                                    </div>
                                </div>
                                   </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>

                         <div class="col-md-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <i class="fa fa-upload fa-fw"></i> Gallery Update
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body" style="min-height: 250px;">
                                     <?php
                                  if($this->session->flashdata('error1')){
                                      echo $this->session->flashdata('error1');
                                  }
                                  else if($this->session->flashdata('success1')){
                                      echo $this->session->flashdata('success1');
                                  }
                                ?>
                               <form action="<?php echo site_url('Site/gallery_process'); ?>" method="post" enctype="multipart/form-data">
                                   <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="">Image File: </label>
                                               <input type="file" name="filename" required="required" accept="image/*" />
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="">Status: </label>
                                                <select name="status" id="status" required="required" class="form-control">
                                                    <option value="">~~Select Image Status~~~</option>
                                                    <option value="1">Available</option>
                                                    <option value="2">Not Available</option>
                                                </select>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-md-12">
                                       <div class="form-group">
                                           <label for="">Image Description: (This will be visible)</label>
                                           <input type="text" name="description" class="form-control" placeholder="Provide the Image Description" required="required" />
                                       </div>
                                   </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <button class="btn btn-success" type="submit" name="upload"><i class="glyphicon glyphicon-ok"></i> Upload Image</button>
                                       </div>
                                   </div>
                               </form>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                 </div>


                </div>

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

