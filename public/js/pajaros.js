(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [];


// symbols:
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.Símbolo_1_Capa_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa_1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#FFFFFF","rgba(255,255,255,0.118)","rgba(255,255,255,0)"],[0,0.678,1],0,0,0,0,0,36.3).s().p("Aj4D5QhohnAAiSQAAiRBohnQBnhoCRAAQCSAABnBoQBnBnABCRQgBCShnBnQhnBniSABQiRgBhnhng");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Símbolo_1_Capa_1, null, null);


(lib.ala_Capa_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#25273A").s().p("Am8m8IN5AAIt5N5g");
	this.shape.setTransform(7.975,44.475);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.ala_Capa_1, null, null);


(lib.Símbolo1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa_1_obj_
	this.Capa_1 = new lib.Símbolo_1_Capa_1();
	this.Capa_1.name = "Capa_1";
	this.Capa_1.parent = this;
	this.Capa_1.depth = 0;
	this.Capa_1.isAttachedToCamera = 0
	this.Capa_1.isAttachedToMask = 0
	this.Capa_1.layerDepth = 0
	this.Capa_1.layerIndex = 0
	this.Capa_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Capa_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.Símbolo1, new cjs.Rectangle(-35.2,-35.2,70.5,70.5), null);


(lib.brillo_Capa_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa_1
	this.instance = new lib.Símbolo1();
	this.instance.parent = this;
	this.instance.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.instance).to({scaleY:1.2298,alpha:1},41,cjs.Ease.get(1)).wait(7).to({scaleY:1,alpha:0},48,cjs.Ease.get(1)).wait(52));

}).prototype = p = new cjs.MovieClip();


(lib.brillo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_160 = function() {
		this.___loopingOver___ = true;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(160).call(this.frame_160).wait(1));

	// Capa_1_obj_
	this.Capa_1 = new lib.brillo_Capa_1();
	this.Capa_1.name = "Capa_1";
	this.Capa_1.parent = this;
	this.Capa_1.depth = 0;
	this.Capa_1.isAttachedToCamera = 0
	this.Capa_1.isAttachedToMask = 0
	this.Capa_1.layerDepth = 0
	this.Capa_1.layerIndex = 0
	this.Capa_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Capa_1).wait(96).to({_off:true},52).wait(13));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-35.2,-43.3,70.5,86.69999999999999);


(lib.ala = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa_1_obj_
	this.Capa_1 = new lib.ala_Capa_1();
	this.Capa_1.name = "Capa_1";
	this.Capa_1.parent = this;
	this.Capa_1.setTransform(8,44.5,1,1,0,0,0,8,44.5);
	this.Capa_1.depth = 0;
	this.Capa_1.isAttachedToCamera = 0
	this.Capa_1.isAttachedToMask = 0
	this.Capa_1.layerDepth = 0
	this.Capa_1.layerIndex = 0
	this.Capa_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Capa_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.ala, new cjs.Rectangle(-36.5,0,89,89), null);


(lib.pajaro_Capa_2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa_2
	this.instance = new lib.ala();
	this.instance.parent = this;
	this.instance.setTransform(0,-44.45,0.6986,1,0,0,180);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:-0.1,regY:-0.1,scaleY:0.6604,skewX:-139.3213,y:-44.4},5,cjs.Ease.get(1)).to({regX:0,regY:0,scaleY:0.6729,skewX:-133.6521,y:-44.5},1,cjs.Ease.get(-1)).to({scaleY:1,skewX:0,y:-44.45},5,cjs.Ease.get(1)).wait(1));

}).prototype = p = new cjs.MovieClip();


(lib.pajaro_Capa_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa_1
	this.instance = new lib.ala();
	this.instance.parent = this;
	this.instance.setTransform(-7.95,-44.45);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:-0.3,scaleY:0.6641,skewX:133.3567,x:-8.2},5,cjs.Ease.get(1)).to({regX:-0.4,scaleY:0.6764,skewX:128.0772,x:-8.3},1,cjs.Ease.get(-1)).to({regX:0,scaleY:1,skewX:0,x:-7.95},5,cjs.Ease.get(1)).wait(1));

}).prototype = p = new cjs.MovieClip();


(lib.pajaro = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_11 = function() {
		this.___loopingOver___ = true;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(11).call(this.frame_11).wait(1));

	// Capa_1_obj_
	this.Capa_1 = new lib.pajaro_Capa_1();
	this.Capa_1.name = "Capa_1";
	this.Capa_1.parent = this;
	this.Capa_1.depth = 0;
	this.Capa_1.isAttachedToCamera = 0
	this.Capa_1.isAttachedToMask = 0
	this.Capa_1.layerDepth = 0
	this.Capa_1.layerIndex = 0
	this.Capa_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Capa_1).wait(12));

	// Capa_2_obj_
	this.Capa_2 = new lib.pajaro_Capa_2();
	this.Capa_2.name = "Capa_2";
	this.Capa_2.parent = this;
	this.Capa_2.setTransform(-5.6,0,1,1,0,0,0,-5.6,0);
	this.Capa_2.depth = 0;
	this.Capa_2.isAttachedToCamera = 0
	this.Capa_2.isAttachedToMask = 0
	this.Capa_2.layerDepth = 0
	this.Capa_2.layerIndex = 1
	this.Capa_2.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Capa_2).wait(12));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-114.1,-89,209.7,133.5);


(lib.Escena_1_front = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// front
	this.instance = new lib.brillo();
	this.instance.parent = this;
	this.instance.setTransform(906.35,-54.7,22.1278,9.9589,38.7137,0,0,0.1,0.1);
	this.instance.alpha = 0.9492;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1122));

}).prototype = p = new cjs.MovieClip();


(lib.Escena_1_Capa_6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa_6
	this.instance = new lib.pajaro();
	this.instance.parent = this;
	this.instance.setTransform(1642.9,54,0.0443,0.045,0,0,180,1.2,2.2);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(156).to({_off:false},0).to({x:508.95,y:-2.95},950).wait(1));

}).prototype = p = new cjs.MovieClip();


(lib.Escena_1_Capa_3_copia = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa_3_copia
	this.instance = new lib.pajaro();
	this.instance.parent = this;
	this.instance.setTransform(689.1,324.85,0.0443,0.045,0,0,0,1.2,2.2);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(4).to({_off:false},0).to({regX:0,regY:1.1,scaleX:0.0439,scaleY:0.0454,guide:{path:[689.3,324.8,732.6,343.7,805.3,345.7,867.1,347.3,946.7,336.8,1005.8,329,1066.5,315.8,1113.2,305.6,1121.9,301.9,1127.3,299.7,1175,287.7,1229.5,274.1,1287.7,260.9,1455.4,223.1,1587.9,219.9], orient:'auto'}},944).wait(1));

}).prototype = p = new cjs.MovieClip();


(lib.Escena_1_Capa_3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa_3
	this.instance = new lib.pajaro();
	this.instance.parent = this;
	this.instance.setTransform(699.5,287.5,0.0443,0.045,0,0,0,1.2,2.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:0,regY:1.1,scaleX:0.0439,scaleY:0.0454,guide:{path:[699.6,287.5,742.9,306.3,815.3,308.2,877.1,309.9,956.7,299.4,1015.8,291.5,1076.5,278.3,1123.2,268.1,1131.9,264.5,1137.3,262.2,1185,250.3,1239.5,236.6,1297.7,223.5,1465.4,185.7,1597.9,182.5], orient:'auto'}},944).wait(1));

}).prototype = p = new cjs.MovieClip();


(lib.Escena_1_Capa_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Capa_1
	this.instance = new lib.brillo();
	this.instance.parent = this;
	this.instance.setTransform(606.35,-14.7,22.1278,9.9589,38.7137,0,0,0.1,0.1);
	this.instance.alpha = 0.7813;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(39).to({_off:false},0).wait(1111));

}).prototype = p = new cjs.MovieClip();


// stage content:
(lib.pajaros = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	this.___GetDepth___ = function(obj) {
		var depth = obj.depth;
		var cameraObj = this.___camera___instance;
		if(cameraObj && cameraObj.depth && obj.isAttachedToCamera)
		{
			depth += depth + cameraObj.depth;
		}
		return depth;
		}
	this.___needSorting___ = function() {
		for (var i = 0; i < this.getNumChildren() - 1; i++)
		{
			var prevDepth = this.___GetDepth___(this.getChildAt(i));
			var nextDepth = this.___GetDepth___(this.getChildAt(i + 1));
			if (prevDepth < nextDepth)
				return true;
		}
		return false;
	}
	this.___sortFunction___ = function(obj1, obj2) {
		return (this.exportRoot.___GetDepth___(obj2) - this.exportRoot.___GetDepth___(obj1));
	}
	this.on('tick', function (event){
		var curTimeline = event.currentTarget;
		if (curTimeline.___needSorting___()){
			this.sortChildren(curTimeline.___sortFunction___);
		}
	});

	// timeline functions:
	this.frame_1149 = function() {
		this.___loopingOver___ = true;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(1149).call(this.frame_1149).wait(1));

	// Capa_1_obj_
	this.Capa_1 = new lib.Escena_1_Capa_1();
	this.Capa_1.name = "Capa_1";
	this.Capa_1.parent = this;
	this.Capa_1.depth = 0;
	this.Capa_1.isAttachedToCamera = 0
	this.Capa_1.isAttachedToMask = 0
	this.Capa_1.layerDepth = 0
	this.Capa_1.layerIndex = 0
	this.Capa_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Capa_1).wait(1150));

	// front_obj_
	this.front = new lib.Escena_1_front();
	this.front.name = "front";
	this.front.parent = this;
	this.front.setTransform(905.2,-56.9,1,1,0,0,0,905.2,-56.9);
	this.front.depth = 0;
	this.front.isAttachedToCamera = 0
	this.front.isAttachedToMask = 0
	this.front.layerDepth = 0
	this.front.layerIndex = 1
	this.front.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.front).to({_off:true},1122).wait(28));

	// Capa_6_obj_
	this.Capa_6 = new lib.Escena_1_Capa_6();
	this.Capa_6.name = "Capa_6";
	this.Capa_6.parent = this;
	this.Capa_6.depth = 0;
	this.Capa_6.isAttachedToCamera = 0
	this.Capa_6.isAttachedToMask = 0
	this.Capa_6.layerDepth = 0
	this.Capa_6.layerIndex = 2
	this.Capa_6.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Capa_6).wait(1106).to({_off:true},1).wait(43));

	// Capa_3_copia_obj_
	this.Capa_3_copia = new lib.Escena_1_Capa_3_copia();
	this.Capa_3_copia.name = "Capa_3_copia";
	this.Capa_3_copia.parent = this;
	this.Capa_3_copia.depth = 0;
	this.Capa_3_copia.isAttachedToCamera = 0
	this.Capa_3_copia.isAttachedToMask = 0
	this.Capa_3_copia.layerDepth = 0
	this.Capa_3_copia.layerIndex = 3
	this.Capa_3_copia.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Capa_3_copia).wait(4).to({x:684.95,y:322.95},0).wait(944).to({_off:true},1).wait(201));

	// Capa_3_obj_
	this.Capa_3 = new lib.Escena_1_Capa_3();
	this.Capa_3.name = "Capa_3";
	this.Capa_3.parent = this;
	this.Capa_3.setTransform(699.45,287.45,1,1,0,0,0,699.5,287.4);
	this.Capa_3.depth = 0;
	this.Capa_3.isAttachedToCamera = 0
	this.Capa_3.isAttachedToMask = 0
	this.Capa_3.layerDepth = 0
	this.Capa_3.layerIndex = 4
	this.Capa_3.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Capa_3).wait(944).to({_off:true},1).wait(205));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(737.1,-278.6,996.3000000000001,1023.5);
// library properties:
lib.properties = {
	id: 'C2FA08847F35054683EFD562441A8B59',
	width: 1920,
	height: 1080,
	fps: 24,
	color: "#FFFFFF",
	opacity: 0.00,
	manifest: [],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['C2FA08847F35054683EFD562441A8B59'] = {
	getStage: function() { return exportRoot.getStage(); },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}


// Layer depth API : 

AdobeAn.Layer = new function() {
	this.getLayerZDepth = function(timeline, layerName)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline." + layerName + ".depth; else 0;";
		return eval(script);
	}
	this.setLayerZDepth = function(timeline, layerName, zDepth)
	{
		const MAX_zDepth = 10000;
		const MIN_zDepth = -5000;
		if(zDepth > MAX_zDepth)
			zDepth = MAX_zDepth;
		else if(zDepth < MIN_zDepth)
			zDepth = MIN_zDepth;
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline." + layerName + ".depth = " + zDepth + ";";
		eval(script);
	}
	this.removeLayer = function(timeline, layerName)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline.removeChild(timeline." + layerName + ");";
		eval(script);
	}
	this.addNewLayer = function(timeline, layerName, zDepth)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		zDepth = typeof zDepth !== 'undefined' ? zDepth : 0;
		var layer = new createjs.MovieClip();
		layer.name = layerName;
		layer.depth = zDepth;
		layer.layerIndex = 0;
		timeline.addChild(layer);
	}
}


})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;