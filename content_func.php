<?php

include_once('conn.php');

function displayPatterns($wish_array, $msg_array){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title>Hey <?php echo $wish_array['wishname']; ?>, You got a wish from <?php echo $wish_array['name']; ?></title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet"> 
    	<style>
    	    /* Change the gradient angle to get different result */

        css-doodle {
          --rule: (
            :doodle {
              @grid: 13 / 100vmax;
              @min-size: 800px;
            }
            :container {
              transform: 
                rotateY(30deg) rotate(10deg) 
                scale(1.5);
            }
            :after {
              content: '';
              @size: 61.8%;
              background-size: @rand(5%, 50%) @rand(5%, 50%);
              background-position: center;
            }
            @even {
              background: #df0054;
              :after { 
                background-image: linear-gradient(
                  0deg,
                  #f7f1e7 50%, transparent 50% 
                );
              }
            }
            @odd {
              background: @pick(#f7f1e7, #10004a);
              :after { 
                background-image: linear-gradient(
                  90deg, 
                  #df0054 50%, transparent 50% 
                );
              }
            } 
          );
        }
        
        
        html, body {
          margin: 0;
          overflow: hidden;
        }
        .containerx{
          z-index:9999;
          position:fixed;
          top:50%;
          left:50%;
          margin:5% auto;
          transform: translate(-50%, -50%);
          color:white;
          background: rgba(0, 0, 0, 0.7);
          padding:6%;
        }
        .wishnamex{
            font-size:3em;
            font-family: 'Permanent Marker', cursive;
        }
        .namex{
            font-size:2em;
            font-family: 'Permanent Marker', cursive;
        }
        .msgx{
            font-size:1.5em;
            font-family: 'Pacifico', cursive;
        }
        .namez{
            color:#df0054;
        }
    	</style>
    </head>
    <body id="bodyx">
    <css-doodle use="var(--rule)">
    </css-doodle>
    <span class="containerx">
        <div class="wishnamex">Hey <span class="namez"><?php echo $wish_array['wishname']; ?></span></div><br><br>
        <div class="msgx">
            <?php echo $msg_array[$wish_array['default_msg']]; ?>
            <?php echo $wish_array['custom_msg']; ?>
        </div><br><br>
        <div class="namex"> - <span class="namez"><?php echo $wish_array['name']; ?></span></div>
    </span>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/css-doodle/0.3.0/css-doodle.min.js"></script>
    	<script>
    	    document.body.addEventListener('click', function(e) {
              e.target.update && e.target.update();
            });
            document.body.addEventListener('mouseover', function(e) {
              e.target.update && e.target.update();
            });
            function changex(){
                triggerEvent(document.body, 'click');
               
            }
            function triggerEvent( elem, event ) {
              var clickEvent = new Event( event ); // Create the event.
              elem.dispatchEvent( clickEvent );    // Dispatch the event.
            }
            setInterval( changex, 1000);
            
    	</script>
    </body>
    </html>

    <?php
}

function displaySurprise($wish_array, $msg_array){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title>Hey <?php echo $wish_array['wishname']; ?>, You got a wish from <?php echo $wish_array['name']; ?></title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet"> 
    	<style>
    	    /* Change the gradient angle to get different result */

       `html, body {
            overflow: hidden;
            padding:50px;
            color:#fff;
        }

        body {
        background: url(/images/bgx1.jpg) no-repeat center center fixed;
        	-webkit-background-size: cover;
        	-moz-background-size: cover;
        	-o-background-size: cover;
        	background-size: cover;
        }
        
        canvas {
        	position: fixed;
        	top:0;
        	left:0;
        	width:100%;
        	height:100%;
        	z-index:0.5;
        	opacity:1;
        }
        .containerx{
          z-index:9999;
          position:fixed;
          top:50%;
          left:50%;
          transform: translate(-50%, -50%);
          color:white;
          background: rgba(0, 0, 0, 0.7);
          padding:3%;
        }
        .wishnamex{
            font-size:3em;
            font-family: 'Permanent Marker', cursive;
        }
        .namex{
            font-size:2em;
            font-family: 'Permanent Marker', cursive;
        }
        .msgx{
            font-size:1.5em;
            font-family: 'Pacifico', cursive;
        }
        .namez{
            color:#df0054;
        }
        .info{
                font-family: 'Hubballi', cursive;
                font-size: 1em;
        }
    	</style>
    	
    </head>
    <body id="bodyx">
    <canvas></canvas>
    <span class="containerx">
        <div class="wishnamex">Hey <span class="namez"><?php echo $wish_array['wishname']; ?></span></div><br><br>
        <div class="msgx">
            <?php echo $msg_array[$wish_array['default_msg']]; ?>
            <?php echo $wish_array['custom_msg']; ?>
        </div><br><br>
        <div class="namex"> - <span class="namez"><?php echo $wish_array['name']; ?></span></div>
        <div class="info">[Hover/Click/Tap to see the Surprise]</div>
    </span>

    	<script>
            	    /*
        ORIGINAL WORK
        https://codepen.io/PavelDoGreat/pen/zdWzEL
        */
        
        'use strict';
        
        function _classCallCheck(instance, Constructor) {if (!(instance instanceof Constructor)) {throw new TypeError("Cannot call a class as a function");}}
        
        var canvas = document.getElementsByTagName('canvas')[0];
        canvas.width = canvas.clientWidth;
        canvas.height = canvas.clientHeight;
        
        var params = { alpha: false, depth: false, stencil: false, antialias: false };
        var gl = canvas.getContext('webgl2', params);
        var isWebGL2 = !!gl;
        if (!isWebGL2) {
          gl = canvas.getContext('webgl', params) || canvas.getContext('experimental-webgl', params);
        }
        gl.clearColor(0.0, 0.0, 0.0, 1.0);
        
        var halfFloat = gl.getExtension('OES_texture_half_float');
        var support_linear_float = gl.getExtension('OES_texture_half_float_linear');
        if (isWebGL2) {
          gl.getExtension('EXT_color_buffer_float');
          support_linear_float = gl.getExtension('OES_texture_float_linear');
        }
        
        var TEXTURE_DOWNSAMPLE = 1;
        var DENSITY_DISSIPATION = 0.98;
        var VELOCITY_DISSIPATION = 0.99;
        var SPLAT_RADIUS = 0.005;
        var CURL = 30;
        var PRESSURE_ITERATIONS = 25;
        
        var GLProgram = function () {
          function GLProgram(vertexShader, fragmentShader) {
            _classCallCheck(this, GLProgram);
        
            this.uniforms = {};
            this.program = gl.createProgram();
        
            gl.attachShader(this.program, vertexShader);
            gl.attachShader(this.program, fragmentShader);
            gl.linkProgram(this.program);
        
            if (!gl.getProgramParameter(this.program, gl.LINK_STATUS)) throw gl.getProgramInfoLog(this.program);
        
            var uniformCount = gl.getProgramParameter(this.program, gl.ACTIVE_UNIFORMS);
            for (var i = 0; i < uniformCount; i++) {
              var uniformName = gl.getActiveUniform(this.program, i).name;
              this.uniforms[uniformName] = gl.getUniformLocation(this.program, uniformName);
            }
          }
        
          GLProgram.prototype.bind = function bind() {
            gl.useProgram(this.program);
          };
        
          return GLProgram;
        }();
        
        function compileShader(type, source) {
          var shader = gl.createShader(type);
          gl.shaderSource(shader, source);
          gl.compileShader(shader);
        
          if (!gl.getShaderParameter(shader, gl.COMPILE_STATUS)) throw gl.getShaderInfoLog(shader);
        
          return shader;
        };
        
        var baseVertexShader = compileShader(gl.VERTEX_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    attribute vec2 aPosition;\n    varying vec2 vUv;\n    varying vec2 vL;\n    varying vec2 vR;\n    varying vec2 vT;\n    varying vec2 vB;\n    uniform vec2 texelSize;\n\n    void main () {\n        vUv = aPosition * 0.5 + 0.5;\n        vL = vUv - vec2(texelSize.x, 0.0);\n        vR = vUv + vec2(texelSize.x, 0.0);\n        vT = vUv + vec2(0.0, texelSize.y);\n        vB = vUv - vec2(0.0, texelSize.y);\n        gl_Position = vec4(aPosition, 0.0, 1.0);\n    }\n');
        
        var displayShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    varying vec2 vL;\n    varying vec2 vR;\n    varying vec2 vT;\n    varying vec2 vB;\n    uniform sampler2D uTexture;\n\n    void main () {\n        gl_FragColor = texture2D(uTexture, vUv);\n    }\n');
        
        var splatShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    uniform sampler2D uTarget;\n    uniform float aspectRatio;\n    uniform vec3 color;\n    uniform vec2 point;\n    uniform float radius;\n\n    void main () {\n        vec2 p = vUv - point.xy;\n        p.x *= aspectRatio;\n        vec3 splat = exp(-dot(p, p) / radius) * color;\n        vec3 base = texture2D(uTarget, vUv).xyz;\n        gl_FragColor = vec4(base + splat, 1.0);\n    }\n');
        
        var advectionManualFilteringShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    uniform sampler2D uVelocity;\n    uniform sampler2D uSource;\n    uniform vec2 texelSize;\n    uniform float dt;\n    uniform float dissipation;\n\n    vec4 bilerp (in sampler2D sam, in vec2 p) {\n        vec4 st;\n        st.xy = floor(p - 0.5) + 0.5;\n        st.zw = st.xy + 1.0;\n        vec4 uv = st * texelSize.xyxy;\n        vec4 a = texture2D(sam, uv.xy);\n        vec4 b = texture2D(sam, uv.zy);\n        vec4 c = texture2D(sam, uv.xw);\n        vec4 d = texture2D(sam, uv.zw);\n        vec2 f = p - st.xy;\n        return mix(mix(a, b, f.x), mix(c, d, f.x), f.y);\n    }\n\n    void main () {\n        vec2 coord = gl_FragCoord.xy - dt * texture2D(uVelocity, vUv).xy;\n        gl_FragColor = dissipation * bilerp(uSource, coord);\n        gl_FragColor.a = 1.0;\n    }\n');
        
        var advectionShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    uniform sampler2D uVelocity;\n    uniform sampler2D uSource;\n    uniform vec2 texelSize;\n    uniform float dt;\n    uniform float dissipation;\n\n    void main () {\n        vec2 coord = vUv - dt * texture2D(uVelocity, vUv).xy * texelSize;\n        gl_FragColor = dissipation * texture2D(uSource, coord);\n    }\n');
        
        var divergenceShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    varying vec2 vL;\n    varying vec2 vR;\n    varying vec2 vT;\n    varying vec2 vB;\n    uniform sampler2D uVelocity;\n\n    vec2 sampleVelocity (in vec2 uv) {\n        vec2 multiplier = vec2(1.0, 1.0);\n        if (uv.x < 0.0) { uv.x = 0.0; multiplier.x = -1.0; }\n        if (uv.x > 1.0) { uv.x = 1.0; multiplier.x = -1.0; }\n        if (uv.y < 0.0) { uv.y = 0.0; multiplier.y = -1.0; }\n        if (uv.y > 1.0) { uv.y = 1.0; multiplier.y = -1.0; }\n        return multiplier * texture2D(uVelocity, uv).xy;\n    }\n\n    void main () {\n        float L = sampleVelocity(vL).x;\n        float R = sampleVelocity(vR).x;\n        float T = sampleVelocity(vT).y;\n        float B = sampleVelocity(vB).y;\n        float div = 0.5 * (R - L + T - B);\n        gl_FragColor = vec4(div, 0.0, 0.0, 1.0);\n    }\n');
        
        var curlShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    varying vec2 vL;\n    varying vec2 vR;\n    varying vec2 vT;\n    varying vec2 vB;\n    uniform sampler2D uVelocity;\n\n    void main () {\n        float L = texture2D(uVelocity, vL).y;\n        float R = texture2D(uVelocity, vR).y;\n        float T = texture2D(uVelocity, vT).x;\n        float B = texture2D(uVelocity, vB).x;\n        float vorticity = R - L - T + B;\n        gl_FragColor = vec4(vorticity, 0.0, 0.0, 1.0);\n    }\n');
        
        var vorticityShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    varying vec2 vL;\n    varying vec2 vR;\n    varying vec2 vT;\n    varying vec2 vB;\n    uniform sampler2D uVelocity;\n    uniform sampler2D uCurl;\n    uniform float curl;\n    uniform float dt;\n\n    void main () {\n        float L = texture2D(uCurl, vL).y;\n        float R = texture2D(uCurl, vR).y;\n        float T = texture2D(uCurl, vT).x;\n        float B = texture2D(uCurl, vB).x;\n        float C = texture2D(uCurl, vUv).x;\n        vec2 force = vec2(abs(T) - abs(B), abs(R) - abs(L));\n        force *= 1.0 / length(force + 0.00001) * curl * C;\n        vec2 vel = texture2D(uVelocity, vUv).xy;\n        gl_FragColor = vec4(vel + force * dt, 0.0, 1.0);\n    }\n');
        
        var pressureShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    varying vec2 vL;\n    varying vec2 vR;\n    varying vec2 vT;\n    varying vec2 vB;\n    uniform sampler2D uPressure;\n    uniform sampler2D uDivergence;\n\n    vec2 boundary (in vec2 uv) {\n        uv = min(max(uv, 0.0), 1.0);\n        return uv;\n    }\n\n    void main () {\n        float L = texture2D(uPressure, boundary(vL)).x;\n        float R = texture2D(uPressure, boundary(vR)).x;\n        float T = texture2D(uPressure, boundary(vT)).x;\n        float B = texture2D(uPressure, boundary(vB)).x;\n        float C = texture2D(uPressure, vUv).x;\n        float divergence = texture2D(uDivergence, vUv).x;\n        float pressure = (L + R + B + T - divergence) * 0.25;\n        gl_FragColor = vec4(pressure, 0.0, 0.0, 1.0);\n    }\n');
        
        var gradientSubtractShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    varying vec2 vL;\n    varying vec2 vR;\n    varying vec2 vT;\n    varying vec2 vB;\n    uniform sampler2D uPressure;\n    uniform sampler2D uVelocity;\n\n    vec2 boundary (in vec2 uv) {\n        uv = min(max(uv, 0.0), 1.0);\n        return uv;\n    }\n\n    void main () {\n        float L = texture2D(uPressure, boundary(vL)).x;\n        float R = texture2D(uPressure, boundary(vR)).x;\n        float T = texture2D(uPressure, boundary(vT)).x;\n        float B = texture2D(uPressure, boundary(vB)).x;\n        vec2 velocity = texture2D(uVelocity, vUv).xy;\n        velocity.xy -= vec2(R - L, T - B);\n        gl_FragColor = vec4(velocity, 0.0, 1.0);\n    }\n');
        
        var blit = function () {
          gl.bindBuffer(gl.ARRAY_BUFFER, gl.createBuffer());
          gl.bufferData(gl.ARRAY_BUFFER, new Float32Array([-1, -1, -1, 1, 1, 1, 1, -1]), gl.STATIC_DRAW);
          gl.bindBuffer(gl.ELEMENT_ARRAY_BUFFER, gl.createBuffer());
          gl.bufferData(gl.ELEMENT_ARRAY_BUFFER, new Uint16Array([0, 1, 2, 0, 2, 3]), gl.STATIC_DRAW);
          gl.vertexAttribPointer(0, 2, gl.FLOAT, false, 0, 0);
          gl.enableVertexAttribArray(0);
        
          return function (destination) {
            gl.bindFramebuffer(gl.FRAMEBUFFER, destination);
            gl.drawElements(gl.TRIANGLES, 6, gl.UNSIGNED_SHORT, 0);
          };
        }();
        
        function clear(target) {
          gl.bindFramebuffer(gl.FRAMEBUFFER, target);
          gl.clear(gl.COLOR_BUFFER_BIT);
        }
        
        function createFBO(texId, w, h, internalFormat, format, type, param) {
          gl.activeTexture(gl.TEXTURE0 + texId);
          var texture = gl.createTexture();
          gl.bindTexture(gl.TEXTURE_2D, texture);
          gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MIN_FILTER, param);
          gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MAG_FILTER, param);
          gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_WRAP_S, gl.CLAMP_TO_EDGE);
          gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_WRAP_T, gl.CLAMP_TO_EDGE);
          gl.texImage2D(gl.TEXTURE_2D, 0, internalFormat, w, h, 0, format, type, null);
        
          var fbo = gl.createFramebuffer();
          gl.bindFramebuffer(gl.FRAMEBUFFER, fbo);
          gl.framebufferTexture2D(gl.FRAMEBUFFER, gl.COLOR_ATTACHMENT0, gl.TEXTURE_2D, texture, 0);
          gl.viewport(0, 0, w, h);
          gl.clear(gl.COLOR_BUFFER_BIT);
        
          return [texture, fbo, texId];
        }
        
        function createDoubleFBO(texId, w, h, internalFormat, format, type, param) {
          var fbo1 = createFBO(texId, w, h, internalFormat, format, type, param);
          var fbo2 = createFBO(texId + 1, w, h, internalFormat, format, type, param);
        
          return {
            get first() {
              return fbo1;
            },
            get second() {
              return fbo2;
            },
            swap: function swap() {
              var temp = fbo1;
              fbo1 = fbo2;
              fbo2 = temp;
            } };
        
        }
        
        var textureWidth = undefined;
        var textureHeight = undefined;
        var density = undefined;
        var velocity = undefined;
        var divergence = undefined;
        var curl = undefined;
        var pressure = undefined;
        
        function initFramebuffers() {
          textureWidth = gl.drawingBufferWidth >> TEXTURE_DOWNSAMPLE;
          textureHeight = gl.drawingBufferHeight >> TEXTURE_DOWNSAMPLE;
        
          var internalFormat = isWebGL2 ? gl.RGBA16F : gl.RGBA;
          var internalFormatRG = isWebGL2 ? gl.RG16F : gl.RGBA;
          var formatRG = isWebGL2 ? gl.RG : gl.RGBA;
          var texType = isWebGL2 ? gl.HALF_FLOAT : halfFloat.HALF_FLOAT_OES;
        
          density = createDoubleFBO(0, textureWidth, textureHeight, internalFormat, gl.RGBA, texType, support_linear_float ? gl.LINEAR : gl.NEAREST);
          velocity = createDoubleFBO(2, textureWidth, textureHeight, internalFormatRG, formatRG, texType, support_linear_float ? gl.LINEAR : gl.NEAREST);
          divergence = createFBO(4, textureWidth, textureHeight, internalFormatRG, formatRG, texType, gl.NEAREST);
          curl = createFBO(5, textureWidth, textureHeight, internalFormatRG, formatRG, texType, gl.NEAREST);
          pressure = createDoubleFBO(6, textureWidth, textureHeight, internalFormatRG, formatRG, texType, gl.NEAREST);
        }
        
        initFramebuffers();
        
        var displayProgram = new GLProgram(baseVertexShader, displayShader);
        var splatProgram = new GLProgram(baseVertexShader, splatShader);
        var advectionProgram = new GLProgram(baseVertexShader, support_linear_float ? advectionShader : advectionManualFilteringShader);
        var divergenceProgram = new GLProgram(baseVertexShader, divergenceShader);
        var curlProgram = new GLProgram(baseVertexShader, curlShader);
        var vorticityProgram = new GLProgram(baseVertexShader, vorticityShader);
        var pressureProgram = new GLProgram(baseVertexShader, pressureShader);
        var gradienSubtractProgram = new GLProgram(baseVertexShader, gradientSubtractShader);
        
        function pointerPrototype() {
          this.id = -1;
          this.x = 0;
          this.y = 0;
          this.dx = 0;
          this.dy = 0;
          this.down = false;
          this.moved = false;
          this.color = [30, 0, 300];
        }
        
        var pointers = [];
        pointers.push(new pointerPrototype());
        
        for (var i = 0; i < 10; i++) {
          var color = [Math.random() * 10, Math.random() * 10, Math.random() * 10];
          var x = canvas.width * Math.random();
          var y = canvas.height * Math.random();
          var dx = 1000 * (Math.random() - 0.5);
          var dy = 1000 * (Math.random() - 0.5);
          splat(x, y, dx, dy, color);
        }
        
        var lastTime = Date.now();
        Update();
        
        function Update() {
          resizeCanvas();
        
          var dt = Math.min((Date.now() - lastTime) / 1000, 0.016);
          lastTime = Date.now();
        
          gl.viewport(0, 0, textureWidth, textureHeight);
        
          advectionProgram.bind();
          gl.uniform2f(advectionProgram.uniforms.texelSize, 1.0 / textureWidth, 1.0 / textureHeight);
          gl.uniform1i(advectionProgram.uniforms.uVelocity, velocity.first[2]);
          gl.uniform1i(advectionProgram.uniforms.uSource, velocity.first[2]);
          gl.uniform1f(advectionProgram.uniforms.dt, dt);
          gl.uniform1f(advectionProgram.uniforms.dissipation, VELOCITY_DISSIPATION);
          blit(velocity.second[1]);
          velocity.swap();
        
          gl.uniform1i(advectionProgram.uniforms.uVelocity, velocity.first[2]);
          gl.uniform1i(advectionProgram.uniforms.uSource, density.first[2]);
          gl.uniform1f(advectionProgram.uniforms.dissipation, DENSITY_DISSIPATION);
          blit(density.second[1]);
          density.swap();
        
          for (var i = 0; i < pointers.length; i++) {
            var pointer = pointers[i];
            if (pointer.moved) {
              splat(pointer.x, pointer.y, pointer.dx, pointer.dy, pointer.color);
              pointer.moved = false;
            }
          }
        
          curlProgram.bind();
          gl.uniform2f(curlProgram.uniforms.texelSize, 1.0 / textureWidth, 1.0 / textureHeight);
          gl.uniform1i(curlProgram.uniforms.uVelocity, velocity.first[2]);
          blit(curl[1]);
        
          vorticityProgram.bind();
          gl.uniform2f(vorticityProgram.uniforms.texelSize, 1.0 / textureWidth, 1.0 / textureHeight);
          gl.uniform1i(vorticityProgram.uniforms.uVelocity, velocity.first[2]);
          gl.uniform1i(vorticityProgram.uniforms.uCurl, curl[2]);
          gl.uniform1f(vorticityProgram.uniforms.curl, CURL);
          gl.uniform1f(vorticityProgram.uniforms.dt, dt);
          blit(velocity.second[1]);
          velocity.swap();
        
          divergenceProgram.bind();
          gl.uniform2f(divergenceProgram.uniforms.texelSize, 1.0 / textureWidth, 1.0 / textureHeight);
          gl.uniform1i(divergenceProgram.uniforms.uVelocity, velocity.first[2]);
          blit(divergence[1]);
        
          clear(pressure.first[1]);
          pressureProgram.bind();
          gl.uniform2f(pressureProgram.uniforms.texelSize, 1.0 / textureWidth, 1.0 / textureHeight);
          gl.uniform1i(pressureProgram.uniforms.uDivergence, divergence[2]);
          for (var i = 0; i < PRESSURE_ITERATIONS; i++) {
            gl.uniform1i(pressureProgram.uniforms.uPressure, pressure.first[2]);
            blit(pressure.second[1]);
            pressure.swap();
          }
        
          gradienSubtractProgram.bind();
          gl.uniform2f(gradienSubtractProgram.uniforms.texelSize, 1.0 / textureWidth, 1.0 / textureHeight);
          gl.uniform1i(gradienSubtractProgram.uniforms.uPressure, pressure.first[2]);
          gl.uniform1i(gradienSubtractProgram.uniforms.uVelocity, velocity.first[2]);
          blit(velocity.second[1]);
          velocity.swap();
        
          gl.viewport(0, 0, gl.drawingBufferWidth, gl.drawingBufferHeight);
          displayProgram.bind();
          gl.uniform1i(displayProgram.uniforms.uTexture, density.first[2]);
          blit(null);
        
          requestAnimationFrame(Update);
        }
        
        function splat(x, y, dx, dy, color) {
          splatProgram.bind();
          gl.uniform1i(splatProgram.uniforms.uTarget, velocity.first[2]);
          gl.uniform1f(splatProgram.uniforms.aspectRatio, canvas.width / canvas.height);
          gl.uniform2f(splatProgram.uniforms.point, x / canvas.width, 1.0 - y / canvas.height);
          gl.uniform3f(splatProgram.uniforms.color, dx, -dy, 1.0);
          gl.uniform1f(splatProgram.uniforms.radius, SPLAT_RADIUS);
          blit(velocity.second[1]);
          velocity.swap();
        
          gl.uniform1i(splatProgram.uniforms.uTarget, density.first[2]);
          gl.uniform3f(splatProgram.uniforms.color, color[0] * 0.3, color[1] * 0.3, color[2] * 0.3);
          blit(density.second[1]);
          density.swap();
        }
        
        function resizeCanvas() {
          if (canvas.width != canvas.clientWidth || canvas.height != canvas.clientHeight) {
            canvas.width = canvas.clientWidth;
            canvas.height = canvas.clientHeight;
            initFramebuffers();
          }
        }
        
        canvas.addEventListener('mousemove', function (e) {
          pointers[0].moved = pointers[0].down;
          pointers[0].dx = (e.offsetX - pointers[0].x) * 10.0;
          pointers[0].dy = (e.offsetY - pointers[0].y) * 10.0;
          pointers[0].x = e.offsetX;
          pointers[0].y = e.offsetY;
          pointers[0].down = true;
        });
        
        canvas.addEventListener('touchmove', function (e) {
          e.preventDefault();
          var touches = e.targetTouches;
          for (var i = 0; i < e.touches.length; i++) {
            var pointer = pointers[i];
            pointer.moved = pointer.down;
            pointer.dx = (touches[i].pageX - pointer.x) * 10.0;
            pointer.dy = (touches[i].pageY - pointer.y) * 10.0;
            pointer.x = touches[i].pageX;
            pointer.y = touches[i].pageY;
          }
        }, false);
        
        canvas.addEventListener('mousedown', function () {
          pointers[0].down = true;
          pointers[0].color = [Math.random() + 0.2, Math.random() + 0.2, Math.random() + 0.2];
        });
        
        canvas.addEventListener('touchstart', function (e) {
          var touches = e.targetTouches;
          for (var i = 0; i < touches.length; i++) {
            if (i >= pointers.length) pointers.push(new pointerPrototype());
        
            pointers[i].id = touches[i].identifier;
            pointers[i].down = true;
            pointers[i].x = touches[i].pageX;
            pointers[i].y = touches[i].pageY;
            pointers[i].color = [Math.random() + 0.2, Math.random() + 0.2, Math.random() + 0.2];
          }
        });
        
        window.addEventListener('mouseup', function () {
          pointers[0].down = true;
        });
        
        window.addEventListener('touchend', function (e) {
          var touches = e.changedTouches;
          for (var i = 0; i < touches.length; i++) {
            for (var j = 0; j < pointers.length; j++) {
              if (touches[i].identifier == pointers[j].id) pointers[j].down = false;
            }
          }
        });
            
    	</script>
    </body>
    </html>
    
    
    <?php
    }

function displayTetris($wish_array, $msg_array){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title>Hey <?php echo $wish_array['wishname']; ?>, You got a wish from <?php echo $wish_array['name']; ?></title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet"> 
    	<style>
    	    /* Change the gradient angle to get different result */

       `body{
          background: #141414;
          overflow:hidden;
          margin:0;
          padding:5px;
        }
        
        canvas {
        	position:absolute;
	top:0;
	left:0;
        }
        .containerx{
          z-index:9999;
          position:fixed;
          top:50%;
          left:50%;
          transform: translate(-50%, -50%);
          color:white;
          background: rgba(0, 0, 0, 0.7);
          padding:3%;
        }
        @font-face{
            font-family: Tetris;
            src:url('/fonts/tetris.ttf');
        }
        .wishnamex{
            font-size:3em;
            font-family: 'VT323', monospace;
        }
        .namex{
            font-size:2em;
            font-family: 'VT323', monospace;
        }
        .msgx{
            font-size:1.5em;
            font-family: Tetris;
        }
        .namez{
            color:#df0054;
        }
        .info{
                font-family: 'Hubballi', cursive;
                font-size: 1em;
        }
    	</style>
    	
    </head>
    <body id="bodyx">
    <canvas></canvas>
    <span class="containerx">
        <div class="wishnamex">Hey <span class="namez"><?php echo $wish_array['wishname']; ?></span></div><br><br>
        <div class="msgx">
            <?php echo $msg_array[$wish_array['default_msg']]; ?>
            <?php echo $wish_array['custom_msg']; ?>
        </div><br><br>
        <div class="namex"> - <span class="namez"><?php echo $wish_array['name']; ?></span></div>
        <!--<div class="info">[Hover/Click/Tap to see the Surprise]</div>-->
    </span>

    	<script>
    	    'use strict';

            var tetrominos = [{
                // box
                colors : ['rgb(59,84,165)', 'rgb(118,137,196)', 'rgb(79,111,182)'],
                data : [[0, 0, 0, 0],
                     [0, 1, 1, 0],
                     [0, 1, 1, 0],
                     [0, 0, 0, 0]]
                },
                {
                // stick
                colors : ['rgb(214,30,60)', 'rgb(241,108,107)', 'rgb(236,42,75)'],
                data : [[0, 0, 0, 0],
                     [0, 0, 0, 0],
                     [1, 1, 1, 1],
                     [0, 0, 0, 0]]
                },
                {
                // z
                colors : ['rgb(88,178,71)', 'rgb(150,204,110)', 'rgb(115,191,68)'],
                data : [[0, 0, 0, 0],
                     [0, 1, 1, 0],
                     [0, 0, 1, 1],
                     [0, 0, 0, 0]]
                },
                {
                // T
                colors : ['rgb(62,170,212)', 'rgb(120,205,244)', 'rgb(54,192,240)'],
                data : [[0, 0, 0, 0],
                     [0, 1, 1, 1],
                     [0, 0, 1, 0],
                     [0, 0, 0, 0]]
                },
                {
                // s
                colors : ['rgb(236,94,36)', 'rgb(234,154,84)', 'rgb(228,126,37)'],
                data : [[0, 0, 0, 0],
                     [0, 1, 1, 0],
                     [1, 1, 0, 0],
                     [0, 0, 0, 0]]
                },
                {
                // backwards L
                colors : ['rgb(220,159,39)', 'rgb(246,197,100)', 'rgb(242,181,42)'],
                data : [[0, 0, 1, 0],
                      [0, 0, 1, 0],
                      [0, 1, 1, 0],
                      [0, 0, 0, 0]]
                },
                {
                // L
                colors : ['rgb(158,35,126)', 'rgb(193,111,173)', 'rgb(179,63,151)'],
                data : [[0, 1, 0, 0],
                     [0, 1, 0, 0],
                     [0, 1, 1, 0],
                     [0, 0, 0, 0]]
                }];
            
            var Tetris = function(x,y,width,height){
                this.posX = x || 0;
                this.posY = y || 0;
            
                this.width  = width || window.innerWidth;
                this.height = height || window.innerHeight;
            
                this.bgCanvas = document.createElement('canvas');
                this.fgCanvas = document.createElement('canvas');
            
                this.bgCanvas.width = this.fgCanvas.width = this.width;
                this.bgCanvas.height = this.fgCanvas.height = this.height;
            
                this.bgCtx = this.bgCanvas.getContext('2d');
                this.fgCtx = this.fgCanvas.getContext('2d');
            
                this.bgCanvas.style.left = this.posX + 'px';
                this.bgCanvas.style.top = this.posY + 'px';
            
                this.fgCanvas.style.left = this.posX + 'px';
                this.fgCanvas.style.top = this.posY + 'px';
            
                document.body.appendChild(this.bgCanvas);
                document.body.appendChild(this.fgCanvas);
                this.init();
            };
            
            Tetris.prototype.init = function(){
                this.curPiece = {
                    data : null,
                    colors : [0,0,0],
                    x : 0,
                    y : 0,
                };
            
                this.lastMove = Date.now();
                this.curSpeed = 50+Math.random()*50;
                this.unitSize = 20;
                this.linesCleared = 0;
                this.level = 0;
                this.loseBlock = 0;
            
                // init the board
                this.board = [];
                this.boardWidth =  Math.floor(this.width / this.unitSize);
                this.boardHeight = Math.floor(this.height / this.unitSize);
            
                var board       = this.board,
                    boardWidth  = this.boardWidth,
                    boardHeight = this.boardHeight,
                    halfHeight  = boardHeight/2,
                    curPiece    = this.curPiece,
                    x = 0, y = 0;
            
                 // init board
                for (x = 0; x <= boardWidth; x++) {
                    board[x] = [];
                    for (y = 0; y <= boardHeight; y++) {
            
                         board[x][y] = {
                            data: 0,
                            colors: ['rgb(0,0,0)', 'rgb(0,0,0)', 'rgb(0,0,0)']
                        };
            
                        if(Math.random() > 0.15 && y > halfHeight){
                            board[x][y] = {
                                data: 1,
                                colors: tetrominos[Math.floor(Math.random() * tetrominos.length)].colors
                            };
                        }
                    }
                }
            
                // collapse the board a bit
                for (x = 0; x <= boardWidth; x++) {
                    for (y = boardHeight-1; y > -1; y--) {
            
                        if(board[x][y].data === 0 && y > 0){
                            for(var yy = y; yy > 0; yy--){
                                if(board[x][yy-1].data){
            
                                    board[x][yy].data = 1;
                                    board[x][yy].colors = board[x][yy-1].colors;
            
                                    board[x][yy-1].data = 0;
                                    board[x][yy-1].colors = ['rgb(0,0,0)', 'rgb(0,0,0)', 'rgb(0,0,0)'];
                                }
                            } 
                        }
                    }
                }
            
                var self = this;
            
                window.addEventListener('keydown', function (e) {
                    switch (e.keyCode) {
                        case 37:
                            if (self.checkMovement(curPiece, -1, 0)) {
                                curPiece.x--;
                            }
                            break;
                        case 39:
                            if (self.checkMovement(curPiece, 1, 0)) {
                                curPiece.x++;
                            }
                            break;
                        case 40:
                            if (self.checkMovement(curPiece, 0, 1)) {
                                curPiece.y++;
                            }
                            break;
                        case 32:
                        case 38:
                            curPiece.data = self.rotateTetrimono(curPiece);
                            break;
                        }
                });
            
                // render the board
                this.checkLines();
                this.renderBoard();
            
                // assign the first tetri
                this.newTetromino();
                this.update();
            };
            
            
            Tetris.prototype.update = function() {
                var curPiece = this.curPiece;
            
               if (!this.checkMovement(curPiece, 0, 1)) {
                   if (curPiece.y < -1) {
                       // you lose
                       this.loseScreen();
                       return true;
                   } else {
                       this.fillBoard(curPiece);
                       this.newTetromino();
                   }
               } else {
                   if (Date.now() > this.lastMove) {
                       this.lastMove = Date.now() + this.curSpeed;
                       if (this.checkMovement(curPiece, 0, 1)) {
                           curPiece.y++;
                       } else {
                           this.fillBoard(curPiece);
                           this.newTetromino();
                       }
                   }
               }
            
               this.render();
            
               var self = this;
               requestAnimationFrame(function(){self.update();});
            };
            
            // render only the board.
            Tetris.prototype.renderBoard = function(){
                var canvas      = this.bgCanvas,
                    ctx         = this.bgCtx,
                    unitSize    = this.unitSize,
                    board       = this.board,
                    boardWidth  = this.boardWidth,
                    boardHeight = this.boardHeight;
            
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                for (var x = 0; x <= boardWidth; x++) {
                    for (var y = 0; y <= boardHeight; y++) {
                        if (board[x][y].data !== 0) {
                            var bX = (x * unitSize),
                                bY = (y * unitSize);
            
                            ctx.fillStyle = board[x][y].colors[0];
                            ctx.fillRect(bX, bY, unitSize, unitSize);
            
                            ctx.fillStyle = board[x][y].colors[1];
                            ctx.fillRect(bX+2, bY+2, unitSize-4, unitSize-4);
            
                            ctx.fillStyle = board[x][y].colors[2];
                            ctx.fillRect(bX+4, bY+4, unitSize-8, unitSize-8);
                        }
                    }
               }
            };
            
            // Render the current active piece
            Tetris.prototype.render = function() {
                var canvas      = this.fgCanvas,
                    ctx         = this.fgCtx,
                    unitSize    = this.unitSize,
                    curPiece    = this.curPiece;
            
                ctx.clearRect(0, 0, canvas.width, canvas.height);
            
                for (var x = 0; x < 4; x++) {
                   for (var y = 0; y < 4; y++) {
                       if (curPiece.data[x][y] === 1) {
                           var xPos = ((curPiece.x + x) * unitSize),
                               yPos = ((curPiece.y + y) * unitSize);
            
                           if (yPos > - 1) {
                                ctx.fillStyle = curPiece.colors[0];
                                ctx.fillRect(xPos, yPos, unitSize, unitSize);
            
                                ctx.fillStyle = curPiece.colors[1];
                                ctx.fillRect(xPos+2, yPos+2, unitSize-4, unitSize-4);
            
                                ctx.fillStyle = curPiece.colors[2];
                                ctx.fillRect(xPos+4, yPos+4, unitSize-8, unitSize-8);
                           }
                       }
                   }
                }
            };
            
            // Make sure we can mov where we want.
            Tetris.prototype.checkMovement = function(curPiece, newX, newY) {
                var piece       = curPiece.data,
                    posX        = curPiece.x,
                    posY        = curPiece.y,
                    board       = this.board,
                    boardWidth  = this.boardWidth,
                    boardHeight = this.boardHeight;
            
               for (var x = 0; x < 4; x++) {
                   for (var y = 0; y < 4; y++) {
                       if (piece[x][y] === 1) {
            
                           if (!board[posX + x + newX]) {
                               board[posX + x + newX] = [];
                           }
            
                           if (!board[posX + x + newX][y + posY + newY]) {
                               board[posX + x + newX][y + posY + newY] = {
                                   data: 0
                               };
                           }
            
                           if (posX + x + newX >= boardWidth || posX + x + newX < 0 || board[posX + x + newX][y + posY + newY].data == 1) {
                               return false;
                           }
            
                           if (posY + y + newY > boardHeight) {
                               return false;
                           }
            
                       }
                   }
               }
               return true;
            };
            
            // checks for completed lines and clears them
            Tetris.prototype.checkLines = function() {
                var board           = this.board,
                    boardWidth      = this.boardWidth,
                    boardHeight     = this.boardHeight,
                    linesCleared    = this.linesCleared,
                    level           = this.level,
                    y               = boardHeight+1;
            
               while (y--) {
                   var x = boardWidth,
                       lines = 0;
            
                   while (x--) {
                       if (board[x][y].data === 1) {
                           lines++;
                       }
                   }
            
                   if (lines === boardWidth) {
                       linesCleared++;
                       level = Math.round(linesCleared / 20) * 20;
            
                       var lineY = y;
                       while (lineY) {
                           for (x = 0; x <= boardWidth; x++) {
                               if (lineY - 1 > 0) {
                                   board[x][lineY].data = board[x][lineY - 1].data;
                                   board[x][lineY].colors = board[x][lineY - 1].colors;
                               }
                           }
                           lineY--;
                       }
                       y++;
                   }
               }
            };
            
            // Lose animation
            Tetris.prototype.loseScreen = function() {
                var ctx         = this.bgCtx,
                    unitSize    = this.unitSize,
                    boardWidth  = this.boardWidth,
                    boardHeight = this.boardHeight,
                    y           = boardHeight - this.loseBlock;
            
                for(var x = 0; x < boardWidth; x++){
                    var bX = (x * unitSize),
                        bY = (y * unitSize);
            
                    ctx.fillStyle = 'rgb(80,80,80)';
                    ctx.fillRect(bX, bY, unitSize, unitSize);
            
                    ctx.fillStyle = 'rgb(150,150,150)';
                    ctx.fillRect(bX+2, bY+2, unitSize-4, unitSize-4);
            
                    ctx.fillStyle = 'rgb(100,100,100)';
                    ctx.fillRect(bX+4, bY+4, unitSize-8, unitSize-8);
                }
            
                if(this.loseBlock <= (boardHeight+1)){
                    this.loseBlock++;
            
                    var self = this;
                    requestAnimationFrame(function(){self.loseScreen();});
                }else{
                    this.init();
                }
            };
            
            // adds the piece as part of the board
            Tetris.prototype.fillBoard = function(curPiece) {
                var piece = curPiece.data,
                    posX  = curPiece.x,
                    posY  = curPiece.y,
                    board = this.board;
            
                for (var x = 0; x < 4; x++) {
                   for (var y = 0; y < 4; y++) {
                       if (piece[x][y] === 1) {
                           board[x + posX][y + posY].data = 1;
                           board[x + posX][y + posY].colors = curPiece.colors;
                       }
                   }
                }
            
                this.checkLines();
                this.renderBoard();
            };
            
            // rotate a piece
            Tetris.prototype.rotateTetrimono = function(curPiece) {
               var rotated = [];
            
               for (var x = 0; x < 4; x++) {
                   rotated[x] = [];
                   for (var y = 0; y < 4; y++) {
                       rotated[x][y] = curPiece.data[3 - y][x];
                   }
               }
            
               if (!this.checkMovement({
                   data: rotated,
                   x: curPiece.x,
                   y: curPiece.y
               }, 0, 0)) {
                   rotated = curPiece.data;
               }
            
               return rotated;
            };
            
            // assign the player a new peice
            Tetris.prototype.newTetromino = function() {
                var pieceNum = Math.floor(Math.random() * tetrominos.length),
                    curPiece = this.curPiece;
            
                curPiece.data    = tetrominos[pieceNum].data;
                curPiece.colors  = tetrominos[pieceNum].colors;
                curPiece.x       = Math.floor(Math.random()*(this.boardWidth-curPiece.data.length+1));
                curPiece.y       = -4;
            };
            
            var width = window.innerWidth,
                boardDiv = 20*Math.round(window.innerWidth/20),
                boards = 8,
                bWidth = boardDiv/boards,
                tetrisInstances = [];
            
            for(var w = 0; w < boards; w++){
              tetrisInstances.push(new Tetris(20 * Math.round((w*bWidth)/20), 0, bWidth));
            }

    	</script>
    </body>
    </html>
    
    
    <?php
    }
    function displayPixels($wish_array, $msg_array){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title>Hey <?php echo $wish_array['wishname']; ?>, You got a wish from <?php echo $wish_array['name']; ?></title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet"> 
    	<style>
    	    /* Change the gradient angle to get different result */

       `html,body{
          background: #141414;
          overflow:hidden;
          margin:0;
        }
        
        canvas {
        	position:absolute;
        	top:0;
        	left:0;
        	display: block;
        }
        .containerx{
          z-index:9999;
          position:fixed;
          top:50%;
          left:50%;
          transform: translate(-50%, -50%);
          color:white;
          background: rgba(0, 0, 0, 0.7);
          padding:3%;
        }
        @font-face{
            font-family: Tetris;
            src:url('/fonts/tetris.ttf');
        }
        .wishnamex{
            font-size:3em;
            font-family: 'VT323', monospace;
        }
        .namex{
            font-size:2em;
            font-family: 'VT323', monospace;
        }
        .msgx{
            font-size:1.5em;
            font-family: Tetris;
        }
        .namez{
            color:#df0054;
        }
        .info{
                font-family: 'Hubballi', cursive;
                font-size: 1em;
        }
    	</style>
    	
    </head>
    <body id="bodyx">
    <canvas></canvas>
    <span class="containerx">
        <div class="wishnamex">Hey <span class="namez"><?php echo $wish_array['wishname']; ?></span></div><br><br>
        <div class="msgx">
            <?php echo $msg_array[$wish_array['default_msg']]; ?>
            <?php echo $wish_array['custom_msg']; ?>
        </div><br><br>
        <div class="namex"> - <span class="namez"><?php echo $wish_array['name']; ?></span></div>
        <!--<div class="info">[Hover/Click/Tap to see the Surprise]</div>-->
    </span>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.7/p5.min.js"></script>
    	<script>
    	    // Visualizery thingy

            var origin;
            
            var frame = 0;
            var flyBoxCount = 20;
            var flyBoxes = [];
            var flyBoxPause = 200;
            var flyBoxColors = [];
            
            function setup() {
              createCanvas(windowWidth, windowHeight);
              origin = createVector(windowWidth/2, windowHeight/2);
              
              for(i = -flyBoxCount/2; i < flyBoxCount/2; i++) {
                var box = createFlyBox(i);
                box.start();
                flyBoxes.push(box);
              }
              
              var getRandColor = () => {
                return color(random(100, 200), random(100, 200), random(100, 200));
              }
            
              flyBoxColors.push(color('#f2623a'));
              flyBoxColors.push(color('#3af262'));
              flyBoxColors.push(color('#623af2'));
              flyBoxColors.push(color('#f23a58'));
              flyBoxColors.push(color('#caf23a'));
            }
            
            function draw() {
              rectMode(CENTER);
              for(i = 0; i < flyBoxCount; i++) {
                var flyBox = flyBoxes[i];
                flyBox.draw();
              }
              
              // WIP
              stroke(0, 0, 0);
              strokeWeight(40);
              noFill();
              translate(origin.x, origin.y);
              rotate((sin(frame*0.02) + cos(frame*0.03))*PI);
              //rect(0, 0, 300, 300);
              
              frame += 1;
            }
            
            function createFlyBox(offset) {
              return {
                offset: offset,
                delay: 0,
                getRandomDelay: () => { return random(0, flyBoxCount) * 15; },
                steps: 0,
                directions: [createVector(-1, -1), createVector(-1, 1), createVector(1, -1), createVector(1, 1)],
                currentDirection: 0,
                iteration: 0,
                size: 80,
                start: function() {
                  this.delay = this.getRandomDelay();
                  this.steps = -this.delay;
                },
                draw: function() {
                  this.steps += 20;
                  
                  if(this.steps < 0) {
                    return;
                  }
                  
                  fill(flyBoxColors[this.iteration]);
                  noStroke();
                  var dir = this.directions[this.currentDirection];
                  rect(
                    -dir.x*this.steps + origin.x + dir.x*origin.x - dir.x*this.offset * (this.size*0.75),
                    -dir.y*this.steps + origin.y + dir.y*origin.y + dir.y*this.offset * (this.size*0.75),
                    this.size, this.size);
                  
                  if(this.steps > max(windowWidth, windowHeight)) {
                    var newDelay = this.getRandomDelay();
                    this.steps = -flyBoxPause + this.delay - newDelay;
                    this.delay = newDelay;
                    this.currentDirection = (this.currentDirection + 1) % 4;
                    this.iteration = (this.iteration + 1) % flyBoxColors.length;
                  }
                }
              }
            }
    	</script>
    </body>
    </html>
    
    
    <?php
    }
    
    function displayDarkcolor($wish_array, $msg_array){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title>Hey <?php echo $wish_array['wishname']; ?>, You got a wish from <?php echo $wish_array['name']; ?></title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet"> 
    	<style>
    	body {
          margin: 0;
          overflow: hidden;
        }
        
        .background {
          width: 100vw;
          height: 100vh;
          background: #3E1E68;
        }
        
        .background span {
          width: 20vmin;
          height: 20vmin;
          border-radius: 20vmin;
          backface-visibility: hidden;
          position: absolute;
          animation-name: move;
          animation-duration: 6s;
          animation-timing-function: linear;
          animation-iteration-count: infinite;
        }
        .background span:nth-child(1) {
          color: #FFACAC;
          top: 80%;
          left: 35%;
          animation-duration: 13.6s;
          animation-delay: -8.6s;
          transform-origin: -12vw 15vh;
          box-shadow: -40vmin 0 5.3086382871vmin currentColor;
        }
        .background span:nth-child(2) {
          color: #FFACAC;
          top: 73%;
          left: 46%;
          animation-duration: 14.6s;
          animation-delay: -5s;
          transform-origin: -14vw 17vh;
          box-shadow: 40vmin 0 8.5290011644vmin currentColor;
        }
        .background span:nth-child(3) {
          color: #E45A84;
          top: 30%;
          left: 69%;
          animation-duration: 11.2s;
          animation-delay: -16s;
          transform-origin: 25vw -2vh;
          box-shadow: -40vmin 0 9.8842215122vmin currentColor;
        }
        .background span:nth-child(4) {
          color: #FFACAC;
          top: 50%;
          left: 19%;
          animation-duration: 13.7s;
          animation-delay: -9s;
          transform-origin: -18vw -19vh;
          box-shadow: -40vmin 0 7.6311558165vmin currentColor;
        }
        .background span:nth-child(5) {
          color: #583C87;
          top: 100%;
          left: 6%;
          animation-duration: 14.7s;
          animation-delay: -12.2s;
          transform-origin: -12vw 14vh;
          box-shadow: -40vmin 0 14.9056375282vmin currentColor;
        }
        .background span:nth-child(6) {
          color: #583C87;
          top: 33%;
          left: 89%;
          animation-duration: 13.9s;
          animation-delay: -10s;
          transform-origin: 22vw 23vh;
          box-shadow: -40vmin 0 11.5903922384vmin currentColor;
        }
        .background span:nth-child(7) {
          color: #583C87;
          top: 24%;
          left: 23%;
          animation-duration: 14.3s;
          animation-delay: -8.7s;
          transform-origin: 1vw 20vh;
          box-shadow: -40vmin 0 8.627435243vmin currentColor;
        }
        .background span:nth-child(8) {
          color: #E45A84;
          top: 81%;
          left: 52%;
          animation-duration: 12.5s;
          animation-delay: -3.2s;
          transform-origin: -3vw 25vh;
          box-shadow: 40vmin 0 9.8054146213vmin currentColor;
        }
        .background span:nth-child(9) {
          color: #E45A84;
          top: 53%;
          left: 88%;
          animation-duration: 13.9s;
          animation-delay: -12s;
          transform-origin: 7vw 6vh;
          box-shadow: -40vmin 0 10.7478888716vmin currentColor;
        }
        .background span:nth-child(10) {
          color: #E45A84;
          top: 21%;
          left: 81%;
          animation-duration: 12.2s;
          animation-delay: -6.2s;
          transform-origin: 17vw -23vh;
          box-shadow: 40vmin 0 6.2511658078vmin currentColor;
        }
        .background span:nth-child(11) {
          color: #583C87;
          top: 49%;
          left: 8%;
          animation-duration: 12.5s;
          animation-delay: -3.2s;
          transform-origin: 24vw -22vh;
          box-shadow: 40vmin 0 14.7253191901vmin currentColor;
        }
        .background span:nth-child(12) {
          color: #E45A84;
          top: 2%;
          left: 73%;
          animation-duration: 10.1s;
          animation-delay: -0.4s;
          transform-origin: -18vw 6vh;
          box-shadow: 40vmin 0 9.5668100911vmin currentColor;
        }
        .background span:nth-child(13) {
          color: #583C87;
          top: 17%;
          left: 53%;
          animation-duration: 12.4s;
          animation-delay: -14.3s;
          transform-origin: 14vw 6vh;
          box-shadow: -40vmin 0 7.867314925vmin currentColor;
        }
        .background span:nth-child(14) {
          color: #E45A84;
          top: 10%;
          left: 88%;
          animation-duration: 11s;
          animation-delay: -12.5s;
          transform-origin: -18vw 4vh;
          box-shadow: 40vmin 0 10.9514321824vmin currentColor;
        }
        .background span:nth-child(15) {
          color: #E45A84;
          top: 15%;
          left: 60%;
          animation-duration: 14.8s;
          animation-delay: -2.2s;
          transform-origin: 24vw 16vh;
          box-shadow: -40vmin 0 10.9227605945vmin currentColor;
        }
        .background span:nth-child(16) {
          color: #E45A84;
          top: 79%;
          left: 43%;
          animation-duration: 14.2s;
          animation-delay: -10.9s;
          transform-origin: -22vw 2vh;
          box-shadow: -40vmin 0 9.6016716498vmin currentColor;
        }
        .background span:nth-child(17) {
          color: #FFACAC;
          top: 77%;
          left: 47%;
          animation-duration: 13.2s;
          animation-delay: -3.1s;
          transform-origin: 19vw -15vh;
          box-shadow: -40vmin 0 13.2626441016vmin currentColor;
        }
        .background span:nth-child(18) {
          color: #583C87;
          top: 57%;
          left: 38%;
          animation-duration: 14s;
          animation-delay: -15.3s;
          transform-origin: -19vw 8vh;
          box-shadow: -40vmin 0 10.4401448282vmin currentColor;
        }
        .background span:nth-child(19) {
          color: #583C87;
          top: 10%;
          left: 66%;
          animation-duration: 13.4s;
          animation-delay: -3s;
          transform-origin: -7vw 23vh;
          box-shadow: -40vmin 0 6.8998033685vmin currentColor;
        }
        .background span:nth-child(20) {
          color: #583C87;
          top: 38%;
          left: 75%;
          animation-duration: 14.4s;
          animation-delay: -10.8s;
          transform-origin: 20vw -23vh;
          box-shadow: -40vmin 0 5.8225762432vmin currentColor;
        }
        
        @keyframes move {
          100% {
            transform: translate3d(0, 0, 1px) rotate(360deg);
          }
        }
        body, head {
          display: block;
          font-size: 62px;
          color: transparent;
        }
        
        head::before, head::after,
        body::before, body::after {
          position: fixed;
          top: 50%;
          left: 50%;
          width: 3em;
          height: 3em;
          content: ".";
          mix-blend-mode: screen;
          animation: 44s -27s move infinite ease-in-out alternate;
        }
        
        body::before {
          text-shadow: 1.3865756564em 1.1549907693em 7px rgba(255, 19, 0, 0.9), 0.898967257em -0.339368769em 7px rgba(0, 200, 255, 0.9), 2.0078991613em 0.2720295622em 7px rgba(0, 255, 31, 0.9), 0.9855584135em -0.3596596052em 7px rgba(255, 42, 0, 0.9), 0.1436379793em 1.4341743883em 7px rgba(89, 255, 0, 0.9), 1.2655821301em 1.6991222214em 7px rgba(255, 0, 175, 0.9), 0.6520771616em -0.3337632807em 7px rgba(0, 54, 255, 0.9), 0.4656714171em 1.8153218791em 7px rgba(188, 255, 0, 0.9), 1.5055353726em 0.2749459253em 7px rgba(0, 230, 255, 0.9), 1.3417822205em 1.164686414em 7px rgba(0, 90, 255, 0.9), -0.1389099202em 0.4536260946em 7px rgba(147, 255, 0, 0.9), 1.0910917219em 1.5802751927em 7px rgba(0, 255, 253, 0.9), 1.9168076516em 1.3734229258em 7px rgba(255, 2, 0, 0.9), 0.9714433729em -0.1885975348em 7px rgba(0, 255, 0, 0.9), 1.8826311294em 1.9941537233em 7px rgba(255, 0, 59, 0.9), 0.1611731425em 1.2405667384em 7px rgba(39, 0, 255, 0.9), 0.9104029061em 1.9842999352em 7px rgba(82, 0, 255, 0.9), 2.4580983851em 0.5036890753em 7px rgba(255, 0, 237, 0.9), 2.472707071em 1.2836452992em 7px rgba(255, 189, 0, 0.9), -0.2802589239em 1.9595745307em 7px rgba(151, 0, 255, 0.9), 0.7966011101em 2.4596242916em 7px rgba(255, 0, 189, 0.9), 1.3530901116em 1.679437438em 7px rgba(140, 255, 0, 0.9), 1.2503781561em -0.0276435005em 7px rgba(0, 110, 255, 0.9), 0.7815429681em -0.4852993652em 7px rgba(40, 0, 255, 0.9), 0.7377435624em -0.3937216451em 7px rgba(255, 111, 0, 0.9), 2.0740418736em 1.278696312em 7px rgba(0, 255, 148, 0.9), 1.6074753843em 0.5990814568em 7px rgba(255, 234, 0, 0.9), 1.557617247em 0.1402957711em 7px rgba(0, 67, 255, 0.9), 0.6972185894em 2.404366752em 7px rgba(0, 255, 147, 0.9), 1.4684024721em 2.3824846445em 7px rgba(0, 16, 255, 0.9), 1.4137804304em -0.4239793976em 7px rgba(99, 255, 0, 0.9), -0.3806895195em 0.9484884294em 7px rgba(186, 0, 255, 0.9), -0.3944905763em 1.3672439003em 7px rgba(0, 247, 255, 0.9), 1.502604022em 0.5452194622em 7px rgba(0, 255, 45, 0.9), 0.4877893873em 2.0366429625em 7px rgba(0, 255, 239, 0.9), 2.2804741679em 0.5868957518em 7px rgba(255, 0, 56, 0.9), 0.2989206066em 0.740895697em 7px rgba(255, 0, 241, 0.9), 0.40888725em 2.1577188274em 7px rgba(255, 0, 240, 0.9), 1.8065048258em 1.6921210253em 7px rgba(215, 255, 0, 0.9), 1.2534709421em 0.9176811672em 7px rgba(0, 255, 182, 0.9), 0.4195521846em 0.2798134674em 7px rgba(199, 0, 255, 0.9);
          animation-duration: 44s;
          animation-delay: -27s;
        }
        
        body::after {
          text-shadow: 1.3992079319em 2.3907353308em 7px rgba(79, 0, 255, 0.9), 1.3025713878em 2.1564094869em 7px rgba(6, 255, 0, 0.9), -0.0397101989em 2.2280435355em 7px rgba(255, 0, 250, 0.9), -0.0348530654em 0.1835043893em 7px rgba(0, 255, 157, 0.9), 1.4183312519em 0.9118142264em 7px rgba(15, 255, 0, 0.9), 1.3849343803em 1.7498638526em 7px rgba(255, 0, 12, 0.9), 2.4428005445em 0.0350170704em 7px rgba(255, 0, 242, 0.9), 2.2683033071em 0.4541541629em 7px rgba(255, 147, 0, 0.9), 1.5911406217em 1.3622205985em 7px rgba(0, 83, 255, 0.9), 0.0111979828em 1.4095071858em 7px rgba(41, 255, 0, 0.9), 1.8385830539em 0.7816241594em 7px rgba(230, 0, 255, 0.9), 2.2499470732em 0.3302318417em 7px rgba(137, 255, 0, 0.9), 2.1739108366em 0.9918327252em 7px rgba(255, 0, 222, 0.9), 0.222293351em 1.360263041em 7px rgba(0, 39, 255, 0.9), 0.6582505746em 0.772670507em 7px rgba(222, 255, 0, 0.9), 1.5052430513em 2.0074649958em 7px rgba(0, 255, 31, 0.9), 2.3810624406em 0.1457177144em 7px rgba(255, 0, 128, 0.9), -0.0630871158em -0.293290066em 7px rgba(255, 254, 0, 0.9), 1.6346269433em 1.3957328463em 7px rgba(255, 0, 200, 0.9), -0.1802544387em 1.8932188887em 7px rgba(50, 255, 0, 0.9), -0.1753999207em 2.2536508111em 7px rgba(255, 160, 0, 0.9), -0.425255789em 2.3676519059em 7px rgba(98, 0, 255, 0.9), 1.8018390701em 1.4615368758em 7px rgba(255, 158, 0, 0.9), -0.3535261059em 2.2114432847em 7px rgba(170, 255, 0, 0.9), -0.3045868364em 1.9805927219em 7px rgba(0, 75, 255, 0.9), 0.0795887067em 1.9943143665em 7px rgba(255, 33, 0, 0.9), 1.4124985148em 1.2879434501em 7px rgba(0, 255, 100, 0.9), 1.6997716201em 0.0367368242em 7px rgba(131, 255, 0, 0.9), 2.4153734143em 2.3303081553em 7px rgba(255, 0, 217, 0.9), 0.0900098426em -0.4997096371em 7px rgba(0, 114, 255, 0.9), 2.1550265994em 1.6030617147em 7px rgba(0, 193, 255, 0.9), 1.3789877649em 2.4952649478em 7px rgba(255, 0, 144, 0.9), 2.0233281169em -0.2754346828em 7px rgba(66, 0, 255, 0.9), 0.781282948em 1.5013146805em 7px rgba(72, 255, 0, 0.9), 0.925502754em 1.968841392em 7px rgba(227, 0, 255, 0.9), 0.3911096951em 0.5782679625em 7px rgba(255, 218, 0, 0.9), 0.7111379344em 1.9297457512em 7px rgba(0, 255, 31, 0.9), 1.0423921658em 1.2902751889em 7px rgba(0, 255, 184, 0.9), 0.2878841234em 1.0917378751em 7px rgba(58, 255, 0, 0.9), 1.2651686745em 0.5773702361em 7px rgba(239, 255, 0, 0.9), 1.0978330358em 2.282726866em 7px rgba(132, 255, 0, 0.9);
          animation-duration: 43s;
          animation-delay: -32s;
        }
        
        head::before {
          text-shadow: 2.2525109621em 1.368670731em 7px rgba(0, 255, 15, 0.9), 0.5365559695em 0.2945355051em 7px rgba(211, 255, 0, 0.9), -0.0123062627em 0.2857863288em 7px rgba(0, 34, 255, 0.9), 0.5111347515em 1.3022958336em 7px rgba(25, 255, 0, 0.9), 0.2397096044em -0.3893065201em 7px rgba(255, 97, 0, 0.9), 0.9550999627em 0.0914837249em 7px rgba(0, 255, 238, 0.9), -0.0089245795em 1.5939780115em 7px rgba(255, 0, 78, 0.9), 0.0211648091em -0.1662009614em 7px rgba(0, 255, 8, 0.9), 1.5659943744em 0.4891256203em 7px rgba(0, 60, 255, 0.9), -0.0052419173em -0.2351792061em 7px rgba(0, 255, 196, 0.9), 1.4560323148em 0.3783410558em 7px rgba(255, 181, 0, 0.9), 2.3268310958em -0.2105946657em 7px rgba(175, 0, 255, 0.9), 0.3101299775em 0.9121208111em 7px rgba(0, 255, 151, 0.9), 2.3698337864em 1.6391350658em 7px rgba(255, 0, 126, 0.9), 0.6637229611em 0.1496223493em 7px rgba(56, 0, 255, 0.9), 0.0977705898em 1.125274911em 7px rgba(255, 81, 0, 0.9), 0.2835557842em 0.6579046885em 7px rgba(159, 0, 255, 0.9), 1.3728385758em 1.8595173039em 7px rgba(0, 251, 255, 0.9), 0.4754668849em 0.5350085067em 7px rgba(255, 140, 0, 0.9), 0.8334198878em 0.3292689776em 7px rgba(0, 70, 255, 0.9), -0.3469814666em 1.9303983562em 7px rgba(235, 255, 0, 0.9), 0.3207443868em 1.0201025898em 7px rgba(0, 150, 255, 0.9), 1.2658718319em 0.5589087125em 7px rgba(255, 0, 240, 0.9), 1.9870852293em 1.5664977778em 7px rgba(34, 255, 0, 0.9), -0.0553609663em 1.4258767861em 7px rgba(255, 239, 0, 0.9), 2.0549333156em 0.0090274232em 7px rgba(0, 255, 173, 0.9), -0.440080037em 1.1297885127em 7px rgba(255, 0, 168, 0.9), 0.8054772721em 2.4459597356em 7px rgba(0, 255, 153, 0.9), 0.0211534713em 1.9994438623em 7px rgba(0, 255, 88, 0.9), 1.9956844081em 0.1776746044em 7px rgba(0, 219, 255, 0.9), 1.6352425952em 1.6511414754em 7px rgba(255, 65, 0, 0.9), -0.22746265em 0.0325945106em 7px rgba(255, 72, 0, 0.9), 2.4762480957em 0.5589967981em 7px rgba(200, 0, 255, 0.9), 0.9497185693em 0.1545907861em 7px rgba(9, 255, 0, 0.9), 1.4040332229em 0.9119114417em 7px rgba(0, 254, 255, 0.9), 1.8798146967em 1.8526715689em 7px rgba(12, 0, 255, 0.9), 1.3799108621em 2.3417850715em 7px rgba(255, 66, 0, 0.9), 0.2262502079em 1.4543256389em 7px rgba(255, 93, 0, 0.9), 2.3870480208em -0.2808127689em 7px rgba(16, 255, 0, 0.9), 0.6735255032em 0.4470173357em 7px rgba(110, 255, 0, 0.9), -0.3819512984em 1.0569839946em 7px rgba(0, 255, 174, 0.9);
          animation-duration: 42s;
          animation-delay: -23s;
        }
        
        head::after {
          text-shadow: -0.228653346em 1.402848242em 7px rgba(0, 255, 231, 0.9), 2.2971760717em 0.9479043165em 7px rgba(163, 0, 255, 0.9), 1.3840526772em -0.2230614015em 7px rgba(88, 0, 255, 0.9), 0.8301022422em -0.3404000045em 7px rgba(29, 255, 0, 0.9), -0.1125987227em 0.2934271799em 7px rgba(0, 0, 255, 0.9), 0.8820895956em 2.0744940111em 7px rgba(212, 255, 0, 0.9), 1.0218479945em 1.1038487751em 7px rgba(255, 0, 16, 0.9), 1.3709577018em 0.1213209665em 7px rgba(0, 247, 255, 0.9), 0.4063523911em 0.2773687443em 7px rgba(0, 134, 255, 0.9), 1.9113524348em 0.9531719022em 7px rgba(255, 0, 18, 0.9), -0.3019283164em 1.4558690643em 7px rgba(255, 0, 58, 0.9), 1.3825720326em 1.2892904779em 7px rgba(5, 0, 255, 0.9), 1.9042484746em -0.4245568362em 7px rgba(255, 137, 0, 0.9), 2.3791181664em 2.4969108507em 7px rgba(255, 86, 0, 0.9), 2.463048834em 1.164407785em 7px rgba(100, 255, 0, 0.9), 1.6921037831em 1.6833607936em 7px rgba(217, 0, 255, 0.9), 1.8634670037em -0.0479762082em 7px rgba(255, 230, 0, 0.9), 0.192896569em 1.2700324798em 7px rgba(0, 179, 255, 0.9), 1.9968711644em -0.4637038631em 7px rgba(0, 255, 143, 0.9), 0.3573034356em -0.1070256156em 7px rgba(0, 149, 255, 0.9), 1.5538003884em 0.7114169658em 7px rgba(255, 0, 108, 0.9), 0.9033410514em 2.3984724621em 7px rgba(0, 255, 233, 0.9), 0.0020414467em -0.2041969377em 7px rgba(141, 255, 0, 0.9), 2.1802684369em 0.6482142409em 7px rgba(255, 224, 0, 0.9), -0.3361619877em 1.8676889802em 7px rgba(255, 214, 0, 0.9), 1.0245631055em -0.1997668552em 7px rgba(0, 255, 109, 0.9), 1.9443373734em 0.2539639351em 7px rgba(255, 0, 212, 0.9), 1.4324240277em 0.6642854593em 7px rgba(0, 158, 255, 0.9), 1.5103576229em 0.0436770026em 7px rgba(243, 0, 255, 0.9), -0.1484568555em 0.2957747765em 7px rgba(26, 255, 0, 0.9), 2.477452967em 0.0198952593em 7px rgba(67, 0, 255, 0.9), 2.2373267785em -0.0326499403em 7px rgba(255, 0, 107, 0.9), 0.8367706778em -0.1637766947em 7px rgba(255, 0, 157, 0.9), -0.4454088243em 2.15226305em 7px rgba(255, 189, 0, 0.9), 0.7635770749em 1.4429860658em 7px rgba(0, 255, 2, 0.9), 0.9473495055em 1.6620874121em 7px rgba(255, 0, 39, 0.9), 0.5607343105em 2.1942740466em 7px rgba(202, 0, 255, 0.9), 0.8674514412em -0.4102208322em 7px rgba(157, 0, 255, 0.9), 0.457396474em 0.1483713269em 7px rgba(165, 0, 255, 0.9), 1.5594320429em 0.7511729046em 7px rgba(111, 255, 0, 0.9), -0.362033198em -0.1120626664em 7px rgba(255, 124, 0, 0.9);
          animation-duration: 41s;
          animation-delay: -19s;
        }
        
        html::before {
          content: "DeLight\a A CSS DEMO";
          letter-spacing: 0.5em;
          text-shadow: 0 0 5px #000;
          white-space: pre;
          color: #fff;
          position: fixed;
          top: 50%;
          left: 50%;
          z-index: 1;
          transform: translate(-50%, -50%);
          text-align: center;
          color: #999;
        }
        
        html:first-line {
          font-size: 300%;
          font-style: italic;
          letter-spacing: 0;
          color: #fff;
        }
        
        @keyframes move {
          from {
            transform: rotate(0deg) scale(12) translateX(-20px);
          }
          to {
            transform: rotate(360deg) scale(18) translateX(20px);
          }
        }
        .containerx{
          z-index:9999;
          position:fixed;
          font-size:18px;
          top:50%;
          left:50%;
          transform: translate(-50%, -50%);
          color:white;
          background: rgba(0, 0, 0, 0.7);
          padding:3%;
        }

        .wishnamex{
            font-size:3em;
            font-family: 'VT323', monospace;
        }
        .namex{
            font-size:2em;
            font-family: 'VT323', monospace;
        }
        .msgx{
            font-size:1.5em;
            font-family: 'Hubballi', cursive;
        }
        .namez{
            color:#df0054;
        }
        .info{
                font-family: 'Hubballi', cursive;
                font-size: 1em;
        }
    	</style>
    	
    </head>
    <body id="bodyx">
    <div class="background">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>
    <span class="containerx">
        <div class="wishnamex">Hey <span class="namez"><?php echo $wish_array['wishname']; ?></span></div><br><br>
        <div class="msgx">
            <?php echo $msg_array[$wish_array['default_msg']]; ?>
            <?php echo $wish_array['custom_msg']; ?>
        </div><br><br>
        <div class="namex"> - <span class="namez"><?php echo $wish_array['name']; ?></span></div>
        <!--<div class="info">[Hover/Click/Tap to see the Surprise]</div>-->
    </span>
    <script>
        document.body.addEventListener('click', function(e){
            document.body.style.backgroundImage = "linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1)";
        });
    </script>
    </body>
    </html>
    
    
    <?php
    }
function displaySnowfall($wish_array, $msg_array){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title>Hey <?php echo $wish_array['wishname']; ?>, You got a wish from <?php echo $wish_array['name']; ?></title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    	<style>
    	    /* Change the gradient angle to get different result */

       `body {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  height: 300px;
  width: 100%;
  margin: auto;
}

html {
  background: #94D3D8;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
html :before, html :after {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
}

/* Animation */
@keyframes flakes {
  0% {
    -moz-transform: translateY(0) rotate(0);
    -ms-transform: translateY(0) rotate(0);
    -webkit-transform: translateY(0) rotate(0);
    transform: translateY(0) rotate(0);
    opacity: 0;
  }
  10% {
    opacity: 0.67;
  }
  100% {
    -moz-transform: translateY(1000px) rotate(117deg);
    -ms-transform: translateY(1000px) rotate(117deg);
    -webkit-transform: translateY(1000px) rotate(117deg);
    transform: translateY(1000px) rotate(117deg);
  }
}
.flake:nth-of-type(1) {
  position: absolute;
  height: 23px;
  width: 23px;
  /* Animation */
  top: -192px;
  left: 82%;
  filter: blur(4px);
  -moz-animation: 69s flakes linear infinite;
  -webkit-animation: 69s flakes linear infinite;
  animation: 69s flakes linear infinite;
}
.flake:nth-of-type(1) * {
  position: absolute;
}
.flake:nth-of-type(1) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(1) > span:nth-of-type(1) {
  -moz-transform: rotate(32.72727deg);
  -ms-transform: rotate(32.72727deg);
  -webkit-transform: rotate(32.72727deg);
  transform: rotate(32.72727deg);
}
.flake:nth-of-type(1) > span:nth-of-type(2) {
  -moz-transform: rotate(65.45455deg);
  -ms-transform: rotate(65.45455deg);
  -webkit-transform: rotate(65.45455deg);
  transform: rotate(65.45455deg);
}
.flake:nth-of-type(1) > span:nth-of-type(3) {
  -moz-transform: rotate(98.18182deg);
  -ms-transform: rotate(98.18182deg);
  -webkit-transform: rotate(98.18182deg);
  transform: rotate(98.18182deg);
}
.flake:nth-of-type(1) > span:nth-of-type(4) {
  -moz-transform: rotate(130.90909deg);
  -ms-transform: rotate(130.90909deg);
  -webkit-transform: rotate(130.90909deg);
  transform: rotate(130.90909deg);
}
.flake:nth-of-type(1) > span:nth-of-type(5) {
  -moz-transform: rotate(163.63636deg);
  -ms-transform: rotate(163.63636deg);
  -webkit-transform: rotate(163.63636deg);
  transform: rotate(163.63636deg);
}
.flake:nth-of-type(1) > span:nth-of-type(6) {
  -moz-transform: rotate(196.36364deg);
  -ms-transform: rotate(196.36364deg);
  -webkit-transform: rotate(196.36364deg);
  transform: rotate(196.36364deg);
}
.flake:nth-of-type(1) > span:nth-of-type(7) {
  -moz-transform: rotate(229.09091deg);
  -ms-transform: rotate(229.09091deg);
  -webkit-transform: rotate(229.09091deg);
  transform: rotate(229.09091deg);
}
.flake:nth-of-type(1) > span:nth-of-type(8) {
  -moz-transform: rotate(261.81818deg);
  -ms-transform: rotate(261.81818deg);
  -webkit-transform: rotate(261.81818deg);
  transform: rotate(261.81818deg);
}
.flake:nth-of-type(1) > span:nth-of-type(9) {
  -moz-transform: rotate(294.54545deg);
  -ms-transform: rotate(294.54545deg);
  -webkit-transform: rotate(294.54545deg);
  transform: rotate(294.54545deg);
}
.flake:nth-of-type(1) > span:nth-of-type(10) {
  -moz-transform: rotate(327.27273deg);
  -ms-transform: rotate(327.27273deg);
  -webkit-transform: rotate(327.27273deg);
  transform: rotate(327.27273deg);
}
.flake:nth-of-type(1) > span:nth-of-type(11) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(1) > span:before {
  left: calc(50% - (3px / 2));
  bottom: 0;
  width: 3px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(1) > span:after {
  bottom: 40%;
  left: calc(50% - ((23px / 16) / 2));
  height: calc(23px / 16);
  width: calc(23px / 16);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(1) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(1) > span span:nth-of-type(1):before, .flake:nth-of-type(1) > span span:nth-of-type(1):after {
  width: 56%;
}
.flake:nth-of-type(1) > span span:nth-of-type(2):before, .flake:nth-of-type(1) > span span:nth-of-type(2):after {
  width: 58%;
}
.flake:nth-of-type(1) > span span:nth-of-type(3):before, .flake:nth-of-type(1) > span span:nth-of-type(3):after {
  width: 104%;
}
.flake:nth-of-type(1) > span span:nth-of-type(4):before, .flake:nth-of-type(1) > span span:nth-of-type(4):after {
  width: 57%;
}
.flake:nth-of-type(1) > span span:nth-of-type(1) {
  top: calc(12% + (56% / 4) * (1 - 1));
}
.flake:nth-of-type(1) > span span:nth-of-type(2) {
  top: calc(12% + (56% / 4) * (2 - 1));
}
.flake:nth-of-type(1) > span span:nth-of-type(3) {
  top: calc(12% + (56% / 4) * (3 - 1));
}
.flake:nth-of-type(1) > span span:nth-of-type(4) {
  top: calc(12% + (56% / 4) * (4 - 1));
}
.flake:nth-of-type(1) > span span:before, .flake:nth-of-type(1) > span span:after {
  bottom: 0;
  width: 60%;
  height: 3px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(1) > span span:before {
  right: 50%;
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(1) > span span:after {
  left: 50%;
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(2) {
  position: absolute;
  height: 51px;
  width: 51px;
  /* Animation */
  top: -6px;
  left: 21%;
  filter: blur(3px);
  -moz-animation: 64s flakes linear infinite;
  -webkit-animation: 64s flakes linear infinite;
  animation: 64s flakes linear infinite;
}
.flake:nth-of-type(2) * {
  position: absolute;
}
.flake:nth-of-type(2) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(2) > span:nth-of-type(1) {
  -moz-transform: rotate(30deg);
  -ms-transform: rotate(30deg);
  -webkit-transform: rotate(30deg);
  transform: rotate(30deg);
}
.flake:nth-of-type(2) > span:nth-of-type(2) {
  -moz-transform: rotate(60deg);
  -ms-transform: rotate(60deg);
  -webkit-transform: rotate(60deg);
  transform: rotate(60deg);
}
.flake:nth-of-type(2) > span:nth-of-type(3) {
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
.flake:nth-of-type(2) > span:nth-of-type(4) {
  -moz-transform: rotate(120deg);
  -ms-transform: rotate(120deg);
  -webkit-transform: rotate(120deg);
  transform: rotate(120deg);
}
.flake:nth-of-type(2) > span:nth-of-type(5) {
  -moz-transform: rotate(150deg);
  -ms-transform: rotate(150deg);
  -webkit-transform: rotate(150deg);
  transform: rotate(150deg);
}
.flake:nth-of-type(2) > span:nth-of-type(6) {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.flake:nth-of-type(2) > span:nth-of-type(7) {
  -moz-transform: rotate(210deg);
  -ms-transform: rotate(210deg);
  -webkit-transform: rotate(210deg);
  transform: rotate(210deg);
}
.flake:nth-of-type(2) > span:nth-of-type(8) {
  -moz-transform: rotate(240deg);
  -ms-transform: rotate(240deg);
  -webkit-transform: rotate(240deg);
  transform: rotate(240deg);
}
.flake:nth-of-type(2) > span:nth-of-type(9) {
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -webkit-transform: rotate(270deg);
  transform: rotate(270deg);
}
.flake:nth-of-type(2) > span:nth-of-type(10) {
  -moz-transform: rotate(300deg);
  -ms-transform: rotate(300deg);
  -webkit-transform: rotate(300deg);
  transform: rotate(300deg);
}
.flake:nth-of-type(2) > span:nth-of-type(11) {
  -moz-transform: rotate(330deg);
  -ms-transform: rotate(330deg);
  -webkit-transform: rotate(330deg);
  transform: rotate(330deg);
}
.flake:nth-of-type(2) > span:nth-of-type(12) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(2) > span:before {
  left: calc(50% - (1px / 2));
  bottom: 0;
  width: 1px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(2) > span:after {
  bottom: 71%;
  left: calc(50% - ((51px / 18) / 2));
  height: calc(51px / 18);
  width: calc(51px / 18);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(2) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(2) > span span:nth-of-type(1):before, .flake:nth-of-type(2) > span span:nth-of-type(1):after {
  width: 47%;
}
.flake:nth-of-type(2) > span span:nth-of-type(2):before, .flake:nth-of-type(2) > span span:nth-of-type(2):after {
  width: 84%;
}
.flake:nth-of-type(2) > span span:nth-of-type(3):before, .flake:nth-of-type(2) > span span:nth-of-type(3):after {
  width: 80%;
}
.flake:nth-of-type(2) > span span:nth-of-type(4):before, .flake:nth-of-type(2) > span span:nth-of-type(4):after {
  width: 49%;
}
.flake:nth-of-type(2) > span span:nth-of-type(1) {
  top: calc(20% + (59% / 4) * (1 - 1));
}
.flake:nth-of-type(2) > span span:nth-of-type(2) {
  top: calc(20% + (59% / 4) * (2 - 1));
}
.flake:nth-of-type(2) > span span:nth-of-type(3) {
  top: calc(20% + (59% / 4) * (3 - 1));
}
.flake:nth-of-type(2) > span span:nth-of-type(4) {
  top: calc(20% + (59% / 4) * (4 - 1));
}
.flake:nth-of-type(2) > span span:before, .flake:nth-of-type(2) > span span:after {
  bottom: 0;
  width: 60%;
  height: 1px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(2) > span span:before {
  right: 50%;
  -moz-transform: rotate(42deg);
  -ms-transform: rotate(42deg);
  -webkit-transform: rotate(42deg);
  transform: rotate(42deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(2) > span span:after {
  left: 50%;
  -moz-transform: rotate(-42deg);
  -ms-transform: rotate(-42deg);
  -webkit-transform: rotate(-42deg);
  transform: rotate(-42deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(3) {
  position: absolute;
  height: 90px;
  width: 90px;
  /* Animation */
  top: -215px;
  left: 9%;
  filter: blur(4px);
  -moz-animation: 67s flakes linear infinite;
  -webkit-animation: 67s flakes linear infinite;
  animation: 67s flakes linear infinite;
}
.flake:nth-of-type(3) * {
  position: absolute;
}
.flake:nth-of-type(3) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(3) > span:nth-of-type(1) {
  -moz-transform: rotate(36deg);
  -ms-transform: rotate(36deg);
  -webkit-transform: rotate(36deg);
  transform: rotate(36deg);
}
.flake:nth-of-type(3) > span:nth-of-type(2) {
  -moz-transform: rotate(72deg);
  -ms-transform: rotate(72deg);
  -webkit-transform: rotate(72deg);
  transform: rotate(72deg);
}
.flake:nth-of-type(3) > span:nth-of-type(3) {
  -moz-transform: rotate(108deg);
  -ms-transform: rotate(108deg);
  -webkit-transform: rotate(108deg);
  transform: rotate(108deg);
}
.flake:nth-of-type(3) > span:nth-of-type(4) {
  -moz-transform: rotate(144deg);
  -ms-transform: rotate(144deg);
  -webkit-transform: rotate(144deg);
  transform: rotate(144deg);
}
.flake:nth-of-type(3) > span:nth-of-type(5) {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.flake:nth-of-type(3) > span:nth-of-type(6) {
  -moz-transform: rotate(216deg);
  -ms-transform: rotate(216deg);
  -webkit-transform: rotate(216deg);
  transform: rotate(216deg);
}
.flake:nth-of-type(3) > span:nth-of-type(7) {
  -moz-transform: rotate(252deg);
  -ms-transform: rotate(252deg);
  -webkit-transform: rotate(252deg);
  transform: rotate(252deg);
}
.flake:nth-of-type(3) > span:nth-of-type(8) {
  -moz-transform: rotate(288deg);
  -ms-transform: rotate(288deg);
  -webkit-transform: rotate(288deg);
  transform: rotate(288deg);
}
.flake:nth-of-type(3) > span:nth-of-type(9) {
  -moz-transform: rotate(324deg);
  -ms-transform: rotate(324deg);
  -webkit-transform: rotate(324deg);
  transform: rotate(324deg);
}
.flake:nth-of-type(3) > span:nth-of-type(10) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(3) > span:before {
  left: calc(50% - (3px / 2));
  bottom: 0;
  width: 3px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(3) > span:after {
  bottom: 76%;
  left: calc(50% - ((90px / 20) / 2));
  height: calc(90px / 20);
  width: calc(90px / 20);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(3) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(3) > span span:nth-of-type(1):before, .flake:nth-of-type(3) > span span:nth-of-type(1):after {
  width: 51%;
}
.flake:nth-of-type(3) > span span:nth-of-type(2):before, .flake:nth-of-type(3) > span span:nth-of-type(2):after {
  width: 57%;
}
.flake:nth-of-type(3) > span span:nth-of-type(3):before, .flake:nth-of-type(3) > span span:nth-of-type(3):after {
  width: 66%;
}
.flake:nth-of-type(3) > span span:nth-of-type(4):before, .flake:nth-of-type(3) > span span:nth-of-type(4):after {
  width: 47%;
}
.flake:nth-of-type(3) > span span:nth-of-type(1) {
  top: calc(20% + (51% / 4) * (1 - 1));
}
.flake:nth-of-type(3) > span span:nth-of-type(2) {
  top: calc(20% + (51% / 4) * (2 - 1));
}
.flake:nth-of-type(3) > span span:nth-of-type(3) {
  top: calc(20% + (51% / 4) * (3 - 1));
}
.flake:nth-of-type(3) > span span:nth-of-type(4) {
  top: calc(20% + (51% / 4) * (4 - 1));
}
.flake:nth-of-type(3) > span span:before, .flake:nth-of-type(3) > span span:after {
  bottom: 0;
  width: 60%;
  height: 3px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(3) > span span:before {
  right: 50%;
  -moz-transform: rotate(49deg);
  -ms-transform: rotate(49deg);
  -webkit-transform: rotate(49deg);
  transform: rotate(49deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(3) > span span:after {
  left: 50%;
  -moz-transform: rotate(-49deg);
  -ms-transform: rotate(-49deg);
  -webkit-transform: rotate(-49deg);
  transform: rotate(-49deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(4) {
  position: absolute;
  height: 36px;
  width: 36px;
  /* Animation */
  top: -120px;
  left: 52%;
  filter: blur(3px);
  -moz-animation: 57s flakes linear infinite;
  -webkit-animation: 57s flakes linear infinite;
  animation: 57s flakes linear infinite;
}
.flake:nth-of-type(4) * {
  position: absolute;
}
.flake:nth-of-type(4) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(4) > span:nth-of-type(1) {
  -moz-transform: rotate(30deg);
  -ms-transform: rotate(30deg);
  -webkit-transform: rotate(30deg);
  transform: rotate(30deg);
}
.flake:nth-of-type(4) > span:nth-of-type(2) {
  -moz-transform: rotate(60deg);
  -ms-transform: rotate(60deg);
  -webkit-transform: rotate(60deg);
  transform: rotate(60deg);
}
.flake:nth-of-type(4) > span:nth-of-type(3) {
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
.flake:nth-of-type(4) > span:nth-of-type(4) {
  -moz-transform: rotate(120deg);
  -ms-transform: rotate(120deg);
  -webkit-transform: rotate(120deg);
  transform: rotate(120deg);
}
.flake:nth-of-type(4) > span:nth-of-type(5) {
  -moz-transform: rotate(150deg);
  -ms-transform: rotate(150deg);
  -webkit-transform: rotate(150deg);
  transform: rotate(150deg);
}
.flake:nth-of-type(4) > span:nth-of-type(6) {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.flake:nth-of-type(4) > span:nth-of-type(7) {
  -moz-transform: rotate(210deg);
  -ms-transform: rotate(210deg);
  -webkit-transform: rotate(210deg);
  transform: rotate(210deg);
}
.flake:nth-of-type(4) > span:nth-of-type(8) {
  -moz-transform: rotate(240deg);
  -ms-transform: rotate(240deg);
  -webkit-transform: rotate(240deg);
  transform: rotate(240deg);
}
.flake:nth-of-type(4) > span:nth-of-type(9) {
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -webkit-transform: rotate(270deg);
  transform: rotate(270deg);
}
.flake:nth-of-type(4) > span:nth-of-type(10) {
  -moz-transform: rotate(300deg);
  -ms-transform: rotate(300deg);
  -webkit-transform: rotate(300deg);
  transform: rotate(300deg);
}
.flake:nth-of-type(4) > span:nth-of-type(11) {
  -moz-transform: rotate(330deg);
  -ms-transform: rotate(330deg);
  -webkit-transform: rotate(330deg);
  transform: rotate(330deg);
}
.flake:nth-of-type(4) > span:nth-of-type(12) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(4) > span:before {
  left: calc(50% - (2px / 2));
  bottom: 0;
  width: 2px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(4) > span:after {
  bottom: 9%;
  left: calc(50% - ((36px / 20) / 2));
  height: calc(36px / 20);
  width: calc(36px / 20);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(4) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(4) > span span:nth-of-type(1):before, .flake:nth-of-type(4) > span span:nth-of-type(1):after {
  width: 50%;
}
.flake:nth-of-type(4) > span span:nth-of-type(2):before, .flake:nth-of-type(4) > span span:nth-of-type(2):after {
  width: 46%;
}
.flake:nth-of-type(4) > span span:nth-of-type(3):before, .flake:nth-of-type(4) > span span:nth-of-type(3):after {
  width: 74%;
}
.flake:nth-of-type(4) > span span:nth-of-type(4):before, .flake:nth-of-type(4) > span span:nth-of-type(4):after {
  width: 58%;
}
.flake:nth-of-type(4) > span span:nth-of-type(1) {
  top: calc(2% + (65% / 4) * (1 - 1));
}
.flake:nth-of-type(4) > span span:nth-of-type(2) {
  top: calc(2% + (65% / 4) * (2 - 1));
}
.flake:nth-of-type(4) > span span:nth-of-type(3) {
  top: calc(2% + (65% / 4) * (3 - 1));
}
.flake:nth-of-type(4) > span span:nth-of-type(4) {
  top: calc(2% + (65% / 4) * (4 - 1));
}
.flake:nth-of-type(4) > span span:before, .flake:nth-of-type(4) > span span:after {
  bottom: 0;
  width: 60%;
  height: 2px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(4) > span span:before {
  right: 50%;
  -moz-transform: rotate(43deg);
  -ms-transform: rotate(43deg);
  -webkit-transform: rotate(43deg);
  transform: rotate(43deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(4) > span span:after {
  left: 50%;
  -moz-transform: rotate(-43deg);
  -ms-transform: rotate(-43deg);
  -webkit-transform: rotate(-43deg);
  transform: rotate(-43deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(5) {
  position: absolute;
  height: 85px;
  width: 85px;
  /* Animation */
  top: -24px;
  left: 56%;
  filter: blur(3px);
  -moz-animation: 25s flakes linear infinite;
  -webkit-animation: 25s flakes linear infinite;
  animation: 25s flakes linear infinite;
}
.flake:nth-of-type(5) * {
  position: absolute;
}
.flake:nth-of-type(5) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(5) > span:nth-of-type(1) {
  -moz-transform: rotate(30deg);
  -ms-transform: rotate(30deg);
  -webkit-transform: rotate(30deg);
  transform: rotate(30deg);
}
.flake:nth-of-type(5) > span:nth-of-type(2) {
  -moz-transform: rotate(60deg);
  -ms-transform: rotate(60deg);
  -webkit-transform: rotate(60deg);
  transform: rotate(60deg);
}
.flake:nth-of-type(5) > span:nth-of-type(3) {
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
.flake:nth-of-type(5) > span:nth-of-type(4) {
  -moz-transform: rotate(120deg);
  -ms-transform: rotate(120deg);
  -webkit-transform: rotate(120deg);
  transform: rotate(120deg);
}
.flake:nth-of-type(5) > span:nth-of-type(5) {
  -moz-transform: rotate(150deg);
  -ms-transform: rotate(150deg);
  -webkit-transform: rotate(150deg);
  transform: rotate(150deg);
}
.flake:nth-of-type(5) > span:nth-of-type(6) {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.flake:nth-of-type(5) > span:nth-of-type(7) {
  -moz-transform: rotate(210deg);
  -ms-transform: rotate(210deg);
  -webkit-transform: rotate(210deg);
  transform: rotate(210deg);
}
.flake:nth-of-type(5) > span:nth-of-type(8) {
  -moz-transform: rotate(240deg);
  -ms-transform: rotate(240deg);
  -webkit-transform: rotate(240deg);
  transform: rotate(240deg);
}
.flake:nth-of-type(5) > span:nth-of-type(9) {
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -webkit-transform: rotate(270deg);
  transform: rotate(270deg);
}
.flake:nth-of-type(5) > span:nth-of-type(10) {
  -moz-transform: rotate(300deg);
  -ms-transform: rotate(300deg);
  -webkit-transform: rotate(300deg);
  transform: rotate(300deg);
}
.flake:nth-of-type(5) > span:nth-of-type(11) {
  -moz-transform: rotate(330deg);
  -ms-transform: rotate(330deg);
  -webkit-transform: rotate(330deg);
  transform: rotate(330deg);
}
.flake:nth-of-type(5) > span:nth-of-type(12) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(5) > span:before {
  left: calc(50% - (1px / 2));
  bottom: 0;
  width: 1px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(5) > span:after {
  bottom: 12%;
  left: calc(50% - ((85px / 16) / 2));
  height: calc(85px / 16);
  width: calc(85px / 16);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(5) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(5) > span span:nth-of-type(1):before, .flake:nth-of-type(5) > span span:nth-of-type(1):after {
  width: 51%;
}
.flake:nth-of-type(5) > span span:nth-of-type(2):before, .flake:nth-of-type(5) > span span:nth-of-type(2):after {
  width: 41%;
}
.flake:nth-of-type(5) > span span:nth-of-type(3):before, .flake:nth-of-type(5) > span span:nth-of-type(3):after {
  width: 67%;
}
.flake:nth-of-type(5) > span span:nth-of-type(4):before, .flake:nth-of-type(5) > span span:nth-of-type(4):after {
  width: 45%;
}
.flake:nth-of-type(5) > span span:nth-of-type(1) {
  top: calc(13% + (85% / 4) * (1 - 1));
}
.flake:nth-of-type(5) > span span:nth-of-type(2) {
  top: calc(13% + (85% / 4) * (2 - 1));
}
.flake:nth-of-type(5) > span span:nth-of-type(3) {
  top: calc(13% + (85% / 4) * (3 - 1));
}
.flake:nth-of-type(5) > span span:nth-of-type(4) {
  top: calc(13% + (85% / 4) * (4 - 1));
}
.flake:nth-of-type(5) > span span:before, .flake:nth-of-type(5) > span span:after {
  bottom: 0;
  width: 60%;
  height: 1px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(5) > span span:before {
  right: 50%;
  -moz-transform: rotate(40deg);
  -ms-transform: rotate(40deg);
  -webkit-transform: rotate(40deg);
  transform: rotate(40deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(5) > span span:after {
  left: 50%;
  -moz-transform: rotate(-40deg);
  -ms-transform: rotate(-40deg);
  -webkit-transform: rotate(-40deg);
  transform: rotate(-40deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(6) {
  position: absolute;
  height: 97px;
  width: 97px;
  /* Animation */
  top: -203px;
  left: 86%;
  filter: blur(3px);
  -moz-animation: 33s flakes linear infinite;
  -webkit-animation: 33s flakes linear infinite;
  animation: 33s flakes linear infinite;
}
.flake:nth-of-type(6) * {
  position: absolute;
}
.flake:nth-of-type(6) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(6) > span:nth-of-type(1) {
  -moz-transform: rotate(30deg);
  -ms-transform: rotate(30deg);
  -webkit-transform: rotate(30deg);
  transform: rotate(30deg);
}
.flake:nth-of-type(6) > span:nth-of-type(2) {
  -moz-transform: rotate(60deg);
  -ms-transform: rotate(60deg);
  -webkit-transform: rotate(60deg);
  transform: rotate(60deg);
}
.flake:nth-of-type(6) > span:nth-of-type(3) {
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
.flake:nth-of-type(6) > span:nth-of-type(4) {
  -moz-transform: rotate(120deg);
  -ms-transform: rotate(120deg);
  -webkit-transform: rotate(120deg);
  transform: rotate(120deg);
}
.flake:nth-of-type(6) > span:nth-of-type(5) {
  -moz-transform: rotate(150deg);
  -ms-transform: rotate(150deg);
  -webkit-transform: rotate(150deg);
  transform: rotate(150deg);
}
.flake:nth-of-type(6) > span:nth-of-type(6) {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.flake:nth-of-type(6) > span:nth-of-type(7) {
  -moz-transform: rotate(210deg);
  -ms-transform: rotate(210deg);
  -webkit-transform: rotate(210deg);
  transform: rotate(210deg);
}
.flake:nth-of-type(6) > span:nth-of-type(8) {
  -moz-transform: rotate(240deg);
  -ms-transform: rotate(240deg);
  -webkit-transform: rotate(240deg);
  transform: rotate(240deg);
}
.flake:nth-of-type(6) > span:nth-of-type(9) {
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -webkit-transform: rotate(270deg);
  transform: rotate(270deg);
}
.flake:nth-of-type(6) > span:nth-of-type(10) {
  -moz-transform: rotate(300deg);
  -ms-transform: rotate(300deg);
  -webkit-transform: rotate(300deg);
  transform: rotate(300deg);
}
.flake:nth-of-type(6) > span:nth-of-type(11) {
  -moz-transform: rotate(330deg);
  -ms-transform: rotate(330deg);
  -webkit-transform: rotate(330deg);
  transform: rotate(330deg);
}
.flake:nth-of-type(6) > span:nth-of-type(12) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(6) > span:before {
  left: calc(50% - (3px / 2));
  bottom: 0;
  width: 3px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(6) > span:after {
  bottom: 26%;
  left: calc(50% - ((97px / 14) / 2));
  height: calc(97px / 14);
  width: calc(97px / 14);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(6) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(6) > span span:nth-of-type(1):before, .flake:nth-of-type(6) > span span:nth-of-type(1):after {
  width: 49%;
}
.flake:nth-of-type(6) > span span:nth-of-type(2):before, .flake:nth-of-type(6) > span span:nth-of-type(2):after {
  width: 65%;
}
.flake:nth-of-type(6) > span span:nth-of-type(3):before, .flake:nth-of-type(6) > span span:nth-of-type(3):after {
  width: 63%;
}
.flake:nth-of-type(6) > span span:nth-of-type(4):before, .flake:nth-of-type(6) > span span:nth-of-type(4):after {
  width: 44%;
}
.flake:nth-of-type(6) > span span:nth-of-type(1) {
  top: calc(4% + (51% / 4) * (1 - 1));
}
.flake:nth-of-type(6) > span span:nth-of-type(2) {
  top: calc(4% + (51% / 4) * (2 - 1));
}
.flake:nth-of-type(6) > span span:nth-of-type(3) {
  top: calc(4% + (51% / 4) * (3 - 1));
}
.flake:nth-of-type(6) > span span:nth-of-type(4) {
  top: calc(4% + (51% / 4) * (4 - 1));
}
.flake:nth-of-type(6) > span span:before, .flake:nth-of-type(6) > span span:after {
  bottom: 0;
  width: 60%;
  height: 3px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(6) > span span:before {
  right: 50%;
  -moz-transform: rotate(56deg);
  -ms-transform: rotate(56deg);
  -webkit-transform: rotate(56deg);
  transform: rotate(56deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(6) > span span:after {
  left: 50%;
  -moz-transform: rotate(-56deg);
  -ms-transform: rotate(-56deg);
  -webkit-transform: rotate(-56deg);
  transform: rotate(-56deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(7) {
  position: absolute;
  height: 66px;
  width: 66px;
  /* Animation */
  top: -224px;
  left: 38%;
  filter: blur(3px);
  -moz-animation: 20s flakes linear infinite;
  -webkit-animation: 20s flakes linear infinite;
  animation: 20s flakes linear infinite;
}
.flake:nth-of-type(7) * {
  position: absolute;
}
.flake:nth-of-type(7) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(7) > span:nth-of-type(1) {
  -moz-transform: rotate(30deg);
  -ms-transform: rotate(30deg);
  -webkit-transform: rotate(30deg);
  transform: rotate(30deg);
}
.flake:nth-of-type(7) > span:nth-of-type(2) {
  -moz-transform: rotate(60deg);
  -ms-transform: rotate(60deg);
  -webkit-transform: rotate(60deg);
  transform: rotate(60deg);
}
.flake:nth-of-type(7) > span:nth-of-type(3) {
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
.flake:nth-of-type(7) > span:nth-of-type(4) {
  -moz-transform: rotate(120deg);
  -ms-transform: rotate(120deg);
  -webkit-transform: rotate(120deg);
  transform: rotate(120deg);
}
.flake:nth-of-type(7) > span:nth-of-type(5) {
  -moz-transform: rotate(150deg);
  -ms-transform: rotate(150deg);
  -webkit-transform: rotate(150deg);
  transform: rotate(150deg);
}
.flake:nth-of-type(7) > span:nth-of-type(6) {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.flake:nth-of-type(7) > span:nth-of-type(7) {
  -moz-transform: rotate(210deg);
  -ms-transform: rotate(210deg);
  -webkit-transform: rotate(210deg);
  transform: rotate(210deg);
}
.flake:nth-of-type(7) > span:nth-of-type(8) {
  -moz-transform: rotate(240deg);
  -ms-transform: rotate(240deg);
  -webkit-transform: rotate(240deg);
  transform: rotate(240deg);
}
.flake:nth-of-type(7) > span:nth-of-type(9) {
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -webkit-transform: rotate(270deg);
  transform: rotate(270deg);
}
.flake:nth-of-type(7) > span:nth-of-type(10) {
  -moz-transform: rotate(300deg);
  -ms-transform: rotate(300deg);
  -webkit-transform: rotate(300deg);
  transform: rotate(300deg);
}
.flake:nth-of-type(7) > span:nth-of-type(11) {
  -moz-transform: rotate(330deg);
  -ms-transform: rotate(330deg);
  -webkit-transform: rotate(330deg);
  transform: rotate(330deg);
}
.flake:nth-of-type(7) > span:nth-of-type(12) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(7) > span:before {
  left: calc(50% - (3px / 2));
  bottom: 0;
  width: 3px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(7) > span:after {
  bottom: 33%;
  left: calc(50% - ((66px / 14) / 2));
  height: calc(66px / 14);
  width: calc(66px / 14);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(7) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(7) > span span:nth-of-type(1):before, .flake:nth-of-type(7) > span span:nth-of-type(1):after {
  width: 53%;
}
.flake:nth-of-type(7) > span span:nth-of-type(2):before, .flake:nth-of-type(7) > span span:nth-of-type(2):after {
  width: 57%;
}
.flake:nth-of-type(7) > span span:nth-of-type(3):before, .flake:nth-of-type(7) > span span:nth-of-type(3):after {
  width: 87%;
}
.flake:nth-of-type(7) > span span:nth-of-type(4):before, .flake:nth-of-type(7) > span span:nth-of-type(4):after {
  width: 45%;
}
.flake:nth-of-type(7) > span span:nth-of-type(1) {
  top: calc(5% + (77% / 4) * (1 - 1));
}
.flake:nth-of-type(7) > span span:nth-of-type(2) {
  top: calc(5% + (77% / 4) * (2 - 1));
}
.flake:nth-of-type(7) > span span:nth-of-type(3) {
  top: calc(5% + (77% / 4) * (3 - 1));
}
.flake:nth-of-type(7) > span span:nth-of-type(4) {
  top: calc(5% + (77% / 4) * (4 - 1));
}
.flake:nth-of-type(7) > span span:before, .flake:nth-of-type(7) > span span:after {
  bottom: 0;
  width: 60%;
  height: 3px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(7) > span span:before {
  right: 50%;
  -moz-transform: rotate(58deg);
  -ms-transform: rotate(58deg);
  -webkit-transform: rotate(58deg);
  transform: rotate(58deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(7) > span span:after {
  left: 50%;
  -moz-transform: rotate(-58deg);
  -ms-transform: rotate(-58deg);
  -webkit-transform: rotate(-58deg);
  transform: rotate(-58deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(8) {
  position: absolute;
  height: 43px;
  width: 43px;
  /* Animation */
  top: -529px;
  left: 76%;
  filter: blur(4px);
  -moz-animation: 33s flakes linear infinite;
  -webkit-animation: 33s flakes linear infinite;
  animation: 33s flakes linear infinite;
}
.flake:nth-of-type(8) * {
  position: absolute;
}
.flake:nth-of-type(8) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(8) > span:nth-of-type(1) {
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.flake:nth-of-type(8) > span:nth-of-type(2) {
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
.flake:nth-of-type(8) > span:nth-of-type(3) {
  -moz-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
  transform: rotate(135deg);
}
.flake:nth-of-type(8) > span:nth-of-type(4) {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.flake:nth-of-type(8) > span:nth-of-type(5) {
  -moz-transform: rotate(225deg);
  -ms-transform: rotate(225deg);
  -webkit-transform: rotate(225deg);
  transform: rotate(225deg);
}
.flake:nth-of-type(8) > span:nth-of-type(6) {
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -webkit-transform: rotate(270deg);
  transform: rotate(270deg);
}
.flake:nth-of-type(8) > span:nth-of-type(7) {
  -moz-transform: rotate(315deg);
  -ms-transform: rotate(315deg);
  -webkit-transform: rotate(315deg);
  transform: rotate(315deg);
}
.flake:nth-of-type(8) > span:nth-of-type(8) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(8) > span:before {
  left: calc(50% - (3px / 2));
  bottom: 0;
  width: 3px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(8) > span:after {
  bottom: 12%;
  left: calc(50% - ((43px / 13) / 2));
  height: calc(43px / 13);
  width: calc(43px / 13);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(8) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(8) > span span:nth-of-type(1):before, .flake:nth-of-type(8) > span span:nth-of-type(1):after {
  width: 46%;
}
.flake:nth-of-type(8) > span span:nth-of-type(2):before, .flake:nth-of-type(8) > span span:nth-of-type(2):after {
  width: 93%;
}
.flake:nth-of-type(8) > span span:nth-of-type(3):before, .flake:nth-of-type(8) > span span:nth-of-type(3):after {
  width: 59%;
}
.flake:nth-of-type(8) > span span:nth-of-type(4):before, .flake:nth-of-type(8) > span span:nth-of-type(4):after {
  width: 54%;
}
.flake:nth-of-type(8) > span span:nth-of-type(1) {
  top: calc(14% + (85% / 4) * (1 - 1));
}
.flake:nth-of-type(8) > span span:nth-of-type(2) {
  top: calc(14% + (85% / 4) * (2 - 1));
}
.flake:nth-of-type(8) > span span:nth-of-type(3) {
  top: calc(14% + (85% / 4) * (3 - 1));
}
.flake:nth-of-type(8) > span span:nth-of-type(4) {
  top: calc(14% + (85% / 4) * (4 - 1));
}
.flake:nth-of-type(8) > span span:before, .flake:nth-of-type(8) > span span:after {
  bottom: 0;
  width: 60%;
  height: 3px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(8) > span span:before {
  right: 50%;
  -moz-transform: rotate(47deg);
  -ms-transform: rotate(47deg);
  -webkit-transform: rotate(47deg);
  transform: rotate(47deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(8) > span span:after {
  left: 50%;
  -moz-transform: rotate(-47deg);
  -ms-transform: rotate(-47deg);
  -webkit-transform: rotate(-47deg);
  transform: rotate(-47deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(9) {
  position: absolute;
  height: 70px;
  width: 70px;
  /* Animation */
  top: -156px;
  left: 81%;
  filter: blur(4px);
  -moz-animation: 21s flakes linear infinite;
  -webkit-animation: 21s flakes linear infinite;
  animation: 21s flakes linear infinite;
}
.flake:nth-of-type(9) * {
  position: absolute;
}
.flake:nth-of-type(9) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(9) > span:nth-of-type(1) {
  -moz-transform: rotate(32.72727deg);
  -ms-transform: rotate(32.72727deg);
  -webkit-transform: rotate(32.72727deg);
  transform: rotate(32.72727deg);
}
.flake:nth-of-type(9) > span:nth-of-type(2) {
  -moz-transform: rotate(65.45455deg);
  -ms-transform: rotate(65.45455deg);
  -webkit-transform: rotate(65.45455deg);
  transform: rotate(65.45455deg);
}
.flake:nth-of-type(9) > span:nth-of-type(3) {
  -moz-transform: rotate(98.18182deg);
  -ms-transform: rotate(98.18182deg);
  -webkit-transform: rotate(98.18182deg);
  transform: rotate(98.18182deg);
}
.flake:nth-of-type(9) > span:nth-of-type(4) {
  -moz-transform: rotate(130.90909deg);
  -ms-transform: rotate(130.90909deg);
  -webkit-transform: rotate(130.90909deg);
  transform: rotate(130.90909deg);
}
.flake:nth-of-type(9) > span:nth-of-type(5) {
  -moz-transform: rotate(163.63636deg);
  -ms-transform: rotate(163.63636deg);
  -webkit-transform: rotate(163.63636deg);
  transform: rotate(163.63636deg);
}
.flake:nth-of-type(9) > span:nth-of-type(6) {
  -moz-transform: rotate(196.36364deg);
  -ms-transform: rotate(196.36364deg);
  -webkit-transform: rotate(196.36364deg);
  transform: rotate(196.36364deg);
}
.flake:nth-of-type(9) > span:nth-of-type(7) {
  -moz-transform: rotate(229.09091deg);
  -ms-transform: rotate(229.09091deg);
  -webkit-transform: rotate(229.09091deg);
  transform: rotate(229.09091deg);
}
.flake:nth-of-type(9) > span:nth-of-type(8) {
  -moz-transform: rotate(261.81818deg);
  -ms-transform: rotate(261.81818deg);
  -webkit-transform: rotate(261.81818deg);
  transform: rotate(261.81818deg);
}
.flake:nth-of-type(9) > span:nth-of-type(9) {
  -moz-transform: rotate(294.54545deg);
  -ms-transform: rotate(294.54545deg);
  -webkit-transform: rotate(294.54545deg);
  transform: rotate(294.54545deg);
}
.flake:nth-of-type(9) > span:nth-of-type(10) {
  -moz-transform: rotate(327.27273deg);
  -ms-transform: rotate(327.27273deg);
  -webkit-transform: rotate(327.27273deg);
  transform: rotate(327.27273deg);
}
.flake:nth-of-type(9) > span:nth-of-type(11) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(9) > span:before {
  left: calc(50% - (1px / 2));
  bottom: 0;
  width: 1px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(9) > span:after {
  bottom: 12%;
  left: calc(50% - ((70px / 16) / 2));
  height: calc(70px / 16);
  width: calc(70px / 16);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(9) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(9) > span span:nth-of-type(1):before, .flake:nth-of-type(9) > span span:nth-of-type(1):after {
  width: 41%;
}
.flake:nth-of-type(9) > span span:nth-of-type(2):before, .flake:nth-of-type(9) > span span:nth-of-type(2):after {
  width: 64%;
}
.flake:nth-of-type(9) > span span:nth-of-type(3):before, .flake:nth-of-type(9) > span span:nth-of-type(3):after {
  width: 56%;
}
.flake:nth-of-type(9) > span span:nth-of-type(4):before, .flake:nth-of-type(9) > span span:nth-of-type(4):after {
  width: 57%;
}
.flake:nth-of-type(9) > span span:nth-of-type(1) {
  top: calc(12% + (79% / 4) * (1 - 1));
}
.flake:nth-of-type(9) > span span:nth-of-type(2) {
  top: calc(12% + (79% / 4) * (2 - 1));
}
.flake:nth-of-type(9) > span span:nth-of-type(3) {
  top: calc(12% + (79% / 4) * (3 - 1));
}
.flake:nth-of-type(9) > span span:nth-of-type(4) {
  top: calc(12% + (79% / 4) * (4 - 1));
}
.flake:nth-of-type(9) > span span:before, .flake:nth-of-type(9) > span span:after {
  bottom: 0;
  width: 60%;
  height: 1px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(9) > span span:before {
  right: 50%;
  -moz-transform: rotate(37deg);
  -ms-transform: rotate(37deg);
  -webkit-transform: rotate(37deg);
  transform: rotate(37deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(9) > span span:after {
  left: 50%;
  -moz-transform: rotate(-37deg);
  -ms-transform: rotate(-37deg);
  -webkit-transform: rotate(-37deg);
  transform: rotate(-37deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(10) {
  position: absolute;
  height: 43px;
  width: 43px;
  /* Animation */
  top: -54px;
  left: 79%;
  filter: blur(3px);
  -moz-animation: 57s flakes linear infinite;
  -webkit-animation: 57s flakes linear infinite;
  animation: 57s flakes linear infinite;
}
.flake:nth-of-type(10) * {
  position: absolute;
}
.flake:nth-of-type(10) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(10) > span:nth-of-type(1) {
  -moz-transform: rotate(36deg);
  -ms-transform: rotate(36deg);
  -webkit-transform: rotate(36deg);
  transform: rotate(36deg);
}
.flake:nth-of-type(10) > span:nth-of-type(2) {
  -moz-transform: rotate(72deg);
  -ms-transform: rotate(72deg);
  -webkit-transform: rotate(72deg);
  transform: rotate(72deg);
}
.flake:nth-of-type(10) > span:nth-of-type(3) {
  -moz-transform: rotate(108deg);
  -ms-transform: rotate(108deg);
  -webkit-transform: rotate(108deg);
  transform: rotate(108deg);
}
.flake:nth-of-type(10) > span:nth-of-type(4) {
  -moz-transform: rotate(144deg);
  -ms-transform: rotate(144deg);
  -webkit-transform: rotate(144deg);
  transform: rotate(144deg);
}
.flake:nth-of-type(10) > span:nth-of-type(5) {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.flake:nth-of-type(10) > span:nth-of-type(6) {
  -moz-transform: rotate(216deg);
  -ms-transform: rotate(216deg);
  -webkit-transform: rotate(216deg);
  transform: rotate(216deg);
}
.flake:nth-of-type(10) > span:nth-of-type(7) {
  -moz-transform: rotate(252deg);
  -ms-transform: rotate(252deg);
  -webkit-transform: rotate(252deg);
  transform: rotate(252deg);
}
.flake:nth-of-type(10) > span:nth-of-type(8) {
  -moz-transform: rotate(288deg);
  -ms-transform: rotate(288deg);
  -webkit-transform: rotate(288deg);
  transform: rotate(288deg);
}
.flake:nth-of-type(10) > span:nth-of-type(9) {
  -moz-transform: rotate(324deg);
  -ms-transform: rotate(324deg);
  -webkit-transform: rotate(324deg);
  transform: rotate(324deg);
}
.flake:nth-of-type(10) > span:nth-of-type(10) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(10) > span:before {
  left: calc(50% - (3px / 2));
  bottom: 0;
  width: 3px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(10) > span:after {
  bottom: 23%;
  left: calc(50% - ((43px / 18) / 2));
  height: calc(43px / 18);
  width: calc(43px / 18);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(10) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(10) > span span:nth-of-type(1):before, .flake:nth-of-type(10) > span span:nth-of-type(1):after {
  width: 55%;
}
.flake:nth-of-type(10) > span span:nth-of-type(2):before, .flake:nth-of-type(10) > span span:nth-of-type(2):after {
  width: 92%;
}
.flake:nth-of-type(10) > span span:nth-of-type(3):before, .flake:nth-of-type(10) > span span:nth-of-type(3):after {
  width: 72%;
}
.flake:nth-of-type(10) > span span:nth-of-type(4):before, .flake:nth-of-type(10) > span span:nth-of-type(4):after {
  width: 47%;
}
.flake:nth-of-type(10) > span span:nth-of-type(1) {
  top: calc(13% + (62% / 4) * (1 - 1));
}
.flake:nth-of-type(10) > span span:nth-of-type(2) {
  top: calc(13% + (62% / 4) * (2 - 1));
}
.flake:nth-of-type(10) > span span:nth-of-type(3) {
  top: calc(13% + (62% / 4) * (3 - 1));
}
.flake:nth-of-type(10) > span span:nth-of-type(4) {
  top: calc(13% + (62% / 4) * (4 - 1));
}
.flake:nth-of-type(10) > span span:before, .flake:nth-of-type(10) > span span:after {
  bottom: 0;
  width: 60%;
  height: 3px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(10) > span span:before {
  right: 50%;
  -moz-transform: rotate(44deg);
  -ms-transform: rotate(44deg);
  -webkit-transform: rotate(44deg);
  transform: rotate(44deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(10) > span span:after {
  left: 50%;
  -moz-transform: rotate(-44deg);
  -ms-transform: rotate(-44deg);
  -webkit-transform: rotate(-44deg);
  transform: rotate(-44deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(11) {
  position: absolute;
  height: 88px;
  width: 88px;
  /* Animation */
  top: -90px;
  left: 58%;
  filter: blur(4px);
  -moz-animation: 64s flakes linear infinite;
  -webkit-animation: 64s flakes linear infinite;
  animation: 64s flakes linear infinite;
}
.flake:nth-of-type(11) * {
  position: absolute;
}
.flake:nth-of-type(11) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(11) > span:nth-of-type(1) {
  -moz-transform: rotate(40deg);
  -ms-transform: rotate(40deg);
  -webkit-transform: rotate(40deg);
  transform: rotate(40deg);
}
.flake:nth-of-type(11) > span:nth-of-type(2) {
  -moz-transform: rotate(80deg);
  -ms-transform: rotate(80deg);
  -webkit-transform: rotate(80deg);
  transform: rotate(80deg);
}
.flake:nth-of-type(11) > span:nth-of-type(3) {
  -moz-transform: rotate(120deg);
  -ms-transform: rotate(120deg);
  -webkit-transform: rotate(120deg);
  transform: rotate(120deg);
}
.flake:nth-of-type(11) > span:nth-of-type(4) {
  -moz-transform: rotate(160deg);
  -ms-transform: rotate(160deg);
  -webkit-transform: rotate(160deg);
  transform: rotate(160deg);
}
.flake:nth-of-type(11) > span:nth-of-type(5) {
  -moz-transform: rotate(200deg);
  -ms-transform: rotate(200deg);
  -webkit-transform: rotate(200deg);
  transform: rotate(200deg);
}
.flake:nth-of-type(11) > span:nth-of-type(6) {
  -moz-transform: rotate(240deg);
  -ms-transform: rotate(240deg);
  -webkit-transform: rotate(240deg);
  transform: rotate(240deg);
}
.flake:nth-of-type(11) > span:nth-of-type(7) {
  -moz-transform: rotate(280deg);
  -ms-transform: rotate(280deg);
  -webkit-transform: rotate(280deg);
  transform: rotate(280deg);
}
.flake:nth-of-type(11) > span:nth-of-type(8) {
  -moz-transform: rotate(320deg);
  -ms-transform: rotate(320deg);
  -webkit-transform: rotate(320deg);
  transform: rotate(320deg);
}
.flake:nth-of-type(11) > span:nth-of-type(9) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(11) > span:before {
  left: calc(50% - (2px / 2));
  bottom: 0;
  width: 2px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(11) > span:after {
  bottom: 67%;
  left: calc(50% - ((88px / 18) / 2));
  height: calc(88px / 18);
  width: calc(88px / 18);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(11) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(11) > span span:nth-of-type(1):before, .flake:nth-of-type(11) > span span:nth-of-type(1):after {
  width: 43%;
}
.flake:nth-of-type(11) > span span:nth-of-type(2):before, .flake:nth-of-type(11) > span span:nth-of-type(2):after {
  width: 81%;
}
.flake:nth-of-type(11) > span span:nth-of-type(3):before, .flake:nth-of-type(11) > span span:nth-of-type(3):after {
  width: 58%;
}
.flake:nth-of-type(11) > span span:nth-of-type(4):before, .flake:nth-of-type(11) > span span:nth-of-type(4):after {
  width: 52%;
}
.flake:nth-of-type(11) > span span:nth-of-type(1) {
  top: calc(7% + (72% / 4) * (1 - 1));
}
.flake:nth-of-type(11) > span span:nth-of-type(2) {
  top: calc(7% + (72% / 4) * (2 - 1));
}
.flake:nth-of-type(11) > span span:nth-of-type(3) {
  top: calc(7% + (72% / 4) * (3 - 1));
}
.flake:nth-of-type(11) > span span:nth-of-type(4) {
  top: calc(7% + (72% / 4) * (4 - 1));
}
.flake:nth-of-type(11) > span span:before, .flake:nth-of-type(11) > span span:after {
  bottom: 0;
  width: 60%;
  height: 2px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(11) > span span:before {
  right: 50%;
  -moz-transform: rotate(40deg);
  -ms-transform: rotate(40deg);
  -webkit-transform: rotate(40deg);
  transform: rotate(40deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(11) > span span:after {
  left: 50%;
  -moz-transform: rotate(-40deg);
  -ms-transform: rotate(-40deg);
  -webkit-transform: rotate(-40deg);
  transform: rotate(-40deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(12) {
  position: absolute;
  height: 51px;
  width: 51px;
  /* Animation */
  top: -168px;
  left: 56%;
  filter: blur(3px);
  -moz-animation: 35s flakes linear infinite;
  -webkit-animation: 35s flakes linear infinite;
  animation: 35s flakes linear infinite;
}
.flake:nth-of-type(12) * {
  position: absolute;
}
.flake:nth-of-type(12) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(12) > span:nth-of-type(1) {
  -moz-transform: rotate(36deg);
  -ms-transform: rotate(36deg);
  -webkit-transform: rotate(36deg);
  transform: rotate(36deg);
}
.flake:nth-of-type(12) > span:nth-of-type(2) {
  -moz-transform: rotate(72deg);
  -ms-transform: rotate(72deg);
  -webkit-transform: rotate(72deg);
  transform: rotate(72deg);
}
.flake:nth-of-type(12) > span:nth-of-type(3) {
  -moz-transform: rotate(108deg);
  -ms-transform: rotate(108deg);
  -webkit-transform: rotate(108deg);
  transform: rotate(108deg);
}
.flake:nth-of-type(12) > span:nth-of-type(4) {
  -moz-transform: rotate(144deg);
  -ms-transform: rotate(144deg);
  -webkit-transform: rotate(144deg);
  transform: rotate(144deg);
}
.flake:nth-of-type(12) > span:nth-of-type(5) {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.flake:nth-of-type(12) > span:nth-of-type(6) {
  -moz-transform: rotate(216deg);
  -ms-transform: rotate(216deg);
  -webkit-transform: rotate(216deg);
  transform: rotate(216deg);
}
.flake:nth-of-type(12) > span:nth-of-type(7) {
  -moz-transform: rotate(252deg);
  -ms-transform: rotate(252deg);
  -webkit-transform: rotate(252deg);
  transform: rotate(252deg);
}
.flake:nth-of-type(12) > span:nth-of-type(8) {
  -moz-transform: rotate(288deg);
  -ms-transform: rotate(288deg);
  -webkit-transform: rotate(288deg);
  transform: rotate(288deg);
}
.flake:nth-of-type(12) > span:nth-of-type(9) {
  -moz-transform: rotate(324deg);
  -ms-transform: rotate(324deg);
  -webkit-transform: rotate(324deg);
  transform: rotate(324deg);
}
.flake:nth-of-type(12) > span:nth-of-type(10) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(12) > span:before {
  left: calc(50% - (3px / 2));
  bottom: 0;
  width: 3px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(12) > span:after {
  bottom: 46%;
  left: calc(50% - ((51px / 13) / 2));
  height: calc(51px / 13);
  width: calc(51px / 13);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(12) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(12) > span span:nth-of-type(1):before, .flake:nth-of-type(12) > span span:nth-of-type(1):after {
  width: 51%;
}
.flake:nth-of-type(12) > span span:nth-of-type(2):before, .flake:nth-of-type(12) > span span:nth-of-type(2):after {
  width: 66%;
}
.flake:nth-of-type(12) > span span:nth-of-type(3):before, .flake:nth-of-type(12) > span span:nth-of-type(3):after {
  width: 81%;
}
.flake:nth-of-type(12) > span span:nth-of-type(4):before, .flake:nth-of-type(12) > span span:nth-of-type(4):after {
  width: 57%;
}
.flake:nth-of-type(12) > span span:nth-of-type(1) {
  top: calc(20% + (75% / 4) * (1 - 1));
}
.flake:nth-of-type(12) > span span:nth-of-type(2) {
  top: calc(20% + (75% / 4) * (2 - 1));
}
.flake:nth-of-type(12) > span span:nth-of-type(3) {
  top: calc(20% + (75% / 4) * (3 - 1));
}
.flake:nth-of-type(12) > span span:nth-of-type(4) {
  top: calc(20% + (75% / 4) * (4 - 1));
}
.flake:nth-of-type(12) > span span:before, .flake:nth-of-type(12) > span span:after {
  bottom: 0;
  width: 60%;
  height: 3px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(12) > span span:before {
  right: 50%;
  -moz-transform: rotate(57deg);
  -ms-transform: rotate(57deg);
  -webkit-transform: rotate(57deg);
  transform: rotate(57deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(12) > span span:after {
  left: 50%;
  -moz-transform: rotate(-57deg);
  -ms-transform: rotate(-57deg);
  -webkit-transform: rotate(-57deg);
  transform: rotate(-57deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(13) {
  position: absolute;
  height: 30px;
  width: 30px;
  /* Animation */
  top: -284px;
  left: 46%;
  filter: blur(3px);
  -moz-animation: 29s flakes linear infinite;
  -webkit-animation: 29s flakes linear infinite;
  animation: 29s flakes linear infinite;
}
.flake:nth-of-type(13) * {
  position: absolute;
}
.flake:nth-of-type(13) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(13) > span:nth-of-type(1) {
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.flake:nth-of-type(13) > span:nth-of-type(2) {
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
.flake:nth-of-type(13) > span:nth-of-type(3) {
  -moz-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
  transform: rotate(135deg);
}
.flake:nth-of-type(13) > span:nth-of-type(4) {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.flake:nth-of-type(13) > span:nth-of-type(5) {
  -moz-transform: rotate(225deg);
  -ms-transform: rotate(225deg);
  -webkit-transform: rotate(225deg);
  transform: rotate(225deg);
}
.flake:nth-of-type(13) > span:nth-of-type(6) {
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -webkit-transform: rotate(270deg);
  transform: rotate(270deg);
}
.flake:nth-of-type(13) > span:nth-of-type(7) {
  -moz-transform: rotate(315deg);
  -ms-transform: rotate(315deg);
  -webkit-transform: rotate(315deg);
  transform: rotate(315deg);
}
.flake:nth-of-type(13) > span:nth-of-type(8) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(13) > span:before {
  left: calc(50% - (3px / 2));
  bottom: 0;
  width: 3px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(13) > span:after {
  bottom: 9%;
  left: calc(50% - ((30px / 12) / 2));
  height: calc(30px / 12);
  width: calc(30px / 12);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(13) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(13) > span span:nth-of-type(1):before, .flake:nth-of-type(13) > span span:nth-of-type(1):after {
  width: 58%;
}
.flake:nth-of-type(13) > span span:nth-of-type(2):before, .flake:nth-of-type(13) > span span:nth-of-type(2):after {
  width: 49%;
}
.flake:nth-of-type(13) > span span:nth-of-type(3):before, .flake:nth-of-type(13) > span span:nth-of-type(3):after {
  width: 95%;
}
.flake:nth-of-type(13) > span span:nth-of-type(2):before, .flake:nth-of-type(13) > span span:nth-of-type(2):after {
  width: 49%;
}
.flake:nth-of-type(13) > span span:nth-of-type(1) {
  top: calc(10% + (60% / 4) * (1 - 1));
}
.flake:nth-of-type(13) > span span:nth-of-type(2) {
  top: calc(10% + (60% / 4) * (2 - 1));
}
.flake:nth-of-type(13) > span span:nth-of-type(3) {
  top: calc(10% + (60% / 4) * (3 - 1));
}
.flake:nth-of-type(13) > span span:nth-of-type(4) {
  top: calc(10% + (60% / 4) * (4 - 1));
}
.flake:nth-of-type(13) > span span:before, .flake:nth-of-type(13) > span span:after {
  bottom: 0;
  width: 60%;
  height: 3px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(13) > span span:before {
  right: 50%;
  -moz-transform: rotate(46deg);
  -ms-transform: rotate(46deg);
  -webkit-transform: rotate(46deg);
  transform: rotate(46deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(13) > span span:after {
  left: 50%;
  -moz-transform: rotate(-46deg);
  -ms-transform: rotate(-46deg);
  -webkit-transform: rotate(-46deg);
  transform: rotate(-46deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(14) {
  position: absolute;
  height: 62px;
  width: 62px;
  /* Animation */
  top: -23px;
  left: 64%;
  filter: blur(3px);
  -moz-animation: 43s flakes linear infinite;
  -webkit-animation: 43s flakes linear infinite;
  animation: 43s flakes linear infinite;
}
.flake:nth-of-type(14) * {
  position: absolute;
}
.flake:nth-of-type(14) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(14) > span:nth-of-type(1) {
  -moz-transform: rotate(32.72727deg);
  -ms-transform: rotate(32.72727deg);
  -webkit-transform: rotate(32.72727deg);
  transform: rotate(32.72727deg);
}
.flake:nth-of-type(14) > span:nth-of-type(2) {
  -moz-transform: rotate(65.45455deg);
  -ms-transform: rotate(65.45455deg);
  -webkit-transform: rotate(65.45455deg);
  transform: rotate(65.45455deg);
}
.flake:nth-of-type(14) > span:nth-of-type(3) {
  -moz-transform: rotate(98.18182deg);
  -ms-transform: rotate(98.18182deg);
  -webkit-transform: rotate(98.18182deg);
  transform: rotate(98.18182deg);
}
.flake:nth-of-type(14) > span:nth-of-type(4) {
  -moz-transform: rotate(130.90909deg);
  -ms-transform: rotate(130.90909deg);
  -webkit-transform: rotate(130.90909deg);
  transform: rotate(130.90909deg);
}
.flake:nth-of-type(14) > span:nth-of-type(5) {
  -moz-transform: rotate(163.63636deg);
  -ms-transform: rotate(163.63636deg);
  -webkit-transform: rotate(163.63636deg);
  transform: rotate(163.63636deg);
}
.flake:nth-of-type(14) > span:nth-of-type(6) {
  -moz-transform: rotate(196.36364deg);
  -ms-transform: rotate(196.36364deg);
  -webkit-transform: rotate(196.36364deg);
  transform: rotate(196.36364deg);
}
.flake:nth-of-type(14) > span:nth-of-type(7) {
  -moz-transform: rotate(229.09091deg);
  -ms-transform: rotate(229.09091deg);
  -webkit-transform: rotate(229.09091deg);
  transform: rotate(229.09091deg);
}
.flake:nth-of-type(14) > span:nth-of-type(8) {
  -moz-transform: rotate(261.81818deg);
  -ms-transform: rotate(261.81818deg);
  -webkit-transform: rotate(261.81818deg);
  transform: rotate(261.81818deg);
}
.flake:nth-of-type(14) > span:nth-of-type(9) {
  -moz-transform: rotate(294.54545deg);
  -ms-transform: rotate(294.54545deg);
  -webkit-transform: rotate(294.54545deg);
  transform: rotate(294.54545deg);
}
.flake:nth-of-type(14) > span:nth-of-type(10) {
  -moz-transform: rotate(327.27273deg);
  -ms-transform: rotate(327.27273deg);
  -webkit-transform: rotate(327.27273deg);
  transform: rotate(327.27273deg);
}
.flake:nth-of-type(14) > span:nth-of-type(11) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(14) > span:before {
  left: calc(50% - (2px / 2));
  bottom: 0;
  width: 2px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(14) > span:after {
  bottom: 10%;
  left: calc(50% - ((62px / 20) / 2));
  height: calc(62px / 20);
  width: calc(62px / 20);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(14) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(14) > span span:nth-of-type(1):before, .flake:nth-of-type(14) > span span:nth-of-type(1):after {
  width: 47%;
}
.flake:nth-of-type(14) > span span:nth-of-type(2):before, .flake:nth-of-type(14) > span span:nth-of-type(2):after {
  width: 64%;
}
.flake:nth-of-type(14) > span span:nth-of-type(3):before, .flake:nth-of-type(14) > span span:nth-of-type(3):after {
  width: 81%;
}
.flake:nth-of-type(14) > span span:nth-of-type(4):before, .flake:nth-of-type(14) > span span:nth-of-type(4):after {
  width: 59%;
}
.flake:nth-of-type(14) > span span:nth-of-type(1) {
  top: calc(2% + (66% / 4) * (1 - 1));
}
.flake:nth-of-type(14) > span span:nth-of-type(2) {
  top: calc(2% + (66% / 4) * (2 - 1));
}
.flake:nth-of-type(14) > span span:nth-of-type(3) {
  top: calc(2% + (66% / 4) * (3 - 1));
}
.flake:nth-of-type(14) > span span:nth-of-type(4) {
  top: calc(2% + (66% / 4) * (4 - 1));
}
.flake:nth-of-type(14) > span span:before, .flake:nth-of-type(14) > span span:after {
  bottom: 0;
  width: 60%;
  height: 2px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(14) > span span:before {
  right: 50%;
  -moz-transform: rotate(39deg);
  -ms-transform: rotate(39deg);
  -webkit-transform: rotate(39deg);
  transform: rotate(39deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(14) > span span:after {
  left: 50%;
  -moz-transform: rotate(-39deg);
  -ms-transform: rotate(-39deg);
  -webkit-transform: rotate(-39deg);
  transform: rotate(-39deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(15) {
  position: absolute;
  height: 30px;
  width: 30px;
  /* Animation */
  top: -252px;
  left: 86%;
  filter: blur(3px);
  -moz-animation: 57s flakes linear infinite;
  -webkit-animation: 57s flakes linear infinite;
  animation: 57s flakes linear infinite;
}
.flake:nth-of-type(15) * {
  position: absolute;
}
.flake:nth-of-type(15) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(15) > span:nth-of-type(1) {
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.flake:nth-of-type(15) > span:nth-of-type(2) {
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
.flake:nth-of-type(15) > span:nth-of-type(3) {
  -moz-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
  transform: rotate(135deg);
}
.flake:nth-of-type(15) > span:nth-of-type(4) {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.flake:nth-of-type(15) > span:nth-of-type(5) {
  -moz-transform: rotate(225deg);
  -ms-transform: rotate(225deg);
  -webkit-transform: rotate(225deg);
  transform: rotate(225deg);
}
.flake:nth-of-type(15) > span:nth-of-type(6) {
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -webkit-transform: rotate(270deg);
  transform: rotate(270deg);
}
.flake:nth-of-type(15) > span:nth-of-type(7) {
  -moz-transform: rotate(315deg);
  -ms-transform: rotate(315deg);
  -webkit-transform: rotate(315deg);
  transform: rotate(315deg);
}
.flake:nth-of-type(15) > span:nth-of-type(8) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(15) > span:before {
  left: calc(50% - (2px / 2));
  bottom: 0;
  width: 2px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(15) > span:after {
  bottom: 31%;
  left: calc(50% - ((30px / 20) / 2));
  height: calc(30px / 20);
  width: calc(30px / 20);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(15) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(15) > span span:nth-of-type(1):before, .flake:nth-of-type(15) > span span:nth-of-type(1):after {
  width: 56%;
}
.flake:nth-of-type(15) > span span:nth-of-type(2):before, .flake:nth-of-type(15) > span span:nth-of-type(2):after {
  width: 84%;
}
.flake:nth-of-type(15) > span span:nth-of-type(3):before, .flake:nth-of-type(15) > span span:nth-of-type(3):after {
  width: 61%;
}
.flake:nth-of-type(15) > span span:nth-of-type(4):before, .flake:nth-of-type(15) > span span:nth-of-type(4):after {
  width: 55%;
}
.flake:nth-of-type(15) > span span:nth-of-type(1) {
  top: calc(17% + (62% / 4) * (1 - 1));
}
.flake:nth-of-type(15) > span span:nth-of-type(2) {
  top: calc(17% + (62% / 4) * (2 - 1));
}
.flake:nth-of-type(15) > span span:nth-of-type(3) {
  top: calc(17% + (62% / 4) * (3 - 1));
}
.flake:nth-of-type(15) > span span:nth-of-type(4) {
  top: calc(17% + (62% / 4) * (4 - 1));
}
.flake:nth-of-type(15) > span span:before, .flake:nth-of-type(15) > span span:after {
  bottom: 0;
  width: 60%;
  height: 2px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(15) > span span:before {
  right: 50%;
  -moz-transform: rotate(48deg);
  -ms-transform: rotate(48deg);
  -webkit-transform: rotate(48deg);
  transform: rotate(48deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(15) > span span:after {
  left: 50%;
  -moz-transform: rotate(-48deg);
  -ms-transform: rotate(-48deg);
  -webkit-transform: rotate(-48deg);
  transform: rotate(-48deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(16) {
  position: absolute;
  height: 25px;
  width: 25px;
  /* Animation */
  top: -91px;
  left: 88%;
  filter: blur(4px);
  -moz-animation: 65s flakes linear infinite;
  -webkit-animation: 65s flakes linear infinite;
  animation: 65s flakes linear infinite;
}
.flake:nth-of-type(16) * {
  position: absolute;
}
.flake:nth-of-type(16) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(16) > span:nth-of-type(1) {
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.flake:nth-of-type(16) > span:nth-of-type(2) {
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
.flake:nth-of-type(16) > span:nth-of-type(3) {
  -moz-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
  transform: rotate(135deg);
}
.flake:nth-of-type(16) > span:nth-of-type(4) {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.flake:nth-of-type(16) > span:nth-of-type(5) {
  -moz-transform: rotate(225deg);
  -ms-transform: rotate(225deg);
  -webkit-transform: rotate(225deg);
  transform: rotate(225deg);
}
.flake:nth-of-type(16) > span:nth-of-type(6) {
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -webkit-transform: rotate(270deg);
  transform: rotate(270deg);
}
.flake:nth-of-type(16) > span:nth-of-type(7) {
  -moz-transform: rotate(315deg);
  -ms-transform: rotate(315deg);
  -webkit-transform: rotate(315deg);
  transform: rotate(315deg);
}
.flake:nth-of-type(16) > span:nth-of-type(8) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(16) > span:before {
  left: calc(50% - (1px / 2));
  bottom: 0;
  width: 1px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(16) > span:after {
  bottom: 43%;
  left: calc(50% - ((25px / 19) / 2));
  height: calc(25px / 19);
  width: calc(25px / 19);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(16) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(16) > span span:nth-of-type(1):before, .flake:nth-of-type(16) > span span:nth-of-type(1):after {
  width: 54%;
}
.flake:nth-of-type(16) > span span:nth-of-type(2):before, .flake:nth-of-type(16) > span span:nth-of-type(2):after {
  width: 66%;
}
.flake:nth-of-type(16) > span span:nth-of-type(3):before, .flake:nth-of-type(16) > span span:nth-of-type(3):after {
  width: 105%;
}
.flake:nth-of-type(16) > span span:nth-of-type(4):before, .flake:nth-of-type(16) > span span:nth-of-type(4):after {
  width: 45%;
}
.flake:nth-of-type(16) > span span:nth-of-type(1) {
  top: calc(19% + (82% / 4) * (1 - 1));
}
.flake:nth-of-type(16) > span span:nth-of-type(2) {
  top: calc(19% + (82% / 4) * (2 - 1));
}
.flake:nth-of-type(16) > span span:nth-of-type(3) {
  top: calc(19% + (82% / 4) * (3 - 1));
}
.flake:nth-of-type(16) > span span:nth-of-type(4) {
  top: calc(19% + (82% / 4) * (4 - 1));
}
.flake:nth-of-type(16) > span span:before, .flake:nth-of-type(16) > span span:after {
  bottom: 0;
  width: 60%;
  height: 1px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(16) > span span:before {
  right: 50%;
  -moz-transform: rotate(37deg);
  -ms-transform: rotate(37deg);
  -webkit-transform: rotate(37deg);
  transform: rotate(37deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(16) > span span:after {
  left: 50%;
  -moz-transform: rotate(-37deg);
  -ms-transform: rotate(-37deg);
  -webkit-transform: rotate(-37deg);
  transform: rotate(-37deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(17) {
  position: absolute;
  height: 37px;
  width: 37px;
  /* Animation */
  top: -500px;
  left: 88%;
  filter: blur(4px);
  -moz-animation: 47s flakes linear infinite;
  -webkit-animation: 47s flakes linear infinite;
  animation: 47s flakes linear infinite;
}
.flake:nth-of-type(17) * {
  position: absolute;
}
.flake:nth-of-type(17) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(17) > span:nth-of-type(1) {
  -moz-transform: rotate(36deg);
  -ms-transform: rotate(36deg);
  -webkit-transform: rotate(36deg);
  transform: rotate(36deg);
}
.flake:nth-of-type(17) > span:nth-of-type(2) {
  -moz-transform: rotate(72deg);
  -ms-transform: rotate(72deg);
  -webkit-transform: rotate(72deg);
  transform: rotate(72deg);
}
.flake:nth-of-type(17) > span:nth-of-type(3) {
  -moz-transform: rotate(108deg);
  -ms-transform: rotate(108deg);
  -webkit-transform: rotate(108deg);
  transform: rotate(108deg);
}
.flake:nth-of-type(17) > span:nth-of-type(4) {
  -moz-transform: rotate(144deg);
  -ms-transform: rotate(144deg);
  -webkit-transform: rotate(144deg);
  transform: rotate(144deg);
}
.flake:nth-of-type(17) > span:nth-of-type(5) {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.flake:nth-of-type(17) > span:nth-of-type(6) {
  -moz-transform: rotate(216deg);
  -ms-transform: rotate(216deg);
  -webkit-transform: rotate(216deg);
  transform: rotate(216deg);
}
.flake:nth-of-type(17) > span:nth-of-type(7) {
  -moz-transform: rotate(252deg);
  -ms-transform: rotate(252deg);
  -webkit-transform: rotate(252deg);
  transform: rotate(252deg);
}
.flake:nth-of-type(17) > span:nth-of-type(8) {
  -moz-transform: rotate(288deg);
  -ms-transform: rotate(288deg);
  -webkit-transform: rotate(288deg);
  transform: rotate(288deg);
}
.flake:nth-of-type(17) > span:nth-of-type(9) {
  -moz-transform: rotate(324deg);
  -ms-transform: rotate(324deg);
  -webkit-transform: rotate(324deg);
  transform: rotate(324deg);
}
.flake:nth-of-type(17) > span:nth-of-type(10) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(17) > span:before {
  left: calc(50% - (3px / 2));
  bottom: 0;
  width: 3px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(17) > span:after {
  bottom: 49%;
  left: calc(50% - ((37px / 11) / 2));
  height: calc(37px / 11);
  width: calc(37px / 11);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(17) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(17) > span span:nth-of-type(1):before, .flake:nth-of-type(17) > span span:nth-of-type(1):after {
  width: 46%;
}
.flake:nth-of-type(17) > span span:nth-of-type(2):before, .flake:nth-of-type(17) > span span:nth-of-type(2):after {
  width: 51%;
}
.flake:nth-of-type(17) > span span:nth-of-type(3):before, .flake:nth-of-type(17) > span span:nth-of-type(3):after {
  width: 72%;
}
.flake:nth-of-type(17) > span span:nth-of-type(2):before, .flake:nth-of-type(17) > span span:nth-of-type(2):after {
  width: 51%;
}
.flake:nth-of-type(17) > span span:nth-of-type(1) {
  top: calc(19% + (52% / 4) * (1 - 1));
}
.flake:nth-of-type(17) > span span:nth-of-type(2) {
  top: calc(19% + (52% / 4) * (2 - 1));
}
.flake:nth-of-type(17) > span span:nth-of-type(3) {
  top: calc(19% + (52% / 4) * (3 - 1));
}
.flake:nth-of-type(17) > span span:nth-of-type(4) {
  top: calc(19% + (52% / 4) * (4 - 1));
}
.flake:nth-of-type(17) > span span:before, .flake:nth-of-type(17) > span span:after {
  bottom: 0;
  width: 60%;
  height: 3px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(17) > span span:before {
  right: 50%;
  -moz-transform: rotate(56deg);
  -ms-transform: rotate(56deg);
  -webkit-transform: rotate(56deg);
  transform: rotate(56deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(17) > span span:after {
  left: 50%;
  -moz-transform: rotate(-56deg);
  -ms-transform: rotate(-56deg);
  -webkit-transform: rotate(-56deg);
  transform: rotate(-56deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(18) {
  position: absolute;
  height: 62px;
  width: 62px;
  /* Animation */
  top: -267px;
  left: 44%;
  filter: blur(4px);
  -moz-animation: 42s flakes linear infinite;
  -webkit-animation: 42s flakes linear infinite;
  animation: 42s flakes linear infinite;
}
.flake:nth-of-type(18) * {
  position: absolute;
}
.flake:nth-of-type(18) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(18) > span:nth-of-type(1) {
  -moz-transform: rotate(36deg);
  -ms-transform: rotate(36deg);
  -webkit-transform: rotate(36deg);
  transform: rotate(36deg);
}
.flake:nth-of-type(18) > span:nth-of-type(2) {
  -moz-transform: rotate(72deg);
  -ms-transform: rotate(72deg);
  -webkit-transform: rotate(72deg);
  transform: rotate(72deg);
}
.flake:nth-of-type(18) > span:nth-of-type(3) {
  -moz-transform: rotate(108deg);
  -ms-transform: rotate(108deg);
  -webkit-transform: rotate(108deg);
  transform: rotate(108deg);
}
.flake:nth-of-type(18) > span:nth-of-type(4) {
  -moz-transform: rotate(144deg);
  -ms-transform: rotate(144deg);
  -webkit-transform: rotate(144deg);
  transform: rotate(144deg);
}
.flake:nth-of-type(18) > span:nth-of-type(5) {
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.flake:nth-of-type(18) > span:nth-of-type(6) {
  -moz-transform: rotate(216deg);
  -ms-transform: rotate(216deg);
  -webkit-transform: rotate(216deg);
  transform: rotate(216deg);
}
.flake:nth-of-type(18) > span:nth-of-type(7) {
  -moz-transform: rotate(252deg);
  -ms-transform: rotate(252deg);
  -webkit-transform: rotate(252deg);
  transform: rotate(252deg);
}
.flake:nth-of-type(18) > span:nth-of-type(8) {
  -moz-transform: rotate(288deg);
  -ms-transform: rotate(288deg);
  -webkit-transform: rotate(288deg);
  transform: rotate(288deg);
}
.flake:nth-of-type(18) > span:nth-of-type(9) {
  -moz-transform: rotate(324deg);
  -ms-transform: rotate(324deg);
  -webkit-transform: rotate(324deg);
  transform: rotate(324deg);
}
.flake:nth-of-type(18) > span:nth-of-type(10) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(18) > span:before {
  left: calc(50% - (3px / 2));
  bottom: 0;
  width: 3px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(18) > span:after {
  bottom: 77%;
  left: calc(50% - ((62px / 16) / 2));
  height: calc(62px / 16);
  width: calc(62px / 16);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(18) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(18) > span span:nth-of-type(1):before, .flake:nth-of-type(18) > span span:nth-of-type(1):after {
  width: 44%;
}
.flake:nth-of-type(18) > span span:nth-of-type(2):before, .flake:nth-of-type(18) > span span:nth-of-type(2):after {
  width: 59%;
}
.flake:nth-of-type(18) > span span:nth-of-type(3):before, .flake:nth-of-type(18) > span span:nth-of-type(3):after {
  width: 86%;
}
.flake:nth-of-type(18) > span span:nth-of-type(4):before, .flake:nth-of-type(18) > span span:nth-of-type(4):after {
  width: 48%;
}
.flake:nth-of-type(18) > span span:nth-of-type(1) {
  top: calc(18% + (63% / 4) * (1 - 1));
}
.flake:nth-of-type(18) > span span:nth-of-type(2) {
  top: calc(18% + (63% / 4) * (2 - 1));
}
.flake:nth-of-type(18) > span span:nth-of-type(3) {
  top: calc(18% + (63% / 4) * (3 - 1));
}
.flake:nth-of-type(18) > span span:nth-of-type(4) {
  top: calc(18% + (63% / 4) * (4 - 1));
}
.flake:nth-of-type(18) > span span:before, .flake:nth-of-type(18) > span span:after {
  bottom: 0;
  width: 60%;
  height: 3px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(18) > span span:before {
  right: 50%;
  -moz-transform: rotate(47deg);
  -ms-transform: rotate(47deg);
  -webkit-transform: rotate(47deg);
  transform: rotate(47deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(18) > span span:after {
  left: 50%;
  -moz-transform: rotate(-47deg);
  -ms-transform: rotate(-47deg);
  -webkit-transform: rotate(-47deg);
  transform: rotate(-47deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(19) {
  position: absolute;
  height: 51px;
  width: 51px;
  /* Animation */
  top: -158px;
  left: 34%;
  filter: blur(4px);
  -moz-animation: 36s flakes linear infinite;
  -webkit-animation: 36s flakes linear infinite;
  animation: 36s flakes linear infinite;
}
.flake:nth-of-type(19) * {
  position: absolute;
}
.flake:nth-of-type(19) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(19) > span:nth-of-type(1) {
  -moz-transform: rotate(51.42857deg);
  -ms-transform: rotate(51.42857deg);
  -webkit-transform: rotate(51.42857deg);
  transform: rotate(51.42857deg);
}
.flake:nth-of-type(19) > span:nth-of-type(2) {
  -moz-transform: rotate(102.85714deg);
  -ms-transform: rotate(102.85714deg);
  -webkit-transform: rotate(102.85714deg);
  transform: rotate(102.85714deg);
}
.flake:nth-of-type(19) > span:nth-of-type(3) {
  -moz-transform: rotate(154.28571deg);
  -ms-transform: rotate(154.28571deg);
  -webkit-transform: rotate(154.28571deg);
  transform: rotate(154.28571deg);
}
.flake:nth-of-type(19) > span:nth-of-type(4) {
  -moz-transform: rotate(205.71429deg);
  -ms-transform: rotate(205.71429deg);
  -webkit-transform: rotate(205.71429deg);
  transform: rotate(205.71429deg);
}
.flake:nth-of-type(19) > span:nth-of-type(5) {
  -moz-transform: rotate(257.14286deg);
  -ms-transform: rotate(257.14286deg);
  -webkit-transform: rotate(257.14286deg);
  transform: rotate(257.14286deg);
}
.flake:nth-of-type(19) > span:nth-of-type(6) {
  -moz-transform: rotate(308.57143deg);
  -ms-transform: rotate(308.57143deg);
  -webkit-transform: rotate(308.57143deg);
  transform: rotate(308.57143deg);
}
.flake:nth-of-type(19) > span:nth-of-type(7) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(19) > span:before {
  left: calc(50% - (2px / 2));
  bottom: 0;
  width: 2px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(19) > span:after {
  bottom: 72%;
  left: calc(50% - ((51px / 16) / 2));
  height: calc(51px / 16);
  width: calc(51px / 16);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(19) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(19) > span span:nth-of-type(1):before, .flake:nth-of-type(19) > span span:nth-of-type(1):after {
  width: 51%;
}
.flake:nth-of-type(19) > span span:nth-of-type(2):before, .flake:nth-of-type(19) > span span:nth-of-type(2):after {
  width: 85%;
}
.flake:nth-of-type(19) > span span:nth-of-type(3):before, .flake:nth-of-type(19) > span span:nth-of-type(3):after {
  width: 81%;
}
.flake:nth-of-type(19) > span span:nth-of-type(4):before, .flake:nth-of-type(19) > span span:nth-of-type(4):after {
  width: 47%;
}
.flake:nth-of-type(19) > span span:nth-of-type(1) {
  top: calc(11% + (68% / 4) * (1 - 1));
}
.flake:nth-of-type(19) > span span:nth-of-type(2) {
  top: calc(11% + (68% / 4) * (2 - 1));
}
.flake:nth-of-type(19) > span span:nth-of-type(3) {
  top: calc(11% + (68% / 4) * (3 - 1));
}
.flake:nth-of-type(19) > span span:nth-of-type(4) {
  top: calc(11% + (68% / 4) * (4 - 1));
}
.flake:nth-of-type(19) > span span:before, .flake:nth-of-type(19) > span span:after {
  bottom: 0;
  width: 60%;
  height: 2px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(19) > span span:before {
  right: 50%;
  -moz-transform: rotate(42deg);
  -ms-transform: rotate(42deg);
  -webkit-transform: rotate(42deg);
  transform: rotate(42deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(19) > span span:after {
  left: 50%;
  -moz-transform: rotate(-42deg);
  -ms-transform: rotate(-42deg);
  -webkit-transform: rotate(-42deg);
  transform: rotate(-42deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.flake:nth-of-type(20) {
  position: absolute;
  height: 59px;
  width: 59px;
  /* Animation */
  top: -61px;
  left: 58%;
  filter: blur(4px);
  -moz-animation: 35s flakes linear infinite;
  -webkit-animation: 35s flakes linear infinite;
  animation: 35s flakes linear infinite;
}
.flake:nth-of-type(20) * {
  position: absolute;
}
.flake:nth-of-type(20) > span {
  left: 40%;
  height: 50%;
  width: 20%;
  -moz-transform-origin: bottom center;
  -ms-transform-origin: bottom center;
  -webkit-transform-origin: bottom center;
  transform-origin: bottom center;
}
.flake:nth-of-type(20) > span:nth-of-type(1) {
  -moz-transform: rotate(40deg);
  -ms-transform: rotate(40deg);
  -webkit-transform: rotate(40deg);
  transform: rotate(40deg);
}
.flake:nth-of-type(20) > span:nth-of-type(2) {
  -moz-transform: rotate(80deg);
  -ms-transform: rotate(80deg);
  -webkit-transform: rotate(80deg);
  transform: rotate(80deg);
}
.flake:nth-of-type(20) > span:nth-of-type(3) {
  -moz-transform: rotate(120deg);
  -ms-transform: rotate(120deg);
  -webkit-transform: rotate(120deg);
  transform: rotate(120deg);
}
.flake:nth-of-type(20) > span:nth-of-type(4) {
  -moz-transform: rotate(160deg);
  -ms-transform: rotate(160deg);
  -webkit-transform: rotate(160deg);
  transform: rotate(160deg);
}
.flake:nth-of-type(20) > span:nth-of-type(5) {
  -moz-transform: rotate(200deg);
  -ms-transform: rotate(200deg);
  -webkit-transform: rotate(200deg);
  transform: rotate(200deg);
}
.flake:nth-of-type(20) > span:nth-of-type(6) {
  -moz-transform: rotate(240deg);
  -ms-transform: rotate(240deg);
  -webkit-transform: rotate(240deg);
  transform: rotate(240deg);
}
.flake:nth-of-type(20) > span:nth-of-type(7) {
  -moz-transform: rotate(280deg);
  -ms-transform: rotate(280deg);
  -webkit-transform: rotate(280deg);
  transform: rotate(280deg);
}
.flake:nth-of-type(20) > span:nth-of-type(8) {
  -moz-transform: rotate(320deg);
  -ms-transform: rotate(320deg);
  -webkit-transform: rotate(320deg);
  transform: rotate(320deg);
}
.flake:nth-of-type(20) > span:nth-of-type(9) {
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.flake:nth-of-type(20) > span:before {
  left: calc(50% - (1px / 2));
  bottom: 0;
  width: 1px;
  height: 95%;
  background: white;
}
.flake:nth-of-type(20) > span:after {
  bottom: 12%;
  left: calc(50% - ((59px / 20) / 2));
  height: calc(59px / 20);
  width: calc(59px / 20);
  background: white;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.flake:nth-of-type(20) > span span {
  width: 100%;
  left: 0;
}
.flake:nth-of-type(20) > span span:nth-of-type(1):before, .flake:nth-of-type(20) > span span:nth-of-type(1):after {
  width: 45%;
}
.flake:nth-of-type(20) > span span:nth-of-type(2):before, .flake:nth-of-type(20) > span span:nth-of-type(2):after {
  width: 51%;
}
.flake:nth-of-type(20) > span span:nth-of-type(3):before, .flake:nth-of-type(20) > span span:nth-of-type(3):after {
  width: 105%;
}
.flake:nth-of-type(20) > span span:nth-of-type(4):before, .flake:nth-of-type(20) > span span:nth-of-type(4):after {
  width: 58%;
}
.flake:nth-of-type(20) > span span:nth-of-type(1) {
  top: calc(14% + (60% / 4) * (1 - 1));
}
.flake:nth-of-type(20) > span span:nth-of-type(2) {
  top: calc(14% + (60% / 4) * (2 - 1));
}
.flake:nth-of-type(20) > span span:nth-of-type(3) {
  top: calc(14% + (60% / 4) * (3 - 1));
}
.flake:nth-of-type(20) > span span:nth-of-type(4) {
  top: calc(14% + (60% / 4) * (4 - 1));
}
.flake:nth-of-type(20) > span span:before, .flake:nth-of-type(20) > span span:after {
  bottom: 0;
  width: 60%;
  height: 1px;
  background: white;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
}
.flake:nth-of-type(20) > span span:before {
  right: 50%;
  -moz-transform: rotate(41deg);
  -ms-transform: rotate(41deg);
  -webkit-transform: rotate(41deg);
  transform: rotate(41deg);
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.flake:nth-of-type(20) > span span:after {
  left: 50%;
  -moz-transform: rotate(-41deg);
  -ms-transform: rotate(-41deg);
  -webkit-transform: rotate(-41deg);
  transform: rotate(-41deg);
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

        .containerx{
          z-index:9999;
          position:fixed;
          font-size:18px;
          top:50%;
          left:50%;
          transform: translate(-50%, -50%);
          color:white;
          background: rgba(0, 0, 0, 0.7);
          padding:3%;
        }
        .wishnamex{
            font-size:3em;
            font-family: 'Hubballi', cursive;
        }
        .namex{
            font-size:2em;
            font-family: 'Hubballi', cursive;
        }
        .msgx{
            font-size:1.5em;
            font-family: 'Shadows Into Light', cursive;;
        }
        .namez{
            color:#df0054;
        }
        .info{
                font-family: 'Hubballi', cursive;
                font-size: 1em;
        }
    	</style>
    	
    </head>
    <body id="bodyx">
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
<div class='flake'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
</div>
    <span class="containerx">
        <div class="wishnamex">Hey <span class="namez"><?php echo $wish_array['wishname']; ?></span></div><br><br>
        <div class="msgx">
            <?php echo $msg_array[$wish_array['default_msg']]; ?>
            <?php echo $wish_array['custom_msg']; ?>
        </div><br><br>
        <div class="namex"> - <span class="namez"><?php echo $wish_array['name']; ?></span></div>
        <!--<div class="info">[Hover/Click/Tap to see the Surprise]</div>-->
    </span>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.7/p5.min.js"></script>
    	<script>

    	</script>
    </body>
    </html>
    
    
    <?php
    }
function displaySplash($wish_array, $msg_array){
    
    
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title>Hey <?php echo $wish_array['wishname']; ?>, You got a wish from <?php echo $wish_array['name']; ?></title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    	<style>
                	/*body{
              width:100%;
            }*/
            .svg-box {
            	position:absolute;
              animation-name: rotateSplash;
              animation-duration:0.5s;
              animation-iteration-count:1;
              }
            h1{
              width:100%;
            	position:absolute;
            	z-index:10;
              text-align:center;
              font-size:250px;
              color:white;
            }
            /*
            .container{
              //background-color:pink;
              height:100%;
              width: 100%;
              margin:auto;
              position:relative;
              display:block;  
            }*/
             
            @keyframes rotateSplash {
                0%{
                transform:scale(0.3);
              }
              100%{
                transform:scale(1.0);
              }
            }
            
            #blue{
              height:100px;
              width:100px;
              border:1px solid blue;
              background:blue;
              margin-left:500px;
              margin-top:50px;
            }
    	</style>
    	<style>
    	 .containerx{
          z-index:9999;
          position:fixed;
          top:50%;
          left:50%;
          transform: translate(-50%, -50%);
          color:white;
          background: rgba(0, 0, 0, 0.5);
          padding:3%;
        }
        .wishnamex{
            font-size:3em;
            font-family: 'VT323', monospace;
        }
        .namex{
            font-size:2em;
            font-family: 'VT323', monospace;
        }
        .msgx{
            font-size:1.5em;
            font-family: 'Pacifico', cursive;;
        }
        .namez{
            color:white;
        }
        .info{
                font-family: 'Hubballi', cursive;
                font-size: 12px;
                color:black;
        }
    	</style>
    	
    </head>
    <body>
    <svg xmlns="http://www.w3.org/2000/svg" id="splash" class="svg-box"  viewBox="0 0 744.1 1052.4">
			    <path id="splash_path" stroke-width=".7" stroke="#000" d="M386.9 38.2c-2.1.1-4.2.4-6.4.8-14.6 8.3 19.5 75.5 17.1 106.4 11.9-36.8 12.1-56.6 8.4-82.1-3-20.7-10.2-25.3-19.1-25zm96.4 69.4c-2.3.1-4.6.8-6.9 2.4-10.6 7.7-1.7 23.8-1.7 23.8-2.8 6.6 20.3 4 20.3 4 12.6.2 3.3-22.6 3.3-22.6s-6.9-7.9-15-7.7zM467 148.4a7 7 0 0 0-7 7 7 7 0 0 0 7 7 7 7 0 0 0 7-7 7 7 0 0 0-7-7zm-69.8 3.2c-5.8 14.6-16.3 46.1-43.2 53.5-26.9 7.4-3.8-44.7-37.6-30.8-25.4 10.5 8.5 27.6-14.1 44.2-22.7 16.6-58.9-2.1-58.9-2.1s40.8 33.9 26.1 58.2c-14.7 24.3-73.3-28.4-85.8-8.3-47.4 76.4 75.5 25.9 70.5 54.2-5 28.2-75.3 34.9-75.3 34.9s96.6-1.5 104.1 25.8-79.5 20-72.6 48.1c11.6 47.3 51.5-26.2 68.7-3.3 17.2 22.9.6 45.5.6 45.5s15.5-16.7 38.6-1.6c23.1 15.2-27 39.9-1.9 50.9s21.1-38.9 48.5-34c27.4 4.9 6.4 56.8 6.4 56.8s21.7-52.3 48.7-58c27-5.7 23.3 79.9 53.6 62.9 24-13.5-29.6-68.1-7.8-85.5 21.7-17.4 58.2 30.1 58.2 30.1s-47.3-61.6-32.2-85.4c15-23.8 73.6 33.1 83 5.8 9.3-27.3-58-20.2-54.7-48.6 1.2-10.6 9.7-15.1 19.9-16.6-21.8-3.6-45.1-10.9-48.1-25.7-5.6-28.5 98.7-36.9 86.8-62.6-11.8-25.7-66.8 20.6-83.5-2.6-12.8-17.8-1.6-26.3 4.3-29.4-7.1 2.7-25.4 7.6-43.5-4.7-23.1-15.8 32.1-29.6 6.2-38.9-26-9.2-25.4 20.7-52.9 17.1-27.5-3.7-12-50.1-12-50.1zm102.2 76.6c2-.8 3.2-1.4 3.2-1.4s-1.4.4-3.2 1.4zm40.4 120.2c20.1 3.3 38.7 3.5 38.7 3.5s-21.7-6-38.7-3.5zM178.5 153.1c-4.8.1-7.9 3.1-10.8 6.8-3.6 11.7 54.3 32.1 70.6 50.3-14.3-26.1-25.5-37.1-42.2-49.3-7.8-5.7-13.4-7.8-17.6-7.7zm367.9 18.6c-14.1.5-22.4 39.1-38.8 52.7 25.8-14.2 35.3-23.2 44.9-35.8 9.6-12.6 3.1-15.3-6.1-16.9zm115.2 27.7c-16.8 0-38.6 8.2-38.6 24.9 0 16.6 13.7 30.1 30.5 30.1s30.5-13.5 30.5-30.1-5.5-24.9-22.4-24.9zm-492.6 7a10 12 0 0 0-10 12 10 12 0 0 0 10 12 10 12 0 0 0 10-12 10 12 0 0 0-10-12zm-40.6 32.9c-2 .1-4.1.4-6.1 1.1-15 5.3-14.3 31.5-14.3 31.5s-.6 21.5 15.3 21.5 37.7-24.5 37.7-24.5c7.3-4.2-13-30.4-32.7-29.6zm477.6 6.1a7 7 0 0 0-7 7 7 7 0 0 0 7 7 7 7 0 0 0 7-7 7 7 0 0 0-7-7zM137.6 356.5c-32.9.1-54.8 5.7-80.9 15.4-33.4 12.4-32.7 25.3-27.5 39.6 13.9 16 97.1-47.5 139-53.7-11.3-.9-21.4-1.3-30.6-1.2zm461.5.9c33.5 19.3 53 29 77.4 45.2 21.5 14.2 31.7 4 32-8.1-5.1-16-79.7-28.3-109.4-37.1zM274.5 474.9c-15 14.5-23 23.2-35 33.5-10.5 9.1-7.3 15.6-1.6 17.3 8.6-.5 27.3-36.8 36.6-50.8zM540 507.3c7.7 14.1 12.5 21.9 17.6 32.8 4.5 9.6 10.5 9.5 13.2 6.3 1.8-5.7-22.2-28.8-30.8-39.1zm-254.1 33.3c-2.9.1-6 1-9 3.2-13.7 10-2.2 30.8-2.2 30.8-3.7 8.5 26.4 5.2 26.4 5.2 16.3.3 4.2-29.2 4.2-29.2s-9-10.2-19.5-10zm85.1 11.1c-27.5 26.7-37.4 44.9-47.1 70.8-9.7 25.9-2.3 32.9 8.1 38.1 15.5 1.3 21.9-81.8 39-108.9zm-116 49.7a10 12 0 0 0-10 12 10 12 0 0 0 10 12 10 12 0 0 0 10-12 10 12 0 0 0-10-12z"  />
			</svg>
    <span class="containerx">
        <div class="wishnamex">Hey <span class="namez"><?php echo $wish_array['wishname']; ?></span></div><br><br>
        <div class="msgx">
            <?php echo $msg_array[$wish_array['default_msg']]; ?>
            <?php echo $wish_array['custom_msg']; ?>
        </div><br><br>
        <div class="namex"> - <span class="namez"><?php echo $wish_array['name']; ?></span></div>
        <div class="info">Splash/Tap Around to see the Hidden Msg!</div>
    </span>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        window.onload = function() {
        	$("#splash").hide();
        };
        
        $(window).mousemove(function( event ) {
        	//console.log(event.originalEvent);
        	createAndShowSplash(event.clientX, event.clientY);
        });
        
        function createAndShowSplash (topgap, leftgap) {
        	copy = $("#splash").clone();
        
        	copy[0].setAttribute("id", "copy_splash");
        	copy[0].setAttribute("fill", get_random_color());
        	let size = rand(50,300);
        	copy[0].setAttribute("width", size+'px');
        	copy[0].setAttribute("height", size+'px');
          copy.css('marginLeft', topgap-size/3+'px');
          copy.css('margin-top', leftgap-size/3+'px');
        	//copy[0].setAttribute("margin-right", leftgap.toString() + 'px');
         // $('#copy_splash')[0].setAttribute("margin-left", leftgap.toString() + 'px
                                            //document.getElementById("copy_splash").style.marginLeft = "500px";
        	//copy[0].setAttribute("object-fit", "fill");
        	
        	copy.appendTo("body");
        	copy.show();
        }
        
        function rand(min, max) {
            return parseInt(Math.random() * (max-min+1), 10) + min;
        }
        
        function get_random_color() {
            var h = rand(1, 360); // color hue between 1 and 360
            var s = rand(30, 100); // saturation 30-100%
            var l = rand(30, 70); // lightness 30-70%
            return 'hsl(' + h + ',' + s + '%,' + l + '%)';
}

    </script>
    </body>
    </html>
    <?php
}
?>