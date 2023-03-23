<!DOCTYPE html>
<html>
<body>
    <h1>Bing Bang Game Javascript logic </h1>
    
    <p id="demo"></p>

<script>

    let output = "";
    let bingmin = 1;
    let bingmax = 50;
    const gamearray = makeGamearray(bingmin,bingmax);
    const newarray = gamearray.map(getBing);
    
    newarray.forEach(outputBing);
    document.getElementById("demo").innerHTML = output;

function outputBing(v){
    output += v += "<br>";
}

function getBing(value, index, array) {
    const bingNumber = 3;
    const bangNumber = 5;
    const bingString = 'Bing';
    const bangString = 'Bang';
    
    if ((value % bingNumber === 0) && (value % bangNumber === 0)){return bingString + bangString;}
    else if (value % bingNumber === 0){return bingString;}
    else if (value % bangNumber === 0){return bangString;}
    else return value;
    
}

function makeGamearray(min,max) {
    var arr = [];
    for (let i = min; i <= max; i++){
        arr.push(i)
    }
    return arr;
}     
</script>

</body>
</html>