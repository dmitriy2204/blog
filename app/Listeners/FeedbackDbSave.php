<?php

namespace App\Listeners;

use App\Models\Message;
use App\Events\FeedbackWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class FeedbackDbSave
{
    public function handle(FeedbackWasCreated $event)
    {
        $data = $event->getInputData();
        Message::create($data);
    }
}
