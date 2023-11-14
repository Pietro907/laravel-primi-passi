@extends('layouts.admin')

@section('main_content')

@include('partials.task_create_form')

<div class="table-responsive mt-5">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">STATUS</th>
                <th scope="col">DATE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td scope="row">{{$task->id}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->status ? 'done' : 'to do'}}</td>
                    <td>{{$task->date}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
