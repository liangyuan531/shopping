@extends('admin.common.common')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  <h1>Orders</h2>
</div>          
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>id</th>
        <th>Order No</th>
        <th>Buyer</th>
        <th>Item ID</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Address</th>
        <th>Time</th>
        <th>Payment Status</th>
        <th>Order Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1,001</td>
        <td>Lorem</td>
        <td>ipsum</td>
        <td>dolor</td>
        <td>sit</td>
        <td>1,001</td>
        <td>Lorem</td>
        <td>ipsum</td>
        <td>dolor</td>
        <td>sit</td>
      </tr>
      <tr>
        <td>1,002</td>
        <td>amet</td>
        <td>consectetur</td>
        <td>adipiscing</td>
        <td>elist</td>
        <td>1,001</td>
        <td>Lorem</td>
        <td>ipsum</td>
        <td>dolor</td>
        <td>sit</td>
      </tr>                         
    </tbody>
  </table>
</div>
@endsection