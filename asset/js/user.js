     function deleteData(id)
           {
             // alert(id);
                  $.ajax({
                  //url: '/addConData',
                            url:'http://localhost/CodeIgniter/index.php/User_C/deleteConData/',

                     // url:'<?php echo base_url('User_C/addConData');?>',
                         method: 'POST',

                         data:
                          {
                            harshitaid : id
                         },

                         error: function() {
                         alert('Something is wrong');
                       },

                        success: function(data) {
                          alert(data);
                           // $("tbody").append("<tr><td>"+title+"</td><td>"+description+"</td></tr>");
                            if(data == 1){
                              window.location.reload();
                            } 
                       }
                    });

                     }
        
          $("#submit").click(function()
          {

          // var fname = $("input[name='fname']").val();
          // var lname = $("input[name='lname']").val();
            

            

           $.ajax({
      //url: '/addConData',
           url:'http://localhost/CodeBus/index.php/Bus_C/searchBusData',

         // url:'<?php
         // echo base_url('User_C/addConData');?>',
           method: 'POST',

           // data: {
           //      fname: fname,
           //      lname: lname
           //  },
           // dataType: 'json',
            success: function(data) {
               // $("tbody").append("<tr><td>"+title+"</td><td>"+description+"</td></tr>");
                alert("Succesfully Inserted Data");  
           },
          
           error: function() {
              alert('Something is wrong');
           }

          
        });
 });