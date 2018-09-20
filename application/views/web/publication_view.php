<!-- ==============================================
                     **PUBLICATION SECTION**
=============================================== -->
<section class="blog-list ptb-50">
    <div class="container">
        <div class="main-title">
            <h3><?php echo $type;  ?></h3>
            <span class="seperator"></span>
        </div>
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="white-bg">
                           <?php
                                foreach($book as $row){
                                    ?>
                                     <div class="card radius card-1">
                        <div class="card-content card-padding">
                            <div class="card-share">
                                <div class="card-social">
                                    <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                                    <a class="share-icon twitter" href="#"><span class="fa fa-twitter"></span></a>
                                    <a class="share-icon googleplus" href="#"><span class="fa fa-google-plus"></span></a>
                                </div>
                                <a class="share-toggle share-icon" href="#"><span class="fa fa-share"></span></a>
                            </div>
                            <article class="card-article">

                                  <?php echo $row['topic']; ?>

                            </article>
                        </div>
                    </div>
                                    <?php
                                }
                              ?>

                    <!-- Pagination -->
                   <?php echo $pagination; ?>

                </div><!-- end pagination -->

            </div>
            <div class="col-md-4 col-xs-12">
                <!-- sidebar -->
                <div id="sidebar">
                    <div class="pb-20">
                        <div class="main-title">
                            <h4>SEARCH</h4>
                            <span class="seperator"></span>
                        </div>
                        <form class="search-box">
                            <div class="input-group">
                                <input class="form-control" placeholder="Search for..." type="text">
                                <span class="input-group-btn">
                                    <button class="btn btn-theme-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!-- recent news -->
                    <div class="pb-20">
                        <div class="main-title">
                            <h4>Recent News</h4>
                            <span class="seperator"></span>
                        </div>
                        <div class="box-style-1">
                            <div class="image-container">
                                <img src="images/thumb-1.jpeg" alt="image">
                            </div>
                            <div class="body">
                                <h5><a href="#">Online Finance Management</a></h5>
                                <p>Voluptatem ad provident non veritatis.</p>
                                <p class="text-muted"><span class="fa fa-calendar"></span> 11th March 2016</p>
                            </div>
                        </div>
                        <hr class="clear-fix">
                        
                    </div><!-- end recent news -->


                </div><!-- end sidebar -->
            </div>
        </div>
    </div><!-- end container -->
</section><!-- end section -->

