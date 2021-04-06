
<html>
<head>
	<body style="background-color:powderblue;">
  <style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;

  background-color: #58D68D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>   
   
    

  <?php echo $this->session->flashdata('emailfail'); ?>

  <?php echo validation_errors(); ?>
   <form method="post" action="<?php echo site_url('Bus_C/sendMail'); ?>">  
     <label>Bus No</label><br>
    <input value="<?=$iBusNo?>" type="text" name="iBusNo"> 
     <br><br> 
      <!-- <label>Bus Number</label><br><input value="<?=$busNo?>"  type="hidden" /><br><br>  -->
    <!-- <label>Bus Price</label><input value="<?php// echo $_POST['id']; ?>"><br><br> -->  
    <label>Your Name:</label><br>
    <input type="text" name="name" id="name" value="<?php echo set_value('name'); ?>">
    <br><br>
    <label>Mobile Number:</label><br>
    <input type="text" name="mob" id="mob">
    <br><br>
    <label>Your Email:</label><br>
    <input type="text" id="byemail" name="byemail" placeholder="Sender Email" value="<?php echo set_value('byemail'); ?>">
    <br><br>
    <input type="submit" name="btn_submit" value="Confirm YourBooking ">
</form>  

</body>
</head>

</html>