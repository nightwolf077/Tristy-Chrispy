<?php
    $firstn = $_POST['firstn'];
    $lastn = $_POST['lastn'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    if($pass == $pass2){
        $db = mysqli_connect("localhost","root","nightwolfzorozero1");
        mysqli_select_db($db,"restaurant");
        $q2 = " INSERT INTO restaurant.members(First_name,Last_name,Pass,Phone,Email) 
                VALUES ('$firstn', '$lastn', '$pass', '$phone', '$email');";
        $q = "select * from members";
        mysqli_query($db,$q2);
        $result= mysqli_query($db,$q);
        mysqli_close($db);

        print("<table border ='1'>");
        while($a = mysqli_fetch_row($result)){
            print("<tr>");

            for($i = 0 ; $i < count($a) ; $i++)
                print("<td>".$a[$i]."</td>");

            print("</tr>");
        }
        print("</table>");
    }
    else{
        print("the passwords didnt match");
    }
    
?>
