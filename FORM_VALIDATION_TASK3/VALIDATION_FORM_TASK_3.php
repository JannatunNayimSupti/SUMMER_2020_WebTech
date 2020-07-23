<?php

function NameValid()
{
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        if(empty($name) )
        {
            echo "can not keep empty.";
        }
        else
        {
            if(!preg_match("/^[a-zA-Z]/i",$name))
            {
                echo "it must have alphabets!";
            }
           
        }
    }
}
 

    function EmailValid()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $email = $_POST["email"];
            
            if(empty($email))
            {
                echo "can not be empty.";
            }
            else
            {
                if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                {
                    echo "Invalid Email";
                }
                else
                {
                    echo $email;
                }
                
            }
        }
        
    }


function GenderValid()
{
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $gender = $_POST["gender"];
        if(empty($gender))
        {
             echo "Gender is not selected.";
        }
        else
        {
            echo $gender;
        }
    }
}

function DobValid()
{
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $dd = $_POST["dd"];
        $mm = $_POST["mm"];
        $yy = $_POST["yy"];
        
        if(empty($dd) || empty($mm) || empty($yy))
        {
            echo "Invalid Date!";
        }
        else
        {
            if($dd < 31 && $dd > 1)
            {
                echo $dd;
            }
            else
            {
                echo "Invalid Day!";
            }
            if($mm<12 && $mm > 1)
            {
                echo $mm;
            }
            else
            {
                echo "Invalid Month!";
            }
            if($yy < 100)
            {
                echo $yy;
            }
            else
            {
                echo "Invalid Year!";
            }
        }
    }
    
}

function DegreeValid()
{
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $degree = $_POST["degree"];
        if(empty($degree))
        {
            echo "No degree is selected.";
        }
        else
        {
            echo $degree;
        }
    }
    
}

function BloodValid()
{
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $blood = $_POST["blood"];
        if($blood == "select")
        {
            echo "Please Select a Blood Group.";
        }
        else
        {
            echo $blood;
        }
    }
    
}


function UserValid()
{
    $userId = $_POST["userId"];
    if(empty($userId))
    {
        echo "User Field is empty.";
    }
    else
    {
        echo $userId;
    }
}



?>


<html>

<head>
    <title>REGISTRATION FORM</title>
</head>

<body>
    <form method="post">
        <div>

            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value=""></td>
                    <br>
                    <td><input type="submit" value="Submit">
                        <br>
                        <?php   NameValid();      ?>
                    </td>
                </tr>
            </table>

        </div>
        <hr>

        <div>

            <table>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value=""></td> <br>
                    <td><input type="submit" value="Submit"><br>
                        <?php EmailValid(); ?>
                    </td>
                </tr>
            </table>

        </div>
        <hr>

        <div>
            <fieldset>
                <legend>Gender</legend>
                <table>
                    <tr>

                        <td>
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="other">Other
                            <?php GenderValid(); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Submit"></td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <hr>

        <div>
            <fieldset>
                <legend>Date OF Birth</legend>
                <table>
                    <tr>
                        <td>DD</td>
                        <td>MM</td>
                        <td>YY</td>
                    </tr>
                    <tr>
                        <td><input type="number" name="dd"></td>
                        <td><input type="number" name="mm"></td>
                        <td>
                            <input type="number" name="yy">
                            <?php   DobValid();    ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Submit"></td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <hr>

        <div>
            <fieldset>
                <legend>Degree</legend>
                <table>
                    <tr>
                        <td><input type="checkbox" name="degree" value="ssc">SSC</td>
                        <td><input type="checkbox" name="degree" value="hsc">HSC</td>
                        <td><input type="checkbox" name="degree" value="bsc">BSc</td>
                        <td><?php  DegreeValid();     ?></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <hr>

        <div>
            <table>
                <tr>
                    <td>Blood Group</td>
                    <td>
                        <select name="blood">
                           <option value="select">Select</option>
                            <option value="A+"> A+</option>
                            <option value="B+"> B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O-">O-</option>
                            <option value="O+">O+</option>
                        </select>
                        <?php  BloodValid();     ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </div>
        <hr>
        
        <div>
            <table>
                <tr>
                    <td>User Id:</td>
                    <td><input type="text" name="userId">
                    <?php  UserValid();     ?>
                    </td>
                </tr>
                <tr>
                    <td>Upload</td>
                    <td><input type="file" name="uploadFile"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </div>

         <hr>

 

         <table width="100%" border="1">

 

           
            <tr  height="50px" >
                
                <td colspan="3" > 
                   <center>
                    <h1> PERSON PROFILE</h1>
                </center>
                 </td>
            
                
            </tr>

 

             <tr  height="50px">
                <td width="200px">
                    <p> Name  </p> 
                </td>
                <td width="200px">
                    <input type="text" name="" value="" size="100px">
                </td>
                <td width="200px"></td>
            </tr>

 

             <tr  height="50px" >
                <td width="200px">
                    <p> Email </p>
                </td>
                <td width="200px">
                    <input type="text" name="" value="" size="100px">
                    
                </td>
                <td width="200px"></td>
            </tr>
             <tr  height="50px">
                <td width="200px">
                    <p> Gender </p>
                
                 </td>
                <td width="200px">
                    Male <input type="radio" name="gender">
                    Female <input type="radio" name="gender">
                    Other <input type="radio" name="gender">
                </td>
                <td width="200px" ></td>
            </tr>

 

             <tr  height="50px">
                <td> 
               <p> Date_of_Birth</p>
                </td>
                <td width="200px">
                    <input type="date" name="">
                </td>
                <td width="200px"></td>
            </tr>

 

             <tr  height="50px">
                <td>
                    <p> Blood_Group</p>
                </td>
                <td width="200px">
                    <select>
                        <option>A+</option>
                        <option>0+</option>
                        <option>B+</option>
                    </select>
                </td>
                <td width="200px"></td>
            </tr>

 

             <tr  height="50px">
                <td> <p> Degree</p></td>
                <td width="200px">
                    <input type="checkbox" name=""> SSC
                    <input type="checkbox" name=""> HSC
                    <input type="checkbox" name=""> BSc

 

                </td>
                <td></td>
            </tr>

 

             <tr  height="50px">
                <td>
                    <p>Photo</p>
                </td>
                <td width="200px">
                    <input type="file" name="">
                                    </td>
                <td width="200px"></td>
            </tr>

 

             <tr  height="50px">
                <td colspan="3" style="text-align: right">

 

                    <input type="submit" name="click">
                    <input type="reset" name="click">
                </td>
            </tr>
</table>

    </form>
</body>

</html>