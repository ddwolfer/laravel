<?php
	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	/**
	* 控制主頁面
	*/
	class JobsController extends Controller
	{
		public function recruitment(){
			$binding = [
				'title' => '企業徵才'
			];

			return view('Jobs.Recruitment',$binding);
		}

		public function recruitmentItem( $job_ID ){
			$binding = [
				'title' => '企業徵才',
				'job_ID' => $job_ID
			];

			return view('Jobs.RecruitmentItem',$binding);
		}
	}
	
?>