@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <h2>Table</h2>    
  <p>The .table-striped class adds zebra-striping to any table row within tbody (not available in IE8):</p>                  
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
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>2017/05/01</td>
        <td>2017/05/09</td>
      </tr>
    </tbody>
  </table>
    </div>
</div>
@endsection
