<!-- ==============================================
                     **GALLERY**
=============================================== -->
<section class="team pt-10 pb-500">
    <div class="container">
        <div class="main-title">
            <h3>My Gallery</h3>
            <span class="seperator"></span>
        </div>
        <div class="row">
            <?php
              foreach($gallery as $row){
                  $image= $row['image'];
                  $desc= $row['description'];
                  ?>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="team-member">
                    <figure>
                        <img src="<?php echo site_url(); ?>public/images/gallery/<?php echo $image; ?>" alt="" class="img-responsive" style="width: 200px; height: 200px;">
                        <figcaption>
                            <p><?php echo $desc; ?></p>
                        </figcaption>
                    </figure>
                </div><!-- /.team-member-->
            </div>
                  <?php
              }
            ?>
        </div>
        <?php echo $pagination; ?>
    </div><!-- End Container -->
</section><!-- End Section -->