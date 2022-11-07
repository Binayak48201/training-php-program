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
                {{-- tasks --}}
                @foreach ($project->task()->get() as $task)
                <div class="mb-3">
                    <form method="POST" action="">
                        @method('PATCH')
                        @csrf

                        <div class="flex items-center">
                            <input name="completed" type="checkbox" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>

                            <input name="body" value="{{ $task->body }}" class="text-default bg-card w-full {{ $task->completed ? 'line-through text-muted' : '' }}">
                        </div>
                    </form>
                </div>
                @endforeach

                <div class="modal-body">
                    <div class="">
                        <form action="/project/{{$project->slug}}/task" method="POST">
                            @csrf
                            <label for="exampleFormControlTextarea1" class="form-label">Add Task</label>
                            <input placeholder="Add a new task..." class="form-control" name="body">
                        </form>
                    </div>
                </div>

                <form action="/project/{{$project->slug}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
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
