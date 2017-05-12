<?php include 'application/init.php'; ?>
<?php $CMS->Template->set('active_contact', 'active');?>
<?php include 'application/templates/views/viewsStart/header.php'; ?>

 <div class="row">
            
                <div class="hero-text-box">
                    
                    <h1>Człowiek potrzebuje kontaktu <br> ale kontaktu nie przypadkowego.</h1>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <a class="btnn-c btn-full-c" href="ourProducts.php">Zobacz nasze produkty</a>
                    <a class="btnn-c btn-ghost-c" href="gallery.php">Podziwiaj to co piękne</a>
                    </div>
                </div>
                </div>
</div>

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Kontakt do nas <small>Poczuj swobodę rozmowy</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6 contact">
                        <div class="form-group">
                            <label for="name">
                                Imię</label>
                            <input type="text" class="form-control" id="name" placeholder="Wprowadź imię" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email </label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Wprowadź email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Temat</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Wybierz:</option>
                                <option value="service">Zapytaj o produkt</option>
                                <option value="suggestions">Sugestie</option>
                                <option value="product">Inne</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 contact">
                        <div class="form-group">
                            <label for="name">
                                Wiadomość</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Wprowadź wiadomość"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Wyślij wiadomość</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Nasze biuro</legend>
            <address>
                <strong>Xxxxxx, Xxx.</strong><br>
                XXX Xxx, Xxxxx 600<br>
                XXXX, 26-600<br>
                <abbr title="Phone">
                    Telefon:</abbr>
                (123) 456-789-090
            </address>
            <address>
                <strong>Nasz email</strong><br>
                <a href="mailto:#" style="color:black;">first.email@example.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
<?php include 'application/templates/views/viewsStart/footer.php'; ?>
