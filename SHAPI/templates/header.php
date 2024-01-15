<head>
	<title>AniNeru</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Borel&family=Dosis:wght@200;300;400;500;600;700;800&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap');

        ::selection{
          background-color: #c89703;
          color: white;
        }

        .brand-logo{
             font-family: Borel;
             font-size: 33px;
        }

/*        .sidenav{
            background-color: #ffc40c !important;
        }*/

        .sidenav{
            overflow: hidden !important;
            
        }


        nav.top-nav{
            height: 110px;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 0.5px solid rgba(0,0,0,0.14);
            background-color: white;
            padding: 15px 30px;
        }

        nav{
            width: 100%;
        }

        body {
            font-family: Titillium Web;
            margin: 0 !important;
            -webkit-font-smoothing: antialiased;
        }

        header{
            padding-left: 300px;
        }

        nav > .container{
            margin: 0 0 !important;
        }
        .row:after{
            content: "";
            display: table;
            clear: both;
        }

        h2{
            font-size: 25pt;
            font-family: 'Titillium Web';
        }

        .logo-section{
            padding-bottom: 15px;
            padding-top: 50px;

            flex-shrink: 0;
/*            display: flex;*/
            margin-left: 1.5rem;
            margin-right: 1.5rem;
        }


        .login-section{
            padding-bottom: 15px;
            padding-top: 20px;
            align-items: center;
            flex-shrink: 0;
/*            display: flex;*/
            margin-left: 1.5rem;
            margin-right: 1.5rem;
        }

        .options-section{
            padding-bottom: 15px;
/*            padding-top: 20px;*/
            align-items: center;
            flex-shrink: 0;
/*            display: flex;*/
            margin-left: 1.5rem;
            margin-right: 1.5rem;
        }



        .logo-section > .brand-logo{
            padding: 20px 20px;
            font-size: 30pt;
        }

        .section-footer{
            font-size: .875rem;
            line-height: 1.25rem;
            padding-bottom: 1rem;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            justify-content: flex-end;
            align-items: center;
            flex-direction: column;
            display: flex;
            background-color: #212121 !important;
            margin-top: 70px !important;
            padding-top: 30px !important;
            margin-bottom: 0 !important;
            bottom: 0 !important;
        }

        .section-footer > .row{
            margin-top: 25px !important;
            margin-bottom: 40px !important;
        }

        main{
            padding-left: 300px;
        }

        .card{
            border-radius: 20px 20px !important;
        }

/*   EFFECTS     */

        .logo-section, .brand-logo{
            -webkit-animation: bounceIn 0.7s ease-out;
            -moz-animation: bounceIn 0.7s ease-out;
            -o-animation: bounceIn 0.7s ease-out;
            animation: bounceIn 0.7s ease-out;

            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -ms-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }

        .logo-section > .brand-logo:hover{
            height: 50px !important;
            color: #ffc40c !important;
            padding: 20px 20px;
            font-size: 30pt;
        }

        a:focus{
            background-color: #ffc40c !important;
            border-radius: 30px 30px !important;
        }

        a:active{
            background-color: #ffc40c !important;
            border-radius: 30px 30px !important;
        }


    </style>
</head>
<body>

<header>
    <nav class="top-nav">
        <div class="container">
            <div class="nav-wrapper">
                <div class="row">
                    <div class="col s12 m12 offset-m1">
                        <h2 class="black-text left">Commissions</h2>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <ul id="nav-mobile" class="sidenav sidenav-fixed" style="transform: translateX(0%);">
            <div class="logo-section center">
                <a href="#" class="brand-logo black-text center">AniNeru</a>
            </div>

            <li class="stat">
                <div class="col s12 m12 l12 center"> Status: OPEN</div>
            </li>

            <div class="login-section">
                <li>
                    <a href="login.php">Log In<i class="material-icons black-text">person</i></a></a>
                </li>
            </div>

            <div class="options-section">
                <li>
                    <a  href="index.php"><i class="material-icons black-text">home</i>Home</a>
                    <a class="" href="">About Me<i class="material-icons black-text">information</i></a>
                    <a class="" href="">Process<i class="material-icons black-text">close</i></a>
                </li>
            </div>

            <div class="artstyle-section">
                <li>
                    <a href="index.php" class="collapsible header waves-effect waves-yellow" tabindex="0">Artstyles</a>
                </li>
                
            </div>


            <div class="section-footer grey-darken-4">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <a href="#" class="btn-floating amber">
                        <i class="fa fa-facebook-f black-text" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="btn-floating amber">
                        <i class="fa fa-instagram black-text" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="btn-floating amber">
                        <i class="fa fa-youtube-play black-text" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="btn-floating amber">
                        <i class="fa fa-twitter black-text" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="footer-copyright grey darken-4 amber-text">
                    <div class="container">
                        <div class=" center row col s12 m12 l12">© 2024 Copyright AniNeru</div>
                    </div>
                </div>
            </div>
       
      
    </ul>


</header>






