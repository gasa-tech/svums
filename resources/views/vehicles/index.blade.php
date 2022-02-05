@extends('layouts.app')

@section('content')
    @include('vehicles._create')
    <div class="p-4">
        <h2 class="">Vehicles</h2>
        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#createModal">
            <i class="fa fa-plus"></i> Create Vehicles
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
    <div class="bg-app-secondary" style="height: 1000px;">
        <div class="custom-content-body">
            <div class="card">
                <div class="card-body">
                <button class="btn btn-outline-success custom-btn-table-export float-right mb-2">Export CSV</button>
                <table class="table bg-white">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th class="text-center">Action</th>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
