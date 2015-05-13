<?php require_once 'layouts/_utils.php' ?>
<?php require_once 'layouts/_head.php' ?>

<!-- WRAPPER -->
<div class="wrapper" id='acasa'>
    <!-- HEADER -->
    <header class="header sides">
        <div class="container htop">
            <div class="col-md-8 col-sm-7">
                <div class="col-md-6 contact-info">
                    <span class="phone">0269 213261</span>
                    <a class="a-email" href="mailto:office@asconsult.ro">office@asconsult.ro</a>
                </div>
                <div class="logo pull-left">
                    <a href="index.html">AS CONSULT</a>
                </div>
                <div class="slogan hidden-xs">Societate de expertiză contabilă, consultanță economico-financiară și fiscală</div>
            </div>
        </div>
        <div class="hbottom right-pos">
            <div class="container">
                <div class="col-md-4 col-sm-3 logo not-sticky">
                    <a href="index.html">AS CONSULT</a>
                </div>
                <div class="col-md-4 contact-info">
                    <span class="phone">0269 213261</span>
                    <a class="a-email" href="mailto:office@asconsult.ro">office@asconsult.ro</a>
                </div>
                <div class="col-md-7 col-sm-10 mainmenu">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <nav>
                            <ul id='main-nav' class="nav navbar-nav pull-right menu-links">
                                <li>
                                    <a href='#acasa'>Acasă</a>
                                </li>
                                <li>
                                    <a href="#despre-noi">Despre noi</a>
                                </li>
                                <li>
                                    <a href="#team">Echipa</a>
                                </li>
                                <!-- <li>
                                    <a href="#testimonials">Clienți</a>
                                </li> -->
                                <li>
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /.header -->

    <!-- HOME -->
    <div class="home">
        <!-- ONESLIDER -->
        <div class="oneslider">
            <ul>
                <li class="large-size overlay">
                    <div class="bg bg-about"></div>
                    <div class="container vmiddle">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-2 col-xs-8 col-xs-offset-2 text-center">
                                <h1><span class="color">AS CONSULT</span></h1>
                            </div>
                            <div class="col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
                                <p class="color-ccc">
                                    AS CONSULT este o companie sibiană care activează din anul 2004 pe piața serviciilor de contabilitate și consultanță economico-financiară și fiscală.  Societatea AS CONSULT este membră <span class="color"><a href="http://ceccar.ro">CECCAR</a></span>, membră a Grupului Experților Judiciari și a <span class="color"><a href="http://www.ccfiscali.ro/">Camerei Consultantilor Fiscali din România</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>
    <!-- /.home -->

    <!-- CONTENT -->
    <div class="content">

        <!-- HIGHLIGHT -->
        <div class="highlight"  id="despre-noi">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Despre noi</h2>
                        <p class="grey">De <?php echo $interval->format('%y'); ?> ani pe piața serviciilor de contabilitate și consultanță economico-financiară și fiscală</p>
                    </div>
                    <div class="col-sm-4">
                        <p>Societatea are un program activ de perfectionare profesionala, in fiecare an participand la numeroase seminarii si cursuri de pregatire, pentru a-si imbunatatii serviciile si pentru a veni in ajutorul clientilor, raspunzandu-le si oferindu-le mereu solutii optime.</p>
                    </div>
                    <div class="col-sm-4">
                        <p>Pentru o prelucrare rapida, eficienta si in siguranta, documentele si datele sunt stocate si prelucrate cu ajutorul celor mai noi softuri si echipamente IT. Folosim servere de date dedicate, backup incremental local si la distanta, conexiuni “remote desktop” sau VPN, precum si semnaturi digitale. Suntem principalul consultant pe linie economico-financiara pentru producatorul softului de contabilitate folosit atat in cadrul firmei cat si de catre multi dintre clientii nostri.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.highlight -->

        <!-- CONTAINER -->
        <div class="container text-center">
            <div class="row">
                <div class="col-md-3 col-sm-6 container">
                    <h3><strong>Consultanță blabla</strong></h3>
                    <p>Wordpress Templates<br>
                        Color Schemes<br>
                        Storage Space<br>
                        Web Development</p>
                </div>
                <div class="col-md-3 col-sm-6 container">
                    <h3><strong>Logo Design</strong></h3>
                    <p>Wordpress Templates<br>
                        Web Development<br>
                        Storage Space<br>
                        Custom Domain</p>
                </div>
                <div class="col-md-3 col-sm-6 container">
                    <h3><strong>Video Production</strong></h3>
                    <p>Wordpress Templates<br>
                        Color Schemes<br>
                        Unlimited Plan<br>
                        Web Development</p>
                </div>
                <div class="col-md-3 col-sm-6 container">
                    <h3><strong>Web Development</strong></h3>
                    <p>Wordpress Templates<br>
                        Color Schemes<br>
                        Storage Space<br>
                        Unlimited Plan</p>
                </div>
            </div>
        </div>
        <!-- /.container -->

        <!-- CONTAINER -->
        <div class="container team text-center" id='team'>
            <div class="row">
                <div class="page-header col-sm-8 col-sm-offset-2">
                    <h2>Echipa noastră</h2>
                </div>
            </div>
            <div class="row">
                <!-- .profile -->
                <div class="col-md-3 profile">
                    <h3>Annamaria Nicolau</h3>
                    <h5>Asociat, Administrator</h5>
                    <h5>Expert contabil, consultant fiscal, expert judiciar</h5>
                    <a class="a-email" href="mailto:liviana@asconsult.ro">liviana@asconsult.ro</a><br>
                    <a href="tel:0040722552001">0722 552 001</a><br>
                </div>
                <!-- .profile -->
                <div class="col-md-3 profile">
                    <h3>Emilia David</h3>
                    <h5>Asociat, Administrator</h5>
                    <h5>Expert contabil, expert judiciar</h5>
                    <a class="a-email" href="mailto:emilia@asconsult.ro">emilia@asconsult.ro</a><br>
                    <a href="tel:0040745765783">0745 765 783</a><br>
                    <a href="tel:0040723285945">0723 285 945</a>
                </div>

                <br>

                <!-- .profile -->
                <div class="col-md-3 profile">
                    <h3>Floarea Tomescu</h3>
                    <h5>Economist</h5>
                    <a href="tel:0040752088620">0752 088 620</a><br>
                </div>

                <!-- .profile -->
                <div class="col-md-3 profile">
                    <h3>Mara Luca</h3>
                    <h5>Consilier economic</h5>
                    <a href="tel:0040752088620">0752 088 620</a><br>
                </div>

                <!-- .profile -->
                <div class="col-md-3 profile">
                    <h3>Ramona Pop</h3>
                    <h5>Economist</h5>
                    <a href="tel:0040752088620">0752 088 620</a><br>
                    <a class="a-email" href="mailto:asconsultmail@gmail.com">asconsultmail@gmail.com</a><br>
                </div>

            </div>
        </div>
        <!-- /.container -->

        <!-- CONTAINER -->
<!--         <span id="testimonials">
        <div class="slider highlight text-center oneslider">
            <ul data-auto="true">
                <li>
                    <div class="container big-padding">
                        <div class="col-xs-8 col-xs-offset-2">
                            <blockquote class="lead">Suntem clienți AS CONSULT încă din 2004 și am fost întotdeauna impresionați de calitatea serviciilor oferite!</blockquote>
                            <h4>Mihai Târnovan</h4>
                            <small>Cubus Arts, Asociat</small>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="container big-padding">
                        <div class="col-xs-8 col-xs-offset-2">
                            <blockquote class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </blockquote>
                            <h4>Gigi Kent</h4>
                            <small>Coca Cola, CEO</small>
                        </div>
                    </div>
                </li>
            </ul> -->
            <div class="slidebar">
                <a href="#" class="arrow prev">
                    <i class="custom-icon custom-icon-arrow-prev"></i>
                </a>
                <a href="#" class="arrow next">
                    <i class="custom-icon custom-icon-arrow-next"></i>
                </a>
            </div>
        </div>
        </span>
        <!-- /.container -->

        <!-- CONTAINER: Logos -->
        <div class="container slider logos text-center" id="clients-slider">
            <div class="row">
                <ul>
                    <li><a href="clients_1.html"><img src="http://placehold.it/200x110&text=sigla-ue-sau-client" alt=""></a></li>
                    <li><a href="clients_2.html"><img src="http://placehold.it/200x110&text=sigla-ue-sau-client" alt=""></a></li>
                    <li><a href="clients_1.html"><img src="http://placehold.it/200x110&text=sigla-ue-sau-client" alt=""></a></li>
                    <li><a href="clients_2.html"><img src="http://placehold.it/200x110&text=sigla-ue-sau-client" alt=""></a></li>
                </ul>
            </div>
        </div>
        <!-- /.container -->


        <!-- CONTACT-form -->
        <div class="container padding-top" id='contact'>
            <div class="row">
              <div class="col-sm-4">
                  <h3>S.C. AS CONSULT S.R.L</h3>
                  <address>
                      CUI R16384323<br>
                      Reg. Com. J32/653/2004<br>
                      <a href="mailto:office@asconsult.ro">office@asconsult.ro</a><br>
                      <a href="tel:0269213261">0269 213261</a>
                      <br><br>
                      Aleea Taberei, nr.3/21<br>
                      Sibiu
                  </address>
                  <p>&copy; <?php echo date('Y') ?> Toate drepturile rezervate</p>
              </div>
                <div class="col-sm-7 col-sm-offset-1">
                    <p>Scrie-ne un mesaj</p>
                    <form action="php/email.php" method="post" id="send-form">
                        <div class="formwrap">
                            <div class="form-group">
                                <input type="text" name="name" id="send-form-name" placeholder="Nume">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="send-form-email" placeholder="Adresa Dvs. de email">
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Mesaj" id="send-form-message"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-wd">Trimite</button>
                        <h4 class="succs-msg">Mulțumim, mesajul Dvs. a fost trimis.</h4>
                    </form>
                </div>
            </div>
        </div>

        <!-- CONTACT-map -->
        <div class="contact-map margin-top-big">
            <div id="contact-map" class="contact-map-medium"></div>
        </div>


    </div>
    <!-- /.content -->
</div>
<!-- /.wrapper -->


<?php require_once 'layouts/_footer.php' ?>

