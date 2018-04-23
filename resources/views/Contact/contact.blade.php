@extends('layout.master')

@section('title',$title)

@section('content')

<div id="junyi_page">
	<div id="junyi_page_content">
		<h1>聯絡我們</h1>
		<p>留下您的大名及資訊，我們將會盡快派人員聯絡您。</p>

		<p><label for="name">姓名</label> 
		<input type="text" name="name" id="name">
		</p>
		<p>性別 <label for="male"> 男</label>
		<input type="radio" name="sex" value="男" id="male">  
		<label for="female">女</label>
		<input type="radio" name="sex" value="女" id="female">
		</p>
		<p><label for="email">信箱</label>
		<input type="text" name="mail" id="email">
		</p>
        <p><label for="phone">電話</label>
        <input type="text" name="phone" id="phone">
        </p>
		<p><label for="mail_title">標題</label>
		<input type="text" name="title" id="mail_title">
		</p>
		<p><label for="mail_content" style="vertical-align:top;">內容</label>
		<textarea cols="30" rows="10" id="mail_content"></textarea>
		</p>
		<p><input type="submit" value="傳送" id="btn"></p>
        <div id="msg"></div>
        <div id="loadingImg" style="display:none"><img src="images/loading.gif"> 處理中...</div>
	</div>
</div>
<style type="text/css">
#loadingImg{
	text-align:left;
	font:bold 11px Arial, Helvetica, sans-serif;
}
</style>
<script type="text/javascript">
	
	$('#btn').click( function () {
		console.log('GOOD');
		insert_data();
	});

	function insert_data() {
		var name = document.getElementById('name').value;
		var sex = $("input[name='sex']:checked").val();
		var mail = document.getElementById('email').value;

		console.log(name + '+' + mail + '\n');

		$.ajax({
			type:"post",
			url:"/insert",
			dataType:"json",
			data:{
				name: $('#name').val(),
                sex: $("input[name='sex']:checked").val(),
                email: $('#email').val(),
                mail_title:$('#mail_title').val(),
                mail_content:$('#mail_content').val(),
                phone:$('#phone').val()
			},
			beforeSend: function(){

			},
			success: function(data) {

            }
		});


		// $.ajax({
  //           url: 'Contact_send.php',
  //           cache: false,
  //           dataType: 'html',
  //           type: 'post',//可改 get 或 post
  //           data: {
  //               name: $('#name').val(),
  //               sex: $("input[name='sex']:checked").val(),
  //               email: $('#email').val(),
  //               mail_title:$('#mail_title').val(),
  //               mail_content:$('#mail_content').val(),
  //               phone:$('#phone').val()
  //           },
  //           error: function(xhr) {
  //               alert('request 發生錯誤');
  //           },
  //           success: function(response) {
  //               $('#msg').html(response);
  //               $('#msg').fadeIn();
  //           }
  //       });

	}
	//秀出 loading 圖片
    $(document).ajaxStart(function(){
        $("#loadingImg").show();
    });
    //隱藏 loading 圖片
    $(document).ajaxStop(function(){
        $("#loadingImg").hide();
    });
</script>

@endsection