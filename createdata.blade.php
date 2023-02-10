<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DATA OF EMPLOYEES</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/addemployeedata">Add New Employee Data<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/allemployeedata">View Data of All Employees</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container px-0" style="background-image:image(); max-width: 100%;">
        <div class="bg-image d-flex justify-content-center align-items-center"
            style="background-color:black; height: 94vh; background-size: cover;">

            <div class="container-fluid" style="margin-right: 300px; margin-left: 300px; padding-bottom: 20px;">
                <div class="card">
                    <div class="card-header">
                        <div class="page-title">
                            <h4 style="text-align: center">New Employee Data</h4>
                        </div>
                    </div>
                    <div class="card-body"> 
                        <div class="col">
                            <form method="post" action="/writeemployeedata">
                                <h5>Please Input Data Carefully!</h5>
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="name" required>
                                </div>

                                <div class="form-group">
                                    <label>Employee ID</label>
                                    <input type="text" name="employeeID" id="employeeID" class="form-control"
                                        placeholder="employee id" required>
                                </div>

                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="text" name="age" id="age" class="form-control"
                                        placeholder="age" required>
                                </div>

                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="phone number" required>
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="address" required>
                                </div>

                           
                                <div class="form-group">
                                    <label>Job</label>
                                    <textarea class="form-control" type="text" name="job" id="job" rows="2"
                                        placeholder="job and description" required></textarea>
                                </div>

                                <div class="form-group pt-4" style="float: right">
                                    <button type="submit" name="submit" value="submit" id="submit"
                                        class="btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i></i>Submit
                                        </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
</body>

</html>
