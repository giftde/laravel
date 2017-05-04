@extends('Home.base.parent')
@section('content')
    <style type="text/css">
        #states{
            margin-top:50px;
            margin-left:160px;
        }
        #states li{
            height:38px;
            line-height:38px;
            font-size:35px;
            float:left;
            color:#ff6700;
        }
        #gosm{
            margin-left:100px;
        }
        #gosm li{
            color:#ff6700;
            font-size:16px;
            margin-top:8px;
        }
    </style>
    <div style="background:#eee;">
        <div style="width: 1220px;margin:8px auto;"><a href="{{ url('home/mi') }}">大米商城</a>><a href="{{ url('/home/grzx/') }}">个人中心</a>>订单详情</div>
        <div style="width:1220px;margin:0px auto;">
            <div style="width:325px;height: 285px;padding-top:30px;background:white;float:left;">
                <div style="text-align: center;">
                    订单号：{{ $data->number }}
                </div>
                <div style="margin-top:30px;text-align: center;font-size:28px;color:#ff6700;">
                    订单状态:@if($data->state == 1)
                        待付款<br>
                        <a href="{{ url('/home/ordpay/'.$data->id.'/'.session('user')->uid) }}" class="jywc" style="border:1px solid black;text-decoration:none;background:#ff4444;color:black;border-radius:5px;">立即支付</a>
                    @elseif($data->state == 2 || $data->state == 3)
                        待收货<br>
                        <a href="{{ url('/home/ordok/'.$data->id) }}" class="jywc" style="border:1px solid black;text-decoration:none;background:#ff4444;color:black;border-radius:5px;">确认收货</a>
                    @else
                        交易完成
                    @endif
                </div>
                <div style="text-align: center;margin-top:30px;margin-bottom:70px;"><span id="invoice" style="cursor:pointer;">查看发票详情</span></div>
                <div style="float:left;margin-left:120px;"><img src="{{ asset('/Home/ord/pointer.png') }}"></div><div style="text-align:center;font-size:12px;float:left;">打印订单</div>
            </div>
            <div style="float:left;background:white;height:315px;width:894px;border-left:1px solid #e0e0e0;">
                <div style="margin-left:20px;margin-top:20px;">订单已经完成，感谢您在大米商城购物，欢迎您对本次交易及所购商品进行评价。</div>
                <div style="">
                    <ul id="states">
                        <li><img src="{{ asset('/Home/ord/订单确认.png') }}">··········<br><span style="color:gray;font-size:16px;margin-left:-10px;">订单确认</span></li>
                        <li><img src="{{ asset('/Home/ord/付款.png') }}">··········<br><span style="color:gray;font-size:16px;">付款</span></li>
                        <li><img src="{{ asset('/Home/ord/商品出库.png') }}">··········<br><span style="color:gray;font-size:16px;margin-left:-10px;">商品出库</span></li>
                        <li><img src="{{ asset('/Home/ord/等待收货.png') }}">··········<br><span style="color:gray;font-size:16px;margin-left:-10px;">等待收货</span></li>
                        <li><img src="{{ asset('/Home/ord/交易完成.png') }}"><br><span style="color:gray;font-size:16px;margin-left:-10px;">订单完成</span></li>
                    </ul>
                </div>
            </div>
            <div style="clear:both;height:3px;"></div>
            <div style="width:100%;background:white;text-align:center;font-size:26px;line-height:30px;border-top:1px solid #e5e5e5;">
                <table width="100%" border="1">
                    <caption>订单信息</caption>
                    <tr>
                        <td>&nbsp;订 单 号 :</td>
                        <td>{{ $data->number }}</td>
                    </tr>
                    <tr>
                        <td>订单商品:</td>
                        <td>{{ $data->goodsname }}</td>
                    </tr>
                    <tr>
                        <td>商品总量:</td>
                        <td>{{ $data->goodsnum }}</td>
                    </tr>
                    <tr>
                        <td>商品总价:</td>
                        <td>{{ $data->total.'.00元' }}</td>
                    </tr>
                    <tr>
                        <td>订单状态</td>
                        <td>
                            @if($data->state == 1)
                                去付款
                            @elseif($data->state == 2 || $data->state == 3)
                                待收货
                            @else
                                交易完成
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
            @foreach($gid as $id)
            @foreach($good as $g)
                @if($g->id == $id)
                <div style="width:1217px;margin-top:10px;background:white;">
                    <div style="width:300px;float:left;">
                        <div style="width:250px;margin:18px auto;">
                            <img src="{{ asset('/Admin/upload/'.$g->pic) }}" height="180" width="250">
                        </div>
                    </div>
                    <div style="width:917px;float:left;">
                        <div style="width:917px;text-align:center;font-size:28px;">商品情况</div>
                        <div style="width:895px;padding-left:20px;">
                            <ul id="gosm">
                                <li>商品编号:{{ $g->id }}</li>
                                <li>
                                    商品类型:
                                    @foreach($category as $c)
                                        @if($g->stype == $c->id)
                                            {{ $c->name }}
                                        @endif
                                    @endforeach
                                </li>
                                <li>商品名称:{{ $g->name }}</li>
                                <li>商品单价:{{ '￥'.$g->price.'.00' }}</li>
                                <li>商品说明:{{ $g->explain }}</li>
                            </ul>
                            <div style="float:right;margin-right:125px;font-size:18px;"><a href="{{ url('/home/mi/'.$g->id.'/edit') }}">商品详情</a></div>
                            @if($data->state == 4)
                            <div class="comgood" style="clear:both;float:right;margin-right:125px;font-size:18px;cursor:pointer;border-radius:5px;background:#eee;">评价商品</div>
                            <div style="clear:both;">
                                <form action="{{ url('/home/comment') }}" method="post" style="margin-left:200px;display:none;">
                                    {{ csrf_field() }}
                                    <input type="radio" name="classify" value="1" class="goodcom"><span>好评</span>
                                    <input type="radio" name="classify" value="2" class="badcom"><span>差评</span><br>
                                    <textarea name="content" class="content" style="width:500px;height:80px;resize:none;display:none;" placeholder="请输入评价内容"></textarea><br><br>
                                    <input type="hidden" name="uid" value="{{ session('user')->uid }}">
                                    <input type="hidden" name="gid" value="{{ $g->id }}">
                                    <input type="hidden" name="pubtime" value="{{ time() }}">
                                    <input type="hidden" name="oid" value="{{ $data->id }}">
                                    <input type="submit" class="comsub" value="评价" style="float:right;width:80px;height:25px;margin-right:192px;font-size:18px;display:none;">
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            @endforeach
        </div>
    </div>
    <script type="text/javascript">
        $(".comgood").click(function(){
            $(this).next().children('form').css('display','block');
        });
        $(".goodcom").change(function(){
            $(this).parent().children('textarea').css('display','block');
            $(this).parent().children('.comsub').css('display','block');
        });
        $(".badcom").change(function(){
            $(this).parent().children('textarea').css('display','block');
            $(this).parent().children('.comsub').css('display','block');
        });
        $(".jywc").hover(function(){
            $(this).css('background','red');
            $(this).css('border','2px solid black');
        },function(){
            $(this).css('background','#ff4444');
            $(this).css('border','1px solid black');
        });
    </script>
@endsection