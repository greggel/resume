<?php

namespace App\Http\Middleware;

use Closure;
use App\Stranger;
use Request;

class strangerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */    
public function handle($request, Closure $next)
    {
        //strangerVisitor::hit();

	function console_log($output, $with_script_tags = true) {
    		$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
    	if ($with_script_tags) {
        	$js_code = '<script>' . $js_code . '</script>';
    	}
    	echo $js_code;
	}


	$arrContextOptions=array(
    	"ssl"=>array(
	        "verify_peer"=>false,
        	"verify_peer_name"=>false,
    		),
	);

//        $ip = $_SERVER['REMOTE_ADDR'];
//        $publicIP = file_get_contents('https://api.ipify.org/?format=json');

//	console_log($ip);
//	console_log($publicIP);

	// Function to get the real client ip address
	function get_client_ip_server() {
	    $ipaddress = '';

	    if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)){
    		$clientIP = $_SERVER['HTTP_CLIENT_IP'];
		//console_log($ipaddress);}
	    elseif (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)){
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		//console_log($ipaddress);}
	    elseif (array_key_exists('HTTP_X_FORWARDED', $_SERVER)){
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		//console_log($ipaddress);}
	    elseif (array_key_exists('HTTP_FORWARDED_FOR', $_SERVER)){
	        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		//console_log($ipaddress);}
	    elseif (array_key_exists('HTTP_FORWARDED', $_SERVER)){
	        $ipaddress = $_SERVER['HTTP_FORWARDED'];
		//console_log($ipaddress);}
	    elseif (array_key_exists('REMOTE_ADDR', $_SERVER)){
	        $ipaddress = $_SERVER['REMOTE_ADDR'];
		//console_log($ipaddress);}
	    else{
	        $ipaddress = 'UNKNOWN';
		//console_log($ipaddress);
		}
 
    	return $ipaddress;
	}

	//echo shell_exec("nmap -v ".get_client_ip_server());
	//$output=shell_exec('/var/www/collab/nmap.php 2>&1'); 
        //print_r($output);

        if (strpos(get_client_ip_server(),'192.168') == true) {
            $response1 = file_get_contents('http://api.ipstack.com/'.get_client_ip_server().'?access_key=b67005e171d5dea746de04097d400193&format=1', false, stream_context_create($arrContextOptions));
            $response1 = json_decode($response1, true);    
            Stranger::create([
                'ip'   => get_client_ip_server(),
                'created_at' => date('Y-m-d'),
                'browser' => $_SERVER['HTTP_USER_AGENT'],
                'http_referer' => Request::server('HTTP_REFERER'),
                'lat' => $response1['latitude'],
                'lng' => $response1['longitude'],
                'city'=> $response1['city'],
                'regionName' => $response1['region_name'],
            ]);
            return $next($request);
        }
        else {
            $response2 = file_get_contents('http://api.ipstack.com/'.get_client_ip_server().'?access_key=b67005e171d5dea746de04097d400193&format=1');
            $response2 = json_decode($response2, true);    
            Stranger::create([
                'ip' 	=> get_client_ip_server(),
                'created_at' => date('Y-m-d'),
                'browser' => $_SERVER['HTTP_USER_AGENT'],
                'http_referer' => Request::server('HTTP_REFERER'),                    
		        'lat' => $response2['latitude'],
                'lng' => $response2['longitude'],
                'city'=> $response2['city'],
                'regionName' => $response2['region_name'],
                ]);
            return $next($request);
        }

    }
}
