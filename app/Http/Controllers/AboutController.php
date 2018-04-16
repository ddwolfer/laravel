<?php
	namespace App\Http\Controllers;
	/**
	* 控制主頁面
	*/
	class AboutController extends Controller
	{
		
		public function AboutJunyi(){
			$binding = [
				'title' => '關於我們'
			];

			return view('about',$binding);
		}
	}
	
?>