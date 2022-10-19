var menu = document.getElementById('menu');

var nav =  document.getElementById('nav');  

var usericon = document.getElementById("user");

var form = document.getElementById("login_form");
var slides =  document.getElementsByClassName('mySlides');



menu.onclick= function(){
    if(nav.className === "navbar"){
        nav.className += " navactive";
        menu.className += " toggle";
        menu.style.zIndex = "1";
        }
    else{
        nav.className = "navbar";
        menu.className = "icon";
        menu.style.zIndex="-1";

    }
}

usericon.onclick= function(){
    if(usericon.className === "user"){
        usericon.className += " rotate_user";
        form.style.display = "block";

    }
    else{
        usericon.className = "user";
        form.style.display = "none";

    }
}
window.addEventListener("dblclick", function(event) {
    if (event.target == form) {
        usericon.className = "user";
        form.style.display = "none";    }
});

