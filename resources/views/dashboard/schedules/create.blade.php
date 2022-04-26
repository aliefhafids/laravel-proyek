@extends('dashboard.layouts.main')

@section('container')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="/dashboard/schedules" class="mb-5" enctype="multipart/form-data">
                            <h4 class="card-title">Schedule form</h4>
                            <form class="forms-sample">
                                @csrf
                                <div class="form-group">
                                    <label for="vehicle" class="form-label">Vehicle</label>
                                    <select class="form-select" name="vehicle_id">
                                        @foreach ($vehicles as $vehicle)
                                        @if(old('vehicle_id') == $vehicle->id)
                                        <option value="{{ $vehicle->id }}" selected>{{ $vehicle->name }}</option>
                                        @else
                                        <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="employee" class="form-label">Employee</label>
                                    <select class="form-select" name="employee_id">
                                        @foreach ($employees as $employee)
                                        @if(old('employee_id') == $employee->id)
                                        <option value="{{ $employee->id }}" selected>{{ $employee->name }}</option>
                                        @else
                                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="destination" class="form-label">Destination</label>
                                    <input type="text" class="form-control @error('destination') is-invalid @enderror"
                                        id="destination" name="destination" required value="{{ old('destination') }}">
                                    @error('destination')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="date" class="form-label">date</label>
                                    <input type="date" class="form-control @error('date') is-invalid @enderror"
                                        id="date" name="date" required value="{{ old('date') }}">
                                    @error('date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
