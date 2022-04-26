@extends('dashboard.layouts.main')

@section('container')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Employee Table</h4>
                        <div class="table-responsive">
                        <a href="/dashboard/employees/create" class="btn btn-primary btn-icon-text">
                        <i class="ti-file btn-icon-prepend"></i>    
                        Create new Employee</a>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($employees as $employee)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->phone }}</td>
                                        <td>{{ $employee->category->name}}</td>
                                        <td>
                                        <a href="/dashboard/employees/{{ $employee->id }}" type="button" class="btn btn-outline-secondary btn-sm">show</a>
                                        <a href="/dashboard/employees/{{ $employee->id }}/edit" type="button" class="btn btn-outline-secondary btn-sm">edit</a>
                                            <form action="/dashboard/employees/{{ $employee->id }}" method="post"
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
