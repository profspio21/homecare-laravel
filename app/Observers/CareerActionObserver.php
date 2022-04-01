<?php

namespace App\Observers;

use App\Models\Career;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class CareerActionObserver
{
    //
    // public function created(Pengaturan $model)
    // {
    //     $data  = ['action' => 'created', 'model_name' => 'Career'];
    //     $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
    //     Notification::send($users, new DataChangeEmailNotification($data));
    // }
}
