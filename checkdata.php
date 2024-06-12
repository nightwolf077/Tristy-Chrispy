<?php
    $bol = false;
        $db = mysqli_connect("localhost","root","nightwolfzorozero1");
        mysqli_select_db($db,"restaurant");
        
        $q = "select * from members";
        $result= mysqli_query($db,$q);
        mysqli_close($db);

        while($a = mysqli_fetch_row($result)){
            if ($a[0]==$firstn&&$a[2]==$pass){
                $bol = true;
                print("<script>
                    window.location='http://localhost/web project/Home.html'
                       </script>");
            }
            else if($a[0]==$firstn&&$a[2]!=$pass)
                    print("wrong password <br>");
        }
        if(!$bol)
            print("login faild");
?>