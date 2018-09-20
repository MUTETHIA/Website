
<!-- ==============================================
                     **CONTACT SECTION**
=============================================== -->
<section class="contact ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box-style-1 mb-40">
                    <div class="icon-container secondary-bg card-2">
                        <i class="ion-map"></i>
                    </div>
                    <div class="body">
                        <h4><a href="#">ADDRESS</a></h4>
                        <p>Box 190-50100 Kakamega, Kenya. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box-style-1 mb-40">
                    <div class="icon-container secondary-bg card-2">
                        <i class="ion-ios-email-outline"></i>
                    </div>
                    <div class="body">
                        <h4><a href="#">EMAIL</a></h4>
                        <p>kelvin@kelvinomieno.net<br>komieno@mmust.ac.ke</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box-style-1 mb-40">
                    <div class="icon-container secondary-bg card-2">
                        <i class="ion-ios-telephone-outline"></i>
                    </div>
                    <div class="body">
                        <h4><a href="#">PHONE</a></h4>
                        <p>+254 726-849197<br>+254 734-849197</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section><!-- end section -->
<!-- ==============================================
    **QUOTE SECTION**
=============================================== -->
<section class="quote">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <?php
                      if($this->session->flashdata('success')){
                          echo $this->session->flashdata('success');
                      }
                      else if($this->session->flashdata('error')){
                           echo $this->session->flashdata('error');
                      }
                    ?>
            </div>

            <form autocomplete="off" action="<?php echo site_url('Site/contact_process'); ?>" method="post" name="contact-form">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fullname">Name</label>
                                <input type="text" name="fullname" id="fullname" required="required" class="form-control" placeholder="Joe Doe">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"  required="required" placeholder="somebody@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" id="mobile" class="form-control"  required="required" placeholder="+254 1234567890">
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" class="form-control"  required="required" placeholder="Your Message"></textarea>
                            </div>
                            <div class="mt-20">
                                <button type="submit" name="contact" class="btn btn-theme-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-md-4 hidden-sm hidden-xs">
                <img src="<?php echo site_url(); ?>public/images/startme.JPG" class="img-responsive" alt="">
            </div>
        </div> <!-- /.row -->
    </div> <!-- end container -->
</section><!-- end section -->

