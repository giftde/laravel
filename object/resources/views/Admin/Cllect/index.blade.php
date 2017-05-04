@extends('Admin.base.parent')
@section('content')
    <div class="block-area" id="tableHover">
        <h3 class="block-title">用户收藏管理</h3>
        <div class="table-responsive overflow" tabindex="5003" style="overflow: hidden; outline: none;">
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>用户ID</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $v)
                    <tr>
                        <th>{{ $v->uid }}</th>
                        <th>{{ $v->uname }}</th>
                        <th><a href="{{ url('admin/cllect/'.$v->uid.'/edit') }}" class="btn btn-xs btn-alt m-r-5" id="info">收藏详情</a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>
@endsection