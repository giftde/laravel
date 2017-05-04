@extends('Home.base.parent')
@section('content')
@foreach($list as $v)
    @if(session('error'))
        <div class="alert alert-success alert-icon">
        <script type="text/javascript">
            alert("{{ session('error') }}");
        </script>
        <i class="icon"></i>
        </div>
    @endif
    @if(session('msg'))
        <div class="alert alert-warning alert-icon">
        <script type="text/javascript">
            alert("{{ session('msg') }}");
        </script>
        <i class="icon"></i>
        </div>
    @endif
    <script type="text/javascript" src="{{ asset('Home/main/js/jquery-1.8.3.min.js') }}"></script>
<div class="page-main user-main">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="uc-box uc-sub-box">
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">个人中心管理</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><button id="myorder" style="border:0;background:white;">我的订单</button></li>
                                <li><button id="commorder" style="border:0;background:white;">评价晒单</button></li>
                                <li><button id="cllect" style="border:0;background:white;">我的收藏</button></li>
                                <li><button id="udata" style="border:0;background:white;">个人中心</button></li>
                                <li><button id="addr" style="border:0;background:white;">收货地址</button></li>
                                <li><a href="tencent://message/?uin=1034926320&Site=121ask.com&Menu=yes" style="color:black;">联系客服</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>         
            <div class="span16">
                <!-- 我的订单 -->
                <div id="order" class="uc-box uc-main-box" style="display:none;">
                    <div class="uc-content-box order-list-box">
                        <div class="box-hd">
                            <h1 class="title">我的订单<small>请谨防钓鱼链接或诈骗电话，<a href="">了解更多&gt;</a></small></h1>
                            <div class="more clearfix">
                                <ul class="filter-list J_orderType">
                                    <li><button id="zorder" style="border:0px;background:white;">全部有效订单</button></li>
                                    <li><button id="morder" style="border:0px;background:white;">待支付</button></li>
                                    <li><button id="sorder" style="border:0px;background:white;">待收货</button></li>
                                    <li><button id="corder" style="border:0px;background:white;">已完成</button></li>
                                </ul>
                            </div>
                        </div>
                        <!-- 订单列表 -->
                        <ul id="zorder_list" style="display:block;">
                            <!-- 全部订单列表 -->
                            @foreach($order as $o)
                            @if($o->username == $v->uname)
                            <li class="uc-order-item uc-order-item-pay">
                                <div class="order-detail">
                                    <div class="order-summary">
                                        <div class="order-status">
                                            @if($o->state == 1)
                                            待付款
                                            @elseif($o->state == 2 || $o->state == 3)
                                            待收货
                                            @elseif($o->state == 4)
                                            交易完成
                                            @endif
                                        </div>
                                    </div>
                                    <table class="order-detail-table">
                                        <thead>
                                            <tr>
                                                <th class="col-main">
                                                    <p class="caption-info">
                                                        {{ date('Y-m-d H:i:s',$o->time) }}<span class="sep">|</span>订单号：{{ $o->number }}<span class="sep">|</span>
                                                    </p>
                                                </th>
                                                <th class="col-sub">
                                                    <p class="caption-price">
                                                        订单金额：<span id="totpri" class="num">{{ $o->total.'.00元' }}</span>
                                                    </p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="order-items">
                                                    <ul class="goods-list">
                                                        <li>
                                                            <div class="figure figure-thumb" style="color:#ff6700;font-size:18px;">
                                                                商品<br>交易<br>情况
                                                            </div>
                                                            <p class="name">{{ $o->goodsname }}</p>
                                                            <p id="onepri" class="price">
                                                            {{$o->price}}元
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="order-actions">
                                                    @if($o->state == 4)
                                                        <button style="width:120px;height:30px;margin-bottom:8px;" disabled>交易完成</button><br>
                                                        <a href="{{ url('/home/ordinfo/'.$o->id) }}" style="color:#ff6700;font-size:18px;margin-right:30px">订单详情</a>
                                                    @elseif($o->state == 2 || $o->state == 3)
                                                        <button style="width:120px;height:30px;margin-bottom:8px;" disabled>已支付</button><br>
                                                        <a href="{{ url('/home/ordinfo/'.$o->id) }}" style="color:#ff6700;font-size:18px;margin-right:30px">订单详情</a>
                                                    @else
                                                        <a class="btn btn-small btn-primary" href="{{ url('/home/ordpay/'.$o->id.'/'.session('user')->uid) }}" style="margin-bottom:8px;" onclick="alert('支付成功');">立即支付</a>
                                                        <a href="{{ url('/home/ordinfo/'.$o->id) }}" style="color:#ff6700;font-size:18px;margin-right:30px">订单详情</a>
                                                    @endif
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                        <!-- 待支付订单列表 -->
                        <ul id="morder_list" style="display:none;">
                            @foreach($order1 as $o1)
                            @if($o1->username == $v->uname)
                            <li class="uc-order-item uc-order-item-pay">
                                <div class="order-detail">
                                    <div class="order-summary">
                                        <div class="order-status">
                                            @if($o1->state == 1)
                                            待付款
                                            @elseif($o1->state == (2 | 3))
                                            待收货
                                            @elseif($o1->state == 4)
                                            交易完成
                                            @endif
                                        </div>
                                    </div>
                                    <table class="order-detail-table">
                                        <thead>
                                            <tr>
                                                <th class="col-main">
                                                    <p class="caption-info">
                                                        {{ date('Y-m-d H:i:s',$o1->time) }}<span class="sep">|</span>订单号：{{ $o1->number }}<span class="sep">|</span>
                                                    </p>
                                                </th>
                                                <th class="col-sub">
                                                    <p class="caption-price">
                                                        订单金额：<span id="totpri" class="num">{{ $o1->total.'.00元' }}</span>
                                                    </p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="order-items">
                                                    <ul class="goods-list">
                                                        <li>
                                                            <div class="figure figure-thumb" style="color:#ff6700;font-size:18px;">
                                                                商品<br>交易<br>情况
                                                            </div>
                                                            <p class="name">{{ $o1->goodsname }}</p>
                                                            <p id="onepri" class="price">
                                                            {{$o1->price}}元
                                                             × 1</p>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="order-actions">
                                                    <a class="btn btn-small btn-primary" href="{{ url('/home/ordpay/'.$o1->id.'/'.session('user')->uid) }}" onclick="alert('支付成功');">立即支付</a>
                                                    <a href="{{ url('/home/ordinfo/'.$o1->id) }}" style="color:#ff6700;font-size:18px;margin-right:30px">订单详情</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                        <!-- 待收货订单列表 -->
                        <ul id="forder_list" style="display:none;">
                            @foreach($order2 as $o2)
                            @if($o2->username == $v->uname)
                            <li class="uc-order-item uc-order-item-pay">
                                <div class="order-detail">
                                    <div class="order-summary">
                                        <div class="order-status">
                                            @if($o2->state == 1)
                                            待付款
                                            @elseif($o2->state == 2 || $o2->state == 3)
                                            待收货
                                            @elseif($o2->state == 4)
                                            交易完成
                                            @endif
                                        </div>
                                    </div>
                                    <table class="order-detail-table">
                                        <thead>
                                            <tr>
                                                <th class="col-main">
                                                    <p class="caption-info">
                                                        {{ date('Y-m-d H:i:s',$o2->time) }}<span class="sep">|</span>订单号：{{ $o2->number }}<span class="sep">|</span>
                                                    </p>
                                                </th>
                                                <th class="col-sub">
                                                    <p class="caption-price">
                                                        订单金额：<span id="totpri" class="num">{{ $o2->total.'.00元' }}</span>
                                                    </p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="order-items">
                                                    <ul class="goods-list">
                                                        <li>
                                                            <div class="figure figure-thumb" style="color:#ff6700;font-size:18px;">
                                                                商品<br>交易<br>情况
                                                            </div>
                                                            <p class="name">{{ $o2->goodsname }}</p>
                                                            <p id="onepri" class="price">
                                                            {{$o2->price}}元
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="order-actions">
                                                    <button style="width:120px;height:30px;margin-bottom:8px;" disabled>已支付</button><br>
                                                    <a href="{{ url('/home/ordinfo/'.$o2->id) }}" style="color:#ff6700;font-size:18px;margin-right:30px">订单详情</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>

                        <ul id="sorder_list" style="display:none;">
                            @foreach($order3 as $o3)
                            @if($o3->username == $v->uname)
                            <li class="uc-order-item uc-order-item-pay">
                                <div class="order-detail">
                                    <div class="order-summary">
                                        <div class="order-status">
                                            @if($o3->state == 1)
                                            待付款
                                            @elseif($o3->state == 2 || $o3->state == 3)
                                            待收货
                                            @elseif($o3->state == 4)
                                            交易完成
                                            @endif
                                        </div>
                                    </div>
                                    <table class="order-detail-table">
                                        <thead>
                                            <tr>
                                                <th class="col-main">
                                                    <p class="caption-info">
                                                        {{ date('Y-m-d H:i:s',$o3->time) }}<span class="sep">|</span>订单号：{{ $o3->number }}<span class="sep">|</span>
                                                    </p>
                                                </th>
                                                <th class="col-sub">
                                                    <p class="caption-price">
                                                        订单金额：<span id="totpri" class="num">{{ $o3->total.'.00元' }}</span>
                                                    </p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="order-items">
                                                    <ul class="goods-list">
                                                        <li>
                                                            <div class="figure figure-thumb" style="color:#ff6700;font-size:18px;">
                                                                商品<br>交易<br>情况
                                                            </div>
                                                            <p class="name">{{ $o3->goodsname }}</p>
                                                            <p id="onepri" class="price">
                                                            {{$o3->price}}元
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="order-actions">
                                                    <button  style="width:120px;height:30px;margin-bottom:8px;" disabled>已支付</button><br>
                                                    <a href="{{ url('/home/ordinfo/'.$o3->id) }}" style="color:#ff6700;font-size:18px;margin-right:30px">订单详情</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            @endif
                            @endforeach     
                        </ul>
                        <!-- 订单完成列表 -->
                        <ul id="corder_list" style="display:none;">
                            @foreach($order4 as $o4)
                            @if($o4->username == $v->uname)
                            <li class="uc-order-item uc-order-item-pay">
                                <div class="order-detail">
                                    <div class="order-summary">
                                        <div class="order-status">
                                            @if($o4->state == 1)
                                            待付款
                                            @elseif($o4->state == (2 | 3))
                                            待收货
                                            @elseif($o4->state == 4)
                                            交易完成
                                            @endif
                                        </div>
                                    </div>
                                    <table class="order-detail-table">
                                        <thead>
                                            <tr>
                                                <th class="col-main">
                                                    <p class="caption-info">
                                                        {{ date('Y-m-d H:i:s',$o4->time) }}<span class="sep">|</span>订单号：{{ $o4->number }}<span class="sep">|</span>
                                                    </p>
                                                </th>
                                                <th class="col-sub">
                                                    <p class="caption-price">
                                                        订单金额：<span id="totpri" class="num">{{ $o4->total.'.00元' }}</span>
                                                    </p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="order-items">
                                                    <ul class="goods-list">
                                                        <li>
                                                            <div class="figure figure-thumb" style="color:#ff6700;font-size:18px;">
                                                                商品<br>交易<br>情况
                                                            </div>
                                                            <p class="name">{{ $o4->goodsname }}</p>
                                                            <p id="onepri" class="price">
                                                            {{ $o4->price }}元
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="order-actions">
                                                    <button style="width:120px;height:30px;margin-bottom:8px;" disabled>交易完成</button><br>
                                                    <a href="{{ url('/home/ordinfo/'.$o4->id) }}" style="color:#ff6700;font-size:18px;margin-right:30px">订单详情</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- 评价晒单 -->
                <div id="ucomm" class="uc-box uc-main-box" style="display:none;">
                    <div class="uc-content-box">
                        <div class="box-hd">
                            <h1 class="title">商品评价</h1>
                            <div class="more clearfix" style="border:0px;">
                                <ul class="filter-list J_addrType">
                                    <li><button id="ncomment" style="border:0;background:white;height:28px;width:130px;">
                                        待评价商品
                                        </button>
                                    </li>
                                    <li><button id="ycomment" style="border:0;background:white;height:28px;width:130px;">已评价商品</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-bd">
                            <table width="900" border="0" style="font-size:12px;">
                                <thead>
                                    <tr style="background:#f5f5f5;border-top:1px solid #eee;">
                                        <th>订单详情</th>
                                        <th>收货人</th>
                                        <th>金额</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <!-- 已评价商品 -->
                                @foreach($comment as $c)
                                @if($c->content != '')
                                @if($c->uid == $v->uid)
                                <tbody class="ycomment_list" style="display:none;">
                                    <tr>
                                        <th colspan="4">&nbsp;</th>
                                    </tr>
                                    <tr style="background:#f5f5f5;">
                                        <td colspan="4">
                                            <span style="margin-right:30px;">{{ date('Y/m/d H:i:s',$c->pubtime) }}</span>
                                            @foreach($order as $co)
                                            @if($c->oid == $co->id)
                                            <span style="width:226px;">订单号:{{ $co->number }}</span>
                                            @endif
                                            @endforeach
                                            <div style="width:608px;"></div>
                                        </td>
                                    </tr>
                                    <tr style="border:1px solid #eee;">
                                        <td style="border:1px solid #eee;">
                                            <div style="float:left;height:62px;margin-top:10px;">
                                                <div style="float:left;">
                                                    <a href=""><img src="{{ asset('Home/upload/ss_320_65.png') }}" width="60" style="vertical-align: middle;"></a>
                                                </div>
                                                <div style="float:left;width:240px;">
                                                @foreach($order as $co)
                                                @if($c->oid == $co->id)
                                                    <a href="">{{ $co->goodsname }}</a>
                                                @endif
                                                @endforeach
                                                </div>
                                                <div style="float:left;">
                                                @foreach($order as $co)
                                                @if($c->oid == $co->id)
                                                    x{{ $co->goodsnum }}
                                                @endif
                                                @endforeach
                                                </div>
                                            </div>
                                        </td>
                                        <td style="border:1px solid #eee;">
                                            <p><img src="{{ asset('/Admin/img/user.png') }}">&nbsp; {{ $v->uname }}</p>
                                        </td>
                                        <td style="border:1px solid #eee;">
                                            @foreach($order as $co)
                                            @if($c->oid == $co->id)
                                                支付金额:{{ $co->total }}.00元
                                            @endif
                                            @endforeach
                                        </td>
                                        <td align="center" style="border:1px solid #eee;">
                                            @if($c->classify == 1)
                                            <button id="comment" style="background:white;width:100px;height:23px;border:1px solid gray;" disabled>好评</button>
                                            @else
                                            <button id="comment" style="background:white;width:100px;height:23px;border:1px solid gray;" disabled>差评</button>
                                            @endif

                                        </td>
                                    </tr>
                                </tbody>
                                @endif
                                @endif
                                @endforeach
                                <!-- 待评价商品 -->
                                @foreach($comment as $c)
                                @if($c->content == '')
                                @if($c->uid == $v->uid)
                                <tbody class="ncomment_list" style="display:;">
                                    <tr>
                                        <th colspan="4">&nbsp;</th>
                                    </tr>
                                    <tr style="background:#f5f5f5;">
                                        <td colspan="4">
                                            <span style="margin-right:30px;">{{ date('Y/m/d H:i:s',$c->pubtime) }}</span>
                                            @foreach($order as $co)
                                            @if($c->oid == $co->id)
                                            <span style="width:226px;">订单号:{{ $co->number }}</span>
                                            @endif
                                            @endforeach
                                            <div style="width:608px;"></div>
                                        </td>
                                    </tr>
                                    <tr style="border:1px solid #eee;">
                                        <td style="border:1px solid #eee;">
                                            <div style="float:left;height:62px;margin-top:10px;">
                                                <div style="float:left;">
                                                    <a href=""><img src="{{ asset('Home/upload/ss_320_65.png') }}" width="60" style="vertical-align: middle;"></a>
                                                </div>
                                                <div style="float:left;width:240px;">
                                                @foreach($order as $co)
                                                @if($c->oid == $co->id)
                                                    <a href="">{{ $co->goodsname }}</a>
                                                @endif
                                                @endforeach
                                                </div>
                                                <div style="float:left;">
                                                @foreach($order as $co)
                                                @if($c->oid == $co->id)
                                                    x{{ $co->goodsnum }}
                                                @endif
                                                @endforeach
                                                </div>
                                            </div>
                                        </td>
                                        <td style="border:1px solid #eee;">
                                            <p><img src="{{ asset('/Admin/img/user.png') }}">&nbsp; {{ $v->uname }}</p>
                                        </td>
                                        <td style="border:1px solid #eee;">
                                            @foreach($order as $co)
                                            @if($c->oid == $co->id)
                                                支付金额:{{ $co->total }}.00元
                                            @endif
                                            @endforeach
                                        </td>
                                        <td align="center" style="border:1px solid #eee;">
                                            <button id="comment" style="background:white;width:100px;height:23px;border:1px solid gray;">待评价</button>
                                        </td>
                                    </tr>
                                </tbody>
                                @endif
                                @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <!-- 我的收藏 -->
                <div id="cllect_list" style="width:1000px;display:none;">
                    <div style="padding:10px;margin-top:10px;font-size:18px;font-weight:700;background:white;color:red;height:30px;line-height:30px; ">我关注的商品</div>
                    @foreach($cllect as $cll)
                        <div class="dgood" style="height:295px;width:232px;margin-right:10px;margin-top:20px;padding:20px 0 0;background:white;float:left;">
                            <div style="position: relative;width: 100%;height: 160px;margin-bottom: 18px;">
                                <a href="{{ url('/home/mi/'.$cll->gid.'/edit') }}" style="display: block;width: 160px;height: 160px;margin: 0 auto;">
                                @foreach($good as $g)
                                @if($g->id == $cll->gid)    
                                    <img src="{{ asset('/Admin/upload/'.$g->pic) }}" width="160px">
                                @endif
                                @endforeach
                                </a>
                            </div>
                            <div style="height: 22px;line-height: 22px;padding: 0 10px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;text-align: center;">
                                @foreach($good as $g)
                                @if($g->id == $cll->gid)    
                                    <a href="{{ url('/home/mi/'.$cll->gid.'/edit') }}">{{ $g->name }}</a>
                                @endif
                                @endforeach
                            </div>
                            <div style="height: 22px;line-height: 22px;padding: 0 10px;overflow: hidden;text-align: center;color: #333;font-family: verdana;font-weight: 700;">
                                @foreach($good as $g)
                                @if($g->id == $cll->gid)    
                                    <span style="color:red;">￥{{ $g->price.'.00' }}</span>
                                @endif
                                @endforeach

                            </div>
                            <div style="width:235px;height:;">
                                <form action="{{ url('/home/mi/'.$cll->gid.'/edit') }}" method="get">
                                    <input type="submit" value="商品详情" class="addtem" style="float:left;border:0px;background:#eee;height:30px;width:100px;margin-left:8px;">
                                    <a href="{{ url('/home/nocllect/'.$cll->gid.'/'.session('user')->uid) }}" class="del" style="cursor:pointer;display:block;border:0px;border:1px solid #e5e5e5;height:30px;width:100px;float:left;text-decoration:none;line-height:30px;text-align:center;margin-left:10px;">取消关注</a>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- 个人中心 -->
                <div id="uinfo" class="uc-box uc-main-box" style="display:block;">
                    <div class="uc-content-box portal-content-box">
                        <div class="box-bd">
                            <div class="portal-main clearfix">
                                <div class="user-card">
                                    <h2 class="username">{{ $v->uname }}</h2>
                                    <p class="tip">你好</p>
                                    <button id="moduser" style="border:0px;background:white;color:#ff6700;">修改个人信息</button>
                                    <div id="edituser" style="height:300px;width:800px;background:white;position:absolute;margin-top:-160px;margin-left:-200px;opacity:1;z-index:21;border:5px solid gray;border-radius:5px;display:none;">
                                        @foreach($list as $l)
                                        <form action="{{ url('/home/grzx/'.$l->uid) }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div style="height:200px;width:200px;margin-top:50px;float:left;margin-left:100px;">
                                            <img src="{{ asset('Admin/upload/'.$l->upic) }}" height="200" width="200" style="border-radius:100px">
                                            <input type="file" name="upic">
                                        </div>
                                        <div style="height:300px;width:500px;float:right;">
                                                <table width="370" height="230" style="margin-left:50px;margin-top:40px;" border="0">
                                                    <tr>
                                                        <td>姓 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</td>
                                                        <td><input type="text" name="uname" value="{{ $l->uname }}" style="height:27px;width:240px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>电 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：</td>
                                                        <td><input type="text" name="tel" id="tel" value="{{ $l->tel }}" style="height:27px;width:240px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>年 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;龄：</td>
                                                        <td><input type="text" name="age" value="{{ $l->age }}" style="height:27px;width:240px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>性 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</td>
                                                        <td>
                                                            <select style="height:27px;width:240px;" name="sex">
                                                                <option value="1" @if($l->sex == 1) selected @endif>男</option>
                                                                <option value="2" @if($l->sex == 2) selected @endif>女</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" align="center">
                                                            <input type="hidden" name="oldpic" value="{{ $l->upic }}">
                                                            <input type="submit" value="修改" style="height:27px;width:130px;">
                                                            <input type="button" value="关闭" id="xx" style="height:27px;width:130px;">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                        @endforeach
                                    </div>
                                    <img class="avatar" src="{{ asset('/Admin/upload/'.$v->upic) }}" width="150" height="150" alt="1250025725">
                                </div>
                                <div class="user-actions">
                                    <ul class="action-list">
                                        <li>账户安全：<span class="level level-2">普通</span></li>
                                        <li>绑定手机：<span class="tel">{{ $v->tel }}</span></li>
                                        <li>绑定邮箱：<span class="tel">{{ $v->uname }}@163.com</span>
                                    </ul>
                                </div>
                            </div>
                            <div class="portal-sub">
                                <ul class="info-list clearfix">
                                    <li>
                                        <h3>待支付的订单</h3>
                                        <a>查看待支付订单<i class="iconfont"></i></a>
                                        <img src="{{ asset('/Home/info/img/portal-icon-1.png') }}" alt="">
                                    </li>
                                    <li>
                                        <h3>待收货的订单</h3>
                                        <a href="">查看待收货订单<i class="iconfont"></i></a>
                                        <img src="{{ asset('/Home/info/img/portal-icon-2.png') }}" alt="">
                                    </li>
                                    <li>
                                        <h3>待评价商品数</h3>
                                        <a href="">查看待评价商品<i class="iconfont"></i></a>
                                        <img src="{{ asset('/Home/info/img/portal-icon-3.png') }}" alt="">
                                    </li>
                                    <li>
                                        <h3>喜欢的商品</h3>
                                        <a href="">查看喜欢的商品<i class="iconfont"></i></a>
                                        <img src="{{ asset('/Home/info/img/portal-icon-4.png') }}" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 收货地址 -->
                <div id="uaddr" class="uc-box uc-main-box" style="display:none;">
                    <form action="/home/grzx" method='post' name='myform'>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
                    <!-- 新地址 -->
                    <div id="newaddr">
                        <div style="margin-top:50px;margin-left:100px;">
                            <form action="{{ url('/home/grzx') }}" method="post" id="loca">
                                {{ csrf_field() }}
                                收 货 人 ：<input type="text" id="consignee" name="consignee" placeholder="请输入收货人姓名" style="margin-bottom:-3px;width:300px;height:30px;"><br><br>
                                所在地区：<select id='cid' name='site[]' style="height:30px;width:75px;margin-bottom:11px;">
                                    <option>--请选择--</option>
                                </select><br>
                                详细地址：<input type="text" name="detail" id="saddr" placeholder="请填写详细信息,具体到门牌号" style="margin-bottom:11px;height:30px;width:300px;"><br>
                                手机号码：<input type="text" id="consignee_phone" name="consignee_phone" placeholder="请输入手机号码" style="width:300px;height:30px;">
                                <div id="from" style="height:20px;width:200px;border:1px solid blue;display:none;"></div>
                                <input type="hidden" name="default" value="2">
                                <input type="hidden" name="uid" value="{{ $v->uid }}">
                                <input type="hidden" name="site" id="site" value="">
                                <!-- <input type="submit" id="submit" value="确认" disabled> -->
                                <button id="submit" disabled>确认</button>
                                <div id="gaddr">取消</div>
                            </form>
                        </div>
                    </div>
                    <!-- 修改地址 -->
                    <div id="updaddr">
                        <div style="margin-top:50px;margin-left:100px;">
                            <form action="/home/addr/" method="post" id="goal">
                                {{ csrf_field() }}
                                收 货 人 ：<input type="text" id="editconsignee" name="consignee" placeholder="请输入收货人姓名" style="margin-bottom:-3px;width:300px;height:30px;"><br><br>
                                原 地 区 ：<span id="yaddr"></span><br>
                                所在地区：<select id='edid' name='gsite[]' style="height:30px;width:75px;margin-bottom:11px;">
                                    <option>--请选择--</option>
                                </select><br>
                                详细地址：<input type="text" name="detail" id="editsite" placeholder="请填写详细信息,具体到门牌号" style="margin-bottom:11px;height:30px;width:300px;"><br>
                                手机号码：<input type="text" id="editconsignee_phone" name="consignee_phone" placeholder="请输入手机号码" style="width:300px;height:30px;">
                                    <div id="xgaddr" style="display:none;"></div>
                                    <input type="hidden" name="default" value="2">
                                    <input id="site1" type="hidden" name="site1" value="">
                                    <input type="hidden" name="site" id="xgsite">
                                    <!-- <input type="submit" id="submit" value="确认" disabled> -->
                                    <input id="chedit" type="submit" value="确认修改">
                                    <div id="close">取消</div>
                            </form>
                        </div>
                    </div>
                    <div class="uc-content-box">
                        <div class="box-hd">
                            <h1 class="title">收货地址</h1>
                        </div>
                        <div class="box-bd">
                            <div class="user-address-list J_addressList clearfix">
                                <div class="address-item address-item-new" id="J_newAddress">
                                    <i class="iconfont"></i>
                                    添加新地址
                                </div>
                                @foreach($address as $addr)
                                <div class="address-item J_addressItem">
                                    <dl>
                                        <dt><em class="uname">{{ $addr->consignee }}</em></dt>
                                        <dd class="utel">{{ $addr->consignee_phone }}</dd>
                                        <dd class="uaddress">{{ $addr->site }}</dd>
                                        <dd class="detail">{{ $addr->detail }}</dd>
                                        <dd style="display:none">{{ $addr->id }}</dd>
                                    </dl>
                                    <div class="actions">
                                        <a title="修改地址" class="editaddr">修改</a>
                                        <a href='javascript:doDel({{ $addr->id }})'>删除</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                $("#tel").blur(function(){
                    if($(this).val() == ''){
                        alert('收货人手机号不能为空');
                    }else{
                        if (!$(this).val().match(/(1[3-9]\d{9}$)/)){ 
                            alert("手机号码格式不正确！"); 
                        }else{
                            $("#submit").removeAttr('disabled');
                        }
                    }
                });
                $("#moduser").click(function(){
                    $("#edituser").css('display','block');
                });
                $("#xx").click(function(){
                    $("#edituser").css('display','none');
                });
                    $(".del").hover(function(){
                        $(this).css('background','#757575');
                        $(this).css('color',"white");
                    },function(){
                        $(this).css('background','white');
                        $(this).css('color','gray');
                    });
                    $(".addtem").hover(function(){
                        $(this).css("background","#ff6700");
                    },function(){
                        $(this).css("background","#eee");
                    });
                        function doDel(id){
                            if(confirm('确定删除吗？')){
                                var form = document.myform;
                                form.action = "/home/grzx/"+id;
                                // alert(form.action);
                                form.submit();
                            }
                        }
                        $("#cllect").click(function(){
                            $("#cllect_list").siblings().css("display","none");
                            $("#cllect_list").css("display","block");
                        });
                </script>
            </div>
        </div>
    </div>
</div>
@endforeach  
@endsection