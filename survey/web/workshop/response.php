<?php

class ResponseMailer{

    public function sendToAll(){

     
        require realpath(__DIR__ . '/vendor/autoload.php');


        $emailBodyMarkdown = realpath(__DIR__ . '/../response.md');
        $emailSubjectMarkdown = realpath(__DIR__ . '/../subject.md');
        $respondentsCsvPath= realpath(__DIR__ . '/../responses.csv');

      
        $respondents=array(
        	
        );

        $fieldCount = 0;
        $row = 1;

        if (($handle = fopen($respondentsCsvPath, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                if ($row == 1) {
                    $fieldCount = $num;
                }

                if ($num < $fieldCount) {
                    for ($i = $num; $i < $fieldCount; $i++) {
                        $data[] = '';
                    }
                }


                if ($row == 1) {
                    $header=$data;
  
                  
                } else {
                 
                    $respondents[]=array_combine($header, $data);
                }

                $row++;
            }
            fclose($handle);
        }



		shuffle($respondents);
		$respondents=array_slice($respondents, 0, 3);

        print_r($respondents);

        //die();

        foreach($respondents as $data){

	        $subject = file_get_contents($emailSubjectMarkdown);
	        $body=file_get_contents($emailBodyMarkdown);

	        $loader = new \Twig\Loader\ArrayLoader([
	            'default' => $body
	        ]);
	        $twig = new \Twig\Environment($loader);
	        $body = $twig->render('default', $data);
	    
	        $Parsedown = new \Parsedown();
	        $body = $Parsedown->text($body);



	        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
	        try {
	            
	            $mail->isSMTP();                                            //Send using SMTP
	            $mail->Host       = 'smtp.mail-relay.ubc.ca';               //Set the SMTP server to send through
	            $mail->Username   = 'uitr.lab@ubc.ca';                  //SMTP username

	            $mail->Port       = 25;

	            $mail->setFrom('uitr.lab@ubc.ca', 'UiTR Travel Survey Workshop');
	            $mail->addAddress('elis.davanzo@ubc.ca');     //Add a recipient

	            $mail->addAttachment(realpath(__DIR__ . '/../invite.ics')); 
	            $mail->addAttachment(realpath(__DIR__ . '/../attachments/MaptoNechakoResidence.pdf')); 


	            $mail->isHTML(true);                            //Set email format to HTML
	            $mail->Subject = $subject;
	            $mail->Body    = $body;
	            $mail->send();


	            echo 'send to '.$data['Email']."\n";


	        } catch (PHPMailer\PHPMailer\Exception $e) {
	            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	        }


	    }
    }
}


(new ResponseMailer())->sendToAll();