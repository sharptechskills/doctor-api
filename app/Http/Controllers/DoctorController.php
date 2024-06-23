<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Resources\DoctorResource;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return DoctorResource::collection(Doctor::all());
    }

    public function store(Request $request)
    {
        $doctor = Doctor::create($request->all());
        return new DoctorResource($doctor);
    }

    public function show(Doctor $doctor)
    {
        return new DoctorResource($doctor);
    }

    public function update(Request $request, Doctor $doctor)
    {
        $doctor->update($request->all());
        return new DoctorResource($doctor);
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return response(null, 204);
    }
}
