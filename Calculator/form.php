<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap CSS v5.2.1 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>




<body>

    <form class="container" action="index.php" method="post">
        <div class="mb-3">
            <label for="" class="form-label">First Number</label>
            <input type="text" class="form-control" name="fnum" id="" aria-describedby="helpId" placeholder="" required>

        </div>
        <div class="mb-3">
            <label for="" class="form-label">Second Number</label>
            <input type="text" class="form-control" name="Snum" id="" aria-describedby="helpId" placeholder="">

        </div>
        <div >
            <select name="op" id="">
                <option value="add">Add</option>
                <option value="sub">Sub</option>
                <option value="multi">Multi</option>
                <option value="Div">Divide</option>
            </select>

        </div>
        <br>
        
        <button class="btn btn-primary" name="submit">Submit</button>

    </form>
