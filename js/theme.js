
$(window).on('load', function () {
	var page = $_GET('page');
	if(page == 'accueil' || page == undefined)
	{
		var x = document.getElementById('news-toggle-0');
		x.className += " neo-show";
	}
	if(page == 'boutique' || 'voter' || 'banlist')
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

