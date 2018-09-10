<?php
include 'header.php';
?>

<div style="position:relative">
<img src="../src/fonove/vutreshen.jpg" alt="Vunshen grad" class="responsive" width="400" height="400"/>
<a href="citadel.php" style="display:block; width:50px; height:50px; position:absolute; left: 690px; top: 300px;"></a>
<a href="index.php"><img src="../src/back_button.png" class="back" align="left" width="60" height="40"/></a>
</div>

<!-- Popup 2 start -->  
<div class="w3-container">
<button style onclick="document.getElementById('id01').style.display='block'" class="button2"></button>
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
 <div id="London" class="city">
     <table>
         <tr>
             <td>   
<!-- Carousel Start --> 
                    <div id="caroul1" class="carousel slide" data-ride="carousel">
                         <ol class="carousel-indicators">
            <li data-target="#caroul1" data-slide-to="0" class="active"></li>
            <li data-target="#caroul1" data-slide-to="1"></li>
                        </ol>
                          <!-- The slideshow -->
                          <div class="carousel-inner">
                              <div class="carousel-item active">
                              <span style="display:block; width:300px;"><img src="../src/krumov.JPG"></span> 
                              </div>
                              <div class="carousel-item">
                            <span style="display:block; width:300px;"><img class="caroul1" src="../src/krumov-vuzstanovka.jpg"></span> 
                              </div>
                              <!-- Carousel End -->
                      
                        <!-- Left and right controls -->
  <a class="left carousel-control" href="#caroul1" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#caroul1" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
                        </div>
                  </div>
<!--Carousel End-->
             </td>
             <td rowspan="2"><p align="justify">&nbsp;Крумовият дворец е сред най-ранните каменни сгради, съществували в Плиска преди опожаряването на столицата от император Никифор I Геник през 811 г. Планът на тази сграда е установен с изключителна точност още през 30-те години на ХХ век, въпреки направените за първи път неголемите сондажни проучвания, направени от Кр. Миятев. Именно той нарича тази огромна по размери сграда Крумов дворец. Новото проучване през 1976 – 1979 г. добавя нови подробности за този паметник. Тогава са потвърдени следите от голям пожар във всички части на сградата. <br/>
                 &nbsp;От градежа на този дворец са запазени предимно подложките на основите и незначителни части от каменния градеж. Те очертават четириъгълник с размери 75х59,50 м, прорязан от перпендикулярни зидове, които образуват 63 клетки. Приземният етаж е бил необитаем. Достъпът до горния етаж е ставал посредством стълби, изградени в четирите кули – по две на източната и западната фасада. Голямата площ (4718 кв. м) подсказва, че сградата е била едновременно жилищен и представителен дворец. Най-близкият аналог на Крумовия дворец е една частично проучена сграда на територията на двореца в Константинопол, която е датирана в VIII в. 
 </p></td>
         </tr>
         <tr>
             <td>
                 <div style="position:relative;height:0;padding-bottom:56.26%"><iframe src="https://www.youtube.com/embed/EKIZY8N3LII?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div> </td>
         </tr>
     </table>
     
</div>
<!-- Крумов дворец popup end -->
     
<!-- Тронна палата popup start -->     
  <div id="Paris" class="city">
      <table>
          <tr>  
              <td>
<!-- Carousel Start --> 
                    <div id="caroul2" class="carousel slide" data-ride="carousel">
                         <ol class="carousel-indicators">
            <li data-target="#caroul2" data-slide-to="0" class="active"></li>
            <li data-target="#caroul2" data-slide-to="1"></li>
                        </ol>
                          <!-- The slideshow -->
                          <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <img src="../src/krumov-vuzstanovka.jpg">
                              </div>
                              <div class="carousel-item">
                                  <img src="../src/krumov.JPG">
                              </div>
                              <!-- Carousel End -->
                      
                        <!-- Left and right controls -->
  <a class="left carousel-control" href="#caroul2" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#caroul2" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
                        </div>
                  </div>
<!--Carousel End-->
              </td>
            </tr>
          <tr>
              <td>
                  <p align="justify">&nbsp;Тронната палата поема функциите на представителна сграда след разрушаването на Крумовия дворец. Това е още един от обектите, чиито проучвания започва Карел Шкорпил през 1899 г. Проучванията са продължени в средата на ХХ век от Кр. Миятев, Ст. Михайлов, а по-късно по този обект работи и Р. Рашев. В резултат на многогодишните проучвания, архитектурният тип и строителна история на сградата са определени сравнително точно.<br/>
&nbsp;В план новият представителен дворец е бил базиликална постройка, ориентирана с дългата си ос в посока север – юг. Съставена е от предверие и зала с общи размери 52 х 26 м. Градена е от дялани варовикови блокове, споявани с розов хоросан. Днес във височина са запазени каменни блокове до пети ред от приземния етаж. Самият той е бил необитаван, като помещенията му са използвани като складове. Представителният етаж е разделен на три части – преддверие в южната част, тронна зала и вградена апсида в най-северната част, където е поставен тронът. Тронната зала е била разделена на три кораба от  две редици колони. Този план приближава двореца към базиликите от елинистически тип. В процеса на използване, към източната фасада на Тронната палата е била изградена дървена трибуна, използвана от владетеля за нуждите на дворцовия церемониал.

                  </p>
              </td>
          </tr>
      </table>
     </div>
    </div>
    </div>
<!-- Cointainer End -->  
    <!-- Popup 3 старт -->
    <button style onclick="document.getElementById('id02').style.display='block'" class="button3"></button>
<div id="id02" class="w3-modal">
 <div class="w3-modal-content w3-animate-zoom">
  <header id="header" class="w3-container"> 
   <span onclick="document.getElementById('id02').style.display='none'" 
   class="w3-button2 w3-trasparent w3-large w3-display-topright">&times;</span>
   <h1 class="h1">Юртообразна дървена постройка</h1>
      </header>
    <table>
         <tr>
             <td> <img src="../src/krumov-vuzstanovka.jpg" width="400px"/></td>
             <td rowspan="2"><p align="justify">&nbsp;Крумовият дворец е сред най-ранните каменни сгради, съществували в Плиска преди опожаряването на столицата от император Никифор I Геник през 811 г. Планът на тази сграда е установен с изключителна точност още през 30-те години на ХХ век, въпреки направените за първи път неголемите сондажни проучвания, направени от Кр. Миятев. Именно той нарича тази огромна по размери сграда Крумов дворец. Новото проучване през 1976 – 1979 г. добавя нови подробности за този паметник. Тогава са потвърдени следите от голям пожар във всички части на сградата. <br/>
                 &nbsp;От градежа на този дворец са запазени предимно подложките на основите и незначителни части от каменния градеж. Те очертават четириъгълник с размери 75х59,50 м, прорязан от перпендикулярни зидове, които образуват 63 клетки. Приземният етаж е бил необитаем. Достъпът до горния етаж е ставал посредством стълби, изградени в четирите кули – по две на източната и западната фасада. Голямата площ (4718 кв. м) подсказва, че сградата е била едновременно жилищен и представителен дворец. Най-близкият аналог на Крумовия дворец е една частично проучена сграда на територията на двореца в Константинопол, която е датирана в VIII в. 
 </p></td>
         </tr>
     </table>
     
    </div>
    </div>
<!-- Popup 3 end --> 
    
    <!-- Popup 1 start --> 
     <button style onclick="document.getElementById('id00').style.display='block'" class="button1"></button>
<div id="id00" class="w3-modal">
 <div class="w3-modal-content w3-animate-zoom">
  <header id="header" class="w3-container"> 
   <span onclick="document.getElementById('id00').style.display='none'" 
   class="w3-button2 w3-trasparent w3-large w3-display-topright">&times;</span>
   <h1 class="h1">Главна(Източна)порта</h1>
      </header>
    <table>
         <tr>
             <td> <img src="../src/krumov-vuzstanovka.jpg" width="400px"/></td>
             <td rowspan="2"><p align="justify">&nbsp;
                 &nbsp;От градежа на този дворец са запазени предимно подложките на основите и незначителни части от каменния градеж. Те очертават четириъгълник с размери 75х59,50 м, прорязан от перпендикулярни зидове, които образуват 63 клетки. Приземният етаж е бил необитаем. Достъпът до горния етаж е ставал посредством стълби, изградени в четирите кули – по две на източната и западната фасада. Голямата площ (4718 кв. м) подсказва, че сградата е била едновременно жилищен и представителен дворец. Най-близкият аналог на Крумовия дворец е една частично проучена сграда на територията на двореца в Константинопол, която е датирана в VIII в. 
 </p></td>
         </tr>
     </table>
     
    </div>
    </div>
    
    <!-- Popup 1 end -->   
    
    <!-- Popup 4 start --> 
     <button style onclick="document.getElementById('id03').style.display='block'" class="button4"></button>
<div id="id03" class="w3-modal">
 <div class="w3-modal-content w3-animate-zoom">
  <header id="header" class="w3-container"> 
   <span onclick="document.getElementById('id03').style.display='none'" 
   class="w3-button2 w3-trasparent w3-large w3-display-topright">&times;</span>
   <h1 class="h1">Голям езически храм и Дворцова Базилика</h1>
      </header>
    <table>
         <tr>
             <td> <img src="../src/krumov-vuzstanovka.jpg" width="400px"/></td>
             <td rowspan="2"><p align="justify">&nbsp;Крумовият дворец е сред най-ранните каменни сгради, съществували в Плиска преди опожаряването на столицата от император Никифор I Геник през 811 г. Планът на тази сграда е установен с изключителна точност още през 30-те години на ХХ век, въпреки направените за първи път неголемите сондажни проучвания, направени от Кр. Миятев. Именно той нарича тази огромна по размери сграда Крумов дворец. Новото проучване през 1976 – 1979 г. добавя нови подробности за този паметник. Тогава са потвърдени следите от голям пожар във всички части на сградата. <br/>
                 &nbsp;От градежа на този дворец са запазени предимно подложките на основите и незначителни части от каменния градеж. Те очертават четириъгълник с размери 75х59,50 м, прорязан от перпендикулярни зидове, които образуват 63 клетки. Приземният етаж е бил необитаем. Достъпът до горния етаж е ставал посредством стълби, изградени в четирите кули – по две на източната и западната фасада. Голямата площ (4718 кв. м) подсказва, че сградата е била едновременно жилищен и представителен дворец. Най-близкият аналог на Крумовия дворец е една частично проучена сграда на територията на двореца в Константинопол, която е датирана в VIII в. 
 </p></td>
         </tr>
     </table>
     
    </div>
    </div>
    
    <!-- Popup 4 end -->   
    
    <!-- Popup 6 start --> 
     <button style onclick="document.getElementById('id06').style.display='block'" class="button6"></button>
<div id="id06" class="w3-modal">
 <div class="w3-modal-content w3-animate-zoom">
  <header id="header" class="w3-container"> 
   <span onclick="document.getElementById('id06').style.display='none'" 
   class="w3-button2 w3-trasparent w3-large w3-display-topright">&times;</span>
   <h1 class="h1">Болярско Жилище</h1>
      </header>
    <table>
         <tr>
             <td> <img src="../src/krumov-vuzstanovka.jpg" width="400px"/></td>
             <td rowspan="2"><p align="justify">&nbsp;Крумовият дворец е сред най-ранните каменни сгради, съществували в Плиска преди опожаряването на столицата от император Никифор I Геник през 811 г. Планът на тази сграда е установен с изключителна точност още през 30-те години на ХХ век, въпреки направените за първи път неголемите сондажни проучвания, направени от Кр. Миятев. Именно той нарича тази огромна по размери сграда Крумов дворец. Новото проучване през 1976 – 1979 г. добавя нови подробности за този паметник. Тогава са потвърдени следите от голям пожар във всички части на сградата. <br/>
                 &nbsp;От градежа на този дворец са запазени предимно подложките на основите и незначителни части от каменния градеж. Те очертават четириъгълник с размери 75х59,50 м, прорязан от перпендикулярни зидове, които образуват 63 клетки. Приземният етаж е бил необитаем. Достъпът до горния етаж е ставал посредством стълби, изградени в четирите кули – по две на източната и западната фасада. Голямата площ (4718 кв. м) подсказва, че сградата е била едновременно жилищен и представителен дворец. Най-близкият аналог на Крумовия дворец е една частично проучена сграда на територията на двореца в Константинопол, която е датирана в VIII в. 
 </p></td>
         </tr>
     </table>
     
    </div>
    </div>
    
    <!-- Popup 6 end -->   
    
    
    <!-- Popup 11 start --> 
     <button style onclick="document.getElementById('id11').style.display='block'" class="button11"></button>
<div id="id11" class="w3-modal">
 <div class="w3-modal-content w3-animate-zoom">
  <header id="header" class="w3-container"> 
   <span onclick="document.getElementById('id11').style.display='none'" 
   class="w3-button2 w3-trasparent w3-large w3-display-topright">&times;</span>
   <h1 class="h1">Дървено укрепление на вътрешния град</h1>
      </header>
    <table>
         <tr>
             <td> <img src="../src/krumov-vuzstanovka.jpg" width="400px"/></td>
             <td rowspan="2"><p align="justify">&nbsp;Крумовият дворец е сред най-ранните каменни сгради, съществували в Плиска преди опожаряването на столицата от император Никифор I Геник през 811 г. Планът на тази сграда е установен с изключителна точност още през 30-те години на ХХ век, въпреки направените за първи път неголемите сондажни проучвания, направени от Кр. Миятев. Именно той нарича тази огромна по размери сграда Крумов дворец. Новото проучване през 1976 – 1979 г. добавя нови подробности за този паметник. Тогава са потвърдени следите от голям пожар във всички части на сградата. <br/>
                 &nbsp;От градежа на този дворец са запазени предимно подложките на основите и незначителни части от каменния градеж. Те очертават четириъгълник с размери 75х59,50 м, прорязан от перпендикулярни зидове, които образуват 63 клетки. Приземният етаж е бил необитаем. Достъпът до горния етаж е ставал посредством стълби, изградени в четирите кули – по две на източната и западната фасада. Голямата площ (4718 кв. м) подсказва, че сградата е била едновременно жилищен и представителен дворец. Най-близкият аналог на Крумовия дворец е една частично проучена сграда на територията на двореца в Константинопол, която е датирана в VIII в. 
 </p></td>
         </tr>
     </table>
     
    </div>
    </div>
    
    <!-- Popup 11 end -->   
    
    
     <!-- Popup 10 start --> 
     <button style onclick="document.getElementById('id10').style.display='block'" class="button10"></button>
<div id="id10" class="w3-modal">
 <div class="w3-modal-content w3-animate-zoom">
  <header id="header" class="w3-container"> 
   <span onclick="document.getElementById('id10').style.display='none'" 
   class="w3-button2 w3-trasparent w3-large w3-display-topright">&times;</span>
   <h1 class="h1">Южна порта</h1>
      </header>
    <table>
         <tr>
             <td> <img src="../src/krumov-vuzstanovka.jpg" width="400px"/></td>
             <td rowspan="2"><p align="justify">&nbsp;Крумовият дворец е сред най-ранните каменни сгради, съществували в Плиска преди опожаряването на столицата от император Никифор I Геник през 811 г. Планът на тази сграда е установен с изключителна точност още през 30-те години на ХХ век, въпреки направените за първи път неголемите сондажни проучвания, направени от Кр. Миятев. Именно той нарича тази огромна по размери сграда Крумов дворец. Новото проучване през 1976 – 1979 г. добавя нови подробности за този паметник. Тогава са потвърдени следите от голям пожар във всички части на сградата. <br/>
                 &nbsp;От градежа на този дворец са запазени предимно подложките на основите и незначителни части от каменния градеж. Те очертават четириъгълник с размери 75х59,50 м, прорязан от перпендикулярни зидове, които образуват 63 клетки. Приземният етаж е бил необитаем. Достъпът до горния етаж е ставал посредством стълби, изградени в четирите кули – по две на източната и западната фасада. Голямата площ (4718 кв. м) подсказва, че сградата е била едновременно жилищен и представителен дворец. Най-близкият аналог на Крумовия дворец е една частично проучена сграда на територията на двореца в Константинопол, която е датирана в VIII в. 
 </p></td>
         </tr>
     </table>
     
    </div>
    </div>
    
    <!-- Popup 10 end -->   
    
    
</div>
 


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
// When the user clicks anywhere outside of the modal, close it
    window.onclick = function closeOnClick(event) {
        if (event.target.className === "w3-modal") {
            event.target.style.display = "none";
        }
    };
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
         