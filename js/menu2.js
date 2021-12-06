
let open1 = document.getElementById("showds")
document.getElementById("category").style.display = "block";
open1.addEventListener("click", () => {
 if (document.getElementById("category").style.display == "none")
 {
 document.getElementById("category").style.display = "block";
document.getElementById("showds").value = "Закрыть";}
else 
   {document.getElementById("category").style.display = "none";
document.getElementById("showds").value = "Открыть";}
    
})