@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">用户收藏记录</h3>
        <div class="table-responsive overflow" tabindex="5003" style="overflow: hidden; outline: none;">
            <table class="table table-bordered table-hover tile">
                <caption>
                    用户收藏记录
                </caption>
                <tbody>
                	@foreach($data as $v)
                        <tr>
                            <th width="230" style="line-height:50px;">
                                商品图片：
                                @foreach($list as $c)
                                    @if($v->gid == $c->id)
                                        <img src="{{ asset('/Home/upload/s'.$c->pic) }}" height="40px">
                                    @endif
                                @endforeach
                            </th>
                            <th style="line-height:50px;">商品ID：{{ $v->gid }}</th>
                            <th style="line-height:50px;">
                                商品名称：
                                @foreach($list as $c)
                                    @if($v->gid == $c->id)
                                        {{ $c->name }}
                                    @endif
                                @endforeach
                            </th>
                            <th style="line-height:50px;">收藏时间：{{ $v->ctime }}</th>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection