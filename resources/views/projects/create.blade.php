@extends('layouts.app')

@section('content')
    <form method="POST" action="/projects">
        <h1 class="heading is-1">Create a Project</h1>

        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" name="title" class="input" placeholder="Title">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea name="description" class="input" placeholder="Description"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
            <a href="/projects">Cancel</a>
        </div>
    </form>
@endsection
