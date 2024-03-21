<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require '../vendor/autoload.php';

 $date = date("j-F-Y (g:i a)"); 


if(isset($_POST["email"])){
    $name = $_POST["name"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $url = $_SERVER['HTTP_REFERER'];
    $status = false;
    $responseMessage = '';
   
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   
        $mail->isSMTP();                                         
        $mail->Host       = 'mail.niyayogastudios.com';                
        $mail->SMTPAuth   = true;                                
        $mail->SMTPDebug  = 0;
        $mail->Username   = 'info@niyayogastudios.com';           
        $mail->Password   = 'RBiskW7s6WF5Kvd';                        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         
        $mail->Port       = 465;                                 

        //Recipients
        $mail->setFrom('info@niyayogastudios.com', $name);
        $mail->addAddress('niyayogastudios@gmail.com', 'Niyo Yoga Contact');     
        $mail->addReplyTo($email, $name);

        //Content
        $mail->isHTML(true);                                 
        $mail->Subject = 'Niyo Yoga Contact Form ' .$date.'';
        $mail->Body    = '<table>
                            <tbody>
                                 <tr>
                                    <th>Name</th>
                                    <td>'.$name.'</td>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <td>'.$phone_number.'</td>
                                </tr>
                                <tr>
                                    <th>Email Id</th>
                                    <td>'.$email.'</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>'.$message.'</td>
                                </tr>
                                <tr>
                                    <th>Url</th>
                                    <td>'.$url.'</td>
                                </tr>
                            </tbody>
                        </table>';

        if($mail->send()){
            $responseMessage = 'Enquiry has been successfully submitted';
            $status = true;
        }else{
            $responseMessage = 'Something Went to wrong';
        }
        
        
    } catch (Exception $e) {
        $responseMessage = "Error: {$mail->ErrorInfo}";
    }

    $output = array('message' => $responseMessage, 'status' => $status);
    echo json_encode($output);
}