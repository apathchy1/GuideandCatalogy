<?php
include 'header.php';
?>

<div style="position:relative">
<img src="../src/fonove/vutreshen.jpg" alt="Vunshen grad" class="responsive" width="400" height="400"/>
<a href="citadel.php" style="display:block; width:50px; height:50px; position:absolute; left: 690px; top: 300px;"></a>
<a href="index.php"><img src="../src/back_button.png" class="back" align="left" width="60" height="40"/></a>
</div>

<div class="w3-container1">
<button style onclick="document.getElementById('id01').style.display='block'" class="button"></button>
<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-animate-zoom">
  <header id="header" class="w3-container"> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button1 w3-trasparent w3-large w3-display-topright">&times;</span>
   <h1 class="h1">Представителни дворцови сгради</h1>
  </header>
     <div class="w3-bar w3-border-bottom">
   <button class="tablink w3-bar-item1 w3-button" onclick="openCity(event, 'London')">Крумов дворец</button>
   <button class="tablink w3-bar-item1 w3-button" onclick="openCity(event, 'Paris')">Тронна палата</button>
    </div>
     
<!-- Крумов дворец popup start -->
 <div id="London" class="w3-container city">
     <h1><center></center></h1>
     
   <!-- Cointainer Start -->
  <div class="container-fluid">
    <div class="row ">
      <div class="col-3">     
  <!-- Carousel Start -->        
<div id="demo" class="carousel slide" data-ride="carousel">
<!-- Indicators 
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
 -->
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../src/1.jpg"  height="300">
    </div>
    <div class="carousel-item">
      <img src="../src/2.jpg"  height="300">
    </div>
    <div class="carousel-item">
      <img src="../src/1.jpg"  height="300">
    </div>
  </div>
  <!-- Left and right controls -->
    </div>
   <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>      
<!-- Carousel End -->
          
</div>
      <div class="col-6 ">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
      </div>
      </div>
       <div class="row">
           
      <div class="col-3 ">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
     </div>
    <div class="col-6 ">
    </div>
     </div>
    </div>
<!-- Cointainer End -->  
     
</div>
<!-- Крумов дворец popup end -->
     
<!-- Тронна палата popup start -->     
  <div id="Paris" class="w3-container city">
    <h1><center></center></h1>
     
  <div class="container-fluid">
  
<table>
  <tr>
    <th> <!-- Carousel Start -->        
<div id="demo" class="carousel slide" data-ride="carousel">
<!-- Indicators 
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
 -->
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../src/1.jpg"  height="200">
    </div>
    <div class="carousel-item">
      <img src="../src/2.jpg"  height="200">
    </div>
    <div class="carousel-item">
      <img src="../src/1.jpg"  height="200">
    </div>
  </div>
  <!-- Left and right controls -->
    </div>
   <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>      
<!-- Carousel End --></th>
  </tr>
  <tr>
   <th>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
</th>
  </tr>
</table>
    </div>
 
</div>
<!-- Cointainer End -->  
     
</div>
<!-- Тронна палата popup end -->  











<script>
document.getElementsByClassName("tablink")[0].click();
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
         