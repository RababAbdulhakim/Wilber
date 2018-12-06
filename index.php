<?php


$people = '{"data":[{"first_name":"jake","last_name":"bennett","age":31,"email":"jake@bennett.com","secret":"VXNlIHRoaXMgc2VjcmV0IHBocmFzZSBzb21ld2hlcmUgaW4geW91ciBjb2RlJ3MgY29tbWVudHM="},'
        . '{"first_name":"jordon","last_name":"brill","age":85,"email": "jordon@brill.com","secret":"YWxidXF1ZXJxdWUuIHNub3JrZWwu"}]}';

// this  returns the two variables requisted in the task th
    $json_decode = json_decode($people);
    $emails = [];
    $data = [];
    $results = [];
    foreach ($json_decode->data as $value) {
        $emails[] = $value->email;
        $name = $value->first_name ." ". $value->last_name;
        $data[$value->age] = ['name'=>$name,'first_name'=>$value->first_name,'last_name'=>$value->last_name,'age'=>$value->age,
            'email'=>$value->email,'secret'=>$value->secret];
        
    }
krsort($data);
//return  a comma-separated list of email addresses
$emails = implode(' , ', $emails);
// the new data array
$thefinaldata = array_values($data);

var_dump($thefinaldata);
var_dump("<br><br>");
var_dump("Emails: ".$emails);