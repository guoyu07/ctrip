// 应用地址定义
var APP = '/manage';
var statePic = {'lock':'/Public/img/status-0.gif','unlock':'/Public/img/status-1.gif','load':'/Public/img/status-2.gif'};
$(function(){
	$('#check_all').click(function(){
		var state = $(this).attr('checked');
		if(state){
			$(':input[name="id[]"]').attr('checked',true);
		}else{
			$(':input[name="id[]"]').attr('checked',false);
		}
	});
	$('.second_title a').click(function(){
		$(this).parents('.second_title').find('a').removeClass('curNode');
		$(this).addClass('curNode');
	});
	//数据源搜索
	$("#search_input").focus(function(){
		$serch = $("#search_input").val();
		this.style.color="#666";
		if($serch == "按网站名称或site查询"){
			this.value='';
		}
	});
	$("#search_input").blur( function () {
		$serch = $("#search_input").val();
		if($serch==""){
			this.value='按网站名称或site查询';
			this.style.color="#ccc";
		}
	}); 	
});

function menu(id){
	var obj = $('.menu li').eq(id);
	$('.menu li').attr('class','bg_image');
	obj.attr('class','bg_image_on');
	var t = obj.attr('rel');
	var cr = obj.attr('pel');
	$('#index_left').attr('src',APP+'/'+t+'/left');
	words = '';
	category = '';
	cap = cr; 
	order = 1;
	page = t;
	show_frame_main();
}

function show_frame_left(obj){
	var dis = $('#frame_left').css('display');
	var img_1 = '/Public/img/switch_left.gif';
	var img_2 = '/Public/img/switch_right.gif';
	if(dis == 'none'){
		$('#frame_left').show();
		$(obj).find('img').attr('src',img_1);
	}else{
		$('#frame_left').hide();
		$(obj).find('img').attr('src',img_2);
	}
}
function change_order(obj){
	window.parent.order = $(obj).val();
	if(window.parent.order == 2){
		window.parent.timeslot = '';
	}
	window.parent.show_frame_main();
}
function get_search(){
	words = $('.search_input').val();
	if(words != ''){
		show_frame_main();
	}else{
		alert('请输入搜索关键词！');
	}
}

function show_frame_main(){
	//if(page == 'User'){ var src = APP+'/User/main'}
	var src = APP+'/' + page + '/main';
	$('#index_main').attr('src',src);
}
function openNew(url){ 
	var NewInf= document.createElement('a'); 
	NewInf.setAttribute('href',url); 
	NewInf.setAttribute('target','_blank'); 
	document.body.appendChild(NewInf); 
	NewInf.click(); 
	document.body.removeChild(NewInf); 
}
//数据源搜索
function get_search1(url){
	var search = $('#search_input').val();
	if(search==""){
		alert('搜索条件不能为空!');
	}else{
		window.location.href = url+"?search="+search;
	}
}