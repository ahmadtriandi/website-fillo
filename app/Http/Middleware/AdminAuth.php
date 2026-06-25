<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        $adminId = $request->session()->get('admin_id');

        if (! $adminId || ! Admin::whereKey($adminId)->exists()) {
            $request->session()->forget(['admin_id', 'admin_nama']);

            return redirect()->route('admin.login')
                ->with('gagal', 'Silakan login terlebih dahulu.');
        }

        return $next($request);
    }
}
