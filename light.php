<html>
	<head>
		<title>traffic light</title>
	</head>
	<body>
		<table border = "1">
			<tr>
				<td>
					<table>
						<tr>
							<td></td>
							<td><input type='button' value='↰' onclick='test("light01",2)'/></td>
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
							<td>↰</td>
							<td>↟</td>
							<td>↱</td>
							<td></td>
						</tr>
						<tr>
							<td>↻</td>
							<td></td>
							<td></td>
							<td></td>
							<td>⤴</td>
						</tr>
						<tr>
							<td>↞</td>
							<td></td>
							<td>2</td>
							<td></td>
							<td>↠</td>
						</tr>
						<tr>
							<td>↶</td>
							<td></td>
							<td></td>
							<td></td>
							<td>⤵</td>
						</tr>
						<tr>
							<td></td>
							<td>↲</td>
							<td>↡</td>
							<td>↳</td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td></td>
							<td>↰</td>
							<td>↟</td>
							<td>↱</td>
							<td></td>
						</tr>
						<tr>
							<td>↻</td>
							<td></td>
							<td></td>
							<td></td>
							<td>⤴</td>
						</tr>
						<tr>
							<td>↞</td>
							<td></td>
							<td>3</td>
							<td></td>
							<td>↠</td>
						</tr>
						<tr>
							<td>↶</td>
							<td></td>
							<td></td>
							<td></td>
							<td>⤵</td>
						</tr>
						<tr>
							<td></td>
							<td>↲</td>
							<td>↡</td>
							<td>↳</td>
							<td></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
			</tr>
		</table>	
		<?php
			function test($traffic, $light){
				echo "<script>alert({$traffic})</script>";
			}
			function mysql_conn($traffic, $light){
				$conn = mysqli_connect("localhost","root","smartport4int","test");

				$sql = "SELECT * FROM traffic ORDER BY time DESC";
				$result = mysqli_query($conn, $sql);

				$row = mysqli_fetch_assoc($result);
					
				//$row[$traffic] = $light;
					
				echo "<script>alert({$row['light01']})</script>";
		
				$sql = "INSERT INTO traffic ( 
						light01, light02, light03, 
						light04, light05, light06, 
						light07, light08, light09, 
						light10, light11, light12, time
					) VALUES (
						$row['light01'], $row['light02'], $row['light03'],
						$row['light04'], $row['light05'], $row['light06'],
						$row['light07'], $row['light08'], $row['light09'],
						$row['light10'], $row['light11'], $row['light12'], NOW()
					)"
		
				//mysqli_query($conn, $sql);
				mysqli_free_result($result);
				mysqli_close($conn);
			}
		?>
			
	</body>
</html>
	
	
