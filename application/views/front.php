<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<?php for($i=0;$i<count($liste);$i++) { ?>
<div class="card position-relative">
<div class="card-body">
<div class="content-wrapper">

<div class="row">

    <!-- <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Actualité</h4>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>lieu</th>
                        <th>nom</th>
                        <th>date</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                        
                            <tr>
                                <form action="<?php echo base_url("fiche/".$liste[$i]['URL']."-".$liste[$i]['id']); ?>" method="post">                                   
                                    <td><?php //echo $liste[$i]['lieu'] ?></td>
                                    <td><?php //echo $liste[$i]['nom'] ?></td>
                                    <td><?php// echo $liste[$i]['date'] ?></td>
                                    <td>
                                        <button type="submit" class="btn btn-info">Info</button>
                                    </td>   
                                </form>    
                            </tr>
                        <?php// } ?>     
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div> -->

    <div class="col-md-12 col-xl-3 flex-column justify-content-start">
        <form action="<?php echo base_url("fiche/".$liste[$i]['URL']."-".$liste[$i]['id']); ?>" method="post"> 
        <div class="ml-xl-4 mt-3">
            <p class="card-title"><?php echo $liste[$i]['date'] ?></p>
            <h1 class="text-primary"><?php echo $liste[$i]['lieu'] ?></h1>
            <h3 class="font-weight-500 mb-xl-4 text-primary"><?php echo $liste[$i]['titre'] ?></h3>
            <p class="mb-2 mb-xl-0"><?php echo $liste[$i]['resume'] ?></p>
        </div>  
            </div>
            <div class="col-md-12 col-xl-9">
            <div class="row">
                <div class="col-md-6 border-right">
                
                </div>
                <div class="col-md-6 mt-3">
                    <img  src="<?php echo image_url( $liste[$i]['photo'] ) ?>" />
                    <div id="north-america-legend"></div>
                    <br>
                        <button type="submit" class="btn btn-info">Info</button>
                    <br>        
                </div>
               
            </div>
        </div>
    </div>
       
</div>

</div>
</div>
<?php } ?>   
</div>

