<?php

use SleepingOwl\Admin\Navigation\Page;

// Default check access logic
// AdminNavigation::setAccessLogic(function(Page $page) {
// 	   return auth()->user()->isSuperAdmin();
// });
//
// AdminNavigation::addPage(\App\User::class)->setTitle('test')->setPages(function(Page $page) {
// 	  $page
//		  ->addPage()
//	  	  ->setTitle('Dashboard')
//		  ->setUrl(route('admin.dashboard'))
//		  ->setPriority(100);
//
//	  $page->addPage(\App\User::class);
// });
//
// // or
//
// AdminSection::addMenuPage(\App\User::class)

return [
    [
        'title' => 'Dashboard',
        'icon'  => 'fa fa-dashboard',
        'url'   => route('admin.dashboard'),
		'priority' => 0,
    ],

    [
        'title' => 'Search item',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.main'),
		'priority' => 100,
    ],

	[
        'title' => 'Price calc',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.main.price'),
		'priority' => 200,
    ],
	
	[
        'title' => 'Auto find',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.main.auto'),
		'priority' => 200,
    ],
	[
        'title' => 'Flat find',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.flat.index'),
		'priority' => 200,
    ],
    [
        'title' => 'Auto like',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '/admin/main/auto?like=1',
		'priority' => 200,
    ],
    
    [
        'title' => 'Flat like',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => '/admin/flat/index?like=1',
		'priority' => 200,
    ],

	/*
	[
        'title' => 'Item',
        'icon'  => 'fa fa-user',
		'pages' => \App\Item::class,
    
    ],
	*/
	


	
    // Examples
    // [
    //    'title' => 'Content',
    //    'pages' => [
    //
    //        \App\User::class,
    //
    //        // or
    //
    //        (new Page(\App\User::class))
    //            ->setPriority(100)
    //            ->setIcon('fa fa-user')
    //            ->setUrl('users')
    //            ->setAccessLogic(function (Page $page) {
    //                return auth()->user()->isSuperAdmin();
    //            }),
    //
    //        // or
    //
    //        new Page([
    //            'title'    => 'News',
    //            'priority' => 200,
    //            'model'    => \App\News::class
    //        ]),
    //
    //        // or
    //        (new Page(/* ... */))->setPages(function (Page $page) {
    //            $page->addPage([
    //                'title'    => 'Blog',
    //                'priority' => 100,
    //                'model'    => \App\Blog::class
	//		      ));
    //
	//		      $page->addPage(\App\Blog::class);
    //	      }),
    //
    //        // or
    //
    //        [
    //            'title'       => 'News',
    //            'priority'    => 300,
    //            'accessLogic' => function ($page) {
    //                return $page->isActive();
    //		      },
    //            'pages'       => [
    //
    //                // ...
    //
    //            ]
    //        ]
    //    ]
    // ]
];