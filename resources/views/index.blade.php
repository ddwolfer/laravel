@extends('layout.master')

@section('title',$title)

@section('content')

<div id="junyi_page">
	<div class="flexslider" >
  		 <ul class="slides" style="width: 1000px;margin: 0px auto;">
	    	<li><img src="images/s1.jpg" /></li>
	    	<li><img src="images/s2.jpg" /></li>
	        <li><img src="images/s3.jpg" /></li>
	        <li><img src="images/s4.jpg" /></li>
  		</ul>
   	</div>
   	<div class="Dividers"></div>
   	<div id="junyi_page_content" style="width: 85%;">
   		<div id="main_page_news">
   			<h1>最新消息</h1>
            <div class="list_Frame" style="height: 360px">

                <ul><?php
                $data = DB::table('news')
                ->orderBy('created_at','DESC')
                ->get();
                $count = 0;
                foreach ($data as $data)
                {
                    if ($count++ > 7) {
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
   			<p style="text-align:right;"><a href="/news">查看更多</a></p>
   		</div>
   	</div>
</div>
@endsection