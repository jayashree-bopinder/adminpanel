<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "salesemail");  
      $output = '';  
      $query = "  
           SELECT * FROM miles_db7_forms  
           WHERE form_date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th>  
                     <th width="30%">Customer Name</th>  
                     <th width="43%">Item</th>  
                     <th width="10%">Value</th>  
                     <th width="12%">Order Date</th>  
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
          while ($row = mysqli_fetch_array($rs_result))
    {

      if( $row['form_post_id'] == '13706'){

      $str1=$row['form_value'];
      
      $str = @unserialize($str1);
      
     echo '<tr>


         <td>'. $row['form_date'].'</td>
         <td>'. $str['fullname'].'</td>
          <td>'. $str['email'].'</td>
          <td> '.$str['phone'].'</td>
          <td>'. $str['company'] . '</td>
          <td>'.$str['comments'].'</td>
          <td>'.$str['department'].'</td>
        </tr>';
}
} 
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>