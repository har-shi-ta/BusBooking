<!DOCTYPE html>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .fa {
  padding: 20px;
  font-size: 30px;
  width: 40px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}
.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 50px 0px 50px 0px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1,.button2,.button3,.button4,.button5,.button6{width: 500px;}

</style>
</head>
<body style="background-color:powderblue;">

<h1 align="center">GSRTC:</h1>
   
<div align="center">
<a class="button button1" id="submit" href="<?php echo base_url(); ?>index.php/search_buses">Advance Booking</a>
<button class="button button2">Cancellation   </button><br>
<button class="button button3">Itineries      </button>
<button class="button button4">Current Booking</button><br>
<button class="button button5">Track Bus</button>
<button class="button button6">Time Table</button>
</div>
<!-- select iBusNo,tTimeD from searchbus where (vFrom='Ahemdabad'and vTo="Delhi"); -->
<div align="center" style="margin-top: 50px">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
</div>

 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="<?php //echo base_url();?>asset/js/user.js"></script> -->

</body>
</html>
