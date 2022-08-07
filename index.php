<?php
	function mysql_conn(){
		$conn = mysqli_connect("localhost","root","smartport4int","test");
		if(!$conn){
			echo "DB fail".mysqli_connect_error();
		}
	
		$sql = "SELECT * FROM traffic ORDER BY time DESC";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		global $return_value;
		$return_value = array($row["car1x"], $row["car2x"], $row["car3x"], $row["car1y"], $row["car2y"], $row["car3y"], $row["light01"], $row["light02"], $row["light03"], $row["light04"], $row["light05"], $row["light06"], $row["light07"], $row["light08"], $row["light09"], $row["light10"], $row["light11"], $row["light12"]);
		mysqli_close($conn);
		return $return_value;
	}
?>


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
			#output{
				position: absolute;
				top: -50px;
				left: 30%;
				color: red;
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
			function mysql_conn(){
				var js_array = "<?php echo json_encode(mysql_conn());?>";
				document.getElementById('output').innerHTML = js_array;
			}
			function drawMap(){
				const canvas = document.getElementById('canvas');
				var ctx = canvas.getContext('2d');
				//canvas.width = window.innerWidth*0.691;
				//canvas.height = window.innerHeight*0.985;
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
					}
					update(){
						mysql_conn();

						//var st = document.getElementById('output').innerHTML; 
						//st = st*1;
						//this.status = st;

						if(this.status == 1){ //up
							this.y -= this.speed;
						}
						if(this.status == 2){ //right
							this.x += this.speed;
						}
						if(this.status == 3){ //down
							this.y += this.speed;
						}
						if(this.status == 4){ //left
							this.x -= this.speed;
						}
					}
					draw(){
						ctx.fillStyle = this.c;
						ctx.fillRect(this.x, this.y, this.sizex, this.sizey);
					}

				}
				var park = 80;
				init = () => { // 그려질 공의 개체를 설정하는 함수
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
					if(carnum >=1)  { truck1.update();    truck1.draw();  }
					if(carnum >=2)  { truck2.update();    truck2.draw();  }
					if(carnum >=3)  { truck3.update();    truck3.draw();  }
					if(carnum >=4)  { truck4.update();    truck4.draw();  }
					if(carnum >=5)  { truck5.update();    truck5.draw();  }
					if(carnum >=6)  { truck6.update();    truck6.draw();  }
					if(carnum >=7)  { truck7.update();    truck7.draw();  }
					if(carnum >=8)  { truck8.update();    truck8.draw();  }
					if(carnum >=9)  { truck9.update();    truck9.draw();  }
					if(carnum >=10) { truck10.update();  truck10.draw(); }

					window.addEventListener('resize', function(){
						canvas.width = window.innerWidth*0.695;
						canvas.height = window.innerHeight*0.985;
					})
					requestAnimationFrame(animate);
				}
				init();
				animate();
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
								<td class="lights"><img src="go.png" width="45%" style="transform:rotate(0deg);"/></td>
								<td class="lights"><img src="stop.png" width="45%" style="transform:rotate(270deg);" /></td>
								<td class="lights"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
							</tr>
							<tr>
								<td class="lights"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
								<td class="lights"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
								<td class="lights"><img src="go.png" width="45%" style="transform:rotate(270deg);"/></td>
							</tr>
							<tr>
								<td class="lights"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
								<td class="lights"><img src="go.png" width="45%" style="transform:rotate(180deg);"/></td>
								<td class="lights"><img src="stop.png" width="45%" style="transform:rotate(270deg);" /></td>
							</tr>
							<tr>
								<td class="lights"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
								<td class="lights"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
								<td class="lights"><img src="stay.png" width="45%" style="transform:rotate(270deg);"/></td>
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
									<td>1 <input type="range" id="carnum" min="1" max="10" value='1'> 10</td>
								</tr>
								<tr>
									<td>현재 배속</td>
									<td style="border-left:1px solid #e7e7e7;"></td>
									<td><div id="speedshw">1</div></td> 
									<td>1 <input type="range" min="1" max="10" value='1' id="speednum"> 10</td>
								</tr>
								<tr>
									<td>시작/일시정지</td>
									<td style="border-left:1px solid #e7e7e7;"></td>
									<td><button id="play" class="btn" onclick="start()">►</button></td>
									<td><button class="btn" id="pause">I I</button></td>
								</tr>
							</table>
							<p id="output">1</p>
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
	<script>
		window.onload = drawMap();
	</script>
</html>
