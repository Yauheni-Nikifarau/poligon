<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function index() {
        $keys = Redis::keys('*');
        $keys = array_map(function ($redis_key) {
            return str_replace('laravel_database_', '', $redis_key);
        }, $keys);

        $redis_table = [];
        foreach ($keys as $key) {
            $redis_table[$key] = Redis::get($key);
        }

        return view('redis', ['redis_table' => $redis_table]);
    }

    public function set (Request $request) {
        Redis::set($request->input('key'), $request->input('value'));
        return redirect('/redis');
    }

    public function rename (Request $request) {
        Redis::rename($request->input('key'), $request->input('new_name'));
        return redirect('/redis');
    }

    public function delete (Request $request) {
        Redis::del($request->input('key'));
        return redirect('/redis');
    }

    public function incr (Request $request) {
        Redis::incr($request->input('key'));
        return redirect('/redis');
    }

    public function decr (Request $request) {
        Redis::decr($request->input('key'));
        return redirect('/redis');
    }

    public function incrBy (Request $request) {
        Redis::incrBy($request->input('key'), $request->input('value'));
        return redirect('/redis');
    }

    public function decrBy (Request $request) {
        Redis::decrBy($request->input('key'), $request->input('value'));
        return redirect('/redis');
    }

    public function expire (Request $request) {
        Redis::expire($request->input('key'), $request->input('expire'));
        return redirect('/redis');
    }
}
