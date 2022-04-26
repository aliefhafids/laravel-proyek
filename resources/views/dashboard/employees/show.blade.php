@extends('dashboard.layouts.main')

@section('container')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Employee</h4>
                        <p class="card-description">
                            More information about specific employee
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <p class="font-weight-bold">{{ $employee->name }}</p>
                                    <p>
                                        {{ $employee->address }}
                                    </p>
                                </address>
                            </div>
                            <div class="col-md-6">
                                <address class="text-info">
                                    <p class="font-weight-bold">
                                        Status
                                    </p>
                                    <p class="mb-2">
                                        {{ $employee->category->name }}
                                    </p>
                                    <p class="font-weight-bold">
                                        Phone
                                    </p>
                                    <p class="mb-2">
                                        {{ $employee->phone }}
                                    </p>
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Information</h4>
                        <p class="lead">
                           Data dibuat pada {{ $employee->created_at }}
                        </p>
                    </div>
                    <div class="card-body">
                        <a href="/dashboard/employees/" type="button" class="btn btn-warning btn-rounded btn-fw">
                        <i class="ti-arrow-left btn-icon-prepend"></i>
                        Back</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection
