function calcular_cms()
    {
      var pvm = document.getElementById("pvm").value
      if(pvm >0){
      var cms = 1.8545 + (0.01937 * pvm)
      document.getElementById("resultado").value = cms
      console.log(cms)
      }

    }
    function clear_cms()
    {
      document.getElementById("pvm").value = ""
      document.getElementById("resultado").value = ""
    }

/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  } 

  
