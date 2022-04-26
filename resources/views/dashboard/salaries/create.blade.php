@extends('dashboard.layouts.main')

@section('container')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="/dashboard/salaries" class="mb-5" enctype="multipart/form-data">
                            <h4 class="card-title">Employee form</h4>
                            <form class="forms-sample">
                                @csrf
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
                                    <label for="nominal" class="form-label">nominal</label>
                                    <input type="text" class="form-control @error('nominal') is-invalid @enderror"
                                        id="nominal" name="nominal" required value="{{ old('nominal') }}">
                                    @error('nominal')
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
