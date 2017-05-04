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
        	<form action='/admin/goods' method='post' name='myform'>
        		{{ csrf_field() }}
        		{{ method_field('DELETE') }}
        	</form>
            
        	<form action='/admin/goods' method='get'>
                <div>
                    类别：<select name='stype' class='form-control input-sm m-b-10'>
                        <option value=''>--商品类别--</option>
                        <!-- 遍历商品分类列表 -->
                        @foreach($data as $v)
                            <option value='{{ $v->id }}'>--{{ $v->name }}--</option>
                        @endforeach
                    </select>
                </div>
        		<div>
        			状态：<select name='under' class='form-control input-sm m-b-10'>
        				<option value=''>--请选择--</option>
        				<option value='2'>--在售中--</option>
        				<option value='1'>--下架--</option>
        			</select>
        		</div>
        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>商品类别</th>
                        <th>商品名称</th>
                        <th>商品单价</th>
                        <th>库存量</th>
                        <th>销售量</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 遍历商品列表字段 -->
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>
                            <td>
                                @foreach($data as $c)
                                    @if($c->id == $v->stype)
                                    {{ $c->name }}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $v->name }}</td>
                            <td>{{ '￥'.$v->price.'.00' }}</td>
	                        <td>{{ $v->stock }}</td>
                            <td>{{ $v->hot_level }}</td>
	                        <td>{{ ($v->under == 1)?'下架':'上架' }}</td>
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/admin/goods/{{ $v->id }}/edit'>修改</a>
                                <a class="btn btn-sm btn-alt m-r-5" href="/admin/goods/gpic/{{ $v-> id}}">展销图</a>
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
        		form.action = '/admin/goods/'+id;
        		form.submit();
        	}
        }
    </script>
@endsection