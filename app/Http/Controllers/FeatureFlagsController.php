<?php

namespace App\Http\Controllers;

use App\Features\AdminUsersFeature;
use Illuminate\Http\Request;
use Laravel\Pennant\Feature;

class FeatureFlagsController extends Controller
{
    public function __invoke(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        if (Feature::active(AdminUsersFeature::class)) {
            return view('admin-users');
        }

        return view('regular-users');
    }
}
