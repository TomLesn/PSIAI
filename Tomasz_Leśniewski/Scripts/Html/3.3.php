<!Doctype html>
<?php     
    require_once('../../Connections/Connections.php');

    echo "Dane pobrane z tabeli";
    $wynik = mysqli_query($con,"Select * FROM sklep");
    if(mysqli_num_rows($wynik)>0)
    {
        echo "<table border = 1>";
        echo "<td bgcolor=LightGray>Item</td>";
        echo "<td bgcolor=LightGray>Amount</td>";
        echo "<td bgcolor=LightGray>Contact</td>";
        echo "<td bgcolor=LightGray>Date</td>";
        echo "<td bgcolor=LightGray>Color</td>";
        echo "<td bgcolor=LightGray>Address</td>";
        

        while($r = mysqli_fetch_array($wynik))
        {
            echo "<tr bgcolor=orange>";
            echo "<td>".$r['Item']."</td>";
            echo "<td>".$r['Amount']."</td>";
            echo "<td>".$r['Contact']."</td>";
            echo "<td>".$r['Date_']."</td>";
            echo "<td>".$r['Color']."</td>";
            echo "<td>".$r['Address_']."</td>";
        }

    }
?>