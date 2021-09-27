<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styledash.css">
    <title>Welcome To Your Dashboard</title>
</head>

<body>
<nav class="navbar h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo">
                <img src="img/logo.png" alt="logo">
                <div class="webname">Thrift Bookstore</div>
            </div>
            <li><a href="index.php">Home</a></li>
            <?php echo "<li> Welcome, " . $_SESSION['username'] . "</li>"; ?>
   
        </ul>
        <div class="rightNav">
        <a href="logout.php">Logout</a>
        </div>
    </nav>


    
    <section class="dash">
    
    <div class="container">
        <form action="" method="POST" class="sellbook">
            <p class="sellbook-text" style="font-size: 2rem; font-weight: 800;">Put a Book Up For Sale</p>

            <div class="input-group">
                <label> Book Name</label>
                <input type="text" placeholder="Book Name" name="bookname" value="" required>
            </div>
            <div class="input-group">
                <label> Price (Rs) </label>
                <input type="number" placeholder="Price" name="price" value=""
                    required>
            </div>
            <div class="input-group">
                <label> Author Name</label>
                <input type="text" placeholder="Author Name" name="authorname" value=""
                    required>
            </div>

            <div class="input-group">
                <label> Seller Name </label>
                <input type="text" placeholder="Seller Name" name="sellername" value="" required>
            </div>

            <div class="input-group">
                <label> Contact Number</label>
                <input type="text" placeholder="Contact Number" name="contactnumber" value=""
                    required>
            </div>
            <div class="buttons">
                <input TYPE="RESET" class="btn" NAME="resetbtn" VALUE="Reset">
                <!-- <button name="submit" class="btn">Clear</button> -->
                <button name="submit" class="btn">Post</button>
            </div>
           </form>
        
        <?php
                include 'db.php';
        ?>
        <?php
                if(isset($_POST['submit'])){
                    $bookname = mysqli_real_escape_string($conn, $_POST['bookname']);
                    $price = mysqli_real_escape_string($conn, $_POST['price']);
                    $authorname = mysqli_real_escape_string($conn, $_POST['authorname']);
                    $sellername = mysqli_real_escape_string($conn, $_POST['sellername']);
                    $contactnumber = mysqli_real_escape_string($conn, $_POST['contactnumber']);

                    $sql = "INSERT INTO `bookinfo` (`bookname`, `price`,`authorname`,`sellername`,`contactnumber` ) VALUES ('$bookname', '$price','$authorname','$sellername','$contactnumber' )"; 

                    if ($conn->query($sql) === TRUE) {
                       echo " Your product has been uploaded successfully";
                    } else {
                      echo "Error: " . $sql3 . "<br>" . $conn->error;
                    
                                
                    }
                                
                     
                    $conn->close();
                              }
                              
                            
                    ?>
    </div>
    </section>
</body>

</html>