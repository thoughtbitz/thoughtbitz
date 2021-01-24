<?php
include '../database.php';
$output = '';
mysqli_select_db($_SESSION['connection'],"epiz_26661878_thoughts");
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($_SESSION['connection'], $_POST["query"]);
	$query = "SELECT * FROM blogs 
	WHERE blogtitle LIKE '%".$search."%'
	OR datetime LIKE '%".$search."%' 
	";

}
$result = mysqli_query($_SESSION['connection'], $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<table class="table table bordered">';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td onclick="putin(this)" style="font-size:1.3rem;color:white;background:black">'.substr($row["blogtitle"],0,20).'</td>
			</tr>
		';

	}
    $output.='</table>';
	echo $output;
}
else
{
	
}
?>