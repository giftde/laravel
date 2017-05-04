@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="defaultStyle">
        <h3 class="block-title">问题反馈</h3>
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
        <table class="table tile" style="margin-left:20px;">
    		<form action="{{ asset('/admin/doreplay'.'/'.$list->id) }}" method="post">
    		{{ csrf_field() }}
    			<tbody>
	            	<tr>
	            		<td>
	            			<b><span style="font-size:20px;">提问用户：</span></b>
	            			<span style="font-size:16px;">{{ $name }}</span><br>
	            			联系方式：{{ $tel }}
	            		</td>
	            	</tr>
	            	<tr>
	            		<td>
	            			<b><span style="font-size:20px;">订单号：</span></b>
	            			<span style="font-size:16px;">{{ $list->number }}</span>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td>
	            			<b><span style="font-size:20px;">问题描述：</span></b>
	            			<br>
	            			<span style="font-size:16px;">{{ $list->pcontent }}</span>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td id="textarea">
	            			<b><span style="font-size:20px;">问题回复：</span></b>
	            			<textarea id="preplay" class="form-control auto-size m-b-10" placeholder="This is an auto sizing Textarea..." name="preplay" style="overflow: hidden; word-wrap: break-word; resize: none;">@if(strlen($list->preplay) == 0)@else{{ $list->preplay }}@endif</textarea><br>
	            			<input type="submit" value="确认回复" class="btn">
	            		</td>
	            	</tr>
	            </tbody>
    		</form>
        </table>
    </div>
@endsection