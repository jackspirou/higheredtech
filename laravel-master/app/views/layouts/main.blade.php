<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <!-- Metadata Info -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Page Title & Favicon -->
  <title>{{ $title }}</title>
  <link rel="shortcut icon" href="../../assets/ico/favicon.png">

  <!-- Render Bootstrap Styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.min.css') }}">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

  <!-- Render Style.less -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  <!-- Use Font Awesome Icons Instead of Glyphicons -->
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
        <script src="{{ asset('assets/js/vendor/html5shiv.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/respond.min.js') }}"></script>
        <![endif]-->

  <!-- Render Page Specific Styles -->
  @yield('css')

  <!-- Render Modernizr Javascript For HTML5 Compatibility -->
  <script src="{{ asset('assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>

</head>

<body id="top">

  <!-- Perform Browser IE 6 Check -->
  <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

  <div class="container-fluid">

    <div class="media background-color hidden-xs">
      <div class="container">
        <a class="pull-left" href="{{ route('home') }}">
          <img class="logo" class="pull-left" src="{{ asset('assets/img/logos/higheredtech-logo.png') }}">
        </a>
        <div class="media-body">
          <div style="margin-top: 30px; margin-left: 25px;">
            <h2 class="roboto"><strong>2nd International Conference on Technology in Higher Education</strong></h2>
            <h4><em><a href="{{ route('theGlobalForum') }}">The Global Forum on Technology in Higher Education</a> in Collaboration with <a href="http://www.uh2c.ac.ma/">Hassan II University</a></em> <br > <small>June 1-4, 2016</small></h4>

            <a href="https://twitter.com/HighrEdTech"><i class="icon-twitter icon-2x"></i></a>
            <a href="https://www.facebook.com/pages/International-Conference-on-Technology-in-Higher-Education/1578486185706504"><i class="icon-facebook icon-2x"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- WRAP NAVBAR IN CONTAINER TO CENTER IT -->
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">

        <!-- RESPONSIVE NAVBAR PART 1: HIDDEN NAV BUTTON FOR MOBILE DEVICES -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <ul style="display: inline-block;" class="nav nav-pills pull-left">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">The Conference <b class="caret"></b></a>
              <ul class="dropdown-menu">
                {{ HTML::nav_link_a_route('conferenceOverview', 'Overview' ) }} {{ HTML::nav_link_a_route('submissionInformation', 'Submission Information' ) }} {{ HTML::nav_link_a_route('committee', 'Planning Committee' ) }} {{ HTML::nav_link_a_route('keyDates', 'Key Dates' ) }} {{ HTML::nav_link_a_route('registrationFees', 'Registration Fee' ) }}
                <li><a target="_blank" href="http://www.elandalous-marrakech.com/html/en-index.php">Accommodations</a>
                </li>
                {{ HTML::nav_link_a_route('postConferenceActivities', 'Post Conference Activities' ) }}
              </ul>
            </li>
          </ul>
        </div>

        <!-- RESPONSIVE NAVBAR PART 2: COLLAPSABLE CONTAINER FOR NAV OPTIONS -->
        <div class="navbar-collapse collapse">
          <div class="container-fluid hidden-xs">
            <ul style="display: inline-block;" class="nav nav-pills">
              {{ HTML::nav_link_a_route('callForPresentations', 'Call For Presentations' ) }}
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Location <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a target="_blank" href="http://www.elandalous-marrakech.com/html/en-conference.php">Conference Site</a>
                  </li>
                  {{ HTML::nav_link_a_route('location', 'About Marrakech' ) }}
                  <li><a target="_blank" href="https://onedrive.live.com/view.aspx?Bsrc=Share&Bpub=SDX.SkyDrive&resid=6607C8711C191A28!406&cid=6607c8711c191a28&app=Word&authkey=!AuaEHOGTPqSjqEw">Morocco History</a>
                  </li>
                  {{ HTML::nav_link_a_route('tours', 'Marrakech Tours' ) }}
                  <li><a target="_blank" href="https://onedrive.live.com/view.aspx?Bsrc=Share&Bpub=SDX.SkyDrive&resid=6607C8711C191A28!682&cid=6607c8711c191a28&app=Word&authkey=!AuaEHOGTPqSjqEw">Traveling Suggestions</a>
                  </li>
                </ul>
              </li>
              <li><a href="{{ asset('assets/docs/Conference_Program.pdf') }}">2015 Program</a>
              </li>
            </ul>

            <ul style="display: inline-block;" class="nav nav-pills navbar-right">
              {{ HTML::nav_link_a_route('contact', 'Contact' ) }}
              <li><a target="_blank" href="https://www.regonline.com/higheredtech">Register</a>
              </li>
            </ul>
          </div>

          <div class="container-fluid visible-xs">
            <ul class="nav navbar-nav">
              {{ HTML::nav_link_a_route('callForPresentations', 'Call For Presentations' ) }}
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Location <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a target="_blank" href="http://www.elandalous-marrakech.com/html/en-conference.php">Conference Site</a>
                  </li>
                  {{ HTML::nav_link_a_route('location', 'About Marrakech' ) }}
                </ul>
              </li>
              <li><a href="{{ asset('assets/docs/Conference_Program.pdf') }}">2015 Program</a>
              </li>
            </ul>

            <ul class="nav navbar-nav">
              {{ HTML::nav_link_a_route('contact', 'Contact' ) }}
              <li><a target="_blank" href="https://www.regonline.com/higheredtech">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div id="content" class="content">

      <!-- Render Page Content -->
      @yield('content')

    </div>


    <!-- Site footer -->
    <div class="footer">

      <div class="container-fluid background-color">
        <hr></hr>
        <div class="row">
          <!--
                    <div class="col-lg-12">
                      <div class="col-md-3">
                        <ul class="list-unstyled">
                          <li>GitHub<li>
                              <li><a href="#">About us</a></li>
                              <li><a href="#">Blog</a></li>
                              <li><a href="#">Contact & support</a></li>
                              <li><a href="#">Enterprise</a></li>
                              <li><a href="#">Site status</a></li>
                          </ul>
                      </div>
                      <div class="col-md-3">
                        <ul class="list-unstyled">
                          <li>Applications<li>
                              <li><a href="#">Product for Mac</a></li>
                              <li><a href="#">Product for Windows</a></li>
                              <li><a href="#">Product for Eclipse</a></li>
                              <li><a href="#">Product mobile apps</a></li>
                          </ul>
                      </div>
                      <div class="col-md-3">
                        <ul class="list-unstyled">
                          <li>Services<li>
                              <li><a href="#">Web analytics</a></li>
                              <li><a href="#">Presentations</a></li>
                              <li><a href="#">Code snippets</a></li>
                              <li><a href="#">Job board</a></li>
                          </ul>
                      </div>
                      <div class="col-md-3">
                        <ul class="list-unstyled">
                          <li>Documentation<li>
                              <li><a href="#">Product Help</a></li>
                              <li><a href="#">Developer API</a></li>
                              <li><a href="#">Product Markdown</a></li>
                              <li><a href="#">Product Pages</a></li>
                          </ul>
                      </div>
                  </div>
              -->
        </div>
        <hr>
        <div class="container text-center" style="padding-bottom: 25px;">
          <a href="https://twitter.com/HighrEdTech"><i class="icon-twitter icon-4x"></i></a>
          <a href="https://www.facebook.com/pages/International-Conference-on-Technology-in-Higher-Education/1578486185706504"><i class="icon-facebook icon-4x"></i></a>
        </div>


    </div>

  </div>

  </div>

  <!-- Render Javascript Libraries At End Of Document So Pages Load Faster -->

  <!-- Render jQuery First -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')
  </script>

  <!-- Render html5shiv.js Javascript -->
  <script src="{{ asset('assets/js/vendor/html5shiv.js') }}"></script>

  <!-- Render Bootstrap Javascript -->
  <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>

  <!-- Render Extra Javascript Plugins/Libraries -->
  <script src="{{ asset('assets/js/plugins.js') }}"></script>

  <!-- Render Main Template Javascript -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <!-- Render Page Specific Javascript -->
  @yield('js')

  <!-- Render Google Analytics Javascript -->
  <script>
    var _gaq = [
      ['_setAccount', 'UA-53869612-1'],
      ['_trackPageview']
    ];
    (function(d, t) {
      var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
      g.src = '//www.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g, s)
    }(document, 'script'));
  </script>

</body>

</html>
