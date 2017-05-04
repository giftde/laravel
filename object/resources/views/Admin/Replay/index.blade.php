@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">回复</h3>
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

        	<form action="{{ url('admin/replay') }}"  method='get'>
        		<div class='medio-body'>
    				回复内容：<input type='text' class='form-control input-sm m-b-10' name='rcontent'>
    			</div>
                <div class='medio-body'>
                    回复内者：<input type='text' class='form-control input-sm m-b-10' name='replayer'>
                </div>
        	   
        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>评论表内容</th>
                        <th>回复内容</th>
                        <th>回复时间</th>
                        <th>回复者</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>    
                            <td>{{ $v->content }}</td> 
	                        <td>{{ $v->rcontent }}</td>
	                        <td>{{ date('Y-m-d H:i:s',$v->rtime) }}</td>
                            <td>{{ $v->replayer }}</td>        
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/admin/replay/{{ $v->id }}/edit'>修改</a>
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
        		form.action = "replay/"+id;
        		form.submit();
        	}
        }
    </script>
@endsection