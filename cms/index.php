    <?php
        include("includes/topo.php");
    ?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Concursos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <?php
                    for ($i=0; $i < 9; $i++):
                ?>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Default Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
                <?php
                    endfor;
                ?>
            </div>
<?php
    include("includes/rodape.php");
?>