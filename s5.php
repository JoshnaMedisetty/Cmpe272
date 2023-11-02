<?php require "dbconnect.php"?>
<?php
    // parse_str($_SERVER['QUERY_STRING']);
    $result = $mysqli->query("SELECT * FROM products where id = 5;");
    $prod = $result -> fetch_assoc();
    $hits = $prod["hits"] + 1;
    $mysqli->query("UPDATE products SET hits = ".$hits." WHERE id = 5;");    
    $mysqli->close();
?>
<?php
    if(isset($_COOKIE["lastids"])){
        if(explode(",",$_COOKIE["lastids"])[0]!=$prod["id"]){
            setcookie("lastids",'5'.",".$_COOKIE["lastids"],time() + (86400 * 30));    
        }
        
    }
    else{
        setcookie("lastids", '5', time() + (86400 * 30));
    }
?>


<!doctype html>
<html>

    <head>
        
        <title>Crypto Guard</title>
    </head>
    
    <body> 
        <h1 class="mb-1">Portfolio Diversification</h1>
    <div class="class-thumb">
                                    
                                    <a href="s5.php">
                                    <div class="class-info">
                                        

                                        

                                        <span class="service-price">$66</span>

                                        <p>Diversify your investments across a wide range of cryptocurrencies to minimize risk and maximize potential returns. 
</p>
                                    </div>
                                    </a>
                                </div>
    </body>
</html>
