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
            'image' => 'upload/croc.jpg',
            'title' => 'Чудеса природы',
            'tagline' => 'Разное',

            'announce' => 'Vehicula dictumst sollicitudin magna. Non pede metus phasellus tincidunt Lorem elementum dictum. Hymenaeos habitasse magna fusce senectus nunc. Sagittis conubia lobortis bibendum Iaculis habitasse diam congue elit. Elit. Turpis purus facilisis vel nullam dapibus mus montes fusce id commodo porttitor fames. Nonummy mus imperdiet.',

            'fulltext' => 'Vehicula dictumst sollicitudin magna. Non pede metus phasellus tincidunt Lorem elementum dictum. Hymenaeos habitasse magna fusce senectus nunc. Sagittis conubia lobortis bibendum Iaculis habitasse diam congue elit. Elit. Turpis purus facilisis vel nullam dapibus mus montes fusce id commodo porttitor fames. Nonummy mus imperdiet. Sit, fusce rhoncus felis tincidunt mi Nonummy pellentesque ad commodo nostra conubia odio cursus. Per natoque ante libero euismod. Enim Nostra. Vehicula venenatis class sollicitudin et egestas lorem suspendisse vel vestibulum, aliquam praesent augue pede dapibus euismod nibh a laoreet arcu nunc nostra. Nostra risus viverra, duis sociis tortor ornare. Sapien auctor cum. Ultricies augue risus.',

            'views_count' => mt_rand(1,5),
        ]);

        Post::create([
            'user_id' => '1',
            'image' => 'upload/pbp.jpg',
            'title' => 'Париж-Брест-Париж',
            'tagline' => 'Спорт',
            
            'announce' => 'Euismod iaculis dapibus porttitor ultricies nascetur dictumst blandit diam natoque massa morbi quis vulputate laoreet sed morbi cursus feugiat placerat aliquam venenatis aenean maecenas accumsan leo litora vulputate ipsum laoreet. Eu mattis. Mauris nisl. Conubia proin orci nulla torquent mi.',

            'fulltext' => 'Euismod iaculis dapibus porttitor ultricies nascetur dictumst blandit diam natoque massa morbi quis vulputate laoreet sed morbi cursus feugiat placerat aliquam venenatis aenean maecenas accumsan leo litora vulputate ipsum laoreet. Eu mattis. Mauris nisl. Conubia proin orci nulla torquent mi. Nec euismod hendrerit gravida quisque sagittis erat mauris faucibus egestas tortor rutrum justo id phasellus rhoncus lacinia, porttitor pharetra dictum lacus tempor. Dui purus elit pretium lorem tellus gravida et aptent integer egestas, ultricies feugiat donec sociosqu sagittis placerat a torquent. Interdum penatibus vivamus consequat bibendum adipiscing mus pellentesque iaculis tempus etiam lorem. Mollis metus praesent felis ut. Netus amet.',

            'views_count' => mt_rand(1,5),
        ]);

        Post::create([
            'user_id' => '1',
            'image' => 'upload/vietnam.jpg',
            'title' => 'Мраморные горы Вьетнама',
            'tagline' => 'Путешествия',

            'announce' => 'Mollis accumsan faucibus condimentum elementum penatibus felis commodo pellentesque aptent quam. Facilisi maecenas rutrum. Facilisis aptent tempus quam magna elit taciti Mollis congue nisl pede cras vel, mi tempus condimentum habitant. Non elementum at platea mollis dis congue.',

            'fulltext' => 'Mollis accumsan faucibus condimentum elementum penatibus felis commodo pellentesque aptent quam. Facilisi maecenas rutrum. Facilisis aptent tempus quam magna elit taciti Mollis congue nisl pede cras vel, mi tempus condimentum habitant. Non elementum at platea mollis dis congue. Bibendum cubilia lacus curabitur proin dapibus malesuada habitant habitant hymenaeos eu. Habitasse odio rutrum curae; blandit ad nascetur aenean dui integer class feugiat dignissim sem non platea blandit porta nulla potenti non facilisi hymenaeos tellus. Libero euismod fringilla vestibulum vehicula enim malesuada Porta felis dictumst. Etiam nunc, platea neque facilisi, ultrices vehicula Congue facilisi quis hac eleifend etiam. Aliquam platea sed quam.',

            'views_count' => mt_rand(1,5),
        ]);

        Post::create([
        	'user_id' => '1',
        	'image' => 'upload/skydive.jpg',
            'title' => '"Я помню чудные мгновения..."',
            'tagline' => 'Спорт',
            'is_favourite' => '1',

            'announce' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',

            'fulltext' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ultrices ridiculus urna natoque, sagittis posuere cum et egestas sapien urna malesuada nunc vulputate. At id quisque. Justo nunc. Aliquet sit felis. Pharetra mattis maecenas tempor eros augue magna. Pulvinar Rhoncus. Vulputate duis fermentum lorem. Porta dignissim sit porta eros porta class laoreet fringilla volutpat pulvinar nulla per adipiscing. Adipiscing hac inceptos habitant iaculis est duis, feugiat rhoncus dui, neque donec nam enim conubia donec mattis. Sollicitudin platea scelerisque lobortis adipiscing quam ridiculus purus cum cras erat senectus ultricies fermentum feugiat praesent ullamcorper penatibus purus taciti primis proin dis varius amet nibh ultricies eleifend integer semper nisl ad duis nulla.',

            'views_count' => mt_rand(1,5),
        ]);

        Post::create([
        	'user_id' => '1',
        	'image' => 'upload/waterfall.jpg',
            'title' => 'В дебрях Тайланда',
            'tagline' => 'Путешествия',

            'announce' => 'Diam, massa malesuada sollicitudin ultricies erat netus purus purus ad turpis potenti suscipit auctor parturient odio augue purus ultrices vestibulum cursus adipiscing platea. Sagittis aptent posuere parturient aliquet quis conubia viverra. Enim odio. Vulputate. Facilisis, risus, commodo, integer mauris. Commodo hendrerit aliquam sapien lobortis urna proin. Curae; odio nascetur Sodales Torquent hymenaeos curabitur sociis tortor laoreet habitant vehicula sollicitudin Elit duis posuere, vulputate ut mauris. Fames iaculis pharetra a tristique feugiat nullam dictum consectetuer pede vel volutpat Phasellus purus natoque Fermentum.',

            'fulltext' => 'Diam, massa malesuada sollicitudin ultricies erat netus purus purus ad turpis potenti suscipit auctor parturient odio augue purus ultrices vestibulum cursus adipiscing platea. Sagittis aptent posuere parturient aliquet quis conubia viverra. Enim odio. Vulputate. Facilisis, risus, commodo, integer mauris. Commodo hendrerit aliquam sapien lobortis urna proin. Curae; odio nascetur Sodales Torquent hymenaeos curabitur sociis tortor laoreet habitant vehicula sollicitudin Elit duis posuere, vulputate ut mauris. Fames iaculis pharetra a tristique feugiat nullam dictum consectetuer pede vel volutpat Phasellus purus natoque Fermentum. Class dis sagittis class feugiat orci gravida. Praesent purus sem et. Nunc, facilisi eleifend viverra erat mauris ad lorem. Aliquet ad. Semper, erat felis tempor tristique et tempus Faucibus Potenti condimentum est aliquam mi imperdiet nascetur ligula eros Dapibus ligula class. Consectetuer urna litora facilisi maecenas. Mattis scelerisque. Netus, eget adipiscing condimentum nonummy est fames donec ridiculus mauris netus. Fusce nisi sem interdum, mus nec pellentesque phasellus proin accumsan dictumst aptent. Tempor urna. Fermentum felis elit rutrum aenean eget ipsum vel enim mauris nulla libero a rhoncus est vehicula tortor. Sem ridiculus erat vestibulum sed, suspendisse cras id conubia venenatis maecenas posuere ullamcorper faucibus quam justo erat et. Sociosqu. In. Sit class nostra curabitur donec in. Dis quis neque.',

            'views_count' => mt_rand(10,20),
        ]);
    }
}
