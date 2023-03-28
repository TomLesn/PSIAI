<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="3.css">
</head>
<body>
    <div class="div-left">
        <div class="div-left-right">
            <p>Example:<br><br>Item: Shirt<br><br>Amount: 1<br><br>Contact: 123-123-123<br><br>Date: 01.01.2023<br><br>Color: Blue<br><br>Address: Dworcowa 23/23</p>
        </div>
    </div>
    <div class="div-right">
        <div class="div-right-left">
            <p>Last Opinions:</p>
        <?php    
            require_once('../../Connections/Connections.php');

            $Add_Data = "SELECT Answer1 FROM ankieta";

            $wynik = $con->query($Add_Data);

            if ($wynik->num_rows > 0) {

            while($row = $wynik->fetch_assoc()) {
          echo "Opinion: " . $row["Answer1"] . "/10<br>";
                 }
            } else {
              echo "0 results";
            }
        ?>
        </div>
    </div>   
<div class="div">
    <form method="post" action="3.php">
        <label class="label">Item :<br><input type="text" required name="Item"></label><br><br>
        <label class="label">Amount :<br><input type="number" required name="Amount"></label><br><br>
        <label class="label">Contact :<br><input type="tel" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" name="Contact"></label><br><br>
        <label class="label">Date :<br><input type="text" required pattern="[0-9]{2}.[0-9]{2}.[0-9]{4}" name="Date_"></label><br><br>
        <label class="label">Color :<br><input type="text" required name="Color"></label><br><br>
        <label class="label">Address :<br><input type="text" required name="Address_"></label><br><br>
        <input class="button" type="submit" value="Send">
    </form>
</div>
</body>
</html>