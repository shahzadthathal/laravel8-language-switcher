
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
        return view('en.welcome');
    });

    Route::get('what-is-vpn', function () {
        return view('en/pages/what-is-other');
    });
    
    Route::get('what-is-vpn', function () {
        return view('cn/pages/what-is-other');
    });

});
