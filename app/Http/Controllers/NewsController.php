<?php
	namespace App\Http\Controllers;
	/**
	* 控制主頁面
	*/
	class NewsController extends Controller
	{
		
		public function JunyiNews($Page_ID){

			$binding = [
				'title' => '最新消息',
				'Page_ID' => $Page_ID,
			];

			return view('News.News',$binding);
		}
		public function NewsList(  ){

			$binding = [
				'title' => '最新消息',
			];

			return view('News.NewsList',$binding);
		}
	}
	
?>