<?php
// Range.php
if(isset($_POST["From"], $_POST["to"]))
{
	$conn = mysqli_connect("localhost", "root", "ain6314", "diagnosis");
	$result = '';
	$query = "SELECT * FROM diagnos_awal WHERE tarikh BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
	$sql = mysqli_query($conn, $query);
	$result .='
	<table class="table table-bordered">
	<tr>
	<th width="1%">No. Tentera</th>
	<th width="1%">Tarikh</th>
	<th width="1%">Bp</th>
	<th width="1%">Pulse</th>
	<th width="1%">Pr</th>
	<th width="1%">Suhu</th>
	</tr>';
	if(mysqli_num_rows($sql) > 0)
	{
		while($row = mysqli_fetch_array($sql))
		{
			$result .='
			<tr>
			<td>'.$row["no_tentera"].'</td>
			<td>'.$row["tarikh"].'</td>
			<td>'.$row["bp"].'</td>
			<td>'.$row["pulse"].'</td>
			<td>'.$row["pr"].'</td>
			<td>'.$row["suhu"].'</td>
			</tr>';
		}
	}
	else
	{
		$result .='
		<tr>
		<td colspan="6">No Data Found</td>
		</tr>';
	}
	$result .='</table>';
	echo $result;
}
?>