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

<div style="width:1170px;background:#eee;margin-left:60px;padding-left:30px;">
    <div style="margin-bottom:8px;height:23px;line-height:23px;margin-left:-30px;"><a href="{{ url('/home/mi') }}">首页</a>>全部结果>{{ $search }}</div>
    <div style="margin-left:-30px;margin-bottom:8px;">搜索结果</div>
    @foreach($good as $g)
    <div class="seagood" style="border:5px solid #eee;position:relative;float:left;width:254px;padding-top:47px;margin-bottom:14px;margin-right:20px;text-align:center;">
        <div class="like" style="height:40px;width:100px;float:left;margin-top:-40px;display:none;">
        @if(isset(session('user')->uid))
            <form action="{{ url('/home/stocll') }}" method="get">
                <!-- {{ csrf_field() }} -->
                <input type="hidden" name="uid" class="uid" value="{{ session('user')->uid }}">
                <input type="hidden" name="gid" class="gid" value="{{ $g->id }}">
                <input type="hidden" name="ctime" class="ctime" value="{{ date('Y-m-d H:i:s',time()) }}">
                <input type="image" class="stocll" src="{{ asset('Home/car/images/nolike.png') }}">
                <span style="font-size:12px;">添加关注</span>
            </form>
            
        @else
            <form action="{{ url('/home/cart') }}" method="post">
            {{ csrf_field() }}
                <input type="image" src="{{ asset('Home/car/images/nolike.png') }}" id="addcll" onclick="alert('登录之后才能执行此操作')">
                <span style="font-size:12px;">添加关注</span>
            </form>
        @endif
        </div>
        <div class="tem" style="height:40px;width:40px;float:right;margin-top:-40px;display:none;">
            <form action="{{ url('/home/cart') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="gid" value="{{ $g->id }}">
                @if(isset(session('user')->uname))
                <input type="hidden" name="uid" value="{{ session('user')->uid }}">
                @endif
                <input type="hidden" name="gnum" value="1">
                <input type="hidden" name="gpic" value="{{ $g->pic }}">
                <input type="hidden" name="gprice" value="{{ $g->price }}">
                <input type="hidden" name="gname" value="{{ $g->name }}">
                <input type="image" src="{{ asset('Home/car/images/cart.png') }}">
            </form>
            <!-- <a href="{{ url('/home/cart/'.$g->id) }}"><img src="{{ asset('Home/car/images/cart.png') }}"></a> -->
        </div>
        <div style="width: 200px;height: 200px;margin: 0 auto 16px;">
            <a href="{{ url('/home/mi/'.$g->id.'/edit') }}"><img src="{{ asset('/Admin/upload/'.$g->bigpic) }}" height="200" width="200"></a>
        </div>
        <div style="height:30px;"></div>
        <h2><a href="{{ url('/home/mi/'.$g->id.'/edit') }}">{{ $g->name }}</a></h2>
        <p>{{ '￥'.$g->price.'元' }}</p>
        <div style="margin-top:20px;"><img src="{{ asset('/Admin/upload/s_'.$g->bigpic) }}" height="40px"></div>
    </div>
    @endforeach
</div>
<div class="paginate" style="clear:both;float:right;margin-right:150px;">
    {{ $good->appends($where)->links() }}
</div>
<script type="text/javascript" src="{{ asset('/Home/info/js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/Home/info/js/info.js') }}"></script>
<script type="text/javascript">
    $(".seagood").hover(function(){
        $(this).children('.like').css('display','block').css('cursor','pointer');
        $(this).children('.tem').css('display','block').css('cursor','pointer');
    },function(){
        $(this).children('.like').css('display','none');
        $(this).children('.tem').css('display','none');
    });
    $(".paginate ul li").css("fontSize",'18px').css("float",'left').css('width','30px'),css('height','30px').css('text-align','center').css('marginLeft','5px');
</script>
@if(session('msg'))
<script type="text/javascript">
    alert("{{ session('msg') }}");
</script>
@endif
@endsection