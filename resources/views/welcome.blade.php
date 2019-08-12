<!DOCTYPE html>
<html lang="en" style="display: inline-grid;">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/img/logos/icon.png">
        <title>Greg Gelman</title>
        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <style>
        #resume {

        }

        .face {
          height: 160px;
        }

        .faceShot h1 {
            margin-top: -12px;
            margin-bottom: 0px;
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
        
        }
        
        #footer {
          position: fixed;
          bottom: 0;
        }

          .section1 {
          width: 100%;
        }

        .relative
       {   position:relative;
          width:600px;
          height:400px;
        }

        
        .side {
        width: 80%;
        
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
          width: 100%;
          float: left;
          left: 0;
          display: block;
        }

        .section2Left
        {
              /* margin-top: 25%; */
              background: black;
              padding: 0px 10px 32px 10px;
              /* padding-bottom: 21px; */
              width: 55%;
              overflow: hidden;
              height: 428px;
              margin-left: 22%;
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
         padding-bottom: 10px;
         background-color: black;
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
          background-color: black;
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
          width: 100%;
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
                margin: 0px 100px auto;
          }

          form input {
            height: 32px;
            margin-bottom: -2px;
            margin-top: 0px;
            width: 260px;
          }

          input {
            height: 21px;
            margin: 10px -5px 2px 0px;
            width: 100px;
           }

          #googleMap {
              width: 100%;
              height: 100%;
          }

          .nmap {
            margin: 0px 15% 0 15%;
	    color:white
          }

          table {
            width:0px;
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
            margin:-11px 115px auto;
            /* margin-top: 148px; */
            width: 60% !important;
          }

           .fb-like.fb_iframe_widget table{
            width: 205px !important;
          }

         .section1 {
            margin-top:-50px;
            width:100%;
            height:286px;
          }
          .face {
            margin: 70px auto;
            height: 160px;
          }
          .side {
            width:100%;
            margin:0 auto;

          }

          .sideText {
            margin: 145px auto;
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
            height:285px;
          }

          .section1 h1 {
            margin: -50px auto;
          }

          

          span {
            font-size:39px;
            cursor:pointer;
            text-align: center;
          }

          .section2boxLeft 
        {
          position: relative;
          width: 100%;
        }

        .section2Left
        {
          margin: 15% auto auto 2%;
          width: 90%;
          height:555px;
        }

        .section2boxLeft li {
          margin-top:0;
        }

        .section2boxRight 
        {
          position: relative;
          width: 100%;
          height:480px;
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

          .section4 {
            margin:20px auto;
          }

          .section5 {
              
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

          input {
            height: 21px;
            margin: 0px -8px 0px -8px;
            width: 100px;
           }

         }

        </style>
               <script async defer 
	//      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl1nLKxNzlcGaxKtVL1qO2aaTblfk8LrA&callback=initMap">
		src="https://maps.googleapis.com/maps/api/js?key={{env('APP_GOOGLE_MAPS')}}&callback=initMap">

               </script>
               <script>
                var map, infoWindow, marker;
                          
                  function initMap() {
                          map = new google.maps.Map(document.getElementById('googleMap'), {
                          center: {lat: 32.02999636902566, lng: -27.4296875},
                          zoom: 2
                    });
                
               
                $.ajax({url: "/strangers"}).done(function(response) {

                      var strangers = response.strangers;
                    
                      strangers.forEach(function(stranger){

                              var contentString =
                               '<div id="markerContent"><br />'+
                               '<h4>'+stranger.hits+' Hits from '+stranger.city+', '+stranger.regionName+'<br />'+
                               'on '+stranger.updated_at+'</h4>'+
                               'using '+stranger.browser+
                               '<div id="markerContent"><br />'
                                ;

                              var infowindow = new google.maps.InfoWindow({
                                content: contentString
                              }); 

                              var labels = stranger.hits.toString();     

                              var marker = new google.maps.Marker({
                                 position: {lat: parseFloat(stranger.lat), lng: parseFloat(stranger.lng)},
                                 map: map,
                                 label: labels,
                                 title: 'info'
                               });

                          
                              marker.addListener('click', toggleBounce);
                           
                              marker.addListener('click', function() {
                                infowindow.open(map, marker);
                                });

                  function toggleBounce() {
                    if (marker.getAnimation() !== null) {
                      marker.setAnimation(null);
                    } else {
                      marker.setAnimation(google.maps.Animation.BOUNCE);
                    }
                  }
                 });
                });
              }
              </script>
              <p hidden>I am A Cyber Security Expert with extensive knowledge web applications and datacenter infrastructure.  I am looking to grow my social network and learn from the fellow security folks in the industry.  Feel free to contact me at greggel@greggelman.com.</p>
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

              {{-- <div class="section1">
                <div class="faceShot">
                  <img src="img/head.png" class="face" />
                  <h1>Cyber Security Engineer</h1>
                  <a name="about"></a>
                </div>
              </div> --}}


           <div class="side">

            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1678417975792547";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>    

          </div>
               
              <!-- <div class="section2boxRight">
                  <div class="section2">
                            <a name="education"></a>
                            <h1 style="font-size:38px">Education</h1>
                               <h2><ul>University of Delaware: Masters of Engineering</ul></h2>
                               <li>CyberSecurity</li>
                              <h2><ul>Rutgers University: Bachelors of Arts</ul></h2>
                              <li>Information Technology and Informatics</li>
                              <h2><ul>Raritan Valley Community College: Associates Degree </ul></h2> 
                              <li>Business Administration</li>
                              <h1>Certificates</h1>
                              <h2>CISSP<br />
                              Security+</h2>
                          
                  </div>
             </div> -->
            <div class="section2Left">
                 
                  <p hidden>
                    I am A Cyber Security Expert with extensive knowledge web applications and datacenter infrastructure.  I am looking to grow my social network and learn from the fellow security folks in the industry.  Feel free to contact me at greggel@greggelman.com. 
                  </p>
                 <h3><font color="white">Visitors from this week.</font></h3>
          
          
          <div id="googleMap"></div>
            </div>         
          
          <div class="nmap">
            <h3><font color="white">Visitors IP Analysis</font></h3>
            @php
              $ip=$_SERVER['REMOTE_ADDR'];
              $ipscan=shell_exec("/usr/bin/machinae -c /etc/machinae.yml $ip");
              echo wordwrap(nl2br("$ipscan"),35,"\n",true);
            @endphp
          </div><br />

             <div class="section5">
                               <div>
				<h3><font color="white">Built and secured with:</font></h3>
                                    <img height="60" src="img/logos/puppet-labs-logo.png" />
                                    <img height="60" src="img/logos/PHP-Logo.png" />
                                    <img height="60" src="img/logos/laravel.png" />
                                    <img height="60" src="img/logos/page-mysql.png" />
                                    <img height="60" src="img/logos/css3.png" />
                                    <img height="60" src="img/logos/html5.png" />
                                    <img height="60" src="img/logos/javascript.png" />
                                    <img height="60" src="img/logos/bash.png" />
                                    <img height="60" src="img/logos/aes.png" />
                                    <img height="60" src="img/logos/snort.png" />
                                    <img height="60" src="img/logos/vmware-logo.png" />
                                    <img height="60" src="img/logos/pfsense.png" />
				    <img height="60" src="img/logos/checkpoint.png" />
    				    <img height="60" src="img/logos/ansible.png" />
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
                          <div id="coord"></div>
                         <div class="section4">
                            <font color="white">Leave me a comment</font>
                                    <form class="emails" action="register" methods="POST" name="emails" id="emails">
                                     
                                     {{ csrf_field() }} 

                                     <input type="textarea" name="text" autocomplete="off" placeholder="comment">

                                     <input type="email" name="emails" autocomplete="off" placeholder="email" class="emails">

                                     <p><input type="submit" class="submit" value='Submit'></p>

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
                <h3 class="footerLeft">
                  <font color="white">
                    <input type="button" value="Github" text="GitHub" autofocus onclick="window.location.href='https://github.com/greggel'">
                  </font>
                </h3>
            </footer>
            
          </body>
</html>
