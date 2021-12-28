<h1 class="text-center text-primary">Add</h1>
<div class="container">
    <div class="container" >
        <div class="container" style="width: 330px;margin-top: 61px;">
        <form action="" method="POST">
  <div class="form-group">
    <label for="email">full Name</label>
    <input type="text" name="fullName" class="form-control" placeholder="Enter email" id="email">
    <strong class="alert-danger" ><?= $errorFullname; ?></strong>
  </div>
  <div class="form-group">
    <label for="pwd">email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter password" id="pwd">
    <strong class="alert-danger" ><?= $errorEmail; ?></strong>
  </div>
  <div class="form-group">
    <label for="pwd">numberPhone</label>
    <input type="text" name="numberPhone" class="form-control" placeholder="Enter password" id="pwd">
    <strong class="alert-danger" ><?= $errorNumberPhone; ?></strong>
  </div>
  <div class="form-group">
    <label for="pwd">password</label>
    <input type="text" name="pass_word" class="form-control" placeholder="Enter password" id="pwd">
    <strong class="alert-danger" ><?= $errorPass_word ; ?></strong>
  </div>
  <button type="submit" style="width: 302px;" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>