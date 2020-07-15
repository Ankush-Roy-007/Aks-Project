function loginval()
{
	var mail=document.getElementById("emailid").value;
	if(mail.charAt(mail.length-4)!=('.')&&mail.charAt(mail.length-3)!=('.'))
	{
        document.getElementById("demo").innerHTML="*Invalid E-mail";
        return false;
	}
    else
    {
        alert("Click OK to submit form");
        return true;
    }
}