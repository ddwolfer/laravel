@extends('layout.master')

@section('content')

<?php 
	$ID = $_GET['id'];
?>

<meta charset="utf-8">

<div class="container">
	<center>
		<h1>上傳檔案</h1>
	</center>
	
	<form method="POST" action="{{ route('upload.file') }}" enctype="multipart/form-data" >
		{{ csrf_field() }}
		姓名：<input type="text" name="Name">
		<br>
		電話：<input type="text" name="phone">
		<br>
		上傳履歷表：<input type="file" name="file" >
		<br>
		<input type="hidden" name="recruitment" value=<?=$ID?>>
		<input type="submit" value="上傳檔案" >
	</form>
</div>


@endsection