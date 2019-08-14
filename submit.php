<?php
        $femail          	=       $_POST["femail"];    // MAIL	 
        $fphone	            =       $_POST["fmessage"]; 	 //PHONE
        $fmessage           =       $_POST["fmessage"]; 	 //PHONE

        $message         = '<table >';

        $message        .= '<tr><td>';
        $message        .= '<b>Hi,</b>';
        $message        .= '</td></tr>';

        $message        .= '<tr><td>';
        $message        .= '<b>Contact us form submitted online.</b>' ;
        $message        .= '</td></tr>';
 
		$message        .= '<tr><td>';
        $message        .= '<b>E-MAIL ID 	  	:</b> '.$femail;
        $message        .= '</td></tr>';
		
		$message        .= '<tr><td>';
        $message        .= '<b>PHONE NO 	  	:</b> '.$fphone;
        $message        .= '</td></tr>';
 
        $message        .= '<tr><td>';
        $message        .= '<b>MESSAGE 		     :</b> '.$fmessage ;
        $message        .= '</td></tr>';

        $message        .= '</table>';
		
$headers = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 		// This Line is Old 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";				// This Line is New 
// Subject
$subject	= 'DAVID KING';
// To Address
$to			= "timothy.e.casey@gmail.com";
// Additional headers
$headers	.= 'From: '.$fname.' <'.$femail.'> ' . "\r\n";
//$headers	.= 'Cc: <email id here>' . "\r\n";
//$headers	.= 'Bcc: <email id here>' . "\r\n";
// Mail it
mail($to, $subject, $message, $headers);
echo 'Thank you for your submission!';
?>
