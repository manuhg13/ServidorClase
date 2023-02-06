<div class="container">
    <form action="../controlador/conciertosControlador.php" method="post">
        <div class="mb-3 row">
            <label for="id" class="col-4 col-form-label">ID</label>
           <select name="id" id="id">
                <option value=0> Selecciona un grupo</option>
            <?
                require '../funciones/funciones.php';
                cargarConciertos();
            ?>
           </select>
        </div>
        <div class="mb-3 row">
            <label for="grupo" class="col-4 col-form-label">Grupo</label>
            <div class="col-8">
                <input type="text" class="form-control" name="grupo" id="grupo" placeholder="Grupo">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fecha" class="col-4 col-form-label">Fecha</label>
            <div class="col-8">
                <input type="text" class="form-control" name="fecha" id="fecha" placeholder="Fecha">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="precio" class="col-4 col-form-label">Precio</label>
            <div class="col-8">
                <input type="number" class="form-control" name="precio" id="precio" placeholder="Precio">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="lugar" class="col-4 col-form-label">Lugar</label>
            <div class="col-8">
                <input type="text" class="form-control" name="lugar" id="lugar" placeholder="Lugar">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <input type="submit" class="btn btn-primary" name="accion" value="Modificar"/>
            </div>
        </div>
    </form>
</div>