<?php
namespace Redicon\CMS_Articles\Database\Seeds;
use Illuminate\Database\Seeder;
use Redicon\CMS_Articles\App\Models\ArticlesDescription;

class ArticlesDescriptionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       ArticlesDescription::create([
           'article_id' => 1,
           'url' => 'articles/1',
           'lang' => 'pl',
           'name' => "Główny artykuł opis",
           'addmission' => 'Coś tam',
           'description'=> 'Jakiś opis',
           'link' => 'articles/1',
           'img_src' => 'vendor/cms_articles/articles/images/test.png'
       ]);
    }
}