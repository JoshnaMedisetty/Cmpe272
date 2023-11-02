
<section class="main-section alabaster" id="tops">
	<div class="container fullsize">
    	<div class="row">
			
        	<div class="col-lg-7 col-sm-8 wow fadeInRight">
            	<h2>Your top viewed</h2>
                <?php
                    if(isset($_COOKIE["lastids"])){
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>Name</th>";
                        echo "<th>Description</th>";
                        echo "<th>Hits</th>";
                        echo "</tr>";        
                     $heatmap=array();
                     foreach (explode(",",$_COOKIE["lastids"]) as $id){
                         if(isset($heatmap[$id])){
                             $heatmap[$id] = $heatmap[$id] + 1;
                         }
                         else {
                             $heatmap[$id] = 1;
                         }
                     }
                    for($i=0;$i<5;$i++){
                     $max=0;
                     $maxid=0;
                    foreach ($heatmap as $key => $value){
                         if($value>$max){
                             $max = $value;
                             $maxid = $key;
                         }
                     }
                    $result = $mysqli->query("SELECT * FROM products where id = ".$maxid.";");
                    $row = $result->fetch_assoc();
                    echo "<tr>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["description"]."</td>";
                    echo "<td>".$max."</td>";
                    echo "</tr>";
                    unset($heatmap[$maxid]);    
                    }
                     
                    }
                    else{
                        echo "You have not viewed any products";
                          
                    }
                    echo "</table>";
                ?>
                
            </div>
        	<div class="col-lg-7 col-sm-12 wow fadeInRight">
            	<h2>Your Last 5 viewed</h2>
                
                <?php
                    if(isset($_COOKIE["lastids"])){
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>Name</th>";
                        echo "<th>Description</th>";
                        echo "</tr>"; 
                        $hits = explode(",",$_COOKIE["lastids"]);
                        $viewed = array();
                        for($i=0; $i<5 and $i<sizeof($hits); $i++){
                            $result = $mysqli->query("SELECT * FROM products where id = ".$hits[$i].";");
                            $row = $result->fetch_assoc();
                            echo "<tr>";
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["description"]."</td>";
                            echo "</tr>";
                            array_push($viewed,$hits[$i]);
                        }
                        echo "</table>";
                    }
                    else{
                        echo "You have not viewed any products";
                    }
                ?>
                
            </div>
        </div>
	</div>
   
    
    
</section>
