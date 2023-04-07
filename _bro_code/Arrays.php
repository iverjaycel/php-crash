<?php 
 
    $foods = array("apple","orange",
                  "banana","coconut");


    foreach($foods as $food){
        echo $food."<br>";
    }

?>

<?php 
    

    // asscociative array = An array made of key => value pairs
    $capitals = array("USA" => "Washingtondc",
                     "JAPAN"=>"KYOTO",
                     "korea" =>"Seoul",
                     "india"=>"New Delhi");

    // $capitals["USA"] = "Lasvegas";
    // // $capitals["China"] = "Beijing";
    // array_pop($capitals);
    // $keys = array_keys($capitals);
    
    foreach($capitals as $key => $value){
        echo"{$key} = {$value} <br>";
    }
?>