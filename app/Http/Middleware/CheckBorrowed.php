<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Muontra;
use Illuminate\Support\Facades\Auth;
class CheckBorrowed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $id_Sach = Muontra::pluck('id_Sach');
        $id = Muontra::pluck('id');
        if( $id == ($request->id) && $id_Sach == ($request-> id_Sach)) 
        {
            return redirect()->back()->with('status','Bạn đã mượn quyển sách này,không thể mượn thêm nữa');
        }
        else
        return $next($request);
    }
}
