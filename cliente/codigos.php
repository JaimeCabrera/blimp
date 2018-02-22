 <?php
                        include "php/conexion.php";
                        $result = mysqli_query($con, "SELECT * FROM rutas");
                        while ($ruta = $result -> fetch_array() ){

                            ?>
                            <tr>
                                <td ><?php echo $ruta['id_ruta']?></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php
                        }
                        ?>