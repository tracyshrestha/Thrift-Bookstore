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
                <b class="names">Book Name:</b>
                <input type="text" placeholder="Book Name" name="BookName" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <b>Price:</b>
                <input type="text" placeholder="Price" name="Price" value="<?php echo $_POST['password']; ?>"
                    required>
            </div>
            <div class="input-group">
                <b>Author Name:</b>
                <input type="text" placeholder="Author Name" name="AuthorName" value="<?php echo $_POST['password']; ?>"
                    required>
            </div>

            <div class="input-group">
                <b>Seller Name:</b>
                <input type="text" placeholder="Seller Name" name="SellerName" value="<?php echo $email; ?>" required>
            </div>


            <div class="input-group">
                <b>Contact Number:</b>
                <input type="text" placeholder="Contact Number" name="ContactNumber" value="<?php echo $_POST['password']; ?>"
                    required>
            </div>
            <div class="img">
                <b>Select Image:</b>
                <input type="file" multiple="false" accept="image/*" id="image" onchange="upload()">
            </div>
            <div class="buttons">
                <INPUT TYPE="RESET" class="btn" NAME="resetbtn" VALUE="Reset">
                <!-- <button name="submit" class="btn">Clear</button> -->
                <button name="submit" class="btn">Post</button>
            </div>
           </form>
        
    </div>

</body>

</html>