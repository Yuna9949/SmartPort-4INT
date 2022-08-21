<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport"
			content="width=device-width, height=device-height,
			minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
		<title>traffic light</title>
		<script type="text/javascript">
			function conn(){
				alert("conn");
				mysql_conn();
			}
		</script>
	</head>
	<body>
		<div id = "testbox">
			<p id="outputt"></p>
			<p id="outputa"></p>
			<input type='button' value='mysql_conn' onclick='conn()'/>
		</div>
		
		<table border = "1">
			<tr>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='alert("up left 2")'/></td>
							<td><input type='button' value='↟' onclick='alert("up up 3")'/></td>
							<td><input type='button' value='↱' onclick='alert("up right 1")'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='alert("left up 11")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='alert("right up 4")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='alert("left left 12")'/></td>
							<td></td>
							<td>1</td>
							<td></td>
							<td><input type='button' value='↠' onclick='alert("right right 6")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='alert("left down 10")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='alert("right down 5")'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='alert("down left 7")'/></td>
							<td><input type='button' value='↡' onclick='alert("down down 9")'/></td>
							<td><input type='button' value='↳' onclick='alert("down right 8")'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='alert("up left 2")'/></td>
							<td><input type='button' value='↟' onclick='alert("up up 3")'/></td>
							<td><input type='button' value='↱' onclick='alert("up right 1")'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='alert("left up 11")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='alert("right up 4")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='alert("left left 12")'/></td>
							<td></td>
							<td>2</td>
							<td></td>
							<td><input type='button' value='↠' onclick='alert("right right 6")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='alert("left down 10")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='alert("right down 5")'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='alert("down left 7")'/></td>
							<td><input type='button' value='↡' onclick='alert("down down 9")'/></td>
							<td><input type='button' value='↳' onclick='alert("down right 8")'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='alert("up left 2")'/></td>
							<td><input type='button' value='↟' onclick='alert("up up 3")'/></td>
							<td><input type='button' value='↱' onclick='alert("up right 1")'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='alert("left up 11")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='alert("right up 4")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='alert("left left 12")'/></td>
							<td></td>
							<td>3</td>
							<td></td>
							<td><input type='button' value='↠' onclick='alert("right right 6")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='alert("left down 10")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='alert("right down 5")'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='alert("down left 7")'/></td>
							<td><input type='button' value='↡' onclick='alert("down down 9")'/></td>
							<td><input type='button' value='↳' onclick='alert("down right 8")'/></td>
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
							<td><input type='button' value='↰' onclick='alert("up left 2")'/></td>
							<td><input type='button' value='↟' onclick='alert("up up 3")'/></td>
							<td><input type='button' value='↱' onclick='alert("up right 1")'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='alert("left up 11")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='alert("right up 4")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='alert("left left 12")'/></td>
							<td></td>
							<td>4</td>
							<td></td>
							<td><input type='button' value='↠' onclick='alert("right right 6")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='alert("left down 10")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='alert("right down 5")'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='alert("down left 7")'/></td>
							<td><input type='button' value='↡' onclick='alert("down down 9")'/></td>
							<td><input type='button' value='↳' onclick='alert("down right 8")'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='alert("up left 2")'/></td>
							<td><input type='button' value='↟' onclick='alert("up up 3")'/></td>
							<td><input type='button' value='↱' onclick='alert("up right 1")'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='alert("left up 11")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='alert("right up 4")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='alert("left left 12")'/></td>
							<td></td>
							<td>5</td>
							<td></td>
							<td><input type='button' value='↠' onclick='alert("right right 6")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='alert("left down 10")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='alert("right down 5")'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='alert("down left 7")'/></td>
							<td><input type='button' value='↡' onclick='alert("down down 9")'/></td>
							<td><input type='button' value='↳' onclick='alert("down right 8")'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='alert("up left 2")'/></td>
							<td><input type='button' value='↟' onclick='alert("up up 3")'/></td>
							<td><input type='button' value='↱' onclick='alert("up right 1")'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='alert("left up 11")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='alert("right up 4")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='alert("left left 12")'/></td>
							<td></td>
							<td>6</td>
							<td></td>
							<td><input type='button' value='↠' onclick='alert("right right 6")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='alert("left down 10")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='alert("right down 5")'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='alert("down left 7")'/></td>
							<td><input type='button' value='↡' onclick='alert("down down 9")'/></td>
							<td><input type='button' value='↳' onclick='alert("down right 8")'/></td>
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
							<td><input type='button' value='↰' onclick='alert("up left 2")'/></td>
							<td><input type='button' value='↟' onclick='alert("up up 3")'/></td>
							<td><input type='button' value='↱' onclick='alert("up right 1")'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='alert("left up 11")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='alert("right up 4")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='alert("left left 12")'/></td>
							<td></td>
							<td>7</td>
							<td></td>
							<td><input type='button' value='↠' onclick='alert("right right 6")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='alert("left down 10")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='alert("right down 5")'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='alert("down left 7")'/></td>
							<td><input type='button' value='↡' onclick='alert("down down 9")'/></td>
							<td><input type='button' value='↳' onclick='alert("down right 8")'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='alert("up left 2")'/></td>
							<td><input type='button' value='↟' onclick='alert("up up 3")'/></td>
							<td><input type='button' value='↱' onclick='alert("up right 1")'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='alert("left up 11")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='alert("right up 4")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='alert("left left 12")'/></td>
							<td></td>
							<td>8</td>
							<td></td>
							<td><input type='button' value='↠' onclick='alert("right right 6")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='alert("left down 10")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='alert("right down 5")'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='alert("down left 7")'/></td>
							<td><input type='button' value='↡' onclick='alert("down down 9")'/></td>
							<td><input type='button' value='↳' onclick='alert("down right 8")'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='alert("up left 2")'/></td>
							<td><input type='button' value='↟' onclick='alert("up up 3")'/></td>
							<td><input type='button' value='↱' onclick='alert("up right 1")'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='alert("left up 11")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='alert("right up 4")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='alert("left left 12")'/></td>
							<td></td>
							<td>9</td>
							<td></td>
							<td><input type='button' value='↠' onclick='alert("right right 6")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='alert("left down 10")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='alert("right down 5")'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='alert("down left 7")'/></td>
							<td><input type='button' value='↡' onclick='alert("down down 9")'/></td>
							<td><input type='button' value='↳' onclick='alert("down right 8")'/></td>
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
							<td><input type='button' value='↰' onclick='alert("up left 2")'/></td>
							<td><input type='button' value='↟' onclick='alert("up up 3")'/></td>
							<td><input type='button' value='↱' onclick='alert("up right 1")'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='alert("left up 11")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='alert("right up 4")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='alert("left left 12")'/></td>
							<td></td>
							<td>10</td>
							<td></td>
							<td><input type='button' value='↠' onclick='alert("right right 6")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='alert("left down 10")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='alert("right down 5")'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='alert("down left 7")'/></td>
							<td><input type='button' value='↡' onclick='alert("down down 9")'/></td>
							<td><input type='button' value='↳' onclick='alert("down right 8")'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='alert("up left 2")'/></td>
							<td><input type='button' value='↟' onclick='alert("up up 3")'/></td>
							<td><input type='button' value='↱' onclick='alert("up right 1")'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='alert("left up 11")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='alert("right up 4")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='alert("left left 12")'/></td>
							<td></td>
							<td>11</td>
							<td></td>
							<td><input type='button' value='↠' onclick='alert("right right 6")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='alert("left down 10")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='alert("right down 5")'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='alert("down left 7")'/></td>
							<td><input type='button' value='↡' onclick='alert("down down 9")'/></td>
							<td><input type='button' value='↳' onclick='alert("down right 8")'/></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='alert("up left 2")'/></td>
							<td><input type='button' value='↟' onclick='alert("up up 3")'/></td>
							<td><input type='button' value='↱' onclick='alert("up right 1")'/></td>
							<td></td>
						</tr>
						<tr>
							<td><input type='button' value='↻' onclick='alert("left up 11")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤴' onclick='alert("right up 4")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↞' onclick='alert("left left 12")'/></td>
							<td></td>
							<td>12</td>
							<td></td>
							<td><input type='button' value='↠' onclick='alert("right right 6")'/></td>
						</tr>
						<tr>
							<td><input type='button' value='↶' onclick='alert("left down 10")'/></td>
							<td></td>
							<td></td>
							<td></td>
							<td><input type='button' value='⤵' onclick='alert("right down 5")'/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='button' value='↲' onclick='alert("down left 7")'/></td>
							<td><input type='button' value='↡' onclick='alert("down down 9")'/></td>
							<td><input type='button' value='↳' onclick='alert("down right 8")'/></td>
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
			alert("mysql_conn");
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

	</script>
</html>
	
	
