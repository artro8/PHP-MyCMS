        
<footer class="mt-5">
    <div class="container-fluid bg-faded mt-5">
        <div class="container">
            <div class="row py-3">
                <!-- footer column 1 start -->
                <div class="col-md-4">
                    <!-- row start -->
                    <div class="row py-2">
                        <div class="col-sm-3 hidden-md-down">
                            <a class="bg-circle bg-info" href="https://twitter.com/ ">
                                <i class="fa fa-2x fa-fw fa-twitter" aria-hidden="true "></i>
                            </a>
                        </div>
                        <div class="col-sm-9">
                            <h4>Tweets</h4>
                            Wejdziesz tu? 
                        </div>
                    </div>
                    <!-- row end -->
                </div>
                <!-- footer column 1 end -->
                <!-- footer column 2 start -->
                <div class="col-md-4">
                    <!-- row start -->
                    <div class="row py-2">
                        <div class="col-sm-3 hidden-md-down">
                            <a href="contact.php" class="bg-circle bg-info" href="#">
                                <i class="fa fa-2x fa-fw fa-address-card" aria-hidden="true "></i>
                            </a>
                        </div>
                        <div class="col-sm-9">
                            <h4>Kontakt do nas</h4>
                            <p>Dlaczego nie?</p>
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- row start -->
                    <div class="row py-2">
                        <div class="col-sm-3 hidden-md-down">
                            <a class="bg-circle bg-info" href="#">
                                <i class="fa fa-2x fa-fw fa-laptop" aria-hidden="true "></i>
                            </a>
                        </div>
                        <div class="col-sm-9">
                            <h4>Polityka Cookie</h4>
                            <p class=" ">My używamy cookies</p>
                        </div>
                    </div>
                    <!-- row end -->
                </div>
                <!-- footer column 2 end -->
                <!-- footer column 3 start -->
                <div class="col-md-4">
                    <!-- row starting  -->
                    <div class="row py-2" href="?pdf" id="pdf">
                        <div class="col-sm-3 hidden-md-down">
                            <a class="bg-circle bg-danger" href="# ">
                                <i class="fa fa-2x fa-fw fa-file-pdf-o" aria-hidden="true "></i>
                            </a>
                        </div>
                        <div class="col-sm-9">
                            <h4>Pobierz pdf</h4>
                            <p>Czy lubisz mieć wszytsko pod ręką?</p>
                            
                        </div>
                    </div>
                    <!-- row ended -->
                    <!-- row starting  -->
                    <div class="row py-2">
                        <div class="col-sm-3 hidden-md-down">
                            <a class="bg-circle bg-info" href="index.php#about">
                                <i class="fa fa-2x fa-fw fa-info" aria-hidden="true "></i>
                            </a>
                        </div>
                        <div class="col-sm-9">
                            <h4>Info</h4>
                            Informacje o nas
                        </div>
                    </div>
                    <!-- row ended -->
                </div>
                <!-- footer column 3 end -->
            </div>
        </div>
    </div>
    
    
    <div class="container-fluid bg-primary py-3" style="<?php if($CMS->Template->get('active_products')) { echo 'border-top: 20px solid #43D043;' ;} else if($CMS->Template->get('active_menu')) { echo 'border-top: 20px solid #d35400;' ; } else if($CMS->Template->get('active_contact')) { echo 'border-top: 20px solid #358CCE;' ; } else if($CMS->Template->get('active_conservation')) { echo 'border-top: 20px solid #636971;' ; } else if($CMS->Template->get('active_gallery')) { echo 'border-top: 20px solid #EAD200;' ; } ?>">
        <div class="container">
            <div class="row py-3">
                <div class="col-sm-6 col-md-3">
                    <div id="meta-3" class="widget widgetFooter widget_meta">
                        <h4 class="widgettitle">Ważne strony :</h4>
                        <ul>
                            <li><a href="index.php"><i class="fa fa-home fa-fw"></i> Strona główna</a></li>
                            <li><a href="ourProducts.php"><i class="fa fa-cubes"></i>   Nasze produkty</a></li>
                            <li><a href="contact.php"><i class="fa fa-envelope fa-fw"></i> Kontakt do nas</a></li>
                        </ul>
                    </div> 
                </div>
                <div class="col-sm-6 col-md-3">
                    <div id="recent-posts-3" class="widget widgetFooter widget_recent_entries">
                        <h4 class="widgettitle">Tu nas znajdziesz :</h4>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/vds.radom" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="fa fa-pinterest"></i> Pinterest</a>
                            </li>
                        </ul>
                    </div>            </div> <!-- end widget1 -->
                <div class="col-sm-6 col-md-4">
                    <div id="meta-4" class="widget widgetFooter widget_meta">
                        <h4 class="widgettitle">Zostaw coś po sobie. Odezwiemy się! :</h4>
                        <form method="post" action="">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">E-mail :</span>
                                    <input class="form-control" placeholder="Email ..." type="text" name="email">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Telefon  :</span>
                                    <input class="form-control" placeholder="+967-770-000" type="text" name="telephone">
                                    <span class="input-group-btn">
                                        <input class="btn btn-primary" type="submit" value="Wyślij!" name="submit" />
                                    </span>
                                </div>
                            </div>
                        </form>
                        <?php
                        
                        global $CMS;
                        
                        if(isset($_POST['submit'])) {
                            if(isset($_POST['email']) or isset($_POST['telephone'])){
                            $CMS->Content->insertContact($_POST['email'], $_POST['telephone']);
                            }
                        }
                        
                        ?>
                    </div>
                </div> <!-- end widget1 -->
            </div>
        </div>
    </div>
</footer>

<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="application/style/javascript/home.js"></script>
<script src="application/style/javascript/jquery.colorbox.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97814691-1', 'auto');
  ga('send', 'pageview');

</script>

<script>

    $(document).ready(function(e) {
        $('#pdf').colorbox({
                 
            href: '<?php echo SITE_PATH ?>/application/pdfFile.php' 
        });
    });

          
</script>


</body>
</html>

