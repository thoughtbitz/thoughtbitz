<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://code.jquery.com/jquery-3.5.1.js">


                </script>
</head>

<body>
	<?php
		$userid="Darsh Jasani";
		$course="ThoughtBitz Java Course";
	?>
	<div id="display_certi"><img src="certi.php?userid=<?php echo $userid;?>"></div>
<a href="certi.php?userid=<?php echo $userid;?>" download>getmycerti</a>
</body>
<script>
// $(document).ready(function(){
// 		$.ajax({
// 			url:"certi.php",
// 			method:"POST",
// 			success:function(data){
// 				$("img").attr("src",data);
// 			}
// 		});
// });
</script>
</html>