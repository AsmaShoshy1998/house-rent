@extends('backend.master')


@section('content')
<h2> Assign a Room to Tenant</h2>
<br> </br>


<div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Occupation</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">Engineer</option>
        <option value="2">Doctor</option>
        <option value="3">Banker</option>
        <option value="1">Teacher</option>
        <option value="2">Businessman</option>
        <option value="3">Politicians</option>
      </select>
    </div>
    <p> </p>
   


@endsection