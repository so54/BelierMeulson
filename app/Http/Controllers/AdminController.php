<?php

namespace App\Http\Controllers;

use App\Models\Lien;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\IpUtils;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller
{
    public function show(){
        $liens = Lien::all();

        return view('belier-admin', ['liens'=>$liens]);
    }

    public function edit(Request $request, Application $app)
    {
        $maintenance = $app->isDownForMaintenance();
        $ipChecked = true;
        $ip = $request->ip();
        if($maintenance) {
            $data = json_decode(file_get_contents($app->storagePath().'/framework/down'), true);
            $ipChecked = isset($data['allowed']) && IpUtils::checkIp($ip, (array) $data['allowed']);
        }
        return view ('maintenance.maintenance', compact ('maintenance', 'ip', 'ipChecked'));
    }

    public function update(Request $request)
    {
        if($request->maintenance) {
            Artisan::call ('down', $request->ip ? ['--allow' => $request->ip()] : []);
        } else {
            Artisan::call ('up');
        }
        return redirect()->route('maintenance.index')->with ('ok', __ ('Le mode a bien été actualisé.'));
    }
}
