<?PHP

function convertOperation($operation){
    $arr1 = explode("*", $operation);
    if(count($arr1) >1){
        echo $arr1[0] * $arr1[1];
        return;
    }
   $arr2 = explode( "+", $operation);
    if(count($arr2) >1){
        echo $arr2[0] + $arr2[1];
        return;
    }
    $arr3 = explode( "-", $operation);
    if(count($arr3) >1){
        echo $arr3[0] - $arr3[1];
        return;
    }
    $arr4 = explode( "/", $operation);
    if(count($arr4) >1){
        echo $arr4[0] / $arr4[1];
        return;
    }

}







?>