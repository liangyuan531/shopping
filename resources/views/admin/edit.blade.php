<form action="" onsubmit="return false;" id="formEdit">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="email" class="form-control" value="{{$data->username}}" id="eidtUsername" name="username" placeholder="Enter username">
    <div id="userErr"></div>
    <input type="hidden" name="id" value="{{$data->id}}">
  </div>
  <div class="form-group">
    <label for="inputPassword1">Password</label>
    <input type="password" class="form-control" value="{{$data->password}}" id="editPassword1" name="password" placeholder="Password">
    <div id="pwdErr"></div>
  </div>
  <div class="form-group">
    <label for="inputPassword2">Re-input Password</label>
    <input type="password" class="form-control" id="eidtPassword2" name="repassword" placeholder="Re-input Password">
    <div id="repwdErr"></div>
  </div>
  <input id="editReset" type="reset" hidden>
</form>