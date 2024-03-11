
<?PHP

function ipChecker($input){
    $divisions=explode(".",$input);
    if(count($divisions)> 4){
        return false;
    }else{
        for($i= 0;$i<count($divisions);$i++){
           if($divisions[$i]>'255' || $divisions[$i]<'0'){
            return false;
           }
        }
    }
    return true;
}

if(ipChecker('192.22.0.102')){
    echo'true';
}else{
    echo 'false';
}

?>