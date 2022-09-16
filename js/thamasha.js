function checkPassword(){

    if(document.getElementById("psw").value != document.getElementById("cnfPsw").value){
       alert("Pasword Mismatch!");
       return false;
    }
    else{
       alert("Success!");
       return true;
    }

}

function enableButton(){

    if(document.getElementById("checkbox").checked){
       document.getElementById("submitBtn").disabled=false;
    }
    else{
       document.getElementById("submitBtn").disabled=true;
    }

}
		
