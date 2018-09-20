
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Students Resources</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-6">
                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <i class="fa fa-bank fa-fw"></i>University In teaching
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body" style="min-height: 250px;">
                                <?php
                                  if($this->session->flashdata('error')){
                                      echo $this->session->flashdata('error');
                                  }
                                  else if($this->session->flashdata('success')){
                                      echo $this->session->flashdata('success');
                                  }
                                ?>
                                <form action="<?php echo site_url('Site/uni_process');  ?>" method="post" enctype="multipart/form-data">
                               <div class="row">
                                    <div class="col-md-12">
                                         <div class="form-group">
                                                <label>University Name:</label>
                                                <input type="text" name="name" required="required" class="form-control" placeholder="Enter University Teaching">
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" name="uni" class="btn btn-success">Submit Data</button>
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
                                <i class="fa fa-book fa-fw"></i> Units being taught
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

                                   <?php echo form_open('Site/unit_process'); ?>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="">University: </label>
                                                <select name="uniID" id="uniID" required="required" class="form-control">
                                                    <option value="">~~Select University~~~</option>
                                                    <?php
                                                      foreach($university as $row){
                                                          ?>
                                                         <option value="<?php echo $row['uniID'];  ?>"><?php echo $row['name'];  ?></option>
                                                          <?php
                                                      }
                                                    ?>
                                                </select>
                                           </div>
                                       </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="">Unit Code: </label>
                                               <input type="text" name="code" required="required" class="form-control" placeholder="Enter Unit Code" />
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-md-12">
                                       <div class="form-group">
                                           <label for="">Unit Name:</label>
                                           <input type="text" name="unitname" class="form-control" placeholder="Unit Name" required="required" />
                                       </div>
                                   </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <button class="btn btn-primary" type="submit" name="upload"><i class="glyphicon glyphicon-ok"></i> Register Unit</button>
                                       </div>
                                   </div>
                              <?php echo form_close(); ?>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                 </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <i class="fa fa-bank fa-fw"></i>University In teaching
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body" style="min-height: 250px;">

                                  <?php echo form_open('Site/insert'); ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Enter Password:</label>
                                            <input type="password" name="pass" class="form-control" placeholder="Enter Password" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="submit" name="check" class="btn btn-danger">Submit Password</button>
                                        </div>
                                    </div>
                                  <?php echo form_close(); ?>
                        <div class="table-responsive">

                        </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

