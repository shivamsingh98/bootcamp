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
                  window.location='login.php';
           }else{
               alert("there was some problem please try again later");
           }
          // console.log(data);
           //$('#answer').val(data);
        }
    });


}

function login(){
    username=$("#username").val();
    password=$("#password").val();
    
    $.ajax({
        type: "POST",
        url: "backend/login_ajax.php",
        data: {
            //data goes here
            username,
            password
            
        },
        success: function (data) {
           //data is returned here
           if( data=='success'){
                  alert("Succesfully Logged in")
                  window.location='index.php';
           }else{
               alert("Wrong User name or Password");
               window.location='';
           }
          // console.log(data);
           //$('#answer').val(data);
        }
    });

}


function addtocart(userid,productid){

    
    $.ajax({
        type: "POST",
        url: "backend/addtocart_ajax.php",
        data: {
            //data goes here
            userid,
            productid
            
        },
        success: function (data) {
           //data is returned here
           if( data=='success'){
                  alert("Succesfully added to crt")
                  window.location='cart.php';
           }else{
               alert("there was some problem please try again later");
           }
          // console.log(data);
           //$('#answer').val(data);
        }
    });
}