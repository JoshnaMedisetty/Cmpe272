<?php require "dbconnect.php"?>
<?php
    // parse_str($_SERVER['QUERY_STRING']);
    $result = $mysqli->query("SELECT * FROM products where id = 7;");
    $prod = $result -> fetch_assoc();
    $hits = $prod["hits"] + 1;
    $mysqli->query("UPDATE products SET hits = ".$hits." WHERE id = 7;");    
    $mysqli->close();
?>
<?php
    if(isset($_COOKIE["lastids"])){
        if(explode(",",$_COOKIE["lastids"])[0]!=$prod["id"]){
            setcookie("lastids",'7'.",".$_COOKIE["lastids"],time() + (86400 * 30));    
        }
        
    }
    else{
        setcookie("lastids", '7', time() + (86400 * 30));
    }
?>


<!doctype html>
<html>

    <head>
        
        <title>Crypto Guard</title>
    </head>
    
    <body> 
        <h1 class="mb-1">User-Friendly Interface</h1>
    <div class="class-thumb">
                                    
                                    <a href="s7.php">
                                    <div class="class-info">
                                        

                                        

                                        <span class="service-price">$66</span>

                                        <p>Our intuitive interface makes it easy for both beginners and experienced users to navigate and manage their portfolios. 
</p>
                                    </div>
                                    </a>
                                </div>
    </body>
</html>
