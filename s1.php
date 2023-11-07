<?php require "dbconnect.php"?>
<?php
    // parse_str($_SERVER['QUERY_STRING']);
    $result = $mysqli->query("SELECT * FROM products where id = 1;");
    $prod = $result -> fetch_assoc();
    $hits = $prod["hits"] + 1;
    $mysqli->query("UPDATE products SET hits = ".$hits." WHERE id = 1;");    
    $mysqli->close();
?>
<?php
    if(isset($_COOKIE["lastids"])){
        if(explode(",",$_COOKIE["lastids"])[0]!=$prod["id"]){
            setcookie("lastids",'1'.",".$_COOKIE["lastids"],time() + (86400 * 30));    
        }
        
    }
    else{
        setcookie("lastids", '1', time() + (86400 * 30));
    }
?>



<!doctype html>
<html>

    <head>
        
        <title>Crypto Guard</title>
    </head>
    
    <body> 
        <h1 class="mb-1">CURRENCY WALLET</h1>
    <div class="class-thumb">
                                    
                                    <a href="s1.php">
                                    <div class="class-info">
                                        

                                        

                                        <span class="service-price">$66</span>

                                        <p>With CryptoGuard, managing your cryptocurrency portfolio has never been easier. Our multi-currency wallet allows you to securely store, send, and receive a wide range of cryptocurrencies, all within one convenient platform. Enjoy real-time balance tracking and easy transaction management.</p>
                                    </div>
                                    </a>
                                </div>
    </body>
</html>
