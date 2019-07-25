function changeClass() {
    var x = U.$("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

window.onload = function(){
    U.addEvent(U.$('icon'), 'click', changeClass);
};