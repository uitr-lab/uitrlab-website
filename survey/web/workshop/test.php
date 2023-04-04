<?php

    require realpath(__DIR__ . '/../lib/mail.php');
    (new ResponseMailer())
        ->respond(json_decode('{
            "name":"Nick Blackwell",
            "organization":"University Of British Columbia",
            "email":"nick.blackwell@ubc.ca",
            "dietary":""
        }'));