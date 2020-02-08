<?php

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
$pages = [
  [
    'code' => 'overview',
    'name' => 'Overview',
    'route' => 'home'
  ],
  [
    'code' => 'developer_kit',
    'name' => 'Developer Kit',
    'route' => 'developer_kit'
  ],
  [
    'code' => 'design_kit',
    'name' => 'Design Kit',
    'route' => 'design_kit'
  ],
  [
    'code' => 'templates',
    'name' => 'Templates',
    'route' => 'templates'
  ],
  [
    'code' => 'doc',
    'name' => 'Doc',
    'route' => 'doc'
  ],
];

Route::get('/', function () use ($pages) {
    return view('overview', [
      'currentPageCode' => 'overview',
      'pages' => $pages
    ]);
})->name('home');

Route::get('/developer-kit', function () use ($pages) {
    return view('developer-kit', [
      'currentPageCode' => 'developer_kit',
      'pages' => $pages
    ]);
})->name('developer_kit');

Route::get('/design-kit', function () use ($pages) {
    return view('design-kit', [
      'currentPageCode' => 'design_kit',
      'pages' => $pages
    ]);
})->name('design_kit');

Route::get('/templates', function () use ($pages) {
    return view('templates', [
      'currentPageCode' => 'templates',
      'pages' => $pages
    ]);
})->name('templates');

Route::get('/doc', function () use ($pages) {
    return view('doc', [
      'currentPageCode' => 'doc',
      'pages' => $pages
    ]);
})->name('doc');
