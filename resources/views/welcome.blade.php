<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Security Fighters</title>

        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
            <style>
            .title {
                position: fixed;
                font-family: 'Oswald', sans-serif;
                font-size: 65px;
                top: 0;
                left: 0;
                width:310px;
                z-index: 2;
                background-color: black;
            
            }
            .form-title {
                position: fixed;
                font-family: 'Oswald', sans-serif;
                font-size: 65px;
                bottom: 0;
                right: 0;
                /*background-color:black;*/
                backface-visibility: hidden;
                background-color: transparent;
            
            }
            .parallax {
                background-image: url("img/hooded.jpeg");
                height: 1500px;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            #footer {
                position: absolute;
                bottom: 0;
            }
            .relative{
                position:relative;
                width:600px;
                height:400px;
            }

            .section {
            /* position is static by default */
            margin-left: 300px;
            margin-right: 300px;
            }
            .headshot
            {
                background-image: url(http://collab.dev/img/headshot.png);
                position: absolute;
                height: 200px;
                width: 140px;
                left:200px;
                background-size: 74%;
                background-position: left top;
                background-repeat: no-repeat;
            }
            .guitar
            {
                position: absolute;
                margin-left: 760px;
            }
            .sidebar
            {
                position: absolute;
                left: 0px;
                width: 200px;
            }

            .overlay {
            height: 15%;
            width: 0;
            position: fixed;
            z-index: 3;
            top: 0;
            left: 0;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.9);
            overflow-x: hidden;
            transition: 0.5s;
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }
        .overlay-contact {
            height: 30%;
            width: 0%;
            position: fixed;
            z-index: 2;
            bottom: 0;
            right: 0;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.9);
            overflow-x: hidden;
            transition: 0.5s;
        }

        .overlay-contact-content {
            bottom: 25%;
            text-align: center;
           font-size: 36px;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            
            transition: 0.3s;
        }

        .overlay a:hover, .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        @media screen and (max-height: 450px) {
          .overlay a {font-size: 20px}
          .overlay .closebtn {
            font-size: 40px;
            top: 15px;
            right: 35px;
          }
        }
            p 
            {
                 font-size: 20px;
                 font-family: 'Open Sans;, sans-serif;
            }
            h1
            {
                font-size:30px;
                font-family: 'Oswald', sans-serif;
            }
            body { 
             background: #ccc;
              font-family: Open Sans;
              font-size: 13px;
              /*text-transform: uppercase;*/
              text-align: center;
              
            }
             
            .wrap {
              display: inline-block;
            }
            footer {
              position: fixed;
              bottom: 0;
              left: 0;
              height: 70px;
              background-color: black;
              width: 100%;
              text-align: left
            }
            a {
              text-decoration: none;
              color: #fff;
             
            }

            ul {
              list-style: none;
              position: relative;
              text-align: left;
            }

            li {
              float: left;
            }

            /* clear'n floats */
            ul:after {
              clear: both;
            }

            ul:before,
            ul:after {
                content: " ";
                display: table;
            }

            nav {
              text-align: center;
              letter-spacing: 1px;
              text-shadow: 1px 1px 1px #0E0E0E;
              -webkit-box-shadow: 2px 2px 3px #888;
              -moz-box-shadow: 2px 2px 3px #888;
              box-shadow: 2px 2px 3px #888;
              border-bottom-right-radius: 8px;
              border-bottom-left-radius: 8px;
            }

            /* prime */
            ul.primary li a {
              display: block;
              padding: 20px 30px;
              border-right: 1px solid #3D3D3D;
            }

            ul.primary li:last-child a {
              border-right: none;
            }

            ul.primary li a:hover {
              
              color: #000;
            }

            /* subs */
            ul.sub {
              position: absolute;
              z-index: 200;
              box-shadow: 2px 2px 0 #BEBEBE;
              width: 35%;
              display:none;
            }

            ul.sub li {
              float: none;
              margin: 0;
            }

            ul.sub li a {
              border-bottom: 1px dotted #ccc;
              border-right: none;
              color: #000;
              padding: 15px 30px;
            }

            ul.sub li:last-child a {
              border-bottom: none;
            }

            ul.sub li a:hover {
              color: #000;
              background: #eeeeee;
            }

            /* sub display*/
            ul.primary li:hover ul {
              display: block;
              background: #fff;
            }

            /* keeps the tab background white */
            ul.primary li:hover a {
              background: #fff;
              color: #666;
              text-shadow: none;
            }

            ul.primary li:hover > a{
              color: #000;
            } 
        </style>
    </head>
    <body>
                
                 <div class="title">
                 <span style="font-size:55px;cursor:pointer;" onclick="openNav()">
                    <font color="white">greg gelman &#9776;</font></span>
                </div>
                
 
                <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <div class="overlay-content">
                        <a href="#">Home</a>
                        <a href="#">Scripts</a>
                        <a href="#">Events</a>
                         <a href="#">Portfolio</a>
                        <a href="#">Education</a>
                        <a href="#">Contact</a>
                    </div>
                </div>

                <script>
                    function openNav() {
                        document.getElementById("myNav").style.width = "100%";
                         }

                    function closeNav() {
                         document.getElementById("myNav").style.width = "0%";
                        }
                </script>


                <div class="parallax">
                </div>
                 
                
                 <!--{{ Html::image('img/hooded.jpeg', 'alt', array( 'style' => 'width:100%', 'height:100%' )) }}

                  @if (Route::has('login'))
             
                   @endif -->
                   
                    
               
               <!-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>  -->

            <form class="form2" action="/register" method="POST" name="myForm" id="myForm">
            {{ csrf_field() }}
             <div class="sidebar"> 
             <h3>Get in touch!</h3>
             E-mail: <input type="email" name="email" autocomplete="off"><br>
            <input type="submit">

    

   



                <!--
                <script language="JavaScript" src="http://feed2js.org//feed2js.php?src=http%3A%2F%2Fwww.us-cert.gov%2Fncas%2Fcurrent-activity.xml&num=3&date=y&utf=y&html=a"  charset="UTF-8" type="text/javascript"></script>

                <noscript>
                <a href="http://feed2js.org//feed2js.php?src=http%3A%2F%2Fwww.us-cert.gov%2Fncas%2Fcurrent-activity.xml&num=3&date=y&utf=y&html=y">View RSS feed</a>
                </noscript>-->

             </div>
            </form>  
                        <div class="headshot"></div>
                         <div class="section">
                             <h1>a little about me</h1> 
                             <p>CISSP Systems Security Analyst.  Aspiring entrepeneur as my hobby.</p>
                             
                             <h1>what I can do for you</h1>
                             <p>Risk Management Technical Consulting and System Administration</p>

                             <br /><br /><br />
                             <!-- <h1>five (5) types of projects I tend to work on</h1>
                             <p>
                                 1. Scripting and Automating Configuration Management <br />
                                 2. Patch Management <br />
                                 3. Endpoint, Infrastructure and Network Security  <br />
                                 4. VMWare ESXi Hosting <br />
                                 5. Auditing and Compliance <br /><br /><br />
                             </p> -->
                        </div>

                        <div class="rss">
                           

                        </div>
                      
                        <!--<div class="section">
                             <h1>what I like to do for fun</h1>
                             <p>In my spare time I try to learn as much as I can.  Whether it is from real world experiences, socializing, spending hours on reddit, or my favorite podcasts.  I hope to become a better web developer one day.</p>
                             <p>Outside of the technical riff raff, I like to watch movies, tv shows, pick up the guitar when I can and spend hours sitting on the couch with my wife.                                  
                             </p>
                        </div>-->
                                
            <footer>
             <div class="form-title">
                 <span style="font-size:50px;cursor:pointer;" onclick="openNavForm()">
                    <font color="white">contact&#9776;</font></span>
             </div>
 
                <div id="form" class="overlay-contact">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNavForm()">&times;</a>
                     <div class="overlay-contact-content">
                       <font color="white"><br /><br />aaslfkja <br />aslfkja <br />aslfkja <br /></font>
                    </div>
                </div>

                <script>
                    function openNavForm() {
                        document.getElementById("form").style.width = "100%";
                         }

                    function closeNavForm() {
                         document.getElementById("form").style.width = "0%";
                        }
                </script>
                <h3>
                    <font color="white">
                    <a href="mailto:gelmangreg@gmail.com?Subject=Hello%20Mr%20Gelman" target="_top">
                    e: gelmangreg@gmail.com</a><a href="callto:9087520098"><br />
                    c: (609)516-8588</a></font>
                </h3>
            </footer>


   </body>
</html>

