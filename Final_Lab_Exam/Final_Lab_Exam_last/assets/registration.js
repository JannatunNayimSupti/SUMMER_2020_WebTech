function val()
{
  var name1=false;
  var userName=document.getElementById('username').value;
  
  
  if(userName=="")
  {
    document.getElementById('usernamemsg').innerHTML="cannot be empty";
    name1=false;
  }
  else
  {
    if((userName[0]>='A' && userName[0]<='Z') ||(userName[0]>='a' && userName[0]<='z'))
    {
      if(userName.length>=2)
      {
        var i=0;
        while(i<userName.length)
        {
          if(!((userName[i]>='A' && userName[i]<='Z') ||(userName[i]>='a' && userName[i]<='z') || userName[i]=='.' || userName[i]=='-' || userName[i]==' '))
          {
            document.getElementById('usernamemsg').innerHTML="Invalid!!";
            name1=false;
          }
          i=i+1;
        }
        document.getElementById('usernamemsg').innerHTML="";
        name1=true;
      }
      else
      {
        document.getElementById('usernamemsg').innerHTML="at least 2 words";
        name1=false;
      }
    }
    else
    {
      document.getElementById('usernamemsg').innerHTML="Must start with a letter";
      name1=false;
    }
  }
   var empname1=false;
  var empName=document.getElementById('username').value;
  
  
  if(empName=="")
  {
    document.getElementById('usernamemsg').innerHTML="cannot be empty";
    empname1=false;
  }
  else
  {
    if((empName[0]>='A' && empName[0]<='Z') ||(empName[0]>='a' && empName[0]<='z'))
    {
      if(empName.length>=2)
      {
        var i=0;
        while(i<empName.length)
        {
          if(!((empName[i]>='A' && empName[i]<='Z') ||(empName[i]>='a' && empName[i]<='z') || empName[i]=='.' || empName[i]=='-' || empName[i]==' '))
          {
            document.getElementById('employenamemsg').innerHTML="Invalid!!";
            empname1=false;
          }
          i=i+1;
        }
        document.getElementById('employenamemsg').innerHTML="";
        empname1=true;
      }
      else
      {
        document.getElementById('employenamemsg').innerHTML="at least 2 words";
        empname1=false;
      }
    }
    else
    {
      document.getElementById('employenamemsg').innerHTML="Must start with a letter";
      name1=false;
    }
  }
   var pass=document.getElementById('password').value;
  var pass1=false;
  if (pass == "")
  {
    document.getElementById('passwordmsg').innerHTML="Must be filled up";
    pass1 = false;
  }
  else
  {
    document.getElementById('passwordmsg').innerHTML="";
    pass1=true;
  }

  var number=document.getElementById('number').value;
  var number1=false;
  if (number == "")
  {
    document.getElementById('numbermsg').innerHTML="Must be filled up";
    number1 = false;
  }
  else
  {
    document.getElementById('numbermsg').innerHTML="";
    number1=true;
  }
   var companyname=document.getElementById('companyname').value;
  var companyname1=false;
  if (companyname == "")
  {
    document.getElementById('commsg').innerHTML="Must be filled up";
    companyname1 = false;
  }
  else
  {
    document.getElementById('commsg').innerHTML="";
    companyname1=true;
  }


 
function removername()
{
  var userName =document.getElementById('name').value;
  if(userName!="")
  {
    document.getElementById('name1').innerHTML="";
  }
}
function removeremployename()
{
  var empName =document.getElementById('name').value;
  if(empName!="")
  {
    document.getElementById('empname1').innerHTML="";
  }
}
function removerpassword()
{
  var pass =document.getElementById('password').value;
  if(pass!="")
  {
    document.getElementById('passwordmsg').innerHTML="";
  }
}
function removernumber()
{
  var number =document.getElementById('number').value;
  if(number!="")
  {
    document.getElementById('numbermsg').innerHTML="";
  }
}
function removercompanyname()
{
  var companyName =document.getElementById('companyname').value;
  if(companyName!="")
  {
    document.getElementById('companyname1').innerHTML="";
  }
}
