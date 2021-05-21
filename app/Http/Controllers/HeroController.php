<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HeroController extends Controller {
    public function editHeroSection( Hero $hero ) {
        $hero = Hero::first();
        return view( 'admin.hero.edit', compact( 'hero' ) );
    }

    public function heroSectionUpdate( Request $request ) {
        $this->validate( $request, [
            'title'       => 'required',
            'description' => 'required',
        ] );
        $hero = Hero::first();
        $hero->update( [
            'title'       => $request->title,
            'description' => $request->description,
        ] );
        if ( $request->image ) {
            $imageName = time() . '_' . uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move( public_path( 'storage/hero' ), $imageName );
            $hero->image = '/storage/hero/' . $imageName;
            $hero->save();
        }
        Session::flash( 'success', 'Setting updated successfully' );
        return redirect()->back();

    }
}
