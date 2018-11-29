<html>
<head><title>Time table</title>
	<link rel="stylesheet" href="assets/css/main.css" /></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
$(document).ready(function () {
    $("#class").change(function () {
        var val = $(this).val();
        if (val == "1") {
            $("#sem").html("<option value='cs'>M.tech CS</option><option value='is'>M.tech IS</option><option value='sw'>M.tech SW</option>");
        } else if (val == "2") {
            $("#sem").html("<option value='mca1'>Semester 1</option><option value='mca3'>Semester 3</option><option value='mca5'>Semester 5</option>");
        } else if (val == "3") {
            $("#sem").html("<option value='3a'>3rd A</option><option value='3b'>3rd B</option><option value='5a'>5th A</option><option value='5b'>5th B</option><option value='7a'>7th A</option><option value='7b'>7th B</option>");
        }else if (val == "4") {
            $("#sem").html("<option value='it3'>Semester 3</option><option value='it5'>Semester 5</option><option value='it7'>Semester 7</option>");
        }
				 else if (val == "0") {
            $("#sem").html("<option value=''>-Semester or group -</option>");
        }
    });
});
</script>
<script type="text/javascript">
            function openTab()
            {

				if(document.formname.class.value=='1')
				{
					//document.write($("#sem").val());
					var semval = $("#sem").val();
					if( semval == "cs")
					window.open('http://172.31.36.37/time/csed/mtechcs.php','_blank');
					if( semval == "is")
					window.open('http://172.31.36.37/time/csed/mtechis.php','_blank');
					if( semval == "sw")
					window.open('http://172.31.36.37/time/csed/mtechsw.php','_blank');
				}
				else if(document.formname.class.value=='2')
				{
					var semval = $("#sem").val();
					if( semval == "mca1")
					window.open('http://172.31.36.37/time/csed/mca2.php','_blank');
					if( semval == "mca3")
					window.open('http://172.31.36.37/time/csed/mca4.php','_blank');
					if( semval == "mca5")
					window.open('http://172.31.36.37/time/csed/mca6.php','_blank');
				}
				else if(document.formname.class.value=='3')
				{
					var semval = $("#sem").val();
					if( semval == "3a")
					window.open('http://172.31.36.37/time/csed/btechcsa2.php','_blank');
				    if( semval == "3b")
					window.open('http://172.31.36.37/time/csed/btechcsb4.php','_blank');
					if( semval == "5a")
					window.open('http://172.31.36.37/time/csed/btechcsa6.php','_blank');
					if( semval == "5b")
					window.open('http://172.31.36.37/time/csed/btechcsb6.php','_blank');
					if( semval == "7a")
					window.open('http://172.31.36.37/time/csed/btechcsa8.php','_blank');
					if( semval == "7b")
					window.open('http://172.31.36.37/time/csed/btechcsb8.php','_blank');
				}
				else if(document.formname.class.value=='4')
				{
					var semval = $("#sem").val();
					if( semval == "it3")
					window.open('http://172.31.36.37/time/csed/btechit4.php','_blank');
					if( semval == "it5")
					window.open('http://172.31.36.37/time/csed/btechit6.php','_blank');
					if( semval == "it7")
					window.open('http://172.31.36.37/time/csed/btechit8.php','_blank');
				}
				else document.write("Undefined course selected!");
            }
        </script>

<body>

<div id="wrapper">

        <header id="header">
          <h1>Time Table</h1>
          <p></p>
        </header>

        <div id="main">

          <nav id="nav">
          <ul>
            <li><a href="userpage.php">Home</a></li>
            <li><a href="#"  class="active" >Time Table</a></li>
            <li><a href="logout.php" >Log out</a></li>

          </ul>
        </nav>

          <!-- Content -->
            <section id="content" class="main">


<!-- content write here -->
<form class="form-control" name="formname" action="logintemp.php" method="post">

                 <select name="class" id="class">
                              <option value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- Select Class -</font></font></option>
                              <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">M.tech</font></font></option>
                              <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MCA</font></font></option>
                              <option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B.tech CSE</font></font></option>
                              <option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B.tech IT</font></font></option>
                            </select> <br>

				 <select name="sem" id="sem">
                              <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- Select Semester -</font></font></option>
							</select>
                            <br>


					<ul class="actions">
                            <li>
								<a href="#" onClick="openTab()" class="button special">Go to time table</a>
							</li>
                            <li><input type="reset" value="Reset"></li>
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
            <p class="copyright">&copy; Leave hive team. Designd by Team hive/p>
          </footer>

  </div>


</body>




</html>
