<?php
    $firstn = $_POST['firstn'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $db = mysqli_connect("localhost","root","nightwolfzorozero1");
    mysqli_select_db($db,"restaurant");
    $q2 = " UPDATE restaurant.members 
            SET Pass = '$pass2' 
            where First_name = '$firstn' and Pass = '$pass';";
    $q3 = "SELECT Pass where First_name = '$firstn' from members";
    $bol = false;
    $q = "select * from members";
    print(mysqli_query($db,$q3));
         
    $result2= mysqli_query($db,$q3);    
    $result= mysqli_query($db,$q);
    while($a = mysqli_fetch_row($result)){
        if ($a[0]==$firstn&&$a[2]==$pass){
            $bol = true;
            print("pass changed");
            mysqli_query($db,$q2);
        }
    }
    if(!$bol)
    print("Wrong password or username");
    
    
        
        mysqli_close($db);
        
?>