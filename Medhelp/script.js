var hei = 0;
function bmenu()
{
    if (window.innerWidth <= 760) {
        let nbar = document.getElementById('nbar');
        if(nbar.style.height !="500px")
        {
            hei = 500;
            nbar.style.height="500px";
            nbar.style.transition="0.4s ease-in";
        }
        else
        {
            hei = 60;
            nbar.style.height="60px";
        }
    }
}

window.onresize = function() {
    let nbar = document.getElementById('nbar');
    if (window.innerWidth > 760) {
        nbar.style.height = "258px";
    }
    else {
        nbar.style.height = hei + "px";
    }
}