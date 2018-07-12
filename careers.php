

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
  
/*$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  */


$sql = "SELECT * FROM miles_db7_forms ";  
$rs_result = mysqli_query($conn, $sql); 
?>
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                  <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div>  
                <div style="clear:both"></div>                 
                <br />  
                
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Enquiry Form Database</div>
                     
                    <div class="card-body">
                        <div class="table-responsive" id="order_table">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="width: 135px;">Date</th>
                                        
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Desigination</th>
                                        <th>Comments</th>
                                      
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
    
   while ($row = mysqli_fetch_array($rs_result))
    {

      if( $row['form_post_id'] == '11897'){
       

      $str1=$row['form_value'];
      
      $str = @unserialize($str1);

     
      
     echo '<tr>


         <td>'. $row['form_date'].'</td>
         
          <td>'. $str['your-email'].'</td>
          <td> '.$str['tel-978'].'</td>
          <td>'. $str['your-subject'] . '</td>
          <td>'.$str['your-message'].'</td>
         
        </tr>';

}
} 
  ?>
</tbody>
</table>
<?php  
/*$sql = "SELECT COUNT(form_id) FROM miles_db7_forms";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='EnquiryForm.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";*/  
?>
                        </div>
                    </div>

                </div>
            </div>

         <?php
 include 'footer.php';
 ?>