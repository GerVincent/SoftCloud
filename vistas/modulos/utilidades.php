<script>
function consulta($tipo,$ruta,$idhtml,$sql,$tabla,$id,$codid,$nameid) {
    if ($tipo == 1){
        var datos = new FormData();
        datos.append("tipo",$tipo);
        datos.append("table",$tabla);
        datos.append("id",$id);
        datos.append("codid",$codid);    
        datos.append("nameid",$nameid);
        $.ajax({
            url: "ajax/"+$ruta+".ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                options = ""
                for (let index = 0; index < respuesta.length; index++) {
                    if (respuesta[index][0] == $id) {
                        options = options + '<option value=' + respuesta[index][0] + ' selected="selected">' + respuesta[index][1] + '</option>';
                    } else {
                        options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                    }
                }
                $("#"+$idhtml).html(options);
            }
        });
    } else if ($tipo == 2 || $tipo == 3){
        wmRespuesta = [];
        var datos = new FormData();
        datos.append("tipo",$tipo);
        datos.append("sql",$sql);
        $.ajax({
            url: "ajax/"+$ruta+".ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(respuesta) {
                if ($tipo == 2){
                    for ( index = 0 ; index < respuesta[0].length; index++) {
                        wmRespuesta.push(respuesta[0][index])
                    }
                    // consola.log("typeof",typeof respuesta[0][3]);
                    var num = Number(respuesta[0][3]);
                    $("#"+$idhtml).val(num);
                };
            }
        });
        if ($tipo == 3){
            return "ok"
        }
    }
}
</script>