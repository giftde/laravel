@extends('Admin.base.parent')
@section('content')
    <div class="block-area" id="tableHover">
        <h3 class="block-title">用户信息列表</h3>
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
            <form action='/admin/demo4' method='post' name='myform'>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>

            <form action='/admin/demo4' method='get'>
                <div class='medio-body'>
                    姓名：<input type='text' class='form-control input-sm m-b-10' name='name'>
                </div>
                <div>
                    性别：<select name='sex' class='form-control input-sm m-b-10'>
                        <option value=''>--请选择--</option>
                        <option value='1'>--男--</option>
                        <option value='2'>--女--</option>
                    </select>
                </div>
                <input type='submit' class='btn' value='搜索'>
            </form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>姓名</th>
                        <th>年龄</th>
                        <th>性别</th>
                        <th>头像</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                        <tr>
                            <td style="width:150px;">{{ $v->uid }}</td>
                            <td style="width:150px;">{{ $v->uname }}</td>
                            <td style="width:150px;">{{ $v->age }}</td>
                            <td style="width:150px;">{{ ($v->sex == 1)?'男':'女' }}</td>
                            <td width="200">
                                <img src="{{ asset('/Admin/upload/'.$v->upic) }}" width="80">
                            </td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->uid }})'>删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href='/admin/demo4/{{ $v->uid }}/edit'>修改</a>
                                <a class="btn btn-sm btn-alt m-r-5" href='/admin/demo4/upic/{{ $v->uid }}'>修改头像</a>
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
                form.action = '/admin/demo4/'+id;
                form.submit();
            }
        }
    </script>
@endsection