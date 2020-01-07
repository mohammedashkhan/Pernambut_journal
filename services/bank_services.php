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
   transition: .25s;
}
img.card-img-top {
  width: 100%;
  height: 200px;
  object-fit:cover; 
  transition: all .25s ease;
} 

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
-webkit-animation-delay: 1.5s;
-moz-animation-delay: 1.5s;
animation-delay: 1.5s;
}

.fadeInright {
-webkit-animation-delay: 2.5s;
-moz-animation-delay: 2.5s;
animation-delay: 2.5s;
}
.fadeInUp {
-webkit-animation-delay: 3.5s;
-moz-animation-delay: 3.5s;
animation-delay: 3.5s;
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


h2{
	font-weight: 500 !important;
	padding: 10px 0 !important;
}




 </style>
<div class="container" id="new_pages" style="padding-top: 150px;">
	<h3 style="text-align: center ;">Respective Bank & ATMs</h3>
        <div class="row">
        	<div class="col-sm-4">
					  <div class="card animate fadeInRight " style="width:360px">
					  	<h2>State Bank Of India <br> & <br>ATM </h2>
					    <a href="../images/sbi_bank.jpg" target="_blank"><img class="card-img-top" src="../images/sbi_bank.jpg" alt="" style="width:100%" ></a>
					    <div class="card-body">
					      <h1 class="card-title">Address:<br><p>#248 High Road-Pernambut-635810</p></h1>
					      <div class="morebutton">
						   <a href="https://goo.gl/maps/zfEDz7kGrBcqDT9b9">  <button type="submit" class="btn ">Get From Here</button></a>
						 </div>
				        </div>
			         </div>		    
		    </div>

		    <div class="col-sm-4">
					  <div class="card  animate fadeInUp" style="width:360px">
					  	<h2>Indian Overseas Bank <br> & <br>ATM </h2>
					    <a href="../images/iob_bank.jpg" target="_blank"><img class="card-img-top" src="../images/iob_bank.jpg" alt="" style="width:100%" ></a>
					    <div class="card-body">
					      <h1 class="card-title">Address:<br><p>Noor Ahmed 2nd street<br>Near BSNL office Pernambut-635810</p></h1>
					      <div class="morebutton">
						    <a href="https://goo.gl/maps/mVUC3kp2afJfww9EA"> <button type="submit" class="btn ">Get From Here</button></a>
						 </div>
				        </div>
			         </div>		    
		    </div>

		    <div class="col-sm-4">
					  <div class="card  animate fadeInLeft" style="width:360px">
					  	<h2>Canara Bank <br> & <br>ATM </h2>
					    <a href="../images/canara_bank.jpg" target="_blank"><img class="card-img-top" src="../images/canara_bank.jpg" alt="" style="width:100%" ></a>
					    <div class="card-body">
					      <h1 class="card-title">Address:<br><p>High Road-Pernambut-635810</p></h1>
					      <div class="morebutton">
						    <a href="https://goo.gl/maps/hXDG4fDPRbXsE4bb7"> <button type="submit" class="btn ">Get From Here</button></a>
						 </div>
				        </div>
			         </div>		    
		    </div>

	    </div>
	    <div class="row mt-5">
	    	<div class="col-sm-4"></div>
        	<div class="col-sm-4">
					  <div class="card animated fadeInUp" style="width:360px">
					  	<h2>Indian Bank<br> & <br>ATM </h2>
					    <a href="../images/indian_bank.jpg" target="_blank"><img class="card-img-top" src="../images/indian_bank.jpg" alt="" style="width:100%; " ></a>
					    <div class="card-body">
					     <h1 class="card-title">Address:<br><p>#444 High Road <br>Near TNTJ Mashid Pernambut-635810</p></h1>
					      <div class="morebutton">
						     <a href="https://goo.gl/maps/fj4XjWaPKVnL5Lhj7"><button type="submit" class="btn ">Get From Here</button></a>
						 </div>
				        </div>
			         </div>		    
		    </div>
		    <div class="col-sm-4"></div>
		</div>
</div>










<?php
include '../footer.php';
?>