<?php
include("header.php");
?>
<div style="background-color:#fff;" class="wrapper col1">
  <div id="container">
    <div id="content">
      <h1>Welcome to Hospital Assist</h1>
      <p>  The goal of Hospital Assist is to improve the efficiency of the health by reducing the overall time and cost used to create documents and retrieve information.
.</p>
      <p>The main feature of Hospital Assist is to provide the browser to get appointments from a doctor through internet instead of going there and fixing an appointment.</p>
      <p>	Everyone needs to have Medical attention at any time. So we allow every user to register freely at any time.</p>
      <p>Doctor appointment System maintains patients prescriptions so that their medical details are always available in Internet, which will be more convenient for the patients. This will be more comfortable for the patient.</p>

      <div class="homecontent">
        <ul>
          <li>
            <h2>Book your Appointment through Online</h2>
            <p ><a href="patientappointment.php"><img src="images/appointmentimg.jpg" alt="" style="width:300px;height:200px;" /></a></p>
          </li>
          <li class="last">
            <h2>Login Panel for Existing Users</h2>          
            <p ><a href="patientlogin.php"><img src="images/loginimg.jpg" alt="" style="width:300px;height:200px;"  /></a></p>
		  </li>
		  <li>
		  <br><br>
			<h2>Login Panel for Admin</h2>
			<p><a href="adminlogin.php"><img src="images/admin.jpg" alt="" style="width:300px;height:200px;"  /></a></p>
		  </li>
		  <li class="last">
		  <br><br>
			<h2>Login Panel for Doctor</h2>
			<p><a href="doctorlogin.php"><img src="images/doctor.jpg" alt="" style="width:300px;height:200px;"  /></a></p>
          </li>     
        </ul>
        <div class="clear"></div>
      </div>
    </div>
   
    <div class="clear"></div>
  </div>
</div>
<?php
include("footer.php");
?>