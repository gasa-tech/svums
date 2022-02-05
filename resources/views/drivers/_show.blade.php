@extends('layouts._modal_show')

@section('modalSize','lg')

@section('modalTitle','Show Driver')

@section('modalContent')
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" >Full Name</span>
        </div>
        <input type="text" class="form-control" value="{{ $driver->user->name }}" readonly>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text">Email</span>
        </div>
        <input type="text" class="form-control" value="{{ $driver->user->email }}" readonly>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text">Birthdate</span>
        </div>
        <input type="text" class="form-control" value="{{ $driver->birthdate }}" readonly>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text">Contact #</span>
        </div>
        <input type="text" class="form-control" value="{{ $driver->contact_number }}" readonly>
    </div>
    <hr>
    <h5 class="mb-3">Emergency Contact Person:</h5>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text">Name</span>
        </div>
        <input type="text" class="form-control" value="{{ $driver->emergency_contact_person }}" readonly>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" >Relation</span>
        </div>
        <input type="text" class="form-control" value="{{ $driver->emergency_contact_person_relationship }}" readonly>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" >Contact #</span>
        </div>
        <input type="text" class="form-control" value="{{ $driver->emergency_contact_person_contact_number }}" readonly>
    </div>
@endsection