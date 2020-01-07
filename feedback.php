<?php
$host = "localhost";
$userName = "id10845216_pernambut";
$password = "ashkhan";
$dbName = "id10845216_pernambut_journal";
// Create database connection
$conn = mysqli_connect($host, $userName, $password, $dbName);

// Check connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $Name    = $_POST['name'];
    $Email   = $_POST['email'];
    $Mobile  = $_POST['contact'];
    $Enquiry = $_POST['comment'];

    $query="INSERT INTO feedback_form (name,email,contact,comment) VALUES ('$Name','$Email','$Mobile','$Enquiry')";
    
    if ($conn->multi_query($query) === TRUE) {
	    echo "<script>alert('we will call you back soon');
        window.location.href='index.html';
</script>";
    
	} else {
	    echo "Error: " . $query . "<br>" . $conn->error;
	}
  
        
        // the message
        $msg = "Hai $Name \nWelcome to Pernambut Journal \nHere you can get entire pernambut details as well as current Events updates.\n Where ever you go you can access this PJ.";

    
        
        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);
        
        // send email
        mail("$Email","Welcome to Pernambut Journal",$msg);
?>

