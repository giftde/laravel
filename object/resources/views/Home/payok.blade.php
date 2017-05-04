<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="UTF-8" />
<title>付款成功_小米商城</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=1226" />
<link rel="shortcut icon" href="" type="image/x-icon" />
<link rel="icon" href="" type="image/x-icon" />
<link rel="search" title="mi.com" href=""
 type="application/opensearchdescription+xml" />
<meta http-equiv="Cache-Control" content="no-transform " />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" href="{{ asset('Home/car/css/base.min.css') }}" />
<link rel="stylesheet" href="{{ asset('Home/car/css/cart.min.css') }}" />
<link rel="stylesheet" href="{{ asset('Home/car/css/buy-success.min.css') }}" />
<script src="{{ url('Home/car/js/base.min.js') }}"></script>
<script type="text/javascript" src="{{ url('Home/car/js/cart.min.js') }}"></script>
<script type="text/javascript" src="{{ url('Home/car/js/jquery-1.8.3.min.js') }}"></script>
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="" >小米商城</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">MIUI</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">米聊</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">游戏</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">多看阅读</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">云服务</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">金融</a><span class="sep">|</span><a rel="nofollow" href=" target="_blank">小米商城移动版</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">问题反馈</a><span class="sep">|</span><a rel="nofollow" href="" data-toggle="modal">Select Region</a>
        </div>

         @if(session('user'))
                <div id="head_right" style="float:right;line-
height: 40px;width:280px;font-family: Microsoft Yahei;font-size:15px">
                 <div id="head_landing" style="width: 300px;line-height: 40px">
                     <span style="color:#B0B0B0;font-size:15px" class="head_nav_a" href="/home/login">欢迎：{{session('user')->uname }}</span>
                     <span>|</span>
                     <a style="color:#B0B0B0" class="head_nav_a" href="{{ url('home/grzx') }}">个人中心</a>
                      <span>|</span>
                    <a style="color:#B0B0B0" class="head_nav_a" href="{{ url('home/over') }}">退出</a>

                    <a class="head_car_text" href="/home/cartshow"> &nbsp;&nbsp;&nbsp;购物车</a>
                 </div>
                </div>
             @else
                   <div id="head_right" style="float:right;line-height: 40px;width:280px;font-family: Microsoft Yahei;font-size:15px" >
                     <div id="head_landing">
                         <a style="color:#B0B0B0" class="head_nav_a" href="/home/login">登录</a>
                         <span>|</span>
                         <a href="{{ url('/home/register1') }}" class="head_nav_a">注册</a>&nbsp;&nbsp;&nbsp;
                         <a href="{{ url('/home/cartshow') }}">购物车（0）</a>
                     </div>
                </div>
             @endif

    </div>
</div>
<link href="{{ asset('Home/payok1/cart.ec.core.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('Home/payok1/cart.main.css') }}" rel="stylesheet" type="text/css">

<style type="text/css">
    #order-confirm-detail #go_play{
           width:100px;
           height:30px;
           line-height:30px;
           text-align:center;
           margin-top:100px;
    
    }

</style>
<style>@font-face{font-family:uc-nexus-iconfont;src:url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.woff) format('woff'),url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.ttf) format('truetype')}</style><style>@font-face{font-family:uc-nexus-iconfont;src:url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.woff) format('woff'),url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.ttf) format('truetype')}</style></head>
<body>
<form action="http://localhost/vmallshop/index.php/Home/Payment/index.html" id="pay-go-form" method="post" target="_blank" class="hide">
    <input type="hidden" name="orderCode" value="1070054253">
    <input type="hidden" name="paymentMethod" id="order-paymentMethod" value="">    
    <input type="hidden" name="paymentType" id="order-paymentType" value="">
    <input type="hidden" name="state" value="1">
</form>
<div style="height: 50px"> </div>
<!-- ===============================================中间内容开始=============================================== -->
<div class="layout">
    <!-- 20131130-订单-确认-鼠标悬停增加ClassName： order-confirm-expand -->
    <div class="order-confirm" id="order-confirm-detail" style="height:300px">
        <div class="h" style="height:200px;">
            <s class="icon-success-7"></s>
                <h3 style="color: orange">{{ $msg }}</h3>
            <p>订单号：&nbsp;&nbsp;{{ session('data')['number'] }}&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;    付款金额（元）：&nbsp;&nbsp;<b>{{ session('data')['total']}}</b>&nbsp;<b>元</b></p>
            
            
         
            <a id="go_play" title="继续逛逛" href="/home/mi" class="button-style-4 button-walking">
                     继续逛逛&nbsp;&gt;&gt;
            </a>
            
        </div>
        
    
    
    
    <div class="hr-15"></div>


   
    <!--订单-表单-支付方式列表结束 -->
    
    
</div>


</div>
<!-- ===============================================中间内容结束=============================================== -->
<!-- =========================================footer部分======================================================== -->
    <div class="site-footer" style="background: #fff">
        <div class="container">
            <div class="footer-service">
                <ul class="list-service clearfix">
                    <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/pays/images/weixiu.png') }}" width="25" height="20" style="padding-top: 2px"> 预约维修服务</a></li>
                    <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/pays/images/7.png') }}" width="25" height="20">7天无理由退货</a></li>
                    <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/pays/images/15.png') }}" width="25" height="20">15天免费换货</a></li>
                    <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/pays/images/gift.png') }}" width="25" height="20">满150元包邮</a></li>
                    <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/pays/images/dizhi.png') }}" width="25" height="20">520余家售后网点</a></li>
                </ul>
            </div>
            <div class="footer-links clearfix">
                
                <dl class="col-links col-links-first">
                    <dt>帮助中心</dt>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="e5dad0738a41014f" >账户管理</a></dd>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="8e128f473e680197" >购物指南</a></dd>
                    
                    <dd><a rel="nofollow"  target="_blank" data-stat-id="fd9e3532f60a2f8d" >订单操作</a></dd>
                    
                </dl>
                    
                <dl class="col-links ">
                    <dt>服务支持</dt>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="8e282b6f669ba990" >售后政策</a></dd>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="5f2408ab3c808aa2" o>自助服务</a></dd>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="18c340c920a278a1" >相关下载</a></dd>
                    
                </dl>
                    
                <dl class="col-links ">
                    <dt>线下门店</dt>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="b27b566974e4aa67" >小米之家</a></dd>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="6dab396f7a873f15">服务网点</a></dd>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="9af5efe014c3aea2" >零售网点</a></dd>
                    
                </dl>
                    
                <dl class="col-links ">
                    <dt>关于小米</dt>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="f6d386c65b1f4132" >了解小米</a></dd>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="4307a445f5592adb" >加入小米</a></dd>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="6842e821365ee45d" >联系我们</a></dd>
                    
                </dl>
                    
                <dl class="col-links ">
                    <dt>关注我们</dt>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="4d561ee685cd2e15" >新浪微博</a></dd>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="78fdefa9dee561b5" >小米部落</a></dd>
                    
                    <dd><a rel="nofollow" href="" data-toggle="modal" data-stat-id="47539f6570f0da90" >官方微信</a></dd>
                    
                </dl>
                    
                <dl class="col-links ">
                    <dt>特色服务</dt>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="fdc16dd51892a164">F 码通道</a></dd>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="835607e3820935bb" >礼物码</a></dd>
                    
                    <dd><a rel="nofollow" href="" target="_blank" data-stat-id="b08be6bd51351e1a" >防伪查询</a></dd>
                    
                </dl>
                    
                <div class="col-contact">
                    <p class="phone">400-100-5678</p>
                    <p><span class="J_serviceTime-normal" style="">周一至周日 8:00-18:00</span>
                        <span class="J_serviceTime-holiday" style="display:none;">1月27日至2月2日服务时间 9:00-18:00</span><br>（仅收市话费）</p>
                    <a rel="nofollow" class="btn btn-line-primary btn-small" href="" target="_blank" data-stat-id="a7642f0a3475d686" ><i class="iconfont"></i> 24小时在线客服</a>
                </div>
            </div>
        </div>
    </div>
    <div class="site-info">
        <div class="container">
            <div class="logo ir">小米官网</div>
            <div class="info-text">
                <p class="sites"><a rel="nofollow" href="" target="_blank" data-stat-id="b9017a4e9e9eefe3" >小米商城</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="ed2a0e25c8b0ca2f" >MIUI</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="826b32c1478a98d5" >米聊</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="c9d2af1ad828a834" >多看书城</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="96f1a8cecc909af2" >小米路由器</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="347f6dd0d8d9fda3" >视频电话</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="dfe0fac59cfb15d9" >小米天猫店</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="c2613d0d3b77ddff" >小米淘宝直营店</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="2f48f953961c637d">小米网盟</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="f7ea7880c49b687e" >小米移动</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="c7ef95929d60f3f1" >隐私政策</a><span class="sep">|</span><a rel="nofollow" href="" data-toggle="modal" data-stat-id="9db137a8e0d5b3dd" >Select Region</a>            </p>
                <p>©<a href="" target="_blank" title="mi.com" data-stat-id="836cacd9ca5b75dd" o>mi.com</a> 京ICP证110507号 <a href=" target="_blank" rel="nofollow" data-stat-id="f96685804376361a" >京ICP备10046444号</a> <a rel="nofollow" href="" target="_blank" data-stat-id="57efc92272d4336b" >京公网安备11010802020134号 </a><a rel="nofollow" href="" target="_blank" data-stat-id="c5f81675b79eb130" >京网文[2014]0059-0009号</a>
                <br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
            </div>
            <div class="info-links">
                        <a rel="nofollow"  target="_blank" data-stat-id="de920be99941f792" ><img  src="{{ asset('Home/car/images/truste.png') }}" alt="TRUSTe Privacy Certification"></a>
                        <a rel="nofollow" href="" target="_blank" data-stat-id="d44905018f8d7096" ><img  src="{{ asset('Home/car/images/v-logo-2.png') }}" alt="诚信网站"></a>
                        <a rel="nofollow" href="" target="_blank" data-stat-id="3e1533699f264eac" ><img rel="nofollow" src="{{ asset('Home/car/images/v-logo-1.png') }}" alt="可信网站"></a>
                        <a rel="nofollow" href="" target="_blank" data-stat-id="b085e50c7ec83104" ><img rel="nofollow" src="{{ asset('Home/car/images/v-logo-3.png') }}" alt="网上交易保障中心"></a>
                    </div>
        </div>
        <div class="slogan ir">探索黑科技，小米为发烧而生</div>
    </div>
    <div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
            <div class="modal-hd">
                <a class="close" data-dismiss="modal" data-stat-id="cfd3189b8a874ba4" ><i class="iconfont"></i></a>
                <span class="title">小米手机官方微信二维码</span>
            </div>
            <div class="modal-bd">
                <img alt="" src="{{ asset('Home/car/images/site-weixin.png') }}" width="680" height="340">
            </div>
        </div>
    </body>
</html>
