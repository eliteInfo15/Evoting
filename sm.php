      var formElement = document.querySelector("#add_voter");
               $.ajax({
                url: "add_voter.php", /* THEN THE AJAX CALL */
        type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
        /* PAGE WHERE WE WILL PASS THE DATA */
        data:  new FormData(formElement),
      
      contentType: false,
          processData:false, /* THE DATA WE WILL BE PASSING */
        success: function(result){
            alert(result);
            /*         
              var container = document.getElementById("container_pwd");
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            var input1 = document.createElement("input");
                 
                input1.type = "text";
                input1.id="phone";
                input1.value=$('#voter_phone').val();
                container.appendChild(input1);
                 var input2 = document.createElement("input");
                 
                input2.type = "text";
                input2.id="name";
                input2.value=$('#voter_name').val();
                container.appendChild(input2);
                var input3 = document.createElement("input");
                 
                input3.type = "text";
                input3.id="otp";
                input3.value=result;
                container.appendChild(input3);
           var para = document.createElement("p");
           para.id="mydata";
                para.innerHTML=dataString;
                 container.appendChild(para);
       $('#OTPmodal').modal('show');        

             
             
             
              
          
           
         
           
        */}
      });