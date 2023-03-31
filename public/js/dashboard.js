const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});

 // Get the modal
 var modal = document.getElementById("myModal");

 // Get the button that opens the modal
 var btn = document.getElementById("myBtn");

 // Get the button element that closes the modal
 var closeBtn = document.querySelector(".close");

 // When the user clicks the button, open the modal 
 btn.onclick = function() {
     modal.style.display = "block";
 }

 // When the user clicks on the close button, close the modal
 closeBtn.onclick = function() {
     modal.style.display = "none";
 }

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }
