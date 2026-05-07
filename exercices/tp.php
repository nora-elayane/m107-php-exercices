<?php


for( $i = 1; $i <= 10; $i++ ){
    for( $j = 1; $j <= 10; $j++ ){  
        $result = ($i * $j) ;
        echo  '<div style="width: 40px;height: 40px; color: yellow; background-color:fuchsia;border:1px solid black;text-align:center;justify-content:center; display:inline-block">'.
                $result .
        '</div>'  ;
    }
    echo "<br>" ;
    

}

// $fruits = ["pomme","orange","banane","fraise"];
// foreach($_SERVER as $fruit => $c){
//   echo $c . "=>" . $fruit . "<br>";
// }


// $name = "Nora" ;

// echo "Bonjour $name" ;

$a = 5;
$b = 10;

function test()
{
global $a;
$a = $a + 5;
}

test();

echo $a;

?>