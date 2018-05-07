/**
* Arquivo responsavel pela chamada de todas as funcionalidades do site Abir
*
* @author: Mateus Moura chagas[dot]mateus[at]gmail[dot]com
* @date: 23/03/2011
*
* Copyright(c) Todos os direitos reservados a 
*/ 

if (window.console == null) window.console = { log: function(p) { }, error: function(p) { } };
		
var oThis;

var Actions = function()
{
	oThis = this;
	
	this.init();
}

Actions.fn = Actions.prototype;
Actions.fn.extend = jQuery.extend;
Actions.fn.extend(
{
    init: function()
	{
		this.content = $( "#conteudo" );
		
		$( "#bloco_campanhas, #banner_institucional", oThis.content ).length
			&& oThis.slideBanners( $( "#bloco_campanhas, #banner_institucional", oThis.content ) );
			
		$( "ul.menuCourses", oThis.content ).length
			&& oThis.buildMenu( $( "ul.menuCourses", oThis.content ) );
			
		$( "div.calendario_letivo", oThis.content ) .length
			&& oThis.calendar();
	},
	
	slideBanners: function( div )
	{
		$( "li:first", div ).addClass( "active" );
		
		// setInterval( function()
		// {
		// 	$( "li.active", div ).fadeOut( function()
		// 	{
		// 		var $li = $( this );
				
		// 		$li.removeClass( "active" );
				
		// 		$li.next().length
		// 			? $li.next().fadeIn().addClass( "active" )
		// 			: $( "li:first", div ).fadeIn().addClass( "active" );
		// 	});
		// }, 8000 )
	},
	
	buildMenu: function( menu )
	{
		$( "li", menu ).each( function()
		{
			var $li = $( this ),
				tx = $( "a", $li ).attr( "title" );
				
			$( "<span>" + tx + "</span>" ).appendTo( $li );
			
		});
	},
	
	calendar: function()
	{
		$( 'div#calendario_asasul', oThis.content ).hover(function(){
			$( 'div#calendario_taguatinganorte', oThis.content ).animate({opacity: 0.25 }, 400);
		},function(){
			$( 'div#calendario_taguatinganorte', oThis.content ).animate({opacity: 1 }, 400);
		});
		
		$( 'div#calendario_taguatinganorte', oThis.content ).hover(function(){
			$( 'div#calendario_asasul', oThis.content ).animate({opacity: 0.25 }, 400);
		},function(){
			$( 'div#calendario_asasul', oThis.content ).animate({opacity: 1 }, 400);
		});
	}
});

$( function()
{
	var actions = new Actions();
})