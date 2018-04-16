<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Rejected extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $name;
    protected $reject;
    protected $messageInput;
    protected $mailCategory;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $reject, $messageInput, $mailCategory)
    {
        $this->name = $name;
        $this->reject = $reject;
        $this->messageInput = $messageInput;
        $this->mailCategory = $mailCategory;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $whatToDo = '';
        if ($this->mailCategory === 'user'){
            $whatToDo = 'ONLY IF DIRECTED TO DO SO: Please make any adjusted changes through the "Account Settings tab" in the upper right corner underneath your name, then click the request access button you desire to obtain and click save to have yourself reviewed again.';
        }
        if ($this->mailCategory === 'course'){
            $whatToDo = 'Please go to the "My Content tab" and click the update button for '. $this->reject . ' then make the adjusted changes and click the update button to have the course reviewed again.';
        }
        if ($this->mailCategory === 'lesson'){
            $whatToDo = 'Please go to the "My Content tab" and click the update button for '. $this->reject . ' then make the adjusted changes and click the update button to have the file reviewed again.';
        }
        return $this->view('emails.user.reject')->with([
            'name' => $this->name,
            'messageInput' => $this->messageInput,
            'type' => $this->reject,
            'whatToDo' => $whatToDo,
        ]);
    }
}
