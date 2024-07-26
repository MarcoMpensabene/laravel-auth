@extends('layouts.admin')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <h1>Project  Index </h1>
            <div class="container">
                <div class="row">
                    <article class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{$project->name}}</h5>
                                <p class="card-text">{{$project->description}}</p>
                                <p class="card-text"><small class="text-body-secondary">{{$project->author}}</small></p>
                                <p class="card-text">{{$project->stack}}</p>
                            </div>
                            <img src="{{$project->image_url}}" class="card-img-bottom object-fit-cover" style="height: 30rem"  alt="{{$project->name}}">
                        </div>
                    </article>
                </div>
            </div>
            {{-- @dump($projects) --}}
        </div>
    </div>
</main>

@endsection
