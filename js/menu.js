
document.getElementById("mbshow").style.display = "none";
document.getElementById("show").addEventListener("click", () => {
  if (document.getElementById("mbshow").style.display == "none")
   {
   	document.getElementById("mbshow").style.display = "block";
document.getElementById("show").value = "Закрыть меню";}
else 
   {document.getElementById("mbshow").style.display = "none";
document.getElementById("show").value = "Открыть меню";}
    
})