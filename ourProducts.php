<?php include 'application/init.php'; ?>
<?php $CMS->Template->set('active_products', 'active'); ?>
<?php include 'application/templates/views/viewsStart/header.php'; ?>

<div class="row">
            
                <div class="hero-text-box">
                    
                    <h1>Gdy patrzysz na nasz produkt <br> odrazu czujesz się lepiej.</h1>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <a class="btnn-p btn-full-p" href="gallery.php">Podziwiaj to co piękne</a>
                    <a class="btnn-p btn-ghost-p" href="contact.php">Skątaktuj się z nami</a>
                    </div>
                </div>
                </div>
</div>

<section class="section-features">
        <div class="row">
            <h2 class="products">Nasze produkty</h2><hr>
        </div>
        <div class="row">
            <div class="col-md-4">
                <!-- begin panel group -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <!-- panel 1 -->
                    <div class="panel panel-default">
                        <!--wrap panel heading in span to trigger image change as well as collapse -->
                        <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                            <div class="panel-heading" role="tab" id="headingOne"data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="panel-title">Nasze produkty</h4>
                            </div>
                        </span>

                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body"><button class="btn btn-success"><a href="gallery.php#gallery">Galeria</a></button>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            </div>
                        </div>
                    </div> 
                    <!-- / panel 1 -->

                    <!-- panel 2 -->
                    <div class="panel panel-default">
                        <!--wrap panel heading in span to trigger image change as well as collapse -->
                        <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                            <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 class="panel-title collapsed">Oznakowania</h4>
                            </div>
                        </span>

                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body"><button class="btn btn-success"><a href="gallery.php#gallery">Galeria</a></button>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            </div>
                        </div>
                    </div>
                    <!-- / panel 2 -->

                    <!--  panel 3 -->
                    <div class="panel panel-default">
                        <!--wrap panel heading in span to trigger image change as well as collapse -->
                        <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                            <div class="panel-heading" role="tab" id="headingThree"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h4 class="panel-title">Identyfikacje</h4>
                            </div>
                        </span>

                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body"><button class="btn btn-success"><a href="gallery.php#gallery">Galeria</a></button>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                              </div>
                            </div>
                          </div>
                </div> <!-- / panel-group -->

            </div> <!-- /col-md-4 -->

            <div class="col-md-8">
                <!-- begin macbook pro mockup -->
                <div class="md-macbook-pro md-glare">
                    <div class="md-lid">
                        <div class="md-camera"></div>
                        <div class="md-screen">
                        <!-- content goes here -->                
                            <div class="tab-featured-image">
                                <div class="tab-content">
                                    <div class="tab-pane  in active" id="tab1">
                                            <img src="https://ununsplash.imgix.net/photo-1417024321782-1375735f8987?dpr=2&fit=crop&fm=jpg&h=650&q=75&w=950" alt="tab1" class="img img-responsive">
                                    </div>
                                    <div class="tab-pane " id="tab2">

                                            <img src="https://unsplash.imgix.net/uploads/1411724908903377d4696/2e9b0cb2?dpr=2&fit=crop&fm=jpg&h=650&q=75&w=950">

                                    </div>
                                    <div class="tab-pane fade" id="tab3">

                                            <img src="https://ununsplash.imgix.net/photo-1422479516648-9b1f0b6e8da8?dpr=2&fit=crop&fm=jpg&h=650&q=75&w=950" alt="tab1" class="img img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md-base"></div>
                </div> <!-- end macbook pro mockup -->



            </div> <!-- / .col-md-8 -->
        </div> <!--/ .row -->
    </div> <!-- end sidetab container -->
</section>
<?php include 'application/templates/views/viewsStart/footer.php'; ?>

