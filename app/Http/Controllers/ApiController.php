<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

 
// class ApiController extends Controller
// {
//     public function index()
//     {

//         $query = "
//         SELECT *
//         FROM `movies`
//         WHERE 1
//         ORDER BY `rating` DESC
//         LIMIT 10
//         ";

//         $movies = DB::select($query);
//     }
// }

// ÇALIŞMAAAZ ÇÜNKÜ DB AYNI NAMESPACETE DEĞİL



use \DB;

class ApiController extends Controller
{
    public function index()
    {

        $query = "
        SELECT *
        FROM `movies`
        WHERE 1
        ORDER BY `rating` DESC
        LIMIT 10
        ";

        $movies = DB::select($query);
        return $movies;
    }
}























// class ApiController extends Controller
// {
//     public function index()
//     {

//         $query = "
//         SELECT *
//         FROM `movies`
//         WHERE 1
//         ORDER BY `rating` DESC
//         LIMIT 10
//         ";

//         $movies = \DB::select($query);

//         // var_dump($movies); die();
//         // dd($movies); // üsttekinin yerine geçiyo
//         //die()'ın yaptığı şey = kodun çalışmasını burda durdur! JS'deki devOP debugging durma noktaları gibi

//         return $movies;
//         //whatever is returned jsoncode'a dönüşüyo otomatik olarak, eğer ki string değilse!
//         //Bu durum sadece Controller dosyası içindeki php dosyaları için geçerli!!
//     }
// }


//use DB;  bu satırla birlikte kullanırsak alttaki de çalışır
// DB istisnai bi durum, çok kullanıldığı için kısaltması var (tam anlamadım) ?? config.app.php'de yazıyo DB gibi istisnalar

// class ApiController extends Controller
// {
//     public function index()
//     {

//         $query = "
//         SELECT *
//         FROM `movies`
//         WHERE 1
//         ORDER BY `rating` DESC
//         LIMIT 10
//         ";

//         $movies = DB::select($query);
//     }
// }