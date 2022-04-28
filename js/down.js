
 function viewDiv() {
     document.getElementById("os").style.opacity = 0;
     document.getElementById("os").style.visibility = "hidden";
     document.getElementById("button_1").style.border = "2.5px solid white";
     
     setTimeout(() => { document.getElementById("os").style.opacity = 1; }, 200);
     setTimeout(() => {  document.getElementById("os").style.visibility = "visible"; }, 200);
     document.getElementById("downclick").onclick = function () {
         var select = document.getElementById("select");
         var index = select.value;
         if (index == 1) {
             window.location = "files/mathsetup_2.0.1.exe";
         }
     };

 };

 
