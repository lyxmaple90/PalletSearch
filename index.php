<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body >

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="">PalletSearch</a>
        </li>
        </ul>
    </div>
    </nav>
    <!-- 搜尋 -->
    <div class="container">
    <form action="Result.php" method="post" class="MainForm">
    <div class="mb-3 mt-3">
      
        <input type="text" class="form-control" id="Pn" placeholder="Enter Pn" name="Pn">

        <input type="text" class="form-control" id="pallet" placeholder="Enter Pallet" name="pallet">

        <button type="submit" class="btn btn-primary" id="Submit">Submit</button>
    </div>
       
    </form>
    </div>

    <hr>
    <!-- Excel上傳 -->
    <div class="container">
    <form action="ExcelUpload.php" method="post" class="MainForm" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      
       

        <input type="file"class="btn btn-success" name="Excelpath">
        <br>
        <br>
        <button type="submit" class="btn btn-primary" id="ExcelBtn">上傳Excel</button>

        
        
    </div>
       
    </form>
    </div>
    

    <a href="test.php" class='btn btn-success'>test button</a>

    
</body>
</html>