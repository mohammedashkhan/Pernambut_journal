<?php
include '../header.php';
?>

<style type="text/css">
  section {
    /*padding: 40px 10px;*/
    border-radius: 30px;
     box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
     margin: 0 10px;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#tabs{
    background: #fff;
    color: #000;
}
#tabs h6.section-title{
    color: #002b5c;
}

#tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #000;
    background-color: transparent;
    border-color: transparent transparent #f3f3f3;
    border-bottom: 4px solid !important;
    font-size: 20px;
    font-weight: bold;
    text-transform: uppercase;
}
#tabs .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: #000;
    font-size: 14px;
    text-transform: uppercase;
}


/*search bar*/
#searchbar{ 
     margin-left: 15%; 
     padding:15px; 
     border-radius: 10px; 
   } 
 
   input[type=text] { 
      width: 30%; 
      -webkit-transition: width 0.15s ease-in-out; 
      transition: width 0.15s ease-in-out; 
   } 
 
   /* When the input field gets focus, 
        change its width to 100% */
   input[type=text]:focus { 
     width: 70%; 
   } 
 
  #list{ 
    font-size:  1.5em; 
    margin-left: 90px; 
   } 
 
.animals{ 
   display: list-item;     
  }  
</style>
  <br>
  <br>

<section id="tabs">
  <div class="container">
    <h6 class="section-title h1">Bus Timing From Pernambut <i class="fas fa-bus-alt"></i></h6>
    <div class="row">
      <div class=" col-sm-12  ">
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Pernambut <i class="fas fa-arrow-right"></i> Ambur,Gudiyatham,Vellore,Chennai</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Pernambut <i class="fas fa-arrow-right"></i> Karnataka State</a></a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Pernambut <i class="fas fa-arrow-right"></i> Andhra State</a></a>   
          </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        
      <div class="tab_content">
         <h2>Pernambut <i class="fas fa-arrow-right"></i> Ambur</h2> 
         <input id="searchbar" onkeyup="searchbytiming()" type="text"
         name="search" placeholder="Search here.."> 
        <table class="table table-hover" >
          <thead style="background-color: #002b5c;color: #fff;">
            <tr>
              <th>Bus Name</th>
              <th>Departure Timing</th>
              <th>Departure Place</th>
              <!-- <th>Category</th> -->
            </tr>
          </thead>
          <tbody class="org_table ">
            <tr class="timing">
              <td>444</td>
              <td >4:15 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>  
            <tr class="timing" >
              <td>84</td>
              <td >4:52 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
              
            </tr>
            <tr class="timing">
              <td>15</td>
              <td>5:20 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
              
            </tr>
            <tr >
              <td>80</td>
              <td>5:50 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td>           -->
           </tr>
           <tr >
              <td>444</td>
              <td>5:50 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td>           -->
           </tr>
            <tr class="timing">
              <td>Dhanpathy</td>
              <td>6:05 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
              
            </tr>
            <tr>
              <td>P2</td>
              <td>6:20 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
              
            </tr>
            <tr>
              <td>89</td>
              <td>6:45 AM</td>
              <td>Pernambut Bus Stand</td>
             <!--  <td>Government</td> -->
            </tr>
           
           <tr>
              <td>BR</td>
              <td>6:50 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>P2</td>
              <td>6:55 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>P2</td>
              <td>7:10 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>444</td>
              <td>7:20 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>89</td>
              <td>7:25 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>BR</td>
              <td>7:35 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>84</td>
              <td>7:40 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>MR</td>
              <td>7:45 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>84</td>
              <td>7:50 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>89</td>
              <td>7:55 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>BR</td>
              <td>8:00 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>BR</td>
              <td>8:20 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>303</td>
              <td>8:25 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>BR</td>
              <td>8:50 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>89</td>
              <td>9:00 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>

            <tr>
              <td>CRS</td>
              <td>9:15 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>P2</td>
              <td>9:25 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>LGB</td>
              <td>9:3O AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>10</td>
              <td>9:5O AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>84</td>
              <td>9:5O AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>89</td>
              <td>10:0O AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>P2</td>
              <td>10:1O AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>BR</td>
              <td>10:2O AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>p2</td>
              <td>10:3O AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>89</td>
              <td>11:05 AM</td>
              <td>Pernambut Bus Stand</td>
             <!--  <td>Government</td> -->
            </tr>
            <tr>
              <td>BR</td>
              <td>11:15 AM</td>
              <td>Pernambut Bus Stand</td>
             <!--  <td>Private</td> -->
            </tr>
            <tr>
              <td>P2</td>
              <td>11:30 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>84</td>
              <td>11:35 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>MR</td>
              <td>11:40 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>84</td>
              <td>11:50 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>BR</td>
              <td>12:00 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>P2</td>
              <td>12:15 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>LGB</td>
              <td>12:35 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>P2</td>
              <td>12:45 PM</td>
              <td>Pernambut Bus Stand</td>
             <!--  <td>Government</td> -->
            </tr>
            <tr>
              <td>BR</td>
              <td>12:50 PM</td>
              <td>Pernambut Bus Stand</td>
             <!--  <td>Private</td> -->
            </tr>
            <tr>
              <td>BR</td>
              <td>01:00 PM</td>
              <td>Pernambut Bus Stand</td>
             <!--  <td>Private</td> -->
            </tr>
            <tr>
              <td>10</td>
              <td>01:10 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>
            <tr>
              <td>CRS</td>
              <td>01:30 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>15</td>
              <td>01:40 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            <tr>
              <td>BR</td>
              <td>01:50 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>89</td>
              <td>02:05 PM</td>
              <td>Pernambut Bus Stand</td>
             <!--  <td>Private</td> -->
            </tr>


            <tr>
              <td>P2</td>
              <td>02:18 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>Dhanapathy</td>
              <td>02:25 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>P2</td>
              <td>02:40 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            <tr>
              <td>89</td>
              <td>02:47 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            <tr>
              <td>MR</td>
              <td>02:50 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>84</td>
              <td>02:55 PM</td>
              <td>Pernambut Bus Stand</td>
             <!--  <td>Government </td> -->
            </tr>


            <tr>
              <td>89</td>
              <td>03:05 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            <tr>
              <td>BR</td>
              <td>03:10 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>444</td>
              <td>03:20 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            <tr>
              <td>89</td>
              <td>03:30 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            <tr>
              <td>P2</td>
              <td>03:35 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            
            <tr>
              <td>BR</td>
              <td>03:45 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>BR</td>
              <td>04:10 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>89</td>
              <td>04:20 PM</td>
              <td>Pernambut Bus Stand</td>
             <!--  <td>Government </td> -->
            </tr>
            <tr>
              <td>BR</td>
              <td>04:25 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>Dhanpathy</td>
              <td>04:40 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>P2</td>
              <td>04:45 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            <tr>
              <td>BR</td>
              <td>04:50 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private</td> -->
            </tr>
            <tr>
              <td>P2</td>
              <td>05:10 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            <tr>
              <td>CRS</td>
              <td>05:15 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private  </td> -->
            </tr>
            <tr>
              <td>84</td>
              <td>05:25 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            <tr>
              <td>10</td>
              <td>05:30 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            <tr>
              <td>84</td>
              <td>05:50 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            <tr>
              <td>84</td>
              <td>06:00 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            <tr>
              <td>84</td>
              <td>06:05 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            <tr>
              <td>81</td>
              <td>06:10 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government </td> -->
            </tr>
            <tr>
              <td>MR</td>
              <td>06:15 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Private  </td> -->
            </tr>
            <tr><td>BR</td><td>06:22 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>DHANAP</td><td>06:40 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>P2</td><td>06:50 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>BR</td><td>07:00 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>P2</td><td>07:10 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>BR</td><td>07:15 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>BR</td><td>07:30 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>BR</td><td>07:35 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>P2</td><td>07:45 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>15</td><td>07:55 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>84</td><td>08:00 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>LGB</td><td>08:10 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>80</td><td>08:20 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>80</td><td>08:25 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>84</td><td>08:30 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>BR</td><td>08:35 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>84</td><td>08:45 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>89</td><td>08:55 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>84</td><td>09:10 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>P2</td><td>09:20 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>CRS</td><td>09:30 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>MR</td><td>09:50 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>P2</td><td>10:15 PM</td><td>Pernambut Bus Stand</td></tr>
            <tr><td>BR</td><td>10:56 PM</td><td>Pernambut Bus Stand</td></tr>
          </tbody>
        </table>

        </div>
    </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            
   <div class="tab_content">
         <h2>Pernambut <i class="fas fa-arrow-right"></i> Bangalore</h2> 
        <table class="table table-hover" >
          <thead style="background-color: #002b5c;color: #fff;">
            <tr>
              <th>Bus Name</th>
              <th>Departure Timing</th>
              <th>Departure Place</th>
              <!-- <th>Category</th> -->
            </tr>
          </thead>
          <tbody class="org_table">
            <tr>
              <td>444</td>
              <td>4:15 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>  
            <tr>
              <td>444</td>
              <td>5:45 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
              
            </tr>
            <tr>
              <td>444</td>
              <td>8:00 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
              
            </tr>
            <tr>
              <td>444</td>
              <td>3:15 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td>           -->
           </tr>
        </tbody>
        </table>
        <h2>Pernambut <i class="fas fa-arrow-right"></i> KGF</h2> 
        <table class="table table-hover" >
          <thead style="background-color: #002b5c;color: #fff;">
            <tr>
              <th>Bus Name</th>
              <th>Departure Timing</th>
              <th>Departure Place</th>
              <!-- <th>Category</th> -->
            </tr>
          </thead>
          <tbody class="org_table">
            <tr>
              <td>BR</td>
              <td>5:40 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>  
            <tr>
              <td>87</td>
              <td>8:30 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
              
            </tr>
            <tr>
              <td>BR</td>
              <td>2:00 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
              
            </tr>
            <tr>
              <td>87</td>
              <td>10:30 PM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td>           -->
           </tr>
        </tbody>
        </table>
        </div>
        </div>   
             <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
      <div class="tab_content">
         <h2>Pernambut <i class="fas fa-arrow-right"></i> KUPPAM</h2> 
        <table class="table table-hover" >
          <thead style="background-color: #002b5c;color: #fff;">
            <tr>
              <th>Bus Name</th>
              <th>Departure Timing</th>
              <th>Departure Place</th>
              <!-- <th>Category</th> -->
            </tr>
          </thead>
          <tbody class="org_table">
            <tr>
              <td>RAMAN</td>
              <td>5:20 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
            </tr>  
            <tr>
              <td>RAMAN</td>
              <td>7:00 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
              
            </tr>
            <tr>
              <td>88</td>
              <td>8:00 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td> -->
              
            </tr>
            <tr>
              <td>APSRTC</td>
              <td>9:15 AM</td>
              <td>Pernambut Bus Stand</td>
              <!-- <td>Government</td>           -->
           </tr>
        </tbody>
        </table>
        </div>
        </div>

           </div>

          </div>
          <!-- <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
          </div> -->
        
      
          </div>
  </div>
</div>

</section>
<br>

<script type="text/javascript">
  function searchbytiming() { 
    let input = document.getElementById('searchbar').value 
    input=input.toLowerCase(); 
    let x = document.getElementsByClassName('timing'); 
      
    for (i = 0; i < x.length; i++) {  
        if (!x[i].innerHTML.toLowerCase().includes(input)) { 
            x[i].style.display="none"; 
        } 
        else { 
            x[i].style.display="list-item";                  
        } 
    } 
} 
</script>
<?php
include '../footer.php';
?>