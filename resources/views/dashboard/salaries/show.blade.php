@extends('dashboard.layouts.main')

@section('container')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Salary</h4>
                        <p class="card-description">
                            More information about Salary
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <address class="text">
                                    <p class="font-weight-bold">
                                        Employee
                                    </p>
                                    <p class="mb-4">
                                        {{ $salary->employee->name }}
                                    </p>
                                    <h4 class="font-weight-bold">
                                        {{$salary->employee->category->name}}
                                    </h4>
                                </address>
                            </div>
                            <div class="col-md-6">
                                <address>
                                <p class="font-weight-bold">
                                        Nominal
                                    </p>
                                    <h1 class="font-weight-bold">{{ $salary->nominal }}</h1>
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <a href="/dashboard/salaries/" type="button" class="btn btn-warning btn-rounded btn-fw">
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