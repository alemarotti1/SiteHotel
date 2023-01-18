$(function () {
    
    //create a var for the intersection observer 
    var enterObserver;
    //threshold of 0.75 means that the element must be at least 75% of the viewport to be considered in view
    enterObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if(entry.intersectionRatio > 0.5){
                animateOne(entry.target);
            }else{
                clearInterval(animationId);
                animationId = null;

            }
        });
    }, {
        rootMargin: "-10px -10px -10px -10px",
        threshold: 0.5
    });


    let elements = document.querySelectorAll('#one'); 
    elements.forEach(function (element) {
        enterObserver.observe(element);
    });



});


var animationId = null;
var stageAnimation = 0;
var colors = ["#ff0000", "#00ff00", "#0000ff", "#ffff00"];
function animateOne(target){
    if(stageAnimation >= 3){
        stageAnimation = 0;
        return;
    }

    


    /*if(stageAnimation>0)document.getElementById("slide-"+(stageAnimation).toString()).style.display = "none";*/
    stageAnimation++;
       
    //target.scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
    target.style.backgroundImage = "url('img/foto-slide" + (stageAnimation) + ".jpg')";
    
    /*document.getElementById("slide-"+(stageAnimation).toString()).style.animationPlayState = "running";
    document.getElementById("slide-"+(stageAnimation).toString()).style.display = "block";

    if(stageAnimation==4) document.getElementsByClassName("reservar-main")[0].style.animationPlayState = "running";

    //add class "progress-bar" to the element
    document.getElementById("one").classList.remove("progress-bar");
    document.getElementById("one").classList.add("progress-bar");*/


    animationId = setTimeout(animateOne.bind(null, target), 5000);
}

