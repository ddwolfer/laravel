<?php

	namespace App\Http\Controllers;
	use Illuminate\Http\Request;

	class ContactController extends Controller
	{
		
		public function ContactJunyi(){
			$binding = [
				'title' => '聯絡珺翊'
			];

			return view('Contact.contact',$binding);
		}

		public function insertdata(request $request)
		{
			$data = DB::table('contact_jies')->insert([
				'email' => 'john@example.com', 
			    'votes' => 0
			]);

		}
	}
	
?>