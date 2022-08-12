<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Modules\Dashboard\Http\Controllers\DashboardController;
class AdminDashboardController extends DashboardController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);
    }


    public function index(Request $request)
    {
        $this->setViewMain("admin::index");
        return parent::index($request);
    }


    public function permit()
    {
        // permit 화면 갱신시
        // 권환을 다시 검사하여 admin 페이지로 리다이렉트
        $user = Auth::user();
        if($user) {
            $myUser = DB::table('users')->where('email', $user->email)->first();
            if($myUser) {
                if($myUser->isAdmin && $myUser->utype == "SUPER") {
                    $prefix = admin_prefix();
                    return redirect($prefix);
                }
            }
        }

        // 권환 없음 페이지 출력
        return view('admin::permit');
    }


}
