<?php

namespace App\Classes\System;

use App\Trait\GetData;
use App\Classes\StatusClient\client;

class Generate_Client_Information
{
    private client $client;
    private int $id;

    public function __construct(client $client, int $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    public function Generate()
    {
        $data = GetData::data_of_workout_and_nutrition($this->id);
        $this->client->setData($data);
        $this->client->calc_status();
        $this->client->calc_mycal();
        return $this->client;
    }
}
