@extends('layouts._modal_create')

@section('modalTitle','Create Vehicles')

@section('modalContent')
     <form id="createForm" method="post" action="{{ route('vehicles.store')}}">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Brand</span>
            </div>
            <input type="text" class="form-control" name="brand" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Model</span>
            </div>
            <input type="text" class="form-control" name="model" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Type of Vehicle</span>
            </div>
            <input type="text" class="form-control" name="type" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Color</span>
            </div>
            <input type="text" class="form-control" name="color" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text">Plate Number</span>
            </div>
            <input type="text" class="form-control" name="plate_number" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >CR Expirey Date</span>
            </div>
            <input type="date" class="form-control" name="cr" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Odo Meter</span>
            </div>
            <input type="text" class="form-control" name="odometer" required>
        </div>
    </form>
@endsection