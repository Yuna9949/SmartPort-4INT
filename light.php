<!DOCTYPE html>
<html>
	<head>
		<title>traffic light</title>
	</head>
	<body>
		
		<table border = "1">
			<tr>
				<td colspan="3" id="outputa" width="500px" style="word-break:break-all">
					a<br />a<br />a
				</td>
			</tr>
			<tr>
				<td colspan="3" id="outputt" width="500px" style="word-break:break-all">t</td>
			</tr>
			<tr>
				<td colspan="3"><input type='button' value='mysql_conn' onclick='mysql_conn()'/></td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='status("t1", 2)'/></td>
							<td id="t1up1"><input type='button' value='↟' onclick='status("t1", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t1", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t1", 11)'/></td>
							<td></td>
							<td id="t1up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t1", 4)'/></td>
						</tr>
						<tr>
							<td id="t1l1"><input type='button' value='↞' onclick='status("t1", 12)'/></td>
							<td id="t1l2"></td>
							<td id="t1">0</td>
							<td id="t1r2"></td>
							<td id="t1r1"><input type='button' value='↠' onclick='status("t1", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t1", 10)'/></td>
							<td></td>
							<td id="t1dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t1", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t1", 7)'/></td>
							<td id="t1dw1"><input type='button' value='↡' onclick='status("t1", 9)'/></td>
							<td><input type='button' value='↳' onclick='status("t1", 8)'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='status("t2", 2)'/></td>
							<td id="t2up1"><input type='button' value='↟' onclick='status("t2", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t2", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t2", 11)'/></td>
							<td></td>
							<td id="t2up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t2", 4)'/></td>
						</tr>
						<tr>
							<td id="t2l1"><input type='button' value='↞' onclick='status("t2", 12)'/></td>
							<td id="t2l2"></td>
							<td id="t2">0</td>
							<td id="t2r2"></td>
							<td id="t2r1"><input type='button' value='↠' onclick='status("t2", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t2", 10)'/></td>
							<td></td>
							<td id="t2dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t2", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t2", 7)'/></td>
							<td id="t2dw1"><input type='button' value='↡' onclick='status("t2", 9)'/></td>
							<td><input type='button' value='↳' onclick='status("t2", 8)'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='status("t3", 2)'/></td>
							<td id="t3up1"><input type='button' value='↟' onclick='status("t3", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t3", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t3", 11)'/></td>
							<td></td>
							<td id="t3up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t3", 4)'/></td>
						</tr>
						<tr>
							<td id="t3l1"><input type='button' value='↞' onclick='status("t3", 12)'/></td>
							<td id="t3l2"></td>
							<td id="t3">0</td>
							<td id="t3r2"></td>
							<td id="t3r1"><input type='button' value='↠' onclick='status("t3", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t3", 10)'/></td>
							<td></td>
							<td id="t3dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t3", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t3", 7)'/></td>
							<td id="t3dw1"><input type='button' value='↡' onclick='status("t3", 9)'/></td>
							<td><input type='button' value='↳' onclick='status("t3", 8)'/></td>
							<td></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='status("t4", 2)'/></td>
							<td id="t4up1"><input type='button' value='↟' onclick='status("t4", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t4", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t4", 11)'/></td>
							<td></td>
							<td id="t4up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t4", 4)'/></td>
						</tr>
						<tr>
							<td id="t4l1"><input type='button' value='↞' onclick='status("t4", 12)'/></td>
							<td id="t4l2"></td>
							<td id="t4">0</td>
							<td id="t4r2"></td>
							<td id="t4r1"><input type='button' value='↠' onclick='status("t4", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t4", 10)'/></td>
							<td></td>
							<td id="t4dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t4", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t4", 7)'/></td>
							<td id="t4dw1"><input type='button' value='↡' onclick='status("t4", 9)'/></td>
							<td><input type='button' value='↳' onclick='status("t4", 8)'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='status("t5", 2)'/></td>
							<td id="t5up1"><input type='button' value='↟' onclick='status("t5", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t5", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t5", 11)'/></td>
							<td></td>
							<td id="t5up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t5", 4)'/></td>
						</tr>
						<tr>
							<td id="t5l1"><input type='button' value='↞' onclick='status("t5", 12)'/></td>
							<td id="t5l2"></td>
							<td id="t5">0</td>
							<td id="t5r2"></td>
							<td id="t5r1"><input type='button' value='↠' onclick='status("t5", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t5", 10)'/></td>
							<td></td>
							<td id="t5dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t5", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t5", 7)'/></td>
							<td id="t5dw1"><input type='button' value='↡' onclick='status("t5", 9)'/></td>
							<td><input type='button' value='↳' onclick='status("t5", 8)'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='status("t6", 2)'/></td>
							<td id="t6up1"><input type='button' value='↟' onclick='status("t6", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t6", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t6", 11)'/></td>
							<td></td>
							<td id="t6up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t6", 4)'/></td>
						</tr>
						<tr>
							<td id="t6l1"><input type='button' value='↞' onclick='status("t6", 12)'/></td>
							<td id="t6l2"></td>
							<td id="t6">0</td>
							<td id="t6r2"></td>
							<td id="t6r1"><input type='button' value='↠' onclick='status("t6", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t6", 10)'/></td>
							<td></td>
							<td id="t6dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t6", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t6", 7)'/></td>
							<td id="t6dw1"><input type='button' value='↡' onclick='status("t6", 9)'/></td>
							<td><input type='button' value='↳' onclick='status("t6", 8)'/></td>
							<td></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='status("t7", 2)'/></td>
							<td id="t7up1"><input type='button' value='↟' onclick='status("t7", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t7", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t7", 11)'/></td>
							<td></td>
							<td id="t7up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t7", 4)'/></td>
						</tr>
						<tr>
							<td id="t7l1"><input type='button' value='↞' onclick='status("t7", 12)'/></td>
							<td id="t7l2"></td>
							<td id="t7">0</td>
							<td id="t7r2"></td>
							<td id="t7r1"><input type='button' value='↠' onclick='status("t7", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t7", 10)'/></td>
							<td></td>
							<td id="t7dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t7", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t7", 7)'/></td>
							<td id="t7dw1"><input type='button' value='↡' onclick='status("t7", 9)'/></td>
							<td><input type='button' value='↳' onclick='status("t7", 8)'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='status("t8", 2)'/></td>
							<td id="t8up1"><input type='button' value='↟' onclick='status("t8", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t8", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t8", 11)'/></td>
							<td></td>
							<td id="t8up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t8", 4)'/></td>
						</tr>
						<tr>
							<td id="t8l1"><input type='button' value='↞' onclick='status("t8", 12)'/></td>
							<td id="t8l2"></td>
							<td id="t8">0</td>
							<td id="t8r2"></td>
							<td id="t8r1"><input type='button' value='↠' onclick='status("t8", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t8", 10)'/></td>
							<td></td>
							<td id="t8dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t8", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t8", 7)'/></td>
							<td id="t8dw1"><input type='button' value='↡' onclick='status("t8", 9)'/></td>
							<td><input type='button' value='↳' onclick='status("t8", 8)'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='status("t9", 2)'/></td>
							<td id="t9up1"><input type='button' value='↟' onclick='status("t9", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t9", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t9", 11)'/></td>
							<td></td>
							<td id="t9up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t9", 4)'/></td>
						</tr>
						<tr>
							<td id="t9l1"><input type='button' value='↞' onclick='status("t9", 12)'/></td>
							<td id="t9l2"></td>
							<td id="t9">0</td>
							<td id="t9r2"></td>
							<td id="t9r1"><input type='button' value='↠' onclick='status("t9", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t9", 10)'/></td>
							<td></td>
							<td id="t9dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t9", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t9", 7)'/></td>
							<td id="t9dw1"><input type='button' value='↡' onclick='status("t9", 9)'/></td>
							<td><input type='button' value='↳' onclick='status("t9", 8)'/></td>
							<td></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='status("t10", 2)'/></td>
							<td id="t10up1"><input type='button' value='↟' onclick='status("t10", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t10", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t10", 11)'/></td>
							<td></td>
							<td id="t10up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t10", 4)'/></td>
						</tr>
						<tr>
							<td id="t10l1"><input type='button' value='↞' onclick='status("t10", 12)'/></td>
							<td id="t10l2"></td>
							<td id="t10">0</td>
							<td id="t10r2"></td>
							<td id="t10r1"><input type='button' value='↠' onclick='status("t10", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t10", 10)'/></td>
							<td></td>
							<td id="t10dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t10", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t10", 7)'/></td>
							<td id="t10dw1"><input type='button' value='↡' onclick='status("t10", 9)'/></td>
							<td><input type='button' value='↳' onclick='status("t10", 8)'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='status("t11", 2)'/></td>
							<td id="t11up1"><input type='button' value='↟' onclick='status("t11", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t11", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t11", 11)'/></td>
							<td></td>
							<td id="t11up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t11", 4)'/></td>
						</tr>
						<tr>
							<td id="t11l1"><input type='button' value='↞' onclick='status("t11", 12)'/></td>
							<td id="t11l2"></td>
							<td id="t11">0</td>
							<td id="t11r2"></td>
							<td id="t11r1"><input type='button' value='↠' onclick='status("t11", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t11", 10)'/></td>
							<td></td>
							<td id="t11dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t11", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t12", 7)'/></td>
							<td id="t12dw1"><input type='button' value='↡' onclick='status("t12", 9)'/></td>
							<td><input type='button' value='↳' onclick='status("t12", 8)'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='status("t12", 2)'/></td>
							<td id="t12up1"><input type='button' value='↟' onclick='status("t12", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t12", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t12", 11)'/></td>
							<td></td>
							<td id="t12up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t12", 4)'/></td>
						</tr>
						<tr>
							<td id="t12l1"><input type='button' value='↞' onclick='status("t12", 12)'/></td>
							<td id="t12l2"></td>
							<td id="t12">0</td>
							<td id="t12r2"></td>
							<td id="t12r1"><input type='button' value='↠' onclick='status("t12", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t12", 10)'/></td>
							<td></td>
							<td id="t12dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t12", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t12", 7)'/></td>
							<td id="t12dw1"><input type='button' value='↡' onclick='status("t12", 9)'/></td>
							<td><input type='button' value='↳' onclick='status("t12", 8)'/></td>
							<td></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>			
	</body>
	<script src="https://code.jquery.com/jquery.min.js"></script>
	<script>
		function mysql_conn(){
			$.ajax({
				type: "GET",
				url: "getMysql.php"
			}).done(function(data){
				$("#outputa").text(data);
				var info_temp = document.getElementById('outputa').innerText;
			
				var contact = JSON.parse(info_temp);
				var status_list = "light: "+contact["light01"]+" "+contact["light02"];
				status_list  +=  " " + contact["light03"] + " " + contact["light04"];
				status_list  +=  " " + contact["light05"] + " " + contact["light06"];
				status_list  +=  " " + contact["light07"] + " " + contact["light08"];
				status_list  +=  " " + contact["light09"] + " " + contact["light10"];
				status_list  +=  " " + contact["light11"] + " " + contact["light12"];
				
				document.getElementById('outputt').innerHTML = status_list;
				
				status("t1", contact["light01"]);
				status("t2", contact["light02"]);
				status("t3", contact["light03"]);
				status("t4", contact["light04"]);
				status("t5", contact["light05"]);
				status("t6", contact["light06"]);
				status("t7", contact["light07"]);
				status("t8", contact["light08"]);
				status("t9", contact["light09"]);
				status("t10", contact["light10"]);
				status("t11", contact["light11"]);
				status("t12", contact["light12"]);
			});
			
		}
		
		function status($traffic, $light){
			alert($traffic+" "+$light);
			document.getElementById($traffic).innerHTML = $light;
			
			// reset
			document.getElementById($traffic).style.backgroundColor = "white";
			document.getElementById($traffic+"up1").style.backgroundColor = "white";
			document.getElementById($traffic+"up2").style.backgroundColor = "white";
			document.getElementById($traffic+"dw1").style.backgroundColor = "white";
			document.getElementById($traffic+"dw2").style.backgroundColor = "white";
			document.getElementById($traffic+"l1").style.backgroundColor = "white";
			document.getElementById($traffic+"l2").style.backgroundColor = "white";
			document.getElementById($traffic+"r1").style.backgroundColor = "white";
			document.getElementById($traffic+"r2").style.backgroundColor = "white";
			
			if($light != 0){ // go
			alert($traffic+" "+$light);
				document.getElementById($traffic).style.backgroundColor = "gray";
			}
			
			if($light == 1){ //up right
			alert($traffic+" "+$light);
				document.getElementById($traffic+"dw1").style.backgroundColor = "gray";
				document.getElementById($traffic+"dw2").style.backgroundColor = "gray";
				document.getElementById($traffic+"r1").style.backgroundColor = "gray";
				document.getElementById($traffic+"r2").style.backgroundColor = "gray";
			}
			else if($light == 2){ // up left
			alert($traffic+" "+$light);
				document.getElementById($traffic+"dw1").style.backgroundColor = "gray";
				document.getElementById($traffic+"dw2").style.backgroundColor = "gray";
				document.getElementById($traffic+"l1").style.backgroundColor = "gray";
				document.getElementById($traffic+"l2").style.backgroundColor = "gray";
			}
			else if($light == 3){ // up up
			alert($traffic+" "+$light);
				document.getElementById($traffic+"dw1").style.backgroundColor = "gray";
				document.getElementById($traffic+"dw2").style.backgroundColor = "gray";
				document.getElementById($traffic+"up1").style.backgroundColor = "gray";
				document.getElementById($traffic+"up2").style.backgroundColor = "gray";
			}
			else if($light == 4){ // right up
			alert($traffic+" "+$light);
				document.getElementById($traffic+"l1").style.backgroundColor = "gray";
				document.getElementById($traffic+"l2").style.backgroundColor = "gray";
				document.getElementById($traffic+"up1").style.backgroundColor = "gray";
				document.getElementById($traffic+"up2").style.backgroundColor = "gray";
			}
			else if($light == 5){ // right down
			alert($traffic+" "+$light);
				document.getElementById($traffic+"l1").style.backgroundColor = "gray";
				document.getElementById($traffic+"l2").style.backgroundColor = "gray";
				document.getElementById($traffic+"dw1").style.backgroundColor = "gray";
				document.getElementById($traffic+"dw2").style.backgroundColor = "gray";
			}
			else if($light == 6){ // right right
			alert($traffic+" "+$light);
				document.getElementById($traffic+"l1").style.backgroundColor = "gray";
				document.getElementById($traffic+"l2").style.backgroundColor = "gray";
				document.getElementById($traffic+"r1").style.backgroundColor = "gray";
				document.getElementById($traffic+"r2").style.backgroundColor = "gray";
			}
			else if($light == 7){ // down left
			alert($traffic+" "+$light);
				document.getElementById($traffic+"up1").style.backgroundColor = "gray";
				document.getElementById($traffic+"up2").style.backgroundColor = "gray";
				document.getElementById($traffic+"l1").style.backgroundColor = "gray";
				document.getElementById($traffic+"l2").style.backgroundColor = "gray";
			}
			else if($light == 8){ // down right
			alert($traffic+" "+$light);
				document.getElementById($traffic+"up1").style.backgroundColor = "gray";
				document.getElementById($traffic+"up2").style.backgroundColor = "gray";
				document.getElementById($traffic+"r1").style.backgroundColor = "gray";
				document.getElementById($traffic+"r2").style.backgroundColor = "gray";
			}
			else if($light == 9){ // down down
			alert($traffic+" "+$light);
				document.getElementById($traffic+"up1").style.backgroundColor = "gray";
				document.getElementById($traffic+"up2").style.backgroundColor = "gray";
				document.getElementById($traffic+"dw1").style.backgroundColor = "gray";
				document.getElementById($traffic+"dw2").style.backgroundColor = "gray";
			}
			else if($light == 10){ // left down
			alert($traffic+" "+$light);
				document.getElementById($traffic+"r1").style.backgroundColor = "gray";
				document.getElementById($traffic+"r2").style.backgroundColor = "gray";
				document.getElementById($traffic+"dw1").style.backgroundColor = "gray";
				document.getElementById($traffic+"dw2").style.backgroundColor = "gray";
			}
			else if($light == 11){ // left up
			alert($traffic+" "+$light);
				document.getElementById($traffic+"r1").style.backgroundColor = "gray";
				document.getElementById($traffic+"r2").style.backgroundColor = "gray";
				document.getElementById($traffic+"up1").style.backgroundColor = "gray";
				document.getElementById($traffic+"up2").style.backgroundColor = "gray";
			}
			else if($light == 12){ // left left
			alert($traffic+" "+$light);
				document.getElementById($traffic+"r1").style.backgroundColor = "gray";
				document.getElementById($traffic+"r2").style.backgroundColor = "gray";
				document.getElementById($traffic+"l1").style.backgroundColor = "gray";
				document.getElementById($traffic+"l2").style.backgroundColor = "gray";
			}
		}

	</script>
</html>
	
	
