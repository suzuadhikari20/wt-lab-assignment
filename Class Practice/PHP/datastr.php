<?php

$gcesStaffs = [
    "academic" =>[
        [
        "name"=> "Bibit",
        "address" => "Malepatan",
        "phones" => ["9816655644"],
        "subjects" => ["MP","LC"]
        
    ],
    [
        "name"=> "Bibit",
        "address" => "Malepatan",
        "phones" => ["9816655644"],
        "subjects" => ["MP","LC"]
        
    ]
    ],
    "non-academic" =>    
    [
    [

    
        "name"=> "Bibit",
        "address" => "Malepatan",
        "phones" => ["9816655644"],
        "subjects" => ["MP","LC"]  
    ],
    [
        "name"=> "Bibit",
        "address" => "Malepatan",
        "phones" => ["9816655644"],
        "subjects" => ["MP","LC"]  
    ],
    [
        "name"=> "Bibit",
        "address" => "Malepatan",
        "phones" => ["9816655644"],
        "subjects" => ["MP","LC"]  
    ]
    ]
    ];    
    // echo "Non-academic Staffs: ";
    echo count($gcesStaffs["non-academic"]);
    echo "<br/>"
    // echo "Academic Staffs: ";
    echo count($gcesStaffs["academic"]);

?>