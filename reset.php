<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    
    <label for="email" class="left">Enter Your OTP</label><br>
    <input class="form-control" placeholder="OTP" name="otp" id="otp"> </div>
    <label>New password</label>
    <input name"reset" id="password" type="password">
    <span id="match"></span>
     <label>renter password</label>
     <input name"reset" type="password" id="password1">
     <input type="submit" onclick="submit()" >
     <span id="confirm"></span>
</body>
</html>
<script>

var userid;
function reload(){
    let  params = new URLSearchParams(window.location.search);
     userid = params.get('userEmail');
    console.log(userid);
}
reload();
    
    function submit(){
      var EnterOTP = document.getElementById('otp').value;
       var userPassword = document.getElementById('password').value;
       var ConfrimPass = document.getElementById('password1').value;
        
        if (userPassword.length>0) {
        if(userPassword.length>8) {
            document.getElementById('match').innerHTML = "";
        }else{
            document.getElementById('match').innerHTML = "Please Enter Atleat 8 Characters";  
            return 0;
        }
    }else{
         document.getElementById('match').innerHTML =  "Fill This Field ";
         return 0;
    }

    if (ConfrimPass.length > 0){
        if (ConfrimPass != userPassword ) {
        document.getElementById("confirm").innerHTML = "password does not match";
        console.log(123)
        return 0;
        }else {
        document.getElementById("confirm").innerHTML = "";
        console.log(123)
        
     
        }
    }
    else{
         document.getElementById('confirm').innerHTML =  "Fill This Field ";
         console.log(123)
         return 0;
    }
    
     $.ajax({
        url: "https://techyroots.com/ICO-admin-dashboard/resetapi.php",
        type: "POST",
        data: {
            email : userid,
            OTP : EnterOTP,
            password: userPassword
        },
        success: function(dataResult) {
            console.log(dataResult);
            //  let dataValue = JSON.parse(dataResult);
            swal({
            text: "password reset successfully",
            button:false,
           
        })
        
        
        }
    });
    }
</script>