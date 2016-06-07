<!DOCTYPE html>
<html>
    <head>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="bower_components/Materialize/dist/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo">Portfolio</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#about">A propos</a></li>
                <li><a href="#skills">Compétences</a></li>
                <li><a href="#education">Formations</a></li>
                <li><a href="#experience">Expérience</a></li>
                <li><a href="#calendar">Calendrier</a></li>
                <li><a href="#contact">Me contacter</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="#">A propos</a></li>
                <li><a href="#">Compétences</a></li>
                <li><a href="#">Formations</a></li>
                <li><a href="#">Expérience</a></li>
                <li><a href="#">Calendrier</a></li>
                <li><a href="#">Me contacter</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    </div>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
            </div>
        </div>
    </div>

    <div class="container">
          <!--   About Section   -->
        <section id="about" class="section scrollspy">
            <div class="row">
                <div class="profile">
                    <div class="col s4">
                        <div class="profil-about">
                            <h5 class="profile-title"><span class="teal-text"> A propos</span></h5>
                            <p> Hello, je suis une développeuse passionnée, front et back, diplomée d'un Master 1 Développement Logiciel, de l'Université de Toulouse. <br>
                             Mon livre de chevet n'est autre que "PHP5 avancé"​ avec seulement 850 pages... <br>
                             Et quand je suis bloquée sur un bug, je vais me chanegr les idées grâce à la photo et l'escalade ! </p>
                            <a class="waves-effect btn"><i class="zmdi zmdi-download left"></i> Télécharger CV</a>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="profil-img">
                            <img src="images/profil.jpg" alt="" style="width:100%;">
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="profile-info">
                            <h5 class="profile-title">Je suis<span class="teal-text"> Jennifer Buisson</span></h5>
                            <h5 class="profile-job">Développeuse full-stack</h5>
                            <hr>
                            <ul class="profile-list">
                                <li class="clearfix">
                                    <strong class="title">Age</strong>
                                    <span class="text-right">26</span>
                                </li>
                                <li class="clearfix">
                                    <strong class="title">Adresse</strong>
                                    <span class="text-right">74140 Massongy</span>
                                </li>
                                <li class="clearfix">
                                    <strong class="title">E-mail</strong>
                                    <span class="text-right"><a href="mailto:jnroudet@gmail.com">jnroudet@gmail.com</a></span>
                                </li>
                                <li class="clearfix">
                                    <strong class="title">Téléphone</strong>
                                    <span class="text-right"><a href="tel:+33652343557">+33 6 52 34 35 57</a></span>
                                </li>
                                <li class="clearfix">
                                    <strong class="title">Situation</strong>
                                    <span class="text-right">Célibataire</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <div class="profile-social">
            <ul class="social">
                <li><a class="btn-floating btn-flat btn-large waves-effect waves-light" href="https://twitter.com" target="_blank"><i class="zmdi zmdi-twitter zmdi-hc-lg"></i></a></li>
                <li><a class="btn-floating btn-flat btn-large waves-effect waves-light" href="https://www.linkedin.com" target="_blank"><i class="zmdi zmdi-linkedin zmdi-hc-lg"></i></a></li>
                <li><a class="btn-floating btn-flat btn-large waves-effect waves-light" href="https://www.viadeo.com" target="_blank"><i class="fa fa-viadeo fa-lg" aria-hidden="true"></i></a></li>
                <li><a class="btn-floating btn-flat btn-large waves-effect waves-light" href="https://www.flikr.com" target="_blank"><i class="zmdi zmdi-flickr zmdi-hc-lg"></i></a></li>
                <li><a class="btn-floating btn-flat btn-large waves-effect waves-light" href="https://www.github.com" target="_blank"><i class="zmdi zmdi-github-alt zmdi-hc-lg"></i></a></li>
            </ul>
        </div>
    </div>

    <section id="skills" class="section scrollspy">
        <div class="container">
            <div class="row">
                <h5 class="teal-text text-lighten-1 center">Compétences</h5>
                <div class="skill-right">
                    <div id="skill-slider" class="clearfix">
                        <div class="skill-item" style="width: 91px;">
                            <div class="single-skill">
                                <div class="after-li">
                                    <div class="singel-hr">
                                        <div class="singel-hr-inner" data-height="70%">
                                            <div class="skill-visiable">
                                                <span class="skill-title">Symfony</span>
                                                <div class="hr-wrap">
                                                    <div class="hrc"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="skill-count">70%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item" style="width: 91px;">
                            <div class="single-skill">
                                <div class="after-li">
                                    <div class="singel-hr">
                                        <div class="singel-hr-inner" data-height="80%">
                                            <div class="skill-visiable">
                                                <span class="skill-title">PHP</span>
                                                <div class="hr-wrap">
                                                    <div class="hrc"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="skill-count">80%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item" style="width: 91px;">
                            <div class="single-skill">
                                <div class="after-li">
                                    <div class="singel-hr">
                                        <div class="singel-hr-inner" data-height="75%">
                                            <div class="skill-visiable">
                                                <span class="skill-title" style="top: -130px;">Javascript</br>JQuery</span>
                                                <div class="hr-wrap">
                                                    <div class="hrc"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="skill-count">75%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item" style="width: 91px;">
                            <div class="single-skill">
                                <div class="after-li">
                                    <div class="singel-hr">
                                        <div class="singel-hr-inner" data-height="90%">
                                            <div class="skill-visiable">
                                                <span class="skill-title">HTML/CSS</span>
                                                <div class="hr-wrap">
                                                    <div class="hrc"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="skill-count">90%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item" style="width: 91px;">
                            <div class="single-skill">
                                <div class="after-li">
                                    <div class="singel-hr">
                                        <div class="singel-hr-inner" data-height="70%">
                                            <div class="skill-visiable">
                                                <span class="skill-title" style="top: -130px;">Maquettage </br>Intégration Web</span>
                                                <div class="hr-wrap">
                                                    <div class="hrc"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="skill-count">70%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item" style="width: 91px;">
                            <div class="single-skill">
                                <div class="after-li">
                                    <div class="singel-hr">
                                        <div class="singel-hr-inner" data-height="60%">
                                            <div class="skill-visiable">
                                                <span class="skill-title">Java/Android</span>
                                                <div class="hr-wrap">
                                                    <div class="hrc"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="skill-count">60%</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item" style="width: 91px;">
                            <div class="single-skill">
                                <div class="after-li">
                                    <div class="singel-hr">
                                        <div class="singel-hr-inner" data-height="80%">
                                            <div class="skill-visiable">
                                                <span class="skill-title">MySQL</span>
                                                <div class="hr-wrap">
                                                    <div class="hrc"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="skill-count">80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="education" class="section scrollspy">
        <div class="row">
            <h5 class="white-text center">Formations</h5>
            <div class="col s9 offset-s2">
                <ul class="timeline">
                    <li class="event" data-date="2013/2014">
                        <h3>Master 1 Développement Logiciel</h3>
                        <p>Université Toulouse 3</p>
                    </li>
                    <li class="event" data-date="2009/2012">
                        <h3>Licence Informatique</h3>
                        <p>Université Montpellier 2</p>
                    </li>
                    <li class="event" data-date="2008">
                        <h3>Baccalauréat</h3>
                        <p>Lycée Paul Héroult, St Jean de Mnne</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

        <section id="experience" class="section scrollspy">
            <div class="row">
                <h5 class="teal-text text-lighten-1 center">Expériences</h5>
                <div class="col s10 offset-s1">
                    <div class="col s5 offset-s1">
                        <div class="card small">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/matooma-logo.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator">Matooma, Montpellier, France<i class="material-icons right">more_vert</i></span>
                                <div class="card-action">
                                    <p class="teal-text text-lighten-1">Octobre 2014 - aujourd'hui</p>
                                </div>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Ingénieur Etudes et Développement<i class="material-icons right">close</i></span>
                                <p>Développement et maintenance de la plateforme M2MManager en proposant et mettant en œuvre les choix techniques d’évolution.<br>
                                Participation à la mise en place de process de gestion de projet inspirés des méthodes agiles.<br>
                                Production de maquettes graphiques et intégration Web.<br>
                                Développement d'un CRM en interne basé sur OroCRM.<br>
                                Développement d'Api pour permettre au frontend de communiquer avec notre CRM.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s5">
                        <div class="card small">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/sopra.png" style="width: 210px; margin: auto;">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator">Steria, Toulouse, France<i class="material-icons right">more_vert</i></span>
                                <div class="card-action">
                                    <p class="teal-text text-lighten-1">Mai 2014 - Aout 2014</p>
                                </div>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Stage<i class="material-icons right">close</i></span>
                                <p>Développement d'une application web de gestion des charges d'un projet.<br>
                                Identification des besoins du client pour lui proposer un produit en adéquation avec ses besoins.<br>
                                Développement en mode Agile.<br>
                                Utilisation du framework Laravel.<br>
                                Découverte de l'ergonomie Web.<br>
                                Apprentissage en autodidacte.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="calendar" class="section scrollspy">
            <h5 class="white-text center">Disponibilité</h5>
            <div class="calendar-dispo">
                <div class="calendar-cont">
                    <div class="calendar-header">
                        <div class="calendar-nav">
                            <span class="active-date"><span class="active-month"></span><span class="active-year"></span></span>
                            <a class="calendar-prev ripple-centered" title="Prev"><i class="zmdi zmdi-chevron-left"></i></a>
                            <a class="calendar-next ripple-centered" title="Next"><i class="zmdi zmdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <table class="calendar-body">
                        <thead class="calendar-thead"></thead>
                        <tbody class="calendar-tbody"></tbody>
                    </table>
                </div>
            </div>
        </section>

        <section id="contact" class="section scrollspy">
            <div class="container">
                <h5 class="teal-text text-lighten-1 center">Contact</h5>
                <div class="row">
                    <div class="contact-inner">
                        <div class="col s12">
                            <div class="row">
                                <div class="clearfix">
                                    <div class="col s12">
                                        <ul class="clearfix contact-info">
                                            <li>Lotissement les Crêts, 74140 Massongy</li>
                                            <li><a href="">+33 652 34 35 57</a></li>
                                            <li><a href="">jnroudet@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="col s7">
                                        <div class="map-wrapper">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d88248.72703303394!2d6.22154334632954!3d46.27462090003929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c6a4eca7d794f%3A0xda285a27d8205b72!2sLotissement+les+Cr%C3%AAts%2C+74140+Massongy!5e0!3m2!1sfr!2sfr!4v1465305533669" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <div class="col s5">
                                        <div class="card-panel">
                                            <form action="#" id="contactForm" novalidate="">
                                                <div class="input-field col s12">
                                                    <input id="contact_name" type="text" name="contactName" class="validate">
                                                    <label for="contact_name">Nom</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input id="email" type="email" name="contactEmail" class="validate">
                                                    <label for="email">Email</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input id="subject" type="text" name="contactSubject" class="validate">
                                                    <label for="subject">Sujet</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <textarea id="textarea1" name="contactMessage" class="materialize-textarea"></textarea>
                                                    <label for="textarea1">Message</label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <button type="submit" class="waves-effect waves-light btn">Envoyer</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <a class="btn btn-floating waves-effect waves-light back-to-top animatescroll-link" href="#about">
                        <span class="fa fa-angle-up"></span>
                    </a>
                    <div class="social-links">
                        <a class="waves-effect waves-light" href="#0"><span class="fa fa-facebook"></span></a>
                        <a class="waves-effect waves-light" href="#0"><span class="fa fa-twitter"></span></a>
                        <a class="waves-effect waves-light" href="#0"><span class="fa fa-google-plus"></span></a>
                        <a class="waves-effect waves-light" href="#0"><span class="fa fa-linkedin"></span></a>
                        <a class="waves-effect waves-light" href="#0"><span class="fa fa-github"></span></a>
                        <a class="waves-effect waves-light" href="#0"><span class="fa fa-skype"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script type="text/javascript" src="bower_components/Materialize/dist/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('.scrollspy').scrollSpy();
            $('#skills').waypoint({
                handler: function(event, direction) {
                    $('#skills').find('.singel-hr-inner').each(function(){
                        var height = $(this).data('height');
                        $(this).css('height', height);
                    });
                },
                offset: 'bottom-in-view'
            });
        });
    </script>
  </body>
</html>