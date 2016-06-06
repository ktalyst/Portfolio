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
                <li><a href="#profile">A propos</a></li>
                <li><a href="#skills">Compétences</a></li>
                <li><a href="#education">Formations</a></li>
                <li><a href="#experience">Expérience</a></li>
                <li><a href="#">Calendrier</a></li>
                <li><a href="#">Me contacter</a></li>
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
    <div class="container">
          <!--   SKILLS Section   -->
        <section id="skills" class="section scrollspy">
            <div class="row">
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
                                                <span class="skill-title">Javascript/JQuery</span>
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
                                                <span class="skill-title">Maquettage Web/Intégration</span>
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
        </section>
    </div>
        <section id="education" class="section scrollspy">
            <div class="row">
                <div class="col s3 offset-s1" style="position: relative;">
                    <div class="circle-dashed" style="margin-top: 54%;">
                    </div>
                    <div class="education-title">
                        <strong>Baccalauréat S</strong>
                        <p class="blue-text">Lycée Paul Héroult, St Jean de Mnne</p>
                    </div>
                </div>
                <div class="col s3" style="position: relative;">
                    <div class="circle-dashed" style="margin-top: 46%;">
                    </div>
                    <div class="education-title">
                        <strong>Licence Informatique</strong>
                        <p class="blue-text">Université Montpellier 2</p>
                    </div>
                </div>
                <div class="col s3" style="position: relative;">
                    <div class="circle-dashed" style="margin-top: 35%;">
                    </div>
                    <div class="education-title">
                        <strong>Master 1 Développement Logiciel</strong>
                        <p class="blue-text">Université Toulouse 3</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="experience" class="section scrollspy">
            <div class="row">
                <div class="col s10 offset-s1">
                    <div class="col s4 offset-s2">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/matooma-logo.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Matooma, Montpellier, France</span>
                                <p>Développement et maintenance de la plateforme M2MManager en proposant et mettant en œuvre les choix techniques d’évolution.<br>
                                Participation à la mise en place de process de gestion de projet inspirés des méthodes agiles.<br>
                                Production de maquettes graphiques et intégration Web.<br>
                                Développement d'un CRM en interne basé sur OroCRM.<br>
                                Développement d'Api pour permettre au frontend de communiquer avec notre CRM.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">Octobre 2014 - aujourd'hui</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/sopra.jpeg">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Steria, Toulouse, France</span>
                                <p>Développement d'une application web de gestion des charges d'un projet.<br>
                                Identification des besoins du client pour lui proposer un produit en adéquation avec ses besoins.<br>
                                Développement en mode Agile.<br>
                                Utilisation du framework Laravel.<br>
                                Découverte de l'ergonomie Web.<br>
                                Apprentissage en autodidacte.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">Mai 2014 - Aout 2014</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script type="text/javascript" src="bower_components/Materialize/dist/js/materialize.min.js"></script>
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