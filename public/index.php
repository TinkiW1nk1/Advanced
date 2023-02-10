<?php
declare(strict_types=1);
include dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__) . '/src/db_config.php';
require_once dirname(__DIR__) . '/src/libs/funcs.php';
//create category
/*
$cat = new \app\Model\Category();
$cat->name = 'notebook';
$cat->save();

$cat2 = new \app\Model\Category();
$cat2->name = 'Techno';
$cat2->save();

$cat3 = new \app\Model\Category();
$cat3->name = 'Natural';
$cat3->save();

$cat4 = new \app\Model\Category();
$cat4->name = "cats";
$cat4->save();

$cat5 = new \app\Model\Category();
$cat5->name = "phone";
$cat5->save();*/

//update category
/*$cat = \app\Model\Category::find(2);
$cat->name = $cat->name . ' Apple';
$cat->save();*/

//deleted category
/*$cat = \app\Model\Category::find(2);
$cat->delete();*/

//Created Post (random category)
//  Random category
/*$category = \app\Model\Category::all()->toArray();
$temp = [];
foreach ($category as $cat)
{
    $temp[] = $cat['id'];
}*/

/*$post = new \app\Model\Post();
$post->name = 'Lorem ipsum';
$post->text = 'Lorem ipsum';
$post->category_id = $temp[array_rand($temp)];
$post->save();

$post2 = new \app\Model\Post();
$post2->name = 'Lorem2';
$post2->text = 'Lorem ipsum';
$post2->category_id = $temp[array_rand($temp)];
$post2->save();

$post3 = new \app\Model\Post();
$post3->name = 'Lorem3';
$post3->text = 'Lorem ipsum';
$post3->category_id = $temp[array_rand($temp)];
$post3->save();

$post4 = new \app\Model\Post();
$post4->name = 'Lorem4';
$post4->text = 'Lorem ipsum';
$post4->category_id = $temp[array_rand($temp)];
$post4->save();

$post5 = new \app\Model\Post();
$post5->name = 'Lorem5';
$post5->text = 'Lorem ipsum';
$post5->category_id = $temp[array_rand($temp)];
$post5->save();

$post6 = new \app\Model\Post();
$post6->name = 'Lorem6';
$post6->text = 'Lorem ipsum';
$post6->category_id = $temp[array_rand($temp)];
$post6->save();

$post7 = new \app\Model\Post();
$post7->name = 'Lorem7';
$post7->text = 'Lorem ipsum';
$post7->category_id = $temp[array_rand($temp)];
$post7->save();

$post8 = new \app\Model\Post();
$post8->name = 'Lorem8';
$post8->text = 'Lorem ipsum';
$post8->category_id = $temp[array_rand($temp)];
$post8->save();

$post9 = new \app\Model\Post();
$post9->name = 'Lorem9';
$post9->text = 'Lorem ipsum';
$post9->category_id = $temp[array_rand($temp)];
$post9->save();

$post10 = new \app\Model\Post();
$post10->name = 'Lorem10';
$post10->text = 'Lorem ipsum';
$post10->category_id = $temp[array_rand($temp)]);
$post10->save();
*/

//update Post
/*$post = \app\Model\Post::find(3);
$post->name = 'OLOLOLO';
$post->text = 'Tralalala';
$post->category_id = 3;
$post->save();*/

//deleted Post
/*$post = \app\Model\Post::find(1);
$post->delete();*/

// created Tag
/*$tag = new \app\Model\Tag();
$tag->name = 'tag';
/*$tag->name = 'tag4';
/*$tag->name = 'tag5';
/*$tag->name = 'tag6';
/*$tag->name = 'tag7';
/*$tag->name = 'tag8';
/*$tag->name = 'tag9';
/*$tag->name = 'tag10';
$tag->save();*/
