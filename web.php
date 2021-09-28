
//Automated Redirect of Homepage to default locale i.e. /en
Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::get('change/lang', [App\Http\Controllers\LocalizationController::class, 'lang_change'])->name('LangChange');


Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale' //SetLocale.php middleware
    ], function() {

    Route::get('/', function () {
        return view(app()->getLocale().'.welcome');
    });

  //It will serve both en/cn language pages
    Route::get('what-is-vpn', function () {
        return view(app()->getLocale().'/pages/what-is-other');
    });
    
   
});
