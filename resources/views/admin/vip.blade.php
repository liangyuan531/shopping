@extends('admin.common.common')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
  <h1 class="h2">VIP Management</h1>  
</div>       
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>id</th>
        <th>Username</th>
        <th>Regiser time</th>
        <th>Status</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
      @foreach($vips as $vip)
      <tr>
        <td>{{$vip->id}}</td>
        <td>{{$vip->username}}</td>
        <td>{{date('d/M/Y',$vip->time)}}</td>
        <td>{{$vip->isVip}}</td>
        <td>
          <div class="btn-group btn-group-sm">
            <button type="button" onclick="edit({{$vip->id}})" class="btn btn-primary"
                  data-toggle="modal"
                  data-target="#editModal">edit</button>
            <button type="button" class="btn btn-danger"
                  onclick="deleteVip(this, {{$vip->id}})">delete</button>
          </div>  
        </td>
      </tr> 
      @endforeach                          
    </tbody>
  </table>
</div>
    <div>
        <button type="button" class="btn btn-success btn-sm"  
              data-toggle="modal"
              data-target="#addModal">add</button> 
      </div>
      <div>
        {{$vips->links()}}
      </div>


<!-- Add Modal -->
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
            <div id="userErr"></div>
          </div>
          <div class="form-group">
            <label for="inputEmail1">Email address</label>
            <input type="email" class="form-control" id="inputEmail1" name="email" placeholder="Enter email">
            <div id="emailErr"></div>
          </div>
          <div class="form-group">
            <label for="phonenumber">Phone number</label>
            <input type="email" class="form-control" id="phonenumber" name="phone" placeholder="Enter phone number">
          </div>
          <div class="form-group">
            <label for="inputPassword1">Password</label>
            <input type="password" class="form-control" id="inputPassword1" name="password" placeholder="Password">
            <div id="pwdErr"></div>
          </div>
          <div class="form-group">
            <label for="inputPassword2">Re-input Password</label>
            <input type="password" class="form-control" id="inputPassword2" name="repassword" placeholder="Re-input Password">
            <div id="repwdErr"></div>
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

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit VIP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        
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
      if(data==1) {
        // close modal
        $(".close").click();
        // reset form
        $("#reset").click();
        // clear error message
        $('#userErr').html('');
        $('#emailErr').html('');
        $('#pwdErr').html('');
        $('#repwdErr').html('');
      }else if(data){
        var errorMsg = '';
        if(data.username) {
          errorMsg = "<div class='alert alert-danger'>"+data.username+"</div>";
          $('#userErr').html(errorMsg);
        }else {
          $('#userErr').html('');
        }
        if(data.email) {
          errorMsg = "<div class='alert alert-danger'>"+data.email+"</div>";
          $('#emailErr').html(errorMsg);
        }else {
          $('#emailErr').html('');
        }
        if(data.password) {
          errorMsg = "<div class='alert alert-danger'>"+data.password+"</div>";
          $('#pwdErr').html(errorMsg);
        }else {
          $('#pwdErr').html('');
        }
        if(data.repassword) {
          errorMsg = "<div class='alert alert-danger'>"+data.repassword+"</div>";
          $('#repwdErr').html(errorMsg);
        }else {
          $('#repwdErr').html('');
        }
      }else{
        alert('add failed');
      }
    })
  }

function deleteVip(obj, id) {
  $.post('vipmanagement/'+id, {"_token":'{{csrf_token()}}', "_method":"delete"}, function(data) {
    if(data == 1) {
     $(obj).parent().parent().parent().remove();
    }else {
      alert('delete failed')
    }
  })
}

function edit(id) {
  $.get("vipmanagement/"+id+"/edit", {}, function(data){
    
  });
}
</script>
@endsection