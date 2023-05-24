<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .center{
        margin-left: auto;
        margin-right: auto;
    }
    form input {
        width: 50%;
        margin-left: 20px;
    }
    label{
        margin-left: 20px;
    }
    button{
        margin-top: 10px;
        margin-left: 20px;
    }
</style>

<body>
    <h1 class="text-center">Formulario</h1>
    <form action="recupera-dados.php" method="post" class="center" style="width: 45%;">
        <div class="mb-3 t-center"  >
            <label for="" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome">

            <label for="" class="form-label">email</label>
            <input type="text" class="form-control" name="email">

            <label for="" class="form-label">idade</label>
            <input type="text" class="form-control" name="idade">

            <label for="" class="form-label">hobbie</label>
            <input type="text" class="form-control" name="hobbie">

            <button class="btn btn-primary">Enviar</button>
        </div>
    </form>


</body>

</html>