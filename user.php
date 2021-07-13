<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
    
      footer{
            position: absolute;
            left: 35%;
            bottom: auto;
            color:  orange !important;
        }
      
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }

      body {
    background-image: url('images/piggy bank.png');
    background-color: white;
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
    font-weight: bold;
    
   
}

      </style>

</head>

<body >

<?php
    include 'connection.php';
    $sql = "SELECT * FROM transaction";
    $result = mysqli_query($conn,$sql);
?>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php">Lucky bank</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.php"class="nav-link">Home</a></li>
              <li class="nav-item"><a href="user.php" class="nav-link">User</a></li>
              <li class="nav-item"><a href="histor.php" class="nav-link">History</a></li>
             
          </div>
        </div>
      </nav>



<div class="container">
        <h2 class="text-center pt-4" style="color : Black;"><b>USER<b></h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed " 

                    style="border-color:blue;">
                        <thead style="color : red;">
                            <tr>
                            <th scope="col" class="text-left py-2">Id</th>
                            <th scope="col" class="text-left py-2">Name</th>
                            <th scope="col" class="text-left py-2">Account No</th>
                            <th scope="col" class="text-left py-2">Balance</th>
                            <th scope="col" class="text-left py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['account_no']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #ccffe6;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <center> <a href="index.php"><button type="button" class="btn btn-outline-success">Home</button></a>
           <a href="histor.php"><button type="button" class="btn btn-outline-success">History</button>
       </center>
<center>

    <footer>
          <div class="col-md-12 text-center" >
          <p>&copy 2021. Made by <b> ANANDALAKSHMI  J</b> <br>The Sparks Foundation</p>
    </footer>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html> 