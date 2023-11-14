-connect db
-link file system
-instllazione package
-create layout
-CRUD




# Steps

## Controllers
- add a controller `php artisan make:controller Guests/PageController` (Guests è il namespace dove inserire il controller)
- update the route  / or manual write

from

~~~php


Route::get('/', function () {
    return view('name_view');
});

to

~~~php

Route::get('/', [PageController::class, 'index'])->name('name_view');


## Model/db data
- add db `mysql -your_user_name_here -p` create db `CREATE DATABASE your_db_name_here`
- open my phpadmin crete a new `books` table
- create a model `php artisan make:model Book` ????
- open tinker `php artisan ti`
- read the data inside tinker (CLI)`App\Models\Book::all()` returns all data from the table
- upadte the controoller method to show  all data taken from the db table

~~~php

public function (){
    return view('name_view, ['books'=>]')
}

~~~php





# crea le tabelle con laravel

- php artisasn make:migration create_user_table (cmd per creare una migrazione che prende il mome della tabella user) (php artisan help migration cmd per aiuto migration)
- cd database
- cd migrations/
- ls-alt
- cat 2014_10_12_00000_create_user_table.php
- cd..
- cd..
- code .
- up() crea la table & down() distrugge la table
- php artisan make:migration create_houses_table  (se mettiamo solo houses crea la migrazione ma con up e down vuoti)
- saphp artisan migrate (chiedera il terminale se creo una connessione con il nuovo database)
- php artisan db (entra in mysql)
- use name_db
- show tables
- describe migrations (info sulle operazioni di migrazioni che ho appena eseguito)
- select * from migrations (le visualizzo una per una)
- php artisan migrate:rollback (calcella solo le info in tabella e non i file migrazioni)



## Modificare all'interno di una table delle informazioni precendentemente inserite
- Table: houses
-id AI PK UN NN BIGINT
- reference string()
- address string()
- city string()
- post_code string()
- state string()
- square_meters SMALL INT()
- bathrooms tinyinterger()
- rooms tinyinterger()
- type string()
- description- pryce text()
- price float()
- is_available boolean() / tinyinterger()
- created_at
- updated_at


~~~php

public function up():void {

    Schema::create('houses', function (Blueprint $table){

        table->id();
        table->string('referance', 12);
        table->string('address', 100);
        table->string('city', 50);
        table->string('state', 50);
        table->string('post_code', 10);
        table->smallInterger('square_meters')->unsigned();  (fino a 65.000m quadrati che possiamo inserire, sempre numeri positivi)
        table->tinyInterger('bathrooms')->unsigned();
        table->tinyInterger('rooms')->unsigned();
        table->string('type', 50);
        table->text('description')->nullable();
        table->decimal('price', 10, 2);
        table->boolean('is_available')->default(1);
        table->tinyInt('price', 10, 2);

        table->timestamps();

    });

}

~~~php


### Column modifier

## se in produzione la mia app/table non può usare il rollback perhè genera una serie di errori gravi in fase di sviluppo e compromettere i dati nel sistema quindi:
- aggiornare una table php artisan make:migration update_users_table --table=users

- aggiungere una nuova colonna php artisan make:migration add_phone_number_to_users_table(add aggiunge) (to_users_table indica a quale tabella aggiungere la colonna _phone_number_)

- up() inserisce i cmd che creaono o modificano una table o in generale fanno un update di qualsiasi tipo
-down() fa il contrario di up() e ci serve per tornare indietro e fare il roolback, se utilizziamo la funzione up() aggiungere sempre la funzione down()!!!!!!!

~~~php

public function up():void {

    Schema::table('houses', function (Blueprint $table){

        table->dropColumn('energy_rating'); (aggiungo la colonna energy_rating)

    });
}

~~~php

or

~~~php

public function up():void {

    Schema::table('houses', function (Blueprint $table){

        table->string('image')->after('id')->nullable(); (aggiungo un campo dopo id)
        table->string('floors')->after('square_meters')->nullable(); (aggiungo un campo dopo square_meters)

    });
}

~~~php

#### lo Schema è la nostra classe in Laravel

- php artisan migrate
- php artisan migrate:rollback (per fare un downgrade)

-



### Cosa fare nel codice

~~~php

### file.php nella cartella config con dentro i dati dell'array associativo con le proprietà all'interno

    return [
        'houses'=> [
            'title' = 'Appartamento trilocale',  //la virgola è opzionale se il dato è singolo
            'price' = '1000',
        ],
        [
            'title' = 'Appartamento trilocale',  //la virgola è opzionale se il dato è singolo
             'price' = '1000',
        ],
        [
            'title' = 'Appartamento trilocale',  //la virgola è opzionale se il dato è singolo
             'price' = '1000',
        ],
        [
            'title' = 'Appartamento trilocale',  //la virgola è opzionale se il dato è singolo
             'price' = '1000',
        ],
       [
            'title' = 'Appartamento trilocale',
  //la virgola è opzionale se il dato è singolo             'price' = '1000',
],

    ];

### e lo riportiamo nel file apposito come da slide

- se is_available di default è true lo eliminiamo dall array associativo in quanto risulterebbe un dato superfluo.

~~~php

### Per le info delle proprietà dell'array associativo possiamo simularle tramite il sito di fakerphp





### implement method show()

~~~php

public function show(Nome $nome){
    return view('admin.nome.show', compact())
}

~~~php 


## implement method edit

~~~php 

public function edit(){
    
}

~~~php 

### implement the update(U)

public function update(Request $request, Nome $nome){

    $data = $request->all();
    
    if($request->has('cover_image') && )
}



### implemet the delete method (D)

public function destroy(){



}