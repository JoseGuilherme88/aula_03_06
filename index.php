<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <script src="Js/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="Js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputNome">nome</label>
                            <input type="text" class="form-control" id="exampleInputNome" placeholder="nome">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">endereços</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">sexo</label>

                            <label class="checkbox-inline">
                                <input type="radio" name="sexo" value="m"> Masculino
                                <label class="checkbox-inline">
                                    <input type="radio" name="sexo" value="f"> Feminino
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Ativo
                                        </label>
                                    </div>
                                    <button type="button" id="btn btn-cadastrar">Cadastrar</button>
                                </label>
                            </label>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">.col-md-6</div>

                <script>
                    console.log $('#btn-enviar').click(function(){
                        if($('#input-nome').val()==(''){
                            alert('preencha o nome')
                            
                        }
                    })
                </script>




            </div>
    </body>
</html>

