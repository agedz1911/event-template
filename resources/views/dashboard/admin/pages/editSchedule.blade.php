@extends('dashboard.dashboardLayout')

@section('title', 'Edit Schedules')

@section('content')
<div class="container-fluid">
    <a href="/dashboard/admin/schedule" class="mt-3 btn btn-secondary">Back</a>
    <div class="row justify-content-center mt-3">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center w-75 mx-auto auth-logo mb-4">
                        <a href="" class="logo-dark">
                            <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22"></span>
                        </a>

                        <a href="" class="logo-light">
                            <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22"></span>
                        </a>
                        <h4 class="mt-4">Edit Schedule</h4>

                    </div>
                    <form class="needs-validation" action="/dashboard/admin/edit_schedule/{{$schedules->id}}"
                        method="post" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label class="form-label" for="date">Date</label>
                            <input class="form-control" type="date" id="date" value="{{$schedules->date}}" name="date"
                                required>
                            <div class="invalid-feedback">
                                please input valid date
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="time">Time</label>
                            <input class="form-control" type="text" id="time" value="{{$schedules->time}}" name="time"
                                required placeholder="Enter Time">

                            <div class="invalid-feedback">
                                please input Time
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="room">Room</label>
                            <input class="form-control" type="text" id="room" name="room" value="{{$schedules->room}}"
                                required placeholder="Enter Room">

                            <div class="invalid-feedback">
                                please input Room
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="title">Session / Title</label>
                            <input class="form-control" type="text" id="title" value="{{$schedules->title}}"
                                name="title" required placeholder="Enter title">

                            <div class="invalid-feedback">
                                please input title
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="faculty_id">Speaker / Moderator</label>
                            <select class="form-select" name="faculty_id" id="faculty_id" required>
                                <option value="{{ $schedules->faculty_id }}">{{ $schedules->faculty->name }}</option>
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
        </div>
    </div>
</div>

@endsection