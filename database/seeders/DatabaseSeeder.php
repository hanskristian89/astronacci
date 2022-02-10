<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'User A',
            'level' => 'A',
            'email' => 'user.a@example.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'User B',
            'level' => 'B',
            'email' => 'user.b@example.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'User C',
            'level' => 'C',
            'email' => 'user.c@example.com',
            'password' => bcrypt('123456')
        ]);

        Article::create([
            'title' => 'Artikel 1',
            'slug' => 'artikel-1',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);
        Article::create([
            'title' => 'Artikel 2',
            'slug' => 'artikel-2',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);
        Article::create([
            'title' => 'Artikel 3',
            'slug' => 'artikel-3',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);
        Article::create([
            'title' => 'Artikel 4',
            'slug' => 'artikel-4',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);
        Article::create([
            'title' => 'Artikel 5',
            'slug' => 'artikel-5',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);
        Article::create([
            'title' => 'Artikel 6',
            'slug' => 'artikel-6',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);
        Article::create([
            'title' => 'Artikel 7',
            'slug' => 'artikel-7',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);
        Article::create([
            'title' => 'Artikel 8',
            'slug' => 'artikel-8',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);
        Article::create([
            'title' => 'Artikel 9',
            'slug' => 'artikel-9',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);
        Article::create([
            'title' => 'Artikel 10',
            'slug' => 'artikel-10',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);
        Article::create([
            'title' => 'Artikel 11',
            'slug' => 'artikel-11',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);
        Article::create([
            'title' => 'Artikel 12',
            'slug' => 'artikel-12',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);
        Article::create([
            'title' => 'Artikel 13',
            'slug' => 'artikel-13',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);
        Article::create([
            'title' => 'Artikel 14',
            'slug' => 'artikel-14',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);
        Article::create([
            'title' => 'Artikel 15',
            'slug' => 'artikel-15',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et arcu orci. Nulla ut lacinia lacus. Donec dictum mi at lorem malesuada laoreet. In hac habitasse platea dictumst. Cras facilisis eros justo. Aliquam nisi nisl, porttitor at ornare et, hendrerit at sem. Praesent turpis turpis, efficitur vitae orci pellentesque, laoreet feugiat quam. Curabitur viverra ultrices vestibulum. Nam lacus augue, mollis ac pharetra iaculis, scelerisque sed elit. In in mollis tellus, venenatis venenatis orci. Sed pharetra ullamcorper mauris porta blandit. Etiam eu sapien et purus aliquet tincidunt. In nec quam viverra, ultrices sem vitae, commodo lorem.',
        ]);

        Video::create([
            'title' => 'Belajar Laravel 8 - 1 Intro',
            'slug' => 'belajar-laravel-8-1-intro',
            'link' => 'https://www.youtube.com/embed/HqAMb6kqlLs?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
        Video::create([
            'title' => 'Belajar Laravel 8 - 2 Instalasi & Konfigurasi',
            'slug' => 'belajar-laravel-8-2-instalasi-and-konfigurasi',
            'link' => 'https://www.youtube.com/embed/pZqk57Xvujs?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
        Video::create([
            'title' => 'Belajar Laravel 8 - 3 Struktur Folder, Routes & View',
            'slug' => 'belajar-laravel-8-3-struktur-folder-routes-and-view',
            'link' => 'https://www.youtube.com/embed/u7zS2XpMpsc?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
        Video::create([
            'title' => 'Belajar Laravel 8 - 4 Blade Templating Engine',
            'slug' => 'belajar-laravel-8-4-blade-templating-engine',
            'link' => 'https://www.youtube.com/embed/9jrD0wcfq1g?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
        Video::create([
            'title' => 'Belajar Laravel 8 - 5 Model, Collection & Controller',
            'slug' => 'belajar-laravel-8-5-model-collection-and-controller',
            'link' => 'https://www.youtube.com/embed/ptWgufbjURA?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
        Video::create([
            'title' => 'Belajar Laravel 8 - 6 Database, Migration & Eloquent',
            'slug' => 'belajar-laravel-8-6-database-migration-and-eloquent',
            'link' => 'https://www.youtube.com/embed/ePBWUZRQdrI?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
        Video::create([
            'title' => 'Belajar Laravel 8 - 7 Post Model',
            'slug' => 'belajar-laravel-8-7-post-model',
            'link' => 'https://www.youtube.com/embed/o1em86nhU28?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
        Video::create([
            'title' => 'Belajar Laravel 8 - 8 Post Category & Eloquent Relationship',
            'slug' => 'belajar-laravel-8-8-post-category-and-eloquent-relationship',
            'link' => 'https://www.youtube.com/embed/HR_Piu6qtoI?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
        Video::create([
            'title' => 'Belajar Laravel 8 - 9 Database Seeder',
            'slug' => 'belajar-laravel-8-9-database-seeder',
            'link' => 'https://www.youtube.com/embed/aC6MJgsxgrk?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
        Video::create([
            'title' => 'Belajar Laravel 8 - 10 Factory & Faker',
            'slug' => 'belajar-laravel-8-10-factory-and-faker',
            'link' => 'https://www.youtube.com/embed/xXc6Ti7qwi0?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
        Video::create([
            'title' => 'Belajar Laravel 8 - 11 N1 Problem',
            'slug' => 'belajar-laravel-8-11-n1-problem',
            'link' => 'https://www.youtube.com/embed/q8FmWY5y0qI?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
        Video::create([
            'title' => 'Belajar Laravel 8 - 12 Redesign UI',
            'slug' => 'belajar-laravel-8-12-redesign-ui',
            'link' => 'https://www.youtube.com/embed/1WDHJorZK9M?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
        Video::create([
            'title' => 'Belajar Laravel 8 - 13 Searching & Pagination',
            'slug' => 'belajar-laravel-8-13-searching-and-pagination',
            'link' => 'https://www.youtube.com/embed/YzGH6odpwpc?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
        Video::create([
            'title' => 'Belajar Laravel 8 - 14 View Login & Registration',
            'slug' => 'belajar-laravel-8-14-view-login-and-registration',
            'link' => 'https://www.youtube.com/embed/Wf7RliwJxj4?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
        Video::create([
            'title' => 'Belajar Laravel 8 - 15 User Registration',
            'slug' => 'belajar-laravel-8-15-user-registration',
            'link' => 'https://www.youtube.com/embed/6sIk2sYacTw?list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2'
        ]);
    }
}
