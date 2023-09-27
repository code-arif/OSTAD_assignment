<?php
//======Password Generator======
function generate_pass($length) {

    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $special_chars = '!@#$%^&*()_+';
    $password = '';
    
    // Combine all character set
    $all_characters = $lowercase . $uppercase . $numbers . $special_chars;
    // echo $all_characters;
    
    
    for ($i = 0; $i < $length; $i++) {

        $rand_char = $all_characters[rand(0, strlen($all_characters) - 2)];

        $password .= $rand_char;
    }
    
    return $password;
}

// Generate a password with a length of 12 characters
$password = generate_pass(12);
echo $password;
