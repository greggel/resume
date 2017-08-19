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

        .face {
          height:275px;
          margin:105px 95px auto;
        }

        .faceShot {
          
          }

        /*.title {
          position: fixed;
          font-family: 'Oswald', sans-serif;
          height:88px;
          width:100%;
          white-space:nowrap;
          z-index:4;
          background-color: black;    
        }*/


        
        .fb_iframe_widget {
        display: inline-block;
        position: relative;
        z-index: 2;
        margin-top:100px;
        }
        
        #footer {
          position: fixed;
          bottom: 0;
        }

          .section1 {
          position: relative;
          background-color: #a7cdf2;
          height: 400px;
          width: 20%;
          display: block;
          left: 0;
          float: left;
          background-position: 50% 90%;
          background-repeat: no-repeat;
          margin:-80px;
          padding:0px;
          margin-left:0px;
          padding-left:0px;
          padding-top:0px;
          z-index: 3;
        }

        .relative
       {   position:relative;
          width:600px;
          height:400px;
        }

        .sideText {
        margin-top: 126px;
        margin-bottom: 109px;
        height: 30%;
        width: 1000px;
        margin-left: 409px;
        z-index: 1;
        }
        .side {
        width: 80%;
        margin:-45px;
        }
        
        .side span
        {
        vertical-align: bottom;
        width: 450px;
        /* height: 218px; */
        left: 20%;
        }

        .side h1 {
        height: 47px;
        margin: -52px 126px 3px 0;
        }

        .side p {
          /*margin-top:100px;
          height:10%;*/
          margin:-5px 351px 11px -27px;
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

        .section2Side2- h1 {
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
          margin-top:11px;
          line-height: 22px;
          vertical-align: middle;
        }
        
        .section2boxLeft 
        {
          position: relative;       
          width: 50%;
          float: left;
          left: 0;
          display: block;
        }

        .section2Left
        {
          /* margin-top: 25%; */
          background: black;
          padding: 12px;
          /* padding-bottom: 21px; */
          width: 579px;
          overflow: hidden;
          height: 400px;
          margin-left: 55px;
        }

        .section2boxRight 
        {
            position: relative;
            height:424px;
            background-color: #a7cdf2;
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
         padding-bottom: 35px;
         background-color:  #a7cdf2;
        }

        .section5 {
          position: relative;
          display:inline-block;
          width: 100%;

        }
            
        .sidebar
        {
         position: absolute;
         left: 0px;
         width: 200px;
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
          font-size:17px;
          margin-top:0px;
          margin-bottom: 0px;
        }

        body { 
          margin:0px;
          background: #ccc;
          background-color: #a7cdf2;
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
          text-align: center;
          z-index: 3;
         }

         .footerRight {
          width: 700px;
          position: fixed;
          text-align: right;
          bottom: 10px;
          right: 0;
          z-index: 3;
         }

         .footerRight a {
          margin-right:26px;
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
         /* overflow:scroll;
          margin: 20px 30px 0 30px; */
        }
            
           .fb-like.fb_iframe_widget span {
            width: 335px !important;
          }

           .fb-like.fb_iframe_widget iframe{
                width: 282px !important;
                margin: 46px 58px auto;
          }

          input {
            height: 21px;
            margin-bottom:10px;
            width: 260px;
          }

          #googleMap {
              width: 100%;
              height: 400px;
          }

        @media screen and (max-width: 768px) {
           hr {
            width: 0;
           }

           .fb_iframe_widget {
              z-index: 2;
              margin-top:13%;
           }


           .fb-like.fb_iframe_widget iframe{
            margin: 172px -25px auto;
            /* margin-top: 148px; */
            width: 100% !important;
          }

           .fb-like.fb_iframe_widget table{
            width: 205px !important;
          }

         /*.section1 {
            width: 340px;
            height: 240px;
            background-size: 200px 240px;
            background-position: 50% 80%;
            margin: auto;
            text-align: left;
            position: relative;
          }*/
          .face {
            margin: 100px auto;
            height: 365px;
          }
          .side {
            width:100%;

          }

          .sideText {
            margin: 30px 43px;
            /* height: 137%; */
            width: 100%;
            position: relative;
          
          }
          
          .side h1 {
            height: 0;
            margin: 0 auto;
          }

           .side p {
          margin-top:0px;
        }

          .section1 {
            width: 100%;
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
        }

        .section2Left
        {
          margin: 0 auto;
          width: 79%;
        }

        .section2boxLeft li {
          margin-top:0;
        }

        .section2boxRight 
        {
          position: relative;
          width: 100%;
          height:460px;
          margin-top:20%;
          
          /* float: inherit; */
        }

          .section2 h1:first-of-type {
            margin-top: 34px;
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
            text-align: center;
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
              <!--<div class="title">
                    <span>
                      <font color="white">
                       <a href="#about">about</a>
                       <a href="https://github.com/greggel">portfolio</a>
                       <a href="#education">education</a></font>         
                    </span>
              </div>-->

              <div class="section1">
                <div class="faceShot">
                  <img src="img/face.png" class="face" />
                  <a name="about"></a>
                </div>
              </div>

              <div class="side">
                <div class="facebookLike">  
                  <div
                    style="vertical-align: sub;"
                      class="fb-like"
                      data-share="true"
                      data-show-faces="true">
                  </div>
                </div>

                <div class="sideText">
                  <h1>CISSP Systems Security Analyst, Systems Administrator and Entrepeneur</h1><br /><br /><hr/>
                      
                </div>

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
          </div>
               
              <div class="section2boxRight">
                  <div class="section2">
                            <a name="education"></a>
                            <h1 style="font-size:38px">Education</h1>
                               <h2><ul>University of Delaware: Masters of Engineering</ul></h2>
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
                    <!--
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
                  -->
                 <div id="googleMap"></div>
                 <script>
                    var map, infoWindow;
                    function initMap() {
                      map = new google.maps.Map(document.getElementById('googleMap'), {
                        center: {lat: 40.2170534, lng: -74.74293840000001},
                        zoom: 7
                      });
                    
              var contentString = 
               '<div id="markerContent">'+
               '<h3>'+'e: gelmangreg@gmail.com'+'</h3>'+
               '<h3>'+'c: (609)316-8588'+
               '<a href="https://linkedin.com/in/greggel">'+
               '<font color="black">'+'<br /><br />LinkedIn<br />'+'</a>'+'</font>'+
               '<a href="https://github.com/greggel">'+
               '<font color="black">'+'Github<br />'+'</a>'+'</font>'+
               '<a href="/img/GregGelmanResume.pdf" download>'+
               '<font color="black">'+'Resume'+'</a>'+'</font>'+
               '<div id="markerContent">'
               ;

              var infowindow = new google.maps.InfoWindow({
                content: contentString
              });

               var marker = new google.maps.Marker({
                 position: {lat: 40.2170534, lng: -74.74293840000001},
                 map: map,
                 title: 'info'
               });
        
                marker.addListener('click', function() {
                  infowindow.open(map, marker);
                });


                    }

                  </script>
                  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyDlTiKrTcprGMI9K2-ANpT0FZyFrkjbs&callback=initMap"
                  async defer></script>
                </div>   
             </div>

             <div class="section5">
                               <div class=icons>
                                  <br />
                                    <img height="60" src="img/logos/puppet-labs-logo.png" />
                                    <img height="60" src="img/logos/bash.png" />
                                    <img height="60" src="img/logos/Dell-KACE-logo.png" />
                                    <img height="60" src="img/logos/powershell-icon-0.png" />
                                    <img height="60" src="img/logos/css3.png" />
                                    <img height="60" src="img/logos/html5.png" />
                                    <img height="60" src="img/logos/apache.png" />
                                    <img height="60" src="img/logos/page-mysql.png" />
                                    <img height="60" src="img/logos/mongo-db-huge-logo-1024x341.png" />
                                    <img height="60" src="img/logos/laravel.png" />
                                    <img height="60" src="img/logos/vmware-logo.png" />
                                    <img height="60" src="img/logos/Aaad1.png" />
                                    <img height="60" src="img/logos/microsoft.png" />
                                    <img height="60" src="img/logos/linux_u2.png" />
                                    <img height="60" src="img/logos/Apple-logo.png" />
                                    <img height="60" src="img/logos/redhat.png" />
                                    <img height="60" src="img/logos/Debian.png" />
                                    <img height="60" src="img/logos/Ubuntu.png" />
                                    <img height="60" src="img/logos/android.png" />
                                    <img height="60" src="img/logos/PHP-Logo.png " />
                                    <img height="60" src="img/logos/python.png" />
                                    <img height="60" src="img/logos/C++-unofficial.sh-600x600.png" />
                                    <img height="60" src="img/logos/java-logo-transparent.png " />
                                    <img height="60" src="img/logos/mcafee.png" />
                                    <img height="90" src="img/logos/curl-logo.png" />
                                    <img height="50" src="img/logos/nessus.png" />
                                    <img height="60" src="img/logos/openvas.png" />
                                    <img height="60" src="img/logos/checkpoint_color.png" />
                                    <img height="60" src="img/logos/pfsense.png" />
                                    <img height="60" src="img/logos/splunk.png" /> 
                                    <img height="40" src="img/logos/graylog.png" />
                                    <img height="60" src="img/logos/symantec.png" />
                                    <img height="40" src="img/logos/Veeam-Logo.png" />
                                    <img height="60" src="img/logos/git.sh-600x600.png" />              
                                    <img height="60" src="img/logos/wireshark.png" />
                                    <img height="60" src="img/logos/wordpress.png" />                        
                              </div>
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
                            <font color="white">Leave me a comment</font>
                                    <form class="emails" action="register" methods="POST" name="emails" id="emails">
                                     
                                     {{ csrf_field() }} 

                                     <input type="textarea" name="text" autocomplete="off" placeholder="comment">

                                     <input type="email" name="emails" autocomplete="off" placeholder="email" class="emails">

                                     <br /><input type="submit" class="submit" value='Submit'>

                                    </form>

                                  @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                        @foreach($errors->all() as $error)
                                            <p>{{ $errors->first('emails') }}</p>
                                         @endforeach
                                        </ul>
                                    </div>
                                  @endif
                          </div>
                        </div>
                      
                  <footer>
                <!--<h3 class="footerLeft">
                    <font color="white">
                    <a href="mailto:gelmangreg@gmail.com?Subject=Hello%20Mr%20Gelman" target="_top">
                    e: gelmangreg@gmail.com</a><a href="callto:6093168588"><br />
                    c: (609)316-8588</a></font>
                </h3>-->
                <h3 class="footerLeft">
                  <font color="white">
                    <a href="https://linkedin.com/in/greggel">LinkedIn&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="https://github.com/greggel">Github&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="/img/GregGelmanResume.pdf" download>Resume</a><br />
                  </font>
                </h3>

      
            </footer>

   </body>
</html>

