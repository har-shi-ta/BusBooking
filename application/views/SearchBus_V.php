
<html>
<title> First MVC Project</title>
<body style="background-color:powderblue;">
<h1 align="center">Search Your Bus:</h1>
<h1 align="center">GSRTC:</h1>

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

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</style>   
 <?php echo $this->session->flashdata('samebus'); ?>
  <?php echo validation_errors(); ?>
<form method="post" action="<?php echo base_url("index.php/list_buses");?>">

      
        <select class="form-control" name="txt_from" id="txt_from">
            <?php 

              foreach($source as $row)
            { 
              
              echo '<option value="'.$row[iSourceId].'">'.$row[vSourceName].'</option>';
            }
            ?>
        </select><br>
       
        <select class="form-control" id="txt_to" name="txt_to">
            <?php foreach($desti as $row1)
            { 
              
              echo '<option value="'.$row1[iDestinationId].'">'.$row1[vDestinationName].'</option>';
            }

            ?>
        </select><br>
      
       <label for="splace">Travel Date:</label><br>
       <input type="date" id="date" name="date"><br> 
 
 <!-- <label for="txt_from">From:</label><br>
  <input type="text" id="txt_from" name="txt_from" placeholder="Enter From: (ex. Ahmedabad)"><br>
 -->
  <!-- <label for="txt_to">To:</label><br>
  <input type="text" id="txt_to" name="txt_to" placeholder="Enter To: (ex. Delhi)"><br><br> -->

  <input type="submit" value="search"  id='search'>
</form> 



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
 $("#submit").click(function()
          {

           var fname = $("input[name='fname']").val();
           var lname = $("input[name='lname']").val();
          //  alert(fname);
            

           $.ajax({
      //url: '/addConData',
         url:'http://localhost/CodeIgniter/index.php/User_C/addConData',

         // url:'<?php
         // echo base_url('User_C/addConData');?>',
           method: 'POST',

           data: {
                fname: fname,
                lname: lname
            },
           // dataType: 'json',
            success: function(data) {
               // $("tbody").append("<tr><td>"+title+"</td><td>"+description+"</td></tr>");
                alert("Succesfully Inserted Data");  
           },
          
           error: function() {
              alert('Something is wrong');
           }
</script> 
 -->

 
</body>
</html>