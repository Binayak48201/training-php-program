@extends('layouts.app')
@section('content')
@include('layouts.navigation')

<div class="">
<section class="container mt-3 mb-3">
    <div class="custom-flex">
        <a href="" class=" text-decoration-none"> Add Project</a>
    </div>
<div class="row">
    @foreach($projects as $project)
<div class="card col-md-3 m-2" style="width: 18rem;">
    <div class="card-body">
      <a href="#" class="card-title text-info text-decoration-none custom-title">{{ $project->title}} </a>
      <div class="custom-flex mt-5">
        <a class="text-info me-2 text-decoration-none" href="">Edit</a>
        <form action="/project/{{$project->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="link text-info text-decoration-none">Delete</button>
        </form>
      </div>
    </div>
  </div>
  @endforeach
</section>
</div>

@endsection
