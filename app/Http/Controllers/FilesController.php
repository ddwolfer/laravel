<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResumeFile;


class FilesController extends Controller
{
    public function uploadForm()
    {
    	return view('upload');
    }

    public function storeFile(request $request)
    {
    	if ($request -> hasFile('file')) {
    		//設定數據
    		$Job_ID = $request->recruitment;
    		$Name = $request->Name;
    		$Phone = $request->phone;
			$filename = $request->file->getClientOriginalName();
			$filesize = $request->file->getClientSize();
			//儲存檔案
    		$request->file->storeAs('public/upload',$filename);
    		//設定寫入資料庫數據
    		$file = new ResumeFile;
    		$file->name = $Name;
    		$file->phone = $Phone;
    		$file->filename = $filename;
    		$file->size = $filesize;
    		$file->recruitmentID = $Job_ID;
    		//存至資料庫
    		if ( $file->save() ) {
    			return "傳送成功 ";
    		}
    		else{
    			return "傳送失敗";
    		}   		
    	}
    	else{
    		return "沒有接收到檔案";
    	}
    	// return $request->all();
    }
}
