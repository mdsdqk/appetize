function sendData(event)
{
	//formElement = document.getElementById("form_signup");
	formElement= new FormData();
	formElement.append('username',document.getElementById("username").value);
	formElement.append('email',document.getElementById("email").value);
	formElement.append('password_1',document.getElementById("password_1").value);
	formElement.append('password_2',document.getElementById("password_2").value);

	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = receive;
	xhr.open("POST","http://localhost/SE_project/server.php",true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send(formElement);

}

function sendDataLogin(event)
{
	formElement= new FormData();
	formElement.append('username',document.getElementById("username1").value);
	formElement.append('password',document.getElementById("password1").value);

	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = receive;
	xhr.open("POST","http://localhost/SE_project/server.php",true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send(formElement);
}

function receive()
{
	if(xhr.readyState==4 && xhr.status==200)
	{
		alert("hello");
	}
}