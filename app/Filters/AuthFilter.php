<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
    	if (!session()->isLogin)
	    {
	    	//echo "Invalid Login";
	        return redirect()->to(base_url('/login'))->with('error', "You must login before access application");
	    }
        // Do something here
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments=null)
    {
        // Do something here
    }
}