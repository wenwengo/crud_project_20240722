<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-teacher list</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

    </style>
</head>
<body>
<div class="container mt-3">
        <h3>
            Student Create
        </h3>
    
    <div class="container mt-3">
        <form action="../../api/teacher/store.php" method="get" id="myForm" enctype="multipart/form-data">
            <div class="row">

                <div class="col-12 mt-3">
                    <label for="">name</label>
                    <input type="text" class="form-control" name="name" id="">
                </div>
                <div class="col-12 mt-3">
                    <label for="">mobile</label>
                    <input type="text" class="form-control" name="mobile" id="">
                </div>
                <div class="col-12 mt-3">
                    <input type="hidden" class="form-control" name="address" id="" value="taipei input">
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-success" type="submit">Button</button>
                    </div>
                </div>
                
            </div>
        </form>
    </div>



</div>



</body>
</html>