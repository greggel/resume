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
                height: 70px;
                width:500px;
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
                position: absolute;
                margin-left: 100px;
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
            z-index: 1;
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
                 <span style="font-size:50px;cursor:pointer;" onclick="openNav()">
                    <font color="white">Greg Gelman</font>&#9776;</span>
                </div>
 
                <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <div class="overlay-content">
                        <a href="#">Home</a>
                        <a href="#">Scripts</a>
                        <a href="#">Events</a>
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

                
             <div class="sidebar"> 
             <h3>Home</h3>
             <h3>Scripts</h3>
             <h3>Events</h3>
             <h3>Education</h3>
             <h3>Contact</h3>
             <h3>Top 10</h3>
       
             </div>  
                        <div class="headshot">{{ Html::image('img/headshot.png', 'alt', array( 'style' => 'width:39%', 'height:39%' )) }}</div>
                         <div class="section">
                             <h1>a little about me</h1> 
                             <p>I am a Systems Security Analyst CISSP for my day job and an aspiring entrepeneur as my hobby.  I am highly motivated to erradicate vulnerabilities and share my experience with the world. I focus on managing, patching, securing, deploying and decomissioning small to large mixed environments (managed up to 800 systems including servers, workstations and appliances (both virtual and physical).</p>
                             
                             <h1> projects I tend to work on</h1>
                             <p>
                                 1. Script Automation Tasks <br />
                                 2. Configuration Management <br />
                                 3. Patch Management <br />
                                 4. Endpoint, Infrastructure and Network Security <br />
                                 5. VMWare ESXi Hosting <br />
                                 6. Firewall Management <br />
                                 7. Auditing and Compliance (Former State Investigator) <br />
                             </p>
                        </div>
                      
                        <div class="section">
                             <h1>what I like to do for fun</h1>
                             <p>In my spare time I try to learn as much as I can.  Whether it is from real world experiences, socializing, spending hours on reddit, or my favorite podcasts.  I hope to become a better web developer one day.</p>
                             <p>Outside of the technical riff raff, I like to watch movies, tv shows, pick up the guitar when I can and spend hours sitting on the couch with my wife.                                  
                             </p>
                        </div>
                         <div class="section">
                             <h3>Eighth Blog Post</h3>
                             <p>Blog Content Goes Here</p>
                        </div>
                                
            <footer>
                <h3>
                    <font color="white">
                    <a href="mailto:gelmangreg@gmail.com?Subject=Hello%20Mr%20Gelman" target="_top">
                    e: gelmangreg@gmail.com</a><a href="callto:9087520098"><br />
                    c: (555)555-5555</a></font>
                </h3>
            </footer>
   </body>
</html>
