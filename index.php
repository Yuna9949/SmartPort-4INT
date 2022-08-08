<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport"
			content="width=device-width, height=device-height,
			minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
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
			function show_carnum(){
				const carN = document.getElementById('carnum').value;
				document.getElementById('carshw').innerText = carN;
			}
			function show_speed(){
				const spdvalue = document.getElementById('speednum').value;
				docummnet.ggetElementById('speedshw').innerText = spdvalue;
			}

			function drawMap(){
				const canvas = document.getElementById('canvas');
				var ctx = canvas.getContext('2d');

				canvas.width = window.innerWidth*0.635;
				canvas.height = window.innerHeight*0.793;

				var road = canvas.height*0.045;
				var wth = canvas.width-8*road;

				<!-- background -->
				var round = 15;
				ctx.fillStyle = 'rgb(255,255,255)';
				ctx.fillRect(0,0, canvas.width, canvas.height);

				<!-- 바다 -->
				ctx.fillStyle = "rgb(113, 156, 255)";
				ctx.fillRect (0, 0, 1500, road);

                		<!-- 선박 -->
                		ctx.fillStyle = "rgb(211, 211, 211)";
                		ctx.fillRect (5.5*road, 0, 2*road, road);
                		ctx.fillRect (wth/2 - 0.5*road, 0, 2*road, road);
                		ctx.fillRect (6.5*road+wth/2, 0, 2*road, road);
                		ctx.fillRect (0.5*road+wth, 0, 2*road, road);

               			<!-- 하역 크레인 -->
               			ctx.fillStyle = "rgb(255, 192, 203)";
               			ctx.fillRect (6*road, 0, road, 2*road);
               			ctx.fillRect (wth/2, 0, road, 2*road);
               			ctx.fillRect (7*road+wth/2, 0, road, 2*road);
               			ctx.fillRect (road+wth, 0, road, 2*road);

				<!-- 도로 -->
				ctx.fillStyle = "rgb(150, 150, 150)";
				ctx.fillRect (2*road, 2*road, wth+4*road, 2);
				ctx.fillRect (2*road, 3*road, wth+4*road, 2);
				ctx.fillRect (2*road, 4*road, wth+4*road, 2);
				ctx.fillRect (2*road, 8*road, wth+4*road, 2);
				ctx.fillRect (2*road, 9*road, wth+4*road, 2);
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

				<!-- 적재된 컨테이너 -->
				ctx.fillStyle = "rgb(176, 176, 228)";
				ctx.fillRect (4*road, 5*road,(wth-2*road)/2, 2*road);
				ctx.fillRect ((wth-2*road)/2+6*road , 5*road, (wth-2*road)/2, 2*road);
				ctx.fillRect (4*road, 11*road, (wth-2*road)/2, 2*road);
				ctx.fillRect ((wth-2*road)/2+6*road, 11*road, (wth-2*road)/2, 2*road);
				ctx.fillRect (4*road, 17*road, (wth-2*road)/2, 2*road);
				ctx.fillRect ((wth-2*road)/2+6*road, 17*road, (wth-2*road)/2, 2*road);

				<!-- 신호등 -->
				ctx.fillStyle = "rgb(192, 244, 241)";
				ctx.fillRect(2*road+2,          2*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(2*road+2,          8*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(2*road+2,         14*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(2*road+2,         20*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(3*road+wth/2+2,  2*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(3*road+wth/2+2,  8*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(3*road+wth/2+2, 14*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(3*road+wth/2+2, 20*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(4*road+wth+2,     2*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(4*road+wth+2,     8*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(4*road+wth+2,    14*road+2, 2*road-2, 2*road-2);
				ctx.fillRect(4*road+wth+2,    20*road+2, 2*road-2, 2*road-2);

			}

			var stopani = null;

			function start() {
				const carnum = document.getElementById('carnum').value;
				const canvas = document.getElementById('canvas');

				var ctx = canvas.getContext('2d');

				class Truck{
					constructor(x, y){
						this.x = x;
						this.y = y;
						this.c = 'rgb(9, 96, 47)';

						this.sizex = 30;
						this.sizey = 50;
						this.angle = 0;
						this.status = 0; //stop
						this.speed = 1;
						this.n = 0;
						this.dbx = 0;
						this.dby = 0;
						this.turn = 0;
						this.warnu = 0;
						this.warnr = 0;
						this.warnd = 0;
						this.warnl = 0;
					}
					update(num){
						this.num = num;
						var road = canvas.height*0.045;
						var wth = canvas.width-8*road;

						if(this.x >= 2*road && this.x < 3*road)
							this.dbx = 1;
						else if(this.x >= 3*road && this.x < 4*road+15)
							this.dbx = 2;
						else if(this.x >= 4*road+15 && this.x < (wth-2*road)/2+4*road-15)
							this.dbx = 3;
						else if(this.x >= (wth-2*road)/2+4*road-15 && this.x < (wth-2*road)/2+5*road)
							this.dbx = 4;
						else if(this.x >= (wth-2*road)/2+5*road && this.x < (wth-2*road)/2+6*road+15)
							this.dbx = 5;
						else if(this.x >= (wth-2*road)/2+6*road+15 && this.x < wth+4*road-15)
							this.dbx = 6;
						else if(this.x >= wth+4*road-15 && this.x < wth+5*road)
							this.dbx = 7;
						else if(this.x >= wth+5*road && this.x < wth+6*road)
							this.dbx = 8;
						else if(this.x >= wth+6*road)
							this.dbx = 9;
						else	this.dbx = 0;

						if(this.y >= road && this.y < 2*road)
							this.dby = 1;
						else if(this.y >= 2*road && this.y < 3*road)
							this.dby = 2;
						else if(this.y >= 3*road && this.y < 4*road+15)
							this.dby = 3;
						else if(this.y >= 4*road+15 && this.y < 5*road)
							this.dby = 4;
						else if(this.y >= 5*road && this.y < 7*road)
							this.dby = 5;
						else if(this.y >= 7*road && this.y < 8*road-15)
							this.dby = 6;
						else if(this.y >= 8*road-15 && this.y < 9*road)
							this.dby = 7;
						else if(this.y >= 9*road && this.y < 10*road+15)
							this.dby = 8;
						else if(this.y >= 10*road+15 && this.y < 11*road)
							this.dby = 9;
						else if(this.y >= 11*road && this.y < 13*road)
							this.dby = 10;
						else if(this.y >= 13*road && this.y < 14*road-15)
							this.dby = 11;
						else if(this.y >= 14*road-15 && this.y < 15*road)
							this.dby = 12;
						else if(this.y >= 15*road && this.y < 16*road+15)
							this.dby = 13;
						else if(this.y >= 16*road+15 && this.y < 17*road)
							this.dby = 14;
						else if(this.y >= 17*road && this.y < 19*road)
							this.dby = 15;
						else if(this.y >= 19*road && this.y < 20*road-15)
							this.dby = 16;
						else if(this.y >= 20*road-15 && this.y < 21*road)
							this.dby = 17;
						else if(this.y >= 21*road && this.y < 22*road)
							this.dby = 18;
						else 	this.dby = 0

						//alert("num:"+this.num+" dbx:"+this.dbx+" dby:"+this.dby+" st:"+this.status+" turn:"+this.turn+" n:"+this.n);

						var check = 0;
						// 1 up  2 right  3 down  4 left

						if(this.dbx == 9)
						{
							if(this.y < 3*road-15)	this.status = 4;
							else 			this.status = 1;
							this.turn = 0;
							check = 900;
						}
						if(this.dbx != 1 && this.dby == 1)
						{
							this.status = 4;
							this.turn = 0;
							check = 101;
						}
						if(this.dbx == 1 || this.dbx == 4 || this.dbx == 7)
						{
							if(this.dby == 4 || this.dby == 5 || this.dby == 6)
							{
								check = 456;
								this.turn = 0;
								this.status = 3;
							}
							if(this.dby == 9 || this.dby == 10 || this.dby == 11)
							{
								check = 91011;
								this.turn = 0;
								this.status = 3;
							}
							if(this.dby == 14 || this.dby == 15 || this.dby == 16)
							{
								check = 141516;
								this.turn = 0;
								this.status = 3;
							}
						}
						if(this.dbx == 2 || this.dbx == 5 || this.dbx == 8)
						{
							if(this.dby == 4 || this.dby == 5 || this.dby == 6)
							{
								check = 456;
								this.turn = 0;
								this.status = 1;
							}
							if(this.dby == 9 || this.dby == 10 || this.dby == 11)
							{
								check = 91011;
								this.turn = 0;
								this.status = 1;
							}
							if(this.dby == 14 || this.dby == 15 || this.dby == 16)
							{
								check = 141516;
								this.turn = 0;
								this.status = 1;
							}
						}
						if(this.dbx == 3 || this.dbx == 6)
						{
							check = 36;
							this.turn = 0;
							if(this.dby == 2)	this.status = 4;
							else if(this.dby == 6 || this.dby == 7)
										this.status = 4;
							else if(this.dby == 11 || this.dby == 12)
										this.status = 4;
							else if(this.dby == 16 || this.dby == 17)
										this.status = 4;

							else if(this.dby == 3 || this.dby == 4)
										this.status = 2;
							else if(this.dby == 8 || this.dby == 9)
										this.status = 2;
							else if(this.dby == 13 || this.dby == 14)
										this.status = 2;
							else if(this.dby == 18)	this.status = 2;
						}
						if(check == 0)		this.status = 0;

						if(this.status == 0 && this.turn == 0)
						{
							// up right 1 / up left 2 / up up 3
							// right up 4 / right down 5 / right right 6
							// down left 7 / down right 8 / down down 9
							// left down 10 / left up 11 / left left 12

							mysql_conn();
							var light = document.getElementById('outputt').innerHTML.split(" "); 
							if(this.dby == 2 || this.dby == 3)
							{
								if(this.dbx == 1 || this.dbx == 2)
									this.turn = light[1];
								if(this.dbx == 4 || this.dbx == 5)
									this.turn = light[2];
								if(this.dbx == 7 || this.dbx == 8)
									this.turn = light[3];
							}
							else if(this.dby == 7 || this.dby == 8)
							{
								if(this.dbx == 1 || this.dbx == 2)
									this.turn = light[4];
								if(this.dbx == 4 || this.dbx == 5)
									this.turn = light[5];
								if(this.dbx == 7 || this.dbx == 8)
									this.turn = light[6];
							}
							else if(this.dby == 12 || this.dby == 13)
							{
								if(this.dbx == 1 || this.dbx == 2)
									this.turn = light[7];
								if(this.dbx == 4 || this.dbx == 5)
									this.turn = light[8];
								if(this.dbx == 7 || this.dbx == 8)
									this.turn = light[9];
							}
							else if(this.dby == 17 || this.dby == 18)
							{
								if(this.dbx == 1 || this.dbx == 2)
									this.turn = light[10];
								if(this.dbx == 4 || this.dbx == 5)
									this.turn = light[11];
								if(this.dbx == 7 || this.dbx == 8)
									this.turn = light[12];
							}

							if(this.turn % 2 == 1)
								this.n = 0.95*road;
							else if(this.turn % 2 == 0 && this.turn != 0)
								this.n = 1.9*road;
						}

						if(this.turn != 0 && this.n > 0)
						{
							//alert("turn1");
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
						else if(this.turn != 0 && this.n < 0)
						{
							//alert("turn2");
							this.n = 0;
							//if(this.turn == 10)
							//	this.y += 50;
						}
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

						if(this.status == 1){ //up
							this.sizex = 30;
							this.sizey = 50;
							if(this.warnu == 0)
								this.y -= this.speed;
						}
						if(this.status == 2){ //right
							this.sizex = 50;
							this.sizey = 30;
							if(this.warnr == 0)
								this.x += this.speed;
						}
						if(this.status == 3){ //down
							this.sizex = 30;
							this.sizey = 50;
							if(this.warnd == 0)
								this.y += this.speed;
						}
						if(this.status == 4){ //left
							this.sizex = 50;
							this.sizey = 30;
							if(this.warnl == 0)
								this.x -= this.speed;
						}
					}
					draw(){
						ctx.fillStyle = this.c;
						ctx.fillRect(this.x, this.y, this.sizex/2, this.sizey/2);
						ctx.fillRect(this.x, this.y, this.sizex/2, (this.sizey/2)*(-1));
						ctx.fillRect(this.x, this.y, (this.sizex/2)*(-1), this.sizey/2);
						ctx.fillRect(this.x, this.y, (this.sizex/2)*(-1), (this.sizey/2)*(-1));
					}
					check(){
						//up
						var imgData = ctx.getImageData(this.x, this.y-this.sizey/2-36, 1, 1);
						var redcolor = imgData.data[0];
						var greencolor = imgData.data[1];
						var bluecolor = imgData.data[2];
						if(redcolor == 9 && greencolor == 96 && bluecolor == 47)
							this.warnu = 1;
						else	this.warnu = 0;

						//right
						imgData = ctx.getImageData(this.x+this.sizex/2+36, this.y, 1, 1);
						redcolor = imgData.data[0];
						greencolor = imgData.data[1];
						bluecolor = imgData.data[2];
						if(redcolor == 9 && greencolor == 96 && bluecolor == 47)
							this.warnr = 1;
						else 	this.warnr = 0;

						//down
						imgData = ctx.getImageData(this.x, this.y+this.sizey/2+36, 1, 1);
						redcolor = imgData.data[0];
						greencolor = imgData.data[1];
						bluecolor = imgData.data[2];
						if(redcolor == 9 && greencolor == 96 && bluecolor == 47)
							this.warnd = 1;
						else	this.warnd = 0;

						//left
						imgData = ctx.getImageData(this.x-this.sizex/2-36, this.y, 1, 1);
						redcolor = imgData.data[0];
						greencolor = imgData.data[1];
						bluecolor = imgData.data[2];
						if(redcolor == 9 && greencolor == 96 && bluecolor == 47)
							this.warnl = 1;
						else	this.warnl = 0;

						if(this.warnu+this.warnr+this.warnd+this.warnl > 0)
							alert(this.num+":"+this.warnu+this.warnr+this.warnd+this.warnl);
					}

				}
				var park = 85;
				init = () => { // 그려질 truck의 개체를 설정하는 함수
					if(carnum >=1) {truck1 = new Truck(canvas.width-40, park)}
					if(carnum >=2) {truck2 = new Truck(canvas.width-40, 2*park)}
					if(carnum >=3) {truck3 = new Truck(canvas.width-40, 3*park)}
					if(carnum >=4) {truck4 = new Truck(canvas.width-40, 4*park)}
					if(carnum >=5) {truck5 = new Truck(canvas.width-40, 5*park)}
					if(carnum >=6) {truck6 = new Truck(canvas.width-40, 6*park)}
					if(carnum >=7) {truck7 = new Truck(canvas.width-40, 7*park)}
					if(carnum >=8) {truck8 = new Truck(canvas.width-40, 8*park)}
					if(carnum >=9) {truck9 = new Truck(canvas.width-40, 9*park)}
					if(carnum >=10) {truck10 = new Truck(canvas.width-40, 10*park)}
					mysql_conn();
				}

				function animate(){

					drawMap();
					if(carnum >=1)  { truck1.update(1);    truck1.draw();  }
					if(carnum >=2)  { truck2.update(2);    truck2.draw();  }
					if(carnum >=3)  { truck3.update(3);    truck3.draw();  }
					if(carnum >=4)  { truck4.update(4);    truck4.draw();  }
					if(carnum >=5)  { truck5.update(5);    truck5.draw();  }
					if(carnum >=6)  { truck6.update(6);    truck6.draw();  }
					if(carnum >=7)  { truck7.update(7);    truck7.draw();  }
					if(carnum >=8)  { truck8.update(8);    truck8.draw();  }
					if(carnum >=9)  { truck9.update(9);    truck9.draw();  }
					if(carnum >=10) { truck10.update(10);  truck10.draw(); }

					//warning
					if(carnum >=1)  { truck1.check();  }
					if(carnum >=2)  { truck2.check();  }
					if(carnum >=3)  { truck3.check();  }
					if(carnum >=4)  { truck4.check();  }
					if(carnum >=5)  { truck5.check();  }
					if(carnum >=6)  { truck6.check();  }
					if(carnum >=7)  { truck7.check();  }
					if(carnum >=8)  { truck8.check();  }
					if(carnum >=9)  { truck9.check();  }
					if(carnum >=10) { truck10.check(); }

					window.addEventListener('resize', function(){
						canvas.width = window.innerWidth*0.695;
						canvas.height = window.innerHeight*0.985;
					})
					stopani = requestAnimationFrame(animate);
				}
				init();
				animate();
			}

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
									<td><button class="btn" id="pause" onclick="stop()"}>I I</button></td>
								</tr>
							</table>
							<p class="output" id="outputt">no data input</p>
							<p class="output" id="outputa">{"light01":"0"}</p>
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
			if(contact["light01"] == 0)
				document.getElementById('l1').innerHTML = stay;
			else if(contact["light01"] == 3 || contact["light01"] == 4 || contact["light01"] == 11 )
				document.getElementById('l1').innerHTML = up;
			else if(contact["light01"] == 1 || contact["light01"] == 6 || contact["light01"] == 8 )
				document.getElementById('l1').innerHTML = right;
			else if(contact["light01"] == 5 || contact["light01"] == 9 || contact["light01"] == 10 )
				document.getElementById('l1').innerHTML = down;
			else if(contact["light01"] == 2 || contact["light01"] == 7 || contact["light01"] == 12 )
				document.getElementById('l1').innerHTML = left;

			if(contact["light02"] == 0)
				document.getElementById('l2').innerHTML = stay;
			else if(contact["light02"] == 3 || contact["light02"] == 4 || contact["light02"] == 11 )
				document.getElementById('l2').innerHTML = up;
			else if(contact["light02"] == 1 || contact["light02"] == 6 || contact["light02"] == 8 )
				document.getElementById('l2').innerHTML = right;
			else if(contact["light02"] == 5 || contact["light02"] == 9 || contact["light02"] == 10 )
				document.getElementById('l2').innerHTML = down;
			else if(contact["light02"] == 2 || contact["light02"] == 7 || contact["light02"] == 12 )
				document.getElementById('l2').innerHTML = left;

			if(contact["light03"] == 0)
				document.getElementById('l3').innerHTML = stay;
			else if(contact["light03"] == 3 || contact["light03"] == 4 || contact["light03"] == 11 )
				document.getElementById('l3').innerHTML = up;
			else if(contact["light03"] == 1 || contact["light03"] == 6 || contact["light03"] == 8 )
				document.getElementById('l3').innerHTML = right;
			else if(contact["light03"] == 5 || contact["light03"] == 9 || contact["light03"] == 10 )
				document.getElementById('l3').innerHTML = down;
			else if(contact["light03"] == 2 || contact["light03"] == 7 || contact["light03"] == 12 )
				document.getElementById('l3').innerHTML = left;

			if(contact["light04"] == 0)
				document.getElementById('l4').innerHTML = stay;
			else if(contact["light04"] == 3 || contact["light04"] == 4 || contact["light04"] == 11 )
				document.getElementById('l4').innerHTML = up;
			else if(contact["light04"] == 1 || contact["light04"] == 6 || contact["light04"] == 8 )
				document.getElementById('l4').innerHTML = right;
			else if(contact["light04"] == 5 || contact["light04"] == 9 || contact["light04"] == 10 )
				document.getElementById('l4').innerHTML = down;
			else if(contact["light04"] == 2 || contact["light04"] == 7 || contact["light04"] == 12 )
				document.getElementById('l4').innerHTML = left;

			if(contact["light05"] == 0)
				document.getElementById('l5').innerHTML = stay;
			else if(contact["light05"] == 3 || contact["light05"] == 4 || contact["light05"] == 11 )
				document.getElementById('l5').innerHTML = up;
			else if(contact["light05"] == 1 || contact["light05"] == 6 || contact["light05"] == 8 )
				document.getElementById('l5').innerHTML = right;
			else if(contact["light05"] == 5 || contact["light05"] == 9 || contact["light05"] == 10 )
				document.getElementById('l5').innerHTML = down;
			else if(contact["light05"] == 2 || contact["light05"] == 7 || contact["light05"] == 12 )
				document.getElementById('l5').innerHTML = left;

			if(contact["light06"] == 0)
				document.getElementById('l6').innerHTML = stay;
			else if(contact["light06"] == 3 || contact["light06"] == 4 || contact["light06"] == 11 )
				document.getElementById('l6').innerHTML = up;
			else if(contact["light06"] == 1 || contact["light06"] == 6 || contact["light06"] == 8 )
				document.getElementById('l6').innerHTML = right;
			else if(contact["light06"] == 5 || contact["light06"] == 9 || contact["light06"] == 10 )
				document.getElementById('l6').innerHTML = down;
			else if(contact["light06"] == 2 || contact["light06"] == 7 || contact["light06"] == 12 )
				document.getElementById('l6').innerHTML = left;

			if(contact["light07"] == 0)
				document.getElementById('l7').innerHTML = stay;
			else if(contact["light07"] == 3 || contact["light07"] == 4 || contact["light07"] == 11 )
				document.getElementById('l7').innerHTML = up;
			else if(contact["light07"] == 1 || contact["light07"] == 6 || contact["light07"] == 8 )
				document.getElementById('l7').innerHTML = right;
			else if(contact["light07"] == 5 || contact["light07"] == 9 || contact["light07"] == 10 )
				document.getElementById('l7').innerHTML = down;
			else if(contact["light07"] == 2 || contact["light07"] == 7 || contact["light07"] == 12 )
				document.getElementById('l7').innerHTML = left;

			if(contact["light08"] == 0)
				document.getElementById('l8').innerHTML = stay;
			else if(contact["light08"] == 3 || contact["light08"] == 4 || contact["light08"] == 11 )
				document.getElementById('l8').innerHTML = up;
			else if(contact["light08"] == 1 || contact["light08"] == 6 || contact["light08"] == 8 )
				document.getElementById('l8').innerHTML = right;
			else if(contact["light08"] == 5 || contact["light08"] == 9 || contact["light08"] == 10 )
				document.getElementById('l8').innerHTML = down;
			else if(contact["light08"] == 2 || contact["light08"] == 7 || contact["light08"] == 12 )
				document.getElementById('l8').innerHTML = left;

			if(contact["light09"] == 0)
				document.getElementById('l9').innerHTML = stay;
			else if(contact["light09"] == 3 || contact["light09"] == 4 || contact["light09"] == 11 )
				document.getElementById('l9').innerHTML = up;
			else if(contact["light09"] == 1 || contact["light09"] == 6 || contact["light09"] == 8 )
				document.getElementById('l9').innerHTML = right;
			else if(contact["light09"] == 5 || contact["light09"] == 9 || contact["light09"] == 10 )
				document.getElementById('l9').innerHTML = down;
			else if(contact["light09"] == 2 || contact["light09"] == 7 || contact["light09"] == 12 )
				document.getElementById('l9').innerHTML = left;

			if(contact["light10"] == 0)
				document.getElementById('l10').innerHTML = stay;
			else if(contact["light10"] == 3 || contact["light10"] == 4 || contact["light10"] == 11 )
				document.getElementById('l10').innerHTML = up;
			else if(contact["light10"] == 1 || contact["light10"] == 6 || contact["light10"] == 8 )
				document.getElementById('l10').innerHTML = right;
			else if(contact["light10"] == 5 || contact["light10"] == 9 || contact["light10"] == 10 )
				document.getElementById('l10').innerHTML = down;
			else if(contact["light10"] == 2 || contact["light10"] == 7 || contact["light10"] == 12 )
				document.getElementById('l10').innerHTML = left;

			if(contact["light11"] == 0)
				document.getElementById('l11').innerHTML = stay;
			else if(contact["light11"] == 3 || contact["light11"] == 4 || contact["light11"] == 11 )
				document.getElementById('l11').innerHTML = up;
			else if(contact["light11"] == 1 || contact["light11"] == 6 || contact["light11"] == 8 )
				document.getElementById('l11').innerHTML = right;
			else if(contact["light11"] == 5 || contact["light11"] == 9 || contact["light11"] == 10 )
				document.getElementById('l11').innerHTML = down;
			else if(contact["light11"] == 2 || contact["light11"] == 7 || contact["light11"] == 12 )
				document.getElementById('l11').innerHTML = left;

			if(contact["light12"] == 0)
				document.getElementById('l12').innerHTML = stay;
			else if(contact["light12"] == 3 || contact["light12"] == 4 || contact["light12"] == 11 )
				document.getElementById('l12').innerHTML = up;
			else if(contact["light12"] == 1 || contact["light12"] == 6 || contact["light12"] == 8 )
				document.getElementById('l12').innerHTML = right;
			else if(contact["light12"] == 5 || contact["light12"] == 9 || contact["light12"] == 10 )
				document.getElementById('l12').innerHTML = down;
			else if(contact["light12"] == 2 || contact["light12"] == 7 || contact["light12"] == 12 )
				document.getElementById('l12').innerHTML = left;
		}

		window.onload = drawMap();
	</script>
</html>

