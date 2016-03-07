/*
@功能：购物车页面js
@作者：diamondwang
@时间：2013年11月14日
*/

$(function(){
	
	//减少
	$(".reduce_num").click(function(){
		var _this=$(this);
		var amount = $(this).parent().find(".amount");
		if (parseInt($(amount).val()) <= 1){
			alert("商品数量最少为1");
		} else{
			var changto=parseInt($(amount).val()) - 1;
			
					$(amount).val(changto);
				
			
		}
		//小计
		var subtotal = parseFloat($(this).parent().parent().find(".col3").text()) * parseInt($(amount).val());
		$(this).parent().parent().find(".col5").text(subtotal.toFixed(2));
		//总计金额
		var total = 0;
		$(".col5").each(function(){
			total += parseFloat($(this).text());
		});

		$("#total h4").text(total.toFixed(2));
	});

	//增加
	$(".add_num").click(function(){
		var _this=$(this);
		var amount = $(this).parent().find(".amount");
		
		var changto=parseInt($(amount).val()) + 1;
		
					$(amount).val(changto);
				
		
		
		//小计
		var subtotal = parseFloat($(this).parent().parent().find(".col3").text()) * parseInt($(amount).val());
		$(this).parent().parent().find(".col5").text(subtotal.toFixed(2));
		//总计金额
		var total = 0;
		$(".col5").each(function(){
			total += parseFloat($(this).text());
		});

		$("#total h4").text(total.toFixed(2));
	});

	//直接输入
	$(".amount").blur(function(){
		if (parseInt($(this).val()) < 1){
			alert("商品数量最少为1");
			$(this).val(1);
		}
		//小计
		var subtotal = parseFloat($(this).parent().parent().find(".col3").text()) * parseInt($(this).val());
		$(this).parent().parent().find(".col5").text(subtotal.toFixed(2));
		//总计金额
		var total = 0;
		$(".col5").each(function(){
			total += parseFloat($(this).text());
		});

		$("#total h4").text(total.toFixed(2));

	});
});