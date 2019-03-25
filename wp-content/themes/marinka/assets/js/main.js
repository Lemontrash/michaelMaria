
$(document).on('click', '#DownNavArrow', function(){
  fullpage_api.moveSectionDown();
});
$(document).on('click', '#UpNavArrow', function(){
  fullpage_api.moveSectionUp();
});



$(function() {

	// Preloader init
	
	// jQuery(document).ready(function($) {
	//   $(window).load(function() {
	//     setTimeout(function() {
	//        $('.wave').fadeOut('slow', function() {});
	//     }, 2000);

	//   });
	// });

	//First slide parallax

	// var scene = document.getElementById('scene');
	// var parallax = new Parallax(scene);
	
    $(".toggle-mnu").click(function() {
        $(this).toggleClass("active");
        $(".main-mnu").slideToggle();
        return false;
      });

    var myFullpage = new fullpage('#fullpage', {
	//Навигация
	menu: '#menu',
	lockAnchors: false,
	anchors:['main', 'aboutUs','portfolio','whyUs','partners','contactUs'],
	navigation: true,
	navigationPosition: 'right',
	navigationTooltips: ['01', '02', '03', '04', '05', '06'],
	showActiveTooltip: true,
	slidesNavigation: false,
	slidesNavPosition: 'bottom',

	//Скроллинг
	css3: true,
	scrollingSpeed: 700,
	autoScrolling: true,
	fitToSection: false,
	fitToSectionDelay: 1000,
	scrollBar: false,
	easing: 'easeInOutCubic',
	easingcss3: 'ease',
	loopBottom: false,
	loopTop: false,

	loopHorizontal: true,
	continuousVertical: false,
	continuousHorizontal: true,
	scrollHorizontally: true,
	interlockedSlides: false,
	dragAndMove: true,
	offsetSections: false,
	resetSliders: false,
	fadingEffect: false,
	normalScrollElements: '#element1, .element2',
	scrollOverflow: false,
	scrollOverflowReset: false,
	scrollOverflowOptions: null,
	touchSensitivity: 15,
	normalScrollElementTouchThreshold: 5,
	bigSectionsDestination: null,

	//Доступ
	keyboardScrolling: true,
	animateAnchor: true,
	recordHistory: true,

	//Дизайн
	controlArrows: true,
	verticalCentered: true,
	//sectionsColor : ['#ccc', '#fff'],
	responsiveWidth: 0,
	responsiveHeight: 0,
	responsiveSlides: false,
	parallax: false,
	parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

	//Настроить селекторы
	sectionSelector: '.section',
	slideSelector: '.slide',

	lazyLoading: true,

	onLeave: function(index, nextIndex, direction) {
				$('.coelix_logo a').addClass('HeaderColor');
				var currentSlideIndex = nextIndex.index;
				console.log(currentSlideIndex);

				if( currentSlideIndex == 1 ) { //2nd slide
			    	$('.arrowUp,.arrowDown').addClass('HeaderColor');
			    	$('.coelix_logo a').addClass('HeaderColor');
					$('#fp-nav ul li a span, .fp-slidesNav ul li a span').addClass('HeaderColor');
					$('.InfoBlock').addClass('animated slideInLeft');
					$('#fp-nav ul li .fp-tooltip.fp-right').addClass('HeaderColor');
					
			    }else if( currentSlideIndex == 0 ) { //1st slide
					$('.coelix_logo a').removeClass('HeaderColor');
			    	$('.arrowUp,.arrowDown').removeClass('HeaderColor');
					$('#fp-nav ul li a span, .fp-slidesNav ul li a span').removeClass('HeaderColor');
			    	$('.main_inner').addClass('animated slideInLeft');    	
			    	$('#fp-nav ul li .fp-tooltip.fp-right').removeClass('HeaderColor');		

			    }else if (currentSlideIndex == 2 ) { //3rd slide
			    	$('.coelix_logo a').removeClass('HeaderColor');
			    	$('.arrowUp,.arrowDown').removeClass('HeaderColor');
					$('#fp-nav ul li a span, .fp-slidesNav ul li a span').removeClass('HeaderColor');
					$('.PortfolioBlock').addClass('animated slideInRight');
					$('#fp-nav ul li .fp-tooltip.fp-right').removeClass('HeaderColor');		

			    }else if (currentSlideIndex == 3 ) { //4th slide
			    	
			    	$('.arrowUp,.arrowDown').addClass('HeaderColor');
					$('#fp-nav ul li a span, .fp-slidesNav ul li a span').addClass('HeaderColor');
					$('.arrowUp,.arrowDown').addClass('HeaderColor');
					$('.WhyUsBlock').addClass('animated slideInLeft');	
					$('#fp-nav ul li .fp-tooltip.fp-right').addClass('HeaderColor');			

			    } else if (currentSlideIndex == 4 ) { //5th slide
			    	$('.coelix_logo a').removeClass('HeaderColor');
			    	$('.arrowUp,.arrowDown').removeClass('HeaderColor');
			    	$('#fp-nav ul li a span, .fp-slidesNav ul li a span').removeClass('HeaderColor');
			    	$('.PartnerLogoRow').addClass('animated slideInRight');
			    	$('#fp-nav ul li .fp-tooltip.fp-right').removeClass('HeaderColor');		

			    } else if (currentSlideIndex == 5 ) { //6th slide
			    	$('.navbars-icon .navbars-line').addClass('MobileNavColor');
			    	$('.arrowUp,.arrowDown').addClass('HeaderColor');
			    	$('#fp-nav ul li a span, .fp-slidesNav ul li a span').addClass('HeaderColor');
					$('.ContactUsBlock').addClass('animated slideInLeft');	
					$('.BottomBlock').addClass('animated slideInRight');	
					$('#fp-nav ul li .fp-tooltip.fp-right').addClass('HeaderColor');		    	
			    } 
		    },


	//события
	afterLoad: function(origin, destination, direction){},
	afterRender: function(){},
	afterResize: function(width, height){},
	afterResponsive: function(isResponsive){},
	afterSlideLoad: function(section, origin, destination, direction){},
	onSlideLeave: function(section, origin, destination, direction){}
});


//particlesJS("particles-js", {"particles":{"number":{"value":5,"density":{"enable":true,"value_area":800}},"color":{"value":"#71629b"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000"},"polygon":{"nb_sides":3},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.6333477640418815,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":160,"random":true,"anim":{"enable":true,"speed":10,"size_min":40,"sync":false}},"line_linked":{"enable":false,"distance":200,"color":"#ffffff","opacity":1,"width":2},"move":{"enable":true,"speed":4,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"grab"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});;
//particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":3.2,"direction":"none","random":false,"straight":false,"out_mode":"bounce","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"window","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});;



// var renderer, scene, camera, ww, wh, particles;

// ww = window.innerWidth,
// wh = window.innerHeight;

// var centerVector = new THREE.Vector3(0, 0, 0);
// var previousTime = 0;

// var getImageData = function(image) {

// 	var canvas = document.createElement("canvas");
// 	canvas.width = image.width;
// 	canvas.height = image.height;

// 	var ctx = canvas.getContext("2d");
// 	ctx.drawImage(image, 0, 0);

// 	return ctx.getImageData(0, 0, image.width, image.height);
// }

// var drawTheMap = function() {

// 	var geometry = new THREE.Geometry();
// 	var material = new THREE.PointsMaterial({
// 		size: 3,
// 		color: 0x303856,
// 		sizeAttenuation: false
// 	});
// 	for (var y = 0, y2 = imagedata.height; y < y2; y += 2) {
// 		for (var x = 0, x2 = imagedata.width; x < x2; x += 2) {
// 			if (imagedata.data[(x * 4 + y * 4 * imagedata.width) + 3] > 128) {

// 				var vertex = new THREE.Vector3();
// 				vertex.x = Math.random() * 1000 - 500;
// 				vertex.y = Math.random() * 1000 - 500;
// 				vertex.z = -Math.random() * 500;

// 				vertex.destination = {
// 					x: x - imagedata.width / 2,
// 					y: -y + imagedata.height / 2,
// 					z: 0
// 				};

// 				vertex.speed = Math.random() / 200 + 0.015;

// 				geometry.vertices.push(vertex);
// 			}
// 		}
// 	}
// 	particles = new THREE.Points(geometry, material);

// 	scene.add(particles);

// 	requestAnimationFrame(render);
// };

// var init = function() {
// 	THREE.ImageUtils.crossOrigin = '';
// 	renderer = new THREE.WebGLRenderer({
// 		canvas: document.getElementById("map"),
// 		antialias: true
// 	});
// 	renderer.setSize(ww, wh);
// 	renderer.setClearColor(0x0b0925);

// 	scene = new THREE.Scene();

// 	camera = new THREE.PerspectiveCamera(50, ww / wh, 0.1, 10000);
// 	camera.position.set(-100, 0, 220);
// 	camera.lookAt(centerVector);
// 	scene.add(camera);

// 	texture = THREE.ImageUtils.loadTexture("https://s3-us-west-2.amazonaws.com/s.cdpn.io/127738/transparentMap.png", undefined, function() {
// 		imagedata = getImageData(texture.image);
// 		drawTheMap();
// 	});
//   window.addEventListener('resize', onResize, false);

// };
// var onResize = function(){
// 	ww = window.innerWidth;
// 	wh = window.innerHeight;
// 	renderer.setSize(ww, wh);
//     camera.aspect = ww / wh;
//     camera.updateProjectionMatrix();
// };

// var render = function(a) {

// 	requestAnimationFrame(render);

// 	for (var i = 0, j = particles.geometry.vertices.length; i < j; i++) {
// 		var particle = particles.geometry.vertices[i];
// 		particle.x += (particle.destination.x - particle.x) * particle.speed;
// 		particle.y += (particle.destination.y - particle.y) * particle.speed;
// 		particle.z += (particle.destination.z - particle.z) * particle.speed;
// 	}

// 	if(a-previousTime>100){
// 		var index = Math.floor(Math.random()*particles.geometry.vertices.length);
// 		var particle1 = particles.geometry.vertices[index];
// 		var particle2 = particles.geometry.vertices[particles.geometry.vertices.length-index];
// 		// TweenMax.to(particle, Math.random()*2+1,{x:particle2.x, y:particle2.y, ease:Power2.easeInOut});
// 		// TweenMax.to(particle2, Math.random()*2+1,{x:particle1.x, y:particle1.y, ease:Power2.easeInOut});
// 		previousTime = a;
// 	}

// 	particles.geometry.verticesNeedUpdate = true;
// 	camera.position.x = Math.sin(a / 5000) * 100;
// 	camera.lookAt(centerVector);

// 	renderer.render(scene, camera);
// };

// init();



// var granimInstance = new Granim({
//     element: '#fox',
//     direction: 'left-right',
//     states : {
//         "default-state": {
//             gradients: [
//                 ['#EB3349', '#F45C43'],
//                 ['#FF8008', '#FFC837'],
//                 ['#4CB8C4', '#3CD3AD'],
//                 ['#24C6DC', '#514A9D'],
//                 ['#FF512F', '#DD2476'],
//                 ['#DA22FF', '#9733EE']
//             ],
//             transitionSpeed: 2000
//         }
//     }
// });


//slick
$(document).ready(function(){
  $('.customers_slider').slick({
	dots : true,
	arrows : false,
	slidesToShow: 3,
	slidesToScroll: 3

  });
});


//form ajax
$('.contacts form').on('submit', function(e){
   e.preventDefault();

   $.ajax({
    url: 'http://coelix.com/wp-admin/admin-ajax.php',
    method: 'POST',
    data: $(this).serializeArray(),
    dataType: 'json',
    success: function (data) {
     console.log(data);
     alert('Success');
     if(!data.success){
      alert(data.message);
     }
   },
   error : function(data) {
   	console.log(data);
   	alert('Error');
   }
   
  } );
});



//Polygon background

// var renderer	= new THREE.WebGLRenderer({
// 		antialias	: true
// 	});
// /* Fullscreen */
// 	renderer.setSize( window.innerWidth, window.innerHeight );
// /* Append to HTML */
// 	var main_section = document.getElementById('main_section');
// 	main_section.appendChild( renderer.domElement );
// 	var onRenderFcts= [];
// 	var scene	= new THREE.Scene();
// 	var camera	= new THREE.PerspectiveCamera(25, window.innerWidth /    window.innerHeight, 0.01, 1000);
// /* Play around with camera positioning */
// 	camera.position.z = 15; 
//   camera.position.y = 2;
// /* Fog provides depth to the landscape*/
//   scene.fog = new THREE.Fog(0x000, 0, 45);
// 	;(function(){
// 		var light	= new THREE.AmbientLight( 0x202020 )
// 		scene.add( light )
// 		var light	= new THREE.DirectionalLight('white', 5)
// 		light.position.set(0.5, 0.0, 2)
// 		scene.add( light )
// 		var light	= new THREE.DirectionalLight('white', 0.75*2)
// 		light.position.set(-0.5, -0.5, -2)
// 		scene.add( light )		
// 	})()
// 	var heightMap	= THREEx.Terrain.allocateHeightMap(256,256)
// 	THREEx.Terrain.simplexHeightMap(heightMap)	
// 	var geometry	= THREEx.Terrain.heightMapToPlaneGeometry(heightMap)
// 	THREEx.Terrain.heightMapToVertexColor(heightMap, geometry)
// /* Wireframe built-in color is white, no need to change that */
// 	var material	= new THREE.MeshBasicMaterial({
// 		wireframe: true
// 	});
// 	var mesh	= new THREE.Mesh( geometry, material );
// 	scene.add( mesh );
// 	mesh.lookAt(new THREE.Vector3(0,1,0));
// /* Play around with the scaling */
// 	mesh.scale.y	= 3.5;
// 	mesh.scale.x	= 3;
// 	mesh.scale.z	= 0.20;
// 	mesh.scale.multiplyScalar(10);
// /* Play around with the camera */
// 	onRenderFcts.push(function(delta, now){
// 		mesh.rotation.z += 0 * delta;	
// 	})
// 	onRenderFcts.push(function(){
// 		renderer.render( scene, camera );		
// 	})
// 	var lastTimeMsec= null
// 	requestAnimationFrame(function animate(nowMsec){
// 		requestAnimationFrame( animate );
// 		lastTimeMsec	= lastTimeMsec || nowMsec-1000/60
// 		var deltaMsec	= Math.min(200, nowMsec - lastTimeMsec)
// 		lastTimeMsec	= nowMsec
// 		onRenderFcts.forEach(function(onRenderFct){
// 			onRenderFct(deltaMsec/1000, nowMsec/1000)
// 		})
// 	})



});


//liquid button

// $(function() {
// 	//Vars
// 	var pointsA = [],
// 		pointsB = [],
// 		$canvas = null,
// 		canvas = null,
// 		context = null,
// 		vars = null,
// 		points = 8,
// 		viscosity = 20,
// 		mouseDist = 70,
// 		damping = 0.05,
// 		showIndicators = false;
// 		mouseX = 0,
// 		mouseY = 0,
// 		relMouseX = 0,
// 		relMouseY = 0,
// 		mouseLastX = 0,
// 		mouseLastY = 0,
// 		mouseDirectionX = 0,
// 		mouseDirectionY = 0,
// 		mouseSpeedX = 0,
// 		mouseSpeedY = 0;

// 	/**
// 	 * Get mouse direction
// 	 */
// 	function mouseDirection(e) {
// 		if (mouseX < e.pageX)
// 			mouseDirectionX = 1;
// 		else if (mouseX > e.pageX)
// 			mouseDirectionX = -1;
// 		else
// 			mouseDirectionX = 0;

// 		if (mouseY < e.pageY)
// 			mouseDirectionY = 1;
// 		else if (mouseY > e.pageY)
// 			mouseDirectionY = -1;
// 		else
// 			mouseDirectionY = 0;

// 		mouseX = e.pageX;
// 		mouseY = e.pageY;

// 		relMouseX = (mouseX - $canvas.offset().left);
// 		relMouseY = (mouseY - $canvas.offset().top);
// 	}
// 	$(document).on('mousemove', mouseDirection);

// 	/**
// 	 * Get mouse speed
// 	 */
// 	function mouseSpeed() {
// 		mouseSpeedX = mouseX - mouseLastX;
// 		mouseSpeedY = mouseY - mouseLastY;

// 		mouseLastX = mouseX;
// 		mouseLastY = mouseY;

// 		setTimeout(mouseSpeed, 50);
// 	}
// 	mouseSpeed();

// 	/**
// 	 * Init button
// 	 */
// 	function initButton() {
// 		// Get button
// 		var button = $('.btn-liquid');
// 		var buttonWidth = button.width();
// 		var buttonHeight = button.height();

// 		// Create canvas
// 		$canvas = $('<canvas></canvas>');
// 		button.append($canvas);

// 		canvas = $canvas.get(0);
// 		canvas.width = buttonWidth+100;
// 		canvas.height = buttonHeight+100;
// 		context = canvas.getContext('2d');

// 		// Add points

// 		var x = buttonHeight/2;
// 		for(var j = 1; j < points; j++) {
// 			addPoints((x+((buttonWidth-buttonHeight)/points)*j), 0);
// 		}
// 		addPoints(buttonWidth-buttonHeight/5, 0);
// 		addPoints(buttonWidth+buttonHeight/10, buttonHeight/2);
// 		addPoints(buttonWidth-buttonHeight/5, buttonHeight);
// 		for(var j = points-1; j > 0; j--) {
// 			addPoints((x+((buttonWidth-buttonHeight)/points)*j), buttonHeight);
// 		}
// 		addPoints(buttonHeight/5, buttonHeight);

// 		addPoints(-buttonHeight/10, buttonHeight/2);
// 		addPoints(buttonHeight/5, 0);
// 		// addPoints(x, 0);
// 		// addPoints(0, buttonHeight/2);

// 		// addPoints(0, buttonHeight/2);
// 		// addPoints(buttonHeight/4, 0);

// 		// Start render
// 		renderCanvas();
// 	}

// 	/**
// 	 * Add points
// 	 */
// 	function addPoints(x, y) {
// 		pointsA.push(new Point(x, y, 1));
// 		pointsB.push(new Point(x, y, 2));
// 	}

// 	/**
// 	 * Point
// 	 */
// 	function Point(x, y, level) {
// 	  this.x = this.ix = 50+x;
// 	  this.y = this.iy = 50+y;
// 	  this.vx = 0;
// 	  this.vy = 0;
// 	  this.cx1 = 0;
// 	  this.cy1 = 0;
// 	  this.cx2 = 0;
// 	  this.cy2 = 0;
// 	  this.level = level;
// 	}

// 	Point.prototype.move = function() {
// 		this.vx += (this.ix - this.x) / (viscosity*this.level);
// 		this.vy += (this.iy - this.y) / (viscosity*this.level);

// 		var dx = this.ix - relMouseX,
// 			dy = this.iy - relMouseY;
// 		var relDist = (1-Math.sqrt((dx * dx) + (dy * dy))/mouseDist);

// 		// Move x
// 		if ((mouseDirectionX > 0 && relMouseX > this.x) || (mouseDirectionX < 0 && relMouseX < this.x)) {
// 			if (relDist > 0 && relDist < 1) {
// 				this.vx = (mouseSpeedX / 4) * relDist;
// 			}
// 		}
// 		this.vx *= (1 - damping);
// 		this.x += this.vx;

// 		// Move y
// 		if ((mouseDirectionY > 0 && relMouseY > this.y) || (mouseDirectionY < 0 && relMouseY < this.y)) {
// 			if (relDist > 0 && relDist < 1) {
// 				this.vy = (mouseSpeedY / 4) * relDist;
// 			}
// 		}
// 		this.vy *= (1 - damping);
// 		this.y += this.vy;
// 	};


// 	/**
// 	 * Render canvas
// 	 */
// 	function renderCanvas() {
// 		// rAF
// 		rafID = requestAnimationFrame(renderCanvas);

// 		// Clear scene
// 		context.clearRect(0, 0, $canvas.width(), $canvas.height());
// 		context.fillStyle = 'transparent';
// 		context.fillRect(0, 0, $canvas.width(), $canvas.height());

// 		// Move points
// 		for (var i = 0; i <= pointsA.length - 1; i++) {
// 			pointsA[i].move();
// 			pointsB[i].move();
// 		}

// 		// Create dynamic gradient
// 		var gradientX = Math.min(Math.max(mouseX - $canvas.offset().left, 0), $canvas.width());
// 		var gradientY = Math.min(Math.max(mouseY - $canvas.offset().top, 0), $canvas.height());
// 		var distance = Math.sqrt(Math.pow(gradientX - $canvas.width()/2, 2) + Math.pow(gradientY - $canvas.height()/2, 2)) / Math.sqrt(Math.pow($canvas.width()/2, 2) + Math.pow($canvas.height()/2, 2));

// 		var gradient = context.createRadialGradient(gradientX, gradientY, 300+(300*distance), gradientX, gradientY, 0);
// 		gradient.addColorStop(0, '#0370fe');
// 		gradient.addColorStop(1, '#41e0e1');

// 		// Draw shapes
// 		var groups = [pointsA, pointsB]

// 		for (var j = 0; j <= 1; j++) {
// 			var points = groups[j];

// 			if (j == 0) {
// 				// Background style
// 				context.fillStyle = '#1CE2D8';
// 			} else {
// 				// Foreground style
// 				context.fillStyle = gradient;
// 			}

// 			context.beginPath();
// 			context.moveTo(points[0].x, points[0].y);

// 			for (var i = 0; i < points.length; i++) {
// 				var p = points[i];
// 				var nextP = points[i + 1];
// 				var val = 30*0.552284749831;

// 				if (nextP != undefined) {
// 					// if (nextP.ix > p.ix && nextP.iy < p.iy) {
// 					// 	p.cx1 = p.x;
// 					// 	p.cy1 = p.y-val;
// 					// 	p.cx2 = nextP.x-val;
// 					// 	p.cy2 = nextP.y;
// 					// } else if (nextP.ix > p.ix && nextP.iy > p.iy) {
// 					// 	p.cx1 = p.x+val;
// 					// 	p.cy1 = p.y;
// 					// 	p.cx2 = nextP.x;
// 					// 	p.cy2 = nextP.y-val;
// 					// }  else if (nextP.ix < p.ix && nextP.iy > p.iy) {
// 					// 	p.cx1 = p.x;
// 					// 	p.cy1 = p.y+val;
// 					// 	p.cx2 = nextP.x+val;
// 					// 	p.cy2 = nextP.y;
// 					// } else if (nextP.ix < p.ix && nextP.iy < p.iy) {
// 					// 	p.cx1 = p.x-val;
// 					// 	p.cy1 = p.y;
// 					// 	p.cx2 = nextP.x;
// 					// 	p.cy2 = nextP.y+val;
// 					// } else {

// 						p.cx1 = (p.x+nextP.x)/2;
// 						p.cy1 = (p.y+nextP.y)/2;
// 						p.cx2 = (p.x+nextP.x)/2;
// 						p.cy2 = (p.y+nextP.y)/2;

// 						context.bezierCurveTo(p.x, p.y, p.cx1, p.cy1, p.cx1, p.cy1);
// 					// 	continue;
// 					// }

// 					// context.bezierCurveTo(p.cx1, p.cy1, p.cx2, p.cy2, nextP.x, nextP.y);
// 				} else {
// 						nextP = points[0];
// 						p.cx1 = (p.x+nextP.x)/2;
// 						p.cy1 = (p.y+nextP.y)/2;

// 						context.bezierCurveTo(p.x, p.y, p.cx1, p.cy1, p.cx1, p.cy1);
// 				}
// 			}

// 			// context.closePath();
// 			context.fill();
// 		}

// 		if (showIndicators) {
// 			// Draw points
// 			context.fillStyle = '#000';
// 			context.beginPath();
// 			for (var i = 0; i < pointsA.length; i++) {
// 				var p = pointsA[i];

// 				context.rect(p.x - 1, p.y - 1, 2, 2);
// 			}
// 			context.fill();

// 			// Draw controls
// 			context.fillStyle = '#f00';
// 			context.beginPath();
// 			for (var i = 0; i < pointsA.length; i++) {
// 				var p = pointsA[i];

// 				context.rect(p.cx1 - 1, p.cy1 - 1, 2, 2);
// 				context.rect(p.cx2 - 1, p.cy2 - 1, 2, 2);
// 			}
// 			context.fill();
// 		}
// 	}

// 	// Init
// 	initButton();
// });