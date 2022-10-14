<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcs extends Controller
{
    public function result($value1, $operator, $value2)
    {

        switch ($operator) {
            case 'addition':
                $result = $value1 + $value2;
                break;
            case 'substraction':
                $result = $value1 - $value2;
                break;
            case 'multiplication':
                $result = $value1 * $value2;
                break;
            case 'divition':
                $result = $value1 / $value2;
                break;
        }
        return view('message.result', ['result' => $result]);
    }
}
