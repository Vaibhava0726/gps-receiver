<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GpsReceiver;
use Illuminate\Http\Request;

class GpsReceiverController extends Controller
{
    public function receive(Request $request)
    {
        $data = $request->all();

        if (! isset($data['key']) || ! isset($data['value'])) {
            return response()->json([
                'message' => 'Required: "key" or "value" Property missing',
            ], 422);
        }

        GpsReceiver::create([
            'key'   => $data['key'],
            'value' => $data['value'],
        ]);

        return response()->json([
            'message' => 'Alarm data stored successfully.',
        ]);
    }
}
