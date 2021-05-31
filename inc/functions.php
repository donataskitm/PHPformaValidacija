<?php

$validation = [];
function validate($data){
    global $validation;
    if(empty($_POST['username']) || !preg_match('/A-Z/', $_POST['username'])){
        $validation[] = "Vardas turi buti is didziosios";
    }
}

function storeData(){
    global $data;
    $data = "data/messages.txt"; //kelias iki tekstinio failo
    $content = file_get_contents($data); //failo turinys
    $formData = implode(",", $_POST); //konvertuojama post masyva i string
    $content .= $formData."/n";  //pridedam eilutes pabaigos zenkla
    file_put_contents($data, $content); //rasom formos duomenis i tekstini faila
    var_dump($content);
}

function showData()
{
    global $messages;
    global $data;
    $messages = file_get_contents($data, true);//priskiriame failo duomenis
    $messages = explode('/n', $messages);//konvertuojam tekstinio failo duomenis i masyva
    return $messages;
}

