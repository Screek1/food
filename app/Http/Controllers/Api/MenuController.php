<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request) {
         $menu = Menu::where('key', $request->key)->first();
         return response()->json(['menu' => json_decode($menu->menu)]);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function createMenu(Request $request) {
        $menu = Menu::create([
            'type_menu' => $request->type,
            'menu' => $request->menu
        ]);
        $link = route('menu.client', $menu->key);
        return response()->json(['link' => $link]);
    }
}
