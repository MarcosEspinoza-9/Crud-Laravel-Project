

<div class="d-sm-flex align-items-center justify-content-between mb-4">
   
        <a href="/crud.blade.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#usuarioModal"><i
        class="fas fa-download fa-sm text-white-50"></i> AGREGAR USUARIOS </a>
        <div class="modal" tabindex="-1" role="dialog">



       
 
        <!-- Modal -->
<div class="modal fade" id="usuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
    <form action="/alumnos" method="post">
        <div class="modal-body"> 
            <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre"></input>
                <input type="text" class="form-control" name="img" placeholder="Ingresa la imagen"></input>
                <input type="text" class="form-control" name="nivel" placeholder="Ingresa el nivel"></input>
                <input type="text" class="form-control" name="email" placeholder="Ingresa tu email"></input>
                <input type="text" class="form-control" name="email_verified_at" placeholder="Ingresa la verificacion del email"></input>
                <input type="text" class="form-control" name="password" placeholder="Ingresa tu password"></input>
            </div>  
        </div>
    </form>


      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary  ">Save changes</button>
      </div>
    </div>
  </div>
</div>
    
</div> <!--FIN div Externo-->
