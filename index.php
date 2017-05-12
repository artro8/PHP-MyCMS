<?php include('application/init.php'); ?>
<?php $CMS->Template->set('active_menu', 'active');?>
<?php include 'application/templates/views/viewsStart/header.php'; ?>


        <div class="row">
            
                <div class="hero-text-box">
                    
                    <h1><?php $CMS->Content->displayContent('content_header_start_1', 'textarea'); ?> <br> <?php $CMS->Content->displayContent('content_header_start_2', 'textarea'); ?></h1>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <a class="btnn btn-full" href="ourProducts.php">Zobacz nasze produkty</a>
                    <a class="btnn btn-ghost" href="contact.php">Skątaktuj się z nami</a>
                    </div>
                </div>
                </div>
        </div>
        
<section class="section-features">
            <div class="row" id="about">
                <h2>O firmie</h2><hr>
            </div>
        
                <div class="row">
                        <div class="col-lg-6">
                            <i class="icon ion-ios-infinite-outline icon-big"></i>
                            <h3 id="bord"><?php $CMS->Content->displayContent('content_header_thema_1', 'textarea'); ?></h3>
                            <p>
                                <?php $CMS->Content->displayContent('content_header_1', 'textarea'); ?>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <i class="ion-ios-stopwatch-outline icon-big"></i>
                            <h3><?php $CMS->Content->displayContent('content_header_thema_2', 'textarea'); ?></h3>
                            <p>
                                <?php $CMS->Content->displayContent('content_header_2', 'textarea'); ?>
                            </p>
                        </div>

                </div>
            
            </section>
        
        
        <?php include 'application/templates/views/viewsStart/footer.php'; ?>
