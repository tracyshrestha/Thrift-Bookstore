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
    
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
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
            <div class="img">
                <label> Select Image</label>
                <input type="file" multiple="false" accept="image/*" id="image" onchange="upload()" name="bookimage">
            </div>
            <div class="buttons">
                <INPUT TYPE="RESET" class="btn" NAME="resetbtn" VALUE="Reset">
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
                    $bookimage = mysqli_real_escape_string($conn, $_POST['bookimage']);

                    $sql = "INSERT INTO `bookinfo` (`bookname`, `price`,`authorname`,`sellername`,`contactnumber`,`bookimage` ) VALUES ('$bookname', '$price','$authorname','$sellername','$contactnumber','$bookimage' )"; 

                    if ($conn->query($sql) === TRUE) {
                       echo " Your product has been uploaded successfully";
                    } else {
                      echo "Error: " . $sql3 . "<br>" . $conn->error;
                    
                                
                    }
                                
                     
                    $conn->close();
                              }
                              
                            
                    ?>
    </div>

</body>

</html>