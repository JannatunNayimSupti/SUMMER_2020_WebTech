<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
  	*{
  	margin: 0;
    box-sizing: border-box;
    padding: 0;	
  	}
  	#ber{
  		background-color: #333;
  		margin: 0;
  		padding: 0;
  	}
  	body{
  		opacity: 0.8;
  		 background-color: #F0F8FF;
  		background-repeat: no-repeat;
  		background-size: 100% 100%;
  	}
  	.nav{
  	text-decoration: none;
  	background-color: 		#008080;	
  	display: block;
    color: white;
    text-align: center;
    padding: 30px 50px;
    
  	}
  	#sber{
  		background-color: #333;
  		opacity: 0.8;
  	}
  	.nav1{
  		text-decoration: none;	
  	    display: block;
        color: white;
        text-align: center;
        padding: 5px 48px;
  	}
  	a:hover{
  		background-color: 		#008B8B;
  	}
  </style>
</head>
<body>
  <table>
  <tr >
    <td colspan="2" width="100%" height="30px" id="ber">
    	<div style="background-color: 		#008080; padding: 10px 46px; float: left;">
    	</div>
        <a class="nav" style="float: right;" href="profile.php"><?=$_COOKIE['userName']?></a>
        <a class="nav" style="float: right;" href="logout.php">Logout</a>
    </td>
  </tr>

  <tr>
  	<td height="555px" width="18%" align="center" id="sber">
		<ul id="nav1">
			<li><a class="nav1" href="home.php"> Dashboard </a></li>
			<li><a class="nav1" href="addjob.php"> Add new job </a> </li>
			
		</ul>
	</td>
	<td>
		<h1 align="center">
             Well Come<br>
             <?=$_COOKIE[ 'userName']?>      
        </h1>
	</td>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>

</body>
</html>