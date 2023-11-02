<?php require "dbconnect.php"?>
<?php
   
$collection = $client->selectCollection('cryptodb', 'cryptodb');

// Query to find a document with id = 1
$result = $collection->findOne(['id' => 1]);

// If document is found, update hits count
if ($result) {
    $hits = $result['hits'] + 1;
    $collection->updateOne(['id' => 1], ['$set' => ['hits' => $hits]]);
}

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
