<?php
include '../header.php';
?>

<br>
<br>
<br>
<br>
<br>
<br>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> -->
<?php
        $host = "localhost";
        $userName = "id10845216_pernambut";
        $password = "ashkhan";
        $dbName = "id10845216_pernambut_journal";

      $connector = mysqli_connect($host,$userName,$password,$dbName)
          or die("Unable to connect");
        
    //   $selected = mysqli_select_db($connector,"id10845216_pernambut_journal")
    //     or die("Unable to connect database");
        
        // mysqli_select_db($connector,"id10845216_pernambut_journal")or die("cannot select DB");

      //execute the SQL query and return records
      $result = mysqli_query($connector,"SELECT * FROM masjid");
      ?>
 <div class="container">    
  <div class="table-responsive mt-5">
      <table  class="table table-hover" >
      <thead class="thead-dark ">
        <tr>
          <th>S.No</th>
          <th>Name</th>
          <th>Address</th>
         
        </tr>
      </thead>
      <tbody class="emer_table">
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['S.No']}</td>
              <td>{$row['Name']}</td>
              <td>{$row['Address']}</td>
               
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
  </div>
</div>  

     <?php mysqli_close($connector); ?>
    

    <?php
      include '../footer.php';
      ?>