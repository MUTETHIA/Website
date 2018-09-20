
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Students Resources</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <i class="fa fa-book fa-fw"></i>Student Materials Upload
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
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Serial</th>
                                                <th>Unit Code</th>
                                                <th>Unit Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count=1;
                                            foreach($units as $row){
                                                ?>
                                               <tr>
                                                   <td><?php echo $count;  ?></td>
                                                   <td><?php echo $row['code'];  ?></td>
                                                   <td><?php echo $row['unitname'];  ?></td>
                                                   <td><button type="button" class="btn btn-info btn-sm" data-target="#upload<?php echo $row['id']; ?>"  data-toggle="modal" class="" ><i class="fa fa-upload"></i> Upload Material</button></td>
                                               </tr>

                                                <!--View customer details modal-->
                                                <div class="modal fade" id="upload<?php echo $row['id']; ?>" tabindex="-1"
                                                     role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" data-toggle="tooltip" title="close" class="close" data-dismiss="modal"
                                                                        aria-label="Close"><span
                                                                        aria-hidden="true"> &times;</span></button>
                                                                <h4 class="modal-title"><?php echo $row['unitname'];  ?> </h4>
                                                            </div>
                                                            <div class="modal-body">
                                                               <?php echo form_open_multipart('Site/upload_process'); ?>
                                                               <input type="text" name="unitID" value="<?php echo $row['id']; ?>" hidden="hidden" />
                                                                   <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                          <label for="">Upload Description: (Name of the File)</label>
                                                                          <input type="text" name="desc" class="form-control" required="required" placeholder="Provide the name of the file" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">File Upload:</label>
                                                                            <input type="file" name="filename" required="required" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <p>Kindly note: Only PDF or DOC pr DOCX documents are allowed.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <button type="submit" name="upload" class="btn btn-info">Upload</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                               <?php echo form_close(); ?>

                                                            </div>
                                                                    <div class="modal-footer">
                                                                        <div class="row">
                                                                            <div class="col-sm-3 pull-right">
                                                                                <button type="button" class="btn btn-warning" data-dismiss="modal"><i
                                                                                        class="fa fa-close"></i>
                                                                                    Close
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end upload modal-->
                                                <?php
                                                $count++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

