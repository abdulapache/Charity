<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
       body{
        background-image: url("assets/img/login2.jpg");
        height: 100vh;
        opacity: .90;
       }
       span{
        color:#5ec6ca;
        font-weight:600;
       }
    </style>
</head>
<body>

    <div class="container section">
		<div class="row">
			<div class="col-md-4 card shadow-lg m-auto">
				<h2 class="mt-3 section-head"><span style="">Reset</span> Password</h2>
				<form method="post" action="resetdb.php" onsubmit="return Validation()">
				<div class="form-group  mt-2" data-validate = "Enter password" onclick="myFunction()">
					<input type="text" class="form-control" name="password" placeholder="Enter Password ***" id="myinput">
				</div>
                <div class="form-group text-center  mt-4 mb-3">
				<button class="btn btn-outline-secondary btn-block mb-2" value="submit">Submit</button>
                </div>
				</form>
			</div>
		</div>
	</div>


<script type="text/javascript">
     function Validation(){
       var username=document.getElementById('username');
       var password=document.getElementById('password');


      var usercheck=/^[A-Za-z._]{3,30}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
      //  var usercheck=/^[A-Za-z. ]{3,30}$/;
       var passwordcheck=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-z0-9!@#$%^&*][8,16]$/;

       if(username.test(usercheck)){
         document.getElementById('usererror').innerHTML=" ";
       }else{
         document.getElementById('usererror').innerHTML="Invalid Email plz write corect email";
         return false;
       }

     }
</script>



    <script>
        function myFunction(){
          var x = document.getElementById("myinput");
           var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");
            if(x.type === 'password'){
              x.type = "text";
              y.style.display="block";
              z.style.display="none";
            }
            else{
              x.type = "password";
              y.style.display="none";
              z.style.display="block";
            }
        }
      </script>

</body>
</html>