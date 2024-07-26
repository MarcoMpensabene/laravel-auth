@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Project  Index </h1>
        <div class="container">
            <div class="row">
                <article class="col-12">
                    <table class="table align-middle table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">ProjectName</th>
                                <th scope="col">Desciption</th>
                                <th scope="col">Author</th>
                                <th scope="col">Image_url</th>
                                <th scope="col">stack</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @foreach ($projects as $project)
                            <tr>
                                <th >{{$project->id}}</th>
                                <th >{{$project->name}}</th>
                                <th >{{$project->description}}</th>
                                <th >{{$project->author}}</th>
                                <th >{{$project->image_url}}</th>
                                <th >{{$project->stack}}</th>
                                <th>
                                    <div class="d-flex">
                                        <a class="btn btn-primary btn-sm me-1" href="#">View</a>
                                        <a class="btn btn-warning btn-sm me-1" href="#">Edit</a>
                                    </div>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                      </table>
                </article>
            </div>
        </div>
        {{-- @dump($projects) --}}
</main>

        {{-- //@dd($projects) --}}
    </div>
</div>
@endsection
