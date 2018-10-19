<?php

use Illuminate\Support\Facades\Route;
use i8086\ScheduleList\ScheduleList;

Route::get('/index', ScheduleList::class.'@index');
