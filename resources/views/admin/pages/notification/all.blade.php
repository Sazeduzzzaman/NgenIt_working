@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Notification Management</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->

        <div class="content">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-lg-9">
                            <h4 class="text-center mb-0">All Notification</h4>
                        </div>
                        <div class="col-lg-3">
                            <a href="{{ route('notification.create') }}" type="button"
                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end mx-2">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-plus2"></i>
                                </span>
                                Add New
                            </a>
                            <button class="btn btn-sm btn-flat-danger" id="delete-selected-records"
                                multiDeleteLinkUrl="{{ route('notifiy.multi-delete') }}"> Delete Selected Items</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table id="notificationTable" class="datatable table table-bordered table-hover notificationDT">
                                <thead>
                                    <tr>
                                        <th width="5%"><input id="select-all-checkbox" type="checkbox"
                                                class="form-check-input"></th>
                                        {{-- <th>Sl No:</th>
                                        <th>Notifiable Id</th> --}}
                                        <th>Name</th>
                                        <th>Message</th>
                                        <th>Created Time</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($notifications)
                                        @foreach ($notifications as $key => $notification)
                                            @php
                                                $notificationObject = json_decode($notification->data, true);
                                                // $notificationObject = cache()->remember("notification.{$notification->id}", now()->addHour(), function () use ($notification) {
                                                //     return json_decode($notification->data, true);
                                                // });
                                                //dd($notificationObject['link']);
                                            @endphp
                                            <tr>
                                                <td><input type="checkbox" name="id[]"
                                                        class="form-check-input"
                                                        value="{{ $notification->id }}" />
                                                </td>
                                                {{-- <td>{{ ++$key }}</td>
                                                <td>{{ $notification->notifiable_id }}</td> --}}
                                                <td>{{ $notificationObject['name'] }}</td>
                                                <td>
                                                    @if (isset($notificationObject['message1']))
                                                        @if (!empty($notification->read_at))
                                                            <span>
                                                                {{ $notificationObject['name'] }} {{ $notificationObject['message1'] }}
                                                                <a href="{{ $notificationObject['link'] }}" data-id="{{ $notification->id }}"
                                                                    class="fw-semibold mark-as-read">
                                                                    {{ $notificationObject['message2'] }}
                                                            </span>
                                                        @else

                                                            <span class="text-danger">
                                                                {{ $notificationObject['name'] }} {{ $notificationObject['message1'] }}
                                                                <a href="{{ $notificationObject['link'] }}" data-id="{{ $notification->id }}"
                                                                    class="fw-semibold mark-as-read">
                                                                    {{ $notificationObject['message2'] }}
                                                            </span>

                                                        @endif
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('notification.edit', [$notification->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('notification.destroy', [$notification->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /content area -->
    <!-- /inner content -->
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        $('.notificationDT').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 10,
            "lengthMenu": [10, 26, 30, 50],
            columnDefs: [{
                orderable: false,
                targets: [0, 4],
            }, ],
        });

        const selectAllCheckbox = $('#select-all-checkbox');
        const tableBody = $('#notificationTable tbody');

        // Instead of selecting all the checkboxes again and again, we can cache them and reuse the selection.
        const allCheckboxes = $('input[type="checkbox"]');

        // Simplify click event handler since we already have cached all checkboxes.
        selectAllCheckbox.on('click', function() {
            allCheckboxes.prop('checked', this.checked);
        });

        // Change to document instead of table body to simplify the code & reduce operations.
        $(document).on('change', 'input[type="checkbox"]', function() {
            if (this.checked) {
                // Check if all checkboxes are checked or not, update selectAllCheckbox accordingly.
                if (allCheckboxes.not(':checked').length === 0) {
                    selectAllCheckbox.prop('checked', true);
                } else {
                    selectAllCheckbox.prop('checked', false);
                }
            } else {
                // If any checkbox is unchecked, uncheck selectAllCheckbox.
                selectAllCheckbox.prop('checked', false);
            }

            // check if any checkbox is unchecked after checking selectAllCheckbox and set indeterminate state accordingly.
            if (!this.checked && selectAllCheckbox.prop('checked') && ('indeterminate' in selectAllCheckbox[0])) {
                selectAllCheckbox.prop('indeterminate', true);
            }
        });

        $('#delete-selected-records').on('click', function() {
            const id = [];
            $('input[name="id[]"]:checked').each(function() {
                id.push($(this).val());
            });
            if (id.length > 0) {
                const url = "{{ route('notifiy.multi-delete') }}";
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'id': id
                    },
                    success: function(data) {
                        swalInit.fire({
                            title: "Deleted!",
                            text: "This data has been deleted!",
                            confirmButtonColor: "#66BB6A",
                            icon: "success",
                            type: "success",
                            preConfirm: function() {
                                location.reload();
                            },
                        });
                    },
                    error: function() {
                        swalInit.fire({
                            title: "Error",
                            icon: 'error',
                            text: "Please refresh your form & try again",
                            icon: "error",
                            allowEscapeKey: false,
                            allowEnterKey: false,
                        });
                    },
                });
            } else {
                swalInit.fire({
                    icon: 'warning',
                    title: "Oops...",
                    text: "Please select at least one record to delete.",
                    confirmButtonColor: "#66BB6A",
                    timer: 150000
                })
            }
        });
    </script>
@endpush
