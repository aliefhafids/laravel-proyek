@extends('dashboard.layouts.mainemployee')

@section('container')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="calendar">
                            <div class="calendar-header">
                                <span class="month-picker" id="month-picker">February</span>
                                <div class="year-picker">
                                    <span class="year-change" id="prev-year">
                                        <pre><</pre>
                                    </span>
                                    <span id="year">2021</span>
                                    <span class="year-change" id="next-year">
                                        <pre>></pre>
                                    </span>
                                </div>
                            </div>
                            <div class="calendar-body">
                                <div class="calendar-week-day">
                                    <div>Sun</div>
                                    <div>Mon</div>
                                    <div>Tue</div>
                                    <div>Wed</div>
                                    <div>Thu</div>
                                    <div>Fri</div>
                                    <div>Sat</div>
                                </div>
                                <div class="calendar-days"></div>
                            </div>
                            <div class="month-list"></div>
                        </div>
                    </div>
                </div>
                @if(auth()->user()->level=="admin")
                <div class="col-md-9 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create Schedule</h4>
                            <p class="card-description">Add new schedule based on calendar</code></p>
                            <a href="/dashboard/schedules/create" type="button"
                                class="btn btn-info btn-lg btn-block">Add Schedule</a>
                        </div>
                    </div>
                </div>
                @endif

                @if(auth()->user()->level=="pegawai")
                <div class="col grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Schedule Table</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Bus</th>
                                            <th>Destination</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($schedules as $schedule)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $schedule->employee->name }}</td>
                                            <td>{{ $schedule->vehicle->name }}</td>
                                            <td>{{ $schedule->destination }}</td>
                                            <td><div class="badge badge-warning">{{ $schedule->date }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
@endsection
