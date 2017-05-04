@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">购物车列表</h3>
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

        	<form action="{{ url('admin/temprory') }}"  method='get'>
        		<div class='medio-body'>
    				商品名称：<input type='text' class='form-control input-sm m-b-10' name='name'>
    			</div>
        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>gid</th>
                        <th>uid</th>
                        <th>num数量</th>
                        <th>pic图片</th>
                        <th>price价格</th>
                        <th>name商品名</th>
                        <th>操作</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->gid }}</td>
                            <td>{{ $v->uid }}</td>
                            <td>{{ $v->gnum}}</td>
                            <td>  <img src="/uploads/{{$v->pic}}" alt="budu" width="60" height="40"> </td>
	                        <td>{{ $v->gprice}}</td>
	                        <td>{{ $v->gname }}</td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href='/admin/temprory/{{ $v->id }}/edit'>修改</a>
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
                form.action = "temprory/"+id;
                form.submit();
            }
        }
    </script>
@endsection