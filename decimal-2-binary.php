<?PHP



function convertToBinary($decimal){
    $binary=[];
    
    while($decimal>=1){
        array_push($binary,$decimal%2);
        $decimal/=2;
    }
    return array_reverse($binary);
}


$binary = implode('',convertToBinary(5));
echo $binary;
?>