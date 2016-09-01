$(document).ready(function(){
	var num,i=0;
	num = $("#mes-main").children().length;
	console.log(num);
	
	//$("#mes-main").children("a").eq(1).html();
	window.setInterval(function mes_ani(){
		console.log(i);
		$("#mes-main").children("a").eq(i).css("display","block");
		$("#mes-main").children("a").eq(i).animate({
			opacity:"1"
		},1400)
		$("#mes-main").children("a").eq(i).animate({
			opacity:"0",
		},1400,function(){
			$("#mes-main").children("a").eq(i).css("display","none");
			if(i == num){ i = 0;}
			else{ i++};
		})
		
		
	},3000)
})