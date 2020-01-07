
<?php
include '../header.php';
?>

 <style type="text/css">
	.medical_content{
		margin-top: 155px;

	}
  /* .nav-tabs{
   	margin-left: 30%;
   	margin-right: 30%;
   }*/
   .medical_content .nav-item{
   	padding: 10px;
    background: #002b5c;
    color: #fff;
   }

.Petrol_wrapper .one-left,.one-right,.two-top,.three-down{
  background-color: #fff;
  padding: 10px;
  border-radius: 30px;
  /*border-top: 2px dotted black;*/
  /*margin-top: 20px;*/
  margin-left: 2px;
  margin-right: 2px;
  margin-bottom: 8px;
   
}

  .one-left:hover{
  background-color: #4dc5da;
  color: #fff;
  transition: 0.25;
  border-radius: 14px;
   box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
  .two-top:hover{
  background: #ffffff;
  color: #000;
  transition: 0.25;
  border-radius: 14px;
   box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
  .three-down:hover{
  background-color: #4dc5da;
  color: #fff;
  transition: 0.25;
  border-radius: 14px;
   box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
 }
 .one-right:hover{
  background-color: #4dc5da;
  color: #fff;
   box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  transition: 0.25;
  border-radius: 14px;
 }
.Petrol_wrapper .one{
  margin-top: 170px;
}

.petrol_wrapper .two{
  /*margin-top: 30px;*/
} 
.Petrol_wrapper{
  margin-top: 20px;
  /*padding: 30px;*/
  /*height: 180px;*/
  width: 90%;
  line-height: 1.5em;
    
}


.Petrol_wrapper .Petrol_title{
  font-size: 30px;
  text-transform: uppercase;
  text-align: center;
  font-weight: 700;
  line-height: 1em;
}
.Petrol_wrapper h4{
  font-size: 10px !important;
  text-transform: capitalize;
  /*line-height: 2em;*/
  padding-top: 2px;
  }


</style>
<div class="container ">
  <div class="row">
  <!-- <div class="col-sm-3"></div> -->
  <div class="col-sm-12 col-xs-12">
	<div class="medical_content ">
		<br>
 <!-- Nav tabs -->
			  <ul class="nav nav-tabs ">
			    <li class="nav-item">
			      <a class="nav-link text-uppercase font-weight-bold" data-toggle="tab" href="#home">Hospitals</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link text-uppercase font-weight-bold active" data-toggle="tab" href="#menu1">Hakeems</a>
			    </li>
			  </ul>

   <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane "><br>
      <h3 class="text-uppercase text-center">hospitals</h3>
         <div class="container ">
  <div class="row">
      <div class="Petrol_wrapper">
        <div class="col-xs-12 col-sm-12">
          <div class="row">
            <div class="col-xs-12 col-sm-4 one">
             <div class="one-left"> 
              <div class="Petrol_title">
               Siva Hospital
              </div>
              <h5 class="text-center mt-2"><mark>Dr Sivamurthy MBBS.,</mark><br><strong>General Physician</strong></h5>
                <div class="petrol_text">
                  <p><h5>Address:</h5> Pernambut - Ambur Rd, Pernambut, Tamil Nadu 635810</p>
                  <div style="padding-top: -2px!important;"><h5>Consulting Hours:</h5>9.00 AM to 8.00PM </div>

                </div>
                <div class="morebutton" >
                   <a href="" target="_blank"><button type="button" class="btn  btn-md"><i class="fas fa-headset"></i></button></a>
                  <a href="https://goo.gl/maps/NDM79YNiaFNknbZQ8" target="_blank"><button type="button" class="btn float-right  btn-md">Get From Here</button></a>
                  </div>
              </div>
              
            </div>
            <div class="col-xs-12 col-sm-4 two">
              <div class="two-top" style="background-color:  #4dc5da;"> 
              <div class="Petrol_title ">
                Shifa Clinic
              </div>
              <h5 class="text-center mt-2"><mark>Dr Mohammed Aafaque MBBS.,</mark><br><strong>General Physician</strong></h5>
                <div class="petrol_text">
                  <p><h5>Address:</h5>25/7 Kashim street Pernambut, Tamil Nadu 635810</p>
                  <div style="padding-top: -2px!important;"><h5>Consultant Hours:</h5>Evening:5.00PM to 9.30 PM</div>

                </div>
                <div class="morebutton" >
                  <a href="tel:9944636615" target="_blank"><button type="button" class="btn  btn-md"><i class="fas fa-headset"></i></button></a>
                  <a href="https://goo.gl/maps/fh1ViCH29eShQDKz9" target="_blank"><button type="button" class="btn float-right  btn-md">Get From Here</button></a>
                </div>
              </div>
                  <div class="three-down">
                 <div class="Petrol_title">
                J.S Hospitals
              </div>
              <h5 class="text-center mt-2"><mark>Dr Sarojini MBBS.,Sonologist</mark><br><strong>General Physician</strong></h5>
                <div class="petrol_text">
                  <p><h5>Address:</h5>Thiuveka Nagar Pernambut, Tamil Nadu 635810</p>
                  <div style="padding-top: -2px!important;"><h5>Consultant hours:</h5>24 hours<h5></div>

                </div>
                <div class="morebutton" >
                    <a href="tel:04171232334" target="_blank"><button type="button" class="btn  btn-md"><i class="fas fa-headset"></i></button></a>
                  <a href="https://goo.gl/maps/DhVa3fd5PuJucQLaA" target="_blank"><button type="button" class="btn float-right  btn-md">Get From Here</button></a>
                  </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 one">
              <div class="one-right">
              <div class="Petrol_title ">
                <h5 class="text-center mt-2"><mark>Dr Senthil Kumar MBBS.,DCH</mark><br><strong>Child & General Physician</strong></h5>
              </div>
                <div class="petrol_text">
                  <p><h5>Address:</h5>Niyamath  street -  Pernambut, Tamil Nadu 635810</p>
                  <div style="padding-top: -2px!important;"><h5>Consultant hours:</h5>11.30 AM to 2.00PM <br>6.00PM to 9.00PM</div>

                </div>
                <div class="morebutton" >
                    <a href="tel:" target="_blank"><button type="button" class="btn  btn-md"><i class="fas fa-headset"></i></button></a>
                  <a href="https://goo.gl/maps/y3t5MWEuXK3vrkYS8" target="_blank"><button type="button" class="btn float-right  btn-md">Get From Here</button></a>
                  </div>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>

  </div>
  
</div>
    </div>
    <div id="menu1" class="container tab-pane fade active"><br>
            <h3 class="text-uppercase text-center">hakeems</h3>
         <div class="container ">
  <div class="row">
      <div class="Petrol_wrapper">
        <div class="col-xs-12 col-sm-12">
          <div class="row">
            <div class="col-xs-12 col-sm-4 one">
             <div class="one-left"> 
              <div class="Petrol_title">
              <h5 class="text-center mt-2"><mark>Hakeem Vaseeullah</mark><br><strong>General Physician</strong></h5> 
              </div>
              
                <div class="petrol_text">
                  <p><h5>Address:</h5>Mulla street Pernambut - Ambur Rd, Pernambut, Tamil Nadu 635810</p>
                  <div style="padding-top: -2px!important;"><h5>Consulting Hours:</h5>12.00 AM to 8.00PM </div>

                </div>
                <div class="morebutton" >
                   <a href="tel:087543 99929" target="_blank"><button type="button" class="btn  btn-md"><i class="fas fa-headset"></i></button></a>
                  <a href="https://goo.gl/maps/3z9ZEw9iMKeGbd8q9" target="_blank"><button type="button" class="btn float-right  btn-md">Get From Here</button></a>
                  </div>
              </div>
              
            </div>
            <div class="col-xs-12 col-sm-4 two">
              <div class="two-top" style="background-color:  #4dc5da;"> 
              <div class="Petrol_title ">
               <h5 class="text-center mt-2"><mark>Hakeem Mubarak Ali</mark><br><strong>General Physician</strong></h5>
              </div>
             
                <div class="petrol_text">
                  <p><h5>Address:</h5>Dada street Pernambut, Tamil Nadu 635810</p>
                  <div style="padding-top: -2px!important;"><h5>Consultant Hours:</h5>9.00AM to 9.00 PM PM</div>

                </div>
                <div class="morebutton" >
                  <a href="tel:094439 67727" target="_blank"><button type="button" class="btn  btn-md"><i class="fas fa-headset"></i></button></a>
                  <a href="https://goo.gl/maps/VC7TgVKDyCwB1qGX7" target="_blank"><button type="button" class="btn float-right  btn-md">Get From Here</button></a>
                </div>
              </div>
                  <div class="three-down">
                 <div class="Petrol_title">
               Azeezia Unani
              </div>
              <h5 class="text-center mt-2"><mark>Hakeem Sayeed Ansari</mark><br><strong>General Physician</strong></h5>
                <div class="petrol_text">
                  <p><h5>Address:</h5>Bazar street Pernambut, Tamil Nadu 635810</p>
                  <div style="padding-top: -2px!important;"><h5>Consultant hours:</h5>10.00 AM to 1.00PM <br>6.00PM to 9.00PM</div>

                </div>
                <div class="morebutton" >
                    <a href="tel:9894370826" target="_blank"><button type="button" class="btn  btn-md"><i class="fas fa-headset"></i></button></a>
                  <a href="" target="_blank"><button type="button" class="btn float-right  btn-md">Get From Here</button></a>
                  </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 one">
              <div class="one-right">
              <div class="Petrol_title ">
                <h5 class="text-center mt-2"><mark>Hakeem Kafeel</mark><br><strong>General Physician</strong></h5>
              </div>
                <div class="petrol_text">
                  <p><h5>Address:</h5> New street -  Pernambut, Tamil Nadu 635810</p>
                  <div style="padding-top: -2px!important;"><h5>Consultant hours:</h5>10.00 AM to 9.00 PM <br>6.00PM to 9.00PM</div>

                </div>
                <div class="morebutton" >
                    <a href="tel:" target="_blank"><button type="button" class="btn  btn-md"><i class="fas fa-headset"></i></button></a>
                  <a href="" target="_blank"><button type="button" class="btn float-right  btn-md">Get From Here</button></a>
                  </div>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>

  </div>

  </div>
</div>
</div>
</div>
</div>
</div>
</div>


 
<?php
include '../footer.php';
?>