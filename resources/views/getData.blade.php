@extends('layouts.app')

@section('content')

<!-- <div class="row"> -->
<form action="{{ route('download_csv') }}" method="GET">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" type="submit" name="base">get CSV</button>
    </div>
</form>

<!-- </div> -->

<div class="row">
  <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">Title</th>
        <th scope="col">Text</th>
        </tr>
    </thead>
    <tbody>
        @foreach($results as $result)
            <tr>
                <td>{{ $result->post_title }}</td>
                <td>{{ $result->post_content }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection
