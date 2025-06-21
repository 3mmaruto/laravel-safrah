<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Governorate;

class GovernorateController extends Controller
{
    public function index()
    {
        $governorates = Governorate::all(); // جيب كل المحافظات
        return response()->json($governorates, 200, [], JSON_UNESCAPED_UNICODE); // رجعهم بصيغة JSON بدون ترميز Unicode
    }
    //
}
