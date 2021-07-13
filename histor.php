<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
    
      footer{
            position: absolute;
            left: 35%;
            bottom: auto;
            color: black !important;
        }
    
        
 body {
    background-image: url('images/bg_1.jpg');
    background-color: white;
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
    font-weight: bold;
   
   
}

    </style>
</head>

<body>

    <div class="container">
        <h2 class="text-center pt-4" style="color : lavender
        ;">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed">
        <thead style="color : white;">
            <tr>
                <th class="text-left">S.No.</th>
                <th class="text-left">Sender</th>
                <th class="text-left">Receiver</th>
                <th class="text-left">Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connection.php';

            $sql ="select * from user";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['reciver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
                
        <?php
            }

        ?>


        </tbody>
    </table>


    </div>
</div>  
<center> <a href="index.php"><button type="button" class="btn btn-primary">Home</button></a></center>
<footer>
          <div class="col-md-12 text-center" >
          <p>&copy 2021. Made by <b>ANANDALAKSHMI J</b> <br>The Sparks Foundation</p>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>