<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Create Page</title>
</head>
<body>
<div class="container mt-4">
        <div class="row">
            <div class="container">
                <div class="col-md-12 bg-success">
                    <h3 class="text-white text-center p-3">Create Data</h3>
                </div>
            </div>
            <div class=" col-md-12 mt-3">
                <form action="Allquery.php" method="post">
                    <div class="form-row">
                        <div class="form-md-4 mb-3">
                            <label for="validationCustom01 mb-3">Name</label>
                            <input type="text" class="form-control" name="name" id="validationCustom01" placeholder="Enter Name">
                        </div>

                        <div class="form-md-4 mb-3">
                            <label for="validationCustom01 mb-3">Email</label>
                            <input type="text" class="form-control" name="email" id="validationCustom02" placeholder="Enter Email">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" name="btnsave" value="Save Data">
                    </forma>
            </div>
        </div>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</html>