<html>
    <head>
        <?php include 'conn.php';?>
        <title>Actualizar Calendario | Backend</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <script src="js/jquery-1.10.2.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css.map" rel="stylesheet">
        <style>
            body
            {
                background-color: #ededed;
            }
            
            button:focus {outline:0 !important;}
            
            #wrapper
            {
                position: absolute;
                top: 10px;
                left: 1%;
                right: 1%;
                height: 680px;
                margin-bottom: 20px;
                background-color: white;
                border-bottom: 1px solid #E3E3E3;   
            }
            
            #be_header
            {
                position: absolute;
                top: 0px;
                height: 59px;
                width: 100%;
                box-shadow: rgba(0,0,0,0.3) 0 2px 5px;
                border: 1px solid #5A7F97;
                color: white;
            }
            
            .gradient
            {
                background-image: -webkit-linear-gradient(#8AA5B7, #7393A9);
                background-image: linear-gradient(#8AA5B7, #7393A9);
                background-image: -o-linear-gradient(#8AA5B7, #7393A9);
                background-image: -ms-linear-gradient(#8AA5B7, #7393A9);
                background-image: -moz-linear-gradient(#8AA5B7, #7393A9);
                background-image: -webkit-linear-gradient(#8AA5B7, #7393A9);
            }
            
            .be_img_content
            {
                position: absolute;
                top: 75px;
                left: 20px;
                width: 100px;
            }
            
            #be_title
            {
                position: absolute;
                left: 130px;
                right: 2%;
                top: 75px;
                font-size: 21px;
                font-family: "Lucida Grande", Arial, Helvetica, Verdana, sans-serif;
                padding-bottom: 5px;
                color: black;
                font-weight: bolder;
            }
            
            #upd_options
            {
                position: absolute;
                left: 130px;
                top: 115px;
            }
            
            .bst_button
            {
                float: left;
                margin-right: 8px;
                background-color: #2D2D2D;
                border: none;
                color: white;
                font-size: 15px;
                border-radius: 6px;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 5px;
                padding-right: 5px;   
            }
            
            .glyphicon
            {
                padding-right: 5px;
            }
            
            .bst_button:hover
            {
                background-image: linear-gradient(#283A49, #2F4456);
                background-image: -o-linear-gradient(#283A49, #2F4456);
                background-image: -ms-linear-gradient(#283A49, #2F4456);
                background-image: -moz-linear-gradient(#283A49, #2F4456);
                background-image: -webkit-linear-gradient(#283A49, #2F4456);
            }
               
            .formwrapper
            {
                position: absolute;
                top: 200px;
                left: 20px;
                right: 36%;
                height: 450px;
                border-right: 1px solid #ccc;
            }
            
            #rightmenu
            {
                position: absolute;
                top: 250px;
                left: 74%;
                font-family: "Lucida Grande", Arial, Helvetica, Verdana, sans-serif;
                font-size: 18px;
                font-weight: bolder;
            }
            
            .formson
            {
                display: none;
                overflow-y: auto;
                height: 100%;
            }
            
            .form_title
            {
                font-family: "Lucida Grande", Arial, Helvetica, Verdana, sans-serif;
                font-size: 20px;
                margin-bottom: 30px;
                font-weight: bolder;
            }
            
            .form-control
            {
                margin-bottom: 10px;
                width: 95%;
            }
            
            .form_button
            {
                background-color: #2D2D2D;
                border: none;
                color: white;
                font-size: 15px;
                border-radius: 6px;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 5px;
                padding-right: 5px;
                float: left;
                margin-right: 10px;
            }
            
            .showerror
            {
                position: absolute;
                top: 25px;
                padding-top: 4px;
                padding-bottom: 4px;
                width: 95%;
                display: none;
                padding-left: 10px;
                color: black;
            }
            
            #error_div
            {
                border: 1px solid #FF7777;
                background-color: #FF9999;
            }
            
            #ok_div
            {
                border: 1px solid #77FF77;
                background-color: rgb(117, 252, 106);
            }
            
            .small_spinner
            {
                background-image:url("img/small_spinner.gif");
                height: 32px;
                width: 32px;
                position: absolute;
                left: 120px;
                display: none;
            }
                        
            .upg_name
            {
                float: left;
                width: 70%;
                padding-top: 5px;
                padding-left: 15px;
                padding-right: 10px;
                padding-bottom: 5px;
                font-weight: bolder;
            }
            
            .upg_button
            {
                float: left;
                width: 30%;
                padding-top: 5px;
                padding-left: 5px;
                padding-right: 5px;
                padding-bottom: 5px;
            }
            
            
            .label_show
            {
                background-color: #5391c1;
                float: left;
                font-size: 11px;
                color: white;
                font-weight: bolder;
                border-radius: 5px;
                margin-right: 10px;
                margin-bottom: 5px;
            }
            
            .label_name
            {
                float: left;
                padding-top: 5px;
                padding-right: 6px;
                padding-left: 10px;
                padding-bottom: 5px;
            }
            
            .label_close
            {
                float: left;
                padding-right: 10px;
                padding-left: 6px;
                padding-top: 5px;
                padding-bottom: 5px;
                cursor: pointer;
                text-align: center;
            }
                        
            #button_upg_shows
            {
                position: absolute;
                top: 220px;
                left: 0px;
            }
            
            #spinner_upg
            {
                top: 220px;
                margin-left: 50px;
            }
            
            .disabled
            {
                background: none repeat scroll 0 0 burlyWood;
                cursor: default !important;
            } 
            
            .tepisodes
            {
                width: 95%;
                border: 1px solid #ccc;
            }
            
            .tep_header
            {
                color: white;
                height: 30px;
                font-weight: bolder;
                text-align: center;
            }
            
            .sonepisodes
            {
                font-size: 11px;
                height: 35px;
                border: 1px solid #8d8a8a;
                text-align: center;
            }
            
            tr:nth-child(even) {background: #CCC }
            
            .dateinput
            {
                width: 20px;
                margin-right: 5px;
                margin-left: 5px;
            }
            
            .dateinputy
            {
                width: 40px;
            }
            
            .delepisode
            {
                font-weight: bolder;
                color: red;
                font-size: 14px;
                text-align: center;
                cursor: pointer;
            }
        </style>
        <script>
            $(document).ready(function(){
                //Al hacer clic en uno de los botones superiores
                $(".bst_button").click(function(){
                    //id del div en cuestión
                    var id = $(this).attr('id');
                    //esconde mensajes de errores
                    $(".showerror").hide();
                    //reinicia formularios
                    $(".form-control").val('');
                    //esconde todos los formularios
                    $(".formson").hide();
                    //muestra solo el que interesa
                    $("#form_"+id).show();
                    $( "#label_container" ).empty();
                    $("#episodes_container").hide();
                });
                
                //Clic en botón inferior Añadir serie
                $("#button_addnewshow").click(function(){
                    //comprueba valores formulario
                    var v_idsubs=$("#idsubs").val();
                    var v_imdb=$("#imdb").val();
                    var v_showname=$("#showname").val();
                    var v_season=$("#currentseason").val();
                    //esconde mensajes error
                    $(".showerror").hide();
                    
                    //si valores no están vacíos, AJAX para añadir serie a BDD
                    if (v_idsubs !="" && v_imdb !="" && v_showname !="" && v_season)
                    {    
                        $.ajax({
                            data:  { idsubs: v_idsubs, imdb: v_imdb, show: v_showname, season: v_season },
                            url:   'php/addshow.php',
                            type:  'get',
                            beforeSend: function()
                            {
                                Disable(); //impide pulsar otra vez el botón y generar otra petición
                            },
                            success:  function (response){
                                Enable(); //deja pulsar otra vez
                                var toprint="";
                                response=parseInt(response);
                                //mensaje a mostrar dependiendo del error
                                switch(response)
                                {
                                        case 1: toprint="El código que has puesto no es numérico";
                                        break;
                                        case 2: toprint="Formato incorrecto del código IMDB";
                                        break;
                                        case 3: toprint="El nombre de la serie debe tener al menos dos caracteres";
                                        break;
                                        case 4: toprint="'Temporada' no es un número";
                                        break;
                                        case 5: toprint="El código de la serie ya está en uso";
                                        break;
                                        case 6: toprint="El código IMDB ya está en uso";
                                        break;
                                        case 7: toprint="Ya hay una serie con el mismo nombre";
                                        break;
                                        case 8: toprint="Error en la inserción en la base de datos";
                                        break;
                                        case 9: toprint="Se ha añadido la serie correctamente. Episodios actualizados";
                                        break;
                                        default: toprint=response;
                                }
                                
                                //si se ha añadido correctamente
                                if (response==9)
                                {
                                    $("#ok_div").html(toprint);
                                    $("#ok_div").show();
                                    $(".form-control").val(''); //reinicia formulario
                                }
                                
                                else
                                {
                                    $("#error_div").html(toprint);
                                    $("#error_div").show();    
                                }
                            }
                        });
                    }
                    
                    //si campos formulario no están todos llenos
                    else
                    {
                        $("#error_div").html("Campos vacíos");
                        $("#error_div").show();
                    }
                });
                
                //Al seleccionar una serie en Modificar serie
                $("#show-list").change(function(){
                    var show=$("#show-list").val();
                    //devuelve valores actuales de dicha serie
                    $.ajax({
                            data:  { action: 1, show: show },
                            dataType: "json",
                            url:   'php/changeshow.php',
                            type:  'get',
                            success:  function (response){
                                $("#refresh-name").val(response[0]);
                                $("#refresh-season").val(response[1]);
                            }
                    });            
                });
                
                //Clic botón inferior en Modificar serie
                $("#button_changeshowinfo").click(function(){
                    //nuevos valores del formulario, por defecto valores anteriores
                    var show=$("#show-list").val();
                    var name=$("#refresh-name").val();
                    var season=$("#refresh-season").val();
                    
                    if (name!="" && season!="")
                    {
                        //AJAX para cambiar valores en BDD
                        $.ajax({
                            data:  { action: 2, show: show, name: name, season: season },
                            url:   'php/changeshow.php',
                            type:  'get',
                            success:  function (response){
                                if (response=="1")
                                {
                                    $("#ok_div").html("Cambios realizados correctamente");
                                    $("#ok_div").show();
                                }
                                else
                                {
                                    $("#error_div").html("No se han realizado los cambios");
                                    $("#error_div").show();
                                }
                            }
                        });
                    }    
                });
                
                //por defecto, muestra formulario de Añadir serie
                $("#form_addshow").show();
                
                //al cambiar select de Actualizar serie específica
                $("#show-list-upg").change(function() {
                //copiado de StackOverflow xD impide que haya más de 5 opciones marcadas en el select
                var count = 0;
    
                for (var i = 0; i < this.options.length; i++)
                {
                    var option = this.options[i];
        
                    option.selected ? count++ : null;
        
                    if (count > 5)
                    {
                        option.selected = false;
                        option.disabled = true;
                    }
                }

                //selecciona todos los valores seleccionados y
                var val = [];
                var arr_id=[];
                var arr_names=[];
                $('#show-list-upg :selected:checked').each(function(i){
                        val[i] = $(this).val();
                        var text=$(this).text();
                        if (text!="Selecciona la serie")
                        {
                        arr_id.push(val[i]);
                        arr_names.push(text);
                        }       
                    });
                    //por cada opción seleccionada, genera un "tag"
                    WriteTags(arr_id,arr_names);
                });
                
                //Clic al botón inferior de Actualizar serie específica
                $("#button_upg_shows").click(function(){ 
                    var nlabels=$( "#label_container > div" ).length;
                    //comprobación extra de que hay menos de 6 tags
                    if (nlabels!=0 && nlabels<6)
                    {
                        var labelArray=$(".label_close");
                        var sid=[];
                        var idArray=[];
                        /*por cada tag, se queda con su id y lo añade en un array
                        el id del array corresponde al id de la serie
                        */
                        for (var i=0; i<nlabels; i++)
                        {
                            idArray.push($(labelArray[i]).attr("id"));
                        }   
                    }
                    //se convierte el array a JSON para pasarlo con AJAX a PHP
                    idArray=JSON.stringify(idArray);
                    
                    $.ajax({
                        data:  { ids: idArray },
                        url:   'php/updepisodes.php',
                        type:  'get',
                        beforeSend: function()
                        {
                            Disable();
                        },
                        success:  function (response){
                            Enable();

                            alert(response);
                        }
                    });
                });
                
                $("#ep-show-list").change(function(){
                    $("#episodes_container").show();
                    var show=$(this).val();
                    
                    
                    $.ajax({
                            data:  { id: show },
                            dataType: "json",
                            url:   'php/episodesdata.php',
                            type:  'get',
                            success:  function (response){
                                var n_episodes=response.length;
                                if (n_episodes==0)
                                {
                                    
                                }
                                else
                                {
                                    var toprint=WriteTableHeader();
                                    for(var i=0; i<n_episodes; i++)
                                    {
                                        toprint+=WriteEpisodes(response[i]);
                                        
                                    }
                                    $("#episodes_container").html(toprint);
                                }
                            }
                    });
                });
                
                $("body").on("click",".delepisode",function(event){
                    var id=event.target.id.slice(1);
                    var par=$(event.target).parent();
                    $(par).remove();
                    $.ajax({
                        data:  { rem: id },
                        url:   'php/episodesdata.php',
                        type:  'get',
                        success:  function (response){
                            alert(response);
                        }
                    });
                        
                    
                    
                });
                
            });
            
            
            
            function WriteTags(ids,names)
            {
                //vacía el contenido del div que contiene los tags
                $( "#label_container" ).empty();
                
                //si hay el mismo número de ids que de nombres de series (lo normal)
                if (ids.length == names.length)
                {
                    //por cada serie...
                    for(var i=0; i<ids.length; i++)
                    {
                        var pname=names[i];
                        var pid=ids[i];
                        
                        //creación de elementos Javascript al uso.
                        var labShow = document.createElement('div');
                        labShow.className = 'label_show';
                        
                        var labName= document.createElement('div');
                        labName.className= 'label_name';
                        labName.innerHTML=pname;
                        
                        var labClose= document.createElement('div');
                        labClose.id=pid;
                        labClose.className= 'label_close';
                        labClose.innerHTML="x";
                        
                        labClose.onclick = function() {
                            $(this.parentNode).remove();               
                        }
                        
                        $(labName).appendTo(labShow);
                        $(labClose).appendTo(labShow);
                        $(labShow).appendTo("#label_container");
                    }
                }
            }
            
            function WriteTableHeader()
            {
                var container = $("#episodes_container");
                var toprint="";
                toprint+="<table class='tepisodes'>";
                toprint+="<tr class='tep_header gradient'>";
                toprint+="<td>Episodio</td>";
                toprint+="<td>Título</td>";
                toprint+="<td>Fecha</td>";
                toprint+="<td>Borrar</td>";
                toprint+="</tr>";
                return toprint;
                
            }
            
            function WriteEpisodes(episode)
            {
                var id = episode.id;
                var string = episode.string;
                var title = episode.title;
                var day = episode.day;
                var month = episode.month;
                var year = episode.year;
                var hour = episode.hour;
                var manual = episode.manual;
                toprint="<tr class='sonepisodes'>";
                toprint+="<td>"+string+"</td>";
                toprint+="<td>"+title+"</td>";
                toprint+="<td><input class='dateinput' type='text' size='2' value='"+day+"'>/";
                toprint+="<input class='dateinput' type='text' size='2' value='"+month+"'>/";
                toprint+="<input class='dateinput dateinputy' type='text' size='4' value='"+year+"'>";
                toprint+="A las <input class='dateinput' type='text' size='2' value='"+hour+"'>:00</td>";
                toprint+="<td class='delepisode' id='d"+id+"'>X</td>";
                toprint+="</tr>";
                return toprint;
            }
            
            function Disable()
            {
                $('.form_button').attr('disabled', 'disabled');
                $('.form_button').addClass('disabled');
                $(".small_spinner").show();
            }
            
            function Enable()
            {
                $(".small_spinner").hide();
                $('.form_button').removeAttr('disabled');
                $('.form_button').removeClass('disabled');
            }
        </script>
    </head>
    <body>
        <div id="wrapper">
            <div id="be_header" class="gradient"></div>
            <img src="img/be_calendarplus.png" class="be_img_content">
            <div id="be_title">Administración del calendario</div>
            <div id="upd_options">
               <button class="bst_button gradient" id="addshow"><span class="glyphicon glyphicon-plus"></span> Añadir serie</button>
                <button class="bst_button gradient" id="modifyshow"><span class="glyphicon glyphicon-refresh"></span> Modificar serie</button>
                <button class="bst_button gradient" id="onlyone"><span class="glyphicon glyphicon-film"></span> Actualizar serie específica</button>
                <button class="bst_button gradient" id="episodes"><span class="glyphicon glyphicon-pencil"></span> Modificar episodios</button>
            </div>
            <div id="rightmenu">
                <?php
                    $count_s=0;
                    $count_e=0;
                    $SQL="SELECT COUNT(*) as COUNT from series";
                    $count_series=mysqli_query($con,$SQL);
                    while($res = mysqli_fetch_array($count_series)){
                        $count_s=$res["COUNT"];
                    }

                    $SQL="SELECT COUNT(*) as COUNT from episodios";
                    $count_series=mysqli_query($con,$SQL);
                    while($res = mysqli_fetch_array($count_series)){
                        $count_e=$res["COUNT"];
                    }

                    echo "Hay " . $count_s . " series y " . $count_e . " episodios en el calendario";?>
            </div>
            <div class="formwrapper">
                <div id="error_div" class="showerror"></div>
                <div id="ok_div" class="showerror"></div>
                <div id="form_addshow" class="formson">
                    <div class="form_title">Añadir serie</div>
                    <div class="my_form">
                        <input type="text" class="form-control" placeholder="Código de la serie en Subtitulos.es (número)" id="idsubs" name="idsubs">
                        <input type="text" class="form-control" placeholder="Código de la serie en IMDb (tt + número)" id="imdb" name="imdb">
                        <input type="text" class="form-control" placeholder="Nombre de la serie" id="showname" name="showname">
                        
                        <input type="text" class="form-control" placeholder="Temporada actual o que se esté a punto de estrenar" id="currentseason" name="currentseason">
                        <button type="button" class="form_button gradient" id="button_addnewshow">Añade la serie</button><div class="small_spinner"></div>
                    </div>
                </div>
                <div id="form_modifyshow" class="formson">
                <div class="form_title">Modificar serie</div>
                    <div class="my_form">
                        <select  id="show-list" class="form-control">
                            <option value="" disabled selected>Selecciona la serie</option>
                            <?php
                                $SQL="SELECT id_serie, nombre_serie from series order by nombre_serie";
                                $list_series=mysqli_query($con,$SQL);
                                while($res = mysqli_fetch_array($list_series)){
                                    $id_s=$res["id_serie"];
                                    $name_s=$res["nombre_serie"];
                                    echo "<option value=".$id_s.">".$name_s."</option>";    
                                }
                            ?>
                        </select>
                        <p><i>Si has añadido una serie en esta sesión, recarga la página.</i></p>
                        <label>Nombre</label><input type="text" class="form-control" id="refresh-name" value="">
                        <label>Temporada</label><input type="number" class="form-control" value="" id="refresh-season">
                        <button type="button" class="form_button gradient" id="button_changeshowinfo">Cambiar</button>   
                    </div>
                </div>
                <div id="form_onlyone" class="formson">
                <div class="form_title">Actualizar serie específica</div>
                    <div class="my_form">
                    <label>Selecciona un máximo de 5 series</label>
                    <select  id="show-list-upg" class="form-control" multiple>
                            <?php
                                $SQL="SELECT id_serie, nombre_serie from series order by nombre_serie";
                                $list_series=mysqli_query($con,$SQL);
                                while($res = mysqli_fetch_array($list_series)){
                                    $id_s=$res["id_serie"];
                                    $name_s=$res["nombre_serie"];
                                    echo "<option value=".$id_s.">".$name_s."</option>";    
                                }
                            ?>
                        </select>
                        <div id="label_container"></div>
                        <button type="button" class="form_button gradient" id="button_upg_shows">Actualizar episodios</button><div class="small_spinner" id="spinner_upg"></div>
                    </div>
            </div>
            <div id="form_episodes" class="formson">
                <div class="form_title">Modificar episodios</div>
                <div class="my_form">
                    <select  id="ep-show-list" class="form-control">
                            <option value="" disabled selected>Selecciona la serie</option>
                            <?php
                                $SQL="SELECT id_serie, nombre_serie from series order by nombre_serie";
                                $list_series=mysqli_query($con,$SQL);
                                while($res = mysqli_fetch_array($list_series)){
                                    $id_s=$res["id_serie"];
                                    $name_s=$res["nombre_serie"];
                                    echo "<option value=".$id_s.">".$name_s."</option>";    
                                }
                            ?>
                        </select>
                        <div id="episodes_container"></div>
                </div>
            </div>
        </div>
    </body>
</html>
