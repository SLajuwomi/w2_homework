<?php
$msg= "Unexpected Error";
	if (isset($_GET['error'])) {
		if ($_GET['error']=='db_connect') {
			$msg= "Error connecting to database.";
		}
	}
$msg = "Unexpected Error";
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'db_connect') {
        $msg = "Error connecting to database.";
    }
    if ($_GET['error'] == 'missing_book_id') {
        $msg = "Book ID is missing";
    }
    if ($_GET['error'] == 'invalid_book_id') {
        $msg = "Book ID is invalid";
    }
    
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sell Boring Literature</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <div class="menu">
        <main>
            <h1>Books 4 Sale</h1>
            <div class="topnav">
                <a href="#home">Home</a>
                <a href="index.php">Home</a>
                <a href="addbook.php">Add Book</a>
                <a href="login.php">Login</a>
            </div>
            <hr>
            <div class="menu">
                <img src="https://www.iconpacks.net/icons/2/free-opened-book-icon-3163-thumb.png" alt="error icon" />
                <h2>Something went wrong!</h2>
                <h1><?php echo $msg; ?></h1>
                <img src="https://i.scdn.co/image/ab67616d00001e02da1de4c2ad1e444bc4801ff1" alt="error icon" />
                
            </div>
    </div>
</body>
</html>