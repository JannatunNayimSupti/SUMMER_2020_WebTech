<html>
    <head>
        <title>My Profile</title>
        <script type="text/javascript" src="../assets/registration.js"></script>
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
    background-color:     #008080;  
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
      background-color:     #008B8B;
    }
  </style>
    </head>
    
    <body>
      
       <table >
  <tr >
    <td colspan="2" width="100%" height="30px" id="ber">
        <div style="background-color:       #008080; padding: 10px 46px; float: left;">
        </div>
        <a class="nav" style="float: right;" href="profile.php"</a><?=$_COOKIE['userName']?>
        <a class="nav" style="float: right;" href="logout.php">Logout</a>
    </td>
  </tr>

  <tr>
    <td height="555px" width="18%" align="center" id="sber">
        <ul id="nav1">
            <li><a class="nav1" href="dashBoard.php"> Dashboard </a></li>
            <li><a class="nav1" href="addjob.php"> Add new job </a> </li>
            
        </ul>
    </td>
  <td width="60%">
    <form name="myform" action="regCheck.php" method="post" onsubmit="return val()">
            <fieldset>
                <legend> <h4> PROFILE </h4> </legend>
              <form>
                <br/>
                <table cellpadding="7" cellspacing="0">
                  <tr>
                    <td><h4> Company Name </h4></td>
                    <td>:</td>
                    <td><input type="text" name="" onkeyup="removercompanyname()"><?//=$_COOKIE['name']?></td>
                    <td id="companynamemsg">
                    </td>
                  </tr>
                        <tr><td colspan="3"><hr/></td></tr>         
                        <tr>
                            <td><h4> Job title Name </h4></td>
                            <td>:</td>
                            
                            <td> <input type="text" name=""  onkeyup="removerjobname()"><?//=$_COOKIE['userName']?></td>
                            <td id="jobnamemsg"></td>
                        </tr>   
                  <tr><td colspan="3"><hr/></td></tr>
                  <tr>
                    <td><h4> Job location </h4></td>
                    <td>:</td>
                            
                    <td><input type="text" name=""><?//=$_COOKIE['email']?></td>
                            <td></td>
                  </tr>  
                  <tr>
                    <td><h4> Salary </h4></td>
                    <td>:</td>
                            
                    <td><input type="text" name=""><?//=$_COOKIE['email']?></td>
                            <td></td>
                  </tr>   
                  
                </table>  
                    <hr/>
                    <a href="Update.js">Update Job</a>  
                    <a href="Delete.php">Delete Job</a>
              </form>
            </fieldset>
        </form>
  </td>
  <tr>
    <td colspan="2" align="center">copyright@2017</td>
  </tr>
</table>
          
       
        
    </body>
</html>
