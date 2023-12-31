<?php

namespace App\Controllers;

use App\Libraries\Weather;
use CodeIgniter\Config\Factories;

class Home extends BaseController
{
    /**
     * Renderizo a view para consultar os dados de clima e geolocalização
     *
     * @return view
     */
    public function index()
    {
        return view('welcome_message');
    }

    /**
     * Processa a requisição advinda da view 'welcome_message'
     *
     * @throws Exception
     * @return mixed
     */
    public function weather()
    {

        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        /** @var string latitude enviada no request */
        $latitude = $this->request->getGet('latitude');

        /** @var string longitude enviada no request */
        $longitude = $this->request->getGet('longitude');

        $weather = Factories::class(Weather::class)->get(latitude: $latitude, longitude: $longitude);
        
        
        return $this->response->setStatusCode(200)->setJSON([
            'cardsWeather'  => $weather['cardsWeather'],
            'cardsWeather'  =>$weather['cardsWeather']
        ]);
    }
}
