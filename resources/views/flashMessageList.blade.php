@extends('layouts.app')


@section('content')

    <div class="col-md-12 text-center">

        <div class="card">

            <div class="card-header">

                <h3>Laravel 9 Flash Message Example - Mywebtuts.com</h3>

            </div>

            <div class="card-body">

                <a href="{{ route('success') }}" class="btn btn-success">Success</a>

                <a href="{{ route('info') }}" class="btn btn-info">Info</a>

                <a href="{{ route('warning') }}" class="btn btn-warning">Warning</a>

                <a href="{{ route('error') }}" class="btn btn-danger">Error</a>

            </div>

        </div>

    </div>

@endsection
