<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <meta name="description" content="小米帐号能使用小米手机，MIUI，小米云，多看阅读，米聊，小米社区等小米服务。">
      <meta name="keywords" content="小米帐号，小米账号，小米注册，注册，Mi Account，Sign in，小米，帐号，账号，小米帐户，登录，登陆，安全令牌，动态口令，小米注册，找回密码">
      <script>
        var LANG=(function(){
            var locale=("zh_CN").toLowerCase();
            if(locale){
              if(locale.indexOf("en")>-1){
                return {data:"en",cls:"en"};
              }else if(locale.indexOf("zh")>-1){
                if(locale.indexOf("cn")===-1){
                  return {data:"tw",cls:"zh_TW"};
                }else{
                  return {data:"cn",cls:"zh_CN"};
                }
              }
            }
            return {data:"en",cls:"en"};
        })();
      </script>
      <script>
      var _d_={};
      var _t_={
        statURL:'https://data.mistat.xiaomi.com/mistats',
        appId:"2882303761517246742",
        appKey:"5621724658742",
        jspcomplete:(new Date()).getTime(),
        supportLocalstorage:!!window.localStorage,
        samplingBase:100,
        samplingRate:5
      };
      if(window.performance){
        var timing=performance.timing;
        if(!timing.responseEnd){
          timing.responseEnd=timing.responseStart;
        }
        _d_.startTS=timing.fetchStart
        _d_.endTS=timing.responseEnd;
      }else{
        _d_.startTS=_d_.endTS=(new Date()).getTime();
      }
      var JSP_VAR={
        deviceType:'PC',
        dataCenter:'lg',
        locale:"zh_CN",
        region:"CN",
        callback:"http://order.mi.com/login/callback?followup=http%3A%2F%2Fwww.mi.com%2F&sign=NWU4MzRmNjBhZmU4MDRmNmZkYzVjMTZhMGVlMGFmMTllMGY0ZTNhZQ,,",
        sid:"mi_eshop",
        qs:"%3Fcallback%3Dhttp%253A%252F%252Forder.mi.com%252Flogin%252Fcallback%253Ffollowup%253Dhttp%25253A%25252F%25252Fwww.mi.com%25252F%2526sign%253DNWU4MzRmNjBhZmU4MDRmNmZkYzVjMTZhMGVlMGFmMTllMGY0ZTNhZQ%252C%252C%26sid%3Dmi_eshop%26_bannerBiz%3Dmistore%26_qrsize%3D180",
        hidden:"",
        "_sign":"2Ik1lVnIXKjC5jAlrfzLeHxOMDk=",
        serviceParam :'{"checkSafePhone":false}',
        privacyLink:'http://www.miui.com/res/doc/privacy/cn.html',
        showActiveXControl:false
      };
      var PAGE_VAR={
        form_cache:false,
        cache_key:(JSP_VAR.deviceType!=="mobile" ? "/static/res/0bffe86/account-static/html/login/dist/v2/login-cn.html" : "/static/res/9ace5ec/account-static/html/login/dist/v2/login-wap-cn.html")
      };

      var localStorageKey='id.mi.com.login.'+( PAGE_VAR.cache_key.substring( PAGE_VAR.cache_key.indexOf("/account-static") ) || "main" );

      if(location.search.indexOf("_debugMode")>-1){
        window.localStorage && window.localStorage.removeItem(localStorageKey);
      }

      (function(){

        function getLocal(url){
          if(window.localStorage){
            var data=""+localStorage.getItem(localStorageKey);
            var index=data.indexOf("@")

            if(data.substring(0,index) == url){
              return data.substring(index+1)
            }
          }
          return null;
        }
        function setLocal(url,data){
          if(window.localStorage && data){
            try{
              localStorage.setItem(localStorageKey,url+"@"+data);
            }catch(e){}
          }
        }
        function getContent(url){
          var xhr= new (window.XMLHttpRequest || window.ActiveXObject)("Microsoft.XMLHTTP");
          xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                setLocal(url,xhr.responseText);
                _t_.htmlGetEnd=(new Date()).getTime();
                document.write(xhr.responseText);
                document.close();
            }
          };
          xhr.open("GET",url,false);
          xhr.send();
        }
        var cache_key=PAGE_VAR.cache_key;
            _t_.version=cache_key;
        var html=getLocal(cache_key);
        if(html){
          _t_.htmlCache=true;
          PAGE_VAR.form_cache=true;
          document.write(html);
          document.close();
        }else{
          _t_.htmlCache=false;
          _t_.htmlGetStart=(new Date()).getTime();
          getContent(cache_key);
        }
      })();
      </script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>小米帐号 - 登录</title>
  <style>@font-face{font-family:uc-nexus-iconfont;src:url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.woff) format('woff'),url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.ttf) format('truetype')}</style></head>
  <body class="zh_CN win_banner_mistore">
    <div class="wrapper">
      <!--bg_banner_start-->
      <div class="bgiframe">
        <iframe width="100%" height="686" src="./login_files/loginbanner.html" id="bgiframe" frameborder="0" scrolling="no"></iframe>
      </div>
      <!--bg_banner_end-->
      <div class="wrap">
        <div class="layout_panel" style="background:url('./logbg.png');">
          <div class="layout" id="layout">
            <!--表单输入登录-->
            <div class="mainbox" id="login-main">
              <div><a class="ercode" id="qrcode-trigger" href="javascript:void(0)"></a></div>
              <!-- header s -->
              <div class="lgnheader">
                <div class="header_tit t_c">
                  <em id="custom_display_1" class="milogo">
                    <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><rect width="50" height="50" style="fill:#ef5b00"></rect><rect x="11.25" y="15" width="5" height="20" style="fill:#FFFFFF"></rect><rect x="11.25" y="15" width="12.5" height="5" style="fill:#FFFFFF"></rect><rect x="26.25" y="22.5" width="5" height="12.5" style="fill:#FFFFFF"></rect><rect x="33.75" y="15" width="5" height="20" style="fill:#FFFFFF"></rect><circle cx="23.75" cy="22.5" r="7.5" fill="#FFFFFF"></circle><rect x="16.25" y="20" width="7.5" height="15" style="fill:#ef5b00"></rect><rect x="16.25" y="22.5" width="10" height="12.5" style="fill:#ef5b00"></rect><circle cx="23.75" cy="22.5" r="2.5" fill="#ef5b00"></circle><rect x="18.75" y="22.5" width="5" height="12.5" style="fill:#FFFFFF"></rect></svg>
                  </em>
                  <h4 class="header_tit_txt" id="login-title">小米帐号登录</h4>
                <div class="site_info"></div></div>
              </div>
              <!-- header e -->
              <!-- tab s -->
              <div class="nav_tabs_panel">
                <div id="nav-tabs" class="nav_tabs">
                  <a class="navtab-link now" href="javascript:void(0);" data-tab="pwd">帐号登录</a><span class="line"></span>
                  <a>扫码登录</a>
                </div>
              </div>
              <!-- tab e -->
              <!-- tab con s -->
              <div class="tabs-con tabs_con now" data-con="pwd">
                <div>
                  <div class="login_area">
                    <form action="/home/dologin" method="POST" id="login-main-form">
                      <div class="loginbox c_b">
                        {{ csrf_field() }}
                        <!-- 输入框 -->
                        <div class="lgn_inputbg c_b">
                          <label id="region-code" class="labelbox login_user c_b" for="">
                            <input class="item_account" autocomplete="off" type="text" name="uname" id="username" placeholder="邮箱/手机号码/小米帐号">
                          </label>
                          <div class="country-container" id="countrycode_container" style="display: none;">
                            <div class="country_container_con" id="countrycode_container_con"></div>
                          </div>
                          <label class="labelbox pwd_panel c_b">
                            <div class="eye_panel pwd-visiable">
                              <i class="eye pwd-eye">
                              <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path class="eye_outer" d="M0 8 C6 0,14 0,20 8, 14 16,6 16, 0 8 z"></path>
                                <circle class="eye_inner" cx="10" cy="8" r="3"></circle>
                              </svg>
                              </i>
                            </div>
                            <input type="password" placeholder="输入密码" autocomplete="off" name="password" id="pwd">
                          </label>
                        </div>
                        <div class="security_Controller" style="display: none;">
                        </div>
                        @if(session('msg'))
                        <h2 class="m-t-0 m-b-15">{{ session('msg') }}</h2>
                        @endif
                        <div class="btns_bg">
                          <input class="btnadpt btn_orange" id="login-button" type="submit" value="立即登录">
                        </div>
                        <!-- 其他登录方式 s -->
                        <div style="display: block;" class="other_login_type sns-login-container" id="custom_display_16">
                          <fieldset class="oth_type_tit">
                            <legend align="center" class="oth_type_txt">其他方式登录</legend>
                          </fieldset>
                          <div class="oth_type_links">
                            <a class="icon_type btn_qq sns-login-link" data-type="qq" href="https://account.xiaomi.com/pass/sns/login/auth?appid=100284651&amp;&amp;callback=http%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttp%253A%252F%252Fwww.mi.com%252F%26sign%3DNWU4MzRmNjBhZmU4MDRmNmZkYzVjMTZhMGVlMGFmMTllMGY0ZTNhZQ%2C%2C&amp;sid=mi_eshop" title="QQ登录" target="_blank"><i class="btn_sns_icontype icon_default_qq"></i></a>
                            <a class="icon_type btn_weibo sns-login-link" data-type="weibo" href="https://account.xiaomi.com/pass/sns/login/auth?appid=2996826273&amp;&amp;callback=http%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttp%253A%252F%252Fwww.mi.com%252F%26sign%3DNWU4MzRmNjBhZmU4MDRmNmZkYzVjMTZhMGVlMGFmMTllMGY0ZTNhZQ%2C%2C&amp;sid=mi_eshop" title="微博登录" target="_blank"><i class="btn_sns_icontype icon_default_weibo"></i></a>
                            <a class="icon_type btn_alipay sns-login-link" data-type="alipay" href="https://account.xiaomi.com/pass/sns/login/auth?appid=2088011127562160&amp;&amp;callback=http%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttp%253A%252F%252Fwww.mi.com%252F%26sign%3DNWU4MzRmNjBhZmU4MDRmNmZkYzVjMTZhMGVlMGFmMTllMGY0ZTNhZQ%2C%2C&amp;sid=mi_eshop" title="支付宝登录" target="_blank"><i class="btn_sns_icontype icon_default_alipay"></i></a>
                            <a class="icon_type btn_weixin sns-login-link" data-type="weixin" href="https://account.xiaomi.com/pass/sns/login/auth?appid=wxxmzh&amp;scope=snsapi_login&amp;callback=http%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttp%253A%252F%252Fwww.mi.com%252F%26sign%3DNWU4MzRmNjBhZmU4MDRmNmZkYzVjMTZhMGVlMGFmMTllMGY0ZTNhZQ%2C%2C&amp;sid=mi_eshop" title="微信登录" target="_blank"><i class="btn_sns_icontype icon_default_weixin"></i></a>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- 其他登录方式 e -->
                <div class="n_links_area" id="custom_display_64">
                  <a class="outer-link" href="{{ url('/home/register1') }}">注册小米帐号</a><span>|</span>
                  <a class="outer-link" href="">忘记密码？</a>
                </div>
              </div>
              <div class="tabs-con tabs_con" data-con="qr">
                <div class="tab_qrcon">
                  <div class="tab_code_iframe">
                    <iframe style="background:#fff;" src="./login_files/saved_resource.html" id="tab-qriframe" frameborder="0" scrolling="no"></iframe>
                  </div>
                  <div class="custom_sub_txt">
									  <p>使用<span>小米商城APP</span>扫一扫</p>
									  <p>MIUI系统可进入「设置」-「我的小米」扫码登录</p>
									</div>
                </div>
              </div>
              <!-- tab con e -->
            </div>

            <div class="ercode_area" id="login-qrcode">
              <div class="ercode_pannel">
                <a class="code_close" href="javascript:void(0)" title="关闭" id="qrcode-close"><span class="icon_code_close"></span></a>
                <div class="ercode_box">
                  <div class="code_hd">
                    <h3 class="code_tit">小米帐号扫码登录</h3>
                    <p>请使用最新版MIUI中“我的小米”进行扫码登录</p>
                  </div>
                  <div class="code_iframe">
                    <iframe style="background:#fff;" src="./login_files/saved_resource(1).html" id="qriframe" frameborder="0" scrolling="no"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="custom_display_4" class="n-footer">  
      <div class="nf-link-area clearfix">
        <ul class="lang-select-list">
          <li><a href="javascript:void(0)" data-lang="zh_CN" class="lang-select-li current">简体</a>|</li>
          <li><a href="">繁体</a>|</li>
          <li><a href="">English</a>|</li>
          <li><a href="">常见问题</a></li>
        </ul>
      </div>
      <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a class="beian-record-link" href=""><span><img src="./login_files/ghs.png"></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p>
    </div>
  

<style>
﻿html,body,h1,h2,h3,h4,h5,h6,blockquote,p,pre,dl,dd,ol,ul,li,a,span,caption,th,td,form,fieldset,legend,input,button,textarea,address{margin:0;padding:0}h1,h2,h3,h4,h5,h6{font-size:100%}ol,ul{list-style:none}li{list-style:none}fieldset,img{border:0}address,cite,dfn,em,var{font-style:normal}code,kbd,pre,samp{font-family:courier new,courier,monospace}input,button,textarea,select{font-size:100%}input,button,select,textarea{outline:0}textarea{resize:none}table{border-collapse:collapse;border-spacing:0;empty-cells:show;font-size:inherit}abbr[title]{border-bottom:1px dotted;cursor:help}a,a:hover{text-decoration:none}a,label,:focus{outline:0 none}a,img,input{border:0 none}s{font-style:normal;text-decoration:none}body{font-size:12px;font-family:arial,"Hiragino Sans GB","Microsoft YaHei","微軟正黑體","儷黑 Pro",sans-serif}button,input,select,textarea{font-family:arial,"Hiragino Sans GB","Microsoft YaHei",sans-serif}input::-moz-placeholder,textarea::-moz-placeholder{color:#3b3b3b;font-weight:normal}::-webkit-input-placeholder{color:#3b3b3b;font-weight:normal}input:-ms-input-placeholder{color:#3b3b3b;font-weight:normal}::-ms-clear{display:none}::-ms-reveal{display:none}.clearfix:after{display:block;content:"\20";height:0;clear:both;overflow:hidden;visibility:hidden}.clearfix{*zoom:1}input::-ms-clear{display:none}input::-ms-reveal{display:none}input:-webkit-autofill{-webkit-box-shadow:0 0 0 1000px white inset}@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none){a{background-color:transparent}}input{background:0;border:0 none}input[type="button"],input[type="submit"],input[type="reset"],a{-webkit-appearance:none;appearance:none}.fl{float:left}.fr{float:right}.nbg{background:none !important}.t_l{text-align:left}.t_c{text-align:center}.t_r{text-align:right}.c_b:before,.c_b:after{content:"";display:block}.c_b:after{clear:both}.c_b{zoom:1}.hidden,.hide{display:none}.hideimportant{display:none !important}.underline{text-decoration:underline}input[type=text]::-ms-clear,input[type=password]::-ms-reveal{display:none}input{color:#333}input:required,input:invalid{-moz-box-shadow:none;box-shadow:none}input::-moz-focus-inner{border:0}html,body{height:100%}body{background:#f5f5f5;color:#757575}a{color:#757575}input{color:#333}::-webkit-input-placeholder{color:#9d9d9d}input:-ms-input-placeholder{color:#9d9d9d}.ercode,.icon_type5,.icon_arrow_down,.icon_error{background:url(https://account.xiaomi.com/static/res/f234829/account-static/respassport/acc-2014/img/sprite_login.gif) no-repeat}.btn_turn,.btn_mod_close,.icon_code_close{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAALCAYAAACprHcmAAAABGdBTUEAALGPC/xhBQAAAJxJREFUGBl1kLEOgkAQRA9pVUKihTR2FBREPwD/v6ehsDYhoTBWVsAb5AguMMm7I7sz3O0FzrkYOnjDlg409ruxm7MrtKaI4g30w0EyPsAGZCzgBH+ygYUxnNm/fH8gAx2ZQgUNDJqbVVBAxjs84QWT/IC+oKOvUEICdgZKP9k72hm8z1mjbywCRzqrzzMmFFD/HLBcoIUatqR3jnolNxObIsWRIwAAAABJRU5ErkJggg==) no-repeat center center}.wrapper{width:100%;min-height:100%;height:auto;display:-webkit-box;display:box;display:-moz-box;display:-o-box;-webkit-box-align:center;-moz-box-align:center;-o-box-align:center;box-align:center;-webkit-box-pack:center;-moz-box-pack:center;-o-box-pack:center;box-pack:center}.wrap{padding-bottom:80px;padding-top:100px \9}@media screen and (min-width:0\0){.wrap{padding-top:100px}}.layout{background-color:#fff;width:854px;margin:0 auto 20px;position:relative;min-height:620px}.mainbox{padding-bottom:30px}.captcha_layout{min-height:700px}.ercode{width:68px;height:68px;position:absolute;right:0;top:0;opacity:.3;filter:alpha(opacity=30)}.ercode:hover,.ercode:focus{opacity:1;filter:alpha(opacity=100)}.header_tit{padding:50px 0 22px}.milogo{width:49px;height:48px;margin:0 auto;display:block}.header_tit_txt{font-size:30px;color:#424242;font-weight:normal;padding-top:22px}.lgn_inputbg{position:relative}.login_area{width:358px;margin:0 auto;padding-bottom:20px}.labelbox{display:block;margin-bottom:14px;border:1px solid #e0e0e0}.labelbox input{width:326px;height:22px;line-height:22px;padding:13px 16px 13px 14px;display:block}.placehld{width:326px;padding:13px 16px 13px 14px}.country_list{cursor:pointer;display:none;float:left}.country_regin{max-width:80px;overflow:hidden;white-space:nowrap;-webkit-text-overflow:ellipsis;-moz-text-overflow:ellipsis;-o-text-overflow:ellipsis;text-overflow:ellipsis}.item_account{float:left}.country_regin{margin-right:8px}.country_code{padding-right:12px;position:relative}.icon_arrow_down{width:8px;height:5px;position:absolute;top:8px;right:0;background-position:-19px -69px}.eye_panel{display:none}.divflex .item_account{width:270px}.turn_area{display:none;height:11px;padding:18px 0 18px 10px;float:left}.btn_turn{width:11px;height:11px;display:block}.turn_off{display:none}.add_regioncode .item_account{width:226px}.add_regioncode .country_list{height:22px;line-height:22px;padding:13px 10px 13px 0;margin-left:10px;color:#333;border-right:1px solid #e0e0e0;display:block;overflow:hidden;position:relative}.add_regioncode .country_list span{display:inline-block;vertical-align:middle}.add_regioncode .turn_area{display:block}.add_regioncode .animation{position:relative;-webkit-animation:fade-in ease-in-out .5s;animation-name:fade-in;animation-timing-function:ease-in-out;animation-duration:.5s}@media screen and (-webkit-min-device-pixel-ratio:0){.login_user{display:-webkit-box;display:box}.turn_area,.country_list,.item_account{float:none}.item_account{-webkit-box-flex:1;box-flex:1}}.input_normal{width:100%}.lgncode{padding-bottom:14px}.lgncode .chkcode_img{*vertical-align:top}.code_label{float:left;*float:none;*display:inline-block;width:220px;margin-bottom:0}.code_label .code{width:190px}.code_label .placehld{width:190px}.chkcode_img{margin-left:10px;cursor:pointer}.btns_bg{padding-top:10px;padding-bottom:15px}.btnadpt{width:100%;height:50px;line-height:50px;display:block;margin-bottom:14px;text-align:center;font-size:14px;color:#fff;cursor:pointer}.btn_orange{background-color:#ef5b00}.btn_sns_icontype{background:url(https://account.xiaomi.com/static/res/166d6dc/account-static/respassport/acc-2014/img/icons_type.png);width:18px;height:18px;margin-right:10px;display:inline-block;vertical-align:middle}.btn_facebook{background-color:#3a5897}.btn_qq{background-color:#0288d1}.btn_weibo{background-color:#d32f2f}.btn_alipay{background-color:#0ae}.btn_weixin{background-color:#00d20d}.icon_default_qq{background-position:-19px 0}.icon_default_weibo{background-position:-38px 0}.icon_default_alipay{background-position:-57px 0;width:25px}.icon_default_weixin{background-position:-84px 0;width:23px}.oth_type_tit{border-top:1px solid #e0e0e0;padding-top:10px;padding-bottom:10px\9}.oth_type_txt{font-size:14px;color:#b0b0b0;margin:0 auto;text-align:center;width:100% \9}@media screen and (min-width:0\0){.oth_type_tit{padding-bottom:0}.oth_type_txt{width:auto}}.oth_type_links{padding-top:10px;text-align:center}.icon_type{width:30px;height:30px;margin:0 12px;display:inline-block;-webkit-border-radius:50%;-moz-border-radius:50%;-o-border-radius:50%;border-radius:50%;-webkit-filter:grayscale(100%);-moz-filter:grayscale(100%);-ms-filter:grayscale(100%);-o-filter:grayscale(100%);filter:grayscale(100%);filter:url(https://account.xiaomi.com/static/res/e5c6b4e/account-static/respassport/acc-2014/sass/gray.svg#grayscale)}.icon_type:hover{-webkit-filter:grayscale(0);-moz-filter:grayscale(0);-ms-filter:grayscale(0);-o-filter:grayscale(0);filter:grayscale(0);filter:none}.icon_type .btn_sns_icontype{display:block;margin:4px auto 0}.icon_type .icon_default_alipay{margin-top:6px;margin-left:4px}.icon_type .icon_default_weixin{margin-top:6px}.n_links_area{padding-top:30px;text-align:center;color:#e0e0e0}.n_links_area a{padding:0 9px;font-size:14px}.n_links_area a:hover{color:#ff6700}.site_info{padding-top:10px}.site_info_txt{color:#ff6700}.site_info_link{padding:0 5px}.country-container{width:100%;background:#fff;border:1px solid #e8e8e8;position:absolute;left:0;top:61px;z-index:98;display:none}.btn_commom_cancel{display:none}.country-code{height:280px;overflow-x:hidden;overflow-y:auto}.country-code .header{background:#fcdecc;padding:0 10px;margin-bottom:6px;line-height:30px;color:#ef5b00}.country-code .record{padding:0 10px;line-height:39px;overflow:hidden;border-bottom:1px solid #e0e0e0;cursor:pointer}.country-code .record:hover{background:#eaeaea}.country-code .record span{height:39px;overflow:hidden}.country-code .record-country{float:left;max-width:74%;color:#000;cursor:pointer}.country-code .record-code{float:right;max-width:20%;color:#9d9d9d}.country-code .code_style1{background:#f2f6e9;border:1px solid #b7ce8b}.country-code .code_style2{background:#f8f2ec;border:1px solid #fac084}.country-code .code_style3{background:#f9eaeb;border:1px solid #fca1a7}.country-code .code_style4{background:#f2f2f2;border:1px solid #c9c9c9}.country-code .code_style5{background:#e1f6f6;border:1px solid #73bade}.countrycode-container-usual .header{display:none}.countrycode-container-usual .list{zoom:1;*padding-bottom:10px}.countrycode-container-usual .list:before,.countrycode-container-usual .list:after{content:"";display:block}.countrycode-container-usual .list:after{clear:both}.countrycode-container-usual .record{float:left;margin:0 0 10px 10px;padding:6px 10px;line-height:20px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px}.countrycode-container-usual .record span{height:20px}.countrycode-container-usual .record:hover{background:0}.countrycode-container-usual .record-country{max-width:100%}.countrycode-container-usual .record-code{max-width:100%;display:none}.n-footer{height:80px;margin-top:-80px;text-align:center}.nf-intro{padding:10px}.nf-link-area{text-align:center}.nf-link-area li{display:inline-block;*display:inline;*zoom:1}.nf-link-area a{display:inline-block;*display:inline;*zoom:1;padding:0 10px;color:#757575}.nf-link-area a:hover,.nf-link-area a.current{color:#333}.faq_link a{padding:0 10px}.ercode_area{background-color:#fff;width:854px;margin:0 auto;display:none;position:relative;z-index:98}.ercode_box{width:600px;height:400px;position:absolute;left:50%;top:50%;margin-top:-200px;margin-left:-300px}.code_close{background-color:#bdbdbd;-webkit-border-radius:50%;-moz-border-radius:50%;-o-border-radius:50%;border-radius:50%;width:30px;height:30px;position:absolute;right:20px;top:20px}.icon_code_close{width:14px;height:14px;display:block;margin:8px auto 0;cursor:pointer}.code_hd{padding-bottom:50px;text-align:center}.code_tit{font-size:30px;color:#ff6700;font-weight:normal;padding-bottom:10px}.code_iframe{text-align:center}.ercode_container{background:#fff}.na-img-area{width:80px;height:80px;border:2px solid #e3e3e3;border-radius:50%;padding:4px;background:#fff;position:relative;z-index:4;margin:0 auto}.na-img-bg-area{width:100%;height:100%;border-radius:50%;overflow:hidden}.na-img-bg-area:empty{background:url(https://account.xiaomi.com/static/res/7c3e9b0/passport/acc-2014/img/n-avator-bg.png) 0 0 no-repeat}.na-img-area img{display:block;width:100%;height:100%;border-radius:50%}.single_imgarea{text-align:center;line-height:20px;font-size:14px;color:#333}.single_imgarea .us_name{padding-top:10px}.single_imgarea,.confirm_con{line-height:20px;font-size:14px;color:#333}.confirm_con{padding-top:15px}.confirm_con .txt{padding-bottom:5px}@-moz-document url-prefix(){.add_regioncode{width:100%;-moz-box-sizing:border-box;box-sizing:border-box}}.msk{width:100%;height:100%;background:#000;position:absolute;left:0;top:0;display:none;opacity:.4;filter:alpha(opacity=40)}.err_tip{margin-bottom:5px;line-height:20px;color:#f56700;display:none}.icon_error{background-position:0 -69px}.icon_error{width:14px;height:14px;margin:-1px 5px 0 0;overflow:hidden;display:inline-block;vertical-align:middle}.err_tip span{vertical-align:middle}.err_forbidden{padding:10px;border:1px solid #e0e0e0;line-height:1.5;background:#f5f5f5;color:#ff6700;display:none}.error_bg{border:1px solid #f56700 !important}@media only screen and (max-width:850px){.layout{width:100%;min-width:400px;min-height:480px}.mainbox{padding-bottom:15px}.header_tit{padding:25px 0 0}.header_tit_txt{font-size:22px;padding-top:15px}.btns_bg{padding-bottom:10px;padding-top:10px}.oth_type_links{padding-top:5px}.n_links_area{padding-top:0}}@-webkit-keyframes fade-in{from{left:-100%}to{left:0}}@-moz-keyframes fade-in{from{left:-100%}to{left:0}}@-o-keyframes fade-in{from{left:-100%}to{left:0}}@keyframes fade-in{from{left:-100%}to{left:0}}.search-code{padding:10px}.search-code-input{width:314px;height:22px;line-height:22px;padding:5px 10px 5px 10px;display:block;border:1px solid #e0e0e0}.search-mode .header,.search-mode .record{display:none}.search-mode .countrycode-container-usual .record,.search-mode .selected{display:block}.only_pwdlogin .ercode{display:none}.only_qrlogin .code_close,.only_qrlogin .code_hd{display:none}.only_qrlogin .ercode_box{width:auto;height:auto;position:static;margin:0;padding-top:100px\9}.only_qrlogin .ercode_pannel{width:100%;height:100%;display:-webkit-box;display:box;display:-moz-box;display:-o-box;-webkit-box-align:center;-moz-box-align:center;-o-box-align:center;box-align:center;-webkit-box-pack:center;-moz-box-pack:center;-o-box-pack:center;box-pack:center}@media screen and (min-width:0\0){.only_qrlogin .ercode_box{padding-top:100px}}.security_Controller{display:none}.checkbox_area{cursor:pointer}.checkbox{vertical-align:text-top;margin-right:3px}.security-controller-modal{width:400px;height:300px;left:50%;top:50%;margin-top:-150px;margin-left:-200px}.security_controller_panel{padding:30px 0 0 25px;line-height:22px}.security_controller_panel h4{color:#a1a1a1;padding-bottom:30px}.security_controller_panel p{color:#333}.security_controller_panel .tip_msg{color:#ff6700;padding:10px 0 0 30px}.tip_btns{padding-top:30px;text-align:center}.btn_tip{min-width:100px;_width:100px;height:33px;margin:0 2px;padding:0 10px;line-height:33px;text-align:center;display:inline-block;vertical-align:middle;cursor:pointer;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px}.btn_commom{background:#ff6700;border:1px solid #ff6700;color:#fff}.labelbox .security_controller_chk{width:320px;margin:2px;padding:11px 16px 11px 14px;border:1px solid #e0e0e0}.pwd-object{margin-bottom:14px}.nav_tabs_panel,.autologin_panel{display:none}.tabs_con{display:none}.tabs_con.now{display:block}.bgiframe{display:none}.win_banner_mistore{background:#fff}.win_banner_mistore .lgnheader,.win_banner_mistore .ercode{display:none}.win_banner_mistore .n-footer{background:#fff;margin-top:100px;position:relative}.win_banner_mistore .wrapper{display:block;min-height:auto}.win_banner_mistore .wrap{padding-bottom:0;position:relative;padding-top:0 \9}@media screen and (min-width:0\0){.win_banner_mistore .wrap{padding-top:0}}.win_banner_mistore .layout_panel,.win_banner_mistore .h_panel,.win_banner_mistore .login_banner{width:1130px;margin:0 auto}.win_banner_mistore .layout_panel{padding-top:130px}.win_banner_mistore .layout{width:400px;min-height:524px;margin-bottom:0;margin-right:0;font-size:14px}.win_banner_mistore .mainbox{padding-bottom:0}.win_banner_mistore .err_tip{color:#f56600}.win_banner_mistore .error_bg{border:1px solid #f56600 !important}.win_banner_mistore .login_area{width:338px;padding-bottom:0}.win_banner_mistore .labelbox input{width:306px}.win_banner_mistore .code_label{width:200px}.win_banner_mistore .code_label .code{width:170px}.win_banner_mistore .btnadpt{font-size:18px}.win_banner_mistore .btn_orange{background-color:#f56600}.win_banner_mistore .lgncode{padding-bottom:0;margin-bottom:14px}.win_banner_mistore .h_panel .h_logo{width:200px;height:98px;background:url(https://account.xiaomi.com/static/res/7f6f2f5/account-static/respassport/acc-2014/img/mistore_logo.png) no-repeat}.win_banner_mistore .login_banner_panel{background:#1e2f40;width:100%;min-height:588px;position:absolute;left:0;top:0}.win_banner_mistore .lbnr,.win_banner_mistore .rbnr{width:50%;height:100%;position:absolute}.win_banner_mistore .lbnr{background-color:#fef6eb;left:0}.win_banner_mistore .rbnr{background-color:#ef625b;left:50%}.win_banner_mistore .login_banner{height:588px;background:url(https://account.xiaomi.com/static/res/ab2708c/account-static/respassport/images/banner.jpg) no-repeat top center;position:relative}.win_banner_mistore .bgiframe{width:100%;height:100%;position:absolute;display:block}.win_banner_mistore .btns_bg{padding-bottom:3px}.win_banner_mistore .oth_type_links{padding-top:3px}.win_banner_mistore .icon_type{margin:0 17px}.win_banner_mistore .loginbox{position:relative}.win_banner_mistore .other_login_type{position:absolute;top:350px;width:100%}.win_banner_mistore .n_links_area{padding-top:0;color:#999}.win_banner_mistore .n_links_area a{padding:0 9px 0 6px;color:#999}.win_banner_mistore .n_links_area a:hover{color:#f56600}.win_banner_mistore .oth_type_txt{color:#bbb}.win_banner_mistore .err_forbidden{margin-bottom:10px}.win_banner_mistore .search-code-input{width:294px}.win_banner_mistore .add_regioncode .item_account{width:212px}.win_banner_mistore .nav_tabs_panel,.win_banner_mistore .autologin_panel{display:block}.win_banner_mistore .nav_tabs{padding:27px 0 24px;text-align:center;font-size:24px;color:#e0e0e0}.win_banner_mistore .nav_tabs a{color:#666}.win_banner_mistore .nav_tabs a:hover,.win_banner_mistore .nav_tabs a.now{color:#f56600}.win_banner_mistore .line{width:1px;height:24px;margin:0 35px 0 42px;border:1px solid #e0e0e0}.win_banner_mistore .tab_qrcon{text-align:center;padding-top:78px}.win_banner_mistore .custom_sub_txt{padding-top:14px;font-size:14px}.win_banner_mistore .custom_sub_txt span{padding:0 5px;color:#ff6700}
</style>


</body></html>