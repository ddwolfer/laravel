<?php
	namespace App\Http\Controllers;
	/**
	* 控制主頁面
	*/
	class HomeController extends Controller
	{
		
		public function HomePage(){
			$binding = [
				'title' => '首頁'
			];

			return view('index',$binding);
		}
	}
	
?>