<?php
    
    $msg = "";
    $error = "";
    if (isset($_POST['msg'])) {
        extract($_POST);
        echo "<h3 style='color: green;'>$msg</h3>";
    } else {
        extract($_POST);
        echo "<h3 style='color: red;'>$error</h3>";
    }
    


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yourName = $_POST["your_name"];
    $partnerName = $_POST["part_name"];

    $result = strlen($yourName) + strlen($partnerName);
    
    
     echo $result; 
   
}
?>
