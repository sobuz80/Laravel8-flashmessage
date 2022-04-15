<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class FlashMsgController extends Controller

{   

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {   

        return view('flashMessageList');

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function success()

    {

        return back()->with('success','Flash message success!');

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function info()

    {

        return back()->with('info','Flash message info!');

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function warning()

    {

        return back()->with('warning','Flash message warning!');

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function error()

    {

        return back()->with('error','Flash message error!');

    }

}