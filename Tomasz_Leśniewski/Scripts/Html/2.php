<?php
    require_once('../../Connections/Connections.php');
    
    $FName=$_POST['FName'];
    $LName=$_POST['LName'];
    $Age=$_POST['Age'];
    $Answer1=$_POST['Answer1'];
    $Answer2=$_POST['Answer2'];
    $Answer3=$_POST['Answer3'];

    $Add_Data=mysqli_query($con,"INSERT INTO ankieta (FName,LName,Age,Answer1,Answer2,Answer3) Values ('$FName','$LName','$Age','$Answer1','$Answer2','$Answer3')");

    echo "Dane pobrane z tabeli";
        $wynik = mysqli_query($con,"Select * FROM ankieta");
        if(mysqli_num_rows($wynik)>0)
        {
            echo "<table border = 1>";
            echo "<td bgcolor=LightGray>FName</td>";
            echo "<td bgcolor=LightGray>LName</td>";
            echo "<td bgcolor=LightGray>Age</td>";
            echo "<td bgcolor=LightGray>Answer1</td>";
            echo "<td bgcolor=LightGray>Answer2</td>";
            echo "<td bgcolor=LightGray>Answer3</td>";
            

            while($r = mysqli_fetch_array($wynik))
            {
                echo "<tr bgcolor=orange>";
                echo "<td>".$r['FName']."</td>";
                echo "<td>".$r['LName']."</td>";
                echo "<td>".$r['Age']."</td>";
                echo "<td>".$r['Answer1']."</td>";
                echo "<td>".$r['Answer2']."</td>";
                echo "<td>".$r['Answer3']."</td>";
            }

        }
?>