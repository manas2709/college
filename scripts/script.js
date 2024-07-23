var menu=document.getElementById("navLinks")
var bar=document.getElementById("bar")

function hidemenu()
{
    menu.style.right="-200px";
    bar.style.display="block";
}
function dispmenu()
{
    bar.style.display="none";
    menu.style.right="0px";
}

