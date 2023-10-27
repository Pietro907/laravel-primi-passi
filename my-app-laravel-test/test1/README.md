# Steps

## Controllers
- add a contreller `php artisan make:controller Guests/PageController` (Guests è il namespace dove inserire il controller)
- update the route  / or manual write
from
php

Route::get('/', function () {
    return view('name_view');
});

to

php

Route::get('/', [PageController::class, 'index'])->name('name_view');


## Model/db data
- add db `mysql -uyout_user_name_here -p` create db `CREATE DATABASE your_db_name_here`
- open my phpadmin crete a new `books` table
- create a model `php artisan make:model Book` ????
- open tinker `php artisan ti`
- read the data inside tinker (CLI)`App\Models\Book::all()` returns all data from the table
- upadte the controoller method to show  all data taken from the db table
php

public function (){
    return view('name_view, ['books'=>]')
}