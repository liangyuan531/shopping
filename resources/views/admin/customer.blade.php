@extends('admin.common.common')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  <h1 class="h2">Customer Management</h1>  
  </div>       
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Status</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Lorem</td>
            <td>Lorem@gmail.com</td>
            <td>1539889834</td>
            <td>0</td>
            <td></td>
          </tr>
          <tr>
            <td>2</td>
            <td>amet</td>
            <td>amet@gmail.com</td>
            <td>15837473877</td>
            <td>1</td>
            <td></td>
          </tr>                         
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection