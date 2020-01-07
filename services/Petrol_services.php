<?php
include '../header.php';
?>
<style type="text/css">
	
.Petrol_wrapper .one-left,.one-right,.two-top,.three-down{
	background-color: #fff;
	padding: 10px;
	border-radius: 30px;
	/*border-top: 2px dotted black;*/
	margin-top: 20px;
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
<div class="container mt-5">
	<div class="row">
      <div class="Petrol_wrapper">
      	<div class="col-xs-12 col-sm-12">
      		<div class="row">
      			<div class="col-xs-12 col-sm-4 one">
      			 <div class="one-left">	
      				<div class="Petrol_title">
      					Essar Petrol Bunk
      				</div>
      					<div class="petrol_text">
      						<p><h5>Address:</h5>27, Pernambut - Ambur Rd, Pernambut, Tamil Nadu 635810</p>
      						<div style="padding-top: -2px!important;"><h5>Availability:</h5>Petrol & Diesel<h5>Timing:<small>24/7</small></h5></div>

      					</div>
      					<div class="morebutton" >
			              <a href="https://goo.gl/maps/PnuQ9jERnH3arbZz8" target="_blank"><button type="button" class="btn float-center  btn-md">Get From Here</button></a>
		              </div>
		          </div>
      				
      			</div>
      			<div class="col-xs-12 col-sm-4 mt-5 two">
      			  <div class="two-top" style="background-color:  #4dc5da;">	
      				<div class="Petrol_title ">
      					HP Petrol Bunk
      				</div>
      					<div class="petrol_text">
      						<p><h5>Address:</h5>Sathkar Pernambut - Gudiyatham Rd, Pernambut, Tamil Nadu 635810</p>
      						<div style="padding-top: -2px!important;"><h5>Availability:</h5>Petrol & Diesel<h5>Timing:<small>24/7</small></h5></div>

      					</div>
      					<div class="morebutton" >
			              <a href="https://goo.gl/maps/MzUZvafq1o122w7g8" target="_blank"><button type="button" class="btn float-center  btn-md">Get From Here</button></a>
		              </div>
		          </div>
		              <div class="three-down">
		             <div class="Petrol_title">
      					Bharat Petrol Bunk
      				</div>
      					<div class="petrol_text">
      						<p><h5>Address:</h5>SH 59,Pernambut - Gudiyatham Rd, Pernambut, Tamil Nadu 635810</p>
      						<div style="padding-top: -2px!important;"><h5>Availability:</h5>Petrol & Diesel<h5>Timing:<small>24/7</small></h5></div>

      					</div>
      					<div class="morebutton" >
			              <a href="https://goo.gl/maps/fYcHPriKFsMckEEC8" target="_blank"><button type="button" class="btn float-center  btn-md">Get From Here</button></a>
		              </div>
		          </div>
      			</div>
      			<div class="col-xs-12 col-sm-4 one">
      				<div class="one-right">
      				<div class="Petrol_title ">
      					Indian Petrol Bunk
      				</div>
      					<div class="petrol_text">
      						<p><h5>Address:</h5>Bakkalapalli, Pernambut - Ambur Rd, Pernambut, Tamil Nadu 635810</p>
      						<div style="padding-top: -2px!important;"><h5>Availability:</h5>Petrol & Diesel<h5>Timing:<small>24/7</small></h5></div>

      					</div>
      					<div class="morebutton" >
			              <a href="https://goo.gl/maps/UApDhU9K113GyQHQA" target="_blank"><button type="button" class="btn float-center  btn-md">Get From Here</button></a>
		              </div>
		          </div>
      			</div>
      			
      		</div>
      		
      	</div>
      </div>

	</div>
	
</div>

<script type="text/javascript">
	$(document).ready(() => {
		 $('.one-left').on('mouseenter', () => {
		$('.one-left').animate({
          fontSize: '24px' 
     
    }, 200)
  });
</script>

<?php
include '../footer.php';
?>