@extends('layouts.admin')
@section('title', 'つぶやき新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                    <h2>つぶやき新規作成</h2>
                    <form action="{{ url('/create') }}" method="POST" enctype="multipart/form-data">

                    </form>
            </div>
        </div>
    </div>
@endsection