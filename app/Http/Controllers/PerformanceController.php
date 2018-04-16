<?php
	namespace App\Http\Controllers;
	/**
	* 控制主頁面
	*/
	class PerformanceController extends Controller
	{
		
		public function Performance(){
			$binding = [
				'title' => '業務實績'
			];

			return view('performance',$binding);
		}
	}
	
?>