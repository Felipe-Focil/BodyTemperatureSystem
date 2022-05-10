<?php 
				$id = $_GET["Id"];
				echo '<h1>'.$id.'</h1>';
				$query = "SELECT id FROM `temperature_history` WHERE id = $id";
				$result = mysqli_query($conex,$query); 
                echo '<table border="0" width="80%" height="90%" align="center">
                <tr>
                    <th align="center">Day</td>
                    <th align="center">Temperature</td>
                </tr>
                <tr>
					<td>'.$result["mon"].'</td>
					<td>'.$result["tue"].'</td>
					<td>'.$result["wen"].'</td>
					<td>'.$result["thr"].'</td>
					<td>'.$result["fri"].'</td>
					<td>'.$result["sat"].'</td>
					<td>'.$result["sun"].'</td>
					</tr>	</table>
					'

					;
		?>