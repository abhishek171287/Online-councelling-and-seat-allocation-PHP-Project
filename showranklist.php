<table id="table_id" class="table table-stripped table-hover table-bordered">
  <thead>
          <tr class=" text-center">
            <th class=" text-center" bgcolor="BLUEVIOLET">ID</th>
            <th class=" text-center" bgcolor="FUCHSIA">Roll Number</th>
            <th class=" text-center" bgcolor="CRIMSON">Student Name</th>
            <th class=" text-center" bgcolor="MISTYROSE">D.O.B.</th>
            <th class=" text-center" bgcolor="ORCHID">Gender</th>
            <th class=" text-center" bgcolor="PERU">Category</th>
            <th class=" text-center" bgcolor="SLATEBLUE">PC</th>
            <th class=" text-center" bgcolor="WHEAT">GMR</th>
            <th class=" text-center" bgcolor="ROSYBROWN">SC Rank</th>
            <th class=" text-center" bgcolor="LIME">ST Rank</th>
            <th class=" text-center" bgcolor="GREY">PC Rank</th>



          </tr> 
    </thead>      
    <tbody>
          <?php

            $conn = mysqli_connect("localhost","root","","jeca");
             $result=mysqli_query($conn,"SELECT * FROM meritlist");

             while($row=mysqli_fetch_assoc($result)):
             ?>


          <tr class="text-center">
            <td><?php echo $row['meritid']; ?></td>
            <td><?php echo $row['rollno']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['cat']; ?></td>
            <td><?php echo $row['pc']; ?></td>
            <td><?php echo $row['gmr']; ?></td>
            <td><?php echo $row['scrank']; ?></td>
            <td><?php echo $row['strank']; ?></td>
            <td><?php echo $row['pcrank']; ?></td>


              


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


