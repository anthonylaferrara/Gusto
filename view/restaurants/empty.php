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
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1><?= $region->NOM . ' (' . count($restaurantsall) . ')' ?></h1>
                </div>
            </div>
                <div style="margin: 0 auto; text-align: center">
                    <h1 style="padding: 100px; padding-bottom: 50px; font-size: 5em; text-align: center;">Désolé, il n'y a pas de restaurants dans cette région</h1>
                    <i style="text-align: center; font-size: 10em; color: #985f59" class="fa fa-frown-o"></i>
                </div>


        <!--END FOREACH RESTAURANT -->
    </div>
    <!-- /#page-content-wrapper -->
    </div>
</div>