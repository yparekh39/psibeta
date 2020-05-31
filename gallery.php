﻿<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Our Officers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon"/>
        <link rel="icon" href="/img/favicon.ico" type="image/x-icon"/>
        <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/paper/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:700italic,400,700|Roboto+Slab:400,700&subset=latin,greek' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="//cdn.jsdelivr.net/emojione/1.5.0/lib/js/emojione.min.js"></script>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/emojione/1.5.0/assets/css/emojione.min.css" />
        <link href='css/style.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/officers_style.css" type="text/css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112784200-1">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-112784200-1');
        </script>
        <style>
        /* [THUMBNAILS] */
        #gallery {
            max-width: 1200px;
            margin: 0 auto;
            margin-top: 70px;
        }
        #gallery img {
            box-sizing: border-box;
            width: 25%;
            max-height: 200px;
            padding: 5px;
            /* fill, contain, cover, scale-down : use whichever you like */
            object-fit: cover;
        }
 
        /* [RESPONSIVE - MOBILE FRIENDLY] */
        @media screen and (max-width: 850px) {
            #gallery img { width: 33%; }
        }
        @media screen and (max-width: 640px) {
            #gallery img { width: 50%; }
        }
 
        /* [DOES NOT MATTER] */
        body, html {
            padding: 0;
            margin: 0;
        }
        </style>

    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <!-- this will render as the hamburger menu on mobile devices -->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">ΘΤ - Psi Beta</a>
                </div>

                <!-- the collapse and navbar-collapse classes organize the navbar links for toggling the menu on mobile devices -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="rush.html">Rush</a></li>
                        <li><a href="about.html">About</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Members <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="actives.html">Actives</a></li>
                                <li><a href="alumni.html">Alumni</a></li>
                            </ul>
                        </li>
                        <li><a href="officers.html">Officers</a></li>
                        <li><a href="https://calendar.google.com/calendar/b/2?cid=Z2NoZTMwMmRpbzR2c3IyazI1Y2dwcmx1NHNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ"target="_blank">Calendar</a></li>
                        <li><a href="http://www.thetatau.org">Nationals</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://squareup.com/store/theta-tau-psi-beta/">Store</a></li>
                        <li><a href="https://www.facebook.com/ThetaTauPsiBeta" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div><!-- .navbar-collapse -->
            </div><!-- .container-fluid -->
        </nav>
       

        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/handlebarsjs/1.3.0/handlebars.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/underscorejs/1.6.0/underscore-min.js"></script>
        <script type="text/javascript"></script>

         <!-- [THE GALLERY] -->
        <div id="gallery">
            <script>
            var index = 1;
            var tempImg = new Image();
            tempImg.onload = function(){
               index++;
               appendImage();
            }
            var tryLoadImage = function( index ){
               tempImg.src = 'gallery/' + index + '.JPG';
            }
            var appendImage = function(){
               var img = document.createElement('img');
               img.src = tempImg.src;
               document.activeElement.appendChild( img )
               tryLoadImage( index )
            }
            tryLoadImage( index );
            </script>
        </div>
        <div class='footer'>
            <h3>"Whatsoever thy hand findeth to do, do it with thy might!" Ecclesiastes 9:10</h3>
        </div>
            

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>