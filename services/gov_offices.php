<?php
include '../header.php';
?>

<style type="text/css">
 	.card-title p{
 		color: #000;
 		text-transform: capitalize;
 		font-size: 15px;
 	}
 	.card h1{
 		text-transform: uppercase;
 		font-size: 30px;
 	}
 	#new_pages .card{
 	
 		border-radius: 20px;
 		
 		margin-bottom: 5px;
 	}
 	.card:hover {
  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
img.card-img-top {
  width: 100%;
  height: 200px;
  object-fit:cover; 
  transition: all .25s ease;
} 

/*=== Trigger  ===*/
.animate {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

  
/*=== Optional Delays, change values here  ===*/
.fadeInLeft {
-webkit-animation-delay: 0.5s;
-moz-animation-delay: 0.5s;
animation-delay: 0.5s;
}

.fadeIndown {
-webkit-animation-delay: 0.5s;
-moz-animation-delay: 0.5s;
animation-delay: 0.5s;
}

.fadeInright {
-webkit-animation-delay: 0.5s;
-moz-animation-delay: 0.5s;
animation-delay: 0.5s;
}
.fadeInUp {
-webkit-animation-delay: 0.5s;
-moz-animation-delay: 0.5s;
animation-delay: 0.5s;
}

.fadeInUpBig {
-webkit-animation-delay: 5.5s;
-moz-animation-delay: 5.5s;
animation-delay: 5.5s;
}


/*=== Animations start here  ===*/

/*==== FADE IN UP ===*/
@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}


/*=== FADE IN DOWN ===*/
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
 }
@-webkit-keyframes fadeInDown {
0% {
  opacity: 0;
  -webkit-transform: translate3d(0, -100%, 0);
  transform: translate3d(0, -100%, 0);
}
100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
}
}
@keyframes fadeInDown {
0% {
  opacity: 0;
  -webkit-transform: translate3d(0, -100%, 0);
  transform: translate3d(0, -100%, 0);
}
100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
}
} 

/*=== FADE IN LEFT ===*/
@-webkit-keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}


/*==== FADE IN RIGHT ===*/
@-webkit-keyframes fadeInRight {
  from {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeInRight {
  from {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInRight {
  -webkit-animation-name: fadeInRight;
  animation-name: fadeInRight;
}

/*=== FADE IN  ===*/
@-webkit-keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}
@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}
.fadeIn {
    -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
}
/*=== FADE IN UP Big ===*/
.fadeInUpBig {
  -webkit-animation-name: fadeInUpBig;
  animation-name: fadeInUpBig;
  }
@-webkit-keyframes fadeInUpBig {
0% {
	opacity: 0;
	-webkit-transform: translate3d(0, 2000px, 0);
	transform: translate3d(0, 2000px, 0);
}
100% {
	opacity: 1;
	-webkit-transform: none;
	transform: none;
	}
}
@keyframes fadeInUpBig {
0% {
	opacity: 0;
	-webkit-transform: translate3d(0, 2000px, 0);
	transform: translate3d(0, 2000px, 0);
}
100% {
	opacity: 1;
	-webkit-transform: none;
	transform: none;
	}
} 

/*=== FADE IN DOWN Big ===*/
.fadeInDownBig {
  -webkit-animation-name: fadeInDownBig;
  animation-name: fadeInDownBig;
}
@-webkit-keyframes fadeInDownBig {
0% {
	opacity: 0;
	-webkit-transform: translate3d(0, -2000px, 0);
	transform: translate3d(0, -2000px, 0);
}
100% {
	opacity: 1;
	-webkit-transform: none;
	transform: none;
}
}
h2{
	font-weight: 500 !important;
	padding: 10px 0 !important;
}

 </style>
<div class="container" id="new_pages" style="padding-top: 150px;">
	<h3 style="text-align: center ;">Government Offices</h3>
        <div class="row">
        	<div class="col-xs-12 col-sm-4">
					  <div class="card animate fadeInRight" style="width:360px">
					  	<h2>Muncipality Office</h2>
					    <a href="../images/muncipality_gov.jpg" target="_blank"><img class="card-img-top" src="../images/muncipality_gov.jpg" alt="" style="width:100%" ></a>
					    <div class="card-body">
					      <h1 class="card-title">Address:<br><p>#643 Chowk Road(Near TVS Showroom)<br>Pernambut-635810</p></h1>
					      <div class="morebutton">
						   <a href="https://goo.gl/maps/Lobrro7PYurRHPqW6">  <button type="submit" class="btn ">Get From Here</button></a>
						  </div>
				        </div>
			         </div>		    
		    </div>

		    <div class="col-xs-12 col-sm-4">
					  <div class="card animate fadeInDown" style="width:360px">
					  	<h2 >BSNL Telephone Office</h2>
					    <a href="../images/bsnl_gov.jpg" target="_blank"><img class="card-img-top" src="../images/bsnl_gov.jpg" alt="" style="width:100%" ></a>
					    <div class="card-body">
					      <h1 class="card-title">Address:<br><p>Captain Yousuf street(Near IOB Bank)<br> Pernambut-635810</p></h1>
					      <div class="morebutton">
						    <a href="https://goo.gl/maps/a89MZKRnSk4XLUmU7"> <button type="submit" class="btn ">Get From Here</button></a>
						 </div>
				        </div>
			         </div>		    
		    </div>

		    <div class="col-xs-12 col-sm-4">
					  <div class="card animate fadeInLeft" style="width:360px">
					  	<h2>Police Station</h2>
					    <a href="../images/police_station.jpg" target="_blank"><img class="card-img-top" src="../images/police_station.jpg" alt="" style="width:100%" ></a>
					    <div class="card-body">
					      <h1 class="card-title">Address:<br><p>Islamia High School Street(Near Bus Stand)<br>Pernambut-635810</p></h1>
					      <div class="morebutton">
						    <a href="https://goo.gl/maps/E776Uuix3EW4jc5Q7"> <button type="submit" class="btn ">Get From Here</button></a>
						 </div>
				        </div>
			         </div>		    
		    </div>

	    </div>
	    <div class="row mt-5">
	    	<div class="col-xs-12 col-sm-4"> 
	    		<div class="card animate fadeInLeft" style="width:360px">
					  	<h2>EB Office</h2>
					    <a href="../images/eb_gov.jpg" target="_blank"><img class="card-img-top" src="../images/eb_gov.jpg" alt="" style="width:100%; " ></a>
					    <div class="card-body">
					     <h1 class="card-title">Address:<br><p>Pernambut-Ambur Rd(Next tp ESSAR Petrol Bank)<br> Pernambut-635810</p></h1>
					      <div class="morebutton">
						     <a href="https://goo.gl/maps/ETBmsg47pCuZPJ5z6"><button type="submit" class="btn ">Get From Here</button></a>
						 </div>
				        </div>
			         </div>		</div>
        	<div class="col-xs-12 col-sm-4">
					  <div class="card animate fadeInRight" style="width:360px">
					  	<h2>Fair Engine Office</h2>
					    <a href="../images/fair_gov.jpg" target="_blank"><img class="card-img-top" src="../images/fair_gov.jpg" alt="" style="width:100%; " ></a>
					    <div class="card-body">
					     <h1 class="card-title">Address:<br><p>Pernambut-Ambur Rd(Near Ramchandran Theater) <br>Pernambut-635810</p></h1>
					      <div class="morebutton">
						     <a href="https://goo.gl/maps/qiDyesy3XLrRgTk97"><button type="submit" class="btn ">Get From Here</button></a>
						 </div>
				        </div>
			         </div>		    
		    </div>
		    <div class="col-xs-12 col-sm-4">
		    	<div class="card animate fadeInUp" style="width:360px">
					  	<h2>BDO Office</h2>
					    <a href="../images/icon.png" target="_blank"><img class="card-img-top" src="../images/icon.png" alt="" style="width:100%; " ></a>
					    <div class="card-body">
					     <h1 class="card-title">Address:<br><p>Pernambut-Gudiyatham Rd(Near Banglamedu)<br> Pernambut-635810</p></h1>
					      <div class="morebutton">
						     <a href="https://goo.gl/maps/9WsiJHZo9F4YhJDQ7"><button type="submit" class="btn ">Get From Here</button></a>
						 </div>
				        </div>
			         </div>	

		    </div>
		</div>
		<div class="row mt-5">
	    	<div class="col-xs-12 col-sm-4"> 
	    		<div class="card animate fadeInUpBig" style="width:360px">
					  	<h2>Register Office</h2>
					    <a href="../images/icon.png" target="_blank"><img class="card-img-top" src="../images/icon.png" alt="" style="width:100%; " ></a>
					    <div class="card-body">
					     <h1 class="card-title">Address:<br><p>Pernambut-Melpathi Rd -Pernambut-635810</p></h1>
					      <div class="morebutton">
						     <a href=""><button type="submit" class="btn ">Get From Here</button></a>
						 </div>
				        </div>
			         </div>		
			     </div>
  
		    <div class="col-xs-12 col-sm-4">
		    	<div class="card animate fadeInLeft" style="width:360px">
					  	<h2>Forest Office</h2>
					    <a href="../images/icon.png" target="_blank"><img class="card-img-top" src="../images/icon.png" alt="" style="width:100%; " ></a>
					    <div class="card-body">
					     <h1 class="card-title">Address:<br><p>Pernambut-Melpathi Rd -Pernambut-635810</p></h1>
					      <div class="morebutton">
						     <a href=""><button type="submit" class="btn ">Get From Here</button></a>
						 </div>
				        </div>
			         </div>	
		    </div>
		    <div class="col-xs-12 col-sm-4">
		    	<div class="card animate fadeInDown" style="width:360px">
					  	<h2>Taluka Office</h2>
					    <a href="../images/icon.png" target="_blank"><img class="card-img-top" src="../images/icon.png" alt="" style="width:100%; " ></a>
					    <div class="card-body">
					     <h1 class="card-title">Address:<br><p>Pernambut-Gudiyatham Rd -Pernambut-635810</p></h1>
					      <div class="morebutton">
						     <a href=""><button type="submit" class="btn ">Get From Here</button></a>
						 </div>
				        </div>
			         </div>	
		    </div>
		</div>
</div>




<?php
include '../footer.php';
?>