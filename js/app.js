var urlIndex = "";
require.config({
    baseUrl: urlIndex,
    shim: {
    	foundation:{
        deps: [
          'jquery'
        ],
        exports:'foundation',
      },
    },
    paths : {
      jquery          : 'bower_components/jquery/dist/jquery.min',
      foundation      : 'bower_components/foundation-sites/dist/foundation.min',
      page		      : 'bower_components/page/page',
      text            : 'bower_components/text/text',

      // paginas
      // home			  : '',
   },
});

requirejs(['jquery','foundation','page',
	'text!paginas/home.html',
	'text!paginas/nuestraEmpresa.html',
	'text!paginas/extraContent.html',
	'text!paginas/extraContent.html',
	'text!paginas/extraContent.html',
	],function($,foundation,page,
		homePage,
		nuestraEmpresaPage,
		portafolioServiciosPage,
		productosPage,
		contactenosPage
		){


$(function  () {
	$(document).foundation();
	$(".toggle-menu").click(function  () {
			
			if ($(".menu-movil").hasClass("hide-for-small-only")){
				$(".menu-movil").removeClass("hide-for-small-only");
			}else{
				$(".menu-movil").addClass("hide-for-small-only");
			}

	})

	var elem = new Foundation.Orbit($(".orbit"));
})


var baseRounter = "";
page({hashbang:true});



page('/'+baseRounter+'', home);
page('/'+baseRounter+'home', home);
page('/'+baseRounter+'nuestra-empresa', nuestraEmpresa);
page('/'+baseRounter+'portafolio-servicios', portafolioServicios);
page('/'+baseRounter+'productos', productos);
page('/'+baseRounter+'contactenos', contactenos);
page('*', notfound);

function home(){
	$("#main-content").html(homePage);
	var elem = new Foundation.Orbit($(".orbit"));
	// console.log(home);
}
function nuestraEmpresa(){
	$("#main-content").html(nuestraEmpresaPage);
}
function portafolioServicios(){
	// $("#main-content").html(portafolioServiciosPage);
	console.log("portafolioServicios");
}
function productos(){
	// $("#main-content").html(productosPage);
	console.log("productos");
}
function contactenos(){
	// $("#main-content").html(contactenosPage);
	console.log("contactenos");
}
function notfound(ctx,next){
	console.log(ctx);
	console.log(next);
}
page();
page.redirect("/home");
});




