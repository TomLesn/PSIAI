<?php     
    require_once('../../Connections/Connections.php');

    $Login = $_POST['Login'];
    $Haslo = $_POST['Haslo'];
    
    
    // Sprawdź, czy podany login już istnieje w bazie danych
    $wynik = mysqli_query($con, "SELECT * FROM Rej WHERE Login='$Login'");
    if (mysqli_num_rows($wynik) > 0) {
        // Jeśli już istnieje, przekieruj do strony rejestracji
        header("Location: Login-Istnieje.html");
    } else {
        // W przeciwnym razie, dodaj nowe dane do bazy danych
        $Add_Data = mysqli_query($con, "INSERT INTO Rej (Login, Haslo) VALUES ('$Login', '$Haslo')");
        // Przekieruj do strony głównej
        header("Location: Akceptacja.html");
    }
?>