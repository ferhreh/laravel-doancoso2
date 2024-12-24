<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
       // Lấy danh sách sự kiện
       public function index()
       {
        $events = Event::all()->map(function ($event) {
            return [
                'id' => $event->id,
                'title' => $event->title,
                'start' => $event->start_date->format('Y-m-d\TH:i:s'),
                'end' => $event->end_date ? $event->end_date->format('Y-m-d\TH:i:s') : null,
            ];
        });
    
        return response()->json($events);
       }
   
       // Thêm sự kiện mới
       public function store(Request $request)
       {
                   // Validate dữ liệu
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        // Tạo sự kiện
        $event = Event::create($validatedData);

        return response()->json($event, 201); // Trả về mã 201 (Created)
       }
       public function getEvents()
{
    // Lấy tất cả sự kiện từ cơ sở dữ liệu
    $events = Event::all();

    // Chuyển đổi sự kiện thành định dạng phù hợp cho FullCalendar
    $data = $events->map(function ($event) {
        return [
            'title' => $event->title,
            'start' => $event->start_date, // Giả sử bạn có trường start_date trong bảng events
            'end' => $event->end_date, // Nếu có trường end_date
        ];
    });

    return response()->json($data);
}
}
