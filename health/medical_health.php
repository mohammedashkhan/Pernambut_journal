<?php
include '../header.php';
?>


 <style type="text/css">
 	.card_wrapper{
 		background-color: #fff;
 		padding:30px 30px;
 		margin: 20px 0;
 		border-radius: 30px;
 	}
 	.card_wrapper:hover {
  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
 	.card_wrapper .card_title{
 		color: #fff;
 		font-size: 20px;
 		padding: 30px 40px;
 		text-align: center;
 		text-transform: uppercase;
 		font-weight: 500;
 		background-color: #002b5c;
 		margin: -5px;

 	}

 	

 	/*selection divider*/
 	.divider
{
	position: relative;
	margin-top: 5px;
	height: 1px;

}
.div-transparent:before
{
	content: "";
	position: absolute;
	top: 0;
	left: 5%;
	right: 5%;
	width: 90%;
	height: 1px;
	color: white;

	background-image: linear-gradient(to right, transparent, rgb(48,49,51), transparent);
}


.div-arrow-down:after
{
	content: "";
	position: absolute;
	z-index: 1;
	top: -7px;
	left: calc(50% - 7px);
	width: 14px;
	height: 14px;
	transform: rotate(45deg);
	background-color: white;
	border-bottom: 1px solid rgb(48,49,51);
	border-right: 1px solid rgb(48,49,51);
}

.card-text {
	padding-top: 30px;
}

.card-text a{
	background-color: #002b5c;
	margin-top: 5px;
	border-radius: 40%;
	color: #fff;
}
 .content  {
	line-height: 40%;
}

 </style>
<div class="container" style="margin-top: 160px;">
	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<div class="card_wrapper ">
			
			<div class="card_title">Raja Medicals</div>
			<div class="divider div-transparent div-arrow-down"></div>
			<div class="card-text">
				<div class="text-center text-uppercase font-italic">Prop: P.Palani</div>
				<h4>Address:</h4><span>391/110 High Road (Next to Road Masjid), Pernambut, Tamil Nadu 635810</span>
				  <a class="btn float-lg-right" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fas fa-chevron-down"></i></a>	
		     </div>

		    <div  class="collapse multi-collapse" id="multiCollapseExample1">
		       <div class="content">	
		    	<p ><h4>Mobile Number:</h4><a class="btn" href="tel:9443097480"><button type="button" class="btn call_btn"><i class="fas fa-phone"></i></button></a></p>
		    	<p><h4>Landline:</h4><a class="btn" href="tel:04171-23048"><button type="button" class="btn call_btn"><i class="fas fa-phone"></i></button></a></p>
		    	<p><h4>Working Hours:</h4>10:00 AM 10:30 PM <sub class="text-muted">(ALL Days)</sub></p>
		       </div> 	
			   <div class="morebutton" >
		              <a href="https://goo.gl/maps/pJXpbXcvUZfYUSar9" target="_blank"><button type="button" class="btn center-block  btn-md">Get From Here</button></a>
		      </div>
		  </div>
            </div>
		</div>
		   
		<div class="col-xs-12 col-sm-4">
			<div class="card_wrapper ">
			
			<div class="card_title">Zakir Medicals</div>
			<div class="divider div-transparent div-arrow-down"></div>
			<div class="card-text">
				<div class="text-center text-uppercase font-italic">Prop: Zakir Hussain</div>
				<h4>Address:</h4><span>268,high Road, Pernambut, Tamil Nadu 635810</span>
				  <a class="btn float-lg-right" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fas fa-chevron-down"></i></a>	
		     </div>

		    <div  class="collapse multi-collapse" id="multiCollapseExample2">
		    	<div class="content">	
			    	<p ><h4>Mobile Number:</h4><a class="btn" href="tel:9894061911"><button type="button" class="btn call_btn"><i class="fas fa-phone"></i></button></a></p>
			    	<p><h4>Working Hours:</h4>10:00 AM 2:30 PM <br><br><br>5:30 PM to 11:00 PM <sub class="text-muted">(ALL Days)</sub></p>
		       </div> 	
			   <div class="morebutton" >
			              <a href="https://goo.gl/maps/49vV3HYj1iikAgWH8" target="_blank"><button type="button" class="btn center-block  btn-md">Get From Here</button></a>
			   </div>
		  </div>
            </div>
		</div>
		<div class="col-xs-12 col-sm-4">
		  <div class="card_wrapper">
			
			<div class="card_title">Waseem Medicals</div>
			<div class="divider div-transparent div-arrow-down"></div>
			<div class="card-text">
				<div class="text-center text-uppercase font-italic">Prop: C.Vaseeullah</div>
				<h4>Address:</h4><span>1/2 High Road (Next to IOB ATM), Pernambut, Tamil Nadu 635810</span>
				 <a class="btn float-lg-right" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fas fa-chevron-down"></i></a>
			 </div>
			 <div  class="collapse multi-collapse" id="multiCollapseExample3">
				  <div class="content">	
			    	<p ><h4>Mobile Number:</h4><a class="btn" href="tel:9092786100"><button type="button" class="btn call_btn"><i class="fas fa-phone"></i></button></a></p>
			    	<p><h4>Working Hours:</h4>09:00 AM 10:00 PM <sub class="text-muted">(ALL Days)</sub></p>
			      </div> 	
				  <div class="morebutton" >
			              <a href="https://goo.gl/maps/DBboggswCuKjRF2N8" target="_blank"><button type="button" class="btn center-block  btn-md">Get From Here</button></a>
			      </div>
		     </div>
           </div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<div class="card_wrapper ">
			
			<div class="card_title">Karthi Medicals</div>
			<div class="divider div-transparent div-arrow-down"></div>
			<div class="card-text">
				<div class="text-center text-uppercase font-italic">Prop: P.C.Karthikeyan</div>
				<h4>Address:</h4><span>2/1 Subbiya Street(Near Bus stand), Pernambut, Tamil Nadu 635810</span>
				  <a class="btn float-lg-right" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fas fa-chevron-down"></i></a>	
		     </div>

		    <div  class="collapse multi-collapse" id="multiCollapseExample4">
		    	<div class="content">	
			    	<p ><h4>Mobile Number:</h4><a class="btn" href="tel:9940976253"><button type="button" class="btn call_btn"><i class="fas fa-phone"></i></button></a></p>
			    	
			    	<p><h4>Working Hours:</h4>10:00 AM 10:30 PM <sub class="text-muted">(ALL Days)</sub></p>
			     </div> 	
				 <div class="morebutton" >
			              <a href="https://goo.gl/maps/JgsM61krbWYmipoS8" target="_blank"><button type="button" class="btn center-block  btn-md">Get From Here</button></a>
			     </div>
		  </div>
            </div>
		</div>
		   
		<div class="col-xs-12 col-sm-4">
			<div class="card_wrapper ">
			
			<div class="card_title">Alagu Pharmacy</div>
			<div class="divider div-transparent div-arrow-down"></div>
			<div class="card-text">
				<div class="text-center text-uppercase font-italic">Prop: K.Laskshmanan</div>
				<h4>Address:</h4><span>33,Achari Street (Next to Bharathi Hospital), Pernambut, Tamil Nadu 635810</span>
				  <a class="btn float-lg-right" data-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fas fa-chevron-down"></i></a>	
		     </div>

		    <div  class="collapse multi-collapse" id="multiCollapseExample5">
		    	<div class="content">	
			    	<p ><h4>Mobile Number:</h4><a class="btn" href="tel:9751087797"><button type="button" class="btn call_btn"><i class="fas fa-phone"></i></button></a></p>
			    	<p><h4>Working Hours:</h4>08:00 AM 10:30 PM <sub class="text-muted">(ALL Days)</sub></p>
			    </div> 	
				 <div class="morebutton" >
			              <a href="https://goo.gl/maps/DBboggswCuKjRF2N8" target="_blank"><button type="button" class="btn center-block  btn-md">Get From Here</button></a>
			     </div>
		  </div>
            </div>
		</div>
		<div class="col-xs-12 col-sm-4">
		  <div class="card_wrapper">
			
			<div class="card_title">Siva Medicals</div>
			<div class="divider div-transparent div-arrow-down"></div>
			<div class="card-text">
				<div class="text-center text-uppercase font-italic">Prop: Siva</div>
				<h4>Address:</h4><span>high Road (Near Siva cooldrinks), Pernambut, Tamil Nadu 635810</span>
				 <a class="btn float-lg-right" data-toggle="collapse" href="#multiCollapseExample6" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fas fa-chevron-down"></i></a>
			 </div>
			 <div  class="collapse multi-collapse" id="multiCollapseExample6">
			    <div class="content">	
			    	<p ><h4>Mobile Number:</h4><a class="btn" href="tel:"><button type="button" class="btn call_btn"><i class="fas fa-phone"></i></button></a></p>
			    	<p><h4>Working Hours:</h4>10:00 AM 10:00 PM <sub class="text-muted">(ALL Days)</sub></p>
			    </div> 	
				<div class="morebutton" >
			              <a href="https://goo.gl/maps/k9uuQVK9rByczeiN6" target="_blank"><button type="button" class="btn center-block  btn-md">Get From Here</button></a>
			    </div>
		     </div>
           </div>
		</div>
	</div>
</div>



<?php
include '../footer.php';
?>