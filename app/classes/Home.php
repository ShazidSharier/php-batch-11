<?php

namespace App\classes;
use App\classes\Trainnig;
class Home
{
    public $message, $trainnig, $trainnigs = [];

    public function __construct()
    {
        $this->message = "Hello World";
    }
    public function index()
    {
        $this->trainnig = new Trainnig();
        $this->trainnigs = $this->trainnig->getAllTrainnig();
       return view('home', ['trainnigs' => $this->trainnigs]);
    }
}