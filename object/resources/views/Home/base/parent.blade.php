<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>{{ $config->title }}</title>
    <meta name="keywords" content="{{ $config->keys }}">
    <meta name="description" content="{{ $config->desn }}">
    <link rel="stylesheet" href="{{ asset('Home/main/css/xiaomi.css') }}"/>
    <link rel="stylesheet" href="{{ asset('Home/info/css/base.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Home/info/css/product_buy.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/Home/main/css/base.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/Home/main/css/main.min.css') }}">
    <script src="{{ asset('Home/main/js/jquery.animate-colors-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Home/main/js/jquery-2.1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Home/info/js/unjcV2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Home/info/js/mstr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Home/info/js/jquery.statData.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Home/info/js/xmst.js') }}"></script>
    <script src="{{ asset('/Home/main/js/base.min.js') }}"></script>
    <script src="{{ asset('/Home/main/js/jquery.statData.min.js') }}"></script>
    <script src="{{ asset('/Home/main/js/mstr.js') }}"></script>
    <script src="{{ asset('/Home/main/js/mstr.js') }}"></script>
    <script src="{{ asset('/Home/main/js/user.min.js') }}"></script>
    <style>@font-face{font-family:uc-nexus-iconfont;src:url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.woff) format('woff'),url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.ttf) format('truetype')}</style>
</head>
<body>
    <div id="zhe">
        <div class="head_box" style="position:fixed;z-index:601;">
         <div id="head_wrap">
            <div id="head_nav">
                 <a href="{{ url('/home/mi') }}" class="head_nav_a">首页</a>
                 <span>|</span>
                 <a class="head_nav_a">大米网</a>
                 <span>|</span>
                 <a class="head_nav_a">MIUI</a>
                 <span>|</span>
                 <a class="head_nav_a">米聊</a>
                 <span>|</span>
                 <a class="head_nav_a">游戏</a>
                 <span>|</span>
                 <a class="head_nav_a">多看阅读</a>
                 <span>|</span>
                 <a class="head_nav_a">云服务</a>
                 <span>|</span>
                 <a class="head_nav_a">大米移动版</a>
                 <span>|</span>
                 <a class="head_nav_a">问题反馈</a>
                 <span>|</span>
                 <a class="head_nav_a" id="Select_Region_but">Select Region</a>
             </div>
             <div id="fullscreen" style="color:white;float:right;margin-right:-50px;margin-top:8px;color:gray;cursor:pointer;">全屏</div>
             @if(session('user'))
                <div id="head_right">
                 <div id="head_landing">
                     <span style="color:#B0B0B0" class="head_nav_a" href="/home/login">欢迎：{{ session('user')->uname }}</span>
                     <span>|</span>
                     <a style="color:#B0B0B0" class="head_nav_a" href="{{ url('home/grzx') }}">个人中心</a>
                      <span>|</span>
                    <a style="color:#B0B0B0" class="head_nav_a" href="{{ url('home/over') }}">退出</a>
                 </div>
                 <div id="head_car">
                     <a href="{{ url('/home/cartshow') }}" class="head_car_text">购物车<img src="{{ asset('/Home/main/img/tem.png') }}"></a>
                 </div>
                </div>
             @else
                <div id="head_right">
                 <div id="head_landing">
                     <a style="color:#B0B0B0" class="head_nav_a" href="/home/login">登录</a>
                     <span>|</span>
                     <a href="{{ url('/home/register1') }}" class="head_nav_a">注册</a>
                 </div>
                 <div id="head_car">
                     <a href="{{ url('/home/cartshow') }}" class="head_car_text">购物车<img src="{{ asset('/Home/main/img/tem.png') }}"></a>
                 </div>
                </div>
             @endif=
         </div>
        </div>
        <div style="height:30px;"></div>
        <div id="main_head_box">
             <div id="menu_wrap">
                 <div id="menu_logo">
                     <a href="{{ url('/home/mi') }}" title="前台首页"><img src="{{ asset('Home/main/img/nlogo.png') }}"></a>
                 </div>
                 <div id="menu_nav">
                     <ul>
                         <li class="menu_li" control="xiaomiphone">大米手机</li>
                         <li class="menu_li" control="hongmiphone">红米</li>
                         <li class="menu_li" control="pingban">平板</li>
                         <li class="menu_li" control="tv">电视&nbsp;&nbsp;盒子</li>
                         <li class="menu_li" control="luyou">路由器</li>
                         <li class="menu_li" control="yingjian">智能硬件</li>
                         <li><a>服务</a></li>
                         <li><a>社区</a></li>
                     </ul>
                 </div>
                 <div id="find_wrap" style="border:0px">
                     <div id="sou" style="border:1px solid #ff6700;">
                     <form action="{{ url('/home/mi') }}" method="get">
                         <input type="text" placeholder="请输入搜索条件" name="name" style="outline:none;margin:-1px;width:250px;height:52px;border:1px solid #ff6700;text-align:center;font-size:20px;">
                         <input type="submit" id="GO" value="GO" style="margin:0px;height:50px;width:40px;font-size:20px;background:white;border:0;">
                     </form>
                     </div>
                 </div>
             </div>
        </div>
        <script type="text/javascript">
        $("#GO").hover(function(){
            $("#GO").css('background','#ff6700');
            $("#GO").parent().css('background',"#ff6700");
        },function(){
            $("#GO").css('background','white');
            $("#GO").parent().css('background',"white");
        });
        </script>
            <section id="content">
                @yield('content')
            </section>
        <div id="foot_box">
             <div id="foot_wrap">
                 <div class="foot_top">
                     <ul>
                         <li>1小时快修服务</li>
                         <li class="font_top_i">|</li>
                         <li>7天无理由退货</li>
                         <li class="font_top_i">|</li>
                         <li>15天免费换货</li>
                         <li class="font_top_i">|</li>
                         <li>满150元包邮</li>
                         <li class="font_top_i">|</li>
                         <li>520余家售后网点</li>
                     </ul>
                 </div>
                 <div class="foot_bottom">
                     <div class="foot_bottom_l">
                         <dl>
                             <dt>帮助中心</dt>
                             <dd>购物指南</dd>
                             <dd>支付方式</dd>
                             <dd>配送方式</dd>
                         </dl>
                         <dl>
                             <dt>服务支持</dt>
                             <dd>售后政策</dd>
                             <dd>自助服务</dd>
                             <dd>相关下载</dd>
                         </dl>
                         <dl>
                             <dt>大米之家</dt>
                             <dd>大米之家</dd>
                             <dd>服务网点</dd>
                             <dd>预约亲临到店服务</dd>
                         </dl>
                         <dl>
                             <dt>关注我们</dt>
                             <dd>新浪微博</dd>
                             <dd>大米部落</dd>
                             <dd><a href="{{ url('/admin/demo3') }}">后台登录</a></dd>
                         </dl>
                     </div>
                     <div class="foot_bottom_r">
                         <a>400-100-5678</a>
                         <a>周一至周日 8:00-18:00</a>
                         <a>（仅收市话费）</a>
                         <span> 24小时在线客服</span>
                     </div>
                 </div>
             </div>
             <div class="foot_note_box">
                 <div class="foot_note_wrap">
                     <div class="foot_note_con" style="float:left;">
                         <span class="foot_logo"><img src="{{ asset('Home/main/img/mi-logo.png') }}" width="38px" height="38px"></span>
                            <span class="foot_note_txt">
                            @foreach($links as $a)
                            <a href="htttp://{{ $a->url }}" title="{{ $a->switch }}">{{ $a->name }}</a><h>|</h>
                            @endforeach
                                <span style="color:gray;">©mi.com 京ICP证110507号 京ICP备10046444号  
                                违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</span>
                            </span>
                     </div>
                     <div style="height:28px;width:378px;float:left;margin-top:15px;margin-left:30px;">
                         <img src="{{ asset('/Home/info/img/truste.png') }}" height="28">
                         <img src="{{ asset('/Home/info/img/v-logo-1.png') }}" height="28">
                         <img src="{{ asset('/Home/info/img/v-logo-2.png') }}" height="28">
                         <img src="{{ asset('/Home/info/img/v-logo-3.png') }}" height="28">
                     </div>
                 </div>
             </div>
             <div style="margin-left:530px;font-size:20px;color:gray;">探索黑科技，小米为发烧而生</div>
        </div>
        <script type="text/javascript" src="{{ asset('Home/main/js/xiaomi.js') }}"></script>
        <script type="text/javascript">
            $("#fullscreen").click(function(){
                var el = document.documentElement,
                rfs = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el.msRequestFullScreen,wscript;
                if(typeof rfs != "undefined" && rfs) {
                    rfs.call(el);
                    return;
                }
                if(typeof window.ActiveXObject != "undefined") {
                    wscript = new ActiveXObject("WScript.Shell");
                        if(wscript) {
                            wscript.SendKeys("{F11}");
                        }
                }
            });
        </script>
    </div>
</body>
</html>