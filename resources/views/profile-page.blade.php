<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- Add Bootstrap CSS here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300');

        .avatar {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .alert {
            margin-bottom: 30px;
        }
        
        .jumbotron-flat {
            background-color: #4DB8FF;
            height: 100%;
            border: 1px solid #4DB8FF;
            background: white;
            width: 100%;
            text-align: center;
            overflow: auto;
            color: var(--dark-color);
        }

        .paymentAmt {
            color: var(--dark-color);
            font-size: 80px;
        }

        .centered {
            text-align: center;
        }

        .title {
            padding-top: 15px;
            color: var(--dark-color);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                    <img src="{{ asset('assets/images/Placeholder_Person.jpg') }}" class="avatar" alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="form-control">
                </div>
            </div>
            
            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <div class="alert alert-info alert-dismissable">
                    <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <i class="fa fa-coffee"></i>
                    This is an <strong>important message</strong>. Use this to show important messages to the user.
                </div>
                <h3>Personal Info</h3>
                
                <form class="form-horizontal" role="form" method="POST" >
                    @csrf
                    @method('PUT')
                 
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Username:</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="username" value="{{ Auth::user()->name }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Email:</label>
                        <div class="col-md-9">
                            <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}" required>
                        </div>
                    </div>
                       <div class="form-group row">
                        <label class="col-md-3 col-form-label">Old Password:</label>
                        <div class="col-md-9">
                            <input class="form-control" type="password" name="old_password" placeholder="Current Password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">New Password:</label>
                        <div class="col-md-9">
                            <input class="form-control" type="password" name="password" placeholder="New Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Confirm New Password:</label>
                        <div class="col-md-9">
                            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm New Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <!-- Add Bootstrap JS and dependencies here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
