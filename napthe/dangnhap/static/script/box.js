var iframediv = {
	id:Math.random(),
	ref:'',

	show:function(file,param){		
		var p = document.createElement('DIV');
		p.id=this.id;
		var scrollWidth = document.documentElement.scrollWidth || document.body.scrollWidth;
		var scrollHeight = document.documentElement.scrollHeight || document.body.scrollHeight;
		p.style.cssText = "z-index:999999;width:"+scrollWidth+"px;height:"+scrollHeight+"px;position:absolute;left:0;top:0;background-color:#666;filter:alpha(opacity=80);-moz-opacity:0.8;opacity:0.8;";
		document.body.appendChild(p);		
		var p1=document.createElement("DIV");		
		p1.id="loginBox"+this.id;
		p1.style.cssText = "z-index:9999999;width:600px;position:absolute;top:0;";
		document.body.appendChild(p1);
		var query = 'dangnhap.php';
		if( !param['returl'] ) param['returl'] = top.location.href;			
		var leftpx = '524px';

		p1.innerHTML = '<iframe width="588px" height="434px" marginWidth=0 marginHeight=0 frameBorder=0 width="100%" scrolling="no" allowTransparency="true" src="'+query+'"></iframe><a style="position:absolute;left:'+leftpx+';top:25px;height:40px;width:40px;background-color:#ffffff; filter:alpha(opacity=0);-moz-opacity:0;opacity:0;" href="javascript:closeIframediv()" title="close" class="closebox">&nbsp;</a>';	
		this.iframescroll();
	},

	iframescroll:function(){
		if(!document.getElementById("loginBox"+this.id) ) return;		
		//é«˜åº¦
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
		var offsetTop = document.getElementById("loginBox"+this.id).offsetHeight;
		var clientHeight = document.body.clientHeight < document.documentElement.clientHeight?document.body.clientHeight: document.documentElement.clientHeight;
		document.getElementById("loginBox"+this.id).style.top = (parseInt(clientHeight)-parseInt(offsetTop))*0.5 + parseInt(scrollTop)+"px";
		//å®½åº¦
		var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft || 0;
		var offsetLeft = document.getElementById("loginBox"+this.id).offsetWidth;
		var clientWidth = document.documentElement.clientWidth || document.body.clientWidth;
		document.getElementById("loginBox"+this.id).style.left = (parseInt(clientWidth)-parseInt(offsetLeft))*0.5 + parseInt(scrollLeft)+"px";
	},

	close:function(){
		document.body.removeChild(document.getElementById("loginBox"+this.id));
		document.body.removeChild(document.getElementById(this.id));
		if (typeof this.ref!='undefined' && this.ref!='') 
			top.location = decodeURIComponent(this.ref);
	}
}

if( window.addEventListener){
    window.addEventListener('scroll',function(){ iframediv.iframescroll(); },false);
}else if(window.attachEvent){
    window.attachEvent('onscroll',function(){ iframediv.iframescroll(); });
}

window.closeIframediv = function(){ iframediv.close(); };
window.showLogin = function(param){ if (!document.getElementById('loginBox'+iframediv.id)) iframediv.show('login', param); };

//è­¦å‘çª—å£
var showMsg = {
	id : Math.random(), 

	show : function (info) {
		var p = document.createElement("DIV");
		if (!info) var info = '';

		p.id = this.id;
		var scrollWidth 	= document.documentElement.scrollWidth || document.body.scrollWidth;
		var scrollHeight 	= document.documentElement.scrollHeight + 50 || document.body.scrollHeight + 50;
		p.style.cssText 	= "z-index:9999999;width:"+scrollWidth+"px;height:"+scrollHeight+"px;position:absolute;left:0;top:0;background-color:#666;filter:alpha(opacity=80);-moz-opacity:0.8;opacity:0.8;";
		document.body.appendChild(p);

		var p1 = document.createElement("DIV");
		p1.id = 'box' + this.id;
		p1.style.cssText = "z-index:99999999;position:absolute;background-color:#FFFFFF;";
		document.body.appendChild(p1);

		if (typeof info.returl != 'undefined') 
			var url = info.returl;
		else 
			var url = '';
		
		this.iframescroll();

		if( window.addEventListener){
			window.addEventListener('scroll',function(){ showMsg.iframescroll(); },false);
		}else if(window.attachEvent){
			window.attachEvent('onscroll',function(){ showMsg.iframescroll(); });
		}
	},

	iframescroll : function(){
        if(!document.getElementById("box"+this.id) ) return;
		//é«˜åº¦
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        var offsetTop = document.getElementById("box"+this.id).offsetHeight;
        var clientHeight = document.documentElement.clientHeight || document.body.clientHeight;
        document.getElementById("box"+this.id).style.top = (parseInt(clientHeight)-parseInt(offsetTop))*0.5 + parseInt(scrollTop)+"px";
		//å®½åº¦
		var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft || 0;
		var offsetLeft = document.getElementById("box"+this.id).offsetWidth;
		var clientWidth = document.documentElement.clientWidth || document.body.clientWidth;
		document.getElementById("box"+this.id).style.left = (parseInt(clientWidth)-parseInt(offsetLeft))*0.5 + parseInt(scrollLeft)+"px";
    },  

    close : function(returl){
        document.body.removeChild(document.getElementById("box"+this.id));
        document.body.removeChild(document.getElementById(this.id));
		if (typeof returl!='undefined' && returl!='') {
			top.location = decodeURIComponent(returl);
		}
    },

	cancle : function(){
		document.body.removeChild(document.getElementById("box"+this.id));
        document.body.removeChild(document.getElementById(this.id));
		var arr=document.getElementsByTagName("select");
		var i=0;
		while(i<arr.length){
			arr[i].style.visibility='visible';
			i++;
		}
	}
}

window.showAlert = function(param){ if (!document.getElementById('box'+showMsg.id)) showMsg.show(param); }