<?php

include 'dbconnect.php';
include 'header.php';

?>


<!-- <content........> -->
  <div class="col py-3 section">



 


        <h2 class="section-head">Reset Password</h2>
        <div class="col-7 mx-auto">
                <form action="settingdb.php?r=<?php echo $row['t_id']?>" method="post">
                <div class="form-group mt-4">
					<label>Previous</label>
					<input type="text" class="form-control" name="previous" placeholder="Enter previous password">
				</div>
<hr class="mt-5">
                <div class="form-group mt-4">
					<label>Previous</label>
					<input type="text" class="form-control" name="new" placeholder="Enter new password">
				</div>

                <div class="form-group mt-4">
					<label>Previous</label>
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