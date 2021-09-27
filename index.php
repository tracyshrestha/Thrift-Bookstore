<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <title>Thrift Bookstore</title>
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
            <li><a href="#home">Home</a></li>
            <li><a href="books.html">Books</a></li>
            <li><a href="#contactus">Contact Us</a></li>
            <li><a href="#about">About</a></li>
        </ul>
        <div class="rightNav v-class-resp">
            <button class="btn btn-sm" onclick="window.location.href='login.php';">Log in</button>
            <button class="btn btn-sm" onclick="window.location.href='register.php';">Register</button>
        </div>

        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>

        </div>

    </nav>
    <section class="background firstSection" id="home">
        <div class="box-main">
            <div class="firstHalf">
                <b class="text-big">Thrift Books and Help Save The Environment!  </b><br>
                <p class="text-small">  In today's world, books are an everyday necessity in an individual’s life, but not only are new books more expensive, constantly buying new books contributes towards the higher demand for the production of paper for which many trees have to be cut down, ultimately leading towards environmental degradation. <br><br>
                Thus as Thrifting books helps in saving not only your cash but also the life of a tree and ultimately the environment, so start Thrifting Books today!
                
</p>
               
            </div>
            <div class="secondHalf">
                <img src="img/book.png" alt="img">
            </div>
        </div>
    </section>


    <section class="bag">

<h1> Latest Books <h1>
 
    
<?php 
          include 'db.php';
          $sql = "SELECT * FROM `bookinfo` LIMIT 4";
          $result = mysqli_query($conn, $sql);
          
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo ' 
              <div class="bookcover">
            <div class="sbook">
              
          <div class="rightside txt">
                    <h3> Book Name: '. $row["bookname"] .'</h3>
                    <h4>Price (Rs) : '. $row["price"] .'</h4>
                    <h4>Author :'. $row["authorname"] .'</h4>
                    <h4>Seller :'. $row["sellername"].'</h4>
                    <h4>Contact: '.$row["contactnumber"] .' </h4>
           </div>
           </div>
            </div>';
            }
          } else {
            echo "0 results";
          }          
          ?>
        
</section>
<div class="mainbox">

      <!--cards -->

      <div class="card">


         <div class="bookname">
            <h1>
               BookName</h1>
         </div>
         <div class="authorname bookinformation">
            <p>Author Name</p>

         </div>
         <div class="price bookinformation">
            <p>Price</p>

         </div>
         <div class="sellername bookinformation">
            <p>Seller Name</p>

         </div>
         <div class="contactno bookinformation">
            <p>Contact Number</p>

         </div>

      </div>


      <div class="card">


         <div class="bookname">
            <h1>
               BookName</h1>
         </div>
         <div class="authorname bookinformation">
            <p>Author Name</p>

         </div>
         <div class="price bookinformation">
            <p>Price</p>

         </div>
         <div class="sellername bookinformation">
            <p>Seller Name</p>

         </div>
         <div class="contactno bookinformation">
            <p>Contact Number</p>

         </div>

      </div>



   </div>

        <section class="section">
        <div class="paras">
            <b class="sectionTag text-big">More About Thrift Bookstore
        </b>
            <p class="sectionSubTag text-small">
            Thrift Bookstore aims to provide the common
people an easily accessible platform through which they can buy and sell books
conveniently. Even though there are people who are willing to buy second hand books,
there aren’t many places where they can easily find them. Here users can search for the books that they need and browse through the variety
of books available on the server and get their hands on the one that interests them at
almost half of its original price.
            </p>
        </div>
        <div class="thumbnail">
            <img src="img/tree.png" alt="image" class="imgFluid" height="250px">
        </div>
    </section>
   
    <section class="followus backcolor" id="contactus">
   
        <h2>Find Us On Social Media: </h2>
             <ul class="acc">
        <li><a href="https://www.instagram.com/">Instagram</a><li>
        <li><a href="https://www.facebook.com">Facebook</a></li>
        <li><a href="https://www.twitter.com/">Twitter</a></li>
    </ul>

        </section>
        
   
    <footer class="foott" id="about"> 
        
        <p class="text-footer">
            CopyRight &copy; 2021 -www.ThriftBookstore.com -All Rights Reserved
        </p>
    </footer>
    <script src="js/resp.js"></script>

</body>

</html>