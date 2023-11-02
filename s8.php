<?php require "dbconnect.php"?>
<?php
    // parse_str($_SERVER['QUERY_STRING']);
    $result = $mysqli->query("SELECT * FROM products where id = 8;");
    $prod = $result -> fetch_assoc();
    $hits = $prod["hits"] + 1;
    $mysqli->query("UPDATE products SET hits = ".$hits." WHERE id = 8;");    
    $mysqli->close();
?>
<?php
    if(isset($_COOKIE["lastids"])){
        if(explode(",",$_COOKIE["lastids"])[0]!=$prod["id"]){
            setcookie("lastids",'8'.",".$_COOKIE["lastids"],time() + (86400 * 30));    
        }
        
    }
    else{
        setcookie("lastids", '8', time() + (86400 * 30));
    }
?>


<!doctype html>
<html>

    <head>
        
        <title>Crypto Guard</title>
    </head>
    
    <body> 
        <h1 class="mb-1">Multi-Currency Wallet</h1>
    <div class="class-thumb">
                                    
                                    <a href="s8.php">
                                    <div class="class-info">
                                        

                                        

                                        <span class="service-price">$66</span>

                                        <p>Store, send, and receive a wide range of cryptocurrencies securely within a single convenient platform.
</p>
                                    </div>
                                    </a>
                                </div>
    </body>
</html>
