@extends('layouts._modal_create')

@section('modalSize','lg')

@section('modalTitle','Add Driver')

@section('modalContent')
    <form id="createForm" method="post" action="{{ route('driver.store')}}">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Full Name</span>
            </div>
            <input type="text" class="form-control" name="name" placeholder="Full Name" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Email</span>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Birthdate</span>
            </div>
            <input type="date" class="form-control" name="birthdate">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Contact #</span>
            </div>
            <input type="text" class="form-control" name="contact_number">
        </div>
        <hr>
        <h5 class="mb-3">Emergency Contact Person:</h5>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text">Name</span>
            </div>
            <input type="text" class="form-control" name="emergency_contact_person">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Relation</span>
            </div>
            <input type="text" class="form-control" name="emergency_contact_person_relationship">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" >Contact #</span>
            </div>
            <input type="text" class="form-control" name="emergency_contact_person_contact_number">
        </div>
    </form>
@endsection