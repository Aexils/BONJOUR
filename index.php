<?php
$personnes = [
    'Personne_1' => [
        'nom' => 'Neveu',
        'prenom' => 'Mathieu',
        'age' => '20'
    ],
    'Personne_2' => [
        'nom' => 'Desjardins',
        'prenom' => 'Gregoire',
        'age' => '17'
    ],
    'Personne_3' => [
        'nom' => 'Levasseur',
        'prenom' => 'Alexis',
        'age' => '24'
    ]
];
print_r($personnes);

foreach ($personnes as $k){
    if ($k['age'] >= 18) {
        echo $k['prenom']."\n";
    }
 
} 
?>