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

document.getElementById("message").addEventListener("keyup", function(){
    var x = document.getElementById("message");
    x.value = x.value.toUpperCase();
});