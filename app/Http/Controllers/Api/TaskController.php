<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::orderBy(
            'created_at',
            'desc'
        )->get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar data task',
            'data' => $tasks
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        // Cek jika validasi gagal
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        // Buat task baru menggunakan Eloquent
        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Task berhasil dibuat',
            'data' => $task
        ], 201); // 201 Created
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return response()->json([
            'success'
            => true,
            'message'
            => 'Detail data task',
            'data'
            => $task
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'is_done' => 'sometimes|boolean'
        ]);
        // Cek jika validasi gagal
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        // Update task
        $task->update($request->all());
        // Kembalikan respons sukses
        return response()->json([
            'success' => true,
            'message' => 'Task berhasil diperbarui',
            'data' => $task
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        // Hapus task
        $task->delete();
        // Kembalikan respons sukses
        return response()->json([
            'success' => true,
            'message' => 'Task berhasil dihapus'
        ]);
    }
}