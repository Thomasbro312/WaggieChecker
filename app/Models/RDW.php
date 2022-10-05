<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class RDW extends Model
{

    protected $client;

    /**
     * Endpoints
     *
     * @var array
     */
    protected $endpoints = [
        'info'                  => 'm9d7-ebf2.json',
        'brandstof'             => '8ys7-d773.json',
        'carrosserie'           => 'vezc-m2t6.json',
        'carrosserieSpecifiek'  => 'jhie-znh9.json',
        'voertuigklasse'        => 'kmfi-hrps.json'
    ];

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->client = new Client([
            'verify'=> false,
            'base_uri' => 'https://opendata.rdw.nl/resource/',
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ]
        ]);
    }

    /**
     * Endpoint
     *
     * @param string $data
     * @return string
     */
    public function getEndpoint($data)
    {
        if ( empty( $this->endpoints[$data] ) ) {
            throw new Exception("Data endpoint {$data} does not exists");
        }

        return $this->endpoints[$data];
    }

    /**
     * Get
     *
     * @param string $license
     * @param string $data
     * @return mixed
     */

    public function getCarWithLicense($license){
        return $this->getData($license);
    }

    public function getData($license, $data = 'info')
    {


        try {
            $response = ($this->client->get("{$this->getEndpoint($data)}?kenteken={$license}",['verify'=>false]))->getBody();

            return json_decode($response)[0];
        } catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }

}
