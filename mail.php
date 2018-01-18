<?php 
$return['removeClass'] = 'alert-success';
$return['addClass'] = 'alert-danger';
$return['status'] = 'error';
$return['message'] = '<a title="close" aria-label="close" data-dismiss="alert" class="close" href="#">×</a><strong>Error!</strong> Please Try again.';

if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $fname = (!empty($_REQUEST['first_name'])) ? $_REQUEST['first_name'] : 'user';
        $fromEmail = (!empty($_REQUEST['email'])) ? $_REQUEST['email'] : 'noreply@footprintsbhc.com';

    if($_REQUEST['form_type']=='contact-us'){
        $subject = 'You have been contacted by ' . trim($fname) . ' .';
        $body = "You have been contacted by ".trim($fname)." ,  additional message is as follows." . PHP_EOL . PHP_EOL;
        } 
    else if($_REQUEST['form_type']=='Insurance Verification'){

        $subject = 'You have been contacted for Insurance Verification by ' . trim($fname) . ' .';
        $body = "You have been contacted by ".trim($fname)."for Insurance Verification,  additional message is as follows." . PHP_EOL . PHP_EOL;
        }
    else if($_REQUEST['form_type']=='Financing Options'){
        $subject = 'You have been contacted for Financing Options by ' . trim($fname) . ' .';
        $body = "You have been contacted by ".trim($fname)." for Financing Options,  additional message is as follows." . PHP_EOL . PHP_EOL;
        }

            $body .=  '<br>';
            foreach($_POST as $key=>$value){
                     if($key=='form_type')  continue;
                      
                    $body .= '<b>'.ucfirst(str_replace('_', ' ', $key)).'</b>'.' : ' .$value;
                    $body .= PHP_EOL . '<br>'; 
                 
            } 
            
            $mail = send_mail($fromEmail, $subject,$body );
            if($mail){
                $return['removeClass'] = 'alert-danger';
                $return['addClass'] = 'alert-success';
                $return['status'] = 'success';
                $return['message'] = '<a title="close" aria-label="close" data-dismiss="alert" class="close" href="#">×</a><strong>Success!</strong> Mail sent successfully.'; 
            } 
            echo json_encode($return); die;
    
}
else{
    echo json_encode($return); die;
}
 
function send_mail($fromEmail, $subject, $message ){ 
    $address='shailesh_genex@yahoo.com';//to mail address
    //$address='test@mailinator.com';//to mail address
    $headers = "From: $fromEmail" . PHP_EOL;
    $headers .= "Reply-To: $fromEmail" . PHP_EOL;
    $headers .= "MIME-Version: 1.0" . PHP_EOL;
    $headers .= "Content-Type: text/html; charset=ISO-8859-1" . PHP_EOL;
    $headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;
    $headers .= "Bcc: abhinav.bmit@mailinator.com". PHP_EOL;
    
    //echo '$address';
    //print_r($address);
    //echo '----------------------------------------';
    //echo '$subject';
    //print_r($subject);
    // echo '----------------------------------------';
    //echo '$message';
    // print_r($message);
    // echo '----------------------------------------';
    //echo '$headers';
    // print_r($headers);
    //die;
    
    if(mail($address, $subject, $message, $headers)) { 
        return true;
    }
    else{ 
        return false;
    }
}