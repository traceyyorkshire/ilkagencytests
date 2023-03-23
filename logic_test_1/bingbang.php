<html>
<body>
    <h1>Bing Bang Game </h1>
    <form method="POST"> 
        <input type="number" id="bingmin" value="1" name="bingmin">
        <label for="bingmin">Minimum number</label><br>
        <input type="number" id="bingmax" value="100" name="bingmax">
        <label for="bingmax">Maximum number</label><br>
        <input type="submit" name="" value="Submit" />
    </form>    
<?php 
// TJW 14/03/2023 Simple app to generate bing bang game output 

$min = 1;
$max = 100;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){       
    //set min and max to user entered values
    if (is_numeric($_POST['bingmin'])) {
        $min = $_POST['bingmin'];
    }
    if (is_numeric($_POST['bingmax'])) {
        $max = $_POST['bingmax'];
    }
}

$gamearray = range($min,$max);

$callback = "replace_number";
$return = array_map($callback, $gamearray);

foreach ($return as $value){
    echo "$value <br>";
}

/****/

function replace_number($v) {
    $bing_number = 3;
    $bang_number = 5;
    $bing_string = 'Bing';
    $bang_string = 'Bang';

    if ((fmod($v,$bing_number) == 0 ) && (fmod($v,$bang_number) == 0)) {
        return $bing_string.$bang_string ;
    }

    elseif (fmod($v,$bing_number) == 0 ){
        return $bing_string ;
    }
    elseif (fmod($v,$bang_number) == 0 ){
        return $bang_string ;
    }
    else {return $v; }
}
?>
</body>
</html>