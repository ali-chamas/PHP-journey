<?PHP


function flipNum($num){
    $arr=[];
    //to acces each character of the number easily
    $stringifiedNum=$num."";
    $newNum='';

    for($i= 0;$i<strlen($stringifiedNum);$i++){
        //first in
       array_push($arr,$stringifiedNum[$i]);
    }

    // last out
    while(count($arr) >0){
        $newNum.=array_pop($arr);
    }

    echo $newNum;
}

flipNum(4532);


?>