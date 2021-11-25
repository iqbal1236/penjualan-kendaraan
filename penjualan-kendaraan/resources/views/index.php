<?php

require_once __DIR__.'/../vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();

$app->get('/kendaraan', function () use ($app) {
    $mongo_client = new MongClient();
    $db = $mongo_client->penjualan_kendaraan;
    $kendaraan = $db->kendaraan;
    $cursor = $kendaraan->find();
    $result = iterator_to_array($cursor);

    $temp_result = array();
    foreach ($result as $key => $val) {
        $temp_result[] = $result[$key];
    }

    return $app->json(array ( 'msg' =>  'Data berhasil ditambahkan', 'resp' => $temp_result));
});

