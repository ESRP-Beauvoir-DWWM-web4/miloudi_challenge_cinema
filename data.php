<?php

$consommations = [
    ["popcorn", "l", 3],
    ["popcorn", "xl", 5],
    ["chips", "100g", 2.9],
    ["M&M's", "150g", 4],
    ["soda", "25cl", 2.5],
    ["soda", "50cl", 4],
    ["evian", "25cl", 1.8],
    ["evian", "50cl", 2.5],
];

$salles = ["athena", "dyonisos", "poseidon", "zeus", "hades"];

$films = [
    [
        "titre" => "despicable me",
        "image" => "despicable_me.jpg",
        "horaires" => [
            "10:00-12:00" => true,
            "12:00-14:00" => true,
            "14:00-16:00" => false,
            "16:00-18:00" => true,
            "18:00-20:00" => false,
            "20:00-22:00" => false,
            "22:00-0:00" => true,
        ],
        "salle" => 0,
    ],
    [
        "titre" => "l'exorciste",
        "image" => "l_exorciste.jpg",
        "horaires" => [
            "10:00-12:00" => true,
            "12:00-14:00" => true,
            "14:00-16:00" => false,
            "16:00-18:00" => true,
            "18:00-20:00" => true,
            "20:00-22:00" => false,
            "22:00-0:00" => true,
        ],
        "salle" => 1,
    ],
    [
        "titre" => "le roi lion",
        "image" => "le_roi_lion.jpg",
        "horaires" => [
            "10:00-12:00" => false,
            "12:00-14:00" => true,
            "14:00-16:00" => false,
            "16:00-18:00" => true,
            "18:00-20:00" => true,
            "20:00-22:00" => false,
            "22:00-0:00" => false,
        ],
        "salle" => 2,
    ],
    [
        "titre" => "retour vers le futur",
        "image" => "retour_vers_le_futur.jpg",
        "horaires" => [
            "10:00-12:00" => true,
            "12:00-14:00" => true,
            "14:00-16:00" => false,
            "16:00-18:00" => true,
            "18:00-20:00" => true,
            "20:00-22:00" => false,
            "22:00-0:00" => false,
        ],
        "salle" => 3,
    ],
    [
        "titre" => "titanic",
        "image" => "titanic.jpg",
        "horaires" => [
            "10:00-12:00" => false,
            "12:00-14:00" => false,
            "14:00-16:00" => true,
            "16:00-18:00" => false,
            "18:00-20:00" => false,
            "20:00-22:00" => true,
            "22:00-0:00" => false,
        ],
        "salle" => 4,
    ],
];
