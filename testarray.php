<?php
       $data = array("Sailaja","Manoj");
      
       $encdata= array();
        $secret_key = "Villanova";
       // Create the initialization vector for added security.
       $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);
  
       $i=0;
      foreach($data as $x => $x_value ){
        
        $encrypted_string = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $secret_key, $x_value, MCRYPT_MODE_CBC, $iv);
        echo $encrypted_string. "<br />\n";
      
    # encode the resulting cipher text so it can be represented by a string
        $ciphertext_base64 = base64_encode($encrypted_string);
        echo $ciphertext_base64. "<br />\n";
        array_push($encdata,"$ciphertext_base64") ;
      
        $ciphertext_dec = base64_decode($ciphertext_base64);
           
        $decrypted_string = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $secret_key, $ciphertext_dec, MCRYPT_MODE_CBC, $iv);
        echo "decrypted string is " .$decrypted_string. "<br />\n";
    
        echo "NIPE".$i;
    
      
      }
     // echo $encdata[0];
     // echo $encdata[1];
      
      $a="HELLO";
      $b = "WORLD";
      $c = intval($a);
      echo $c."<br />\n";
      
// OPening database connection to load data into persons table which contain doctor and patient information 



?>
