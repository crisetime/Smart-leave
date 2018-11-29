<?php 
  session_start();
?> 
<html>
<head><title>Profile | Leave hive</title>
	<link rel="stylesheet" href="assets/css/main.css" /></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<style >
#imageUpload
{
    display: none;
}

#profileImage
{
    cursor: pointer;
}

#profile-container {
    float: right;
    width: 150px;
    height: 150px;
    overflow: hidden;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 100%;
}

#profile-container img {
    width: 150px;
    height: 150px;
}
</style>



<body>

<div id="wrapper">

        <header id="header">
          <h1><?php $user=$_SESSION["name"]; echo 'Hi '.$user; ?></h1>
          <p>Welcome to leave hive</p>
        </header>

        <div id="main">

          <nav id="nav">
          <ul>
		  <?php
		  if($_SESSION['designation'] == 'admin')
		  {
			  ?>
            <li><a href="interface.php">Home</a></li>
            <li><a href="profile.php"  class="active" >Profile</a></li>
            <li><a href="logout.php" >Sign out</a></li>
			<?php
		  }
		  else
		  {
			?>
			  <li><a href="userpage.php">Home</a></li>
            <li><a href="profile.php"  class="active" >Profile</a></li>
            <li><a href="logout.php" >Sign out</a></li>
		<?php
		  }
		  ?>
          </ul>
        </nav>

          <!-- Content -->
            <section id="content" class="main">
				<form action="upload.php" method="post" enctype="multipart/form-data">                               
                   <p> 
                    <span class="image left">
									<div id="profile-container">
                             <image id="profileImage" src="images/profile.svg" />
									</div>
                                    <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture>
                                        <script >
                                        $("#profileImage").click(function(e) {
                                        $("#imageUpload").click();
                                          });

                                        function fasterPreview( uploader ) {
                                        if ( uploader.files && uploader.files[0] ){
                                              $('#profileImage').attr('src', 
                                                 window.URL.createObjectURL(uploader.files[0]) );
                                        }
                                        }       $("#imageUpload").change(function(){
                                                fasterPreview( this );
                                                    });
										</script>
                    </span>                                    
                                                             
									<h2>Your profile</h2>
                                    <dl class="alt" >

                                      <dt >Name</dt>              
                                      <dd style="margin: 0 0 0.85em 8.5em;"><?php $name=$_SESSION["name"];  echo $name; ?></dd>
                                      
                                      <dt>Email</dt>
                                      <dd style="margin: 0 0 0.85em 8.5em;"><?php $email= $_SESSION["email_id"];  echo $email; ?></dd>

                                      <dt>Employee Id</dt>
                                      <dd style="margin: 0 0 0.85em 8.5em;"><?php $empid= $_SESSION['emp_id'];  echo $empid; ?></dd>

                                      <dt>Designation </dt>
                                      <dd style="margin: 0 0 0.85em 8.5em;"><?php $desig= $_SESSION['designation'];  echo $desig; ?></dd>  

                                      <dt>Department </dt>
                                      <dd style="margin: 0 0 0.85em 8.5em;"><?php $dept= $_SESSION["department"];  echo $dept; ?></dd>


                                      <dt>Gender</dt>
                                      <dd style="margin: 0 0 0.85em 8.5em;"><?php $gender= $_SESSION["gender"];  echo $gender; ?></dd>    
                                    </dl>


                                  
                              </p>  


                          <ul class="actions">
                          <li><a href="profile_update.php" class="button special" >Update profile</a></li>
                            <li><input type="reset" value="Upload"></li>
                            </ul>
                              
                          
            

                      </form>


                      <blockquote>*To upload picture click on the picture</blockquote>
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
