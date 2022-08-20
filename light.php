<?php
	function test($traffic, $light){
		echo "<script>alert({$traffic})</script>";
	}
			
?>
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
	</body>
</html>
	
	
