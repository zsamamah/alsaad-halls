@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Add New Service</h4>
  </div>
  <div class="card-body">
    <form method="POST" action="">
      @csrf
      <div class="form-group">
        <label for="service">Test Name</label>
        <input type="text" id="service" class="btn ms-2 text-start border d-block" name="service" aria-describedby="emailHelp" placeholder="Corona Test">
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" class="btn ms-2 text-start border d-block" id="price" placeholder="50">
      </div>
      <div class="form-group">
        <label for="service_image">Service Image</label>
        <input type="text" name="service_image" class="btn ms-2 text-start border d-block" id="service_image" placeholder="http://----">
      </div>
      <div class="form-group">
        <label for="description">Example textarea</label>
        <textarea id="description" name="description" class="btn ms-2 text-start border d-block" rows="3" placeholder="talk about this test"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection