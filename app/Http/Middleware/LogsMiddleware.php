<?php

namespace App\Http\Middleware;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;
use Closure;

class LogsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public $actions = [
        1=>'Liste des projets',
        2=>'Liste des projets actifs',
        3=>'Filtre des projets par état',
        4=>'Liste des projets suspendu',
        5=>'Liste des projets en attente',
        6=>'Ajout de projet',
        7=>'Ajout de projet',
        8=>'Ajout de projet',
        9=>'Ajout de projet',
        10=>'Ajout de projet',
        11=>'Ajout de projet',
        12=>'Ajout de projet',
        13=>'Ajout de projet',
        14=>'Ajout de projet',
        15=>'Ajout de projet',
        16=>'Ajout de projet',
        17=>'Ajout de projet',
        18=>'Ajout de projet',
        19=>'Ajout de projet',
        20=>'Ajout de projet'
    ];
    public function handle($request, Closure $next, $action)
    {
        if(in_array($this->actions[$action], $this->actions))
        {
            $log = new Log();
            $log->user_id = Auth::id();
            $log->action  = $this->actions[$action];
            $log->save();
        }
        return $next($request);
    }
}
