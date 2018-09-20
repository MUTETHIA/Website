
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Publication Section</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <i class="fa fa-book fa-fw"></i>Publish the Publication
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
                                <form action="<?php echo site_url('Site/publication_process');  ?>" method="post" autocomplete="off">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                            <label for="">Publication Type:</label>
                                            <select name="type" id="type" class="form-control">
                                                <option value="">~~Select Publication Type~~~</option>
                                                <option value="1">Book Publications</option>
                                                 <option value="2">Refereed Journals</option>
                                                  <option value="3">Conference proceedings</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                               <div class="row">
                                    <div class="col-md-12">
                                         <div class="form-group">
                                                <label>Publication Details:</label>
                                                <textarea name="publication" id="summernote" cols="30" rows="10"></textarea>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" name="up" class="btn btn-success">Publish </button>
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

