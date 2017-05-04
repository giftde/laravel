@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">商品列表</h3>
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
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>订单编号</th>
                        <th>退款商品</th>
                        <th>退款申请人</th>
                        <th>退款金额</th>
                        <th>申请时间</th>
                        <th>退款状态</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>
	                        <td>{{ $v->number }}</td>
                            <td>{{ $v->goodsname }}</td>
	                        <td>{{ $v->username }}</td>
                            <td>{{ $v->bmoney }}</td>
	                        <td>{{ date('Y/m/d H:i:s',$v->ttime) }}</td>
                            <td>
                                @if($v->tstatus == 1)
                                    申请退货
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-alt m-r-5" href="{{ asset('/admin/doback'.'/'.$v->id) }}">确认退货</a>
                                    </td>
                                @elseif($v->tstatus == 2)
                                    退货中
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-alt m-r-5" href="{{ asset('/admin/afback'.'/'.$v->id) }}">退货完成</a>
                                    </td>
                                @elseif($v->tstatus == 3)
                                    退货成功
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-alt m-r-5" href="{{ asset('/admin/okback'.'/'.$v->id) }}">确认</a>
                                    </td>
                                @else
                                    退货成功
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-alt m-r-5" href="{{ asset('/admin/doback'.'/'.$v->id) }}" disabled>此退款订单已完成</a>
                                    </td>
                                @endif
                            
	                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection