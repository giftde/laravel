@extends('Admin.base.parent')
@section('content')
    <!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加用户</h3>
        
        <p>填空添加用户</p>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <form action='/admin/demo4' method='post' name="myform">
                {{ csrf_field() }}
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='uname'>
                </div>
                <div class="col-lg-7">
                    <input type="password" class="form-control m-b-10" placeholder="请输入密码" name='password'><span id="wpass"></span>
                </div>
                <div class="col-lg-7">
                    <input type="password" class="form-control m-b-10" placeholder="请确认密码" name='checkpass'><span id="ok_pass"></span>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入年龄" name='age'>
                </div>
                <div class="col-lg-7">
                    <select class="form-control m-b-10" name='sex'>
                        <option value='1'>男</option>
                        <option value='2'>女</option>
                    </select>
                </div>
                <div class="col-lg-7">
                    <input id="submit" type='submit' class="btn btn-block btn-alt" value='提交' disabled>
                </div>
            </form>
            <script type="text/javascript">
                var checkpass = document.myform.checkpass;
                var password = document.myform.password;
                var submit = document.getElementById('submit');
                var wpass = document.getElementById('wpass');
                var ok_pass = document.getElementById('ok_pass');
                checkpass.onblur = function()
                {
                    if(password.value != checkpass.value){
                        alert('密码不一致');
                        password.value = '';
                        checkpass.value = '';
                    }else if(password.value == checkpass.value){
                        ok_pass.innerHTML = '密码输入正确';
                        ok_pass.style.color = 'green';
                        submit.removeAttribute('disabled');
                    }
                }
            </script>
        </div>
    </div>
@endsection