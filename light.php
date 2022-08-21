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
			dobument.getElementById($traffic).getElementsByTagName("td").style.backgroundColor = "red";
		}

	</script>
</html>
	
	
