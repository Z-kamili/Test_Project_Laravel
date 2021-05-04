<div class="form-group row">
    <div class="col-5">
      <input id="" name="name" type="text" class="form-control" placeholder="Name" value="">
    </div>
  </div>
  <div class="form-group row">
  <div class="col-5">
    <input id="" name="email" type="text" class="form-control" placeholder="Email" value="">
  </div>
  </div>
  <div class="form-group row">
    <div class="col-5">
      <input id="" name="Matricule" type="text" placeholder="Matricule" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-5">
      <input id="" name="First_date" type="date" placeholder="First Date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-5">
      <input id="" name="Last_date" type="date" placeholder="Last Date" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div>
      <button  name="submit" type="submit" class="btn-sbm btn btn-primary">Submit</button>
    </div>
    @if($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
    <li style="color: red;margin-left:10px">{{$error}}</li>            
    @endforeach
    </ul>
    @endif
  </div>
