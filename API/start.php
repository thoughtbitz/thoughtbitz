<?php
	class check{
		function check_login($userids,$connection){
	
			mysqli_select_db($connection,'epiz_26661878_thoughts');
			$querytocheck="select login_activity from user where userid='$userids'";
			$result=mysqli_query($connection,$querytocheck);
			$arrayconvert=mysqli_fetch_array($result);
			$dfg=json_encode($arrayconvert);
			return $arrayconvert['login_activity'];
		}
        function getidfrom($email,$connection){
          
            $query="SELECT * FROM user where SUBSTRING(email,1,POSITION('@' IN email)-1)='$email'";
            $re=mysqli_query($connection,$query);
            $arrayconvert1=mysqli_fetch_array($re);
            return $arrayconvert1['userid'];
        }
	}
?>