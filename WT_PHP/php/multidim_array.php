<?php
//multidimensional array
//create an array using array()
$superheroes=array(
    "Superman"=>array(
        "name"=>"Kent clark",
        "gf"=>"random girl"
    ),
    "Batman"=>array(
        "name"=>"Bruce Wayne", #$superheroes['Batman']['name']
        "gf"=>"Lois Lane"
    ),
    "Ironman"=>array(
        "name"=>"Tony Stark",
        "gf"=>"Pepper Potts"
    ),
    "Spiderman"=>array(
        "name"=>"Peter Parker",
        "gf"=>"Mary Jain"
    )
    );

    print_r($superheroes);

    echo "<br>";

    //extract keys of main array
    $keys=array_keys($superheroes);

    for($i=0;$i<count($superheroes);$i++)
    {
        echo $keys[$i];
        echo ":<br>";
        #$superheroes['superman'] as $key => $value
       foreach($superheroes[$keys[$i]] as $key=>$value)
       {
           echo $key.":".$value."<br>";
       }
    }






?>