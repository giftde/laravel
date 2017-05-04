<!DOCTYPE html>
<!-- saved from url=(0040)https://account.xiaomi.com/pass/register -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
<title>小米帐号 - 注册</title>

	<link type="text/css" rel="stylesheet" href="{{ asset('Home/register/reset.css') }}">
  <link type="text/css" rel="stylesheet" href="{{ asset('Home/register/layout.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('Home/register/registerpwd.css') }}">

	
<style>
.facebook_area{
  display:none!important;
}
</style>
<style>@font-face{font-family:uc-nexus-iconfont;src:url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.woff) format('woff'),url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.ttf) format('truetype')}</style></head>
<body class="zh_CN">

<div class="wrap">
  <div class="layout">
    <div class="n-frame device-frame reg_frame" id="main_container" style="height:520px;">
      <div class="external_logo_area" style="padding-top: 25px">
        <a href="{{ url('/home/mi') }}" style="margin-left:370px;"><img src="./addlog.png"></a>
      </div>
      <div class="title-item t_c">
       @if(session('msg'))
                    <h2 class="title_big30">{{ session('msg') }}</h2>
                @else
                    
                     <h4 class="title_big30">注册小米帐号</h4> 
                @endif
                
      </div>
<!-- ============================================================================================= -->
       <div align="center" style="margin-top:50px" >
         <form action="/home/doregister1" method="post">
            {{ csrf_field() }}
           
            <div class="inputbg" class="phone_step1" class="regbox" align="center">
                <label class="labelbox" for="">
                  <input type="text" id="uname" name="uname" data-type="PH" placeholder="请输姓名">
                </label>
            </div>
            <p id="tspass" align="left" style="padding-left:230px;color:red;"></p>
             <div class="inputbg" align="center">
                <label class="labelbox" for="">
                  <input type="password" name="password" data-type="PH" placeholder="请输入密码">
                </label>
              </div>
              <div class="inputbg" align="center">
                <label class="labelbox" for="">
                  <input type="password" name="repass" data-type="PH" placeholder="请输确认密码">
                </label>
              </div>
              <div class="inputbg inputcode" align="center"><label class="labelbox" for=""
                  ><input class="code" type="text" name="icode" autocomplete="off" placeholder="图片验证码">
                </label>
                <!-- <img alt="图片验证码"  title="看不清换一张" class="icode_image code-image"> -->
                <img src="{{ url('/home/captch1/'.time()) }}" onclick="this.src='{{ url('/home/captch1/') }}/'+Math.random()"  alt="图片验证码"  style="position:relative;top:10px;width:135px"/>
              </div>
            <div class="fixed_bot">
              <input id="submit" class="btn332 btn_reg_1 submit-step" type="submit" value="立即注册">
              <p class="msg">
              点击“立即注册”，即表示您同意并愿意遵守小米
              <a href="http://www.miui.com/res/doc/eula/cn.html"  target="_blank" title="用户协议">用户协议</a>和<a href="http://www.miui.com/res/doc/privacy/cn.html" target="_blank" title="隐私政策">隐私政策</a></p>
            </div>
          </form>
          <script type="text/javascript" src="{{ asset('/Home/info/js/jquery-1.8.3.min.js') }}"></script>
          <script type="text/javascript">
            $("#uname").blur(function(){
              if($("#uname").val()==''){
                $("#tspass").html('*用户名不能为空');
                $("#submit").attr('disabled','disabled');
              }else{
                $("#tspass").html('');
                $("#submit").removeAttr('disabled');
              }
            });
          </script>
      </div>
<!-- ============================================================================================ -->
      <div>
        <div class="other_register_area" style="display:none;">
         </div>
      </div>
    </div>
  </div>
</div>















<div class="n-footer">
  <div class="nf-link-area clearfix">
  <ul class="lang-select-list">
    <li><a class="lang-select-li current" href="javascript:void(0)" data-lang="zh_CN">简体</a>|</li>
    <li><a class="lang-select-li" href="javascript:void(0)" data-lang="zh_TW">繁体</a>|</li>
    <li><a class="lang-select-li" href="javascript:void(0)" data-lang="en">English</a></li>
    
      |<li><a class="a_critical"  target="_blank"><em></em>常见问题</a></li>
    
  </ul>
  </div>
  <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a class="beianlink beian-record-link" target="_blank" href="/www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134"><span></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p>
</div>
<!-- js文件================================================================================== -->
<script src="{{ asset('Home/register/jquery-1.8.3.min.js') }}"></script>
<script src="{{ asset('Home/register/placeholder.js') }}"></script>
<!-- js文件================================================================================== -->




<script type="text/javascript" src="{{ url('Home/register/main.min.js') }}" charset="utf-8"></script>
</body></html>