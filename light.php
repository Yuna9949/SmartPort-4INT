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
							<td class="up1"><input type='button' value='↟' onclick='status("t1", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t1", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t1", 11)'/></td>
							<td></td>
							<td class="up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t1", 4)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='status("t1", 12)'/></td>
							<td></td>
							<td class="mid" id="t1">0</td>
							<td></td>
							<td><input type='button' value='↠' onclick='status("t1", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t1", 10)'/></td>
							<td></td>
							<td class="dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t1", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t1", 7)'/></td>
							<td class="dw1"><input type='button' value='↡' onclick='status("t1", 9)'/></td>
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
							<td class="up1"><input type='button' value='↟' onclick='status("t2", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t2", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t2", 11)'/></td>
							<td></td>
							<td class="up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t2", 4)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='status("t2", 12)'/></td>
							<td></td>
							<td class="mid" id="t2">0</td>
							<td></td>
							<td><input type='button' value='↠' onclick='status("t2", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t2", 10)'/></td>
							<td></td>
							<td class="dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t2", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t2", 7)'/></td>
							<td class="dw1"><input type='button' value='↡' onclick='status("t2", 9)'/></td>
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
							<td class="up1"><input type='button' value='↟' onclick='status("t3", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t3", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t3", 11)'/></td>
							<td></td>
							<td class="up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t3", 4)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='status("t3", 12)'/></td>
							<td></td>
							<td class="mid" id="t3">0</td>
							<td></td>
							<td><input type='button' value='↠' onclick='status("t3", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t3", 10)'/></td>
							<td></td>
							<td class="dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t3", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t3", 7)'/></td>
							<td class="dw1"><input type='button' value='↡' onclick='status("t3", 9)'/></td>
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
							<td class="up1"><input type='button' value='↟' onclick='status("t4", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t4", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t4", 11)'/></td>
							<td></td>
							<td class="up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t4", 4)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='status("t4", 12)'/></td>
							<td></td>
							<td class="mid" id="t4">0</td>
							<td></td>
							<td><input type='button' value='↠' onclick='status("t4", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t4", 10)'/></td>
							<td></td>
							<td class="dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t4", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t4", 7)'/></td>
							<td class="dw1"><input type='button' value='↡' onclick='status("t4", 9)'/></td>
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
							<td class="up1"><input type='button' value='↟' onclick='status("t5", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t5", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t5", 11)'/></td>
							<td></td>
							<td class="mid" class="up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t5", 4)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='status("t5", 12)'/></td>
							<td></td>
							<td class="mid" id="t5">0</td>
							<td></td>
							<td><input type='button' value='↠' onclick='status("t5", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t5", 10)'/></td>
							<td></td>
							<td class="dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t5", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t5", 7)'/></td>
							<td class="dw1"><input type='button' value='↡' onclick='status("t5", 9)'/></td>
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
							<td class="up1"><input type='button' value='↟' onclick='status("t6", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t6", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t6", 11)'/></td>
							<td></td>
							<td class="up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t6", 4)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='status("t6", 12)'/></td>
							<td></td>
							<td class="mid" id="t6">0</td>
							<td></td>
							<td><input type='button' value='↠' onclick='status("t6", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t6", 10)'/></td>
							<td></td>
							<td class="dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t6", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t6", 7)'/></td>
							<td class="dw1"><input type='button' value='↡' onclick='status("t6", 9)'/></td>
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
							<td class="up1"><input type='button' value='↟' onclick='status("t7", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t7", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t7", 11)'/></td>
							<td></td>
							<td class="up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t7", 4)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='status("t7", 12)'/></td>
							<td></td>
							<td class="mid" id="t7">0</td>
							<td></td>
							<td><input type='button' value='↠' onclick='status("t7", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t7", 10)'/></td>
							<td></td>
							<td class="dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t7", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t7", 7)'/></td>
							<td class="dw1"><input type='button' value='↡' onclick='status("t7", 9)'/></td>
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
							<td class="up1"><input type='button' value='↟' onclick='status("t8", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t8", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t8", 11)'/></td>
							<td></td>
							<td class="up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t8", 4)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='status("t8", 12)'/></td>
							<td></td>
							<td class="mid" id="t8">0</td>
							<td></td>
							<td><input type='button' value='↠' onclick='status("t8", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t8", 10)'/></td>
							<td></td>
							<td class="dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t8", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t8", 7)'/></td>
							<td class="dw1"><input type='button' value='↡' onclick='status("t8", 9)'/></td>
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
							<td class="up1"><input type='button' value='↟' onclick='status("t9", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t9", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t9", 11)'/></td>
							<td></td>
							<td class="up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t9", 4)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='status("t9", 12)'/></td>
							<td></td>
							<td class="mid" id="t9">0</td>
							<td></td>
							<td><input type='button' value='↠' onclick='status("t9", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t9", 10)'/></td>
							<td></td>
							<td class="dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t9", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t9", 7)'/></td>
							<td class="dw1"><input type='button' value='↡' onclick='status("t9", 9)'/></td>
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
							<td class="up1"><input type='button' value='↟' onclick='status("t10", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t10", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t10", 11)'/></td>
							<td></td>
							<td class="up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t10", 4)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='status("t10", 12)'/></td>
							<td></td>
							<td class="mid" id="t10">0</td>
							<td></td>
							<td><input type='button' value='↠' onclick='status("t10", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t10", 10)'/></td>
							<td></td>
							<td class="dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t10", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t10", 7)'/></td>
							<td class="dw1"><input type='button' value='↡' onclick='status("t10", 9)'/></td>
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
							<td class="up1"><input type='button' value='↟' onclick='status("t11", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t11", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t11", 11)'/></td>
							<td></td>
							<td class="up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t11", 4)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='status("t11", 12)'/></td>
							<td></td>
							<td class="mid" id="t11">0</td>
							<td></td>
							<td><input type='button' value='↠' onclick='status("t11", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t11", 10)'/></td>
							<td></td>
							<td class="dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t11", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t11", 7)'/></td>
							<td class="dw1"><input type='button' value='↡' onclick='status("t11", 9)'/></td>
							<td><input type='button' value='↳' onclick='status("t11", 8)'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='status("t12", 2)'/></td>
							<td class="up1"><input type='button' value='↟' onclick='status("t12", 3)'/></td>
							<td><input type='button' value='↱' onclick='status("t12", 1)'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='status("t12", 11)'/></td>
							<td></td>
							<td class="up2"></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='status("t12", 4)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='status("t12", 12)'/></td>
							<td></td>
							<td class="mid" id="t12">0</td>
							<td></td>
							<td><input type='button' value='↠' onclick='status("t12", 6)'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='status("t12", 10)'/></td>
							<td></td>
							<td class="dw2"></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='status("t12", 5)'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='status("t12", 7)'/></td>
							<td class="dw1"><input type='button' value='↡' onclick='status("t12", 9)'/></td>
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
			document.getElementById($traffic).innerHTML = $light;
		}

	</script>
</html>
	
	
