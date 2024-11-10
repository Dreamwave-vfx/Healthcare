//For writing text effect
var typed = new Typed(".auto-type",{
    strings:["Exercise","Eat Good","Sleep Well"],
    typeSpeed: 90,
    backSpeed: 90,
    loop: true});


function toBottom(){
    document.documentElement.scrollTop = 0;
}


function showfriend(){
    const friend = document.getElementById("results");
    if(friend.style.display == "none"){
        friend.style.display = "block";
    }
    else{
        friend.style.display = "none";
    }
}