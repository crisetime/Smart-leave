<?php
session_start();
$link=mysqli_connect("localhost","root","","e-leavesystem")or die("Couldn't connect with the databse");
?>
<html>
<head><title>Apply Leave | Leave hive</title>
	<link rel="stylesheet" href="assets/css/main.css" /></head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
	function enable() {
		isValid = (document.formname.out_of_station.value == unchecked)
	// Adding additional validation here
		document.formname.address.disabled = !isValid;
	}

	/*$(document).ready(function () {
	    $("#type").change(function () {
	        var val = $(this).val();
	        if (val == "commuted") {
	            $("#date").html("
							<option value='cs'>M.tech CS</option><option value='is'>M.tech IS</option><option value='sw'>M.tech SW</option>");
	        }
					 else  {
	            $("#sem").html("<option value=''>-Semester or group -</option>");
	        }
	    });
	});*/


	</script>
<body>


<div id="wrapper">

        <header id="header">
          <h1><?php echo $_SESSION['name'] ?></h1>
          <p>Apply leave here</p>
        </header>

        <div id="main">

          <nav id="nav">
          <ul>
            <li><a href="userpage.php">Home</a></li>
            <li><a href="profile.php"  class="active" >Apply leave</a></li>
            <li><a href="logout.php" >Sign out</a></li>

          </ul>
        </nav>

          <!-- Content -->
            <section id="content" class="main">


                <form class="form-control" name="formname" action="insert_leave.php" method="post">

                From : <input type="date" name="from" min="<?php echo date("Y-m-d"); ?>" max="2020-01-01" required="">   &nbsp &nbspTo : <input type="date" min="<?php echo date("Y-m-d"); ?>" max="2020-01-01" name="to" required=""></br></br>

                  <select name="type" class="demo-categoery">
                    <option value="">Type of leave</option>
                              <option value="commuted">Casual Leave</option>
							  <option value="earn">Earned Leave</option>
							  <option value="medical">Medical Leave</option>
                              <option value="special_cl">Special Casual Leave(during vacations only)</option>
                              <option value="half_pay">Half Pay Leave</option>
                              <option value="restricted">Restricted Leave</option>
                  </select>
				  <br>
									<input type="text" name="contact" placeholder="Contact Number" pattern="[6-9]{1}[0-9]{9}" maxlength="10" required=""></br>

										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="checkbox" id="out_of_station" name="out_of_station"  >
												<label for="out_of_station">Out of station </label>

												</div>
												<div class="6u$ 12u$(xsmall)">
												<input type="text" id="address" placeholder="Out for (City name)" name="address" disabled="" />
												</div>
											</div>
											<script>
											$('#out_of_station').change(function(){
												$("#address").prop("disabled", !$(this).is(':checked'));
											});
											</script>
											<br>

											<!-- <div name="cdate" invisible>
												From : <input type="date" name="from" min="<?php echo date("Y-m-d"); ?>" max="2020-01-01" required="">   &nbsp &nbspTo : <input type="date" min="<?php echo date("Y-m-d"); ?>" max="2020-01-01" name="to" required=""></br></br>

											</div> -->
                  <!-- <input type="text" name="address" placeholder="Out for (City name)"></br> -->
									<div id="get_station">

									</div>
                  <textarea rows="5" placeholder="Appliation including reason ,full address etc." name="reason" required=""></textarea></br>
									<!-- <form action="#" method="post">
										<table class="table" style="color:grey">
									<thead>
									<tr>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Email</th>
									</tr>
									</thead>
									<tbody>
									<tr>
									<td>John</td>
									<td>Doe</td>
									<td>john@example.com</td>
									<td><button class="button special">Ask for Consent</button></td>
									</tr>
									<tr>
									<td>Mary</td>
									<td>Moe</td>
									<td>mary@example.com</td>
									<td><button class="button special">Ask for Consent</button></td>
									</tr>
									<tr>
									<td>July</td>
									<td>Dooley</td>
									<td>july@example.com</td>
									<td><button class="button special">Ask for Consent</button></td>
									</tr>
									</tbody>
									</table>
									</form> -->
                <ul class="actions">
                  <li><input type="submit" class="button special" name="submit" value="Submit"></li>
                  <li><input type="reset" name="reset" class="button "></li>
                </ul>





				</form>

            </section>

        </div>

      <footer id="footer">
            <section>
              <h2>About Leave hive</h2>
              <p>Leave hive is a genral web application for Approving leave online.</p>
              <ul class="actions">
                <li><a href="about.html" class="button">Learn More</a></li>
              </ul>
            </section>
            <section>
              <h2>Contact Us</h2>
              <dl class="alt">

                <dt>Phone</dt>
                <dd>(+91)8090 410 264</dd>
                <dt>Email</dt>
                <dd><a href="mail.google.com/">Vikrant.mnnit00@gmail.com</a></dd>
              </dl>
              <ul class="icons">
                <li><a href="https://twitter.com/svicky516" target="_blank" class="icon fa-twitter alt"><span class="label">Twitter</span></a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100003661545540&ref=bookmarks" target="_blank" class="icon fa-facebook alt"><span class="label">Facebook</span></a></li>
                <li><a href="https://www.instagram.com/crise_time/" target="_blank" class="icon fa-instagram alt"><span class="label">Instagram</span></a></li>
                <li><a href="https://github.com/crisetime"  target="_blank" class="icon fa-github alt"><span class="label">GitHub</span></a></li>

              </ul>
            </section>
            <p class="copyright">&copy; Leave hive team. Designd by Vikrant</p>
          </footer>

  </div>


</body>

</html>
