@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin: 15px;
  }
</style>
<div class="container ">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card ">
        <div class="card-header">Dashboard</div>
        <div class="row justify-content-center">
          <button type="button" class="btn btn-primary btn-lg uper col-lg-5"><a href="/admin/users" style="text-decoration:none;color:white;">See all Users</a></button>
        </div>

      </div>

    </div>
  </div>
</div>
</div>
@endsection