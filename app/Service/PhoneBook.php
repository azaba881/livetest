<?php

namespace App\Service;
use Illuminate\Support\Str;
class PhoneBook
{

    //recherche pour une colonne spécifique
    // public static function searchByName(string $name) : array
    // {
    //     return self::searchBy('nom',$name);
    // }

    // public static function getContact(){
    //     return collect(self::contacts())->all();
    // }

    // public static function searchBy(string $key, string $value) : array
    // {
    //     return collect(self::contacts())
    //                 ->filter(fn($contact)=>str::contains(strtolower($contact[$key]),strtolower($value)))
    //                 ->all();
    // }

    //recherche pour toutes les colonnes en une seule fois

    public static function searchByName(string $name) : array
    {
        return self::searchBy(['nom', 'adresse', 'ville', 'phone', 'age'], strtolower($name));

    }

    public static function searchBy(array $columns, string $value): array
    {
        return collect(self::contacts())
            ->filter(function ($contact) use ($columns, $value) {
                foreach ($columns as $column) {
                    if (str_contains(strtolower($contact[$column]), strtolower($value))) {
                        return true;
                    }
                }
                return false;
            })
            ->all();
    }

    public static function getContact(){
        return collect(self::contacts())->all();
    }




    public static function contacts(): array
    {
        return [
            [
                'nom' => "KPADE Innocent",
                'adresse' => "Godomey",
                'ville' => "Abomey-calavi",
                'phone' => "98787656",
                'age' => 29,
            ],
            [
                'nom' => "KPADE SEBA",
                'adresse' => "AGla",
                'ville' => "COtonou",
                'phone' => "90987867",
                'age' => 16,
            ],
            [
                'nom' => "Abassi Tao",
                'adresse' => "Gbodjé",
                'ville' => "Cocoto",
                'phone' => 90876578,
                'age' => 34,
            ],
            [
                'nom' => "Kanpo blaise",
                'adresse' => "sater",
                'ville' => "djougou",
                'phone' => 90876578,
                'age' => 12,
            ],
            [
                'nom' => "Kanpo blaise",
                'adresse' => "sater",
                'ville' => "djougou",
                'phone' => 90876578,
                'age' => 12,
            ],
            [
                'nom' => "Kanpo blaise",
                'adresse' => "sater",
                'ville' => "djougou",
                'phone' => 90876578,
                'age' => 12,
            ],
            [
                'nom' => "Kanpo blaise",
                'adresse' => "sater",
                'ville' => "djougou",
                'phone' => 90876578,
                'age' => 12,
            ],
            [
                'nom' => "Kanpo blaise",
                'adresse' => "sater",
                'ville' => "djougou",
                'phone' => 90876578,
                'age' => 12,
            ],

        ] ;   
    }




}