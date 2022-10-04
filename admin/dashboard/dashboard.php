<?php

include 'header.php';
?>

    <!-- <content........> -->

        <div class="col py-3 content section shadow-lg mt-3">
                  <h2 class="h1 section-head mt-4">Dashboard</h2>
          <div class="row">
            <div class="col-md-4 col-12 p-3">
              <div class="card bg-success text-white">
                <div class="card-body">
                  <h5 class="card-title text-center">TRAFIQ</h5>
                  <p class="card-text text-center" style="font-size:50px;color:red;font-weight:700;">100</p>
                  <p class="card-text">The vistor come on this website count.</p>
                </div>
              </div>
          </div>

          <div class="col-md-4 col-12 p-3">
              <div class="card bg-primary text-white">
                <div class="card-body">
                  <h5 class="card-title text-center">DONOR</h5>
                  <p class="card-text text-center" style="font-size:50px;color:red;font-weight:700;">400</p>
                  <p class="card-text">The all donor show of the AR donation club.</p>
                </div>
              </div>
          </div>

          <div class="col-md-4 col-12 p-3">
              <div class="card bg-secondary text-white">
                <div class="card-body">
                  <h5 class="card-title text-center">Receiver</h5>
                  <p class="card-text text-center" style="font-size:50px;color:red;font-weight:700;">500</p>
                  <p class="card-text">All needy people who get the help of this application.</p>
                </div>
              </div>
          </div>


        </div>



        <div class="row mt-3">
          <a href="#" data-bs-toggle="modal" data-bs-target="#city">
            <div class="col-12 col-md-4 p-3">
              <div class="card bg-warning text-white">
                <div class="card-body">
                  <h5 class="card-title text-center">City</h5>
                  <p class="card-text text-center" style="font-size:50px;color:red;font-weight:700;">7 </p>
                  <p class="card-text">The vistor come on this website count.</p>
                </div>
              </div>
</a>
          </div>

          <div class="col-md-4 col-12 p-3">
              <div class="card bg-info text-white">
                <div class="card-body">
                  <h5 class="card-title text-center">Blood</h5>
                  <p class="card-text text-center" style="font-size:50px;color:red;font-weight:700;">400b</p>
                  <p class="card-text">The all donor show of the AR donation club.</p>
                </div>
              </div>
          </div>

          <div class="col-md-4 col-12 p-3">
              <div class="card bg-danger text-white">
                <div class="card-body">
                  <h5 class="card-title text-center">Pending Request</h5>
                  <p class="card-text text-center" style="font-size:50px;color:red;font-weight:700;">500</p>
                  <p class="card-text">All needy people who get the help of this application.</p>
                </div>
              </div>
          </div>


        </div>



 </div>

 <!-- </content........> -->




 <div class="modal fade" id="city" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content  bg-warning">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ALL CITY</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table text-white">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td colspan="2">Lahore</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td colspan="2">Kasur</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Okara</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td colspan="2">Sahiwal</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td colspan="2">Pakpattan</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td colspan="2">Haveli</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td colspan="2">Depalpur</td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>







</div>
</body>    
</body>
</html>