<div class="container bgcolor">
    <div class="row">
        <div class="col-md-12">
            <div id="allform" class="wrap form">
                <p class="form-title">
                    Inscription</p>
                <form class="login" action="<?= BASE_URL.DS.'user/insert/'?>" method="post">
                    <label>Vous êtes :</label>
                    <div class="radio">
                        <label class="radio-inline">
                            <input type="radio" name="type" id="userID" value="user">Utilisateur
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="type" id="restoID" value="resto">Restaurant
                        </label>
                    </div>
                    <div id="userForm">
                        <input type="text" placeholder="Nom d'utilisateur"/>
                        <input type="text" name="email" placeholder="E-mail">
                        <input type="text" name="confemail" placeholder="Confirmation E-mail">
                        <input type="password" placeholder="Mot de passe"/>
                        <input type="password" placeholder="Confirmation Mdp">
                        <input type="hidden" value="user" name="type"/>
                        <input type="submit" value="Inscription" class="btn btn-sm"/>

                    </div>
                    <div id="restoForm">
                        <input type="text" placeholder="Nom du restaurant">
                        <input type="text" placeholder="Adresse">
                        <div class="form-group">
                            <label for="inputID" class="col-sm-2 control-label">Région:</label>
                            <div class="col-sm-10">
                                <select name="name" id="inputID" class="form-control">
                                    <option value=""> -- Select One --</option>
                                    <option value="anvers">Anvers</option>
                                    <option value="limbourg">Limbourg</option>
                                    <option value="brflamand">Brabant flamand</option>
                                    <option value="flandeocci">Flandre Occidentale</option>
                                    <option value="flandreori">Flandre Orientale</option>
                                    <option value="hainaut">Hainaut</option>
                                    <option value="brwallon">Brabant Wallon</option>
                                    <option value="namur">Namur</option>
                                    <option value="lux">Luxembourg</option>
                                    <option value="liege">Liège</option>
                                </select>
                            </div>
                        </div>
                        <input type="text" placeholder="Téléphone">
                        <input type="text" placeholder="Adresse E-mail">
                        <input type="text" placeholder="Mot de passe">
                        <input type="text" placeholder="Confirmation Mdp">
                        <input type="submit" value="Inscription" class=" btn btn-sm">
                    </div>
                </form>
                <?= isset($_GET['erroremail']) ? '<p>error</p>' : ''?>
            </div>
        </div>
    </div>
</div>