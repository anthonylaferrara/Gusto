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
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 style="text-align: center; font-size: 5em; padding-bottom: 30px; color: rgba(152, 95, 89, 0.72)">
                        Huggy's Bar</h1>
                </div>
            </div>
            <div class="row carousel-row">
                <div class="col-xs-7 slide-row">
                    <div class="carousel slide slide-carousel" id="carousel-1" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                            <li data-target="#carousel-1" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="./image/thubnail.jpg" alt="Image" style="height: 400px; width: 900px;">
                            </div>
                            <div class="item">
                                <img src="./image/thubnail.jpg" alt="Image" style="height: 400px; width: 900px;">
                            </div>
                            <div class="item">
                                <img src="./image/thubnail.jpg" alt="Image" style="height: 400px; width: 900px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 ">
                    <div class="jumbotron ">
                        <div class="container">
                            <h1 style="font-size: 3em;">Informations</h1>
                            <p>
                            <table class="table ">
                                <tbody>
                                <tr>
                                    <td><span class="glyphicon glyphicon-map-marker"></span></td>
                                    <td>Rue des toto,25 7340 Pâturages</td>
                                </tr>
                                <tr>
                                    <td><span class="glyphicon glyphicon-phone"></span></td>
                                    <td>0471824471</td>
                                </tr>
                                <tr>
                                    <td><span class="glyphicon glyphicon-star"></span></td>
                                    <td>Moyenne : 4,5/5</td>
                                </tr>
                                <tr>
                                    <td><span class="glyphicon glyphicon-pencil"></span></td>
                                    <td>Toto@restaurant.be</td>
                                </tr>
                                </tbody>
                            </table>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 style="text-align: center; font-size: 4em; padding-bottom: 30px; padding-top: 80px; color: rgba(152, 95, 89, 0.72)">
                        <i class="fa fa-quote-left f" aria-hidden="true"></i>
                        Menu <i class="fa fa-quote-right" aria-hidden="true"></i>

                </div>
            </div>
            <div class="row" style="background-color: #DCD0D5;">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th></th>
                        <th class="thplat">Plat</th>
                        <th class="thplat">Prix</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody id="platstable">
                    <tr id="12">
                        <td></td>
                        <td class="tdplat">Carpacio</td>
                        <td class="tdplat">25 <span class="glyphicon glyphicon-euro"></span></td>
                        <td></td>
                    </tr>
                    <tr id="15">
                        <td></td>
                        <td class="tdplat">Carpacio</td>
                        <td class="tdplat">25 <span class="glyphicon glyphicon-euro"></span></td>
                        <td></td>

                    </tr>
                    <tr id="16">
                        <td></td>
                        <td class="tdplat">Carpacio</td>
                        <td class="tdplat">25 <span class="glyphicon glyphicon-euro"></span></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 style="text-align: center; font-size: 4em; padding-bottom: 30px; padding-top: 80px; color: rgba(152, 95, 89, 0.72)">
                        <i class="fa fa-quote-left f" aria-hidden="true"></i>
                        Notes & Commentaires <i class="fa fa-quote-right" aria-hidden="true"></i>
                </div>
            </div>


            <!-- MODAL -->

            <div class="modal fade" id="modal-id" style="background-color: #3c3c3c;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            <h4 class="modal-title">
                                Carpacio
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <?= '<img src="'.BASE_URL.DS.'image/carpaccio.jpg" style="width: 100%;">' ; ?>
                            <h2>Commentaires</h2>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Personne</th>
                                    <th>Commentaire</th>
                                    <th>Note</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Skownar</td>
                                    <td>Super bon, vraiment</td>
                                    <td>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Skownar</td>
                                    <td>Super bon, vraiment</td>
                                    <td>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </td>

                                </tr>

                                <tr>
                                    <td>Skownar</td>
                                    <td>Super bon, vraiment</td>
                                    <td>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <form>
                                <label for="inputID" style="text-align: right">Commentez</label>
                                <input type="text" name="name" id="inputID" class="form-control" value="" title="" required="required" >
                                <label for="note">Notez</label>
                                <select name="name" id="note" class="form-control">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                </select>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                <button type="button" class="btn btn-info">Confirmer</button>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
    </div>

</div>