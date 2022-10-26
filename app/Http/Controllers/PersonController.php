<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $code = "2000914009";
    private $name = "Hevilia Oktaviani";

    public function index() {
        return view("person.index");
    }

    public function sendData() {
        // Merubah Atrribute name
        $code = $this->code;
        $name = $this->name;

        return view("person.sendData", compact('code', 'name'));
    }

    public function data() {
        $names = ["ana", "banu", "cecep", "dadang", "entis"];

        return view("person.data", ['names' => $names]);
    }
}
