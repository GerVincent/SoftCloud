<?php

require_once "conexion.php";

use PhpOffice\PhpSpreadsheet\IOFactory;


class ProductosModelo
{

static public function mdlCargaMasivaProductos($fileProductos)
{
    // 
            // $nombreArchivo = $fileProductos['tmp_name'];
    // 
            // $documento = IOFactory::load($nombreArchivo);
    // 
            // $hojaCategorias = $documento->getSheet(1);
            // $numeroFilasCategorias = $hojaCategorias->getHighestDataRow();
    // 
            // $hojaProductos = $documento->getSheetByName("Productos");
            // $numeroFilasProductos = $hojaProductos->getHighestDataRow();
    // 
            // $categoriasRegistradas = 0;
            // $productosRegistrados = 0;
    // 
    //        CICLO FOR PARA REGISTROS DE CATEGORIAS
            // for ($i = 2; $i <= $numeroFilasCategorias; $i++) {
    // 
                // $categoria = $hojaCategorias->getCellByColumnAndRow(1, $i);
                // $aplica_peso = $hojaCategorias->getCellByColumnAndRow(2, $i);
                // $fecha_actualizacion = date("Y-m-d");
    // 
                // if (!empty($categoria)) {
                    // $stmt = Conexion::conectar()->prepare("INSERT INTO categorias(nombre_categoria,
    //                                                                                -- // -- // -- aplica_peso,
    //                                                                                -- // -- // -- fecha_actualizacion_categoria)
    //                                                                    -- // -- // -- values(:nombre_categoria,
    //                                                                            -- // -- // -- :aplica_peso,
    //                                                                            -- // -- // -- :fecha_actualizacion_categoria);");
    // 
                    // $stmt->bindParam(":nombre_categoria", $categoria, PDO::PARAM_STR);
                    // $stmt->bindParam(":aplica_peso", $aplica_peso, PDO::PARAM_STR);
                    // $stmt->bindParam(":fecha_actualizacion_categoria", $fecha_actualizacion, PDO::PARAM_STR);
    // 
                    // if ($stmt->execute()) {
                        // $categoriasRegistradas = $categoriasRegistradas + 1;
                    // } else {
                        // $categoriasRegistradas = 0;
                    // }
                // }
            // }
    // 
            // if ($categoriasRegistradas > 0) {
    // 
    //            CICLO FOR PARA REGISTROS DE PRODUCTOS
                // for ($i = 2; $i <= $numeroFilasProductos; $i++) {
    // 
                    // $codigo_producto = $hojaProductos->getCell("A" . $i);
                    // $id_categoria_producto = ProductosModelo::mdlBuscarIdCategoria($hojaProductos->getCell("B" . $i));
                    // $descripcion_producto = $hojaProductos->getCell("C" . $i);
                    // $precio_compra_producto = $hojaProductos->getCell("D" . $i);
                    // $precio_venta_producto = $hojaProductos->getCell("E" . $i);
                    // $utilidad = $hojaProductos->getCell("F" . $i);
                    // $stock_producto = $hojaProductos->getCell("G" . $i);
                    // $minimo_stock_producto = $hojaProductos->getCell("H" . $i);
                    // $ventas_producto = $hojaProductos->getCell("I" . $i);
                    // $fecha_actualizacion_producto = date('Y-m-d');
    // 
                    // if (!empty($codigo_producto)) {
                        // $stmt = Conexion::conectar()->prepare("INSERT INTO productos(codigo_producto,
                                                                                    // -- // -- // -- id_categoria_producto,
                                                                                    // -- // -- // -- descripcion_producto,
                                                                                    // -- // -- // -- precio_compra_producto,
                                                                                    // -- // -- // -- precio_venta_producto,
                                                                                    // -- // -- // -- utilidad,
                                                                                    // -- // -- // -- stock_producto,
                                                                                    // -- // -- // -- minimo_stock_producto,
                                                                                    // -- // -- // -- ventas_producto,
                                                                                    // -- // -- // -- fecha_actualizacion_producto)
                                                                            // -- // -- // -- values(:codigo_producto,
                                                                                    // -- // -- // -- :id_categoria_producto,
                                                                                    // -- // -- // -- :descripcion_producto,
                                                                                    // -- // -- // -- :precio_compra_producto,
                                                                                    // -- // -- // -- :precio_venta_producto,
                                                                                    // -- // -- // -- :utilidad,
                                                                                    // -- // -- // -- :stock_producto,
                                                                                    // -- // -- // -- :minimo_stock_producto,
                                                                                    // -- // -- // -- :ventas_producto,
                                                                                    // -- // -- // -- :fecha_actualizacion_producto);");
    // 
                        // $stmt->bindParam(":codigo_producto", $codigo_producto, PDO::PARAM_STR);
                        // $stmt->bindParam(":id_categoria_producto", $id_categoria_producto[0], PDO::PARAM_STR);
                        // $stmt->bindParam(":descripcion_producto", $descripcion_producto, PDO::PARAM_STR);
                        // $stmt->bindParam(":precio_compra_producto", $precio_compra_producto, PDO::PARAM_STR);
                        // $stmt->bindParam(":precio_venta_producto", $precio_venta_producto, PDO::PARAM_STR);
                        // $stmt->bindParam(":utilidad", $utilidad, PDO::PARAM_STR);
                        // $stmt->bindParam(":stock_producto", $stock_producto, PDO::PARAM_STR);
                        // $stmt->bindParam(":minimo_stock_producto", $minimo_stock_producto, PDO::PARAM_STR);
                        // $stmt->bindParam(":ventas_producto", $ventas_producto, PDO::PARAM_STR);
                        // $stmt->bindParam(":fecha_actualizacion_producto", $fecha_actualizacion_producto, PDO::PARAM_STR);
    // 
                        // if ($stmt->execute()) {
                            // $productosRegistrados = $productosRegistrados + 1;
                        // } else {
                            // $productosRegistrados = 0;
                        // }
                    // }
                // }
            // }
    // 
            // $respuesta["totalCategorias"] = $categoriasRegistradas;
            // $respuesta["totalProductos"] = $productosRegistrados;
    // 
            // return $respuesta;
}

    static public function mdlBuscarIdCategoria($nombreCategoria)
    {

        $stmt = Conexion::conectar()->prepare("select id_categoria from categorias where nombre_categoria = :nombreCategoria");
        $stmt->bindParam(":nombreCategoria", $nombreCategoria, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();
    }

    static public function mdlListarProductos()
    {

        $stmt = Conexion::conectar()->prepare('EXEC prc_ListarProductos');
        // $stmt = Conexion::conectar()->prepare('call prc_ListarProductos');

        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function mdlRegistrarProducto($PROD_Cod, $CLASE_Cod, $MAR_Cod, $FAM_Cod, $CLAP_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod, $ENV_Cod, $PROD_Dsc, $PROD_F_1, $PROD_F_2, $PROD_Peso, $PROD_VComision)
    {
        try {

            $TPR_Cod = "001";
            $ENV_CodFra = "001"; $ENVCOM_Cod = "001"; $PROD_PImpuesto = 18; $PROD_Gravado = 1; $PROD_CodBarras = "000000000000000000";
            $PROD_PDetraccion = 0; $PROD_TopeDetraccion = 0;
            $TPRECLI_PreProducto = 0; $TDCTCLI_PorDscto = 0; $TDCTCLI_Orden = 0;
            $SUCPRO_CPromedio = 0; $SUCPRO_CPromedio_ME = 0;
            $CKAR_Maximo = 0; $CKAR_Ideal = 0; $CKAR_Minimo = 0; $CKAR_Sld_Fisico = 0; $CKAR_Transito = 0; $CKAR_Reservado = 0;

            //             
            // REGISTRO DE TABLA AGRUPAMIENTO
             $stmt = Conexion::conectar()->query("SELECT COUNT(TPR_Cod) as Registros FROM Agrupamiento 
                    WHERE $TPR_Cod = TPR_Cod AND MAR_Cod = $MAR_Cod AND FAM_Cod = $FAM_Cod AND 
                          SEC_Cod = $SEC_Cod AND LNA_Cod = $LNA_Cod AND GRU_Cod = $GRU_Cod");

                if ($stmt->fetchColumn() == 0) {
                
                    $stmt = Conexion::conectar()->prepare("INSERT INTO Agrupamiento (TPR_Cod, MAR_Cod, FAM_Cod, SEC_Cod, LNA_Cod, GRU_Cod) Values (
                        :TPR_Cod, :MAR_Cod, :FAM_Cod, :SEC_Cod, :LNA_Cod, :GRU_Cod)");
    
                    $stmt->bindParam(":TPR_Cod", $TPR_Cod, PDO::PARAM_STR);
                    $stmt->bindParam(":MAR_Cod", $MAR_Cod, PDO::PARAM_STR);
                    $stmt->bindParam(":FAM_Cod", $FAM_Cod, PDO::PARAM_STR);
                    $stmt->bindParam(":SEC_Cod", $SEC_Cod, PDO::PARAM_STR);
                    $stmt->bindParam(":LNA_Cod", $LNA_Cod, PDO::PARAM_STR);
                    $stmt->bindParam(":GRU_Cod", $GRU_Cod, PDO::PARAM_STR);
                    
                    if ($stmt->execute()) {
                        $Resultado = "ok";
                    } else {
                        $Resultado = "error";
                    }                                                        
                    
                }

            // 
            // REGISTRO DEL PRODUCTO
             $stmt = Conexion::conectar()->prepare("INSERT INTO Producto (PROD_Cod, PROD_CodPadre, TPR_Cod, CLASE_Cod, MAR_Cod, 
                FAM_Cod, CLAP_Cod, SEC_Cod, LNA_Cod, GRU_Cod, ENV_Cod, ENV_CodFra, ENVCOM_Cod, PROD_Dsc, PROD_Dsc_Larga, 
                PROD_PImpuesto, PROD_F_1, PROD_F_2, PROD_Peso, PROD_VComision, PROD_Gravado, PROD_CodBarras, PROD_PDetraccion, PROD_TopeDetraccion) Values (
                :PROD_Cod, :PROD_CodPadre, :TPR_Cod, :CLASE_Cod, :MAR_Cod, 
                :FAM_Cod, :CLAP_Cod, :SEC_Cod, :LNA_Cod, :GRU_Cod, :ENV_Cod, :ENV_CodFra, :ENVCOM_Cod, :PROD_Dsc, :PROD_Dsc_Larga, 
                :PROD_PImpuesto, :PROD_F_1, :PROD_F_2, :PROD_Peso, :PROD_VComision, :PROD_Gravado, :PROD_CodBarras, :PROD_PDetraccion, :PROD_TopeDetraccion)");

                $stmt->bindParam(":PROD_Cod", $PROD_Cod, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_CodPadre", $PROD_Cod, PDO::PARAM_STR);
                $stmt->bindParam(":TPR_Cod", $TPR_Cod, PDO::PARAM_STR);                
                $stmt->bindParam(":CLASE_Cod", $CLASE_Cod, PDO::PARAM_STR);
                $stmt->bindParam(":MAR_Cod", $MAR_Cod, PDO::PARAM_STR);
                $stmt->bindParam(":FAM_Cod", $FAM_Cod, PDO::PARAM_STR);
                $stmt->bindParam(":CLAP_Cod", $CLAP_Cod, PDO::PARAM_STR);
                $stmt->bindParam(":SEC_Cod", $SEC_Cod, PDO::PARAM_STR);
                $stmt->bindParam(":LNA_Cod", $LNA_Cod, PDO::PARAM_STR);
                $stmt->bindParam(":GRU_Cod", $GRU_Cod, PDO::PARAM_STR);
                $stmt->bindParam(":ENV_Cod", $ENV_Cod, PDO::PARAM_STR);
                $stmt->bindParam(":ENV_CodFra", $ENV_CodFra, PDO::PARAM_STR);
                $stmt->bindParam(":ENVCOM_Cod", $ENVCOM_Cod, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_Dsc", $PROD_Dsc, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_Dsc_Larga", $PROD_Dsc, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_PImpuesto", $PROD_PImpuesto, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_F_1", $PROD_F_1, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_F_2", $PROD_F_2, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_Peso", $PROD_Peso, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_VComision", $PROD_VComision, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_Gravado", $PROD_Gravado, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_CodBarras", $PROD_CodBarras, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_PDetraccion", $PROD_PDetraccion, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_TopeDetraccion", $PROD_TopeDetraccion, PDO::PARAM_STR);

                if ($stmt->execute()) {
                    $Resultado = "ok";
                } else {
                    $Resultado = "error";
                }                                                        
            //
            // REGISTRO DE LOS PRECIOS
                $stmt = ("SELECT DISTINCT tpcp.SUC_Cod, tpcp.TCLI_Cod, tpcp.TPRE_Cod
                    FROM Tipos_Cliente tc INNER JOIN Tip_Pre_Cli_Pro tpcp ON tc.TCLI_Cod = tpcp.TCLI_Cod 
                    INNER JOIN Tipos_Precio tp ON tpcp.TPRE_Cod = tp.TPRE_Cod INNER JOIN Sucursales sc ON tpcp.SUC_Cod = sc.SUC_Cod 
                    ORDER BY SUC_Cod, TCLI_Cod, TPRE_Cod");

                    foreach (Conexion::conectar()->query($stmt) as $row) {

                        $stmt = Conexion::conectar()->prepare("INSERT INTO Tip_Pre_Cli_Pro (SUC_Cod, TCLI_Cod, PROD_Cod, TPRE_Cod, TPRECLI_PreProducto) 
                            Values (:SUC_Cod, :TCLI_Cod, :PROD_Cod, :TPRE_Cod, :TPRECLI_PreProducto)");

                        $stmt->bindParam(":SUC_Cod", $row['SUC_Cod'], PDO::PARAM_STR);
                        $stmt->bindParam(":TCLI_Cod", $row['TCLI_Cod'], PDO::PARAM_STR);
                        $stmt->bindParam(":PROD_Cod", $PROD_Cod, PDO::PARAM_STR);
                        $stmt->bindParam(":TPRE_Cod", $row['TPRE_Cod'], PDO::PARAM_STR);
                        $stmt->bindParam(":TPRECLI_PreProducto", $TPRECLI_PreProducto, PDO::PARAM_STR);

                        if ($stmt->execute()) {
                            $Resultado = "ok";
                        } else {
                            $Resultado = "error";
                        }                                                        
                    };
            //
            // REGISTRO DE LOS DESCUENTOS
            //
            //
            
            $stmt = ("SELECT DISTINCT tdc.SUC_Cod, tdc.TCLI_Cod, tdc.TDSCTO_Cod 
                FROM Tipos_Cliente tc INNER JOIN Tipos_Dsctos_Cliente tdc ON tc.TCLI_Cod = tdc.TCLI_Cod 
                INNER JOIN Tipo_Descuento td ON tdc.TDSCTO_Cod = td.TDSCTO_Cod INNER JOIN Sucursales sc ON tdc.SUC_Cod = sc.SUC_Cod 
                ORDER BY SUC_Cod, TCLI_Cod, TDSCTO_Cod");

                foreach (Conexion::conectar()->query($stmt) as $row) {
                
                    $stmt = Conexion::conectar()->prepare("INSERT INTO Tipos_Dsctos_Cliente (SUC_Cod, TCLI_Cod, PROD_Cod, TDSCTO_Cod, TDCTCLI_Orden, TDCTCLI_PorDscto) 
                        Values (:SUC_Cod, :TCLI_Cod, :PROD_Cod, :TDSCTO_Cod, :TDCTCLI_Orden, :TDCTCLI_PorDscto)");
    
                    $stmt->bindParam(":SUC_Cod", $row['SUC_Cod'], PDO::PARAM_STR);
                    $stmt->bindParam(":TCLI_Cod", $row['TCLI_Cod'], PDO::PARAM_STR);
                    $stmt->bindParam(":PROD_Cod", $PROD_Cod, PDO::PARAM_STR);
                    $stmt->bindParam(":TDSCTO_Cod", $row['TDSCTO_Cod'], PDO::PARAM_STR);
                    $stmt->bindParam(":TDCTCLI_Orden", $TDCTCLI_Orden, PDO::PARAM_STR);                    
                    $stmt->bindParam(":TDCTCLI_PorDscto", $TDCTCLI_PorDscto, PDO::PARAM_STR);
                
                    if ($stmt->execute()) {
                        $Resultado = "ok";
                    } else {
                        $Resultado = "error";
                    }                                                        
                }

            //
            // REGISTRO DE SUCURSAL PRODUCTO POR COSTO PROMEDIO

             $stmt = ("SELECT DISTINCT SUC_Cod FROM Sucursal_Producto");

                foreach (Conexion::conectar()->query($stmt) as $row) {
                
                    $stmt = Conexion::conectar()->prepare("INSERT INTO Sucursal_Producto (SUC_Cod, PROD_Cod, SUCPRO_CPromedio, SUCPRO_CPromedio_ME) 
                        Values (:SUC_Cod, :PROD_Cod, :SUCPRO_CPromedio, :SUCPRO_CPromedio_ME)");
    
                    $stmt->bindParam(":SUC_Cod", $row['SUC_Cod'], PDO::PARAM_STR);
                    $stmt->bindParam(":PROD_Cod", $PROD_Cod, PDO::PARAM_STR);
                    $stmt->bindParam(":SUCPRO_CPromedio", $SUCPRO_CPromedio, PDO::PARAM_STR);
                    $stmt->bindParam(":SUCPRO_CPromedio_ME", $SUCPRO_CPromedio_ME, PDO::PARAM_STR);
                
                    if ($stmt->execute()) {
                        $Resultado = "ok";
                    } else {
                        $Resultado = "error";
                    }                                                        
                }

            //
            // REGISTRO DE KARDEX CABECERA

             $stmt = ("SELECT DISTINCT SUC_Cod, ALM_Cod, ZALM_Cod, DZALM_Cod FROM Kardex_Cabecera ORDER BY SUC_Cod, ALM_Cod, ZALM_Cod, DZALM_Cod");

                foreach (Conexion::conectar()->query($stmt) as $row) {
                
                    $stmt = Conexion::conectar()->prepare("INSERT INTO Kardex_Cabecera (SUC_Cod, ALM_Cod, PROD_Cod, ZALM_Cod, DZALM_Cod, 
                        CKAR_Maximo, CKAR_Ideal, CKAR_Minimo, CKAR_Sld_Fisico, CKAR_Transito, CKAR_Reservado) 
                        Values (:SUC_Cod, :ALM_Cod, :PROD_Cod, :ZALM_Cod, :DZALM_Cod, 
                        :CKAR_Maximo, :CKAR_Ideal, :CKAR_Minimo, :CKAR_Sld_Fisico, :CKAR_Transito, :CKAR_Reservado )");
    
                    $stmt->bindParam(":SUC_Cod", $row['SUC_Cod'], PDO::PARAM_STR);
                    $stmt->bindParam(":ALM_Cod", $row['ALM_Cod'], PDO::PARAM_STR);
                    $stmt->bindParam(":PROD_Cod", $PROD_Cod, PDO::PARAM_STR);
                    $stmt->bindParam(":ZALM_Cod", $row['ZALM_Cod'], PDO::PARAM_STR);
                    $stmt->bindParam(":DZALM_Cod", $row['DZALM_Cod'], PDO::PARAM_STR);
                    $stmt->bindParam(":CKAR_Maximo", $CKAR_Maximo, PDO::PARAM_STR);
                    $stmt->bindParam(":CKAR_Ideal", $CKAR_Ideal, PDO::PARAM_STR);
                    $stmt->bindParam(":CKAR_Minimo", $CKAR_Minimo, PDO::PARAM_STR);
                    $stmt->bindParam(":CKAR_Sld_Fisico", $CKAR_Sld_Fisico, PDO::PARAM_STR);
                    $stmt->bindParam(":CKAR_Transito", $CKAR_Transito, PDO::PARAM_STR);
                    $stmt->bindParam(":CKAR_Reservado", $CKAR_Reservado, PDO::PARAM_STR);
                
                    if ($stmt->execute()) {
                        $Resultado = "ok";
                    } else {
                        $Resultado = "error";
                    }
                }

            }catch (Exception $e) {
            $Resultado = 'Excepción Capturada '. $e->getMessage(). "\n";
        }
        return $Resultado;
        $stmt = null;
    }

    static public function mdlEditarProducto($PROD_Cod)
    {
        $stmt = Conexion::conectar()->prepare("SELECT PROD_Cod, CLASE_Cod, MAR_Cod, FAM_Cod, CLAP_Cod, SEC_Cod, LNA_Cod, GRU_Cod, ENV_Cod, PROD_Dsc, 
                PROD_F_1, PROD_F_2, PROD_Peso, PROD_VComision FROM Producto WHERE PROD_Cod =  :PROD_Cod");
        $stmt->bindParam(":PROD_Cod", $PROD_Cod, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();
    }

    static public function mdlActualizarInformacion($table, $data, $id, $nameId, $MAR_Cod, $FAM_Cod, $SEC_Cod, $LNA_Cod, $GRU_Cod)
    {
     try {

        $TPR_Cod = "001";

        // REGISTRO DE TABLA AGRUPAMIENTO
         $stmt1 = Conexion::conectar()->query("SELECT COUNT(TPR_Cod) as Registros FROM Agrupamiento 
                 WHERE $TPR_Cod = TPR_Cod AND MAR_Cod = $MAR_Cod AND FAM_Cod = $FAM_Cod AND 
                 SEC_Cod = $SEC_Cod AND LNA_Cod = $LNA_Cod AND GRU_Cod = $GRU_Cod");

        if ($stmt1->fetchColumn() == 0) {
        
            $stmt1 = Conexion::conectar()->prepare("INSERT INTO Agrupamiento (TPR_Cod, MAR_Cod, FAM_Cod, SEC_Cod, LNA_Cod, GRU_Cod) Values (
                    :TPR_Cod, :MAR_Cod, :FAM_Cod, :SEC_Cod, :LNA_Cod, :GRU_Cod)");

            $stmt1->bindParam(":TPR_Cod", $TPR_Cod, PDO::PARAM_STR);
            $stmt1->bindParam(":MAR_Cod", $MAR_Cod, PDO::PARAM_STR);
            $stmt1->bindParam(":FAM_Cod", $FAM_Cod, PDO::PARAM_STR);
            $stmt1->bindParam(":SEC_Cod", $SEC_Cod, PDO::PARAM_STR);
            $stmt1->bindParam(":LNA_Cod", $LNA_Cod, PDO::PARAM_STR);
            $stmt1->bindParam(":GRU_Cod", $GRU_Cod, PDO::PARAM_STR);
            
            if ($stmt1->execute()) {
                $Resultado = "ok1";
            } else {
                $Resultado = "error1";
            }
        }

        $set = "";
        foreach ($data as $key => $value) {
            $set .= $key." = :".$key.",";
        }
        $set = substr($set, 0, -1);
    
        $stmt = Conexion::conectar()->prepare("UPDATE $table SET $set WHERE $nameId = :$nameId");
    
        foreach ($data as $key => $value) {
            $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
        }
    
        $stmt->bindParam(":".$nameId, $id, PDO::PARAM_INT);
    
        if ($stmt->execute()) {
            $Resultado = "ok";
        } else {
            $Resultado = "error";
        }

        }catch (Exception $e) {
            $Resultado = 'Excepción Capturada '. $e->getMessage(). "\n";
        }
        return $Resultado;
        $stmt = null;
    }

    static public function mdlEliminarInformacion($table, $id, $nameId)
    {
     try {        
        $stmt = Conexion::conectar()->prepare("UPDATE $table SET PROD_Bloqueo = 1 WHERE $nameId = :$nameId");

        $stmt->bindParam(":".$nameId, $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            $Resultado = "ok";
        } else {
            $Resultado = "error";
        }

        }catch (Exception $e) {
            $Resultado = 'Excepción Capturada '. $e->getMessage(). "\n";
        }
        return $Resultado;
        $stmt = null;        
    }
}