<?php

namespace App\Providers;

use App\Models\User;
use App\Notifications\ViewPost;
use App\Providers\ViewedPostEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

class PostViewedListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }
    use InteractsWithQueue;

    /**
     * Handle the event.
     */
    public function handle(ViewedPostEvent $event): void
    {
        $postAuthor = User::find($event->post->user_id);
        if ($postAuthor->id !== Auth::id()){
            $postAuthor->notify(new ViewPost($event->viewer, $event->post));
        }
    }
}
