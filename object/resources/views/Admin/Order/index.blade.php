@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">订单列表</h3>
        @if(session('msg'))
        	<div class="alert alert-success alert-icon">
			{{ session('msg') }}
			<i class="icon"></i>
			</div>
        @endif
        @if(session('error'))
        	<div class="alert alert-warning alert-icon">
			{{ session('error') }}
			<i class="icon"></i>
			</div>
		@endif
        <div class="table-responsive overflow">
        	<form action='/admin/order' method='get'>
        		<div>
        			<select name='state' class='form-control input-sm m-b-10'>
        				<option value=''>--订单状态--</option>
        				<option value='1'>--待付款--</option>
        				<option value='2'>--待发货--</option>
                        <option value="3">--待收货--</option>
                        <option value="4">--交易完成--</option>
        			</select>
        		</div>
        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>订单编号</th>
                        <th>商品名称</th>
                        <th>商品数量</th>
                        <th>配送方式</th>
                        <th>下单时间</th>
                        <th>订单状态</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>
	                        <td>{{ $v->number }}</td>
                            <td>{{ $v->goodsname }}</td>
	                        <td>{{ $v->goodsnum }}</td>
                            <td>@if($v->dilivery == 1)韵达 @endif</td>
                            <td>{{ $v->time }}</td>
                            <td>@if($v->state == 1)
                                        待付款
                                    @elseif($v->state == 2)
                                        待发货
                                    @elseif($v->state == 3)
                                        待收货
                                    @elseif($v->state == 4)
                                        <span style="font-size:20px;">交易成功</span>
                                    @endif
                            </td>
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href="{{ asset('/admin/oinfo'.'/'.$v->id.'/'.$v->gid) }}">详情</a>
	                        </td>
	                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $list->appends($where)->links() }}
        </div>
    </div>
@endsection