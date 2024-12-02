<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $orderDetails;
    public $thu_nghiem;
    public function __construct($orderDetails,$thu_nghiem)
    {
        $this->orderDetails = $orderDetails;
        $this->thu_nghiem = $thu_nghiem;
    }

    public function build()
    {
        return $this->subject('Xác nhận đơn hàng')
                    ->view('emails.order_confirmation')
                    ->with([
                        'orderDetails' => $this->orderDetails,
                        'thu_nghiem' => $this->thu_nghiem, // Truyền thu_nghiem vào view
                    ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Order Confirmation',
        );
    }

    /**
     * Get the message content definition.
     */


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
