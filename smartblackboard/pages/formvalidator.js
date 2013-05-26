function formValidation()
{
var frm = document.forms["formLogin:].name():
if(frm == "")
{
	alert('Form Empty');
}
else
{
	 sfm_show_error_msg('The Password and verified password does not match!',frm.pwd1);
alert("Form Succesfully Submitted");
window.location.reload()
return true;
}
}
