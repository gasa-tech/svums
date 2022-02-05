@extends('layouts._modal_create')

@section('modalTitle','Create User')
@section('modalSize','l')

@section('modalContent')
<form id="createForm" method="post" action="{{ route('user.store')}}" autocomplete="off">
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
 <!--  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <button class="btn btn-outline-secondary" type="button">Role</button>
    </div>
    <select class="custom-select" >
      <option selected>Choose...</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div> -->
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" >Password</span>
    </div>
      <input type="password" class="form-control" name="password" placeholder="Password" required>
  </div>
</form>
@endsection