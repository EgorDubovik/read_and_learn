var api_key = "trnsl.1.1.20190915T003556Z.59df2ad7aad1df77.c5e6a093b9d0d58d90554dee74a7e386e7ae01a5";
var url = "https://translate.yandex.net/api/v1.5/tr.json/translate";

function add_text_to_page(block){
	// var text_array = block.html().split(" ");
	// var new_text = "";
	// for (var i = 0; i <= text_array.length - 1; i++) {
	// 	new_text +="<span class='word'>"+text_array[i]+"</span> ";
	// }
	// $('.cont_text').html(new_text);
	$('.cont_text span.word').click(function(event){
		var w = $(this).text();
		popup.show(event.clientX,event.clientY);
		popup.show_loading();
		translate(w,function(json){
			console.log(json);
			popup.add_i(json,w,event.clientX,event.clientY);
			popup.hide_loading();
		});
	});
	$('.close_popup').click(function(){
		popup.hide();
	});
}

function translate(w,callback){

	var xhr = new XMLHttpRequest(),
        data = "key="+api_key+"&text="+w+"&lang=en-ru";
    xhr.open("POST",url,true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send(data);
    xhr.onreadystatechange = function() {
        if (this.readyState==4 && this.status==200) {
            var res = this.responseText;
            var json = JSON.parse(res);
            callback(json);
        } else {
        	callback({"code":405});
        }
    }
}	

var popup = {
	p : $("#popup"),
	show : function(x,y){
		$('.close_popup').show();
		this.center_p(x,y);
		$("#popup").show();
	},
	hide : function(){
		$('#popup').hide();
		$('.close_popup').hide();
	},
	add_i : function(res,w,x,y){
		$('.general_w').html(w);
		if(res.code == 200){
			$('.translate_w').html(res.text[0]);
			this.center_p(x,y);
		}
	},
	show_loading : function(){
		$('.cont_svg').show();
		$('.information_c').hide();
	},
	hide_loading : function(){
		$('.cont_svg').hide();
		$('.information_c').show();
	},
	center_p : function(x,y){
		console.log("center");
		var wi = $('#popup').outerWidth();
		var hi = $('#popup').outerHeight();
		var new_left = x-(wi/2);
		new_left = (new_left>10) ? new_left : 10;
		var new_top = y-hi;
		new_top = (new_top>10) ? new_top : 10;
		$('#popup').css({"left":new_left,"top":new_top});
	}
}

function add_popup(x,y,w){
	var popup = $("#popup");
	popup.css({"left":x,"top":y}).html(w);
}

