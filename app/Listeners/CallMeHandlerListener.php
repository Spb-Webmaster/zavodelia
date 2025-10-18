<?php

namespace App\Listeners;

use App\Events\AdminCreateUserEvent;
use App\Events\CallMeEvent;
use App\Mail\CallMe\CallMeMail;
use App\Mail\SendMails;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Support\Traits\CreatorToken;
use Support\Traits\EmailAddressCollector;

class CallMeHandlerListener
{
    use EmailAddressCollector;
    use CreatorToken;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     * сообщение user, о том, что его зарегистрировали
     */
    public function handle(CallMeEvent $event): void
    {

        $data['phone'] = $event->request->phone;
        $data['name'] = $event->request->name;
        $data['url'] = $event->request->url;

        Mail::to($this->emails())->send(new CallMeMail($data));

    }
}
