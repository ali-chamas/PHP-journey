<?PHP

function validate($email,$password) {
    
    //from google
    $emailPattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';

    //preg_match checks if the input matches the pattern
    if(preg_match($emailPattern, $email)&& preg_match($passwordPattern, $password)){
        return true;
    }else{
        return false;
    }

    

    
}
if(validate('alich@gmail.com','dsaMd@d32')){
    echo'true';
}else{
    echo 'false';
}


?>