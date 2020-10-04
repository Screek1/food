<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;

class AdminController extends Controller
{
    /**
     * @var JWTAuth
     */
    private $JWTAuth;

    /**
     * AdminController constructor.
     *
     * @param JWTAuth $JWTAuth
     */
    public function __construct(JWTAuth $JWTAuth)
    {
        $this->JWTAuth = $JWTAuth;
    }

    /**
     * @param Request $request
     *
     * @return bool|false|string
     */
    public function login(Request $request)
    {
        try {
            $token = $this->JWTAuth->attempt($request->only(['email', 'password']));
            return response()->json(['token' => $token]);
        } catch (\Exception $e) {
            abort(500, 'Failed login');
        }

        return false;
    }


    /**
     * @return bool|JWTAuth
     */
    public function logout()
    {
        try {
            $this->JWTAuth->invalidate($this->JWTAuth->getToken());
            return response()->json(['message' => 'Success']);
        } catch (\Exception $ex) {
            abort(500, $ex->getMessage());
        }

        return false;
    }
}
