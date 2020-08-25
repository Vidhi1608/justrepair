<?php


use App\Area;
use App\City;
use App\Role;
use App\User;
use App\Brand;
use App\Detail;
use App\Manager;
use App\Product;
use App\Complaint;
use App\Technician;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 
Route::get('/', 'LinkController@footer');

Route::get('get-in-touch', function(){
   $cities=City::all();
   $products=Product::all();
   return view ('contact',compact('cities','products'));
});
Route::get('who-we-are', function(){
   $cities=City::all();
   $products=Product::all();
   return view('about',compact('cities','products'));  
});
Route::get('services', 'ServiceController@view');
Route::get('services/{landing}', 'ServiceLandingController@view');
Route::get('services/{landing}/{area}', 'ServiceAreaController@view');

Route::group(['middleware'=>'authenticated'],function(){

Route::view('techdashboard', 'admin.template.home.layout.technician');
Route::view('managerdashboard', 'admin.template.home.layout.manager');
Route::view('admindashboard', 'admin.template.home.layout.admin');
Route::get('showproduct','LinkController@product');
Route::get('showarea','LinkController@area');
Route::get('showbrand','LinkController@brand');
Route::get('showmanager','LinkController@manager');
Route::get('showtechnician','LinkController@technician');
Route::get('addadmin','LinkController@addadmin');
Route::get('showadmin','LinkController@showadmin');
Route::get('addmanager','LinkController@addmanager');
Route::get('showmanager','LinkController@showmanager');
Route::get('addtechnician','LinkController@addtechnician');
Route::get('showtechnician','LinkController@showtechnician');
Route::get('addarea','LinkController@addarea');
Route::get('addcity','LinkController@addcity');
Route::get('cities','LinkController@city');
Route::get('addproduct','LinkController@addproduct');
Route::get('addbrand','LinkController@addbrand');
Route::get('addcomplaint','LinkController@addcomplaint');
Route::get('showcomplaint','LinkController@showcomplaint');
Route::get('assignproduct','LinkController@assignproduct');
Route::get('showassignproduct','LinkController@showassignproduct');
Route::get('getdata','LinkController@getdata');
Route::post('submit', 'ComplaintsController@store');
Route::post('store', 'AssignController@store');
Route::post('destroy', 'AssignController@destroy');

Route::resource('data','DataController');
Route::resource('areas','AreasController');
Route::resource('brands','BrandsController');
Route::resource('products','ProductsController');
Route::resource('showcities','CitiesController');
Route::get('delete/{id}','CitiesController@destroy');
Route::resource('managers','ManagersController');
Route::resource('technicians','TechniciansController');
Route::resource('complaints','ComplaintsController');
Route::resource('admin','AdminController');
Route::resource('data','AssignController');
Route::get('logout', function(){
   Auth::logout();
   return redirect()->route('login');
});

});



Auth::routes();

 


Route::get('/home', 'HomeController@index')->name('home');
//  Route::get('/admin',function(){
//      return view(layouts.admin);
//  })->middleware(['auth','auth.admin']);
Route::get('detail', function () {
   $detail=Detail::create([
    'user_id' => '1',
    'mobile' => '8456213020',
    'address' => 'csgh flat nr abcde road',
    'cv' => 'resume',
    
   ]);
});

// Route::get('area', function () {
//    $area=Area::create([
//     'name' => 'Maninagar',
    
//    ]);
// });
Route::get('manager',function(){
   $manager=Manager::create([
      'name' => 'Bhavik',
      'mobile' => '8456213220',
      'status' => 'Active',
   ]);
});
Route::get('city',function(){
   $cities=City::create([
      'name' => 'Baroda',
   ]);
});

Route::get('complaint',function(){
   $complaint=Complaint::create([
      'name' => 'Devdut mehta',
      'mobile' => '9924476429',
      'address' => 'abc flat nr xyz road ahmedabad',
      'product' => 'Air Conditioner',
      'status' => 'Active',

   ]);
});

   Route::get('save', function () {
      $user=User::create([
         
         'name' =>'Sanket',
         'mobile' => '9865231450',
         'email' =>'satgwasfeoat.tech',
         'password' => bcrypt ('sanket12345'),
         'city_id' => '1',
         'product_id' => '3',
         'role_id' => '3',
         'status' => 'Active',
       
      ]);
});
Route::get('login/{id}','UserController@login');