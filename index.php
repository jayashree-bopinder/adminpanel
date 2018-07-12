<?php

 include 'header.php';
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "salesemail";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 

$sql = "SELECT * FROM miles_db7_forms ";  
$rs_result = mysqli_query($conn, $sql);
$sql = "SELECT COUNT(form_id) FROM miles_db7_forms WHERE MONTH(form_date)=MONTH(NOW())-1 || form_post_id = (form_id='13706')";  
$rs_result = mysqli_query($conn, $sql);  
 $row = mysqli_fetch_row($rs_result);  
 echo $total_records = $row[0];  

 $sql1 = "SELECT COUNT(form_id) FROM miles_db7_forms WHERE MONTH(form_date)=MONTH(NOW())-1 || form_post_id = (form_post_id='11897')";  
$rs_result1 = mysqli_query($conn, $sql1);  
 $row = mysqli_fetch_row($rs_result1);  
 echo $total_records1 = $row[0]; 


?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">Last 30days Count: <?php  echo $total_records ?></div>
               <div class="mr-5">Total: <?php  echo $total_records1; ?></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"> &nbsp;Enquiry Form</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
           
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">11 New Tasks!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"> &nbsp;Careers</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">&nbsp;White Papers</div>
            </div>
           
           <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"> <ul><li>Top 9 Security Threats in Healthcare Industry</li></ul></span>
              <span class="float-left"> <ul><li>DMS EC2 Oracle database to Oracle RDS database</li></ul></span>
              <span class="float-left"> <ul><li>Big Data Solution Benchmark</li></ul></span>
              <span class="float-left"> <ul><li>Devops Whitepaper</li></ul></span>
              <span class="float-left"> <ul><li>25 Best Practice Tips for architecting Amazon VPC</li></ul></span>
               <span class="float-left"> <ul><li>Exploring Amazon RDS MySQL Second Tier Read Replica</li></ul></span>
               <span class="float-left"> <ul><li>19 Best Practices for Creating Amazon Cloud Formation Templates</li></ul></span>
              <span class="float-left"> <ul><li>27 Best Practices- Tips on Amazon Web services Security Groups</li></ul></span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">&nbsp;Case Studies</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
             <span class="float-left"> <ul><li>India’s Largest stem cell bank now Trusts 8KMiles’ Cloud Expertise</li></ul> </span>
               <span class="float-left"> <ul><li>Development of an Azure based Disaster Recovery Solution for a Global Legal Hosting Provider</li></ul></span>
               <span class="float-left"> <ul><li>8KMiles aids Medidata to move into Cloud</li></ul></span>
               <span class="float-left"> <ul><li>8K Miles Idols Solutions Inc</li></ul></span>
                <span class="float-left"> <ul><li>8K Miles scales up HealthCare IT to new levels</li></ul></span>
                 <span class="float-left"> <ul><li>8KMiles Content Raven</li></ul></span>
                 <span class="float-left"> <ul><li>8KMiles Case Study MaaS</li></ul></span>
                 <span class="float-left"> <ul><li>8KMiles Case Study Click Data</li></ul></span>
                 <span class="float-left"> <ul><li>8KMiles Case Study Jupiter</li></ul></span>
                  <span class="float-left"> <ul><li>8KMiles Case Study RWE</li></ul></span>
                   <span class="float-left"> <ul><li>8KMiles Enterprise Learning Platform</li></ul></span>
                   <span class="float-left"> <ul><li>8K Miles DevOps Navigation</li></ul></span>
                    <span class="float-left"> <ul><li>8K EBC</li></ul></span>
                    <span class="float-left"> <ul><li>Driven by Passion</li></ul></span>
                    <span class="float-left"> <ul><li>Cloud for Biopharma</li></ul></span>
                    <span class="float-left"> <ul><li>8KMiles Managed service for Navigation Enterprise</li></ul></span>
                    <span class="float-left"> <ul><li>8K Media</li></ul></span>
                    <span class="float-left"> <ul><li>Meeting healthcare compliance needs on cloud</li></ul></span>
                    <span class="float-left"> <ul><li>Transformation on Cloud</li></ul></span>
                    <span class="float-left"> <ul><li>Compliance on Cloud</li></ul></span>
                    <span class="float-left"> <ul><li>Performance delivered</li></ul></span>
               
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
         
      </div>
     <!--  -->

      
     
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © 8K Miles Software Solutions 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
