<?php
//function get_user($username, $password) {
//    $fileHandle = fopen("users.csv", 'r');
//    $passwordHash = hash('sha256', $password);
//    while(($value = fgetcsv($fileHandle)) != false) {
//        if ($value[0] == $username && $value[1] == $passwordHash) {
//            return true;
//        }
//    }
//
//    return false;
//}
//
//function add_user($username, $password) {
//    if (get_user($username))
//    $fileHandle = fopen("users.csv", 'a');
//    $passwordHash = hash("sha256", $password);
//    fputcsv($fileHandle, [$username, $passwordHash]);
//    fclose($fileHandle);
//}

// data = ['name', 'age', 'expertise', 'bio', imagePath', 'phoneNumber']
function setUserData($username, $data) {
    $fileHandle = fopen("$username.csv", 'w');
    fputcsv($fileHandle, $data);
    fclose($fileHandle);
}

function getUserData($username) {
    $keys = ['name', 'age', 'expertise', 'bio', 'imagePath', 'phoneNumber'];

    $fileHandle = fopen("$username.csv", 'r');
    $data = fgetcsv($fileHandle);
    return array_combine($keys, $data);
}