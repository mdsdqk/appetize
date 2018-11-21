var divsp = document.getElementById("box");

window.onclick=function(event)
{
	if(event.target==divsp)
	{
		alert(event.target)
		divsp.style.display="none";
	}
}

function login()
{
	var divsp = document.getElementById("box");
	var div = document.getElementById("login-box");
	div.style.display='none';
	divsp.style.display='block';
	
}
