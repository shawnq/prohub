<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use function GuzzleHttp\json_encode;

class SensorController extends Controller
{
    private function hset(string $key, array $map) {
        foreach ($map as $k => $v) {
            Redis::hset($key,$k,$v);
        }
    }
    /**
     * Update demo chip metrics.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        //$id=$request->id?$request->id:"0";
        if ($request->random) {
            $this->hset("sensor:env:".$id,[
                "ts" => "",
                "tmp" => rand(150,340)/10.0,
                "hum" => rand(30,70),
                "voc" => rand(0,30),
                "co2" => rand(445,1500),
                "pm25" => rand(0,200)
            ]);
        } else {
            $this->hset("sensor:env:".$id,[
                "ts" => $request->ts,
                "tmp" => $request->tmp,
                "hum" => $request->hum,
                "voc" => $request->voc,
                "co2" => $request->co2,
                "pm25" => $request->pm25
            ]);
        }
    }
    public function show(string $id) {
        return json_encode(Redis::hGetAll("sensor:env:".$id));
    }
}
