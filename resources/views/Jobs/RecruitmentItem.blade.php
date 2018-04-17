@extends('layout.master')

@section('content')

<div id="junyi_page">
	<?php
		Session::put('recruitmentID',$job_ID);

		$conditions_data = DB::table('jobconditions')
		->where('recruitmentID','=',$job_ID)
		->first();

		$Job_data = DB::table('recruitment')
		->where('id','=',$job_ID)
		->first();
	?>
	<h1> <?php echo $Job_data->job_name; ?></h1>
	<p>地址 : <?php echo $Job_data->job_locol; ?></p>
	<p>薪水 : <?php echo $Job_data->salary_min."~".$Job_data->salary_max ; ?></p>
	<p>內容 : </p>
	<p><?php echo nl2br($Job_data->job_content); ?></p>
	<p>工作條件 :</p>
	<ul>
		<li>
			學歷要求 : <?php echo $conditions_data->education; ?>
		</li>
		<li>
			工作經驗 : <?php echo $conditions_data->work_experience; ?>
		</li>
		<li>
			畢業科系 : <?php echo $conditions_data->subject; ?>
		</li>
		<li>
			專長 : <?php echo $conditions_data->Expertise; ?>
		</li>
		<li>
			備註 : <?php echo $conditions_data->Note; ?>
		</li>
	</ul>
	
	<p><a href="/file?id=<?=$job_ID?>">我要應徵</a></p>
</div>


@endsection