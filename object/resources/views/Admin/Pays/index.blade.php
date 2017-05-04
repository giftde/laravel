@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">支付列表</h3>
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
        	<form action="/demo5" method='post' name='myform'>
        		{{ csrf_field() }}
        		{{ method_field('DELETE') }}
        	</form>

        	<form action="{{ url('admin/pays') }}"  method='get'>
        		<div class='medio-body'>
    				支付名称：<input type='text' class='form-control input-sm m-b-10' name='name'>
    			</div>
        		<div>
        			支付方式：<select name='switch' class='form-control input-sm m-b-10'>
        				<option value=''>--请选择--</option>
        				<option value='1'>--开--</option>
        				<option value='2'>--关--</option>
        			</select>
        		</div>
        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>支付姓名</th>
                        <th>支付说明</th>
                        <th>是否开启支付方式</th>
                        <th>支付类型</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>
	                        <td>{{ $v->name }}</td>
	                        <td>{{ $v->content }}</td>
	                        <td>{{ ($v->switch == 1)?'开':'关' }}</td>
                            <td>
                                @if($v->type==1)
                                    微信
                                @elseif($v->type==2)
                                    支付宝
                                @elseif($v->type==3)
                                    网银支付
                                @else
                                    银联支付   
                                @endif
                            </td>
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/admin/pays/{{ $v->id }}/edit'>修改</a>
	                        </td>
	                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $list->appends($where)->links() }}
        </div>
    </div>
    <script type="text/javascript">
        function doDel(id){
        	if(confirm('确定删除吗？')){
        		var form = document.myform;
        		form.action = "pays/"+id;
        		form.submit();
        	}
        }
    </script>
@endsection