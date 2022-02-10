
<!DOCTYPE html>
<head>
<title>Email Verification</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>    
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <style>
   .gradient-custom {
  /* fallback for old browsers */
  background: #FFFFFF;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, #FFFFFF,#FFFFFF);

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, #FFFFFF,#FFFFFF)
}  

.f2:hover{
      border: 10px solid red; 
      border-top-color: orange;
      background-color: red;
      opacity:1.0;
    }
    
 </style>
 </head>
<body>
<!--Email: <input type="text" name="email" id="userEmail"><br>-->
<!--<button  onclick = "submit()"> <span>Submit</span> </button>-->
<!--<span id="useremailError"></span>-->
<section class="vh-100 gradient-custom" >
  <div class="container py-5 h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100" class="header-banner bg-theme-grad-alt" >
      <div class="col-12 col-md-8 col-lg-6 col-xl-5" style="border-color: #fe4350">
        <div class="card  text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center" style="background-color:#fe4350ba;border-radius: 5px">

            <div class="mb-md-5 mt-md-4 pb-5">

             
              <p  style="color:black;font-size:20px"> Enter Your Email</p>

              <div class="form-outline form-white mb-4">
                <input type="email" name="email" id="userEmail" class="form-control form-control-lg" placeholder="Email">
               
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit" onclick = "submit()" class="f2">SUBMIT</button>
              
              <span id="useremailError"></span>

              

            </div>


          </div>
        </div>
     
   
 
</section>

</body>
</html> 

<script>
console.log(1 === 1);
    function submit(){
    var Email = document.getElementById('userEmail').value;
    var re = /\S+@\S+\.\S+/;
    var mail=  re.test(Email);
    
    console.log(Email);
    if(Email.length > 0){
        if(mail){
        document.getElementById("useremailError").innerHTML = "";
    }else{
       swal({
            text: "Email is not in Proper Format",
            button:false,
           })
        return 0;
    }
    }
    else{
        swal({
            text: "Please Enter This field",
            button:false,
           })
         return 0;
    }
    
    
     $.ajax({
        url: "https://techyroots.com/ICO-admin-dashboard/emailapi.php",
        type: "POST",
        data: {
            email: Email,
        },
        success: function(dataResult) {
            console.log(dataResult);
            //  let dataValue = JSON.parse(dataResult);
            swal({
            text: "OTP is sent on your email",
            button:false,
           
        })
        setTimeout(function(){ window.location.href = 'https://techyroots.com/ICO-admin-dashboard/signup.php?userEmail='+Email; }, 5000);
        
        }
    });
    }
</script>