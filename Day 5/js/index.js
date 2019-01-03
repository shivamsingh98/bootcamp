function signup(){
    username=$("#username").val();
    password=$("#password").val();
    
    $.ajax({
        type: "POST",
        url: "backend/signup_ajax.php",
        data: {
            //data goes here
            username,
            password
            
        },
        success: function (data) {
           //data is returned here
           if( data=='success'){
                  alert("Succesfully registered")
                  window.location='';
           }else{
               alert("there was some problem please try again later");
           }
          // console.log(data);
           //$('#answer').val(data);
        }
    });


}