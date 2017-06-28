<?php /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index/homePage');
});

// Route::get('home','HomeController@index');
Route::get('/about',function(){
   return view('index/about');
});
Route::get('/pricing',function(){
    return view('index/pricing');
});
Route::get('/contact',function(){
    return view('index/contact');
});

Auth::routes();

// ===================== Login Authentication Implemented ==================|
// Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', 'HomeController@index');
    Route::get('users/viewUsers','HomeController@viewUsers');
    Route::post('users/addUser',
        [
            'as' => 'addUser',
             'uses' => 'HomeController@createUser'
        ]
    );
    //================= churches logic ======================|
    Route::get('church/viewChurches', 'ChurchController@viewChurches');
    Route::get('church/addchurch','ChurchController@addChurch');
    Route::get('church/Members', 'ChurchController@viewMembers');
    Route::post('addMember', array('uses' => 'ChurchController@addMember'));
    Route::post('church/insertChurch',
        [
            'as'=>'insertChurch',
            'uses'=>'ChurchController@insertChurch'
        ]
    );
    Route::post('church/viewChurches/{id}',
        [
            'as' => 'Church.remove',
            'uses' => 'ChurchController@destroy'
        ]
    );
    Route::post('church/Members/{id}',
        [
            'as' => 'Member.remove',
            'uses' => 'ChurchController@removeMember'
        ]
    );
    //========================= missioners logic =====================|
    Route::get('missioners/viewMissioners','MissionerController@viewMissioners');
    Route::get('missioners/addMissioner','MissionerController@addMissioner');
    Route::get('mission/Coordinators', 'MissionerController@viewCoordinators');
    Route::post('addCoordinator', array('uses' => 'MissionerController@addCoordinator'));
    Route::post('missioners/addMissioner',
        [
            'as'=>'insertMissioner',
            'uses'=>'MissionerController@createMissioner'
        ]
    );
    Route::post('missioners/viewMissioners/{id}',
        [
            'as' => 'Missioner.remove',
            'uses' => 'MissionerController@destroy'
        ]
    );
    Route::post('mission/Coordinators/{id}',
        [
            'as' => 'Coordinator.remove',
            'uses' => 'MissionerController@removeCoordinator'
        ]
    );
// });