<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\NguoiChoiModel;
class ForgotPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $b;

    public function __construct(NguoiChoiModel $nguoichoi)
    {
       $this->b = $nguoichoi;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.forgot-mail')
                    ->text('email.forgot-mail-plain')
                    ->with([
                      'ten'=>$this->b->ten_dang_nhap,
                       'mat_khau'=>$this->b->mat_khau,
                    ]);
                    // ->attach(public_path('/img').'/abc.jpg',[
                    //     'as'=>'demo.jpg',
                    //     'mime'=>'image/jpeg',
                    // ]);

    }
}
