<?php //echo $liste[0]['Auteur'] ?>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
        <h4 class="card-title"><?php echo $liste[0]['titre'] ?></h4>
        <p class="card-description"><?php echo $liste[0]['date'] ?></p>
        <form class="forms-sample">
            <div class="form-group">
                <img src="<?php echo image_url( $liste[0]['photo'] ) ?>" />
                <p>
                    <br><?php echo $liste[0]['article'] ?><br>
                </p>
                <p class="card-description">
                    <?php echo $liste[0]['Auteur'] ?>
                </p>
            </div>
        </form>
    </div>
    </div>
</div>