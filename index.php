<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, height=device-height, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
		
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap');
			html, body{
				margin: 0;
				font-family: 'Noto Sans KR', sans-serif;
			}
			body {
				background-image : url("pg.png");
				background-repeat : no-repeat;
				background-size : 100% 100%;
			}
			.bglayout{
				width: 100vw;
				height: 100vh;
				table-layout: fixed;
				border-collapse: collapse;
 			}
			.controler{
				background-color: #f4fcff;
			}
			select{
				-o-appearance:none;
				-webkit-appearance:none;
				-moz-appearance:none;
				appearance:none;

				width: 100%;
				margin: 7px 0 0 0;
				padding: 5px 0 5px 35px;

				color: #ffffff;
				background-color: #7cade7;

				border-radius: 5px;
				border : 1px solid #e7e7e7;
				box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
			}
			select option{
				background: #f9f9f9;
				color: black;
				padding: 5px 0 5px 35px;
			}
			select:hover {
				border-color: #6382d5;
			}
			select:focus {
				border-color: #6382d5;
				box-shadow: 0 0 1px 1px rgba(99,130,213, .7);
				box-shadow: 0 0 0 1px -moz-mac-focusring;
				color: #e7e7e7;
				outline: none;
			}
			select:disabled{
				opacity: 0.5;
			}
			.traffic{
				width: 100%;
			}
			.panel{
				background-color: #ffffff;
				margin: 0px 40px 0px 20px;
				padding: 10px;
				border-radius: 10px;
				outline : solid 2px #e7e7e7;
			}
			.lights{
				padding: 10px 10px 5px 10px;
				text-align: center;
			}
			.title{
				padding: 0px 0px 5px 10px;
				border-bottom: solid 1px #e7e7e7;
			}
			.controlpanel{
				padding : 5px 0 5px 35px;
				position: relative;
			}
			.output{
				position: absolute;
				left: -1370px;
				color: red;
			}
			#outputt{
				top: 210px;
			}
			#outputa{
				top: 190px;
			}
			.statuspanel{
				padding: 5px 0px 0px 35px;
			}
			#carshw, #speedshw{
				color: #ffffff;
				background-color: #7cade7;
				border-radius: 5px;
				width: 50px;
				text-align: center;
			}
			#carnum, #speednum{
				width:70%;
			}
			.btn{
				margin: 3px 20px 0px 0px;

				color: #ffffff;
				background-color: #7cade7;
				border : 1px solid #7cade7;
				border-radius: 5px;
				width:50px;
				height:25px;
			}
			.btn:hover{
					box-shadow: 0 0 0 5px rgba(124,173,233, 0.7);
					animation: pulse 1s;
			}
			@keyframes pulse {
				from {
					box-shadow: 0 0 0 0 var(--btn-bg);
				}
			}
		</style>
		
		<title>SPTS</title>

		<script type="text/javascript">

			//show input bar value
			function show_carnum(){
				const carN = document.getElementById('carnum').value;
				document.getElementById('carshw').innerText = carN;
			}
			function show_speed(){
				const spdvalue = document.getElementById('speednum').value;
				docummnet.ggetElementById('speedshw').innerText = spdvalue;
			}

			//draw base map
			function drawMap(){
				const canvas = document.getElementById('canvas');
				var ctx = canvas.getContext('2d');

				canvas.width = window.innerWidth*0.635;
				canvas.height = window.innerHeight*0.793;

				var road = canvas.height*0.045;
				var wth = canvas.width-8*road;

				//background
				var round = 15;
				ctx.fillStyle = 'rgb(255,255,255)';
				ctx.fillRect(0,0, canvas.width, canvas.height);

				//바다
				ctx.fillStyle = "rgb(113, 156, 255)";
				ctx.fillRect (0, 0, 1500, road);

                		//선박
                		ctx.fillStyle = "rgb(211, 211, 211)";
                		ctx.fillRect (5.5*road, 0, 2*road, road);
                		ctx.fillRect (wth/2 - 0.5*road, 0, 2*road, road);
                		ctx.fillRect (6.5*road+wth/2, 0, 2*road, road);
                		ctx.fillRect (0.5*road+wth, 0, 2*road, road);

               			//하역 크레인
               			ctx.fillStyle = "rgb(255, 192, 203)";
               			ctx.fillRect (6*road, 0, road, 2*road);
               			ctx.fillRect (wth/2, 0, road, 2*road);
               			ctx.fillRect (7*road+wth/2, 0, road, 2*road);
               			ctx.fillRect (road+wth, 0, road, 2*road);

				//도로 line
				ctx.fillStyle = "rgb(150, 150, 150)";
				ctx.fillRect (2*road,  2*road, wth+4*road, 2);
				ctx.fillRect (2*road,  3*road, wth+4*road, 2);
				ctx.fillRect (2*road,  4*road, wth+4*road, 2);
				ctx.fillRect (2*road,  8*road, wth+4*road, 2);
				ctx.fillRect (2*road,  9*road, wth+4*road, 2);
				ctx.fillRect (2*road, 10*road, wth+4*road, 2);
				ctx.fillRect (2*road, 14*road, wth+4*road, 2);
				ctx.fillRect (2*road, 15*road, wth+4*road, 2);
				ctx.fillRect (2*road, 16*road, wth+4*road, 2);
				ctx.fillRect (2*road, 20*road, wth+4*road, 2);
				ctx.fillRect (2*road, 21*road, wth+4*road, 2);
				ctx.fillRect (2*road, 22*road, wth+4*road, 2);

				ctx.fillRect (2*road, 2*road, 2, 20*road);
				ctx.fillRect (3*road, 2*road, 2, 20*road);
				ctx.fillRect ((wth-2*road)/2+5*road, 2*road, 2, 20*road);
				ctx.fillRect (wth+5*road, 2*road, 2, 20*road);
				ctx.fillRect (wth+6*road, 2*road, 2, 20*road+2);

				//적재된 컨테이너
				ctx.fillStyle = "rgb(176, 176, 228)";
				ctx.fillRect (4*road, 5*road,(wth-2*road)/2, 2*road);
				ctx.fillRect ((wth-2*road)/2+6*road , 5*road, (wth-2*road)/2, 2*road);
				ctx.fillRect (4*road, 11*road, (wth-2*road)/2, 2*road);
				ctx.fillRect ((wth-2*road)/2+6*road, 11*road, (wth-2*road)/2, 2*road);
				ctx.fillRect (4*road, 17*road, (wth-2*road)/2, 2*road);
				ctx.fillRect ((wth-2*road)/2+6*road, 17*road, (wth-2*road)/2, 2*road);

				//신호등
				ctx.fillStyle = "rgb(192, 244, 241)";
				ctx.fillRect(2*road+2,		 2*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(2*road+2,		 8*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(2*road+2,		14*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(2*road+2,		20*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(3*road+wth/2+2,	 2*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(3*road+wth/2+2,	 8*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(3*road+wth/2+2,	14*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(3*road+wth/2+2,	20*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(4*road+wth+2,	 2*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(4*road+wth+2,	 8*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(4*road+wth+2,	14*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(4*road+wth+2,	20*road+2, 2*road-2, 2*road-2);

			}

			var stopani = null;

			function start() {
				const carnum = document.getElementById('carnum').value;
				const canvas = document.getElementById('canvas');

				var ctx = canvas.getContext('2d');

				class Truck{
					constructor(x, y, num){
						//exact location of car
						this.x = x;
						this.y = y;
						this.c = 'rgb(9, 96, 47)';
						
						//size of car
						this.sizex = 30;
						this.sizey = 50;
						
						//status of car
						this.status = 0; //stop
						this.speed = 1;
						
						//car number
						this.num = 0;
						
						//position of car
						this.n = 0;
						this.dbx = 0;
						this.dby = 0;
						this.turn = 0;
						
						//check to not crash
						this.warnu = 0;
						this.warnr = 0;
						this.warnd = 0;
						this.warnl = 0;
					}
					
					update(){						
						var road = canvas.height*0.045;
						var wth = canvas.width-8*road;
						
						//get position of car
						if(this.x >= 2*road && this.x < 3*road)						this.dbx = 1;
						else if(this.x >= 3*road && this.x < 4*road+15)					this.dbx = 2;
						else if(this.x >= 4*road+15 && this.x < (wth-2*road)/2+4*road-15)		this.dbx = 3;
						else if(this.x >= (wth-2*road)/2+4*road-15 && this.x < (wth-2*road)/2+5*road)	this.dbx = 4;
						else if(this.x >= (wth-2*road)/2+5*road && this.x < (wth-2*road)/2+6*road+15)	this.dbx = 5;
						else if(this.x >= (wth-2*road)/2+6*road+15 && this.x < wth+4*road-15)		this.dbx = 6;
						else if(this.x >= wth+4*road-15 && this.x < wth+5*road)				this.dbx = 7;
						else if(this.x >= wth+5*road && this.x < wth+6*road)				this.dbx = 8;
						else if(this.x >= wth+6*road)							this.dbx = 9;
						else										this.dbx = 0;

						if(this.y >= road && this.y < 2*road)						this.dby = 1;
						else if(this.y >= 2*road && this.y < 3*road)					this.dby = 2;
						else if(this.y >= 3*road && this.y < 4*road+15)					this.dby = 3;
						else if(this.y >= 4*road+15 && this.y < 5*road)					this.dby = 4;
						else if(this.y >= 5*road && this.y < 7*road)					this.dby = 5;
						else if(this.y >= 7*road && this.y < 8*road-15)					this.dby = 6;
						else if(this.y >= 8*road-15 && this.y < 9*road)					this.dby = 7;
						else if(this.y >= 9*road && this.y < 10*road+15)				this.dby = 8;
						else if(this.y >= 10*road+15 && this.y < 11*road)				this.dby = 9;
						else if(this.y >= 11*road && this.y < 13*road)					this.dby = 10;
						else if(this.y >= 13*road && this.y < 14*road-15)				this.dby = 11;
						else if(this.y >= 14*road-15 && this.y < 15*road)				this.dby = 12;
						else if(this.y >= 15*road && this.y < 16*road+15)				this.dby = 13;
						else if(this.y >= 16*road+15 && this.y < 17*road)				this.dby = 14;
						else if(this.y >= 17*road && this.y < 19*road)					this.dby = 15;
						else if(this.y >= 19*road && this.y < 20*road-15)				this.dby = 16;
						else if(this.y >= 20*road-15 && this.y < 21*road)				this.dby = 17;
						else if(this.y >= 21*road && this.y < 22*road)					this.dby = 18;
						else 										this.dby = 0;
						
						//alert("num:"+this.num+" dbx:"+this.dbx+" dby:"+this.dby+" st:"+this.status+" turn:"+this.turn+" n:"+this.n);

						//update status
						// 1 up  2 right  3 down  4 left
						var check = 0;
						var px = this.dbx;
						var py = this.dby;
						if(px == 9)
						{
							check = 900;
							this.turn = 0;
							if(this.y < 3*road-15)	this.status = 4;
							else 			this.status = 1;
						}
						if(px != 1 && py == 1)
						{
							check = 101;
							this.turn = 0;
							this.status = 4;
						}
						if(px == 1 || px == 4 || px == 7)
						{
							if(py == 4 || py == 5 || py == 6 || py == 9 || py == 10 || py == 11 || py == 14 || py == 15 || py == 16)
							{
								check = 4914;
								this.turn = 0;
								this.status = 3;
							}
						}
						if(px == 2 || px == 5 || px == 8)
						{
							if(py == 4 || py == 5 || py == 6 || py == 9 || py == 10 || py == 11 || py == 14 || py == 15 || py == 16)
							{
								check = 456;
								this.turn = 0;
								this.status = 1;
							}
						}
						if(px == 3 || px == 6)
						{
							check = 36;
							this.turn = 0;
							if(py == 2 || py == 6 || py == 7 || py == 11 || py == 12 || py == 16 || py == 17)	
								this.status = 4;
							else if(py == 3 || py == 4 || py == 8 || py == 9 || py == 13 || py == 14 || py == 18)
								this.status = 2;
						}
						if(check == 0)		this.status = 0;

						//check if turn
						if(this.status == 0 && this.turn == 0)
						{
							// up right 1 / up left 2 / up up 3
							// right up 4 / right down 5 / right right 6
							// down left 7 / down right 8 / down down 9
							// left down 10 / left up 11 / left left 12
							
							mysql_conn();
							var light = document.getElementById('outputt').innerHTML.split(" ");
							
							//find traffic light that on the way
							if(py == 2 || py == 3)
							{
								if(px == 1 || px == 2)
									this.turn = light[1];
								if(px == 4 || px == 5)
									this.turn = light[2];
								if(px == 7 || px == 8)
									this.turn = light[3];
							}
							else if(py == 7 || py == 8)
							{
								if(px == 1 || px == 2)
									this.turn = light[4];
								if(px == 4 || px == 5)
									this.turn = light[5];
								if(px == 7 || px == 8)
									this.turn = light[6];
							}
							else if(py == 12 || py == 13)
							{
								if(px == 1 || px == 2)
									this.turn = light[7];
								if(px == 4 || px == 5)
									this.turn = light[8];
								if(px == 7 || px == 8)
									this.turn = light[9];
							}
							else if(py == 17 || py == 18)
							{
								if(px == 1 || px == 2)
									this.turn = light[10];
								if(px == 4 || px == 5)
									this.turn = light[11];
								if(px == 7 || px == 8)
									this.turn = light[12];
							}
							
							//detail value while turn
							if(this.turn % 2 == 1)
								this.n = 0.95*road;
							else if(this.turn % 2 == 0 && this.turn != 0)
								this.n = 1.9*road;
						}
						
						//go before turn
						if(this.turn != 0 && this.n > 0)
						{
							this.n -= this.speed;
							if(this.turn <= 3)
								this.status = 1;
							else if(this.turn <=6)
								this.status = 2;
							else if(this.turn <=9)
								this.status = 3;
							else if(this.turn <=12)
								this.status = 4;
						}
						//turn
						else if(this.turn != 0 && this.n < 0)
						{
							this.n = 0;
						}
						//go after turn
						else if(this.turn != 0 && this.n == 0)
						{
							if(this.turn == 3 || this.turn == 4 || this.turn == 11)
								this.status = 1;
							if(this.turn == 1 || this.turn == 6 || this.turn == 8)
								this.status = 2;
							if(this.turn == 5 || this.turn == 9 || this.turn == 10)
								this.status = 3;
							if(this.turn == 2 || this.turn == 7 || this.turn == 12)
								this.status = 4;
						}

						//change value for actual move
						//if this.status == 0 then stop
						if(this.status == 1){ //up
							this.sizex = 30;
							this.sizey = 50;
							
							//check to not crush
							if(this.warnu == 0)
								this.y -= this.speed;
						}
						else if(this.status == 2){ //right
							this.sizex = 50;
							this.sizey = 30;
							
							//check to not crush
							if(this.warnr == 0)
								this.x += this.speed;
						}
						else if(this.status == 3){ //down
							this.sizex = 30;
							this.sizey = 50;
							
							//check to not crush
							if(this.warnd == 0)
								this.y += this.speed;
						}
						else if(this.status == 4){ //left
							this.sizex = 50;
							this.sizey = 30;
							
							//check to not crush
							if(this.warnl == 0)
								this.x -= this.speed;
						}
					}
					draw(){
						//draw car
						ctx.fillStyle = this.c;
						ctx.fillRect(this.x, this.y, this.sizex/2, this.sizey/2);
						ctx.fillRect(this.x, this.y, this.sizex/2, (this.sizey/2)*(-1));
						ctx.fillRect(this.x, this.y, (this.sizex/2)*(-1), this.sizey/2);
						ctx.fillRect(this.x, this.y, (this.sizex/2)*(-1), (this.sizey/2)*(-1));
					}
					check(){
						//check to not crush
						//up
						var imgData = ctx.getImageData(this.x, this.y-this.sizey/2-35, 1, 1);
						if(imgData.data[0] == 9 && imgData.data[1] == 96 && imgData.data[2] == 47)
							this.warnu = 1;
						else	this.warnu = 0;

						//right
						imgData = ctx.getImageData(this.x+this.sizex/2+35, this.y, 1, 1);
						if(imgData.data[0] == 9 && imgData.data[1] == 96 && imgData.data[2] == 47)
							this.warnu = 1;
						else	this.warnu = 0;

						//down
						imgData = ctx.getImageData(this.x, this.y+this.sizey/2+35, 1, 1);
						if(imgData.data[0] == 9 && imgData.data[1] == 96 && imgData.data[2] == 47)
							this.warnu = 1;
						else	this.warnu = 0;

						//left
						imgData = ctx.getImageData(this.x-this.sizex/2-35, this.y, 1, 1);
						if(imgData.data[0] == 9 && imgData.data[1] == 96 && imgData.data[2] == 47)
							this.warnu = 1;
						else	this.warnu = 0;
					}

				}
				var park = 85;
				init = () => { // 그려질 truck의 개체를 설정하는 함수
					if(carnum >= 1) {truck01 = new Truck(canvas.width-40,    park,  1)}
					if(carnum >= 2) {truck02 = new Truck(canvas.width-40,  2*park,  2)}
					if(carnum >= 3) {truck03 = new Truck(canvas.width-40,  3*park,  3)}
					if(carnum >= 4) {truck04 = new Truck(canvas.width-40,  4*park,  4)}
					if(carnum >= 5) {truck05 = new Truck(canvas.width-40,  5*park,  5)}
					if(carnum >= 6) {truck06 = new Truck(canvas.width-40,  6*park,  6)}
					if(carnum >= 7) {truck07 = new Truck(canvas.width-40,  7*park,  7)}
					if(carnum >= 8) {truck08 = new Truck(canvas.width-40,  8*park,  8)}
					if(carnum >= 9) {truck09 = new Truck(canvas.width-40,  9*park,  9)}
					if(carnum >=10) {truck10 = new Truck(canvas.width-40, 10*park, 10)}
					mysql_conn();
				}

				function animate(){
					
					drawMap();
					
					//update and draw car
					if(carnum >= 1) { truck01.update(); truck01.draw(); }
					if(carnum >= 2) { truck02.update(); truck02.draw(); }
					if(carnum >= 3) { truck03.update(); truck03.draw(); }
					if(carnum >= 4) { truck04.update(); truck04.draw(); }
					if(carnum >= 5) { truck05.update(); truck05.draw(); }
					if(carnum >= 6) { truck06.update(); truck06.draw(); }
					if(carnum >= 7) { truck07.update(); truck07.draw(); }
					if(carnum >= 8) { truck08.update(); truck08.draw(); }
					if(carnum >= 9) { truck09.update(); truck09.draw(); }
					if(carnum >=10) { truck10.update(); truck10.draw(); }

					//warning
					if(carnum >= 1) { truck01.check(); }
					if(carnum >= 2) { truck02.check(); }
					if(carnum >= 3) { truck03.check(); }
					if(carnum >= 4) { truck04.check(); }
					if(carnum >= 5) { truck05.check(); }
					if(carnum >= 6) { truck06.check(); }
					if(carnum >= 7) { truck07.check(); }
					if(carnum >= 8) { truck08.check(); }
					if(carnum >= 9) { truck09.check(); }
					if(carnum >=10) { truck10.check(); }
					
					//resize window
					window.addEventListener('resize', function(){
						canvas.width = window.innerWidth*0.695;
						canvas.height = window.innerHeight*0.985;
					})
					
					//animation and cancel animation
					stopani = requestAnimationFrame(animate);
				}
				
				init();
				animate();
			}

			//stop animation
			function stop(){
				cancelAnimationFrame(stopani);
			}
		</script>
	</head>
	<body>
    		<table class="bglayout">
        		<tr>
            			<td colspan="2" rowspan="5" width="70%" style="text-align : center;">
					<div id="map">
						<canvas id='canvas' width='100' height ='100'></canvas>
					</div>
					<br>
					<br>
				</td>
				<th class="title">
					<br>
					Smart Port Traffic Simulator
				</th>
			</tr>
			<tr>
            			<td class="controler" style="text-align : left;">
					<div class="panel">
						<div class="title">
							시나리오 선택
						</div>
						<select>
    							<option value="1" selected>#1 - Sync with actual situation</option>
    							<option value="2">#2</option>
    							<option value="3">#3</option>
    							<option value="4">#4</option>
    							<option value="5">#5</option>
						</select>
					</div>
				</td>
        		</tr>
        		<tr>
            			<td class="controler">
					<div class="panel">
						<div class="title">
							신호등 지시 현황
						</div>
						<table class="traffic">
							<tr>
								<td class="lights" id="l1"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
								<td class="lights" id="l2"><img src="stay.png" width="45%" style="transform:rotate(270deg);" /></td>
								<td class="lights" id="l3"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
							</tr>
							<tr>
								<td class="lights" id="l4"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
								<td class="lights" id="l5"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
								<td class="lights" id="l6"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
							</tr>
							<tr>
								<td class="lights" id="l7"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
								<td class="lights" id="l8"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
								<td class="lights" id="l9"><img src="stay.png" width="45%" style="transform:rotate(270deg);" /></td>
							</tr>
							<tr>
								<td class="lights" id="l10"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
								<td class="lights" id="l11"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
								<td class="lights" id="l12"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
							</tr>
						</table>
					</div>
				</td>
        		</tr>
        		<tr>
            			<td class="controler">
					<div class="panel">
						<div class="title">
							설정 제어판
						</div>
						<div class="controlpanel">
							<table>
								<tr>
									<td style="width:110px;">차량 대수</td>
									<td style="width:15px; border-left: 1px solid #e7e7e7;"></td>
									<td><div id="carshw">1</div></td>
									<td>1 <input type="range" id="carnum" min="1" max="10" value='1' onchange='show_carnum()'> 10</td>
								</tr>
								<tr>
									<td>현재 배속</td>
									<td style="border-left:1px solid #e7e7e7;"></td>
									<td><div id="speedshw">1</div></td> 
									<td>1 <input type="range" min="1" max="10" value='1' id="speednum" onchange='show_speed()'> 10</td>
								</tr>
								<tr>
									<td>시작/일시정지</td>
									<td style="border-left:1px solid #e7e7e7;"></td>
									<td id="playbtn"><button id="play" class="btn" onclick="start()">►</button></td>
									<td><button class="btn" id="pause" onclick="stop()">I I</button></td>
								</tr>
							</table>
							<p class="output" id="outputt">no data input</p>
							<p class="output" id="outputa">
								{"light01":"0","light02":"0","light03":"0","light04":"0","light05":"0","light06":"0","light07":"0","light08":"0","light09":"0","light10":"0","light11":"0","light12":"0"}
							</p>
						</div>
					</div>
				</td>
        		</tr>
        		<tr>
            			<td class="controler">
					<div class="panel">
						<div class="title">
							선적 현황
						</div>
						<div class="statuspanel">
							<table>
								<tr>
									<td style="width:110px;">평균 대기시간</td>
									<td style="width:15px; border-left:1px solid #e7e7e7;"></td>
									<td>005분</td>
								</tr>
								<tr>
									<td>평균 소요시간</td>
									<td style="border-left:1px solid #e7e7e7;"></td>
									<td>030분</td>
								</tr>
								<tr>
									<td>물건 적재율</td>
									<td style="border-left: 1px solid #e7e7e7;"></td>
									<td>010%</td>
								</tr>
							</table>
						</div>
					</div>
				</td>
        		</tr>
    		</table>
	</body>
	<script src="https://code.jquery.com/jquery.min.js"></script>
	<script>
		function mysql_conn(){
			//get mysql data
			$.ajax({
				url: "getMysql.php",
				type: "get",
			}).done(function(data){
				$("#outputa").text(data);
			});

			var info_temp = document.getElementById('outputa').innerText;

			var contact = JSON.parse(info_temp);
			var status_list = "light: "+contact["light01"]+" "+contact["light02"];
			status_list  +=  " " + contact["light03"] + " " + contact["light04"];
			status_list  +=  " " + contact["light05"] + " " + contact["light06"];
			status_list  +=  " " + contact["light07"] + " " + contact["light08"];
			status_list  +=  " " + contact["light09"] + " " + contact["light10"];
			status_list  +=  " " + contact["light11"] + " " + contact["light12"];
			document.getElementById('outputt').innerHTML = status_list;

			var up = "<img src='go.png' width='45%' style='transform:rotate(270deg);'/>";
			var right = "<img src='go.png' width='45%' style='transform:rotate(0deg);'/>";
			var down = "<img src='go.png' width='45%' style='transform:rotate(90deg);'/>";
			var left = "<img src='go.png' width='45%' style='transform:rotate(180deg);'/>";
			var stay = "<img src='stay.png' width='45%' style='transform:rotate(270deg);'/>";

			// up 3 4 11
			// right 1 6 8
			// down 5 9 10
			// left 2 7 12
			
			var light = 0;
			var l = "";
			for(int i=1; i<=12; i++)
			{
				switch(i) {
					case  1: light = contact["light01"]; l = 'l1' ; break;
					case  2: light = contact["light02"]; l = 'l2' ; break;
					case  3: light = contact["light03"]; l = 'l3' ; break;
					case  4: light = contact["light04"]; l = 'l4' ; break;
					case  5: light = contact["light05"]; l = 'l5' ; break;
					case  6: light = contact["light06"]; l = 'l6' ; break;
					case  7: light = contact["light07"]; l = 'l7' ; break;
					case  8: light = contact["light08"]; l = 'l8' ; break;
					case  9: light = contact["light09"]; l = 'l9' ; break;
					case 10: light = contact["light10"]; l = 'l10'; break;
					case 11: light = contact["light11"]; l = 'l11'; break;
					case 12: light = contact["light12"]; l = 'l12'; break;
					default:
						alert("error");
				}
				if(light == 0)
					document.getElementById(l).innerHTML = stay;
				else if(light == 3 || light == 4 || light == 11 )
					document.getElementById(l).innerHTML = up;
				else if(light == 1 || light == 6 || light == 8 )
					document.getElementById(l).innerHTML = right;
				else if(light == 5 || light == 9 || light == 10 )
					document.getElementById(l).innerHTML = down;
				else if(light == 2 || light == 7 || light == 12 )
					document.getElementById(l).innerHTML = left;
			}
		}

		window.onload = drawMap();
	</script>
</html>

