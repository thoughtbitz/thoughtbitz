<?php
    include '../database.php';
    $b = $_COOKIE['userid'];
    $con=$_SESSION['connection'];
    $con1=mysqli_select_db($_SESSION['connection'],"epiz_26661878_thoughts");
    if(!$con1){
      echo" connection unsuccessful";
    }
    $lid = urlencode(base64_encode("dashboard".'3'."viewposts"));
?>
<!DOCTYPE html>
<html>
<head>
	<title>ThoughtBitz Quiz</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="icon" href="https://www.thoughtbitz.ml/img/icon-official-favicon-thoughtBitz-459832xzc.png" type="image/x-icon">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</head>
	<style type="text/css">
		@media screen and (max-width: 767px) {
     			body{
     				font-size: .9rem;
     			}
     			nav{
     				font-weight: bold;
     			}
    	}
    	@media screen and (min-width: 767px){
    			body{
    				font-size: 1.7rem;
    			}
    			nav{
    				font-weight: bold;
    			}
    	}
    	.card{
    		box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
    	}
	</style>
 <script type="text/javascript">
		var total = [0,0,0,0,0,0,0,0,0,0];
		var sum=0;
		var i=0,val=0;
		function viewbtn(){
		//		document.getElementById("bt1").style.visibility="hidden";
		}
		function changebro(e){
			/*document.getElementById("hii").innerHTML=total[0];*/
		
			switch(e){
				case e=1:
					if(f1.monil1.value=="A"){
						total[0]=1;
					}	
					else{
						total[0]=0;
					}	
					document.getElementById("p1").style.background="#E3E71A";
					//alert(total[0]);
					++val;
				break;

				case e=2:
					if(f1.monil2.value=="A"){
						total[1]=1;
					}	
					else{
						total[1]=0;
					}	
					document.getElementById("p2").style.background="#E3E71A";
					//alert(total[1]);
					++val;
				break;

				case e=3:
					if(f1.monil3.value=="A"){
						total[2]=1;
					}	
					else{
						total[2]=0;
					}	
					
					document.getElementById("p3").style.background="#E3E71A";
					++val;
				break;


				case e=4:
					if(f1.monil4.value=="A"){
						total[3]=1;
					}	
					else{
						total[3]=0;
					}	
					
					document.getElementById("p4").style.background="#E3E71A";
					++val;
				break;

				case e=5:
					if(f1.monil5.value=="A"){
						total[4]=1;
					}	
					else{
						total[4]=0;
					}	
					
					document.getElementById("p5").style.background="#E3E71A";
					++val;
				break;


				case e=6:
					if(f1.monil6.value=="A"){
						total[5]=1;
					}	
					else{
						total[5]=0;
					}	
					
					document.getElementById("p6").style.background="#E3E71A";
					++val;
				break;

				case e=7:
					if(f1.monil7.value=="A"){
						total[6]=1;
					}	
					else{
						total[6]=0;
					}	
					
					document.getElementById("p7").style.background="#E3E71A";
					++val;
				break;

				case e=8:
					if(f1.monil8.value=="A"){
						total[7]=1;
					}	
					else{
						total[7]=0;
					}	
					
					document.getElementById("p8").style.background="#E3E71A";
					++val;
				break;

				case e=9:
					if(f1.monil9.value=="A"){
						total[8]=1;
					}	
					else{
						total[8]=0;
					}	
					
					document.getElementById("p9").style.background="#E3E71A";
					++val;
				break;

				case e=10:
					if(f1.monil10.value=="A"){
						total[9]=1;
					}	
					else{
						total[9]=0;
					}	
					
					document.getElementById("p10").style.background="#E3E71A";
					++val;
				break;
				default :
					document.write("Enter in given option");	
			}
			if(val==10){
				document.getElementById("bt1").disabled=false;
				document.getElementById("bt1").style.background="green";
			}
		}
		
		function finale(){
			
				for(i=0;i<total.length;++i){
					if(total[i]==1){
						document.getElementById("p"+(i+1)).style.background="#74EE67";
					}
					else{
						document.getElementById("p"+(i+1)).style.background="#EE7367";
					}
					sum +=total[i];
				}
                alert("You have Scored : "+sum);
                if(sum >=6){    
                    alert("Hurray!! You have passed the quiz");
                   window.location.assign("check.php?lid=<?php echo $lid; ?>");
                }
				else{
                    alert("Your Score is less then 6.Please try again!!");
                    window.location.assign("quiz.php");
                }
				
			
		}
        function back(){
            window.location.assign("card_structure.php");
        }
</script>

<body onload="viewbtn()">
	<nav aria-label="Page navigation example" >
		  <ul class="pagination justify-content-center">
		    <li class="page-item"><a class="page-link" href="#a1" tabindex="-1" id="p1">1</a></li>
		    <li class="page-item"><a class="page-link" href="#a2" id="p2">2</a></li>
		    <li class="page-item"><a class="page-link" href="#a3" id="p3">3</a></li>
		    <li class="page-item"><a class="page-link" href="#a4" id="p4">4</a></li>
		    <li class="page-item"><a class="page-link" href="#a5" id="p5">5</a></li>
		    <li class="page-item"><a class="page-link" href="#a6" id="p6">6</a></li>
		    <li class="page-item"><a class="page-link" href="#a7" id="p7">7</a></li>
		    <li class="page-item"><a class="page-link" href="#a8" id="p8">8</a></li>
		    <li class="page-item"><a class="page-link" href="#a9" id="p9">9</a></li>
		    <li class="page-item"><a class="page-link" href="#a10" id="p10">10</a></li>
		  </ul>
	</nav>
	<div class="container">
		<div>
				<h1>Instructions*:-</h1>
				<nav aria-label="Page navigation example" >
				  <ul class="pagination justify-content-center" style="display: block;">
				  	<li class="page-item disabled" ><a style="background-color:" class="page-link" href="#" >&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;:-&nbsp;Not Attained</li><br></br>
				   	<li class="page-item disabled" ><a style="background-color:#E3E71A" class="page-link" href="#" >&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;:-&nbsp;Attained</li><br></br>
					<li class="page-item disabled" ><a style="background-color:#74EE67" class="page-link" href="#" >&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;:-&nbsp;Correct</li><br></br>
					<li class="page-item disabled" ><a style="background-color:#EE7367" class="page-link" href="#" >&nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;:-&nbsp;Incorrect</li><br></br>
				    
				  </ul>
				</nav>  
		</div>  
	
		<form name="f1"  method="POST"> 
				<div onchange="changebro(1)" class="card text-center py-3" id="a1">
					<div class="card-title" style="font-weight: bold;">1.&nbsp;What is C Programming?</div>
						<div class="card-text">A. <input type="radio" name="monil1" id="monil1" value="A"> Program</div>
						<div class="card-text">B. <input type="radio" name="monil1" id="monil2" value="B"> Program</div>
						<div class="card-text">C. <input type="radio" name="monil1" id="monil3" value="C"> Program</div>
						<div class="card-text">D. <input type="radio" name="monil1" id="monil4" value="D"> Program</div>
				</div>

				<div onchange="changebro(2)" class="card text-center mt-5 py-3" id="a2">
					<div class="card-title" style="font-weight: bold;">2.&nbsp;What is C Programming?</div>
					<div class="card-text">A. <input type="radio" name="monil2" id="monil1" value="A"> Program</div>
					<div class="card-text">B. <input type="radio" name="monil2" id="monil2" value="B"> Program</div>
					<div class="card-text">C. <input type="radio" name="monil2" id="monil3" value="C"> Program</div>
					<div class="card-text">D. <input type="radio" name="monil2" id="monil4" value="D"> Program</div>
				</div>


				<div onchange="changebro(3)" class="card text-center mt-5 py-3" id="a3">
					<div class="card-title" style="font-weight: bold;">3.&nbsp;What is C Programming?</div>
					<div class="card-text">A. <input type="radio" name="monil3" id="monil1" value="A"> Program</div>
					<div class="card-text">B. <input type="radio" name="monil3" id="monil2" value="B"> Program</div>
					<div class="card-text">C. <input type="radio" name="monil3" id="monil3" value="C"> Program</div>
					<div class="card-text">D. <input type="radio" name="monil3" id="monil4" value="D"> Program</div>
				</div>





				<div onchange="changebro(4)" class="card text-center mt-5 py-3" id="a4">
					<div class="card-title" style="font-weight: bold;">4.&nbsp;What is C Programming?</div>
					<div class="card-text">A. <input type="radio" name="monil4" id="monil1" value="A"> Program</div>
					<div class="card-text">B. <input type="radio" name="monil4" id="monil2" value="B"> Program</div>
					<div class="card-text">C. <input type="radio" name="monil4" id="monil3" value="C"> Program</div>
					<div class="card-text">D. <input type="radio" name="monil4" id="monil4" value="D"> Program</div>
				</div>





				<div onchange="changebro(5)" class="card text-center mt-5 py-3" id="a5">
					<div class="card-title" style="font-weight: bold;">5.&nbsp;What is C Programming?</div>
					<div class="card-text">A. <input type="radio" name="monil5" id="monil1" value="A"> Program</div>
					<div class="card-text">B. <input type="radio" name="monil5" id="monil2" value="B"> Program</div>
					<div class="card-text">C. <input type="radio" name="monil5" id="monil3" value="C"> Program</div>
					<div class="card-text">D. <input type="radio" name="monil5" id="monil4" value="D"> Program</div>
				</div>




				<div onchange="changebro(6)" class="card text-center mt-5 py-3" id="a6">
					<div class="card-title" style="font-weight: bold;">6.&nbsp;What is C Programming?</div>
					<div class="card-text">A. <input type="radio" name="monil6" id="monil1" value="A"> Program</div>
					<div class="card-text">B. <input type="radio" name="monil6" id="monil2" value="B"> Program</div>
					<div class="card-text">C. <input type="radio" name="monil6" id="monil3" value="C"> Program</div>
					<div class="card-text">D. <input type="radio" name="monil6" id="monil4" value="D"> Program</div>
				</div>


				<div onchange="changebro(7)" class="card text-center mt-5 py-3" id="a7">
					<div class="card-title" style="font-weight: bold;">7.&nbsp;What is C Programming?</div>
					<div class="card-text">A. <input type="radio" name="monil7" id="monil1" value="A"> Program</div>
					<div class="card-text">B. <input type="radio" name="monil7" id="monil2" value="B"> Program</div>
					<div class="card-text">C. <input type="radio" name="monil7" id="monil3" value="C"> Program</div>
					<div class="card-text">D. <input type="radio" name="monil7" id="monil4" value="D"> Program</div>
				</div>



				<div onchange="changebro(8)" class="card text-center mt-5 py-3" id="a8">
					<div class="card-title" style="font-weight: bold;">8.&nbsp;What is C Programming?</div>
					<div class="card-text">A. <input type="radio" name="monil8" id="monil1" value="A"> Program</div>
					<div class="card-text">B. <input type="radio" name="monil8" id="monil2" value="B"> Program</div>
					<div class="card-text">C. <input type="radio" name="monil8" id="monil3" value="C"> Program</div>
					<div class="card-text">D. <input type="radio" name="monil8" id="monil4" value="D"> Program</div>
				</div>


				<div onchange="changebro(9)" class="card text-center mt-5 py-3" id="a9">
					<div class="card-title" style="font-weight: bold;">9.&nbsp;What is C Programming?</div>
					<div class="card-text">A. <input type="radio" name="monil9" id="monil1" value="A"> Program</div>
					<div class="card-text">B. <input type="radio" name="monil9" id="monil2" value="B"> Program</div>
					<div class="card-text">C. <input type="radio" name="monil9" id="monil3" value="C"> Program</div>
					<div class="card-text">D. <input type="radio" name="monil9" id="monil4" value="D"> Program</div>
				</div>



				<div onchange="changebro(10)" class="card text-center mt-5 py-3 mb-5" id="a10">
					<div class="card-title" style="font-weight: bold;">10.&nbsp;What is C Programming?</div>
					<div class="card-text">A. <input type="radio" name="monil10" id="monil1" value="A"> Program</div>
					<div class="card-text">B. <input type="radio" name="monil10" id="monil2" value="B"> Program</div>
					<div class="card-text">C. <input type="radio" name="monil10" id="monil3" value="C"> Program</div>
					<div class="card-text">D. <input type="radio" name="monil10" id="monil4" value="D"> Program</div>
				</div>
				</form>
		<!-- <div id="hii"></div> -->
		<button  onclick="finale()"  name="sub1"  id="bt1"  style="cursor: pointer;background-color: #90EE90;color:white" disabled>View Score</button>&nbsp;&nbsp;
        <button onclick="back()" style="cursor: pointer;background-color: green;color:white" >Back</button>
	</div>
    
</body>
</html>