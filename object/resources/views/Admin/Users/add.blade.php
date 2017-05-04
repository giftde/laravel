@extends('Admin.base.parent')
@section('content')
    <!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加管理员</h3>
        
        <p>后台管理员</p>
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
            <form action='/admin/users' method='post' name="myform">
                {{ csrf_field() }}
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='name'>
                </div>
                <div class="col-lg-7">
                    <input type="password" class="form-control m-b-10" placeholder="请输入密码" name='password'><span id="pass"></span>
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
                    <input type='submit' class="btn btn-block btn-alt" value='提交' id="submit" disabled>
                </div>
            </form>
            <script type="text/javascript">
                var password = document.myform.password;
                var submit = document.getElementById('submit');
                var pass = document.getElementById('pass');
                password.onblur = function()
                {
                    if(password.value.length < 6 || password.value.length > 18){
                        pass.innerHTML = '密码长度在6-18字符之间';
                    }else if(password.value.length > 6 && password.value.length < 18){
                        pass.innerHTML = '';
                        submit.removeAttribute('disabled');
                    }
                }
            </script>
        </div>
    </div>
@endsection