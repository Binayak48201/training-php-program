@extends('layouts.app')
@section('content')
@include('layouts.navigation')

<div class="">
    <section class="container mt-3 mb-3">
        <div class="">
            <a href="/" class="text-info text-decoration-none text-uppercase">Projects</a>
            <span>>></span>
            <a href="" class="text-info text-decoration-none text-uppercase"> Project Title</a>
        </div>

        <div class="row">
            <div class="col-md-8">
                <form action="/project/{{$project->id}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Project Title</label>
                            <input value="{{ $project->title}}" required name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea required name="description" class="form-control" id="exampleFormControlTextarea1" rows="10">
                                {{ $project->description }}
                            </textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Project</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis explicabo voluptate quam alias nisi magni eveniet mollitia magnam, in eligendi ullam velit facere dolore totam delectus aliquam, accusantium debitis tenetur.
            </div>
        </div>
    </section>
</div>
@endsection
