<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST["expense"];
    $value=$_POST["amount"];
    $query="insert into expenses value('$name',$value)";
    if(mysqli_query($conn,$query)){
        echo "Data Added Successfully!";
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    mysqli_close($conn);
}
else{
    echo "Invalid Request!";
}
?>