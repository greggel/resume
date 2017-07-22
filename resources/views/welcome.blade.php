<!DOCTYPE html>
<html lang="en" style="display: inline-grid;">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Greg Gelman</title>

        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <style>
        #resume {

        }

        .title {
          position: fixed;
          font-family: 'Oswald', sans-serif;
          height:88px;
          width:100%;
          white-space:nowrap;
          z-index:1;
          background-color: black;    
        }
        
        .fb_iframe_widget {
        display: inline-block;
        position: relative;
        z-index: 2;
        }
        
        #footer {
          position: fixed;
          bottom: 0;
        }

        .relative{
          position:relative;
          width:600px;
          height:400px;
        }

        .side {
        position: relative;
        height: 100vh;
        width: 50%;
        /* display: block; */
        float: right;
        right: 0;
        object-position: center;
        background-color: #ADD8E6;
        background-position: 50% 50%;
        text-align: center;
        margin:0px;
        padding:0px;
        margin-left:0px;
        padding-left:0px;
        padding-top:0px;
        }
        
        .side span
        {
        vertical-align: bottom;
        width: 450px;
        /* height: 218px; */
        left: 20%;
        }

        .side h1 {
    margin: 32% auto 0;
    height:34%;
        }

        .side p {
          margin-top:100px;
          height:10%;
        }

        .sideText {
          background-position: center;
          background-color: #4169E1;
          margin-top: 37%;
        }

        .section1 {
          position: relative;
          background-color: #4169E1;
          background-image: url(img/face.png);
          height: 100vh;
          width: 50%;
          display: block;
          left: 0;
          float: left;
          background-position: 50% 50%;
          background-repeat: no-repeat;
          margin:0px;
          padding:0px;
          margin-left:0px;
          padding-left:0px;
          padding-top:0px;
        }

        .section2Side {
          position: relative;
          background-color: #ADD8E6;
          height: 83%;
          display: block;
          float: left;
        }

        .section2Side h1 {
            margin-top:4%;
            font-size: 45px;
        }
      
/*        .section2Side2 {
          position: relative;
          background-color: #ADD8E6;
          height: 66vh;
          width: 25%;
          display: block;
          float: left;
        }

        .section2Side2 h1 {
            margin-top:56%;
            font-size: 45px;
        } */

        .section2Side3 {
          position: relative;
          width: 50%;
          /* margin-top: 155px; */
          /* display: inline-block; */
          float: left;
        }

        .section2Side3 h1 {
            font-size: 45px;
        }

        .section2Side3 li {
          margin-top:70px;
        }

        .section2Side4 {
          position: relative;
          background-color: #ADD8E6;
          width: 50%;
          /* float: right; */
          /* margin-top: 154px; */
          /* height: 331px; */
          float: right;
        }

        .section2Side4 h1 {
            font-size: 45px;
            margin-top:0;
        }

        .section2Side4 li {
          margin-top:40px;
        }
        
        .section2 {
          margin-top:25%;
          /*background-color: #4169E1;
          height: 100vh;
          width: 50%;
          display: block;
          float: right;
          /*background-attachment: fixed;
          background-size: cover;
          background-position: 50% 50%;
          background-repeat: no-repeat;
        /* position is static by default */
        }
        
        .section2boxLeft 
        {
          position: relative;
          /* margin-top: 881px; */
          background-color: #ADD8E6;
          height: 100vh;
          width: 50%;
          float: left;
          left: 0;
          display: block;
        }

        .section2Left
        {
          margin-top:25%;
        }

        .section2boxRight 
        {
            position: relative;
            /* margin-top: 881px; */
            background-color: #4169E1;
            height: 100vh;
            width: 50%;
            display: block;
            right: 0;
            float: right;
        }

        .section2boxRight li {
          /*margin-top:100px;*/
        }

        .section2 h1:first-of-type {
          margin-top: 0;
        }

        .section2 li {
          text-align: center;
          font-size: 17px;
        }

        .section2 h1 {
          /*font-size: 60px;*/
        }

        .section2 h2 {
          /*font-size: 30px;*/
        }

        .section3 {
          position: relative;
        /* position is static by default */
        }

        .section4 {
         position: relative;
        /* position is static by default */
        }

        .section5 {
          position: relative;
          width: 100%;

        }
            
        .sidebar
        {
         position: absolute;
         left: 0px;
         width: 200px;
        }
      
       .submit {
         width:4px;
        }

        .overlay {
         width: 0;
         position: fixed;
         top: 95px;
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

        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            color: #818181;
            
        }

        .overlay a:hover, .overlay a:focus {
            color: #f1f1f1;
        }

        #myForm {
         position: relative;
         width:33%;
         display: inline-block;
         text-align: right;
        }


        .formContact {

        }

        span {
          width:68%;
          font-size:55px;
          cursor:pointer;
        }
         
        p 
        {
          font-size: 20px;
          font-family: 'Open Sans, sans-serif';
        }

        h1
        {
          font-size:30px;
          font-family: 'Oswald', sans-serif;
        }

        h2
        {
          font-size:20px;
          font-family: 'Oswald', sans-serif;
          font-weight: bold;
        }

        h3 {
          font-size:15px;
          margin-top:0px;
          margin-bottom: 0px;
        }

        body { 
          margin:0px;
          background: #ccc;
          background-color: #4169E1;
          font-family: Open Sans;
          /*text-transform: uppercase;*/
          text-align: center; 
        }

        ol {
          text-align: left;
          margin-top:0;
        }

        li {
          text-align: left;
        }
            
        .footerLeft {
          position: fixed;
          bottom: 0;
          left: 0;
          background-color: black;
          width: 100%;
          text-align: left
         }

         .footerRight {
          width: 700px;
          position: fixed;
          text-align: right;
          bottom: 0;
          right: 0;
         }

         .formEmail {
          font-size: 1.6;
          color: #fff;
         }
      
        a {
          text-decoration: none;
          color: #fff;       
        }

        ul {
          text-align: center;
          padding-left:0;
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
        
        .icons{
          display:inline-block;
           background-color: #ECECEA;
           margin:auto;
         /* overflow:scroll;
          margin: 20px 30px 0 30px; */
        }

        div.fb-like.fb_iframe_widget {
            vertical-align: bottom;
            border: none;
            visibility: visible;
            width: 205px !important;
            height: 100px;
          } 
            
           .fb-like.fb_iframe_widget span {
            width: 205px !important;
          }

           .fb-like.fb_iframe_widget iframe{
            width: 205px !important;
          }

          .fb_iframe_widget {
            display: inline-block;
            position: relative;
            z-index: 0 !important;
          }

        @media screen and (max-width: 768px) {
         
         .section1 {
            width: 100%;
            height: 347px;
            background-size: 270px 263px;
            background-position: 50% 90%;
            margin: auto;
            text-align: left;
            position: relative;
          }
          .side {
            width: 100%;
            height: auto;
            text-align: center;
            position: relative;
          }
          
          .side h1 {
          margin-top:0;
          }

           .side p {
          margin-top:0px;
        }

          span {
            font-size:39px;
            cursor:pointer;
            text-align: center;
          }

          .section2boxLeft 
        {
          position: relative;
          height: 100%;
          width: 100%;
          /* float: left; */
          /* display: block; */
          margin-top: 0;
        }

        .section2Left
        {
          margin-top:0%;
        }

        .section2boxLeft li {
          margin-top:0;
        }

        .section2boxRight 
        {
          position: relative;
          width: 100%;
          height:100%;
          margin-top:0;
          
          /* float: inherit; */
        }

          .section2 h1:first-of-type {
            margin-top: 0;
          }

          .section2 p {
            text-align: center;
          }

          .section2 li {
          text-align: center;
          margin-top:0;
          font-size: 15px;
          }

          .section2 h1 {
          font-size: 30px;
          }

          .section2 h2 {
          font-size: 20px;
          }
          
          .section2 {
            width: 100%;
            margin-top:0;
            height: auto;
            text-align: center;
          }
          
          .section2box 
          {
            position: relative;
            background-color: #ADD8E6;
            height: 100vh;
            width: 100%;
          }

          .section2Side {
            width: 100%;
            height: auto;
            text-align: left;
            position: relative;
          }

          .section2Side h1 {
            margin-top:0;
          }

          .section2Side2 {
            height: auto;
            position: relative;
            width: 100%;
            text-align: left;
            background-color: #4169E1;
          }

          .section2Side2 h1 {
            margin-top:0;
          }


          .section2Side3 {
              position: relative;
              background-color: #ADD8E6;
              width: 100%;
              /*height: 83px;*/
              display: block;
              float: none;
              margin-top: 0;
        }

          .section2Side3 li {
             margin-top:0;
          }

          .section2Side4 {
            width: 100%;
            /* height: 12px; */
            /* text-align: left; */
            /* float: none; */
            height: 256px;
            background-color: #4169E1;
            float: none;
            position: relative;
            /* display: block; */
          }

          .icons {
           /* margin: 0px 0px 0px 23px;;*/
           width:100%;
          }

          ol {
            text-align:center;
          }

          li {
            text-align: center;
          }

          .title {
            width: auto;
            position:fixed;
            overflow: auto;
            margin: auto;
            font-family: 'Oswald', sans-serif;
            height:68px;
            width:100%;
            white-space:nowrap;
            background-color: black; 
          }
          .footerLeft {
            width: 100%;
            margin: auto;
            text-align: left;
          }

          .footerRight {
            margin: auto;
            text-align: right;
            width: 840px;
            position: fixed;
            bottom: 0;
            right: 0;
          }

         }

        </style>
    </head>
    <body> 
    <script>      
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1678417975792547',
          xfbml      : true,
          version    : 'v2.6'
        });
      };

      (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));      
    </script>

        <div class="title">
          <span>
            <font color="white">
             <a href="#about">about</a>
             <a href="https://github.com/greggel">portfolio</a>
             <a href="#education">education</a></font>         
          </span>
    </div>

    <div class="section1">
    <a name="about"></a>

    </div>

    <div class="side">

         <h1>a little about me... <br />
            <p>CISSP Systems Security Analyst.  Aspiring entrepeneur who loves a good challenge. <br /><br />I also love tacos, netflix and warm weather!</p><br /><br />
           what I can do for you
          <p>Web Application Development and System Administration with a strong focus on Security and Automation</p></h1> 
       <p> 
        <div
          style="vertical-align: sub;"
            class="fb-like"
            data-share="true"
            data-show-faces="true">
        </div>
      </p>
    </div> 
    <div class="section2boxRight">
        <div class="section2">
                  <a name="education"></a>
                  <h1 style="font-size:38px">Education</h1>
                     <h2><ul>University of Delaware: Masters of Engieering</ul></h2>
                     <li>CyberSecurity (Currently Enrolled)</li>
                    <h2><ul>Rutgers University: Bachelors of Arts</ul></h2>
                    <li>Information Technology and Informatics</li>
                    <h2><ul>Raritan Valley Community College: Associates Degree </ul></h2> 
                    <li>Business Administration</li>
                    <h1>Certificates</h1>
                    <h2>CISSP<br />
                    Security+</h2>
                
        </div>
   </div>
  
   <div class="section2boxLeft">
       <div class="section2Left">
            <div class="section2Side3">
                     <ol style="margin-top:0;"><h1 style="font-size:38px;margin-top:0;">Experience</h1>
                     <li>Systems Security Analyst</li>
                     <li>State Forensic IT Investigator</li>
                     <li>Unix Computer Operator</li>
                     <li>Web Developer and IT Consultant</li>
                     </ol>
            </div> 
            <div class="section2Side4">
                       <ol><h1 style="font-size:38px">Projects</h1>
                       <li>Scripting and Automation Services</li>
                       <li>Laravel PHP Development</li>
                       <li>Backup Administration</li>
                       <li>Digital Forensic Investigation Techniques</li>
                       <li>Vulnerability Scanning and Remediation</li>
                       <li>VMWare and Virtual Infrastructure</li>
                       <li>Firewall Administration</li>
                        </ol>
           </div>
      </div>   
   </div>

   <div class="section5">
                     <div class=icons>
                        <br />
                          <img width="90" height="80" src="img/logos/puppet-labs-logo.png" />
                          <img width="70" height="70" src="img/logos/bash.png" />
                          <img width="105" height="60" src="img/logos/Dell-KACE-logo.png" />
                          <img width="70" height="60" src="img/logos/powershell-icon-0.png" />
                          <img width="80" height="80" src="img/logos/css3.png" />
                          <img width="80" height="80" src="img/logos/html5.png" />
                          <img width="90" height="80" src="img/logos/apache.png" />
                          <img width="80" height="80" src="img/logos/page-mysql.png" />
                          <img width="90" height="80" src="img/logos/mongo-db-huge-logo-1024x341.png" />
                          <img width="80" height="80" src="img/logos/laravel.png" />
                          <img width="90" height="80" src="img/logos/vmware-logo.png" />
                          <img width="80" height="80" src="img/logos/AD1.png" />
                          <img width="80" height="80" src="img/logos/microsoft.png" />
                          <img width="80" height="80" src="img/logos/linux_u2.png" />
                          <img width="80" height="80" src="img/logos/Apple-logo.png" />
                          <img width="80" height="80" src="img/logos/redhat.png" />
                          <img width="80" height="80" src="img/logos/Debian.png" />
                          <img width="80" height="80" src="img/logos/Ubuntu.png" />
                          <img width="80" height="80" src="img/logos/android.png" />
                          <img width="80" height="80" src="img/logos/PHP-Logo.png " />
                          <img width="80" height="80" src="img/logos/python.png" />
                          <img width="80" height="80" src="img/logos/C++-unofficial.sh-600x600.png" />
                          <img width="90" height="80" src="img/logos/java-logo-transparent.png " />
                          <img width="80" height="80" src="img/logos/mcafee.png" />
                          <img width="80" height="80" src="img/logos/curl-logo.png" />
                          <img width="160" height="80" src="img/logos/nessus.png" />
                          <img width="80" height="80" src="img/logos/openvas.png" />
                          <img width="100" height="80" src="img/logos/checkpoint_color.png" />
                          <img width="90" height="80" src="img/logos/pfsense.png" />
                          <img width="90" height="90" src="img/logos/splunk.png" /> 
                          <img width="70" height="40" src="img/logos/graylog.png" />
                          <img width="80" height="80" src="img/logos/symantec.png" />
                          <img width="70" height="30" src="img/logos/Veeam-Logo.png" />
                          <img width="80" height="80" src="img/logos/git.sh-600x600.png" />              
                          <img width="80" height="80" src="img/logos/wireshark.png" />
                          <img width="80" height="80" src="img/logos/wordpress.png" />                        
                    </div><br /><br /><br />
           </div>     

                <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->

                <!--
                <script>
                    function openNav() {
                        document.getElementById("myNav").style.width = "100%";
                         }

                    function closeNav() {
                         document.getElementById("myNav").style.width = "0%";
                        }
                </script>-->
               <div class="section3">

               </div>
               <div class="section4">
                </div>

            <footer>
                <h3 class="footerLeft">
                    <font color="white">
                    <a href="mailto:gelmangreg@gmail.com?Subject=Hello%20Mr%20Gelman" target="_top">
                    e: gelmangreg@gmail.com</a><a href="callto:6093168588"><br />
                    c: (609)316-8588</a></font>
                </h3>
                <h3 class="footerRight">
                  <font color="white">
                      <ul>
                      @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                      </ul>

                      <ul>
                      <p>{{ $errors->first('email') }}</p>
                      </ul>
                    <a href="https://linkedin.com/in/greggel">LinkedIn</a>
                    <a href="https://github.com/greggel">Github</a>
                    <a href="/img/GregGelmanResume.pdf" download>Resume</a><br />
                    <form class="formEmail" action="register" methods="POST" name="myForm" id="myForm">
             {{ csrf_field() }} <input type="email" name="email" autocomplete="off" placeholder="leave your email here!" class="email" style="width: 125px;">&nbsp;<input type="submit" class="submit" style="width: 55px;">
            </form>
                  </font>
                </h3>

   
            </footer>

   </body>
</html>

