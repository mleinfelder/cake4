<!doctype html>
<html lang="pt-br">

    <head>
        <title>Projeto Composer</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>

        <div class="container">
            <div class="jumbotron">
                <h1 class="display-3">Primeiro projeto com composer</h1>
                <p class="lead">Apenas uma aplicação de envio de email para exemplo</p>
                <hr class="my-2">
                <p>Obs.: A biblioteca <code>mail</code> já vem instaldo no sistema, porém, as configurações dela precisam ser feitas para funcionar.</p>
                <p>Para mais informações deste assunto só entrar no site deles <a target="_blank" href="https://www.php.net/manual/pt_BR/function.mail.php">https://www.php.net/manual/pt_BR/function.mail.php</a></p>

            </div>
            <form action="enviar_email.php" method="post" class="form form-well">
                <div class="card text-left">
                    <div class="card-header">
                        <h4 class="card-title">Preencha os campos abaixo corretamente</h4>
                    </div>
                    <?php if( isset( $alert ) ): ?>
                        <div class="alert alert-<?php echo $alert ?>" role="alert">
                            <h4 class="alert-heading"><?php echo $alert_titulo ?></h4>
                            <p><?php echo $alert_mensagem ?></p>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <fieldset class="card-text">
                            <div class="form-group">
                                <label for="destinatario">Destinatário</label>
                                <input required type="email" name="destinatario" id="destinatario" class="form-control" placeholder="Email do destinatário" aria-describedby="destinatario_small">
                                <small id="destinatario_small" class="text-muted">Para quem deseja enviar o e-mail</small>
                            </div>
                            <div class="form-group">
                                <label for="assunto">Assunto do e-mail</label>
                                <input required type="text" name="assunto" id="assunto" class="form-control" placeholder="Informe qual o assunto">
                            </div>
                            <div class="form-group">
                                <label for="conteudo">Corpo do e-mail</label>
                                <textarea required class="form-control" name="conteudo" id="conteudo" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </fieldset>
                    </div>
                </div>

            </form>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
