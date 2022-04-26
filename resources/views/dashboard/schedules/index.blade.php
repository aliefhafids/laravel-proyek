@extends('dashboard.layouts.main')

@section('container')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Schedule Table</h4>
                        <div class="table-responsive">
                        <a href="/dashboard/schedules/create" class="btn btn-primary btn-icon-text">
                        <i class="ti-file btn-icon-prepend"></i>    
                        New Schedule</a>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Bus</th>
                                        <th>Destination</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($schedules as $schedule)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $schedule->employee->name }}</td>
                                        <td>{{ $schedule->vehicle->name }}</td>
                                        <td>{{ $schedule->destination }}</td>
                                        <td>{{ $schedule->date }}</td>
                                        <td>
                                        <a href="/dashboard/schedules/{{ $schedule->id }}" type="button" class="btn btn-outline-secondary btn-sm">show</a>
                                            <form action="/dashboard/schedules/{{ $schedule->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-outline-secondary btn-sm"
                                                    onclick="return confirm('Are you sure?')">delete<span
                                                        data-feather="x-circle"></span></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
