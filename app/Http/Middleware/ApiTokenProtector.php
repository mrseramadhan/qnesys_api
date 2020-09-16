<?php
namespace App\Http\Middleware;

use Closure;
use Session;
use App\Sy_Token;

class ApiTokenProtector
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!empty($request->header('API-Token')))
        {
            if(Sy_Token::where('token',$request->header('API-Token'))->get()->count()>0)
            {
              return $next($request);
            }
            else
            {
              return redirect()->route('invalid_token');
            }

        }
        else
        {
            return redirect()->route('invalid_header');
        }
    }
}
