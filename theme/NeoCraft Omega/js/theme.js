
!function(a)
{
	var b="object"==typeof self&&self.self===self&&self||"object"==typeof global&&global.global===global&&global;"function"==typeof define&&define.amd?define
	(["exports"],function(c)
		{
			b.ParticleNetwork=a(b,c)
		}
	):"object"==typeof module&&module.exports?module.exports=a(b,
		{}
	):b.ParticleNetwork=a(b,
		{}
	)
} 
(function(a,b)
{
	var c=function(a)
	{
		this.canvas=a.canvas,this.g=a.g,this.particleColor=a.options.particleColor,this.x=Math.random()*this.canvas.width,this.y=Math.random()*this.canvas.height,this.velocity=
		{
			x:(Math.random()-.5)*a.options.velocity,y:(Math.random()-.5)*a.options.velocity
		}
	};return c.prototype.update=function()
	{
		(this.x>this.canvas.width+20||this.x<-20)&&(this.velocity.x=-this.velocity.x),(this.y>this.canvas.height+20||this.y<-20)&&(this.velocity.y=-this.velocity.y),this.x+=this.velocity.x,this.y+=this.velocity.y},c.prototype.h=function()
		{
			this.g.beginPath(),this.g.fillStyle=this.particleColor,this.g.globalAlpha=.7,this.g.arc(this.x,this.y,1.5,0,2*Math.PI),this.g.fill()
		},b=function(a,b)
		{
			this.i=a,this.i.size={
				width:this.i.offsetWidth,height:this.i.offsetHeight
			},b=void 0!==b?b:{},this.options={
				particleColor:void 0!==b.particleColor?b.particleColor:"#fff",background:void 0!==b.background?b.background:"#1a252f",interactive:void 0!==b.interactive?b.interactive:!0,velocity:this.setVelocity(b.speed),density:this.j(b.density)
			},this.init()
		},b.prototype.init=function()
		{
			if(this.k=document.createElement("div"),this.i.appendChild(this.k),this.l(this.k,{
				position:"absolute",top:0,left:0,bottom:0,right:0,"z-index":1}),/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.background))this.l(this.k,{background:this.options.background});
				else{if(!/\.(gif|jpg|jpeg|tiff|png)$/i.test(this.options.background))return console.error("Please specify a valid background image or hexadecimal color"),
				!1;this.l(this.k,{background:'rgba(0,0,0,0) no-repeat center',"background-size":"cover"})}if(!/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.particleColor))
					return console.error("Please specify a valid particleColor hexadecimal color"),!1;
				this.canvas=document.createElement("canvas"),this.i.appendChild(this.canvas),this.g=this.canvas.getContext("2d"),this.canvas.width=this.i.size.width,this.canvas.height=document.getElementById('content-under').scrollHeight,this.l(this.i,{position:"relative"}),this.l(this.canvas,{"z-index":"20",position:"relative"}),window.addEventListener("resize",function(){return this.i.offsetWidth===this.i.size.width&&this.i.offsetHeight===document.getElementById('content-under').scrollHeight?!1:(this.canvas.width=this.i.size.width=this.i.offsetWidth,this.canvas.height=this.i.size.height=document.getElementById('content-under').scrollHeight,clearTimeout(this.m),void(this.m=setTimeout(function(){this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&this.o.push(this.p),requestAnimationFrame(this.update.bind(this))}.bind(this),500)))}.bind(this)),this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&(this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p),this.canvas.addEventListener("mousemove",function(a){this.p.x=a.clientX-this.canvas.offsetLeft,this.p.y=a.clientY-this.canvas.offsetTop}.bind(this)),this.canvas.addEventListener("mouseup",function(a){this.p.velocity={x:(Math.random()-.5)*this.options.velocity,y:(Math.random()-.5)*this.options.velocity},this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p)}.bind(this))),requestAnimationFrame(this.update.bind(this))},b.prototype.update=function(){this.g.clearRect(0,0,this.canvas.width,this.canvas.height),this.g.globalAlpha=1;for(var a=0;a<this.o.length;a++){this.o[a].update(),this.o[a].h();for(var b=this.o.length-1;b>a;b--){var c=Math.sqrt(Math.pow(this.o[a].x-this.o[b].x,2)+Math.pow(this.o[a].y-this.o[b].y,2));c>120||(this.g.beginPath(),this.g.strokeStyle=this.options.particleColor,this.g.globalAlpha=(120-c)/120,this.g.lineWidth=.7,this.g.moveTo(this.o[a].x,this.o[a].y),this.g.lineTo(this.o[b].x,this.o[b].y),this.g.stroke())}}0!==this.options.velocity&&requestAnimationFrame(this.update.bind(this))},b.prototype.setVelocity=function(a){return"fast"===a?1:"slow"===a?.33:"none"===a?0:.66},b.prototype.j=function(a){return"high"===a?5e3:"low"===a?2e4:isNaN(parseInt(a,10))?1e4:a},b.prototype.l=function(a,b){for(var c in b)a.style[c]=b[c]},b});

// Initialisation

var canvasDiv = document.getElementById('particle-canvas');
var options = {
  particleColor: '#FFF',
	background: "bg.jpg",
  interactive: false,
  speed: 'medium',
  density: 'low'
};
var particleCanvas = new ParticleNetwork(canvasDiv, options);

$(window).on('load', function () {
		
	
	var page = $_GET('page');
	if(page == 'accueil' || page == undefined)
	{
		var x = document.getElementById('news-toggle-0');
		x.className += " neo-show";
	}
	if(page == 'boutique' || page ==  'voter' || page ==  'banlist')
	{
		openShopStart('event', 'categorie-0');
	}

});
$(document).ready(function() {
	setTimeout(function(){
		$('body').addClass('loaded');
	}, 100);
	
});

function CopyIp() {
  var copyText = document.getElementById("neo-copy-ip");
  copyText.select();
  document.execCommand("copy");
  alert("Vous venez de copier l'ip !");
} 

function openShopStart(evt, tabs) {
  var i, x, tablinks;
  x = document.getElementsByClassName("neo-tabs");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  document.getElementById(tabs).style.display = "block";
}

function openShop(evt, tabs) {
  var i, x, tablinks;
  x = document.getElementsByClassName("neo-tabs");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" neo-border-gray", "");
  }
  document.getElementById(tabs).style.display = "block";
  evt.currentTarget.firstElementChild.className += " neo-border-gray";
}

function $_GET(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
}

function ImgModal(element) {
  document.getElementById("Modal-img").src = element.src;
  document.getElementById("Modal-index").style.display = "block";
}

function bouclevote(id2, pseudo2) {
	$.post("index.php?action=voter", 
	{
		id: id2,
		pseudo: pseudo2
	},function(data, status){ 
		console.log(data);
		if(data == "success")
		{
			$("#vote-success").fadeIn(500);setTimeout(function(){ $("#vote-success").fadeOut(500);}, 5000);
			$("#btn-verif-" + id2).fadeOut(500);setTimeout(function(){ $("#btn-after-" + id2).fadeIn(500);}, 500);
		}
		else {
			setTimeout(function(){ 
				bouclevote(id2, pseudo2);
			}, 500);
		}
    });
}

function ToggleNews(id) {
	var x = document.getElementById('news-toggle-' + id);
    if (x.className.indexOf("neo-show") == -1) {
        x.className += " neo-show";
    } else { 
        x.className = x.className.replace(" neo-show", "");
    }
	
	if ($('#news-xsquare-' + id).hasClass('neo-show'))
	{
		$('#news-xsquare-' + id).removeClass("neo-show");
		$('#news-xsquare-' + id).addClass("neo-hide");	
		
		$('#news-toggle-btn-' + id).removeClass("neo-gray");
		$('#news-toggle-btn-' + id).addClass("neo-white");	
	}
	else
	{
		if ($('#news-xsquare-' + id).hasClass('neo-hide'))
		{
			$('#news-xsquare-' + id).removeClass("neo-hide");
			$('#news-xsquare-' + id).addClass("neo-show");
			
			$('#news-toggle-btn-' + id).removeClass("neo-white");
			$('#news-toggle-btn-' + id).addClass("neo-gray");	
		}
	}
	if ($('#news-square-' + id).hasClass('neo-show'))
	{
		$('#news-square-' + id).removeClass("neo-show");
		$('#news-square-' + id).addClass("neo-hide");	
	}
	else
	{
		if ($('#news-square-' + id).hasClass('neo-hide'))
		{
			$('#news-square-' + id).removeClass("neo-hide");
			$('#news-square-' + id).addClass("neo-show");
		}
	}
	
	
}

