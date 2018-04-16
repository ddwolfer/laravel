@extends('layout.master')

@section('title',$title)

@section('content')

<div id="junyi_page">
	<div id="junyi_page_content">
		<h1>最新消息</h1>
		<?php 
		@$NewsID = $_GET["ID"];
		if ($NewsID == NULL) {
			//計算資料庫數量(行數)
			$row_num = DB::table('news')->count();
			//每一頁的數量
			$data_perpage=10;
			//計算需要幾個分頁選擇
			$page_num = ceil($row_num/$data_perpage);

			if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
				$page=1; //則在此設定起始頁數
			} else {
				$page = intval($_GET["page"]); //確認頁數只能夠是數值資料
			}
			$start = ($page-1)*$data_perpage; //每一頁開始的資料序號

			$data = DB::table('news')
			->orderBy('created_at','DESC')
			->offset("$start")
	        ->limit("$data_perpage")
			->get();
			?><div class="list_Frame" style="height: 450px">
				<ul><?php
					$count = 0;
					foreach ($data as $data)
					{
						if ($count++ > 9) {
							break;
						}
						?><li>
							<a href="/news?ID={{$data->id}}"> <?php
						    echo "$data->text_title";
						    ?></a>
					    </li><?php
					}
				?></ul>
			</div>
			<div id="change_page">
				<?php 
				echo "<p>共 $row_num 筆 - 在第 $page 頁-共 $page_num 頁</p>";
				$previous = $page-1<1 ? 1: $page-1; //如果已經在第一頁
				$next = $page+1 > $page_num ? $page_num: $page+1; //如果在最後一頁
				 ?>
				<div style="text-align: right;">
				 	<ul class="pagination">
						<li><a href=?page=<?=$previous?>>&laquo;</a></li><?php
						for( $i=1 ; $i<=$page_num ; $i++ ) {
						  	if ( $page-3 < $i && $i < $page+3 ) {
						        if ($page == $i) {
						        	echo "<li class='active'><a href=?page=".$i.">".$i."</a></li> ";
						        }
						        else{
						        		echo "<li><a href=?page=".$i.">".$i."</a></li> ";
						        }
						    }
						} 
						?>
						<li><a href=?page=<?=$next?>>&raquo;</a></li>
					</ul>
				</div>
			 </div><?php
		}
		else{
			//建立查詢資料表的SQL語法
			$data = DB::table('news')
			->where('id','=',"$NewsID")
			->orderBy('created_at','DESC')
			->first();
			?>
			<div>
			<h1>標題：<?php echo "$data->text_title" ?></h1>
			<p><?php echo "$data->text_content" ?></p>
			</div>
		<?php } ?>
		
	</div>
</div>

@endsection