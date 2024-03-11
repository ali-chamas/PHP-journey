<?PHP



function mergeSort($arr){


if(sort($arr)){
    return $arr;
}
$left=array_splice($arr,0,count($arr)/2);
$right=array_splice($arr,count($arr)/2-1,count($arr)+1);

sort($left);
sort($right);

//keep dividing in half and sorting until it's sorted
mergeSort($left);
mergeSort($right); 





}


print_r(mergeSort([43,23,4,35,4,6445,2,3,5,3,12,4,6,8,9,6,3]));

?>