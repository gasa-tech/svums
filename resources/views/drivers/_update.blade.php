@extends('layouts._modal_update')

@section('modalSize','lg')

@section('modalTitle','Update Driver')

@section('modalContent')
    <form method="post" action="{{ route('driver.update',$driver->id)}}" id="updateForm">
        @csrf
        @method('PATCH')
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Full Name</span>
            </div>
            <input type="text" class="form-control" name="name" required value="{{ $driver->user->name }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Email</span>
            </div>
            <input type="email" class="form-control" readonly value="{{ $driver->user->email }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Birthdate</span>
            </div>
            <input type="date" class="form-control" name="birthdate" value="{{ $driver->birthdate }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Contact #</span>
            </div>
            <input type="text" class="form-control" name="contact_number" value="{{ $driver->contact_number }}">
        </div>
        <hr>
        <h5 class="mb-3">Emergency Contact Person:</h5>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text">Name</span>
            </div>
            <input type="text" class="form-control" name="emergency_contact_person" value="{{ $driver->emergency_contact_person }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Relation</span>
            </div>
            <input type="text" class="form-control" name="emergency_contact_person_relationship" value="{{ $driver->emergency_contact_person_relationship }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Contact #</span>
            </div>
            <input type="text" class="form-control" name="emergency_contact_person_contact_number" value="{{ $driver->emergency_contact_person_contact_number }}">
        </div>
    </form>
@endsection