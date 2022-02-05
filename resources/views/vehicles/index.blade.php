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
    <div class="bg-app-secondary">
        <div class="custom-content-body">
            <div class="card">
                <div class="card-body">
                <button class="btn btn-outline-success custom-btn-table-export float-right mb-2">Export CSV</button>
                <table class="table bg-white">
                    <thead>
                        <th>#</th>
                        <th width="50%">Vehicle</th>
                        <th>Odo Meter</th>
                        <th>CR Expiry Date</th>
                        <th>Status</th>
                        <th class="text-center" width="7%">Action</th>
                    </thead>
                    <tbody>
                        @foreach($vehicles as $i => $vehicle)
                        <tr>
                            <td>{{ ++$i}}</td>
                            <td>{{ $vehicle->brand }}, {{ $vehicle->model }}</td>
                            <td>{{ $vehicle->odometer }} km</td>
                            <td>{{ date(' F d, Y', strtotime($vehicle->cr)) }}</td>
                            <td> Status ni</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fa fa-cogs"></i>
                                    </button>
                                    <div class="dropdown-menu" style="min-width: 80px ! important;">
                                      <a class="dropdown-item" href="#"><i class="fa fa-search"></i> View</a>
                                      <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Update</a>
                                      <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                        </td>
                        </tr>
                        @endforeach
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
