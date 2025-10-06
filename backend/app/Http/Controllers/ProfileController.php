<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function updateGeneral($id, GeneralInfoRequest $request)
    {
        $user = User::findOrFail($id);
        $user->update($request->validated());
        return response()->json($user);
    }

    public function updateCar($id, CarInfoRequest $request)
    {
        // Logic to update car
    }

    public function updateDocuments($id, DocumentsRequest $request)
    {
        // Logic to update documents
    }
}