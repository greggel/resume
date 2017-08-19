<html>
  <head>
    <style>

#content-wrapper{
  display:table;
}

#content{
  display:table-row;
}

#content>div{
  display:inline-block;
  text-align: center;
}

/*adding some extras for demo purposes*/
#content-wrapper{
  width:100%;
  height:100%;
  top:0px;
  left:0px;
  position:absolute;
}
#panel1{
  margin-top: 4%;
  width:15%;
  background:yellow;
}
#panel2{
  margin-top: 4%;
  width:15%;
  background:peachpuff;
}
#panel3{
 margin-top: 4%;
  width:15%;
  background:yellow;
}
#panel4{
  margin-top: 4%;
  width:15%;
  background:peachpuff;
}
#panel5{
  margin-top: 4%;
  width:15%;
  background:yellow;
}
#panel6{
  margin-top: 4%;
  width:25%;
  background:peachpuff;
}

</style>

  </head>
  <body>
	 <div id="content-wrapper">
	  <h1 style="overflow: hidden;position:fixed;background:white;width:100%;top:0;margin-top:0;">Hello, these are all of your hits for {{ date('Y-m-d H:i:s') }} </h1><br />
      
         <div id="content">
          
          <div id="panel1" style="overflow: hidden;position:fixed;top: 0;width: 15.2%;margin-top: 35;">Created</div>
          <div id="panel2" style="overflow: hidden;position:fixed;left:15%;top: 0;width: 15.99%;margin-top: 35;">Updated</div>
          <div id="panel3" style="overflow: hidden;position:fixed;left:30%;top: 0;width: 15.1%;margin-top: 35;">ip</div>
          <div id="panel4" style="overflow: hidden;position:fixed;left:45%;top: 0;width: 15.1%;margin-top: 35;">hit count (same address)</div>
          <div id="panel5" style="overflow: hidden;position:fixed;left:60%;top: 0;width: 15%;margin-top: 35;">browser</div>
          <div id="panel6" style="overflow: hidden;position:fixed;left:75%;top: 0;width: 25%;margin-top: 35;">http referer</div>
          <br />

              @foreach($data as $d)
                 <div id="panel1">
                  {{$d->created_at}}
                </div>
                <div id="panel2">
                  {{$d->updated_at}}
                </div>
              	<div id="panel3">
              	  {{$d->ip}}
                </div>
                <div id="panel4">
                  {{$d->hits}}
                </div>
                <div id="panel5">
                  {{$d->browser}}
                </div>
                <div id="panel6">
                  {{$d->http_referer}} 
                </div>
               @endforeach
       
        </div>

    </div>
  </body>
</html>
