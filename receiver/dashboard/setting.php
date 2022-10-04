<?php

include 'dbconnect.php';
include 'header.php';

?>
<style>
.section{
	padding-top: 70px;
	padding-bottom: 70px;
}
.section h2.section-head{
	color: black;
	text-align: center;
	margin-bottom: 40px;
}
.section h2.section-head:after{
	background:#e74c3c;
	content: "";
	display: block;
	width: 100px;
	height: 3px;
	margin: 20px auto;
}

</style>

<!-- <content........> -->
  <div class="col py-3 section mt-5">



 


        <h2 class="section-head mt-5">Reset Password</h2>
        <div class="col-7 mx-auto">
                <form action="settingdb.php" method="post">
                <div class="form-group mt-4">
					<label>Previous</label>
					<input type="text" class="form-control" name="previous" placeholder="Enter previous password">
				</div>
<hr class="mt-5">
                <div class="form-group mt-4">
					<label>New Password</label>
					<input type="text" class="form-control" name="new" placeholder="Enter new password">
				</div>

                <div class="form-group mt-4">
					<label>Confirm Password</label>
					<input type="text" class="form-control" name="confirm" placeholder="Enter confirm password">
				</div>
                <div class="text-center mt-5">
                    <button class="btn btn-outline-primary">Done</button>
                </div>
                </form>
        </div>

      </div>

    </div>
  </div>



</body>
</html>