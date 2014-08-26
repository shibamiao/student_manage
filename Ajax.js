
function GetXmlHttpObject()
{
  var xmlHttp=null;
  try
  {
     xmlHttp=new XMLHttpRequest();
  }
  catch (e)
  {
    try
    {
      xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e)
    {
      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
  return xmlHttp;
}

function showinfo()
{ 
//myRand=parseInt(Math.random()*99999999999);
var infor= document.getElementById("infor").value;  
var serverPage="reserch.php";
serverPage=serverPage+"?infor="+infor; 
xmlHttp=GetXmlHttpObject();
xmlHttp.open("GET",serverPage,true);
xmlHttp.onreadystatechange = function(){
if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
{
document.getElementById("server_ans").innerHTML = xmlHttp.responseText;
}
}
xmlHttp.send(null);

}
