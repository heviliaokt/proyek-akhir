<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $name = "Hevilia Oktaviani";

    public function index() {
        return $this->name;
    }

    public function show($param) {
        // Merubah Atrribute name
        $this->name = $param;
        return $this->name;
    }
}
