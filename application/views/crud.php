<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class ="row  mt-5">
          <div class="col-md-12">
            <?=form_open_multipart('') ?>
            <div class="col-md-6 mb-3"> 
                <input type="text"  name="name" placeholder="Enter your name">
            </div>
            <div class="col-md-6 mb-3"> 
                <input type="email"  name="email" placeholder="email">
            </div>
            <?=form_close()?>

          </div>
        </div>

    </div>
</body>
</html>