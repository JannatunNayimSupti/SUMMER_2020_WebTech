function validate()
{
  var name1=false;
  var userName=document.getElementById('name1').value;
  
  
  if(userName=="")
  {
    document.getElementById('nmsg').innerHTML="Field cannot be empty";
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
            document.getElementById('nmsg').innerHTML="Name can only contain A-Z, a-z, . and -";
            name1=false;
          }
          i=i+1;
        }
        document.getElementById('nmsg').innerHTML="";
        name1=true;
      }
      else
      {
        document.getElementById('nmsg').innerHTML="Name must contain 2 words";
        name1=false;
      }
    }
    else
    {
      document.getElementById('nmsg').innerHTML="Name must start with a letter";
      name1=false;
    }
  }

  var email=document.getElementById('email').value;
  var email1=false;
  if (email == "")
  {
    document.getElementById('emsg').innerHTML="email must be filled up";
    email1 = false;
  }
  else
  {
    document.getElementById('emsg').innerHTML="";
    email1=true;
  }


  var gender1=false;
  if(document.getElementById('gen1').checked || document.getElementById('gen2').checked ||document.getElementById('gen3').checked) 
  {
    document.getElementById('gmsg').innerHTML="" ;
    gender1 = true;
  }
  else { 
    document.getElementById("gmsg").innerHTML="no option selected";
    gender1 = false;
  } 

  var dob1=false;
  var day=document.getElementById('id1').value;
  var month=document.getElementById('id2').value;
  var year=document.getElementById('id3').value;
  if((day!="") && (month!="") && (year!=""))
  {
    if((day>0 && day<32) && (month>0 && month<13) && (year>1899 && year<2017))
    {
      document.getElementById('dobmsg').innerHTML="";
      dob1=true;
    }
    else
    {
      document.getElementById('dobmsg').innerHTML="Enter a valid date";
      dob1=false;
    }
  }
  else
  {
    document.getElementById('dobmsg').innerHTML="Field cannot be empty";
    dob1=false;
  }

  var degree1=false;
  if(document.getElementById('deg1').checked || document.getElementById('deg2').checked || document.getElementById('deg3').checked)
  {
    document.getElementById('dmsg').innerHTML="";
    degree1=true;
  }
  else
  {
    document.getElementById('dmsg').innerHTML="Please choose an option";
    degree1=false;
  }

  var picture1=false;
  var pic =document.getElementById('pic1').value;
  if( pic != "")
  {
    document.getElementById('dis').innerHTML="";
    picture1 = true;
  }
  else
  {
    document.getElementById('dis').innerHTML="select a picture";
    picture1 = false;
  }


  if(name1 && email1 && gender1 && dob1 && degree1 && picture1)
  {
    return true;
  }
  else
  {
    return false;
  }
}

function removerName()
{
  var userName =document.getElementById('name1').value;
  if(userName!="")
  {
    document.getElementById('nmsg').innerHTML="";
  }
}
function removerEmail()
{
  var email =document.getElementById('email').value;
  if(email!="")
  {
    document.getElementById('emsg').innerHTML="";
  }
}
function removerGender()
{
  document.getElementById('gmsg').innerHTML="";
}
function removerDob()
{
  var day=document.getElementById('id1').value;
  var month=document.getElementById('id2').value;
  var year=document.getElementById('id3').year;
  if(day!="" && month!="" && year!="")
  {
    document.getElementById('dobmsg').innerHTML="";
  }
}
function removerDegree()
{
  document.getElementById('dmsg').innerHTML="";
}
function removerPicture()
{
  document.getElementById('dis').innerHTML="";
}