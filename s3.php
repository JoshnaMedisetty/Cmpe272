<?php require "dbconnect.php"?>
<?php
    // parse_str($_SERVER['QUERY_STRING']);
    $result = $mysqli->query("SELECT * FROM products where id = 2;");
    $prod = $result -> fetch_assoc();
    $hits = $prod["hits"] + 1;
    $mysqli->query("UPDATE products SET hits = ".$hits." WHERE id = 2;");    
    $mysqli->close();
?>
<?php
    if(isset($_COOKIE["lastids"])){
        if(explode(",",$_COOKIE["lastids"])[0]!=$prod["id"]){
            setcookie("lastids",'2'.",".$_COOKIE["lastids"],time() + (86400 * 30));    
        }
        
    }
    else{
        setcookie("lastids", '2', time() + (86400 * 30));
    }
?>


<!doctype html>
<html>

    <head>
        
        <title>Crypto Guard</title>
    </head>
    
    <body> 
        <h1 class="mb-1">Expert Support</h1>
    <div class="class-thumb">
                                    
                                    <a href="s3.php">
                                    <div class="class-info">
                                        

                                        

                                        <span class="service-price">$66</span>

                                        <p>Have a question or need assistance? Our team of dedicated crypto experts is available around the clock to provide you with timely and knowledgeable support. Whether you're a newcomer or a seasoned trader, our experts are here to guide you through any aspect of the crypto world.</p>
                                    </div>
                                    </a>
                                </div>
    </body>
</html>
