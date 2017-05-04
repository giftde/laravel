@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">网站配置列表</h3>
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
        	<form action="{{ url('admin/c onfig') }}" method='post' name='myform'>
        		{{ csrf_field() }}
        		{{ method_field('DELETE') }}
        	</form>

        	<form action="{{ url('admin/config') }}" method='get'>
        		<div class='medio-body'>
    				标题：<input type='text' class='form-control input-sm m-b-10' name='title'>
    			</div>

        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>标题</th>
                        <th>关键字</th>
                        <th>网站状态</th>
                        <th>网站描述</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>
	                        <td>{{ $v->title }}</td>
	                        <td>{{ $v->keys }}</td>
	                        <td>{{ ($v->state == 1)?'开':'关' }}</td>
                            <td>{{ $v->desn }}</td>

	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/admin/config/{{ $v->id }}/edit'>修改</a>
	                        </td>
	                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $list->appends($where)->links() }}
        </div>
    </div>
@endsection