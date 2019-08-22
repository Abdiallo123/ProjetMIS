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
        1=>'Deconnexion',
        2=>'Ajout de projet',
        3=>'Laisser un commentaire',
        4=>'Archiver un projet',
        5=>'Restaurer un projet',
        6=>'Modifier un projet',
        7=>'Ajout de tâche',
        8=>'modifier etat de tâche',
        9=>'Modifier une tâche',
        
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
