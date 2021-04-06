<html>
<head>
	<title>YOUR BUSES :</title>
	<body style="background-color:powderblue;">
	<h1>YOUR BUSES:</h1>
	<table border="1" bgcolor="#58D68D" width="638" border="1" cellspacing="5" cellpadding="5">
		<thead>

             <th>Sr No</th>
             <th>Bus No.</th>
			<th>From Location</th>
			<th>To Location</th>
           <th>From Time</th>
           <th>To Time</th>
          

		</thead>
		<tbody>

		 <?php 
     
      foreach ($bus as $row) { ?>
			     
                    
				    <td><?php echo $row['iBusNo'];?></td>

				    <td><?php echo $row['vFrom'];?></td>

				    <td><?php echo $row['vTo'];?></td>

				    <td><?php echo $row['tTimeD'];?></td>

				    <td><?php echo $row['tTimeA'];?></td>
           
                    <td><a href="Bus_C/bookBusData/<?php echo $row['iBusNo'];?>">BookBus</a></td>         
				 </tr>
        
			<?php }?> 	
</tbody>	
	</table>


</head>
</html>
</body>