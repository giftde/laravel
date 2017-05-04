<!doctype html>
 
<html lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="UTF-8" />
<title>成功加入购物车 - 小米商城</title>
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
</head>
<body>
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
<!--===================================================================

============== -->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="UTF-8">
<title>我的购物车-小米商城</title>
<meta name="viewport" content="width=1226">
<link rel="shortcut icon" href="" type="image/x-icon">
<link rel="icon" href="" type="image/x-icon">
<link rel="stylesheet" href="">
<link rel="stylesheet" type="text/css" href="">
<script type="text/javascript" async="" src=""></script><script type="text/javascript" async="" src=""></script><script type="text/javascript" async="" src=></script><script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
</head>
<body>
<div class="site-header site-mini-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="/home/mi" title="小米官网" data-stat-id="f4006c1551f77f22" 
            ">小米官网</a>
        </div>
        <div class="header-title has-more" id="J_miniHeaderTitle"><h2>我的购物车</h2><p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p></div>
        <div class="topbar-info" id="J_userInfo">
        <span class="user"><a rel="nofollow" class="user-name" href="" target="_blank" data-stat-id="037a3227315505b2"><span class="name"></span><i class="iconfont"></i></a><ul class="user-menu" style="display: none;">
        <li><a rel="nofollow" href="{{ url('/home/grzx') }}" target="_blank" data-stat-id="e0b9e1d1fa8052a2" >个人中心</a></li>
        <li><a rel="nofollow" href="" target="_blank" data-stat-id="6d05445058873c2c" >评价晒单</a></li>
        <li><a rel="nofollow" href="" target="_blank" data-stat-id="32e2967e9a749d3d" >我的喜欢</a></li>
        <li><a rel="nofollow" href="" target="_blank" data-stat-id="6c2aba14bc7f649a" >小米账户</a></li><li><a rel="nofollow" href="{{ url('/home/over') }}" data-stat-id="770a31519c713b11" >退出登录</a></li></ul></span><span class="sep">|</span><a rel="nofollow" class="link link-order" href="" target="_blank" data-stat-id="a9e9205e73f0742c" ">我的订单</a></div>
    </div>
</div>

<div class="page-main" style="height:550px;">

    <div class="container" style="background: #fff">
        <div class="cart-loading loading hide" id="J_cartLoading">
            <div class="loader"></div>
        </div>
<!-- ========购物车====================================================================================== -->
        <div id="J_cartBox" class="">
            <div class="cart-goods-list" style="height: 300px;">
                <div class="list-head clearfix">
                    <!-- <div class="col col-check"><i class="iconfont icon-checkbox" id="J_selectAll">√</i>全选</div> -->
                    <div class="col col-img" align="center">图片</div>
                    <div class="col col-name" align="center">商品名称</div>
                    <div class="col col-price">单价</div>
                    <div class="col col-num">数量</div>
                    <div class="col col-total">小计</div>
                    <div class="col col-action" >操作</div>
                </div>
 <!-- 遍历的 盒子=============================================================================== -->
 <!-- ========购物车====================================================================================== -->            
         <div class="list-body" id="J_cartListBody" style="height: 1300px;background: #fff">
            @foreach($data as $d)
            @if($d->uid == session('user')->uid)
            <div class="item-box">
                <div class="item-table J_cartGoods">
                    <!-- 商品图片 -->
                    <div class="col col-img" style="float:left">  
                        <a href="{{ asset('/home/mi/'.$d->gid.'/edit') }}" target="_blank"> <img alt="" src="{{ asset('Admin/upload/'.$d->gpic) }}" width="120" height="80"></a><span class="temgid" style="display:none;">{{ $d->gid }}</span><span class="tempic" style="display:none;">{{ $d->gpic }}</span>
                    </div>
                    <!-- 商品名字  --> 
                     <div class="col col-name" align="center"> 
                         <div class="tags"></div>  
                         <h3 class="name"><a target="_blank" class="tgname">{{ $d->gname }}</a></h3>
                    </div>
                    <!-- 商品价格  -->
                    <div class="dprice" style="font-size:;width:75px;padding-right:84px;text-align:right;color:#424242;float:left;margin-bottom:30px;"
                    >{{ $d->gprice }}</div> 
                    <!-- 商品数量 -->
                    <div class="col col-num" >  
                        <div class="change-goods-num clearfix J_changeGoodsNum"> 
                            <a href="javascript:void(0)" onclick="jian(this)" class="J_minus">–</a>
                            <input tyep="text" name="gnum" disabled value="{{ $d->gnum }}" autocomplete="off" class="goods-num"> 
                            <a href="javascript:doDel({{ $d->id }})"  onclick="jia(this)">＋</a>
                         </div> 
                        <input type='hidden' name='id' class="tgid" value='{{$d->id}}'>
                    </div>
                    <!-- 商品小计 -->
                    <div class="col col-total price1"  align="center">{{ $d->gprice }}</div>
                     <!-- caozuo -->
                     <div class="col col-action" align="center"> 
                        <a  href="/home/aa/{{ $d->id }}" >删除</a>
                    </div> 
                </div>
            </div>
            @endif
            @endforeach
      </div>
        <div id="zgid" style="display:none;"></div>
        <div id="temname" style="display:none;"></div>
        <div id="djpri" style="display:none;"></div>
    </div>
</div>
<div class="cart-bar clearfix cart-bar-fixed" id="J_cartBar">
    <div class="section-left">
        <span><a href="/home/mi" class="back-shopping J_goShoping" data-stat-id="1c2bffc356c38b34" >继续购物</a></span>
        <span class="cart-total">共 <i id="J_cartTotalNum"></i> 件商品
        
    </div>
    <form action="/home/order" method="post">
        {{ csrf_field() }}
        <!-- <input type="text" name="zongji" value="" id="zongj"> -->
        <!-- 商品单价 -->
        <textarea name="gprice" id="gprice" style="display:none;"></textarea>
        <!-- 商品的总计 -->
         <input type="hidden" name="total" value="" id="zongj"> 
         <!-- 商品的总数量 -->
         <input type="hidden" name="goodsnum" value="" id="cnum">
         <!-- 商品的id -->
         <textarea name="tjgid" id="tjgid" style="display:none;"></textarea>
         <!-- 商品的pic -->
         <textarea name="goodspic" id="goodspic" style="display:none;"></textarea>
         <!-- goodsname商品的名字  -->
         <textarea name="goodsname" id="goodsname" style="display:none;"></textarea>
        <input type="submit"  class="btn btn-small btn-primary" value="去结算" style="padding-top:0px;float:right;"> 
    </form>
    <div style="padding-top:0px;float:right;">
        <span class="total-price">合计（不含运费）：<em id="J_cartTotalPrice" class="zongji"></em>元</span>
    </div>
</div>
<script>
$(".temgid").each(function(){
    var gid = $(this).text();
    $("#zgid").append(gid+',');
});
var dd = $("#zgid").html();
$("#tjgid").html(dd);

$(".tempic").each(function(){
    var gpic = $(this).text();
    $("#goodspic").append(gpic+',');
});
var gg = $("#goodspic").html();
$("#goodspic").html(gg);

$(".tgname").each(function(){
    var sgname = $(this).html();
    $("#temname").append(sgname+',');
});
var tt = $("#temname").html();
$("#goodsname").html(tt);

$(".dprice").each(function(){
    var gdj = $(this).text();
    $("#djpri").append(gdj+',');
});
var jj = $("#djpri").html();
// alert(jj);
$("#gprice").html(jj);
 // 判断商品数量点击的的多少
 // 调用点击减号电泳的函数
 var dprice = $(".dprice").html();
 $("#price").val(dprice);
 function jian(obj){
  // 通过减号来增加数量
    var val = $(obj).siblings('input').val();
    val = Number(val);
    val = val-1;
    if(val < 1){
        die();
    }
    $(obj).siblings('input').val(val);
    // 获取商品的单价
    var money = $(obj).parent().parent().prev().html();
    // 得到商品的小计等于单价乘以数量
    var zong = money*val;
    // 再把得到的小计放回到页面中
    $(obj).parent().parent().next().html(zong);
       //alert(val) 
       // 获取到当前商品的id
     var productid = $(obj).parent().siblings('input').val();
       // 使用ajax发送当前的id和获取到的value值
     $.get('/home/cartupdate',{productid:productid,val:val},function(res){ 
        // 调用价格总额的函数
      zongji();
        // 获得商品总数的函数
        zongshu();
    },'json');        
 }
  // 调用点击＋的函数
   function jia(obj){
    // 通过加好来增加数量
    var val = $(obj).siblings('input').val();
    // 将字符串的数量变成int的数量
    val = Number(val);
    // 做加一操作
    val = val+1;
    // 做判断，超过20件不让购买
    if(val >20 ){
        alert('哥，货不多了，悠着点');
        $(obj).siblings('input').val('20');
        die();
    }
    // 获取input框的value值
    $(obj).siblings('input').val(val);
    // 获取商品的单价
    money = $(obj).parent().parent().prev().html();
    // 得到商品的小计等于单价乘以数量
    var zong = money*val;
    // 再把得到的小计放回到页面中
    $(obj).parent().parent().next().html(zong);
        // 获取到当前商品的id
       var productid = $(obj).parent().siblings('input').val();
       // 使用ajax发送当前的id和获取到的value值
     $.get('/home/cartupdate',{productid:productid,val:val},function(res){
        //自动加载价格总计的函数       
      zongji();
        //调用商品总数的函数
        zongshu();
    },'json');  
 }
 // 自动加再的总计函数
 function zongji(){
  var xiaojilist = $('.price1');
  // alert(xiaojilist);
  var total = 0;
  for (var i = 0; i < xiaojilist.length; i++) {
    total += parseInt($(xiaojilist[i]).html());
  }
  $('.zongji').html(total);
    $('#zongj').val(total);
 }
 zongji();
 // 获取总数的函数
 function zongshu(){
  var xiaojilist = $('.goods-num');
  // alert(xiaojilist);
  var total = 0;
  for (var i = 0; i < xiaojilist.length; i++) {
    total += parseInt($(xiaojilist[i]).val());
  }
   $('#J_cartTotalNum').html(total);
   $('#cnum').val(total);
 }
 zongshu();
    var str = $(".tgid").val()+',';
    $("#tgid").val(str);
// $("#cnum").val($("#J_cartTotalNum").text());
</script>

<!-- 遍历的 盒子结束=============================================================================== -->
        
    </div>
</div>
           <!--  <h4 align="center" >购物车是空的 ,<a href="/home/mi">点击选购商品</a></h4>
            <img style="padding-left: 340px" src="{{ asset('home/car/images/cart-empty.png') }}" alt="">
         @if(session('msg'))
        <h4></h4>
              @endif -->
   <div style="height:30px"></div>        
<div class="site-footer" style="background: #fff">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/weixiu.png') }}" width="25" height="20" style="padding-top: 2px"> 预约维修服务</a></li>
                <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/7.png') }}" width="25" height="20">7天无理由退货</a></li>
                <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/15.png') }}" width="25" height="20">15天免费换货</a></li>
                <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/gift.png') }}" width="25" height="20">满150元包邮</a></li>
                <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/dizhi.png') }}" width="25" height="20">520余家售后网点</a></li>
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
<p><span class="J_serviceTime-normal" style="
">周一至周日 8:00-18:00</span>
<span class="J_serviceTime-holiday" style="display:none;">1月27日至2月2日服务时间 9:00-18:00</span><br>（仅收市话费）</p>
<a rel="nofollow" class="btn btn-line-primary btn-small" href="" target="_blank" data-stat-id="a7642f0a3475d686" ><i class="iconfont"></i> 24小时在线客服</a>            </div>
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
