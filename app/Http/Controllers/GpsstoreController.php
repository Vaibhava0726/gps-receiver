<?php
namespace App\Http\Controllers;

use App\Models\gpsxcode;
use Illuminate\Http\Request;

class GpsstoreController extends Controller
{
    public function store(Request $request)
    {

        $xcode = trim($request->getContent());

        if (empty($xcode)) {
            return response()->json([
                'message' => 'No GPS data received'],
            );
        }
        gpsxcode::create([
            'xcode' => $xcode,
            '_meta' => [
                'received_at' => now(),
                'length'      => strlen($xcode),
            ],
        ]);

        return response()->json([
            'message' => 'GPS xcode stored successfully',
            'xcode'   => $xcode,
        ]);
    }
}
