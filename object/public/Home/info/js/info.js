$("#add_gnum").click(function(){
	var dval = parseInt($("#gnum").val())+1;
	if(dval > 20){
		dval = 20;
		alert('哥，货不多了');
	}
	$("#gnum").val(dval);
	$("#sgnum").val(dval);
	var total = parseInt($(".price").html())*dval;
	$("#total").html(total);
	$("#sgprice").val(total);
});
$("#del_gnum").click(function(){
	var xval = parseInt($("#gnum").val())-1;
	if(parseInt(xval) < parseInt(1)){
		xval = 1;
	}
	$("#gnum").val(xval);
	$("#sgnum").val(xval);
	var zong = parseInt($(".price").html())*xval;
	$("#total").html(zong);
	$("#sgprice").val(zong);
});
$("#aa").hover(function(){
	$(this).css('border','3px solid #ff6722');
	$(this).css('border-radius','3px');
	$(this).css('background','#ff6700');
},function(){
	$(this).css('border','0');
	$(this).css('border-radius','0px');
	$(this).css('background','#ff6733');
});