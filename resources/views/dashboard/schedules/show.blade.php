@extends('dashboard.layouts.main')

@section('container')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Details Schedule</h4>
                        <p class="card-description">
                            Information about Schedule
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <address class="text">
                                    <p class="font-weight-bold">
                                        Employee
                                    </p>
                                    <p class="mb-2">
                                        {{ $schedule->employee->name }}
                                    </p>
                                    <p class="font-weight-bold">
                                        Vehicle
                                    </p>
                                    <p class="mb-2">
                                        {{ $schedule->vehicle->name }}
                                    </p>
                                </address>
                            </div>
                            <div class="col-md-6">
                                <address>
                                    <h1 class="font-weight-bold">{{ $schedule->destination }}</h1>
                                    <p>
                                        {{ $schedule->date }}
                                    </p>
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <a href="/dashboard/schedules/" type="button" class="btn btn-warning btn-rounded btn-fw">
                                <i class="ti-arrow-left btn-icon-prepend"></i>
                                Back</a>
                        </div>
                        <!-- <div class="card-body">
                            <a href="/dashboard/schedules/" type="button" class="btn btn-info btn-rounded btn-fw">
                                <i class="ti-printer btn-icon-prepend"></i>
                                Print</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
