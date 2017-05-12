<?php include 'application/init.php'; ?>
<?php $CMS->Template->set('active_gallery', 'active');?>
<?php include 'application/templates/views/viewsStart/header.php'; ?>



<div class="row">
    
    <div class="hero-text-box">
        
        <h1>Obraz ożywia <br> gdy zbliżysz się do niego z uczuciem.</h1>
        
        <div class="col-lg-12 col-md-12 col-sm-12">
            <a class="btnn-g btn-full-g" href="ourProducts.php">Zobacz nasze produkty</a>
            <a class="btnn-g btn-ghost-g" href="contact.php">Skątaktuj się z nami</a>
        </div>
    </div>
</div>
</div>

<div>
    
    <section class="section-features">
        <div class="row">
            <h2 class="gallery" id="gallery">Galeria</h2><hr>
        </div>
        <div class="container">
            <div class="row">
                <div align="center">
                    <button id="all" class="btn btn-default filter-button active" data-filter="all">Wszystko</button>
                    <button id="products" class="btn btn-default filter-button" data-filter="products">Nasze produkty</button>
                    <button id="marking" class="btn btn-default filter-button" data-filter="marking">Oznakowania</button>
                    <button id="identification" class="btn btn-default filter-button" data-filter="identification">Identyfikacje</button>
                </div>
                <br/>
                <?php 
                    global $CMS;
                    $CMS->Content->displayImageForUser(); 
                ?>
                
            </div>
        </div>
    </section>
</div>

<?php include 'application/templates/views/viewsStart/footer.php'; ?>
