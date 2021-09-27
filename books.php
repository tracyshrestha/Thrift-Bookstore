<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">

    <title>Books</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto+Slab:wght@500&display=swap"
    rel="stylesheet">

<body>
    <nav class="navbar h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo">
                <img src="img/logo.png" alt="logo">
                <div class="webname">Thrift Bookstore</div>
            </div>
            <li><a href="index.php">Home</a></li>
            
   
        </ul>
        <?php
               if(isset($_SESSION['username'])){
                     echo ' <div class="rightNav"> <a href="logout.php">  Logout </a></div>
                     ';
            }   
            
            else{
                echo ' 
                <div class="rightNav"> <a href="login.php">  Login | </a>
                <a href="Register.php">  Register </a> </div>
                   ';
                   
            }
            ?>
    </nav>

    <div class="mainbox">

<div class="booksale"> Books Available  <div>
<?php 
          include 'db.php';
          $sql = "SELECT * FROM `bookinfo`";
          $result = mysqli_query($conn, $sql);
          
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo ' 


      <!--cards -->

      <div class="card">
         <div class="bookname">
            <h3> BookName : '. $row["bookname"] .' </h3>
         </div>
         <div class="authorname bookinformation">
            <p>Author Name: '. $row["authorname"] .' </p>
         </div>
         <div class="price bookinformation">
            <p>Price: '. $row["price"] .'</p>
         </div>
         <div class="sellername bookinformation">
            <p>Seller Name: '. $row["sellername"] .'</p>
         </div>
         <div class="contactno bookinformation">
            <p>Contact Number: '. $row["contactnumber"] .'</p>
         </div>
      </div>';
            }
          } else {
            echo "0 results";
          }          
          ?>

</div>

<footer class="foott" id="about"> 
        
        <p class="text-footer">
            CopyRight &copy; 2021 -www.ThriftBookstore.com -All Rights Reserved
        </p>
    </footer>



</body>

</html>