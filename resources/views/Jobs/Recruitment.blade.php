@extends('layout.master')

@section('title',$title)

@section('content')
<div id="junyi_page">
	<?php 
	$data = DB::table('recruitment')
		->orderBy('updated_at','DESC')
		->get();

	foreach ($data as $data ) { ?>
		<div style="width: 85%; margin:0px auto;">
			<h1> 
				<a href="/jobs/{{$data->id}}">
					<?php echo $data->job_name; ?> 
				</a>
				<span style="font-size: 20px; color: #6c6c6c;">
				<?php echo "月薪".$data->salary_min."~".$data->salary_max ; ?> 
				</span> 
			</h1>
			<p style="width: 90%; margin:0px auto;">
				<?php echo $data->job_content; ?> 
			</p>
			<p style="width: 90%; text-align: right; ">
				更新時間 : 
				<?php echo $data->updated_at; ?> 
			</p>
		</div><?php 
	} ?>
</div>


@endsection