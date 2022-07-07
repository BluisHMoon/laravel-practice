<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 註冊服務
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 取得資料
        View::composer(['blog', 'post'], function ($view) {
            $categories = Category::where('enabled', true)->orderBy('sort', 'asc')->get();
            $view->with('categories', $categories);
        });

        Paginator::defaultView('pagination::bootstrap-4');
    }
}
