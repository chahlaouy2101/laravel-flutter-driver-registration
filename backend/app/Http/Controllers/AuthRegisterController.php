<?php
namespace App\Http\Controllers;

use App\Http\Requests\GeneralInfoRequest;
use App\Models\User;
use Illuminate\Http\Response;

class AuthRegisterController extends Controller
{
    public function register(GeneralInfoRequest $request)
    {
        $user = User::create($request->validated());
        return response()->json($user, Response::HTTP_CREATED);
    }
}