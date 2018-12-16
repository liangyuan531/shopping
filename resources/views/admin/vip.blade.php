@extends('admin.common.common')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  <h1 class="h2">VIP Management</h1>  
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
            <th>Operation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Lorem</td>
            <td>Lorem@gmail.com</td>
            <td>1539889834</td>
            <td>0</td>
            <td>
              <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">delete</button>
              </div>  
            </td>
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
      <div>
      <button type="button" class="btn btn-success btn-sm" 
              
              data-toggle="modal"
              data-target="#addModal">add</button> 
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add VIP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="" onsubmit="return false;" id="formAdd">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="email" class="form-control" id="username" name="username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="inputEmail1">Email address</label>
            <input type="email" class="form-control" id="inputEmail1" name="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="phonenumber">Phone number</label>
            <input type="email" class="form-control" id="phonenumber" name="phone" placeholder="Enter phone number">
          </div>
          <div class="form-group">
            <label for="inputPassword1">Password</label>
            <input type="password" class="form-control" id="inputPassword1" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="inputPassword2">Re-input Password</label>
            <input type="password" class="form-control" id="inputPassword2" name="repassword" placeholder="Re-input Password">
          </div>
          <input id="reset" type="reset" hidden>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="add()">Save</button>
      </div>
    </div>
  </div>
</div>

<script>
  function add() {
    var str = $("#formAdd").serialize();
    $.post('vipmanagement', {str: str, '_token':'{{csrf_token()}}'}, function(data){
      if(data) {
        $(".close").click();
        $("#reset").click();
      }else {

      }
    })
  }
</script>
@endsection