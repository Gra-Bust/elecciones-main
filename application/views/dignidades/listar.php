<h1 class="tit" Align="center">Listado de Dignidades </h1>

<?php if ($dignidades) : ?>
    <table class="table table-striped" >
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>MOVIMIENTO</th>
                <th>EDAD</th>
                <th>REGION</th>
                <th>LATITUD</th>
                <th>LONGITUD</th>
                <th>DIGNIDAD</th>
                <th>IDIOLOGIA</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody Align="center">
            <?php foreach ($dignidades as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo $filaTemporal->id_can; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->nom_can; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->ape_can; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->mov_can; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->edad_can; echo "<p>años</p>"; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->regi_can; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->lati_can; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->longi_can; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->dignidad_can; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->idiolo_can; ?>
                    </td>
                    <td class="text-center">
                        <a href="#" title="Editar Candidato"><i class="glyphicon  glyphicon-pencil"></i>
                        </a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url(); ?>/Dignidades/eliminaDig/<?php echo $filaTemporal->id_can; ?>" title="Eliminar Candidato" style="color:red;">
                            <i class="glyphicon  glyphicon-trash"></i>
                        </a>

                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
<?php else : ?>
    <h1 Align="center">No posee Candidatos ._.</h1>
<?php endif; ?>