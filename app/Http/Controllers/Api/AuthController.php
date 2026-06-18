<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function __construct(private readonly AuthService $authService)
    {
        
    }

    public function register(RegisterRequest $request):JsonResponse
    {
        return response()->json([
            'message' => 'Register Endpoints Works'
        ]);
    }




}
