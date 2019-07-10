<?php

namespace App\Http\Controllers;

use Yaml;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected $enqueteItems = [];

    public function __construct()
    {
        $this->enqueteItems = Yaml::parse(file_get_contents(config_path('enquete.yaml')));
    }
}
