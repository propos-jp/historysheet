@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <h2>Sheet</h2>    
  <div class="panel-body">
        <!-- バリデーションエラーの表示 -->
        @include('common.errors')

       {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('start_at', 'Start:') !!}
            {!! Form::input('start_at', 'start_at', date('Y-m-d'), ['class' => 'form-control']) !!}
        </div>
         <div class="form-group">
            {!! Form::label('end_at', 'End:') !!}
            {!! Form::input('end_at', 'end_at', date('Y-m-d'), ['class' => 'form-control']) !!}
        </div>    
        <div class="form-group">
            {!! Form::submit('Add sheet', ['class' => 'btn btn-primary btn-default']) !!}
        </div>
       {!! Form::close() !!}
    </div>             
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>name</th>
        <th>start</th>
        <th>end</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($sheets as $sheet)
      <tr>
        <td>{{ $sheet->id }}</td>
        <td>{{ Html::linkRoute('sheet.show', $sheet->name, [$sheet->id]) }}</td>
        <td>{{ $sheet->start_at }}</td>
        <td>{{ $sheet->end_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
    </div>
</div>
@endsection