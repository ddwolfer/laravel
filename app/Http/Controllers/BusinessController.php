<?php
	namespace App\Http\Controllers;
	/**
	* 控制主頁面
	*/
	class BusinessController extends Controller
	{
		
		public function JunyiBusiness(){
			$binding = [
				'title' => '營業項目'
			];

			return view('business',$binding);
		}
	}
	
?>