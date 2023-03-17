# Survey template 

This is the live survey demo template. 
Only **nblackwe** can modify the contents of this directory. 

You can view the current demo survey at [Demo Survey](https://survey.uitrlab.ok.ubc.ca/current/)

You to work on the current survey got to [Demo Survey](https://survey.uitrlab.ok.ubc.ca/current/)





## Example Post Data Using Javascript Fetch API

In 

```


return fetch('https://survey.uitrlab.ok.ubc.ca/current/submit.php', {
    method: "POST", 
    cache: "no-cache",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(formData), 
}).then(function(data){
   return 0;
});


 ```


## Example File Upload In PHP
 ```
<?php

$ch = curl_init('https://uploader.uitrlab.ok.ubc.ca/upload.php');

$cfile = new CURLStringFile(json_encode($_POST, JSON_PRETTY_PRINT), time().'.json','application/json');


$data = array(
	'the_file' => $cfile,
	'stub'=>'{folder-id}',
	'share-link'=>'{share-link-token}'
);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Execute the handle
curl_exec($ch);

```

