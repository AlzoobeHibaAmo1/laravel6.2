@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @forelse($notifications as $notification)
                <li>
                    @if($notification->type === 'App\Notifications\PaymentsReceived')
                        we recived a payment from you
                    @endif
                </li>
            @empty
                <li>you have no unread notifications</li>
                @endforelse
        </ul>
    </div>
@endsection
