<?php 

if (isset($_POST["submit"])){
    
$vardas = trim($_POST["vardas"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);


if(!empty($vardas) && !empty($email) && !empty($message)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $from = "$email";
        $to = "justina.puzaitiene@gmail.com";
        $subject = "Nauja žinutė";
        $autorius = "Nuo: " . $vardas . ", " . $email;
        $zinute = htmlspecialchars($message);
        mail($to, $subject, $autorius, $zinute, $from);
        echo "<script>alert('Thank you for your message, we will replay you soon!'); </script>";
    }
}
include("db.php");
}

?>