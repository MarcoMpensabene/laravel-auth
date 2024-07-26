@extends('layouts.admin')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <h1>CREATE PROJECT </h1>
            <form action="{{route('admin.projects.store')}}" method="POST" id="add-form">
                @method('POST');
                @csrf
                <div class="mb-3">
                    <label for="name">Project Name</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Project Name" aria-label="Project Name" name="name" id="name" required>
                </div>

                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea class="form-control form-control-sm" type="text" placeholder="Description" aria-label="Description" name="description" id="description" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="author">Author</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Author" aria-label="Author" name="author" id="author">
                </div>

                <div class="mb-3">
                    <label for="image_url">URL Immagine</label>
                    <input class="form-control form-control-sm" type="text" placeholder="URL" aria-label="URL" name="image_url" id="image_url">
                </div>

                <div class="mb-3">
                    <label for="stack">Stack</label>
                    <input class="form-control form-control-sm" type="text" placeholder="stack" aria-label="Stack " name="stack" id="stack">
                </div>

                <div class="mb-3 d-flex justify-content-between p-2">
                    <input type="submit" value="Create new Project" class="btn btn-primary" >
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
</main>

@endsection
