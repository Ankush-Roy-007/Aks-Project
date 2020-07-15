function val()
{
	var mail=document.getElementById("email").value;
    var phn=document.getElementById("phone").value;
    var pass=document.getElementById("password").value;
    var Cpass=document.getElementById("Cpassword").value;
    var l=phn/1000000000;
	if(mail.charAt(mail.length-4)!=('.')&&mail.charAt(mail.length-3)!=('.'))
	{
        document.getElementById("demo").innerHTML="*Invalid E-mail";
        return false;
	}
    if(isNaN(document.getElementById("phone").value))
        {
             document.getElementById("demo").innerHTML="*Invalid Number";
             return false;
        }
    if(l<6||l>=10)
        {
             document.getElementById("demo").innerHTML="*Invalid Number";
             return false;
        }
    if(pass!=Cpass)
        {
             document.getElementById("demo").innerHTML="*Password Mismatch";
             return false;
        }
    else
    {
        alert("Click OK to submit form");
        return true;
    }
}