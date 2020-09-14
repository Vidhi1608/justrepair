<?php


use App\Area;
use App\City;
use App\Role;
use App\User;
use App\Brand;
use App\Inquiry;
use App\Detail;
use App\Manager;
use App\Product;
use App\Complaint;
use App\Technician;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use RealRashid\SweetAlert\Facades\Alert;



// use Illuminate\Support\Facades\Input;

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

// Admin Routes:
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
               Route::resource('areas','AreasController');
               Route::resource('brands','BrandsController');
               Route::resource('products','ProductsController');
               Route::resource('editcomplaint','EditComplaintController');
               Route::resource('showcities','CitiesController');
               Route::get('assignproduct','LinkController@assignproduct');
               Route::get('showassignproduct','LinkController@showassignproduct');
               Route::resource('admin','AdminController');
               Route::resource('upcoming', 'ComplaintsController');
               Route::get('working', 'LinkController@working');
               Route::get('completed', 'LinkController@completed');
               Route::get('cancel', 'LinkController@cancel');
               Route::get('showinquiry', 'LinkController@showinquiry');
               Route::post('business', 'BusinessController@store');
               Route::resource('business', 'BusinessController');
               Route::post('storeproduct','TechnicianController@store');
               Route::post('destroytechpro', 'TechnicianController@destroy');


               Route::any( '/search', function () {
                  $q = Input::get ( 'q' );
                  if($q != ""){
                  $users = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->orWhere ( 'mobile', 'LIKE', '%' . $q . '%' )->orWhere ( 'status', 'LIKE', '%' . $q . '%' )->paginate(5)->setPath ( '' );
                  $pagination = $users->appends ( array (
                              'q' => Input::get ( 'q' ) 
                      ) );
                  if (count ( $users ) > 0)
                  return view('admin.template.home.layout.showadmin',compact('users'))->withQuery($q);
                     //  return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
                  }
                     Alert::error('Sorry', 'User Not Exist');
                      return redirect('admin');
              } );
// Technician Routes:
               Route::view('techdashboard', 'admin.template.home.layout.technician');
               Route::post('taken','ComplaintsController@update');
               Route::post('editstatus','ComplaintsController@edit');
               Route::post('editcomplaint','ComplaintsController@edit');
               Route::post('invoice','InvoiceController@store');
               Route::post('invoice_update','InvoiceController@edit');
               // Route::post('completedcomplaint','ComplaintsController@show');
               
// Manager Routes:
               Route::view('managerdashboard', 'admin.template.home.layout.manager');
               Route::resource('product','TechnicianController'); 
                
               // Route::post('assignproduct','TechnicianProductController@store'); 
               Route::get('bill/{id}', 'LinkController@bill');  
   

Route::get('makereport/{id}', 'LinkController@makereport');
Route::get('invoice/{complaint}','InvoiceController@update')->name('bill.update');

Route::get('addcomplaint','LinkController@addcomplaint');

Route::get('showcomplaint','LinkController@showcomplaint');
Route::get('report','LinkController@report');
Route::get('inquiry','LinkController@inquiry');
Route::get('profile','LinkController@profile');


Route::post('submit', 'ComplaintsController@store');
Route::post('store', 'AssignController@store');
Route::post('storearea', 'AreasController@store');
Route::post('storebrand', 'AssignBrandController@store');
Route::post('destroy', 'AssignController@destroy');
Route::post('destroybrand', 'AssignBrandController@destroy');
Route::post('destroycity', 'CitiesController@destroy');
Route::post('destroyarea', 'AreasController@destroy');
Route::post('destroyproduct', 'ProductsController@destroy');
// Route::post('destroybrand', 'BrandsController@destroy');
Route::post('brand', 'BrandsController@store');
Route::get('displayareas/{id}','LinkController@displayarea');
Route::get('displaybrand/{id}','LinkController@displaybrand');

Route::resource('data','DataController');

Route::get('delete/{id}','CitiesController@destroy');
Route::resource('managers','ManagersController');

Route::resource('complaints','ComplaintsController');
Route::any( '/find', function () {
   $q = Input::get ( 'q' );
   if($q != ""){
   $complaints = Complaint::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'mobile', 'LIKE', '%' . $q . '%' )->orWhere ( 'status', 'LIKE', '%' . $q . '%' )->paginate(5)->setPath ( '' );
   $pagination = $complaints->appends ( array (
               'q' => Input::get ( 'q' ) 
       ) );
   if (count ( $complaints ) > 0)
   return view('admin.template.home.layout.showcomplaint',compact('complaints'))->withQuery($q);
      //  return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
   }
   
   Alert::error('Sorry', 'Complaint not Found.!');
       return redirect('complaints');
} );
Route::any( '/get', function () {
   $q = Input::get ( 'q' );
   if($q != ""){
   $complaints = Complaint::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'mobile', 'LIKE', '%' . $q . '%' )->orWhere ( 'status', 'LIKE', '%' . $q . '%' )->paginate(5)->setPath ( '' );
   $pagination = $complaints->appends ( array (
               'q' => Input::get ( 'q' ) 
       ) );
   if (count ( $complaints ) > 0)
   return view('admin.template.home.layout.completed',compact('complaints'))->withQuery($q);
      //  return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
   }
   
   Alert::error('Sorry', 'Complaint not Found.!');
   return redirect('completed');
} );
Route::any( '/found', function () {
   $q = Input::get ( 'q' );
   if($q != ""){
   $complaints = Complaint::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'mobile', 'LIKE', '%' . $q . '%' )->orWhere ( 'status', 'LIKE', '%' . $q . '%' )->paginate(5)->setPath ( '' );
   $pagination = $complaints->appends ( array (
               'q' => Input::get ( 'q' ) 
       ) );
   if (count ( $complaints ) > 0)
   return view('admin.template.home.layout.working',compact('complaints'))->withQuery($q);
      //  return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
   }
   
   Alert::error('Sorry', 'Complaint not Found.!');
       return redirect('working');
} );
// Route::resource('data','AssignController');
Route::get('logout', function(){
   Auth::logout();
   return redirect()->route('login');
});

});


// Password Reset Routes...
Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.token');
Route::post('password/reset', 'ResetPasswordController@reset');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('detail', function () {
   $detail=Detail::create([
    'user_id' => '1',
    'mobile' => '8456213020',
    'address' => 'csgh flat nr abcde road',
    'cv' => 'resume',
    
   ]);
});

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
         
         'name' =>'vidhi',
         'mobile' => '9865231450',
         'email' =>'vidhi@nocat.tech',
         'password' => bcrypt ('vidhi12345'),
         'city_id' => '1',
      
         'role_id' => '1',
         'status' => 'Active',
       
      ]);
});
Route::get('login/{id}','UserController@login');

