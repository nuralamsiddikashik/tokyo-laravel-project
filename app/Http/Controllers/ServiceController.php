<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller {
    public function index() {
        return view( 'admin.service.index' );
    }

    // Create Service
    public function addToService() {
        return view( 'admin.service.create' );
    }

    // Store to service data
    public function addToStore( Request $request ) {
        $this->validate( $request, [
            'service_title' => 'required|unique:services,service_title',
        ] );
        $service = Service::create( [
            'service_title'       => $request->service_title,
            'service_icon'        => $request->service_icon,
            'service_description' => $request->service_description,
        ] );
        Session::flash( 'success', 'Successfuly create service' );
        return redirect()->back();
    }
}
