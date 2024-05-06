<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CMuli:100,300,400,600,800">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader" id="loading">
      <div class="preloader-body">
        <div id="loading-center-object">
          <div class="object" id="object_four"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_one"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
        <?php
include('asset/navbar.php');
      ?>
        </div>
      </header>
      <section class="breadcrumbs-custom">
        <div class="breadcrumbs-custom-main context-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-xl-9">
                <h2 class="breadcrumbs-custom-title">Contactez-Nous</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Acceuil</a></li>
              <li class="active">Contactez-Nous</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section-md">
        <div class="container">
          <div class="row row-50">
            <div class="col-xl-5">
              <div class="inset-1">
                <h2>Notre bureau</h2>
                <div class="row row-50">
                  <div class="col-sm-6 col-xl-12">
                    <p class="heading-7">Bureau 1</p>
                    <ul class="list list-style-1">
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-map-marker"></span>
                        <div class="unit-body"><a href="#">279 Rue du Faubourg, 01400 Dompierre sur chalaronne</a></div>
                      </li>
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-cellphone"></span>
                        <div class="unit-body"><a href="tel:#">+33 6 28 03 65 78</a></div>
                      </li>
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-email-outline"></span>
                        <div class="unit-body"><a class="text-accent" href="mailto:#">contact@digitalweb-dynamics.com</a></div>
                      </li>
                    </ul>
                  </div>
                  
                </div>
              </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22115.505055548525!2d4.879797430975198!3d46.142020999937614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f3605619b3a077%3A0x408ab2ae4c21050!2sDompierre-sur-Chalaronne!5e0!3m2!1sfr!2sfr!4v1714936093906!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
          </div>
        </div>
      </section>
      <!-- Get in Touch-->
      <section class="section section-md bg-gray-100">
        <div class="container">
          <h3 class="text-center">Nous envoyer un message</h3>
          <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9">
              <!-- RD Mailform-->
              <form class="rd-mailform rd-form" data-form-output="form-output-global" data-form-type="contact" method="post" action="asset/demande_formulaire_contact.php">
                <div class="row row-x-16 row-20">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-name">Votre Nom</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                      <label class="form-label" for="contact-email">Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Message</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                      <label class="form-label" for="contact-phone">Telephone</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap form-button">
                      <button class="button button-block button-primary" type="submit">Envoyer le message</button>
                    </div>
                  </div>
                </div>
              </form>
              </div>
          </div>
        </div>

              <section class="section section-md bg-gray-100">
        <div class="container">
          <h3 class="text-center">Nous envoyer un message</h3>
          <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9">


              <form action="asset/demande_formulaire_contact.php" method="post">
              <div class="row row-x-16 row-20">
                  <div class="col-md-6">
                    <div class="form-wrap">

            <label for="nom">Nom :</label>
            <input class="form-input" id="contact-name" type="text" name="nom" data-constraints="@Required">

            </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">

            <label for="prenom">Prénom :</label>
            <input class="form-input" id="contact-email" type="email" name="prenom" data-constraints="@Required @Email">

</div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">

            <label for="email">Email :</label>
            <input class="form-input" id="contact-name" type="text" name="email" data-constraints="@Required">

 </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">

            <label for="telephone">Téléphone :</label>
            <input class="form-input" id="contact-name" type="text" name="tel" data-constraints="@Required">

            </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
            <label for="description">Description :</label>
            <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>

</div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap form-button">

            <input class="button button-block button-primary" type="submit" value="Envoyer">

            </div>
                  </div>
                </div>
        </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <?php
include('asset/footbar.php');
      ?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>