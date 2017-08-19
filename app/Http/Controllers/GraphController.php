<?php

namespace App\Http\Controllers;
use App\graph;


class GraphController extends Controller {
	public function graphchart() {
		$2017users = graph::where ( 'updated_at', '2017' )->get ();;		
		$ips = graph::select ( 'ip' )->groupBy ( 'ip' )->get ();
		$chartArray ["chart"] = array (
				"type" => "line" 
		);
		$chartArray ["title"] = array (
				"text" => "Yearly sales" 
		);
		$chartArray ["credits"] = array (
				"enabled" => false 
		);
		$chartArray ["xAxis"] = array (
				"categories" => array () 
		);
		$chartArray ["tooltip"] = array (
				"valueSuffix" => "$" 
		);
		
		$categoryArray = array (
				'2017' 
		);
		$y2017 = [ ];
		$dataArray = [ ];
		$ipsArray = [ ];
		
		foreach ( $ips as $ip )
			array_push ( $ipsArray, $ip->ip );
		
		$chartArray ["xAxis"] = array (
				"categories" => $categoryArray 
		);
		$chartArray ["yAxis"] = array (
				"title" => array (
						"text" => "asdasdasdadasdasdads" 
				) 
		);
		return view ( 'welcome' )->withChartarray ( $chartArray );
	}
}