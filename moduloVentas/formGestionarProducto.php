
<?php
    include_once("../shared/formulario.php");
    class formGestionarProducto extends formulario{
        public function formGestionarProductoShow(){
                $this -> encabezadoShowSimple("Gestionar Producto");
                ?>
            <div class="container usuario">
                <div class="row">                    
                    <div class="col-10">
                        <p><i class='fas fa-user-alt'></i><?php echo $_SESSION['login'] ?>
                    </div>
                    
                </div>
            </div>
            <div class="container">
                <form method="post" action="#" enctype="multipart/form-data">
                    <div class="">
                        <h1 class="text-center">AGREGAR PRODUCTO</h1>
                        <div class="mb-3 row">
                            <label for="nProducto" class="col-sm-2 col-form-label">Nombre Producto</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nProducto">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pUnitario" class="col-sm-2 col-form-label">Precio Unitario</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pUnitario">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="stock">
                            </div>
                        </div>                        
                        <div class="mb-3 row">
                            <label for="imagen" class="col-sm-2 col-form-label">Imagen</label>
                            <div class="col-sm-10">                                
                                <input type="file" class="form-control" name="imagen" id="imagen">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-5"></div>
                            <div class="col">                                
                                <input type="button" class="btn btn-primary btnmostrar" value="Guardar" onclick="guardaproducto()"/>
                                <input type="button" class="btn btn-primary btnOculto" onclick="modificaproducto()" value="Modificar" />
                                <input type="hidden" id="idmoficar">
                            </div>
                        </div>
                    </div>

                </form>
                
            </div>
            <div class="container">
                <div class="">
                    <h1 class="text-center">LISTA DE PRODUCTOS</h1>
                    <div class="mb-3 row">
                        <div class="col-11">
                            <input type="text" class="form-control" id="BProducto" placeholder="Ingrese el nombre del producto">
                            
                        </div>
                        <div class="col">
                            <button class="btn btn-success" onclick="Buscarproducto()">Buscar</button>
                        </div>
                    </div>
                    <div>
                        <table class="table table-hover table-resposive text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>NOMBRE PRODUCTO</th>
                                        <th>PRECIO UNITARIO</th>
                                        <th>STOCK</th>
                                        <th>EDITAR</th>
                                        <th>ELIMINAR</th>
                                    </tr>
                                </thead>
                                <tbody id="lista_productos">
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <script src="../js/scriptGestionarProducto.js"></script>
            <?php          
                $this->piePaginaShow();
        }
    }
?>