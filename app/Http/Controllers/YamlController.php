<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yaml;
use App\Http\Controllers\BaseController;

class YamlController extends BaseController
{

    public function index()
    {
        $enqueteItems = $this->enqueteItems;
        return view('enquete', compact('enqueteItems'));
    }

    public function checkYamlItems()
    {
        dd($this->enqueteItems);
    }
}
