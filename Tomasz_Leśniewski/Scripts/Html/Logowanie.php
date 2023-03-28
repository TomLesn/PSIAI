<?php     
    session_start();
    require_once('../../Connections/Connections.php');

    $Login = $_POST['Login'];
    $Haslo = $_POST['Haslo'];

    $wynik = mysqli_query($con, "SELECT * FROM rej WHERE Login='$Login' AND Haslo='$Haslo'");
    if(mysqli_num_rows($wynik) == 1) {
        $_SESSION['log'] = true; // user has been successfully authenticated, set session variable
        header("Location: Zalogowany.php");

    } else {
        $_SESSION['blad'] = header ("Location: Odmowa.html");
    }
    $con->close();
?>