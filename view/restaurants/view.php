<div id="wrapper" class="bgcolor">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand ">
                Région
            </li>
            <li>
                <a href="#">Anvers</a>
            </li>
            <li>
                <a href="#">Limbourg</a>
            </li>
            <li>
                <a href="#">Hainaut</a>
            </li>
            <li>
                <a href="#">Namur</a>
            </li>
            <li>
                <a href="#">Bruxelles</a>
            </li>
            <li>
                <a href="#">Luxembourg</a>
            </li>
            <li>
                <a href="#">Brabant</a>
            </li>
            <li class="divider">
            <li>
                Trier par
            </li>
            <li>
                <a href="#">Note</a>
            </li>
            <li>
                <a href="#">Nom</a>
            </li>

        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" style="height: 90vh">

        <?php if(isset($notfound)){ ?>
            <div style="margin: 0 auto; text-align: center">
                <h1 style="padding: 100px; padding-bottom: 50px; font-size: 5em; text-align: center;">Désolé, la section demandée n'existe pas</h1>
                <i style="text-align: center; font-size: 10em; color: #985f59" class="fa fa-frown-o"></i>
            </div>
        <?php }else{?>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1><?= $region->NOM . ' (' . count($restaurantsall) . ')' ?></h1>
                </div>
            </div>
            <?php if(isset($noresult)){?>
                <div style="margin: 0 auto; text-align: center">
                <h1 style="padding: 100px; padding-bottom: 50px; font-size: 5em; text-align: center;">Désolé, il n'y a pas de restaurants dans cette région</h1>
                <i style="text-align: center; font-size: 10em; color: #985f59" class="fa fa-frown-o"></i>
                </div>
            <?php } ?>
            <!-- FOREACH RESTAURANT -->
            <?php for($i = 0; $i < count($restaurantsall);$i++){?>
            <?= $i%2 == 0 ? '<div class="row rowrestaupair">' : '<div class="row rowrestauimpair">' ?>
                <div class="col-lg-12">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <img class="thumbnail" src="./image/thubnail.jpg">
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <h2><?= $restaurantsall[$i]->NOM ?></h2>
                        <p class="info"><span class="glyphicon glyphicon-phone"></span> <?=  $restaurantsall[$i]->TEL ?></p>
                        <p class="info"><span class="glyphicon glyphicon-map-marker"> <?=  $restaurantsall[$i]->ADRESSE ?></span>
                        <p class="info"><span class="glyphicon glyphicon-star"> Note moyenne : 4/5</span></p>
                        <p>
                            <button type="submit" class="btn btn-lg "><span class=" glyphicon glyphicon-eye-open"></span> Voir la page</button>
                        </p>
                    </div>

                </div>
            </div>
            <?php }} ?>
            <!--END FOREACH RESTAURANT -->
        </div>
        <!-- /#page-content-wrapper -->

    </div>