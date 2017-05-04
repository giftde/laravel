$("#J_newAddress").click(function(){
    $("#newaddr").css('display','block');
});
$("#gaddr").hover(function(){
    $(this).css('background','#ff6700');
},function(){
    $(this).css('background','#eee');
}).click(function(){
    $("#newaddr").css('display','none');
    $("#from").prepend('收 货 人 :'+$("#consignee").val()+'<br>收货地址:');
    $("#shuor").html($("#consignee").val());
    $("#from").append($("#saddr").val()+'<br>');
    $("#shuoaddr").html($("#saddr").val());
    $("#from").append('联系方式:'+$("#consignee_phone").val());
    $("#shoutel").html($("#consignee_phone").val());
    $("#from").css('display','block');
    $("#un").css('display','block');
    $("#shrxm").val('');
    $("#shrxm").val($("#consignee").val());
    $("#shrdh").val('');
    $("#shrdh").val($("#consignee_phone").val());
    $("#shrdz").val('');
    $("#shrdz").val($("#site").val());
    $("#shdetail").val('');
    $("#shdetail").val($("#saddr").val());
});
$("#J_newAddress").click(function(){
    $(this).css('visibility','hidden');
    $("#newaddr").css("display","block");
        $.ajax({
            url:'/city.php',
            type:'post',
            async:true,
            data:{upid:0},
            dataType:'json',
            success:function(data)
            {
                // console.log(data);
                //遍历从数据库查出来的数据，生成option选项追加到select里
                for (var i = 0; i < data.length; i++) {
                    $('#cid').append("<option value="+data[i].id+" label="+data[i].name+">"+data[i].name+"</option>");
                };
            },
            error:function()
            {
                alert('ajax请求失败');
            }
        });
        //给所有的select标签绑定change事件
        $('select').live("change",function(){
            //干掉当前你选择的select标签后面的select标签
            $(this).nextAll('select').remove();
            //判断你选择是不是--请选择--
            if($(this).val() != '--请选择--'){
                //因为在ajax的回调函数中需要使用当前对象，但是$(this)在ajax的回调函数中用不了
                var ob = $(this);
                $.ajax({
                    url:'/city.php',
                    type:'post',
                    async:true,
                    data:{upid:$(this).val()},
                    dataType:'json',
                    success:function(data)
                    {
                        // console.log(data);
                        //判断是不是最后一级城市，最后一级城市查数据库length==0
                        if(data.length>0){
                            $("#from").html('');
                            //生成一个新的select标签
                            var select = $("<select name='site1[]' style='height:30px;width:75px;margin-bottom:8px;'><option>--请选择--</option></select>");
                            //遍历从数据库查出来的数据，生成option选项追加到select里
                            for (var i = 0; i < data.length; i++) {
                                $(select).append("<option value="+data[i].id+"label="+data[i].name+">"+data[i].name+"</option>");
                            };
                            //外部插入到前一个select后面
                            ob.after(select);
                        }else if(data.length == 0){
                            $("#from").html('');
                            $('#loca option:selected').each(function(){
                                if($(this).html() == '--请选择--'){
                                    $(this).html().remove();
                                }
                                var aa = $(this).html();
                                $('#from').append("<span> "+aa+"</span>");
                            });
                            var a = $("#from").text();
                            $("#site").val(a);
                        }
                    },
                    error:function()
                    {
                        alert('ajax请求失败');
                    }
                });
            }
        });
});
$("#consignee").blur(function(){
    if($(this).val() == ''){
        alert('请输入收货人姓名');
        $("#saddr").attr('disabled',true);
    }else{
        $("#saddr").removeAttr('disabled');
        $("#saddr").blur(function(){
            if($(this).val() == ''){
                alert('请填写具体收货地址.\n例如:清华苑4#1203');
            }else{
                $("#consignee_phone").blur(function(){
                    if($(this).val() == ''){
                        alert('收货人手机号不能为空');
                    }else{
                        if (!$(this).val().match(/(1[3-9]\d{9}$)/)){ 
                            alert("手机号码格式不正确！"); 
                        }else{
                            $("#submit").removeAttr('disabled');
                        }
                    }
                });
            }
        });
    }
});
$("#un").click(function(){
    $("#shuor").html('');
    $("#shuoaddr").html('');
    $("#shoutel").html('');
    $("#from").html('');
    $("#from").css('display','none');
    $(this).css('display','none');
    $("#J_newAddress").css('visibility','visible');
});
$(".uname").click(function(){
    $(this).parent().parent().parent().css('border','1px solid #ff6700');
    $(this).parent().parent().parent().siblings().css('border','1px solid #eee');
    $("#shuor").html('');
    $("#shuoaddr").html('');
    $("#shoutel").html('');
    $("#from").html('');
    $("#shuor").html($(this).text());
    $("#shoutel").html($(this).parent().next().text());
    $("#shrdh").val('');
    $("#shrdh").val($(this).parent().next().text());
    $("#shuoaddr").html($(this).parent().next().next().text());
    $("#shrdz").val('');
    $("#shrdz").val($(this).parent().next().next().text());
    $("#shrxm").val('');
    $("#shrxm").val($(this).text());
    $("#shdetail").val('');
    $("#shdetail").val($(this).parent().next().next().next().text());
    $("#shrdz").val('');
    $("#shrdz").val($(this).parent().next().next().text())
});
$("#invoice_title").blur(function(){
    $("#msg").val($(this).val());
});
$(".btn btn-primary").click(function(){
    alert(1111111);
});