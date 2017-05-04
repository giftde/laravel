@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">评论管理列表</h3>
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
        	<form action='/demo5' method='post' name='myform'>
        		{{ csrf_field() }}
        		{{ method_field('DELETE') }}
        	</form>

        	<form action="{{ url('admin/comment') }}" method='get'>
        		<div class='medio-body'>
    				评论内容：<input type='text' class='form-control input-sm m-b-10' name='content'>
    			</div>
        		<div>
        			评论分类：<select name='classify' class='form-control input-sm m-b-12'>
        				<option value=''>--请选择--</option>
        				<option value='1'>--好评--</option>
        				<option value='2'>--差评--</option>
        			</select>
        		</div>
        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>评论时间</th>
                        <th>评论内容</th>
                        <th>商品id</th>
                        <th>商用户id</th>
                        <th>好评或差评</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>
                            <td>{{ date('Y-m-d H:i:s',$v->pubtime) }}</td>
                            <td>{{ $v->content }}</td>
                            <td>{{ $v->gid }}</td>
	                        <td>{{ $v->uid }}</td>
	                        <td>{{ ($v->classify == 1)?'好评':'差评' }}</td>
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/admin/comment/{{ $v->id }}/edit'>修改</a>
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
        		form.action = 'comment/'+id;
        		form.submit();
        	}
        }
    </script>
@endsection