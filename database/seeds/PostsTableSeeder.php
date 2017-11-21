<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
        	'user_id' => '1',
        	'image' => 'upload/skydive.jpg',
            'title' => 'Заголовок поста №1',
            'tagline' => 'Спорт',

            'announce' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',

            'fulltext' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ultrices ridiculus urna natoque, sagittis posuere cum et egestas sapien urna malesuada nunc vulputate. At id quisque. Justo nunc. Aliquet sit felis. Pharetra mattis maecenas tempor eros augue magna. Pulvinar Rhoncus. Vulputate duis fermentum lorem. Porta dignissim sit porta eros porta class laoreet fringilla volutpat pulvinar nulla per adipiscing. Adipiscing hac inceptos habitant iaculis est duis, feugiat rhoncus dui, neque donec nam enim conubia donec mattis. Sollicitudin platea scelerisque lobortis adipiscing quam ridiculus purus cum cras erat senectus ultricies fermentum feugiat praesent ullamcorper penatibus purus taciti primis proin dis varius amet nibh ultricies eleifend integer semper nisl ad duis nulla.',

            'views_count' => mt_rand(0,100),
        ]);

        Post::create([
        	'user_id' => '1',
        	'image' => 'upload/waterfall.jpg',
            'title' => 'Заголовок поста №2',
            'tagline' => 'Путешествия',

            'announce' => 'Diam, massa malesuada sollicitudin ultricies erat netus purus purus ad turpis potenti suscipit auctor parturient odio augue purus ultrices vestibulum cursus adipiscing platea. Sagittis aptent posuere parturient aliquet quis conubia viverra. Enim odio. Vulputate. Facilisis, risus, commodo, integer mauris. Commodo hendrerit aliquam sapien lobortis urna proin. Curae; odio nascetur Sodales Torquent hymenaeos curabitur sociis tortor laoreet habitant vehicula sollicitudin Elit duis posuere, vulputate ut mauris. Fames iaculis pharetra a tristique feugiat nullam dictum consectetuer pede vel volutpat Phasellus purus natoque Fermentum.',

            'fulltext' => 'Diam, massa malesuada sollicitudin ultricies erat netus purus purus ad turpis potenti suscipit auctor parturient odio augue purus ultrices vestibulum cursus adipiscing platea. Sagittis aptent posuere parturient aliquet quis conubia viverra. Enim odio. Vulputate. Facilisis, risus, commodo, integer mauris. Commodo hendrerit aliquam sapien lobortis urna proin. Curae; odio nascetur Sodales Torquent hymenaeos curabitur sociis tortor laoreet habitant vehicula sollicitudin Elit duis posuere, vulputate ut mauris. Fames iaculis pharetra a tristique feugiat nullam dictum consectetuer pede vel volutpat Phasellus purus natoque Fermentum. Class dis sagittis class feugiat orci gravida. Praesent purus sem et. Nunc, facilisi eleifend viverra erat mauris ad lorem. Aliquet ad. Semper, erat felis tempor tristique et tempus Faucibus Potenti condimentum est aliquam mi imperdiet nascetur ligula eros Dapibus ligula class. Consectetuer urna litora facilisi maecenas. Mattis scelerisque. Netus, eget adipiscing condimentum nonummy est fames donec ridiculus mauris netus. Fusce nisi sem interdum, mus nec pellentesque phasellus proin accumsan dictumst aptent. Tempor urna. Fermentum felis elit rutrum aenean eget ipsum vel enim mauris nulla libero a rhoncus est vehicula tortor. Sem ridiculus erat vestibulum sed, suspendisse cras id conubia venenatis maecenas posuere ullamcorper faucibus quam justo erat et. Sociosqu. In. Sit class nostra curabitur donec in. Dis quis neque.',

            'views_count' => mt_rand(0,100),
        ]);
    }
}
