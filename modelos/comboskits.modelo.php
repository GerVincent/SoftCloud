<?php

require_once "conexion.php";

class ComboKitModelo
{
   static public function mdlListarComboKit()
    {
        $stmt = Conexion::conectar()->prepare('EXEC prc_ListarComboKits');
        $stmt->execute();

        return $stmt->fetchAll();
        $stmt = null;
    }

   static public function mdlRegistrarComboKit($data)
    {
        try {
            $ENV_Cod = "005"; $PROD_CodBarras = "000000000000000000"; $PROD_FacUnidades = 1; $PROD_Paquete = 1;  $TPRECLI_PreProducto = 0; 
            $TDCTCLI_PorDscto = 0; $TDCTCLI_Orden = 0;  $SUCPRO_CPromedio = 0; $SUCPRO_CPromedio_ME = 0; $CKAR_Maximo = 0;
            $CKAR_Ideal = 0; $CKAR_Minimo = 0; $CKAR_Sld_Fisico = 0; $CKAR_Transito = 0; $CKAR_Reservado = 0;
            //
            // RECUPERAR EL NRO. DE PAQUETES CREADOS SEGUN CODIGO PADRE
            //
            $stmt = Conexion::conectar()->prepare("SELECT COUNT(DISTINCT PROD_Cod) AS NROPQT FROM Productos_Paquetes WHERE CHARINDEX(:PROD_Cod , PROD_Cod) > 0");
            $stmt->bindParam(":PROD_Cod", $data[1], PDO::PARAM_STR);
            $stmt->execute();
            $nropqt = $stmt->fetchAll();
            $PROD_CodPqt =  $data[1].'.'.($nropqt[0][0]+1);
            //
            // RECUPERAR INFORMACION DEL CODIGO PADRE PARA CREAR EL CODIGO DE PAQUETE
            //
            $stmt = Conexion::conectar()->prepare("SELECT * FROM Producto WHERE PROD_Cod = :PROD_Cod");
            $stmt->bindParam(":PROD_Cod", $data[1], PDO::PARAM_STR);
            $stmt->execute();

            $PROD_CodPadre = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $PROD_Dsc =  'PAQUETE: '.$PROD_CodPadre[0]['PROD_Dsc'];
            //
            // REGISTRO DEL PRODUCTO
            //
            $stmt = Conexion::conectar()->prepare("INSERT INTO Producto (PROD_Cod, PROD_CodPadre, TPR_Cod, CLASE_Cod, MAR_Cod, FAM_Cod, 
                CLAP_Cod, SEC_Cod, LNA_Cod, GRU_Cod, ENV_Cod, ENV_CodFra, ENVCOM_Cod, PROD_Dsc, PROD_Dsc_Larga, PROD_PImpuesto, PROD_F_1, 
                PROD_F_2, PROD_Peso, PROD_VComision, PROD_Gravado, PROD_FacUnidades, PROD_Paquete, PROD_CodBarras, PROD_PDetraccion, PROD_TopeDetraccion) 
                Values (:PROD_Cod, :PROD_CodPadre, :TPR_Cod, :CLASE_Cod, :MAR_Cod, :FAM_Cod, :CLAP_Cod, :SEC_Cod, :LNA_Cod, :GRU_Cod, :ENV_Cod,
                :ENV_CodFra, :ENVCOM_Cod, :PROD_Dsc, :PROD_Dsc_Larga, :PROD_PImpuesto, :PROD_F_1, :PROD_F_2, :PROD_Peso, :PROD_VComision,
                :PROD_Gravado, :PROD_FacUnidades, :PROD_Paquete, :PROD_CodBarras, :PROD_PDetraccion, :PROD_TopeDetraccion)");

                $stmt->bindParam(":PROD_Cod",$PROD_CodPqt, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_CodPadre", $PROD_CodPadre[0]['PROD_Cod'], PDO::PARAM_STR);
                $stmt->bindParam(":TPR_Cod", $PROD_CodPadre[0]['TPR_Cod'], PDO::PARAM_STR);                
                $stmt->bindParam(":CLASE_Cod", $PROD_CodPadre[0]['CLASE_Cod'], PDO::PARAM_STR);
                $stmt->bindParam(":MAR_Cod", $PROD_CodPadre[0]['MAR_Cod'], PDO::PARAM_STR);
                $stmt->bindParam(":FAM_Cod", $PROD_CodPadre[0]['FAM_Cod'], PDO::PARAM_STR);
                $stmt->bindParam(":CLAP_Cod", $PROD_CodPadre[0]['CLAP_Cod'], PDO::PARAM_STR);
                $stmt->bindParam(":SEC_Cod", $PROD_CodPadre[0]['SEC_Cod'], PDO::PARAM_STR);
                $stmt->bindParam(":LNA_Cod", $PROD_CodPadre[0]['LNA_Cod'], PDO::PARAM_STR);
                $stmt->bindParam(":GRU_Cod", $PROD_CodPadre[0]['GRU_Cod'], PDO::PARAM_STR);
                $stmt->bindParam(":ENV_Cod", $ENV_Cod , PDO::PARAM_STR);
                $stmt->bindParam(":ENV_CodFra", $PROD_CodPadre[0]['ENV_CodFra'], PDO::PARAM_STR);
                $stmt->bindParam(":ENVCOM_Cod", $PROD_CodPadre[0]['ENVCOM_Cod'], PDO::PARAM_STR);
                $stmt->bindParam(":PROD_Dsc", $PROD_Dsc, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_Dsc_Larga", $PROD_Dsc, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_PImpuesto", $PROD_CodPadre[0]['PROD_PImpuesto'], PDO::PARAM_STR);
                $stmt->bindParam(":PROD_F_1", $PROD_CodPadre[0]['PROD_F_1'], PDO::PARAM_STR);
                $stmt->bindParam(":PROD_F_2", $PROD_CodPadre[0]['PROD_F_2'], PDO::PARAM_STR);
                $stmt->bindParam(":PROD_Peso", $PROD_CodPadre[0]['PROD_Peso'], PDO::PARAM_STR);
                $stmt->bindParam(":PROD_VComision", $PROD_CodPadre[0]['PROD_VComision'], PDO::PARAM_STR);
                $stmt->bindParam(":PROD_Gravado", $PROD_CodPadre[0]['PROD_Gravado'], PDO::PARAM_STR);
                $stmt->bindParam(":PROD_CodBarras", $PROD_CodBarras , PDO::PARAM_STR);
                $stmt->bindParam(":PROD_FacUnidades", $PROD_FacUnidades , PDO::PARAM_STR);                
                $stmt->bindParam(":PROD_Paquete", $PROD_Paquete , PDO::PARAM_STR);
                $stmt->bindParam(":PROD_PDetraccion", $PROD_CodPadre[0]['PROD_PDetraccion'], PDO::PARAM_STR);
                $stmt->bindParam(":PROD_TopeDetraccion", $PROD_CodPadre[0]['PROD_TopeDetraccion'], PDO::PARAM_STR);

                if ($stmt->execute()) {
                    $Resultado = "ok";
                } else {
                    $Resultado = "error";
                }
            //
            // REGISTRO DE COMPONENTES DEL PAQUETE
            //
             $contador = 0;
             while ($contador < count($data)) {

                $stmt = Conexion::conectar()->prepare("INSERT INTO Productos_Paquetes (PROD_Cod, PROD_Item, PROD_CodHijo, PROD_CantidadHijo) 
                Values (:PROD_Cod, :PROD_Item, :PROD_CodHijo, :PROD_CantidadHijo)");

                $stmt->bindParam(":PROD_Cod", $PROD_CodPqt, PDO::PARAM_STR);
                $stmt->bindParam(":PROD_Item", $data[$contador], PDO::PARAM_STR);
                $stmt->bindParam(":PROD_CodHijo", $data[$contador+1], PDO::PARAM_STR);
                $stmt->bindParam(":PROD_CantidadHijo", $data[$contador+2], PDO::PARAM_STR);
                $contador = $contador + 3;

                if ($stmt->execute()) {
                    $Resultado = "ok";
                } else {
                    $Resultado = "error";
                }
             };
            //
            // REGISTRO DE LOS PRECIOS
            //
                $stmt = ("SELECT DISTINCT tpcp.SUC_Cod, tpcp.TCLI_Cod, tpcp.TPRE_Cod
                    FROM Tipos_Cliente tc INNER JOIN Tip_Pre_Cli_Pro tpcp ON tc.TCLI_Cod = tpcp.TCLI_Cod 
                    INNER JOIN Tipos_Precio tp ON tpcp.TPRE_Cod = tp.TPRE_Cod INNER JOIN Sucursales sc ON tpcp.SUC_Cod = sc.SUC_Cod 
                    ORDER BY SUC_Cod, TCLI_Cod, TPRE_Cod");

                    foreach (Conexion::conectar()->query($stmt) as $row) {

                        $stmt = Conexion::conectar()->prepare("INSERT INTO Tip_Pre_Cli_Pro (SUC_Cod, TCLI_Cod, PROD_Cod, TPRE_Cod, TPRECLI_PreProducto) 
                            Values (:SUC_Cod, :TCLI_Cod, :PROD_Cod, :TPRE_Cod, :TPRECLI_PreProducto)");

                        $stmt->bindParam(":SUC_Cod", $row['SUC_Cod'], PDO::PARAM_STR);
                        $stmt->bindParam(":TCLI_Cod", $row['TCLI_Cod'], PDO::PARAM_STR);
                        $stmt->bindParam(":PROD_Cod", $PROD_CodPqt, PDO::PARAM_STR);
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
             $stmt = ("SELECT DISTINCT tdc.SUC_Cod, tdc.TCLI_Cod, tdc.TDSCTO_Cod 
                FROM Tipos_Cliente tc INNER JOIN Tipos_Dsctos_Cliente tdc ON tc.TCLI_Cod = tdc.TCLI_Cod 
                INNER JOIN Tipo_Descuento td ON tdc.TDSCTO_Cod = td.TDSCTO_Cod INNER JOIN Sucursales sc ON tdc.SUC_Cod = sc.SUC_Cod 
                ORDER BY SUC_Cod, TCLI_Cod, TDSCTO_Cod");

                foreach (Conexion::conectar()->query($stmt) as $row) {
                
                    $stmt = Conexion::conectar()->prepare("INSERT INTO Tipos_Dsctos_Cliente (SUC_Cod, TCLI_Cod, PROD_Cod, TDSCTO_Cod, TDCTCLI_Orden, TDCTCLI_PorDscto) 
                        Values (:SUC_Cod, :TCLI_Cod, :PROD_Cod, :TDSCTO_Cod, :TDCTCLI_Orden, :TDCTCLI_PorDscto)");
    
                    $stmt->bindParam(":SUC_Cod", $row['SUC_Cod'], PDO::PARAM_STR);
                    $stmt->bindParam(":TCLI_Cod", $row['TCLI_Cod'], PDO::PARAM_STR);
                    $stmt->bindParam(":PROD_Cod", $PROD_CodPqt, PDO::PARAM_STR);
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
            //
             $stmt = ("SELECT DISTINCT SUC_Cod FROM Sucursal_Producto");

                foreach (Conexion::conectar()->query($stmt) as $row) {
                
                    $stmt = Conexion::conectar()->prepare("INSERT INTO Sucursal_Producto (SUC_Cod, PROD_Cod, SUCPRO_CPromedio, SUCPRO_CPromedio_ME) 
                        Values (:SUC_Cod, :PROD_Cod, :SUCPRO_CPromedio, :SUCPRO_CPromedio_ME)");
    
                    $stmt->bindParam(":SUC_Cod", $row['SUC_Cod'], PDO::PARAM_STR);
                    $stmt->bindParam(":PROD_Cod", $PROD_CodPqt, PDO::PARAM_STR);
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
            //
             $stmt = ("SELECT DISTINCT SUC_Cod, ALM_Cod, ZALM_Cod, DZALM_Cod FROM Kardex_Cabecera ORDER BY SUC_Cod, ALM_Cod, ZALM_Cod, DZALM_Cod");

                foreach (Conexion::conectar()->query($stmt) as $row) {
                
                    $stmt = Conexion::conectar()->prepare("INSERT INTO Kardex_Cabecera (SUC_Cod, ALM_Cod, PROD_Cod, ZALM_Cod, DZALM_Cod, 
                        CKAR_Maximo, CKAR_Ideal, CKAR_Minimo, CKAR_Sld_Fisico, CKAR_Transito, CKAR_Reservado) 
                        Values (:SUC_Cod, :ALM_Cod, :PROD_Cod, :ZALM_Cod, :DZALM_Cod, 
                        :CKAR_Maximo, :CKAR_Ideal, :CKAR_Minimo, :CKAR_Sld_Fisico, :CKAR_Transito, :CKAR_Reservado )");
    
                    $stmt->bindParam(":SUC_Cod", $row['SUC_Cod'], PDO::PARAM_STR);
                    $stmt->bindParam(":ALM_Cod", $row['ALM_Cod'], PDO::PARAM_STR);
                    $stmt->bindParam(":PROD_Cod", $PROD_CodPqt, PDO::PARAM_STR);
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

    static public function mdlEditarComboKit()
    {
        $stmt = Conexion::conectar()->prepare("SELECT PROD_Cod, PROD_Cod+' - '+PROD_Dsc As Dsc FROM Producto 
        WHERE PROD_Paquete = 0 AND (CLASE_Cod = '001' OR CLASE_Cod = '003')");
        $stmt->execute();
        
        return $stmt->fetchAll();
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

    static public function mdlDevuelvePqtCreados($PROD_Cod)
    {
        $stmt = Conexion::conectar()->prepare("SELECT COUNT(DISTINCT PROD_Cod) FROM Productos_Paquetes WHERE CHARINDEX($PROD_Cod , PROD_Cod) > 0");
        $stmt->bindParam(":PROD_Cod", $PROD_Cod, PDO::PARAM_STR);
    
        $stmt->execute();
    
        return $stmt->fetch();
    }

}