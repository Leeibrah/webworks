

//Validating the signup form
function validator(){
    var name=document.forms['formLogin']['name'].value;
    var nationalID=document.forms['formLogin']['nationalID'].value;
    var certid=document.forms['formLogin']['certi'].value;
    var phone=document.forms['formLogin']['phone'].value;
    var email=document.forms['formLogin']['email'].value;
    var institution=document.forms['formLogin']['institution'].value;
    var location=document.forms['formLogin']['location'].value;
	
    var errorMessage="";
    
    if(name==""){
        errorMessage+="Enter your Name!\n";
    }
    
    
    if(nationalID==""){
        errorMessage+="Please provide your National Id!\n";
    }
    
     var exp=/^[0-9]*$/;

    if(!exp.test (nationalID )){
                
            errorMessage+="Please enter a valid  National ID\n";
                
         }
    
    if(certid==""){
        errorMessage+="Please enter your TSC NO !\n";
    }
    if(phone==""){
        errorMessage+="please provide your phone no!\n";
    }
    var exp=/^07[0-9]{2}[0-9]{3}[0-9]{3}$/;
    
      if(!exp.test (Phone )){
                
            errorMessage+="Please enter a valid phone number\n";
                
         }
     if(  8!=(NationalID.length)){
        errorMessage+="National ID length should be 8 characters!\n";
    }
    if(  10!=(Phone.length)){
        errorMessage+="Phone number length should be 10 characters!\n";
    }
	var atpos=email.indexOf("@");
    var dotpos=email.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
    {
        errorMessage+= "Not a valid e-mail address \n"

    }
    
    
    
    if(errorMessage!=""){
        alert(errorMessage);
        return false;
    }
    else{
        alert("Successful registration");
       
        return true; 
    }
   
}


