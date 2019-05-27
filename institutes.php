
  


    
     

  

      <table id="table_id" class="table table-stripped table-hover table-bordered ">
        <thead>
          <tr class=" text-center">
            <th class=" text-center" bgcolor="BLUE">ID</th>
            <th class=" text-center" bgcolor="BLUEVIOLET">College Name</th>
            <th class=" text-center" bgcolor="CRIMSON">Opening Rank</th>
            <th class=" text-center" bgcolor="DARKCYAN">Closing Rank</th>
            <th class=" text-center" bgcolor="GREEN">Website</th>
            <th class=" text-center" bgcolor="RED">Seats Available</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $conn = mysqli_connect("localhost","root","","jeca");
             $result=mysqli_query($conn,"SELECT * FROM participatingcollege");

             while($row=mysqli_fetch_assoc($result)):
             ?>

             <tr  class="text-center">
              <td><?php echo $row['collegeid']; ?></td> 
              <td><?php echo $row['collegename']; ?></td>
              <td><?php echo $row['openingrank']; ?></td>
              <td><?php echo $row['closingrank']; ?></td>
              <td ><?php echo $row['website']; ?></td>
              <td ><?php echo $row['seats']; ?></td>
             </tr>

             <?php endwhile; ?>
        </tbody>
      </table>
    
      <link rel="stylesheet"  href="bootstrap.css"/>
      <script src="tables/js/jquery.js"></script>


      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


      <script >
        $(".table").DataTable();
      </script>



   
     


      

