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
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>用户ID</th>
                        <th>订单号</th>
                        <th>问题描述</th>
                        <th>回复状态</th>
                        <th>联系电话</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                        <tr>
                            <td>{{ $v->id }}</td>
                            <td>
                                @foreach($data as $c)
                                    @if($c->uid == $v->uid)
                                        {{ $c->uname }}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $v->number }}</td>
                            <td>{{ $v->pcontent }}</td>
                            <td>
                                @if(strlen($v->preplay) == 0)
                                    未回复
                                @else
                                    已回复
                                @endif
                            </td>
                            <td>
                                @foreach($data as $c)
                                    @if($c->uid == $v->uid)
                                        {{ $c->tel }}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href="{{ asset('/admin/preplay'.'/'.$v->id.'/'.$c->uname.'/'.$c->tel) }}">回复</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection