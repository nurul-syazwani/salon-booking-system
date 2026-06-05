<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Service;

class BookingController extends Controller
{
    public function create($id)
    {
        $service = Service::findOrFail($id);

        $slots = [

            '9:00 AM - 10:00 AM',
            '10:00 AM - 11:00 AM',
            '11:00 AM - 12:00 PM',
            '1:00 PM - 2:00 PM',
            '2:00 PM - 3:00 PM',
            '3:30 PM - 4:30 PM',
            '5:00 PM - 6:00 PM',

        ];

        $selectedDate = request('booking_date');

        $bookedSlots = Booking::where('booking_date', $selectedDate)
            ->where('status', '!=', 'Cancelled')
            ->pluck('time_slot')
            ->toArray();

        return view('bookings.create', compact(
            'service',
            'slots',
            'bookedSlots'
        ));
        
    }

    public function store(Request $request)
{
    $existingBooking = Booking::where('booking_date', $request->booking_date)
        ->where('time_slot', $request->time_slot)
        ->where('status', '!=', 'Cancelled')
        ->exists();

    if ($existingBooking) {

        return back()->with('error', 'This slot is already booked.');

    }

    Booking::create([

        'user_id' => auth()->id(),

        'customer_name' => $request->customer_name,
        'customer_phone' => $request->customer_phone,
        'service_id' => $request->service_id,
        'booking_date' => $request->booking_date,
        'time_slot' => $request->time_slot,
        'status' => 'Pending',

    ]);

    return redirect('/services')
        ->with('success', 'Booking created successfully.');
}

    

    public function index()
    {
        $search = request('search');

        $bookings = Booking::with('service')

            ->when($search, function ($query) use ($search) {

                $query->where('customer_name', 'like', '%' . $search . '%')
                    ->orWhere('customer_phone', 'like', '%' . $search . '%');

            })

            ->latest()

            ->get();

        $totalBookings = Booking::count();
        $pendingBookings = Booking::where('status', 'Pending')->count();
        $approvedBookings = Booking::where('status', 'Approved')->count();
        $cancelledBookings = Booking::where('status', 'Cancelled')->count();

        return view('bookings.index', compact(
            'bookings',
            'totalBookings',
            'pendingBookings',
            'approvedBookings',
            'cancelledBookings'
        ));
    }
    public function approve($id)
    {
        $booking = Booking::findOrFail($id);

        $booking->status = 'Approved';
        $booking->save();

        return redirect('/bookings');
    }

    public function cancel($id)
    {
        $booking = Booking::findOrFail($id);

        $booking->status = 'Cancelled';
        $booking->save();

        return redirect('/bookings');
    }
}
