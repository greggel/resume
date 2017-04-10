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

        .title {
          position: fixed;
          font-family: 'Oswald', sans-serif;
          height:88px;
          width:100%;
          white-space:nowrap;
          text-align: center;
          background-color: black;    
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
          display: block;
          float: right;
          object-position: center;
          background-color: #ADD8E6;
        }

        .side h1 {
          margin-top:46%;
        }

        .sideText {
          background-position: center;
          background-color: #778899;
          margin-top: 37%;
        }

        .section1 {
          position: relative;
          background-color: #778899;
          background-image: url("img/face.png");
          height: 100vh;
          width: 50%;
          display: block;
          float: left;
          /*background-attachment: fixed;
          background-size: cover;*/
          background-position: 50% 50%;
          background-repeat: no-repeat;
        }

        .section2Side {
          position: relative;
          background-color: #ADD8E6;
          height: 100vh;
          width: 25%;
          display: block;
          float: left;
        }

        .section2Side h1 {
            margin-top:56%;
        }
      
        .section2Side2 {
          position: relative;
          background-color: #ADD8E6;
          height: 100vh;
          width: 25%;
          display: block;
          float: left;
        }

        .section2Side2 h1 {
            margin-top:56%;
        }
        
        .section2 {
          background-color: #778899;
          height: 100vh;
          width: 50%;
          display: block;
          float: right;
          /*background-attachment: fixed;
          background-size: cover;*/
          background-position: 50% 50%;
          background-repeat: no-repeat;
        /* position is static by default */
        }

        .section2 h1:first-of-type {
          margin-top: 24%;
        }

        .section2 li {
          text-align: center;
        }

        .section3 {
          position: relative;
        /* position is static by default */
        }

        .section4 {
         position: relative;
        /* position is static by default */
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
          font-family: Open Sans;
          /*text-transform: uppercase;*/
          text-align: center; 
        }

        ol {
          text-align: left;
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

        @media screen and (max-width: 480px) {


          .side {
            width: 100%;
            height: auto;
            text-align: left;
          }
          
          .side h1 {
          margin-top:0;
          }

          .section1 {
            width: 100%;
            margin: auto;
            text-align: left;
          }
	  
          span {
            font-size:39px;
            cursor:pointer;
            text-align: center;
          }

          .section2 {
            width: 100%;
            margin-top:0;
            height: 500px;
            text-align: left;
          }

          .section2 h1:first-of-type {
            margin-top: 0;
          }

          .section2 p {
            text-align: center;
          }


          .section2Side {
            width: 100%;
            height: auto;
            text-align: left;
          }

          .section2Side h1 {
            margin-top:0;
          }

          .section2Side2 {
            height: auto;
            width: auto;
            text-align: left;
            background-color: #778899;
          }

          .section2Side2 h1 {
            margin-top:0;
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
    <div class="section1">
    <a name="about"></a>
    </div>
    <div class="side">

         <h1>a little about me... <br />
            <p>CISSP Systems Security Analyst.  Aspiring entrepeneur who loves a good challenge.</p><br />
           what I can do for you <br />
          <p>Technology Consulting, Development and System Administration with a focus on Security and Risk Management</p></h1>
    </div>
    <div class="section2">
              <a name="education"></a>
              <h1>Education</h1>
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
    <div class="section2Side">
            <p>
               <ol><h1>High Level Strengths</h1>
                <li>Scripting and Automation</li>
                <li>Configuration Management</li>
                <li>Patch Management</li>
                <li>Endpoint and Network Security</li>
                <li>Firewalls</li>
                <li>VMWare ESXi/vSphere Administration</li>
                <li>Auditing and Compliance </li>
                <li>Investigation Reports (i9)</li>
                <li>Auditing and Compliance </li>
                <li>Vulnerability Scanning/Remediation</li>
            </p>
   </div>

   <div class="section2Side2">
               <ol><h1>Low Level Strengths</h1>
                <li>Bash, Batch, Powershell, PHP</li>
                <li>Puppet, Dell KACE, Group Policy</li>
                <li>Puppet, Dell KACE, Group Policy</li>
                <li>McAfee, Qualys, EMET, Juniper</li>
                <li>IPTables, Fail2Ban, Checkpoint, Cisco</li>
                <li>VMWare ESXi/vSphere Administration</li>
                <li>Sarbanes Oxley, DFARS, State Regulations </li>
                <li>Investigation Reports (i9)</li>
                <li>Two(2) years experience as State Investigator IT Auditor</li>
                <li>OpenVAS, Nessus, McAfee Foundstone, Qualys</li></ol>
   </div>
    
        <div class="title">
          <span>
            <font color="white">
             <a href="#about">about</a>
             <a href="https://github.com/greggel">portfolio</a>
             <a href="#education">education</a></font>         
          </span>
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
                    e: gelmangreg@gmail.com</a><a href="callto:9087520098"><br />
                    c: (609)516-8588</a></font>
                </h3>
                <h3 class="footerRight">
                  <font color="white">
                    <a href="https://linkedin.com/in/greggel">LinkedIn</a>
                    <a href="https://github.com/greggel">Github</a><br />
                    <form class="formEmail" action="/register" methods="POST" name="myForm" id="myForm">
             {{ csrf_field() }} <input type="email" name="email" autocomplete="off" placeholder="email me if I can help!" class="email" style="width: 125px;">&nbsp;<input type="submit" class="submit" style="width: 55px;">
            </form>
                  </font>
                </h3>

            </footer>


   </body>
</html>

