<!Doctype html>
<?php     
    require_once('../../Connections/Connections.php');

        echo "Dane pobrane z tabeli";
        $wynik = mysqli_query($con,"Select * FROM rej");
        if(mysqli_num_rows($wynik)>0)
        {
            echo "<table border = 1>";
            echo "<td bgcolor=LightGray>Login</td>";
            echo "<td bgcolor=LightGray>Haslo</td>";
            

            while($r = mysqli_fetch_array($wynik))
            {
                echo "<tr bgcolor=orange>";
                echo "<td>".$r['Login']."</td>";
                echo "<td>".$r['Haslo']."</td>";
            }

        }
?>