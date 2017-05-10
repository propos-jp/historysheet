@extends('layouts.app')

@section('content')
<div class="container">

@if (!empty($sheet))
    <table class="table table-bordered">
    <tbody>
    <tr><td>name</td><td>{{ $sheet->name }}</td></tr>
    <tr><td>description</td><td>{{ $sheet->description }}</td></tr>
    <tr><td>start</td><td>{{ $sheet->start_at }}</td></tr>
    <tr><td>end</td><td>{{ $sheet->end_at }}</td></tr>
    </tbody> 
    </table>
    
@else
   
@endif

</div>
@endsection