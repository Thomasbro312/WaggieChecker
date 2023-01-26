<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class RDW extends Model
{

    protected $client;

    protected $endpoints = [
        'info'                  => 'm9d7-ebf2.json',
        'brandstof'             => '8ys7-d773.json',
        'carrosserie'           => 'vezc-m2t6.json',
        'carrosserieSpecifiek'  => 'jhie-znh9.json',
        'voertuigklasse'        => 'kmfi-hrps.json',
        'gebrekken_indi'        => 'a34c-vvps.json',
        'gebrekken_code'        => 'hx2c-gt7k.json'
    ];

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

    public function getEndpoint($data)
    {
        if ( empty( $this->endpoints[$data] ) ) {
            throw new Exception("Data endpoint {$data} does not exists");
        }

        return $this->endpoints[$data];
    }

    public function getCarWithLicense($license){
        return $this->getData($license);
    }

    public function getCarAPK($license){
        return $this->getDataArray($license,"gebrekken_indi");
    }

    public function getCarPower($license){
        return $this->getDataArray2($license,"brandstof");
    }

    public function getCarBreaksWithCode($code){

    }

    public function getDataWithoutLicense($license, $data = 'info') {
        try {
            $response = ($this->client->get("{$this->getEndpoint($data)}?kenteken={$license}",['verify'=>false]))->getBody();
            return json_decode($response)[0];
        } catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }

    public function getDataArray($license, $data = 'info'){
        try {
            $response = ($this->client->get("{$this->getEndpoint($data)}?kenteken={$license}",['verify'=>false]))->getBody();
            return json_decode($response);
        } catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }

    public function getDataArray2($license, $data = 'info'){
        try {
            $response = ($this->client->get("{$this->getEndpoint($data)}?kenteken={$license}",['verify'=>false]))->getBody();
            return json_decode($response);
        } catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
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
