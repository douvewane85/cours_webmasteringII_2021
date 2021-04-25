<?php
//Declaration
$bien=[
    "id"=>1,
    "reference"=>"Ref001",
    "Description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. At commodi quia quis. Odit itaque dicta distinctio cumque placeat possimus iure, amet fugiat rem at voluptas eligendi saepe accusantium neque doloribus?",
    "prix"=>500000,
    "zone"=>[
        "id"=> 1 ,
        "nom"=> "zone 1"
    ],
    "type"=>"chambre"
];
var_dump($bien);
echo "Affichage de la Reference";echo"<br>";
var_dump($bien['reference']);
echo "Affichage du nom de le zone";echo"<br>";
var_dump($bien['zone']['nom']);echo"<br>";

$arr_bien=[
    [
        "id"=>1,
        "reference"=>"Ref001",
        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. At commodi quia quis. Odit itaque dicta distinctio cumque placeat possimus iure, amet fugiat rem at voluptas eligendi saepe accusantium neque doloribus?",
        "prix"=>50000,
        "zone"=>[
            "id"=> 1 ,
            "nom"=> "zone 1"
        ],
        "type"=>"chambre"
    ],
    [
        "id"=>2,
        "reference"=>"Ref002",
        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. At commodi quia quis. Odit itaque dicta distinctio cumque placeat possimus iure, amet fugiat rem at voluptas eligendi saepe accusantium neque doloribus?",
        "prix"=>500000,
        "zone"=>[
            "id"=> 1 ,
            "nom"=> "zone 2"
        ],
        "type"=>"Appartement"
    ]
];

foreach ($arr_bien as $key => $bien) {
    echo "------------------Bien {$key}------------<br>";
    echo "ID: {$bien['id']} <br>";
    echo "REFERENCE: {$bien['reference']} <br>";
    echo "DESCRIPTION: {$bien['description']} <br>";
    echo "PRIX: {$bien['prix']} <br>";
    echo "ZONE: {$bien['zone']['nom']} <br>";
}