<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UniqueNameService;
use App\Models\Board;
use App\Models\Device;
use App\Models\User;
use App\Models\BoardType;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boards = Board::with('schEng', 'pcbEng')->get();

        return view('boards.index', compact('boards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $devices = Device::all();

        $engineers = User::all();

        $boardTypes = BoardType::all();
        
        return view('boards.create', compact('devices', 'engineers', 'boardTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $board = Board::create([
            'sch_eng' => $request->sch_eng, 
            'pcb_eng' => $request->pcb_eng,
            'name' => UniqueNameService::getUniqueName($request),
            'board_type_id' => $request->board_type_id,
            'hardware' => $request->hardware,
            'software' => $request->software,
        ]);

        $board->devices()->attach($request->device);

        return redirect()->route('boards.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Board $board)
    {
        return view('boards.show', compact('board'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {
        $board->load('devices', 'type', 'schEng', 'pcbEng');
        
        $devices = Device::all();

        $engineers = User::all();

        $boardTypes = BoardType::all();
        
        return view('boards.edit', compact('board', 'devices', 'engineers', 'boardTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Board $board)
    {
        $board->update([
            'sch_eng' => $request->sch_eng, 
            'pcb_eng' => $request->pcb_eng,
            'name' => UniqueNameService::updateUniqueName($request, $board->load('type')),
            'board_type_id' => $request->board_type_id,
            'hardware' => $request->hardware,
            'software' => $request->software,
        ]);

        $board->devices()->sync($request->device);

        return redirect()->route('boards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
    {
        $board->delete();

        return redirect()->route('boards.index');
    }
}
