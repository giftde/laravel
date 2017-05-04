@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="defaultStyle" style="margin-left:20px;">
        <h3 class="block-title">Default Style</h3>
        @if(session('msg'))
        	<div class="alert alert-success alert-icon">
			{{ session('msg') }}
			<i class="icon"></i>
			</div>
        @endif
        <table class="table tile">
            <thead>
                <tr>
                    <td>
                    	<b><span style="font-size:20px;">订单信息</span></b>
                    	<br>
                    	订单编号：{{ $data->number }}<br>
                    	配送方式：@if($data->dilivery == 1)韵达 @endif<br>
                    	买家留言：{{ $data->msg }}<br>
                    </td>
                </tr>
                <tr>
                    <td>
                    	<b><span style="font-size:20px">收货人信息</span></b><br>
                    	用户名：{{ $data->username }}<br>
                    	收货人姓名：{{ $data->name }}<br>
                    	收货地址：{{ $data->detail }}<br>
                    	联系方式：{{ $data->tel }}<br>
                    </td>
                </tr>
                <tr>
                	<td>
                		<b><span style="font-size:20px;">商品清单</span></b>
                		<br>
                		<img height="50" src="{{ asset('./Home/upload/s'.$list->pic) }}"><br><br>
                		商品名称：{{ $data->goodsname }}<br>
                		商品介绍：{{ $list->body }}<br>
                		商品单价：{{ '￥'.$data->price.'.00' }}<br>
                		商品数量：{{ $data->goodsnum }}<br>
                		商品总价：{{ '￥'.$data->total.'.00' }}<br>
                	</td>
                </tr>
                <tr>
                    <td>
                    	<b><span style="font-size:20px;">订单状态：</span></b>
                    	@if($data->state == 1)
                    		待付款
                    		<br>
                        	下单时间：{{ date('Y/m/d H:i:s',$data->time) }}
                    	@elseif($data->state == 2)
                    		待发货
                    		<br>
                        	下单时间：{{ date('Y/m/d H:i:s',$data->time) }}
                        	<br>
                        	<a href="{{ url('/admin/ship'.'/'.$data->id.'/'.$list->id) }}" class="btn">发货</a>
                    	@elseif($data->state == 3)
                    		待收货
                    		<br>
                        	下单时间：{{ date('Y/m/d H:i:s',$data->time) }}
                        @elseif($data->state == 4)
                        	<span style="font-size:20px;">交易成功</span>
                        	<br>
                        	下单时间：{{ date('Y/m/d H:i:s',$data->time) }}
                    	@endif
                    </td>
                </tr>
            </thead>
        </table>
    </div>
@endsection