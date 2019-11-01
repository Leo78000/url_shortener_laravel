<?php

namespace App\Http\Controllers;

use App\URL;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UrlsController extends Controller
{
    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        // Validation du champ
        $this->validate($request, ['url' => 'required|url']);

        // Verification que l'URL n'a pas déjà été raccourcie auparavant
        $record = $this->getRecordForUrl($request->url);

        // Si elle l'a été : on redirige
        return view('result')->withShortened($record->shortened);


    }

    public function show($shortened)
    {
        $url = URL::whereShortened($shortened)->firstOrFail();
           return redirect($url->url);
    }

    public function getRecordForUrl($url)
    {
        return URL::firstOrCreate(
            ['url'=>$url],
            ['shortened' => $this->get_unique_short_url()]
        );

    }
     public function get_unique_short_url()
        {
            $shortened = str_random(5);

            if (URL::whereShortened($shortened)->count() > 0) {
                return get_unique_short_url();
            }
            return $shortened;
        }
}
