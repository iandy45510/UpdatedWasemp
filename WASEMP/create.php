<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <title>Create Page</title>
</head>
<body>
   
<div class="container">
<div class="row justify-content-center">
                    <!-- design yung pabox -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Personal Information</div>
                            <div class="card-body">

                                <form class="form-horizontal" method="post" action="#"></form>
                                <!-- eto yung nasa loob ng registration form mga sasagutan -->
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Firstname</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Surname</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="surname" id="surname" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="cols-sm-2 control-label">M.I</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="middle name" id="middle name" placeholder="" />
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Permanent Address</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="address" id="address" placeholder="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Current Address</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="current" id="current" placeholder="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Age</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="age" id="age" placeholder="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Contact Number</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="number" id="number" placeholder="" />
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Barangay</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>select</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>

                                      <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Email Address</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="email" id="email" placeholder="" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="password" class="cols-sm-2 control-label">Password</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password" />
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <form>
                                        <div class="form-group">
                                          <label for="exampleFormControlFile1">Upload Picture</label>
                                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                      </form>
                                    <br>
                                    <div class="form-group ">
                                        <button type="button" class="btn btn-primary btn-lg btn-block login-button">Confirm</button>
                                    </div>
                                  
                   
    
</body>
</html>