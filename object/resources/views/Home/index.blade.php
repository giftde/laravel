@extends('Home.base.parent')
@section('content')
<div id="menu_content_bg" style="height: 0px;">
    <div id="menu_content_wrap">
         <ul style="top: 0px;">
             <li id="xiaomiphone">
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/mi4!160x110.jpg') }}">
                     <p class="menu_content_tit">大米手机4</p>
                     <p class="menu_content_price">1499元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/minote!160x110.jpg') }}">
                     <p class="menu_content_tit">大米NOTE标准版</p>
                     <p class="menu_content_price">1999元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/minotepro!160x110.jpg') }}">
                     <p class="menu_content_tit">大米NOTE顶配版</p>
                     <p class="menu_content_price">2999元起</p>
                 </div>
             </li>
             <li id="hongmiphone">
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/hongmi2a!160x110.jpg') }}">
                     <p class="menu_content_tit">红米手机2A</p>
                     <p class="menu_content_price">499元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/hongmi2!160x110.jpg') }}">
                     <p class="menu_content_tit">红米手机2</p>
                     <p class="menu_content_price">599元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/note!160x110.jpg') }}">
                     <p class="menu_content_tit">红米NOTE</p>
                     <p class="menu_content_price">699元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/note2!160x110.jpg') }}">
                     <p class="menu_content_tit">红米NOTE2</p>
                     <p class="menu_content_price">799元</p>
                 </div>
             </li>
             <li id="pingban">
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/mipad16!160x110.jpg') }}">
                     <p class="menu_content_tit">大米平板16G</p>
                     <p class="menu_content_price">1299元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/mipad64!160x110.jpg') }}">
                     <p class="menu_content_tit">大米平板64G</p>
                     <p class="menu_content_price">1499元起</p>
                 </div>
             </li>
             <li id="tv">
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/mitv40!160x110.jpg') }}">
                     <p class="menu_content_tit">大米电视2&nbsp;40英寸</p>
                     <p class="menu_content_price">1999元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/mitv48!160x110.jpg') }}">
                     <p class="menu_content_tit">大米电视2S&nbsp;48英寸</p>
                     <p class="menu_content_price">2999元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/mitv49!160x110.jpg') }}">
                     <p class="menu_content_tit">大米电视2&nbsp;49英寸</p>
                     <p class="menu_content_price">3399元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/mitv55!160x110.jpg') }}">
                     <p class="menu_content_tit">大米电视2&nbsp;55英寸</p>
                     <p class="menu_content_price">4499元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/hezimini!160x110.jpg') }}">
                     <p class="menu_content_tit">大米盒子MINI版</p>
                     <p class="menu_content_price">199元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/hezis!160x110.jpg') }}">
                     <p class="menu_content_tit">大米盒子增强版</p>
                     <p class="menu_content_price">299元</p>
                 </div>
             </li>
             <li id="luyou">
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/miwifi!160x110.jpg') }}">
                     <p class="menu_content_tit">全新大米路由器</p>
                     <p class="menu_content_price">699元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/miwifimini!160x110.jpg') }}">
                     <p class="menu_content_tit">大米路由器&nbsp;MINI</p>
                     <p class="menu_content_price">129元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/miwifilite!160x110.jpg') }}">
                     <p class="menu_content_tit">大米路由器&nbsp;青春版</p>
                     <p class="menu_content_price">79元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/wifiExtension!160x110.jpg') }}">
                     <p class="menu_content_tit">大米WIFI放大器</p>
                     <p class="menu_content_price">39元</p>
                 </div>
             </li>
             <li id="yingjian">
                 <div class="menu_content">
                     <img src="http://c1.mifile.cn/f/i/15/goods/nav/scale!160x110.jpg') }}">
                     <p class="menu_content_tit">体重称</p>
                     <p class="menu_content_price">99元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/xiaoyi!160x110.jpg') }}">
                     <p class="menu_content_tit">摄像头</p>
                     <p class="menu_content_price">129元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/yicamera!160x110.jpg') }}">
                     <p class="menu_content_tit">运动相机</p>
                     <p class="menu_content_price">399元起</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/ihealth!160x110.jpg') }}">
                     <p class="menu_content_tit">血压计</p>
                     <p class="menu_content_price">199元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/chazuo!160x110.jpg') }}">
                     <p class="menu_content_tit">智能插座</p>
                     <p class="menu_content_price">59元</p>
                 </div>
                 <span class="menu_content_line"></span>
                 <div class="menu_content">
                     <img src="{{ asset('Home/main/img/smart!160x110.jpg') }}">
                     <p class="menu_content_tit">查看全部
                         <br>智能硬件</p>
                 </div>
             </li>
         </ul>
    </div>
</div>
<div id="big_banner_wrap">
     <ul id="banner_menu_wrap">
     	@foreach($list as $v)
         <li class="active"img>
             <a>{{ $v->name }}</a>
             <a class="banner_menu_i">&gt;</a>
             <div class="banner_menu_content" style="top: -20px;">
                 <ul class="banner_menu_content_ul">
                     @foreach($good as $c)
                     @if($c->stype == $v->id)
                     <li>
                         <a><img src="{{ asset('Home/upload/s'.$c->pic) }}" width="40"></a><a>{{ $c->name }}</a><a href="{{ url('/home/mi/'.$c->id.'/edit') }}"><span style="border:1px solid orange;">选购</span></a>
                     </li>
                     @endif
                     @endforeach
                 </ul>
             </div>
         </li>
         @endforeach
     </ul>
     <script type="text/javascript" src="{{ asset('/Home/main/js/Mds.onePic.1.0.js') }}"></script>
     <script type="text/javascript" src="{{ asset('/Home/main/js/jquery-1.9.1.min.js') }}"></script>
     <div id="big_banner_pic_wrap">
         <ul id="big_banner_pic">
             <li><img src="{{ asset('Home/main/img/T1hiDvBvVv1RXrhCrK.jpg') }}"></li>
             <li><img src="{{ asset('Home/main/img/T1jrxjB_VT1RXrhCrK.jpg') }}"></li>
             <li><img src="{{ asset('Home/main/img/T1oTJjBKKT1RXrhCrK.jpg') }}"></li>
             <li><img src="{{ asset('Home/main/img/T1RICjB7DT1RXrhCrK.jpg') }}"></li>
             <li><img src="{{ asset('Home/main/img/T1vWdTBKDv1RXrhCrK.jpg') }}"></li>
         </ul>
     </div>
     <div id="big_banner_change_wrap">
         <div id="big_banner_change_prev"> &lt;</div>
         <div id="big_banner_change_next">&gt;</div>
     </div>
</div>
<div id="head_other_wrap">
     <div id="head_other">
         <ul>
             <li>
                 <div id="div1">
                     <p>START</p>
                     <p>开房购买</p>
                 </div>
             </li>
             <li>
                 <div id="div2">
                     <p>GROUND</p>
                     <p>企业团购</p>
                 </div>
             </li>
             <li>
                 <div id="div3">
                     <p>RETROFIT</p>
                     <p>官方产品</p>
                 </div>
             </li>
             <li>
                 <div id="div4">
                     <p>CHANNEL</p>
                     <p>F码通道</p>
                 </div>
             </li>
             <li>
                 <div id="div5">
                     <p>RECHARGE</p>
                     <p>话费充值</p>
                 </div>
             </li>
             <li>
                 <div id="div6">
                     <p>SECURITY</p>
                     <p>防伪检查</p>
                 </div>
             </li>
         </ul>
     </div>
     <div class="head_other_ad"><img src="{{ asset('Home/main/img/'.rand(50,55).'.jpg') }}"></div>
     <div class="head_other_ad"><img src="{{ asset('Home/main/img/'.rand(50,55).'.jpg') }}"></div>
     <div class="head_other_ad"><img src="{{ asset('Home/main/img/'.rand(50,55).'.jpg') }}"></div>
</div>
<div id="head_hot_goods_wrap">
     <div id="head_hot_goods_title">
         <span class="title_span">大米明星单品</span>
         <div id="head_hot_goods_change">
             <span id="head_hot_goods_prave"><</span>
             <span id="head_hot_goods_next">></span>
         </div>
     </div>
     <div id="head_hot_goods_content" style="background:#eee;">
         <ul>
             @foreach($good as $c)
             	 <li>
	                 <a href="{{ url('/home/mi/'.$c->id.'/edit') }}"><img src="{{ asset('Admin/upload/'.$c->pic) }}" height="150"></a>
	                 <a href="{{ url('/home/mi/'.$c->id.'/edit') }}">{{ $c->name }}</a>
	                 <p style="color:gray;">{{ $c->explain }}</p>
	             </li>
             @endforeach
             
         </ul>
     </div>
</div>
@foreach($list as $a)
<div id="main_show_box">
     <div id="floor_1">
          <div id="floor_head">
              <span class="title_span">{{ $a->name }}</span>
          </div>
     </div>
     <div class="floor_goods_wrap">
         <ul>
             <li class="floor_goods_wrap_li">
                 <a>
                 	<img src="{{ asset('Home/main/img/'.rand(10,17).'.png') }}">
                 	<img src="{{ asset('Home/main/img/'.rand(10,17).'.png') }}">
                 </a>
             </li>
             @foreach($good as $c)
             @if($c->stype == $a->id)
             <li class="floor_goods_wrap_li">
                 <a class="floor_goods_img" href="{{ url('/home/mi/'.$c->id.'/edit') }}"><img src="{{ asset('Admin/upload/'.$c->pic) }}" height="150"></a>
                 <a class="floor_goods_tit">{{ $c->name }}</a>
                 <a class="floor_goods_txt">{{ $c->explain }}</a>
                 <a class="floor_goods_price">{{ $c->price.'元' }}</a>
             </li>
             @endif
             @endforeach
             <div style="clear:both;"></div>
         </ul>
     </div>
</div>
@endforeach
<script type="text/javascript">
    // var did = $('#did');
    var w = 0;
    var j = 0;
    $('#banner_menu_wrap>li').each(function(){
        w = -(j*48+20)+'px';
        $(this).children(2).css("top",w);
        j++;
    });
</script>
@endsection