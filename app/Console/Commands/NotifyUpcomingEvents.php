<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Event;
use Illuminate\Support\Facades\Log;
class NotifyUpcomingEvents extends Command
{
    protected $signature = 'notify:events';
    protected $description = 'Thông báo các sự kiện sắp tới';

    public function handle()
    {
        $upcomingEvents = Event::where('start_date', '<=', now()->addDay())
                               ->where('start_date', '>=', now())
                               ->get();

        foreach ($upcomingEvents as $event) {
            Log::info("Sự kiện sắp tới: {$event->title} vào {$event->start_date}");
            // Thêm logic gửi email, thông báo hệ thống, v.v.
        }

        return Command::SUCCESS;
    }
}
