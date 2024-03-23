@extends('dashboard.dashboardLayout')

@section('title', 'Schedule')

@section('content')
<div class="py-3 py-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <h4 class="page-title mb-0">Dashboard</h4>
        </div>
        <div class="col-lg-6">
            <div class="d-none d-lg-block">
                <ol class="breadcrumb m-0 float-end">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashtrap</a></li>
                    <li class="breadcrumb-item active">Schedules</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center mt-3">
        <div class="col-lg-11">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <div class="d-flex flex-column gap-2">
                                <h4 class="">Schedule</h4>
                                <form action="" method="get">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="keyword" placeholder="Search">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-2 offset-lg-2 col-12">
                            <div class="d-flex flex-column gap-2">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-data"><i class="fas fa-add"></i> Add Data</button>
                                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#deleted-data">Deleted Data</button>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <table class="table dt-responsive nowrap w-100 ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Day / Date</th>
                                <th>Time</th>
                                <th>Room</th>
                                <th>Session / Title</th>
                                <th>Speakers / Moderator</th>
                                {{-- <th>Image</th> --}}
                                <th>updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($schedules as $schedule)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ \Carbon\Carbon::parse($schedule->date)->format(' j F Y') }}</td>
                                <td>{{ $schedule->time }}</td>
                                <td>{{ $schedule->room }}</td>
                                <td>{{ $schedule->title }}</td>
                                <td>
                                    <div>
                                        {{ $schedule->faculty->name }}
                                        <small>{{ $schedule->faculty->country }}</small>
                                    </div>
                                </td>
                                {{-- <td>
                                    @if ($schedule->faculty->image != null)
                                    <img src="/assets/images/faculty/{{ $schedule->faculty->image }}"
                                alt="{{ $schedule->faculty->image }}" width="80px" class="img-">
                                @else
                                <img src="/assets/images/user.png" alt="{{ $schedule->faculty->name }}" width="80px" class="img-thumbnail">
                                @endif
                                </td> --}}
                                <td>
                                    {{ \Carbon\Carbon::parse($schedule->updated_at)->diffForHumans()}}
                                </td>
                                <td>
                                    <div>
                                        <a href="{{ url('/dashboard/admin/edit_schedule', $schedule->id)}}" class="btn btn-secondary">Edit</a>
                                        <a href="{{ url('/dashboard/admin/delete_schedule', $schedule->id) }}" data-confirm-delete="true" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                        @endforeach

                    </table>
                    {{ $schedules->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!--Modal add Data -->
<div id="add-data" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body p-4">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a href="" class="logo-dark">
                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22"></span>
                            </a>

                            <a href="" class="logo-light">
                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22"></span>
                            </a>
                            <h4 class="mt-4">Add new Schedule</h4>

                        </div>
                        <form class="needs-validation" action="{{ '/dashboard/admin/storeSchedule' }}" method="post" novalidate>
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label" for="date">Date</label>
                                <input class="form-control" type="date" id="date" name="date" required>
                                <div class="invalid-feedback">
                                    please input valid date
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="time">Time</label>
                                <input class="form-control" type="text" id="time" name="time" required placeholder="Enter Time">

                                <div class="invalid-feedback">
                                    please input Time
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="room">Room</label>
                                <input class="form-control" type="text" id="room" name="room" required placeholder="Enter Room">

                                <div class="invalid-feedback">
                                    please input Room
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="title">Session / Title</label>
                                <input class="form-control" type="text" id="title" name="title" required placeholder="Enter title">

                                <div class="invalid-feedback">
                                    please input title
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="faculty_id">Speaker / Moderator</label>
                                <select class="form-select" name="faculty_id" id="faculty_id" required>
                                    <option>Choose Speaker / Moderator</option>
                                    @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                    @endforeach
                                </select>

                                <div class="invalid-feedback">
                                    please Select Speaker / Moderator
                                </div>
                            </div>

                            <div class="form-group mt-5 mb-0 text-center">
                                <button class="btn btn-primary w-100" type="submit"> Submit </button>
                            </div>

                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--Modal deleted Data -->
<div id="deleted-data" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-body p-4">
                <div class="card">
                    <div class="card-body p-4">
                        <table class="table dt-responsive nowrap w-100 ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Day / Date</th>
                                    <th>Time</th>
                                    <th>Session / Title</th>
                                    <th>Speakers / Moderator</th>
                                    <th>Room</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            @foreach ($del_schedules as $de_schedule)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ \Carbon\Carbon::parse($de_schedule->date)->format(' j F Y') }}</td>
                                    <td>{{ $de_schedule->time }}</td>
                                    <td>{{ $de_schedule->title }}</td>

                                    <td>
                                        <div>
                                            {{ $de_schedule->faculty->name }}
                                            <small>{{ $de_schedule->faculty->country }}</small>
                                        </div>
                                    </td>
                                    <td>{{ $de_schedule->room }}</td>
                                    <td>
                                        <div>
                                            <a href="/dashboard/admin/schedule/{{ $de_schedule->id }}/restore" class="btn btn-primary">Restore</a>
                                        </div>

                                </tr>
                            </tbody>
                            @endforeach

                        </table>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->