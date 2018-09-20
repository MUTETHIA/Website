
<!-- ==============================================
                     **PUBLICATION SECTION**
=============================================== -->
<section class="blog-list ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-12">
                <div class="white-bg">

                                     <div class="card radius card-1">
                        <div class="card-content card-padding">
                            <article class="card-article">
                            <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="ptb-20">
                            <div class="main-title">
                                <h4><?php echo html_escape($name); ?></h4>
                                <span class="seperator"></span>
                            </div>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                       <?php

                                          foreach($units as $row){
                                              $count=$row['id'];
                                            $code=$row['code'];
                                            $name= $row['unitname'];
                                            ?>
                                              <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading<?php echo $count; ?>">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $count; ?>">
                                                <i class="more-less ti-minus"></i>
                                                <?php echo $code.' '. $name; ?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="<?php echo $count; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $count; ?>">
                                        <div class="panel-body">
                                              <div class="table-responsive">
                                                  <table class="table table-bordered table-striped">
                                                     <thead>
                                                     <tr>
                                                      <th>Serial</th>
                                                      <th>Material Decription</th>
                                                      </tr>
                                                     </thead>
                                                     <tbody>
                                                         <tr>
                                                             <td>1</td>
                                                             <td><a href=""><button type="button" class="btn btn-info btn-sm">Course Outline </button></a> </td>
                                                         </tr>
                                                     </tbody>

                                                  </table>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                          <?php
                                          }
                                       ?>
                                                       </div><!-- end panel-group -->
                        </div>
                    </div>

                </div>








                            </article>
                        </div>
                    </div>


                    <!-- Pagination -->


                </div><!-- end pagination -->

            </div>

        </div>
    </div><!-- end container -->
</section><!-- end section -->

