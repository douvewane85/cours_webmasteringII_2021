<?php
  define("FILE_NAME",'data.json');

function get_all_biens():array{
    $file_content=file_get_contents(FILE_NAME);
    $arr_biens=json_decode($file_content,true);
    return $arr_biens;
}

function add_bien(array $bien):array{
    $bien['id']=uniqid();
    $arr_biens=get_all_biens();
    $arr_biens[]=$bien;
    $file_input=json_encode($arr_biens);
    file_put_contents(FILE_NAME,$file_input);
    return $arr_biens;
}

var_dump(add_bien($bien=[
    "id"=>1,
    "reference"=>"Ref001",
    "Description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. At commodi quia quis. Odit itaque dicta distinctio cumque placeat possimus iure, amet fugiat rem at voluptas eligendi saepe accusantium neque doloribus?",
    "prix"=>500000,
    "zone"=>[
        "id"=> 1 ,
        "nom"=> "zone 1"
    ],
    "type"=>"chambre"
]));
