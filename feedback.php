<html>
<head><title>Feedback | leave hive</title>
	<link rel="stylesheet" href="assets/css/main.css" /></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



<body>

<div id="wrapper">

        <header id="header">
          <h1>Feedback</h1>
          <p>Your feedback is important to us</p>
        </header>

        <div id="main">

          <nav id="nav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="feedback.php"  class="active">Feedback</a></li>
            <li><a href="about.html" >About us</a></li>


          </ul>
        </nav>

          <!-- Content -->
            <section id="content" class="main">


                  <form name="formname" action="insertfeedback.php" method="post">
                    <div class="row uniform">
                    </br>

                    <div class="12u$">
                    <input type="text" name="name"  placeholder="Name " required>
                    </div>
                    <div class="12u$">
                    <input type="text" name="contact"  placeholder="Contact no" pattern="[6-9]{1}[0-9]{9}" maxlength="10" required>
                    </div>

                    <br>
                    <div class="12u$">
                    <select  class="demo-categoery" name="category" required>
                    <option value="">Choose Categoery</option>
                    <option value="suggestion">Suggestion</option>
                    <option value="complain">Complain</option>

                    <option value="Other">Other</option>
                    </select>
                    </div>

                    <div class="12u$" >
                    <textarea name="feedback" placeholder="Your Feedback!" rows="5" required></textarea>
                    </div>

                    <div class="12u$">
                    <input type="submit" class="button special" name="submit"  value="Submit" id="submitbtn" >
                    <input type="reset">
                    <br>

                    </div>
                  </div>
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
            <p class="copyright">&copy; Leave hive team. Designd by Team hive</p>
          </footer>

  </div>


</body>




</html>
