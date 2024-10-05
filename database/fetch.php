<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/tracker.css">
    <style>
        /* body{
            background-color: cadetblue;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        } */

        table {
            margin: 0 auto;
            width: 50%;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
<body>
    
    <table id="exp-tab">
        <tr>
            <td>Expense Name</td>
            <td>Cost</td>
        </tr>
        <?php
            include "config.php";
            $total=0;
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "select * from expenses";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) { 
                    echo "<tr>";
                    echo "<td>" .$row["name"]. "</td> ";
                    echo "<td>" .$row["price"]. "</td> ";
                    echo "</tr>";
                    $total+=$row["price"];
                }
                echo "<tr><td>Total</td>";
                echo "<td>$total</td></tr>";
                echo "</table>"; 
            } else {
                echo "0 results";
            }
            
            mysqli_close($conn);
        ?>
    </table>
</body>
</html>