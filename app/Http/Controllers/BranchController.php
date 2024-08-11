<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::all();
        return response()->json($branches);
    }

    public function show($id)
    {
        $branch = Branch::find($id);
        if ($branch) {
            return response()->json($branch);
        }
        return response()->json(['message' => 'Branch not found'], Response::HTTP_NOT_FOUND);
    }

    public function store(Request $request)
    {
        $branch = Branch::create($request->all());
        return response()->json($branch, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $branch = Branch::find($id);
        if ($branch) {
            $branch->update($request->all());
            return response()->json($branch);
        }
        return response()->json(['message' => 'Branch not found'], Response::HTTP_NOT_FOUND);
    }

    public function destroy($id)
    {
        $branch = Branch::find($id);
        if ($branch) {
            $branch->delete();
            return response()->json(['message' => 'Branch deleted']);
        }
        return response()->json(['message' => 'Branch not found'], Response::HTTP_NOT_FOUND);
    }
}
