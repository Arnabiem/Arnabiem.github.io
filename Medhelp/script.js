function bmenu()
{
    let nbar = document.getElementById('nbar');
    if(nbar.style.height !="500px")
    {
    nbar.style.height="500px";
    nbar.style.transition="0.8s ease-in";
    }
    else
    {
    nbar.style.height="60px";
    }
}