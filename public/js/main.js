$(document).ready(function() {
	
	//inicioWeb();
	
});

var controlSkipIntro="no";

function precargaweb(){
	
	var logo = document.getElementsByClassName('logoweb');
	var menunavegacion = document.getElementById('menunavegacion');
	var logosp = document.getElementsByClassName('logo_sp');
	var logosp2 = document.getElementsByClassName('logo_sp_mobile');
	var rrss = document.getElementsByClassName('rrss');
	var guias = document.getElementById('guias');
	

	TweenMax.to(logo, 0, {opacity:0,x:-10,delay:0});
	TweenMax.to(menunavegacion, 0, {opacity:0,x:+10,delay:0});
	TweenMax.to(logosp, 0, {opacity:0,x:-10,delay:0});
	TweenMax.to(logosp2, 0, {opacity:0,x:-10,delay:0});
	TweenMax.to(rrss, 0, {opacity:0,x:+10,delay:0});
	TweenMax.to(guias, 0, {opacity:0,delay:0});
	

	$("#precarga").fadeOut(300);
	
	setTimeout(function(){		
		inicioWeb();
	},300);
		
}



function precargaweb1(){

	
	var logo = document.getElementsByClassName('logoweb');
	var menunavegacion = document.getElementById('menunavegacion');
	var logosp = document.getElementsByClassName('logo_sp');
	var logosp2 = document.getElementsByClassName('logo_sp_mobile');
	var rrss = document.getElementsByClassName('rrss');
	var guias = document.getElementById('guias');
	
	TweenMax.to(logo, 0, {opacity:0,x:-10,delay:0});
	TweenMax.to(menunavegacion, 0, {opacity:0,x:+10,delay:0});
	TweenMax.to(logosp, 0, {opacity:0,x:-10,delay:0});
	TweenMax.to(logosp2, 0, {opacity:0,x:-10,delay:0});
	TweenMax.to(rrss, 0, {opacity:0,x:+10,delay:0});
	TweenMax.to(guias, 0, {opacity:0,delay:0});
	
	$("#precarga").fadeOut(300);
	
	setTimeout(function(){		
		inicioWeb();
	},300);
		
}

function precargaweb2(){

	
	var logo = document.getElementsByClassName('logoweb');
	var menunavegacion = document.getElementById('menunavegacion');
	var logosp = document.getElementsByClassName('logo_sp');
	var logosp2 = document.getElementsByClassName('logo_sp_mobile');
	var rrss = document.getElementsByClassName('rrss');
	var guias = document.getElementById('comofunciona');

	
	TweenMax.to(logo, 0, {opacity:0,x:-10,delay:0});
	TweenMax.to(menunavegacion, 0, {opacity:0,x:+10,delay:0});
	TweenMax.to(logosp, 0, {opacity:0,x:-10,delay:0});
	TweenMax.to(logosp2, 0, {opacity:0,x:-10,delay:0});
	TweenMax.to(rrss, 0, {opacity:0,x:+10,delay:0});
	TweenMax.to(guias, 0, {opacity:0,delay:0});
	
	$("#precarga").fadeOut(300);
	
	setTimeout(function(){		
		inicioWeb2();
	},300);
	

	
}



function inicioWeb(){
	var logo = document.getElementsByClassName('logoweb');
	var logosp2 = document.getElementsByClassName('logo_sp_mobile');
	var menunavegacion = document.getElementById('menunavegacion');
	var logosp = document.getElementsByClassName('logo_sp');
	var rrss = document.getElementsByClassName('rrss');
	var guias = document.getElementById('guias');
	
	$("#textopre").fadeIn(300);
	$("#saltarintro").fadeIn(300);
	$(".oscuro").fadeIn(300);
	
	setTimeout(function(){	$("#intro2").fadeIn(300); },1500);
	setTimeout(function(){	$("#intro3").fadeIn(300);},3500);
	setTimeout(function(){	$("#intro4").fadeIn(300);},6000);
	setTimeout(function(){	$("#intro5").fadeIn(300);},8000);
	
	setTimeout(function(){	
	$("#textopre").fadeOut(300);$("#saltarintro").fadeOut(300);
		$(".oscuro").fadeOut(300);				 
	},10000);
	
		$(".rrss").fadeIn(0);
		TweenMax.to(logo, 0.5, {opacity:1,x:0,delay:10.1});
		TweenMax.to(menunavegacion, 0.5, {opacity:1,x:0,delay:10.1});
		TweenMax.to(logosp, 0.5, {opacity:1,x:0,delay:10.6});
		TweenMax.to(logosp2, 0.5, {opacity:1,x:0,delay:10.6});
		TweenMax.to(rrss, 0.5, {opacity:1,x:0,delay:10.6});
		$("#miheader").css("z-index","99999");
		$("#comofunciona").css("z-index","999999999");

		TweenMax.to(guias, 0.5, {opacity:1,delay:11});

		setTimeout(function(){	
			$("#precarga").remove();
		},3000);
		setTimeout(function(){	
			$("#textopre").remove();
			$("#saltarintro").remove();
		},11000);

	
}

function SaltarIntro(){
	controlSkipIntro="si";
	
	var logo = document.getElementsByClassName('logoweb');
	var logosp2 = document.getElementsByClassName('logo_sp_mobile');
	var menunavegacion = document.getElementById('menunavegacion');
	var logosp = document.getElementsByClassName('logo_sp');
	var rrss = document.getElementsByClassName('rrss');
	var guias = document.getElementById('guias');
	
	$("#textopre").fadeOut(300);
	$("#saltarintro").fadeOut(300);	
	$(".oscuro").fadeOut(300);
	
$(".rrss").fadeIn(0);
	TweenMax.to(logo, 0.5, {opacity:1,x:0,delay:0.1});
	TweenMax.to(menunavegacion, 0.5, {opacity:1,x:0,delay:0.1});
	TweenMax.to(logosp, 0.5, {opacity:1,x:0,delay:0.6});
	TweenMax.to(logosp2, 0.5, {opacity:1,x:0,delay:0.6});
	TweenMax.to(rrss, 0.5, {opacity:1,x:0,delay:0.6});
	$("#miheader").css("z-index","99999");
	$("#comofunciona").css("z-index","999999999");
	
	TweenMax.to(guias, 0.5, {opacity:1,delay:1});
	
	setTimeout(function(){	
		$("#textopre").remove();
		$("#saltarintro").remove();
	},2000);
}

function inicioWeb2(){
	var logo = document.getElementsByClassName('logoweb');
	var menunavegacion = document.getElementById('menunavegacion');
	var logosp = document.getElementsByClassName('logo_sp');
	var logosp2 = document.getElementsByClassName('logo_sp_mobile');
	var rrss = document.getElementsByClassName('rrss');
	var guias = document.getElementById('comofunciona');
	$("#miheader").css("z-index","99999");
	$("#comofunciona").css("z-index","999999999");
	
	
	TweenMax.to(logo, 0.5, {opacity:1,x:0,delay:0.1});
	TweenMax.to(menunavegacion, 0.5, {opacity:1,x:0,delay:0.1});
	TweenMax.to(logosp, 0.5, {opacity:1,x:0,delay:0.6});
	TweenMax.to(logosp2, 0.5, {opacity:1,x:0,delay:0.6});
	TweenMax.to(rrss, 0.5, {opacity:1,x:0,delay:0.6});
	
	TweenMax.to(guias, 0.5, {opacity:1,delay:1});
	
	setTimeout(function(){	
		$("#precarga").remove();
		
	},2000);
	
}

var controlguias=1;

function moverGuia(direccion){
	
	$("#guia"+controlguias).fadeOut("slow");
	$("#fotoguia"+controlguias).removeClass("mostrar");
	$("#bullet"+controlguias).removeClass("activo");
	$("#nombre"+controlguias).fadeOut(300);
	if(direccion=="izq"){
		if(controlguias<=1){
			controlguias=8;
		}else{
			controlguias--;
		}
	
		
	}else{
		if(controlguias>=8){
			controlguias=1;
		}else{
			controlguias++;
		}
		
	}
	
	$("#bullet"+controlguias).addClass("activo");
	setTimeout(function(){	
		$("#guia"+controlguias).fadeIn("slow");		
		$("#fotoguia"+controlguias).addClass("mostrar");
		$("#nombre"+controlguias).fadeIn(300);
	},500);
	$("#reservar").attr("onClick","mostrarFormulario('guia"+controlguias+"');");
}

function cerrarForm(){
	$("#miformulario").fadeOut(500);
	$(".oscuro").fadeOut(500);
	setTimeout(function(){	
		$("#guias").fadeIn(500);
	},500);
	
}

function mostrarFormulario(numeroguia){
	
	$("#nombreguia").attr("value",numeroguia);
	
	$("#guias").fadeOut(500);
	setTimeout(function(){	
		$("#miformulario").fadeIn(500);
		$(".oscuro").fadeIn(300);
	},500);
	
}

function mostrarVideo(){
	$("#contenedorVideo").fadeIn(500);
	$(".miiframe").attr("src","https://www.youtube.com/embed/jT9edKarhc8");
}

function cerrarVideo(){
	$("#contenedorVideo").fadeOut(500);
	setTimeout(function(){	
		$(".miiframe").attr("src","");
	},500);
	
}


function mostrarGracias(){
	$("#campos").fadeOut(500);
	setTimeout(function(){	
		$("#gracias").fadeIn(500);
	},500);
}


/*menu_nav mobile */
controlMenu="cerrado";

function verMenu(){
	if(controlMenu=="cerrado"){
		//abrir el menu
		$("#menunavegacion").addClass("abierto");
		$("#abrircerrar").addClass("abierto");
		controlMenu="abierto";
	}else{
		//cerrar el menu;
		$("#menunavegacion").removeClass("abierto");
		$("#abrircerrar").removeClass("abierto");
		controlMenu="cerrado";
	}

}


/*---------------------------animacion fondo ------------------*/
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("C2FA08847F35054683EFD562441A8B59");
	var lib=comp.getLibrary();
	createjs.MotionGuidePlugin.install();
	handleComplete({},comp);
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	exportRoot = new lib.pajaros();
	stage = new lib.Stage(canvas);	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage)
		stage.addEventListener("tick", handleTick)
		function getProjectionMatrix(container, totalDepth) {
			var focalLength = 528.25;
			var projectionCenter = { x : lib.properties.width/2, y : lib.properties.height/2 };
			var scale = (totalDepth + focalLength)/focalLength;
			var scaleMat = new createjs.Matrix2D;
			scaleMat.a = 1/scale;
			scaleMat.d = 1/scale;
			var projMat = new createjs.Matrix2D;
			projMat.tx = -projectionCenter.x;
			projMat.ty = -projectionCenter.y;
			projMat = projMat.prependMatrix(scaleMat);
			projMat.tx += projectionCenter.x;
			projMat.ty += projectionCenter.y;
			return projMat;
		}
		function handleTick(event) {
			var cameraInstance = exportRoot.___camera___instance;
			if(cameraInstance !== undefined && cameraInstance.pinToObject !== undefined)
			{
				cameraInstance.x = cameraInstance.pinToObject.x + cameraInstance.pinToObject.pinOffsetX;
				cameraInstance.y = cameraInstance.pinToObject.y + cameraInstance.pinToObject.pinOffsetY;
				if(cameraInstance.pinToObject.parent !== undefined && cameraInstance.pinToObject.parent.depth !== undefined)
				cameraInstance.depth = cameraInstance.pinToObject.parent.depth + cameraInstance.pinToObject.pinOffsetZ;
			}
			applyLayerZDepth(exportRoot);
		}
		function applyLayerZDepth(parent)
		{
			var cameraInstance = parent.___camera___instance;
			var focalLength = 528.25;
			var projectionCenter = { 'x' : 0, 'y' : 0};
			if(parent === exportRoot)
			{
				var stageCenter = { 'x' : lib.properties.width/2, 'y' : lib.properties.height/2 };
				projectionCenter.x = stageCenter.x;
				projectionCenter.y = stageCenter.y;
			}
			for(child in parent.children)
			{
				var layerObj = parent.children[child];
				if(layerObj == cameraInstance)
					continue;
				applyLayerZDepth(layerObj, cameraInstance);
				if(layerObj.layerDepth === undefined)
					continue;
				if(layerObj.currentFrame != layerObj.parent.currentFrame)
				{
					layerObj.gotoAndPlay(layerObj.parent.currentFrame);
				}
				var matToApply = new createjs.Matrix2D;
				var cameraMat = new createjs.Matrix2D;
				var totalDepth = layerObj.layerDepth ? layerObj.layerDepth : 0;
				var cameraDepth = 0;
				if(cameraInstance && !layerObj.isAttachedToCamera)
				{
					var mat = cameraInstance.getMatrix();
					mat.tx -= projectionCenter.x;
					mat.ty -= projectionCenter.y;
					cameraMat = mat.invert();
					cameraMat.prependTransform(projectionCenter.x, projectionCenter.y, 1, 1, 0, 0, 0, 0, 0);
					cameraMat.appendTransform(-projectionCenter.x, -projectionCenter.y, 1, 1, 0, 0, 0, 0, 0);
					if(cameraInstance.depth)
						cameraDepth = cameraInstance.depth;
				}
				if(layerObj.depth)
				{
					totalDepth = layerObj.depth;
				}
				//Offset by camera depth
				totalDepth -= cameraDepth;
				if(totalDepth < -focalLength)
				{
					matToApply.a = 0;
					matToApply.d = 0;
				}
				else
				{
					if(layerObj.layerDepth)
					{
						var sizeLockedMat = getProjectionMatrix(parent, layerObj.layerDepth);
						if(sizeLockedMat)
						{
							sizeLockedMat.invert();
							matToApply.prependMatrix(sizeLockedMat);
						}
					}
					matToApply.prependMatrix(cameraMat);
					var projMat = getProjectionMatrix(parent, totalDepth);
					if(projMat)
					{
						matToApply.prependMatrix(projMat);
					}
				}
				layerObj.transformMatrix = matToApply;
			}
		}
	}	    
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {		
		var lastW, lastH, lastS=1;		
		window.addEventListener('resize', resizeCanvas);		
		resizeCanvas();		
		function resizeCanvas() {			
			var w = lib.properties.width, h = lib.properties.height;			
			var iw = window.innerWidth, ih=window.innerHeight;			
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
			if(isResp) {                
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
					sRatio = lastS;                
				}				
				else if(!isScale) {					
					if(iw<w || ih<h)						
						sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==1) {					
					sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==2) {					
					sRatio = Math.max(xRatio, yRatio);				
				}			
			}			
			canvas.width = w*pRatio*sRatio;			
			canvas.height = h*pRatio*sRatio;
			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';				
			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
			/*stage.scaleX = pRatio*sRatio;			
			stage.scaleY = pRatio*sRatio;			*/
			stage.scaleX = "100vw";			
			stage.scaleY = "51vw";	
			lastW = iw; lastH = ih; lastS = sRatio;            
			stage.tickOnUpdate = false;            
			stage.update();            
			stage.tickOnUpdate = true;		
		}
	}
	makeResponsive(false,'both',false,1);	
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}

