<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Http\Requests\DeviceRequest;
use Illuminate\Support\Facades\Storage;
use File;

class LibraryService
{
    public static function saveLibrary(Request $request)
    {        
        $extension = strtolower($request->library->getClientOriginalExtension());

        if ($extension == 'schlib') {
            Storage::disk('libs')->putFileAs('sch', $request->file('library'), $request->library->getClientOriginalName());
            $url = Storage::disk('libs')->url('/datasheets/' . $request->library->getClientOriginalName());
        } elseif ($extension == 'pcblib') {
            Storage::disk('libs')->putFileAs('pcb', $request->file('library'), $request->library->getClientOriginalName());
            $url = Storage::disk('libs')->url('/datasheets/' . $request->library->getClientOriginalName());
        } else {
            $url = 'Unrecognized format!';
        }

        return $url;
    }

    public static function getLibraries()
    {
        $libraries= [
            'sch' => [], 
            'pcb' => []
        ];

        $sch = File::files(Storage::disk('libs')->path('sch'));

        foreach ($sch as $lib) {
            array_push($libraries['sch'], basename($lib));
        }

        $sch = File::files(Storage::disk('libs')->path('pcb'));

        foreach ($sch as $lib) {
            array_push($libraries['pcb'], basename($lib));
        }

        return $libraries;
    }

    public static function saveDatasheet(DeviceRequest $request)
    {
        Storage::disk('libs')->putFileAs('datasheets', $request->file('datasheet'), $request->datasheet->getClientOriginalName());
        return Storage::disk('libs')->url('/datasheets/' . $request->datasheet->getClientOriginalName());
    }
}
