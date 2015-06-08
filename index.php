<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

var_dump($_GET);
phpinfo();
//mysqli
exit;

?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>

    </head>
    <body>
        <div class ="containeriner"></div>

        <div class="row">
            <div class="col-md-6">  

                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text"  id="input-Nome" class="form-control"  placeholder="Nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Endereço</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-Endereço" placeholder="Endereco">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Sexo</label>
                            <div class="col-sm-10">
                                <label class="radio-inline">
                                    <input type="radio" name="Sexo" value="m"> Masculino

                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="Sexo" value="f"> Feminino

                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked> Ativo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="btn-enviar"           class="btn btn-success">Cadastrar</button>
                            </div>
                        </div>
                </form>





            </div>
            <div class="col-md-6">.col-md-6</div>
        </div>

        <div class="row">
            <div class="col-md-6">.col-md-6</div>
            <div class="col-md-6">.col-md-6</div>



            <script>

                $('#btn-enviar').click(function () {
                    if ($('#input-nome').val() == '') {
                        alert('preencha o nome')
                
                      
                  }
                  
                   $('#btn-enviar').click(function () {
                    if ($('#input-Endereco').val() == '') {
                        alert('preencha o endereço')
                    }
                })
                
                


            </script>




    </body>
</html>