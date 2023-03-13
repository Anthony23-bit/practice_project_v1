@extends('template.dashboard')
@section('content')

<div class="card">
  <div class="card-body">
      
    <form action="{{url('/admin/'.$products->id)}}" method="post">
    {!! csrf_field() !!}
        @method ("PATCH")
        <label>ID</label></br>
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id"/></br>
        <label>Title</label></br>
        <input type="text" name="product_title" id="name" value="{{$products->product_title}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="product_desc" id="name" value="{{$products->product_desc}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>

@stop  