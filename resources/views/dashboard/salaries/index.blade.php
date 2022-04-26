@extends('dashboard.layouts.main')

@section('container')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Salary Table</h4>
                        <div class="table-responsive">
                        <a href="/dashboard/salaries/create" class="btn btn-primary btn-icon-text">
                        <i class="ti-file btn-icon-prepend"></i>    
                        New Salary</a>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Nominal</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($salaries as $salary)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $salary->employee->name }}</td>
                                        <td>{{ $salary->nominal }}</td>
                                        <td>{{ $salary->date}}</td>
                                        <td>
                                        <a href="/dashboard/salaries/{{ $salary->id }}" type="button" class="btn btn-outline-secondary btn-sm">show</a>
                                            <form action="/dashboard/salaries/{{ $salary->id }}" method="post"
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
