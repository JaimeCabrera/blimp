<div class="panel panel-success" >
    <!-- Default panel contents -->
    <div class="panel-heading" >
        <h4 class="headingParadas">&nbsp;&nbsp;<span class="glyphicon glyphicon-bed"></span>&nbsp;&nbsp;&nbsp;Rutas</h4>
    </div>

    <div class="panel-body">
        <script>

            function nuevaRuta( ) {
                $('#myModal').on('shown.bs.modal', function () {
                    $('#myInput').focus();
                });
            }
        </script>
        &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
        onclick="nuevaParada()">Nueva Ruta&nbsp;&nbsp;<span class="glyphicon glyphicon-plus"></span></button> 
    </div>
    <!-- Table -->
    <div class="container-fluid">
        
        
        <div class="alert alert-success" id="registroEliminado"role="alert">Registro Eliminado cone exito</div>
    </div>
</div>