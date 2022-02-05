@extends('layouts.app')

@section('content')
@include('user._create')
    <div class="p-4">
        <h2 class="">User Management</h2>
        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#createModal">
            <i class="fa fa-plus"></i> Create User
        </button>
        <div class="d-flex">
            <input type="date" name="date_from" id="date" class="custom-filter-fields">
            <input type="date" name="date_to" id="date" class="custom-filter-fields">
            <select name="type" class="custom-filter-fields custom-filter-select">
                <option value="">-- Select Type --</option>
            </select>
            <button class="btn btn-outline-success custom-field-btn">Filter</button>

        </div>
    </div>
    <div class="bg-app-secondary">
        <div class="custom-content-body">
            <div class="card">
                <div class="card-body">
                <button class="btn btn-outline-success custom-btn-table-export float-right mb-2">Export CSV</button>
                <table class="table bg-white">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th class="text-center" width="10%">Action</th>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-right">
                            <button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </td>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <div class="append-vehicle"></div>
@endsection
@section('script')
<script type="text/javascript">
   
</script>
@endsection
