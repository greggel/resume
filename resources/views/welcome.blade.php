<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
            <style>
            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
            }

            #footer {
                position: absolute;
                bottom: 0;
            }
              body { 
              background: #ccc;
              font-family: Open Sans;
              font-size: 13px;
              text-transform: uppercase;
              text-align: center;
            }
             
            .wrap {
              display: inline-block;
            }
            a {
              text-decoration: none;
              color: #fff;
              display: block;
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
        <div class="content">
            @if (Route::has('login'))
             
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Security Fighters
                    <br />
                    {{ Html::image('img/hooded.jpeg', 'alt', array( 'width' => 710, 'height' => 370 )) }}
                </div>

               <!-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        
  <!-- the content -->
                 <div id="content">
                    <!--<p>here is the content</p> -->
                 </div>
 
            <!-- the footer -->
                 <div id="footer">
                   <!-- <p>Here is the footer</p> -->
                 </div>


        </div>
        <div class="wrap">
            <span class="decor"></span>
            <nav>
                <ul class="primary">
                    <li>
                     <a href="{{ url('/') }}">Scripts</a>
                        <ul class="sub">
                            <li><a href="">Bulldog</a></li>
                            <li><a href="">Mastiff</a></li>
                            <li><a href="">Labrador</a></li>
                            <li><a href="">Mutt</a></li>
                        </ul>
                    </li>
                    <li>
                    <a href="">About</a>
                        <ul class="sub">
                            <li><a href="">Tabby</a></li>
                            <li><a href="">Black Cat</a></li>
                            <li><a href="">Wrinkly Cat</a></li>
                        </ul>
                    </li>
                    <li>
                    <a href="">Events</a>
                        <ul class="sub">
                            <li><a href="">Humming Bird</a></li>
                            <li><a href="">Hawk</a></li>
                            <li><a href="">Crow</a></li>
                        </ul>  
                    </li>
                    <li>
                    <a href="">Blog</a>
                        <ul class="sub">
                            <li><a href="">Brown Horse</a></li>
                            <li><a href="">Race Horse</a></li>
                            <li><a href="">Tall Horse</a></li>
                        </ul>  
                   </li>
                   <li>
                    <a href="">Contact</a>
                        <ul class="sub">
                            <li><a href="">Cheesy</a></li>
                            <li><a href="">More Ketchup</a></li>
                            <li><a href="">Some Mustard</a></li>
                            <li><a href="">Extra Butter</a></li>
                        </ul>  
                    </li>
              </ul>
        </nav>
    </body>
</html>
