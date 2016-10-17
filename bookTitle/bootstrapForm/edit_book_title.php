<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <script src="../../assets/bootstrap/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="background:#fff7d5;">
            <div class="col-md-2">
                <h1>Logo</h1>
            </div>
            <div class="col-md-2 col-md-offset-8">
                <h2>Menu</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Edit Book List with author</h2>
                <form action="" method="">
                    <div class="form-group">
                        <label for="title">Book Title:</label>
                        <input type="text" class="form-control" id="book_title" placeholder="Enter Book Title">
                    </div>
                    <div class="form-group">
                        <label for="author">Author:</label>
                        <input type="text" class="form-control" id="author" placeholder="Enter Author Name">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-info">Edit</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="text-center" style="background:#babab0;margin-top: 20px;padding: 20px;">&copy; copyright All rights reserved by Ajit Das</p>
            </div>
        </div>
    </div>

</body>
</html>

