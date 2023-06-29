<h1 class="tit" Align="center">Ingresar una Dignidad </h1>
<br>
<div class="container">
    <form class="" action="<?php echo site_url(); ?>/Dignidades/guardaDig" method="post">
        <div class="row">
            <div class="col-md-4">
                <label for="">Nombre:</label>
                <br>
                <input type="text" placeholder="Ingrese el nombre del candidato" class="form-control" name="nom_can" value="">
            </div>
            <div class="col-md-4">
                <label for="">Apellido:</label>
                <br>
                <input type="text" placeholder="Ingrese el Apellido del candidato" class="form-control" name="ape_can" value="">
            </div>
            <div class="col-md-4">
                <label for="">Movimiento Politíco:</label>
                <br>
                <input type="text" placeholder="Ingrese el Movimiento Político al que pertenece" class="form-control" name="mov_can" value="">
            </div>
            <div class="col-md-4">
                <label for="">Edad:</label>
                <br>
                <input type="number" placeholder="Ingrese la edade del candidato" class="form-control" name="edad_can" value="">
            </div>
            <div class="col-md-4">
                <label for="">Región:</label>
                <br>
                <input type="text" placeholder="Ingrese la region de dnde es oriundo" class="form-control" name="regi_can" value="">
            </div>
            <div class=" col-md-4">
                <label for="">Dignidad:</label>
                <br>
                <select type="text" placeholder="Ingrese la Dignidad a la que se esta postulando" class="form-control" name="dignidad_can" id="">
                    <option value=""></option>
                    <option value="Presidente">Presidente</option>
                    <option value="Asambleista Nacional">Asambleista Nacional</option>
                    <option value="Asambleista Provincial">Asambleista Provincial</option>
                </select>
            </div>

            <div class=" col-md-4">
                <label for="">Idiologia:</label>
                <br>
                <select type="text" placeholder="Ingrese la Dignidad a la que se esta postulando" class="form-control" name="idiolo_can" id="">
                    <option value="Derecha">Derecha</option>
                    <option value="Izquierda">Izquierda</option>
                    
                </select>
            </div>

            <div class="col-md-4">
                <label for="">Latitud:</label>
                <br>
                <input type="text" readonly placeholder="Ingrese la Latitud de donde se encuentra su cede" id="lati" class="form-control" name="lati_can" value="">
            </div>
            <div class="col-md-4">
                <label for="">Longitud:</label>
                <br>
                <input type="text" readonly placeholder="Ingrese la Longitud de donde se encuentra su cede" id="longi" class="form-control" name="longi_can" value="">
                <br>
            </div>

            <div class="row">
                <div class="col-md-12" Align="center">
                    <div id="mapaUbi" style="height: 450px; width:100%; border:2px solid black;" Align="center"></div>
                </div>
            </div>

            <script type="text/javascript">
                function initMap() {
                    var cen = new google.maps.LatLng(-1.3804393775871402, -78.77341064151292);
                    var mapa1 = new google.maps.Map(
                        document.getElementById('mapaUbi'), {
                            center: cen,
                            zoom: 7,
                            mapTypeId: google.maps.MapTypeId.HYBRYD
                        }
                    );

                    var marcador = new google.maps.Marker({
                        position: cen,
                        map: mapa1,
                        title: "Seleccione la direccion",
                        icon: "<?php echo base_url(); ?>/assets/images/dragg.png",
                        draggable: true

                    });
                    google.maps.event.addListener(marcador, 'dragend', function() {
                        //alert("Se acabo de arrastrar")
                        document.getElementById('lati').value = this.getPosition().lat();
                        document.getElementById('longi').value = this.getPosition().lng();
                    });
                }
            </script>


        </div>
        <br>
        <div class="col-md-12 text-center">
            <button type="submit" name="button" class="btn btn-primary">
                GUARDAR
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/dignidades/listar" class="btn btn-danger">CANCELAR</a>
        </div>
    </form>
</div>