<?php
	namespace App\Http\Controllers;
	/**
	* 控制主頁面
	*/
	class ContactController extends Controller
	{
		
		public function ContactJunyi(){
			$binding = [
				'title' => '聯絡珺翊'
			];

			return view('about',$binding);
		}
	}
	
?>