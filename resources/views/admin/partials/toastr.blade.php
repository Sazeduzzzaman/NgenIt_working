@php

    $resulNotify = [];
    $presentDate = date('Y-m-d');
    $createDateNotificationDays = App\Models\Admin\Product::all('create_date', 'notification_days');
    foreach ($createDateNotificationDays as $createDateNotificationDay) {
        $value = date('Y-m-d', strtotime($createDateNotificationDay->create_date . ' + ' . $createDateNotificationDay->notification_days . ' days'));
        if ($value <= $presentDate) {
            $notification = 1;
        } else {
            $notification = 0;
        }
        $resulNotify[] = $notification;
    }
@endphp


@if (in_array(1, $resulNotify))
    <div class="alert alert-primary alert-icon-start alert-dismissible text-truncate rounded-pill fade show mt-3 mx-3">

        <span class="alert-icon bg-primary text-white rounded-pill">
            <i class="ph-bell-ringing"></i>
        </span>
        <span class="fw-semibold">Morning!</span> We're glad to <a href="{{ route('toastr.index') }}"
            class="alert-link">Click Here</a> and
        wish
        you a nice day.
        <button type="button" class="btn-close rounded-pill" data-bs-dismiss="alert"></button>
    </div>
@endif
