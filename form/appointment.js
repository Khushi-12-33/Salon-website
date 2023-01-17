window.onload= function()
{
    var submitted=false;
}

document.getElementById("name").addEventListener("keyup", function(){
    var x = document.getElementById("name");
    x.value = x.value.toUpperCase();
    var letters= /^[A-Za-z ]+$/;
    if(x.value.match(letters)){
        document.getElementsByClassName("error1")[0].innerHTML="";
        return true;
    }else{
        document.getElementsByClassName("error1")[0].innerHTML='Please enter your name.';
    }
});


document.getElementById("phone").addEventListener("keyup", function(){
    var x = document.getElementById("phone");
    x.value = x.value.toUpperCase();
    var phoneno = /^\d{10}$/;
    if(x.value.match(phoneno)){
        document.getElementsByClassName("error3")[0].innerHTML="";
        return true;
    }else{
        document.getElementsByClassName("error3")[0].innerHTML='Please enter proper number.';
    }
});

document.getElementById("email").addEventListener("keyup", function(){
    var x = document.getElementById("email");
    x.value = x.value.toUpperCase();
    var letters= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(x.value.match(letters)){
        document.getElementsByClassName("error2")[0].innerHTML="";
        return true;
    }else{
        document.getElementsByClassName("error2")[0].innerHTML="Please enter valid email.";
    }
});

document.getElementById("subject").addEventListener("keyup", function(){
    var x = document.getElementById("subject");
    x.value = x.value.toUpperCase();
});

document.getElementById('contactForm').onsubmit=function(e){
    e.preventDefault();
    submitted= true;
};