<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Jiny\Table\Http\Controllers\ResourceController;
class AdminModuleController extends ResourceController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);
    }


}
