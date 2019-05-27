<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  
  <link rel ="stylesheet" href ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <style>
    
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

.page_heading { border-bottom:solid 1px #dedede; font-size:20px; font-weight:normal; margin:0 0 5px 0;  padding:10px 0 10px 0; color:#54bf83; }
.history { font-size:11px; color:#ccc; display:block; text-align:right;}

    .well{
     background-color: #b2dfdb;counter-reset: 
    }
    
    
    .row.content {height: 550px}
    
   
    .sidenav {
      padding-top: 20px;
      background-color: Black;
      height: 100%;
      color:SeaShell;
    }
    
  
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

.anchor
    {
  border: 1px solid #000099;

    }
    
    
   
  </style>
</head>
<body>

  <header class="banner" role="banner" style="padding: 0px;margin:0;">
    
  <div class="container-fluid" style="padding: 0px; margin:0;">
    
       <div class="col-sm-12">
         <!--<img src="b.jpg" width="100%" height="75">-->
       </div>
    
  </div>
</header>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    
      <a class="navbar-brand" href="#">
<img style="max-width:100px; margin-top: -29px;"
             src="logo.png">

      </a>
    </div>
    
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php" style="color:#b2dfdb">Home</a></li>
        <li><a href="imp1.php" style="color:#b2dfdb">Important Dates</a></li>
        <li><a href="faq.php" style="color:#b2dfdb">FAQ</a></li>
        <li><a href="contact.php" style="color:#b2dfdb">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="adminlogin.php" style="color:#b2dfdb"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
           <li><a href="register.php" style="color:#b2dfdb"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="login2.php" style="color:#b2dfdb"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>



      </ul>
    
  </div>
</nav>

  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <div class="well" style="background-color:#b2dfdb;">
            <p style="color:Crimson;"><span class="glyphicon glyphicon-hand-right"></span>GUIDELINES</p><hr>
       
        <p><a href="impins.php" style="color:blue;"><span class="glyphicon glyphicon-chevron-right"></span>Important Instructions</a></p>     
            
   
      </div>
      <div class="well">
     <p style="color:DarkMagenta;"><span class="glyphicon glyphicon-hand-right"></span>IMPORTANT DOCUMENTS</p><hr>

     <li><p><a href="Rules.pdf" style="color:DeepPink;"> Rules Of WBJECA examination</a></p></li>
     <li><p><a href="Proforma.pdf" style="color:DeepPink;"> Proformas For Certicates</a></p></li>
     
     <li><p><a href="" style="color:DeepPink;">Participating Intitutes</a></p></li>
        </div>
    </div>
    <div class="col-sm-8 text-left"> 
      <font color="green"><h1>WBJECA 2019</h1></font>
      <p></p>
      <hr>
      <h3></h3>
      <p></p>

      <section id="intro" class="intro">
    
      <table id="table_id" class="table table-stripped table-hover table-bordered ">
        <thead>
          <tr class=" text-center">
            <th class=" text-center" bgcolor="BLUE">ID</th>
            <th class=" text-center" bgcolor="BLUEVIOLET">College Name</th>
            <th class=" text-center" bgcolor="CRIMSON">Opening Rank</th>
            <th class=" text-center" bgcolor="DARKCYAN">Closing Rank</th>
            <th class=" text-center" bgcolor="GREEN">Website</th>
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



   
     


      


     </section>





   <font color="#009900"></font></b><o:p></o:p></font></p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p style="color:Crimson;"><span class="glyphicon glyphicon-globe"></span>NEWS</p>
        <hr>
        <marquee style="color:blue;height: 180px;" direction="up" scrolldelay="10" scrollamount="5" behavior="alternate">

            <div>WBJECA 2019 - Candidates can change the wrong entries regarding reservation. For details see notice on the website.<br><br><br></div>
            <div>Candidates can contact admin in case of any discrepancies.<br><br><br></div>

          </div>Payment Option is available in Candidate Home Page.<br><br><br></div>

          <div>Candidates are advised to go through the prospectus and get acquainted with the colleges or univeersities offering the MCA course and fee structure of each college or university before applying.<br><br> </div>



        </marquee>
      </div>
        
     


      <div class="well">
        <p style="color:DarkMagenta;"><span class="glyphicon glyphicon-hand-right"></span>IMPORTANT LINKS</p>
        <hr>
        <a href="showranklist.php" style="color:red;"><span class="glyphicon glyphicon-chevron-right"></span>Show Rank List-2019</a>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Copyright @2019 WBJEE</p>
</footer>

</body>
</html>

  


    
     

  
