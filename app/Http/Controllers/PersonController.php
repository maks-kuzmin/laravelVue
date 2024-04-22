<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
                [
                    'id' => 1,
                    'name' => 'Ivan',
                    'age' => 25,
                    'job' => 'engineer'
                ],
                [
                    'id' => 2,
                    'name' => 'Sergey',
                    'age' => 42,
                    'job' => 'coach'
                ],
                [
                    'id' => 3,
                    'name' => 'Liza',
                    'age' => 17,
                    'job' => 'designer'
                ],
                [
                    'id' => 4,
                    'name' => 'Yasya',
                    'age' => 18,
                    'job' => 'manager'
                ],
                [
                    'id' => 5,
                    'name' => 'Ignat',
                    'age' => 21,
                    'job' => 'seller'
                ]
            ];
        return $persons;
    }
}
