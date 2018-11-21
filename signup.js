var divsp = document.getElementById("login-box");
window.onclick=function(event)
{
	if(event.target==divsp)
	{
		alert(event.target)
		divsp.style.display="none";
	}
}

function signup()
{
	var divsp = document.getElementById("login-box");
	divsp.style.display='block';
	divsp.style.border="none";
	
	//var body = document.getElementById("body");
	//divsp.style.opacity=1.0;
	
}
