<?php

use SilverStripe\Control\Controller;

class RootURLController extends Controller
{

    public function index()
    {
        echo "<html>Your site is now set up. Start adding controllers to mysite to get started.</html>";
    }

    /**
     * Deny access going server less
     */
    public function mIndex($request)
    {
        return $this->httpError(401, 'Decapitated');
    }

}
