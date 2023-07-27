function validation()  {  
    var id=document.getElementById("username").value;  
    var ps=document.getElementById("psw").value;
    console.log(id, " ", psw);  
    // if(id.length=="" && ps.length=="") {  
    //     alert("User Name and Password fields are empty");  
    //     return false;  
    // }  
    // else  
    // {  
    //     if(id.length=="") {  
    //         alert("User Name is empty");  
    //     return false;  
    //     }   
    //     if (ps.length=="") {  
    //     alert("Password field is empty");  
    //     return false;  
    //     } 
    if(id==="Saurabh" && ps==="Saurabh8@"){
        console.log("Hello");
        window.location.assign("home.html");
        // return true;
    }
    else{
        alert("Enter correct username and password");
        return false;
    }
}              
 