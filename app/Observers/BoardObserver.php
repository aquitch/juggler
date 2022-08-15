<?php

namespace App\Observers;

use App\Models\Board;

class BoardObserver
{
    /**
     * Handle the Board "created" event.
     *
     * @param  \App\Models\Board  $board
     * @return void
     */
    public function created(Board $board)
    {
        //
    }

    /**
     * Handle the Board "updated" event.
     *
     * @param  \App\Models\Board  $board
     * @return void
     */
    public function updated(Board $board)
    {
        //
    }

    /**
     * Handle the Board "deleted" event.
     *
     * @param  \App\Models\Board  $board
     * @return void
     */
    public function deleted(Board $board)
    {
        $board->devices()->sync([]);
    }

    /**
     * Handle the Board "restored" event.
     *
     * @param  \App\Models\Board  $board
     * @return void
     */
    public function restored(Board $board)
    {
        //
    }

    /**
     * Handle the Board "force deleted" event.
     *
     * @param  \App\Models\Board  $board
     * @return void
     */
    public function forceDeleted(Board $board)
    {
        //
    }
}
