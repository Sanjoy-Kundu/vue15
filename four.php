<?php
// we can follow simple steps:
/* 
    laravel inertia install 
1.composer create-project --prefer-dist laravel/laravel inertia-laravel 
2. composer require inertiajs/inertia


=== 
3. next laravel config/app.php file and added provider array 
'providers' => [
    // ...
    Inertia\InertiaServiceProvider::class,
],



4. create a component uisng php artisan 
php artisan inertia:component Task/CreateTask


5. make laravel controller 
php artisan make:controller TaskController

6. define route web.php
use App\Http\Controllers\TaskController;

Route::inertia('/', 'Task/CreateTask')->name('createTask');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');


7. go to the controller
use Inertia\Inertia;

public function index()
{
    $tasks = Task::all();
    return Inertia::render('Task/TaskList', ['tasks' => $tasks]);
}


run project 
npm install
npm run dev (vue)
php artisan serve (laravel)
*/
?>