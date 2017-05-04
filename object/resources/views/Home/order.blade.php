<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="UTF-8">
<title>填写订单信息</title>
<meta name="viewport" content="width=1226">
<link rel="shortcut icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('Home/ord/base.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Home/ord/checkout.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Home/ord/order.css') }}">
</head>
<body>
<div class="site-header site-mini-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo " href="{{ url('/home/mi') }}" title="小米官网" data-stat-id="ac576a29202325c4" ></a>
        </div>
        <div class="header-title" id="J_miniHeaderTitle"><h2>确认订单</h2></div>
        <div class="topbar-info" id="J_userInfo"><span class="user"><a><span class="name">{{ session('user')->uname }}</span><i class="iconfont"></i></a><ul class="user-menu"><li><a>个人中心</a></li><li><a>评价晒单</a></li><li><a>我的喜欢</a></li><li><a>小米账户</a></li><li><a>退出登录</a></li></ul></span><span class="sep">|</span><a>我的订单</a></div>
    </div>
</div>
<!-- .site-mini-header END -->
<script type="text/javascript" async="" src="{{ asset('Home/ord/unjcV2.js') }}"></script>
<script type="text/javascript" async="" src="{{ asset('Home/ord/mstr.js') }}"></script>
<script type="text/javascript" async="" src="{{ asset('Home/ord/jquery.js') }}"></script>
<script type="text/javascript" async="" src="{{ asset('Home/ord/order.js') }}"></script>
<script type="text/javascript" async="" src="{{ asset('Home/ord/xmst.js') }}"></script>
<div class="page-main">
    <div class="container">
        <div class="checkout-box">
            <div class="section section-address">
                <div class="section-header clearfix">
                    <h3 class="title">请选择收货地址</h3>
                    <div class="more"></div>
                    <div class="mitv-tips" id="J_mitvTips">
                        大型商品下单后，收货地址将无法修改。
                        <span>快递公司会电话联系您确认送货时间，收货时需核对身份证信息。</span>
                    </div>
                </div>
                <div class="section-body clearfix" id="J_addressList">
                    <!-- addresslist begin -->
                    @foreach($list as $l)
                    @if(session('user')->uid == $l->uid)
                    <div class="address-item J_addressItem">
                        <dl>
                            <dt>
                                <span class="tag"></span>
                                <em class="uname">{{ $l->consignee }}</em>
                            </dt>
                            <dd class="utel">{{ $l->consignee_phone }}</dd>
                            <dd class="uaddress">{{ $l->site }}<br></dd>
                            <dd class="uxaddr">{{ $l->detail }}</dd>
                        </dl>
                    </div>
                    @endif
                    @endforeach
                    <br>
                    <script type="text/javascript" src="{{ asset('/Home/info/js/jquery-1.8.3.min.js') }}"></script>
                    <div id="J_newAddress" style="clear:both;cursor:pointer;margin-left:20px;width:900px;height:40px;border:1px solid #ff6700;line-height:40px" onmouseover="$(this).css('background','#eee')" onmouseout="$(this).css('background','white')">
                        <i class="iconfont"></i>
                        使用新地址
                    </div>
                    <div id="from" style="border:1px solid #ff6700;height:85px;width:300px;display:none;margin-left:30px;">
                    </div>
                    <div id="un" style="margin-left:30px;height:18px;width:50px;border-radius:8px;background:#eee;position:absolute;cursor:pointer;display:none;text-align:center;font-size:14px;">取消</div>
                    <div id="shuor" style="display:none;"></div>
                    <div id="shuoaddr" style="display:none;"></div>
                    <div id="shoutel" style="display:none;"></div>
                    <div id="newaddr" style="position:absolute;height:300px;width:500px;background:white;border:5px solid #ff6700;border-radius:10px;z-index:10;margin-left:300px;top:150px;display:none;z-index:20;">
                        <div style="margin-top:50px;margin-left:80px;">
                            <form action="{{ url('/home/order/addr') }}" method="post" id="loca" onsubmit="return false">
                                {{ csrf_field() }}
                                收 货 人 ：<input type="text" id="consignee" name="consignee" placeholder="请输入收货人姓名" style="margin-bottom:-3px;width:300px;height:30px;"><br><br>
                                所在地区：<select id='cid' name='site[]' style="height:30px;width:75px;margin-bottom:11px;">
                                    <option>--请选择--</option>
                                </select><br>
                                详细地址：<input type="text" name="detail" id="saddr" placeholder="请填写详细信息,具体到门牌号" style="margin-bottom:11px;height:30px;width:300px;"><br>
                                手机号码：<input type="text" id="consignee_phone" name="consignee_phone" placeholder="请输入手机号码" style="width:300px;height:30px;">
                                
                                <input type="hidden" name="default" id="default" value="2">
                                <input type="hidden" name="uid" id="userid" value="{{ session('user')->uid }}">
                                <input type="hidden" name="site" id="site" value="">
                                <div id="gaddr">确定</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section section-options section-payment clearfix">
                <div class="section-header">
                    <h3 class="title">支付方式</h3>
                </div>
                <div class="section-body clearfix">
                    <ul class="J_optionList options "><li data-type="pay" class="J_option selected" data-value="1">在线支付 <span>（支持微信支付、支付宝、银联、财付通、小米钱包等）</span></li></ul>
                </div>
            </div>
            <div class="section section-options section-time clearfix">
                <div class="section-header">
                    <h3 class="title">配送时间</h3>
                </div>
                <div class="section-body clearfix">
                    <ul class="J_optionList options options-list clearfix">
                        <!-- besttime start -->
                        <li data-type="time" class="J_option selected" data-value="1">
                            24小时全天服务
                        </li>
                                                <!-- besttime end -->
                    </ul>
                </div>
            </div>

            <div class="section section-options section-invoice clearfix">
                <div class="section-header">
                    <h3 class="title">发票</h3>
                </div>
                <div class="section-body clearfix">
                    <ul class="J_optionList options options-list  J_tabSwitch clearfix">
                        <li data-type="invoice" data-invoice-type="not_invoice" class="hide J_option">
                            不开发票
                        </li>
                        <li data-type="invoice" data-invoice-type="electron" class="J_option tab-active selected" data-value="4">
                            电子发票（非纸质）
                        </li>
                        <li data-type="invoice" data-invoice-type="personal" class="J_option" id="J_paperInvoice" data-value="1">
                            普通发票（纸质）
                        </li>
                    </ul>

                    <div class="paper-invoice-company" id="J_invoiceTitleBox">
                        <div class="form-section form-section-active form-section-valid">
                            <label class="input-label" for="invoice_title">订单备注</label>
                            <input class="input-text" id="invoice_title" value="个人" name="invoice_title" type="text">
                        </div>
                        <p>发票内容：购买商品明细</p>
                    </div>
                    <div class="tab-container">
                        <div class="tab-content hide" style="display: none;"></div>
                        <div class="tab-content e-invoice-detail" style="z-index:1">
                            电子发票法律效力、基本用途及使用规定同纸质发票。不随商品寄送。<a href="javascript:void(0);" id="J_showEinvoiceDetail" data-stat-id="b762af4a94c60517" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-b762af4a94c60517', 'javascript:void0', 'pcpid', '']);">什么是电子发票 <i class="icon-qa">?</i></a>
                            <div class="e-invoice-qa hide" id="J_einvoiceDetail">
                                <ul>
                                    <li>感谢您选择电子发票，电子发票是税局认可的有效付款凭证，其法律效力、基本用户及使用规定同纸质发票，可作为用户维权、保修的有效凭据。如需纸质发票可自行下载打印；</li>
                                    <li>您在订单详情的"发票信息"栏可查看、下载您的电子发票。</li>
                                </ul>
                                <a href="http://bbs.xiaomi.cn/thread/index/tid/9385999" target="_blank" data-stat-id="14af91c0b7aa7105" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-14af91c0b7aa7105', 'http://bbs.xiaomi.cn/thread/index/tid/9385999', 'pcpid', '']);">了解详情&gt;</a>
                            </div>
                        </div>

                        <div class="tab-content hide paper-invoice-detail" style="display: none;">
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-count clearfix">
                <div class="count-actions">
                    <!-- 优惠券 -->
                    <div class="coupon-result hide" id="J_couponResult">
                        <i class="iconfont icon-selected"></i>
                        正在使用：<span class="coupon-title" id="J_couponTitle"></span>
                        <a href="javascript:void(0)" id="J_changeConpon" data-stat-id="7b9283c91a59046e" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-7b9283c91a59046e', 'javascript:void0', 'pcpid', '']);">［修改］</a>
                    </div>
                    <div class="coupon-box hide" id="J_couponBox">
                        <ul class="clearfix tab-switch J_tabSwitch">
                            <li class="tab-active">选择优惠券</li>
                            <li>输入优惠券码</li>
                        </ul>
                        <div class="tab-container">
                            <div class="tab-content list-content">
                                <p class="coupon-empty">您暂时没有可用的优惠券</p>
                            </div>
                            <div class="tab-content code-content hide" style="display: none;">
                                <div class="form-section">
                                    <label class="input-label" for="coupon_code">请输入优惠券码</label>
                                    <input class="input-text" id="coupon_code" name="coupon_code" type="text">
                                </div>
                                <div class="coupon-confirm">
                                    <a href="javascript:void(0);" class="btn btn-primary" id="J_useCouponCode" data-stat-id="297cea4ecec77455" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-297cea4ecec77455', 'javascript:void0', 'pcpid', '']);">立即使用</a>
                                    <a href="javascript:void(0);" class="btn btn-gray J_couponCancel" data-stat-id="6d289142415d37bb" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-6d289142415d37bb', 'javascript:void0', 'pcpid', '']);">不使用优惠券</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($gid as $g)
                        @foreach($good as $gs)
                        @if($g == $gs->id)
                            <div style="height:110px;width:360px;border:1px solid #ff6700;float:left;">
                                <div style="height:80px;width:80px;float:left;margin-right:30px"><span style="color:#FF6700"> 商品图片</span><img src="{{ asset('Admin/upload/'.$gs->pic) }}" height="80" width="80"></div>
                                <div style="height:100px;width:230px;float:left;padding-left: 10px">
                                    <span style="color:#FF6700">商品情况&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>{{ $gs->name }}<br>
                                    <span style="color:#ff6700;">商品单价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>{{ '￥'.$gs->price.'.00' }}<br>
                                    <div style="margin-left:80px;color:gray;height:40px;overflow:hidden;">
                                        <span style="margin-left:-80px;margin-right:20px;color:#ff6700;">商品说明</span>
                                      {{ $gs->explain }}
                                    </div>
                                    <div style="height:80px;float:left;"><span style="color:#FF6700">订单状况:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>待付款</div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    @endforeach
                    <div class="ecard-box hide" id="J_ecardBox">
                        <ul class="clearfix tab-switch J_tabSwitch">
                            <li>已绑定的礼品卡</li>
                            <li>输入礼品卡以绑定</li>
                        </ul>
                        <div class="tab-container">
                            <!-- 选卡 -->
                            <div class="tab-content ecard-list">
                                <div class="empty hide" id="J_ecardEmpty">
                                    <p>没有发现可用的礼品卡！</p>
                                    <a href="javascript:void(0);" class="btn btn-gray J_ecardCancel" data-stat-id="36d079d30c12a56a" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-36d079d30c12a56a', 'javascript:void0', 'pcpid', '']);">取消</a>
                                </div>
                                <div class="hide">
                                    <div id="J_ecardList">
                                    </div>
                                    <div class="ecard-info" id="J_ecardInfo"></div>
                                    <div class="btns">
                                        <a href="javascript:void(0);" class="btn btn-primary" id="J_useSelEcard" data-stat-id="d5fd21d5e57e6840" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-d5fd21d5e57e6840', 'javascript:void0', 'pcpid', '']);">确认以上选择</a>
                                        <a href="javascript:void(0);" class="btn btn-gray J_ecardCancel" data-stat-id="4c1f4b133dd2305c" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-4c1f4b133dd2305c', 'javascript:void0', 'pcpid', '']);">取消 不使用礼品卡</a>
                                    </div>
                                </div>
                            </div>

                            <!-- 绑卡 -->
                            <div class="tab-content ecard-input hide">
                                <div class="form-section">
                                    <span class="input-title">密码：</span>
                                    <!-- <label class="input-label" for="ecard_password">请输入礼品卡密码</label> -->
                                    <input class="input-text input-card" id="ecard_password" name="ecard_password" placeholder="请输入礼品卡密码" type="text">
                                </div>
                                <div class="form-section clearfix">
                                    <span class="input-title">验证码：</span>
                                    <!-- <label class="input-label" for="ecard_captcha">请输入验证码</label> -->
                                    <input class="input-text input-captcha" id="ecard_captcha" placeholder="请输入验证码" name="ecard_captcha" data-authurl="//captcha.hd.mi.com/captcha/auth?answer={answer}&amp;service=order.mi.com&amp;_ov=1" type="text">
                                    <div class="captcha-img">
                                        <img alt="验证码" title="点击更换验证码" id="J_ecardCaptchaImg">
                                    </div>
                                </div>
                                <div class="form-section form-btns">
                                    <button class="btn btn-primary" id="J_bindEcard">绑定礼品卡</button>
                                    <button class="btn btn-gray J_ecardCancel">取消</button>
                                </div>
                            </div>
                        </div>

                        <div class="recycle-box hide" id="J_recycleBox">
                            <div class="ecard-list recycle-list">
                                <div id="J_recycleList"> <div class="table-wrapper"> <ul class="clearfix"> <li class="col-1">选择</li>  <li class="col-2">券号</li>  <li class="col-3">本次使用（元）</li> <li class="col-4">余额（元）</li>  </ul>  <div>  <table> <tbody>  </tbody> </table> </div> </div></div>
                                <div class="ecard-info" id="J_recycleInfo"></div>
                                <div class="btns">
                                    <a href="javascript:void(0);" class="btn btn-primary" id="J_useSelRecycle" data-stat-id="da30e0a9f75cd8d0" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-da30e0a9f75cd8d0', 'javascript:void0', 'pcpid', '']);">确认以上选择</a>
                                    <a href="javascript:void(0);" class="btn btn-gray J_recycleCancel" data-stat-id="eb0b5ff4954390a0" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-eb0b5ff4954390a0', 'javascript:void0', 'pcpid', '']);">取消 不使用换新券</a>
                                </div>
                            </div>
                        </div>

                        <div class="sms-box hide" id="J_ecardSmsBox">
                            <div class="title">已向您绑定的手机<span id="J_ecardMobile">（135****6910）</span>发送验证码 <i class="icon-qa" id="J_ecardQa">?</i></div>
                            <div class="form-section clearfix">
                                <label class="input-label" for="ecard_sms">请输入验证码</label>
                                <input class="input-text input-ecard" id="ecard_sms" name="ecard_sms" type="text">
                                <span id="J_smsCountdown" class="countdown hide"><i></i>秒后重新发送</span>
                                <a href="javascript:void(0);" class="repeat hide" id="J_repeatSms" data-stat-id="14a950bda2abbe33" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-14a950bda2abbe33', 'javascript:void0', 'pcpid', '']);">重新发送</a>
                            </div>
                            <div class="form-section form-btns">
                                <button class="btn btn-primary" id="J_checkEcardSms">确定</button>
                                <button class="btn btn-gray" id="J_cancelEcardSms">取消</button>
                            </div>
                            <div class="qa-detail hide" id="J_ecardQaDetail">
                                为保证您的资金安全，消费时需通过绑定手机的认证。若您绑定的手机号已变更，可前往小米账号中心修改绑定的手机号，如果原来的手机号已无法使用，可通过申诉的方式更换手机号。<a href="https://account.xiaomi.com/pass/auth/security/home" target="_blank" data-stat-id="23e4550b3720dcde" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-23e4550b3720dcde', 'https://account.xiaomi.com/pass/auth/security/home', 'pcpid', '']);">前往小米账号中心&gt;</a>
                            </div>
                        </div>

                        <div class="loading hide">
                            <div class="loader"></div>
                        </div>
                    </div>

                    <!-- 加价购 -->
                    <div class="raise-buy-box">
                        <ul id="J_raiseBuyList">
                            
                            <!--S 保障计划 产品选择弹框 -->
                                                        <!--E 保障计划 产品选择弹框 -->
                        </ul>
                    </div>
                </div>

                <div class="money-box" id="J_moneyBox" style="position:absolute;margin-bottom:55px;">
                    <ul>
                        <li class="clearfix">
                            <label>商品件数：</label>
                            <span class="val">{{ $ob['goodsnum'] }}件</span>
                        </li>
                        <li class="clearfix">
                            <label>金额合计：</label>
                            <span class="val">{{ $ob['total'] }}元</span>
                        </li>
                        <li class="clearfix">
                            <label>活动优惠：</label>
                            <span class="val">-0元</span>
                        </li>
                        <li class="clearfix">
                            <label>优惠券抵扣：</label>
                            <span class="val"><i id="J_couponVal">-0</i>元</span>
                        </li>
                                                <li class="clearfix">
                            <label>运费：</label>
                            <span class="val"><i data-id="J_postageVal">0</i>元</span>
                        </li>
                        <li class="clearfix total-price">
                            <label>应付总额：</label>
                            <span class="val"><em data-id="J_totalPrice">{{ $ob['total'] }}</em>元</span>
                        </li>
                    </ul>
            </div>

            <div class="section-bar clearfix">
                <div class="fl">
                    <div class="seleced-address" id="J_confirmAddress"><a href="javascript:void(0);" class="modify J_modify"></a></div>
                    <div class="big-pro-tip hide J_confirmBigProTip"></div>
                </div>
                <form action="{{ url('/home/pay') }}" method="post" id="myform" onsubmit="return false">
                     {{ csrf_field() }}
                    <input type="hidden" name="total" value="{{ $ob['total'] }}">
                    <input type="hidden" name="gid" value="{{ $ob['gid'] }}">
                    @foreach($good as $g)
                        @if($g->id == $ob['gid'])
                    <input type="hidden" name="goodspic" value="{{ $ob['goodspic'] }}">
                        @endif
                    @endforeach
                    <input type="hidden" name="uid" value="{{ session('user')->uid }}">
                    <input type="hidden" name="consignee" id="shrxm" value="">
                    <input type="hidden" name="consignee_phone" id="shrdh" value="">
                    <input type="hidden" name="default" value="2">
                    <input type="hidden" name="detail" id="shdetail" value="">
                    <input type="hidden" name="goodsnum" value="{{ $ob['goodsnum'] }}">
                    <input type="hidden" name="goodsname" value="{{ $ob['goodsname'] }}">
                    <input type="hidden" name="username" value="{{ $ob['username'] }}">
                    <input type="hidden" name="msg" id="msg">
                    <input type="hidden" name="price" value="{{ $ob['total'] }}">
                    <input type="hidden" name="state" value="{{ $ob['state'] }}">
                    <input type="hidden" name="site" id="shrdz" value="">
                    <input type="submit" value="立即下单" id="jdd" class="btn btn-primary" style="float:right;margin-top:190px;margin-left:180px;"> 
                </form>     
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#jdd").click(function(){
        if($(this).prev().val() == ''){
            alert('请选择收货地址');
            return false;
        }else{
            $("#myform").attr('onsubmit','return ture');
            return true;
        }
    });
</script>
<!--  预售提示 E-->

<div class="modal fade modal-hide modal-edit-address" id="J_modalEditAddress">
    <div class="modal-body">
        <iframe allowfullscreen="" width="100%" height="100%" frameborder="0"></iframe>
    </div>
</div>

<div class="modal fade modal-hide fade modal-alert" id="J_modalAlert">
    <div class="modal-bd">
        <div class="text">
            <h3 id="J_alertMsg"></h3>
        </div>
        <div class="actions">
            <button class="btn btn-primary" data-dismiss="modal">确定</button>
        </div>
        <a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="b718c74de11bb9a0" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-b718c74de11bb9a0', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
    </div>
</div>

<div class="address-top-bar" id="J_addressTopBar">
    <div class="container">
        <a href="javascript:void(0);" class="btn btn-primary" id="J_addressTopBarBtn" data-stat-id="0263b2497800ada5" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-0263b2497800ada5', 'javascript:void0', 'pcpid', '']);">选择该收货地址</a>
        <div class="content" id="J_addressTopCon"><span class="uname">姚小州</span><span class="utel">136****1057</span> 北京 北京市 东城区 天安门门口</div>
    </div>
</div>


<div class="modal modal-warning modal-hide" id="warning-bargain-1463">
    <div class="modal-hd">
        <h2 class="title">温馨提示</h2>
        <a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="bdb508f1f15790d3" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-bdb508f1f15790d3', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
    </div>
    <div class="modal-bd">
        <p>
            <b>换卡说明：</b>
            <br><br>移动2G / 3G卡升级为移动4G卡
            <br>传统SIM大卡换小米手机适配的micro卡
        </p>
    </div>
</div>

<div class="modal modal-warning modal-hide" id="warning-bargain-1464">
    <div class="modal-hd">
        <h2 class="title">温馨提示</h2>
        <a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="bdb508f1f15790d3" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-bdb508f1f15790d3', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
    </div>
    <div class="modal-bd">
        <p>
            <b>换卡说明：</b>
            <br><br>移动2G / 3G卡升级为移动4G卡
            <br>传统SIM大卡换小米手机适配的nano卡
        </p>
    </div>
</div>

<!-- 保险弹窗 -->
<!-- 保险弹窗 -->

<div class="modal in hide modal-baoxian" id="J_baoxian">
    <div class="modal-header">
        <h3>小米意外保障服务/小米意外损坏保险</h3>
        <span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
    </div>
    <div class="modal-body">
        <div class="con-1">
            <h4>购买保障服务/保险的设备在意外受损时可获得免费维修或换新</h4>
            <ul class="icon-list clearfix">
                <li>
                    <span class="icon icon-1"></span>
                    屏幕碎裂免费换新屏
                </li>
                <li>
                    <span class="icon icon-2"></span>
                    进水、摔落免费修
                </li>
                <li>
                    <span class="icon icon-3"></span>
                    修好为止
                </li>
            </ul>
            <dl class="xuzhi">
                <dt>为保障您的权益，购买前请仔细阅读：</dt>
                <dd>· 本保障服务/保险目前仅适用于有限的产品类型，不同产品的保障规则会有所差异，请以详细条款为准；</dd>
                <dd>· 本保障服务/保险自您收到设备起，有效期为一年，若您在收到设备7日内取消保障服务/保险，请连同设备一起申请退货。</dd>
                <dd>· 故意行为导致的设备损坏以及盗窃、抢劫、遗失设备等不在服务保障范围内（具体以详细条款为准）。<br>
                    <a href="http://www.mi.com/service/safe" target="_blank" class="J_baoxianMore" data-stat-id="13d65618f9fdb846" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-13d65618f9fdb846', 'http://www.mi.com/service/safe', 'pcpid', '']);">阅读详细条款&gt;</a>
                </dd>
            </dl>
        </div>
    </div>
    <div class="modal-footer clearfix">
        <p>
            <span class="J_baoxianAgree"><i class="iconfont icon-checkbox">√</i> 我已经阅读并同意</span>《<a href="http://www.mi.com/service/safe" target="_blank" class="J_baoxianMore" data-stat-id="7013efcb9afc718b" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-7013efcb9afc718b', 'http://www.mi.com/service/safe', 'pcpid', '']);">详细条款</a>》
        </p>
        <a class="btn btn-primary J_buyBaoxian" data-stat-id="ee4f02aededb8e5a" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-ee4f02aededb8e5a', '', 'pcpid', '']);"><span class="num"></span>确认并购买</a>
        <a class="btn btn-gray" data-dismiss="modal" aria-hidden="true" data-stat-id="821a98207fa653c1" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-821a98207fa653c1', '', 'pcpid', '']);">取消</a>
    </div>
</div>

<script id="J_checkoutMoneyTemplate" type="text/x-dot-template">
    <ul>
        <li class="clearfix">
            <label>商品件数：</label>
            <span class="val">件</span>
        </li>
        <li class="clearfix">
            <label>商品总价：</label>
            <span class="val">元</span>
        </li>
       
        <li class="clearfix">
            <label>券卡支付：</label>
            <span class="val">元</span>
        </li>
       
        <li class="clearfix">
            <label>活动优惠：</label>
            <span class="val">元</span>
        </li>
        <li class="clearfix">
            <label>运费：</label>
            <span class="val">包邮</span>
        </li>
        <li class="clearfix total-price">
            <label>应付总额：</label>
            <span class="val"><em data-id="J_totalPrice"></em>元</span>
        </li>
    </ul>
</script>
<!--结算提示 -->
<script id="J_tipGoodsTemplate" type="text/x-dot-template">
    <div class="modal fade modal-hide  modal-tip-goods" id="J_modalTipGoods" >
    <div class="modal-hd">
        <h3 class="title"></h3>
        <a class="close" data-dismiss="modal"  href="javascript: void(0);"><i class="iconfont">&#xe602;</i></a>
    </div>
    <div class="modal-ft">
        <a href="//static.mi.com/cart/" class="btn btn-primary" >返回购物车</a>
    </div>
</div>
</script>

<!-- 购物卡列表 -->
<script id="J_ecardTemplate" type="text/x-dot-template">
    <div class="table-wrapper">
        <ul class="clearfix">
            <li class="col-1">选择</li>
                <li class="col-2">券号</li>
                <li class="col-2">卡号</li>
            <li class="col-3">本次使用（元）</li>
            <li class="col-4">余额（元）</li>
                <li class="col-5">有效期至</li> 
        </ul>
        <div class="table-scroll">
    </div>
</script>
<div class="site-footer" style="background: #fff">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/weixiu.png') }}" width="25" height="20" style="padding-top: 2px"> 预约维修服务</a></li>
                <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/7.png') }}" width="25" height="20">7天无理由退货</a></li>
                <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/15.png') }}" width="25" height="20">15天免费换货</a></li>
                <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/gift.png') }}" width="25" height="20">满150元包邮</a></li>
                <li><a rel="nofollow" href="" target="_blank"><img src="{{ asset('Home/main/img/dizhi.png') }}" width="25" height="20">520余家售后网点</a></li>
            </ul>
        </div>
        <div class="footer-links clearfix">
            
            <dl class="col-links col-links-first">
                <dt>帮助中心</dt>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="e5dad0738a41014f" >账户管理</a></dd>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="8e128f473e680197" >购物指南</a></dd>
                
                <dd><a rel="nofollow"  target="_blank" data-stat-id="fd9e3532f60a2f8d" >订单操作</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>服务支持</dt>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="8e282b6f669ba990" >售后政策</a></dd>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="5f2408ab3c808aa2" o>自助服务</a></dd>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="18c340c920a278a1" >相关下载</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>线下门店</dt>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="b27b566974e4aa67" >小米之家</a></dd>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="6dab396f7a873f15">服务网点</a></dd>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="9af5efe014c3aea2" >零售网点</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关于小米</dt>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="f6d386c65b1f4132" >了解小米</a></dd>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="4307a445f5592adb" >加入小米</a></dd>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="6842e821365ee45d" >联系我们</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关注我们</dt>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="4d561ee685cd2e15" >新浪微博</a></dd>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="78fdefa9dee561b5" >小米部落</a></dd>
                
                <dd><a rel="nofollow" href="" data-toggle="modal" data-stat-id="47539f6570f0da90" >官方微信</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>特色服务</dt>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="fdc16dd51892a164">F 码通道</a></dd>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="835607e3820935bb" >礼物码</a></dd>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="b08be6bd51351e1a" >防伪查询</a></dd>
                
            </dl>
                
            <div class="col-contact">
                <p class="phone">400-100-5678</p>
<p><span class="J_serviceTime-normal" style="
">周一至周日 8:00-18:00</span>
<span class="J_serviceTime-holiday" style="display:none;">1月27日至2月2日服务时间 9:00-18:00</span><br>（仅收市话费）</p>
<a rel="nofollow" class="btn btn-line-primary btn-small" href="" target="_blank" data-stat-id="a7642f0a3475d686" ><i class="iconfont"></i> 24小时在线客服</a>            </div>
        </div>
    </div>
</div>
<div class="site-info">
    <div class="container">
        <div class="logo ir">小米官网</div>
        <div class="info-text">
            <p class="sites"><a rel="nofollow" href="" target="_blank" data-stat-id="b9017a4e9e9eefe3" >小米商城</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="ed2a0e25c8b0ca2f" >MIUI</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="826b32c1478a98d5" >米聊</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="c9d2af1ad828a834" >多看书城</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="96f1a8cecc909af2" >小米路由器</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="347f6dd0d8d9fda3" >视频电话</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="dfe0fac59cfb15d9" >小米天猫店</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="c2613d0d3b77ddff" >小米淘宝直营店</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="2f48f953961c637d">小米网盟</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="f7ea7880c49b687e" >小米移动</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank" data-stat-id="c7ef95929d60f3f1" >隐私政策</a><span class="sep">|</span><a rel="nofollow" href="" data-toggle="modal" data-stat-id="9db137a8e0d5b3dd" >Select Region</a>            </p>
            <p>©<a href="" target="_blank" title="mi.com" data-stat-id="836cacd9ca5b75dd" o>mi.com</a> 京ICP证110507号 <a href=" target="_blank" rel="nofollow" data-stat-id="f96685804376361a" >京ICP备10046444号</a> <a rel="nofollow" href="" target="_blank" data-stat-id="57efc92272d4336b" >京公网安备11010802020134号 </a><a rel="nofollow" href="" target="_blank" data-stat-id="c5f81675b79eb130" >京网文[2014]0059-0009号</a>

<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
        </div>
        <div class="info-links">
                    <a rel="nofollow"  target="_blank" data-stat-id="de920be99941f792" ><img  src="{{ asset('Home/car/images/truste.png') }}" alt="TRUSTe Privacy Certification"></a>
                    <a rel="nofollow" href="" target="_blank" data-stat-id="d44905018f8d7096" ><img  src="{{ asset('Home/car/images/v-logo-2.png') }}" alt="诚信网站"></a>
                    <a rel="nofollow" href="" target="_blank" data-stat-id="3e1533699f264eac" ><img rel="nofollow" src="{{ asset('Home/car/images/v-logo-1.png') }}" alt="可信网站"></a>
                    <a rel="nofollow" href="" target="_blank" data-stat-id="b085e50c7ec83104" ><img rel="nofollow" src="{{ asset('Home/car/images/v-logo-3.png') }}" alt="网上交易保障中心"></a>
                </div>
    </div>
    <div class="slogan ir">探索黑科技，小米为发烧而生</div>
</div>
<div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
        <div class="modal-hd">
            <a class="close" data-dismiss="modal" data-stat-id="cfd3189b8a874ba4" ><i class="iconfont"></i></a>
            <span class="title">小米手机官方微信二维码</span>
        </div>
        <div class="modal-bd">
            <img alt="" src="{{ asset('Home/car/images/site-weixin.png') }}" width="680" height="340">
        </div>
    </div>
</body>
</html>
