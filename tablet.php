<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DELL </title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/tablet.css">
</head>
<body>
<div class="row vertical-center" style="padding: 0px;margin: 0px;">
    <div class=" tablet my-auto">

        <div class="col-md-12">
        	<img src="img/tabtop.jpg">
        </div>
        <div class="col-md-12 uno">
            <form name="add_product" id="add_product">
                <div class="col-md-8 nombre">
                            <input type="text" name="code" id="code" required>
                </div>
                <div class="col-md-8 edad">
                            <input type="number" max="99" name="name" id="name" required>
                </div>
                <div class="col-md-8 mail">
                            <input type="email" name="category" id="category" required>
                </div>
                <div class="col-md-8 velocidad">
                            <input type="number" placeholder="K/h" name="stock" id="stock" required>
                    
                </div>
                
                <div class="col-md-8 text-center guarda">
                    <input type="submit" class="btn btn-success" value="Guardar">
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <img src="img/tabbot.jpg">
        </div>
         
           
			
        
    </div>
<div id="modalMessage" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Importante</h4>
            </div>
            <div class="modal-body">
                <p id="modalMsg">El registro fue guardado</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Continuar</button>                  
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->	
	<script src="js/script.js"></script>
</body>
</html>                                		                            