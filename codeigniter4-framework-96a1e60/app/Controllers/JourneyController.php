<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Journey;
use CodeIgniter\HTTP\ResponseInterface;

class JourneyController extends BaseController
{
    public function listjourney()
    {
        $list = new Journey();
        $data ['list_journey'] = $list->findAll();
        
        return view('project/list',$data);
    }
}
