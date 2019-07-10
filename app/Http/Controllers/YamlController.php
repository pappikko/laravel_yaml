<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Yaml\Yaml;
use App\Http\Controllers\Controller;

class YamlController extends Controller
{
    private $yamlArr = [];

    public function setYamlArr()
    {
        $this->yamlArr = Yaml::parse(file_get_contents(\config_path('enquete.yaml')));
        dd($this->yamlArr);
    }
}
