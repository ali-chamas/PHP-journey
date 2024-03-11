<?PHP




function findNumbers($string){
    $numbersContainer=[];
    $number='';
    for ($i = 0; $i <=strlen($string); $i++) {

        if (is_numeric($string[$i])) {
            
            //if number has multiple digits
          $number=$number.$string[$i];
        }elseif($number!=''){

            //if the next number is not a digit, we sotre the current number then reset it
            array_push($numbersContainer,$number);
            $number='';
        }
       
     }
     sort($numbersContainer);
     return  $numbersContainer;
}

print_r(findNumbers("hpd12aq3@8w$5")) ;
?>