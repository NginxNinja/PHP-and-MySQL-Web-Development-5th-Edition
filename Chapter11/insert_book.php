<!DOCTYPE html>
<html>
<head>
	<title>Book-O-Rama Book Entry Results</title>
</head>
<body>
	<h1>Book-O-Rama Book Entry Results</h1>
    <?php
    /** Original Codes. This is not working, at all.
    if(!isset($_POST['ISBN']) || !isset($_POST['Author']) || !isset($_POST['Title']) || !isset($_POST['Price'])){
        echo "<p>You have not entered all the required details.<br />
             Please go back and try again.</p>";
        exit;
    }
    **/
    
    // This is still not working. Please FIX this before proceeding.
    if(($_POST['ISBN'] || $_POST['Author'] || $_POST['Title'] || $_POST['Price']) == NULL){
        echo "<p>You have not entered all the required details.<br />
             Please go back and try again.</p>";
        exit;
    }
    
    ?>
</body>
</html>