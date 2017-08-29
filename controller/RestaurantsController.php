<?php
/**
 * Created by PhpStorm.
 * User: lafer
 * Date: 26-08-17
 * Time: 16:50
 */

class RestaurantsController extends Controller
{
    private $restoDB;

    public function __construct()
    {
        $this->restoDB = new RestaurantsDB();
    }

    public function index()
    {
        $this->view('all');
    }

    public function view($id = null, $id2 = null)
    {
        $this->restoDB->selectAllByProvince(1);
        $rests = '';
        $region = '';
        $noresult = false;
        $notfound = false;
        if (strcmp($id, 'all') == 0 OR is_null($id)) {
            $rests = $this->restoDB->selectAll();
            $region->NOM = 'Tous les restaurants';
        } elseif ($id >= 1 && $id <= 10) {
            $rests = $this->restoDB->selectAllByProvince($id);
            $region = $this->restoDB->selectRegion($id);
            count($rests) == 0 ? $noresult = true : $noresult = false;
        } else {
            $notfound = true;
        }
        if ($notfound) {
            $this->set('notfound',true);
        } elseif ($noresult) {
            $this->set(array(
                'noresult' => true,
                'region' => $region
            ));
        } else {
            $this->set(array(
                'restaurantsall' => $rests,
                'region' => $region
            ));
        }
        $this->render('/restaurants/view');
    }

}