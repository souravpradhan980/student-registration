var req= new XMLHttpRequest();
function data(id)
{

req.open("GET","http://localhost/web%20project%20file%20normal%20registration/view/studentInfo.php?info="+id,"true");
    req.send();
    
    req.onreadystatechange=function()
    {
        if(req.readyState==4 && req.status==200)
            {
               document.getElementById("s_info").innerHTML=req.responseText; 
            }
    }
}

function marksheet(id)
{
   
    req.open("GET","http://localhost/web%20project%20file%20normal%20registration/view/marksheet.php?info="+id,"true");
    req.send();
    
    req.onreadystatechange=function()
    {
        if(req.readyState==4 && req.status==200)
            {
                document.getElementById("s_info").innerHTML=req.responseText;
            }
    }
}

function top_student()
{
    req.open("GET","http://localhost/web%20project%20file%20normal%20registration/view/top_student.php","true");
    req.send();
    req.onreadystatechange=function()
    {
        if(req.readyState==4 && req.status==200)
            {
                document.getElementById("control").innerHTML=req.responseText;
            }
    }
}