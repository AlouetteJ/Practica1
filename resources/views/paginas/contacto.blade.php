<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reusable Contact Form Using Bootstrap And PHP - reusable form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>Contactanos</h2> ¿Tienes alguna pregunta? ¿Comentarios? ¡Vamos! 
                    <p> Envia tu mensaje en el formulario debajo y nos contactaremos contigo lo antes posible. </p>
                    <form role="form" method="post" id="reused_form" action="/contacto-form-enviada">
                        @csrf
                        <div class="form-group">
                            <label for="nombre"> Nombre:</label>
                            <input type="text" class="form-control" id="name" name="nombre" value="{{old('nombre') ?? $nombre }}">
                            @error('nombre')
                                <i>{{$message}}</i>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="correo"> Correo:</label>
                            <input type="email" class="form-control" id="email" name="correo" value="{{old('correo') ?? $correo }}" >
                            @error('correo')
                                <i>{{$message}}</i>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="mensaje"> Mensaje:</label>
                            <textarea class="form-control" type="textarea" name="mensaje" id="message" placeholder="¿Que deseas comentar?" maxlength="6000" rows="7">{{old('mensaje')}}</textarea>
                            @error('mensaje')
                                <i>{{$message}}</i>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-lg btn-success pull-right" id="btnContactUs">Enviar! &rarr;</button>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Tu mensaje se envio con exito!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Hubo un problema al enviar tu mensaje. </div>
                </div>
            </div>
        </div>
    </body>
</html>