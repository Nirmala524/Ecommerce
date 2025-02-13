<?php

namespace App\Http\Controllers;

use App\Models\CustomLogin;
use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function index()
  {
    return response()->json(['message' => 'success'], 200);
  }
}
