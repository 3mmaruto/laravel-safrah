<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class SeatController extends Controller
{
    /**
     * Get all seats for a specific trip
     *
     * @param int $tripId
     * @return JsonResponse
     */
    public function getSeatsByTrip($tripId): JsonResponse
    {
        try {
            $trip = Trip::with('seats')->findOrFail($tripId);
            
            return response()->json([
                'status' => 'success',
                'data' => $trip->seats
            ]);
            
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Trip not found'
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while fetching the seats'
            ], 500);
        }
    }
} 