<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = Post::create([
            'title' => 'First Post Title',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate mauris nisl, at bibendum lacus bibendum ac. Integer facilisis varius ligula. Ut volutpat eros eu magna scelerisque, non dictum eros volutpat. Maecenas ut lacus vel lectus lobortis venenatis. Donec eu ipsum nisi. Vestibulum sollicitudin ut lacus a viverra. Nulla venenatis purus ultricies nunc convallis dictum. Praesent est mi, euismod id pretium a, euismod ut leo. Sed gravida malesuada dui, sit amet ornare enim vulputate efficitur.

            Pellentesque fermentum metus nisl, ut finibus nunc pulvinar sed. Pellentesque vitae ipsum eu justo ultricies rhoncus vitae et justo. Nam dictum mauris at diam molestie convallis. Vestibulum fermentum laoreet tellus, id euismod neque congue id. Morbi sollicitudin non turpis ut vehicula. Sed ut ornare ipsum, laoreet lobortis ipsum. Aenean fermentum vulputate arcu. Curabitur sit amet maximus neque. Nunc porttitor dolor leo, vitae placerat ipsum viverra eu. Curabitur porttitor scelerisque sem at maximus. Sed congue mattis dignissim. Nunc consequat cursus semper. Ut non dui eu sem malesuada pharetra.
            
            Cras luctus justo arcu, eget tempor diam tristique nec. Mauris feugiat orci imperdiet felis tempus fermentum. Suspendisse quis nunc ut leo vehicula malesuada eu quis risus. Donec nisi augue, faucibus porta interdum et, mollis eu tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer convallis ligula et quam venenatis, maximus aliquam lorem lacinia. Etiam euismod condimentum risus in malesuada. Duis euismod magna quis tortor vulputate mattis. Phasellus quis diam eget tortor elementum finibus. Phasellus at diam quis ligula feugiat vulputate sit amet sed lorem. Praesent hendrerit porta nibh. In vestibulum interdum enim id bibendum. Nunc eget augue quis nunc malesuada cursus.
            
            Sed fermentum vehicula fermentum. Mauris lobortis maximus suscipit. Sed ac mauris lorem. Aliquam maximus mollis tortor convallis aliquam. Sed tincidunt tempus consectetur. Proin mollis nibh sodales semper sagittis. Nullam fermentum, lectus sit amet rhoncus sagittis, elit leo malesuada ante, quis eleifend erat tellus non odio. Aenean facilisis lorem vel ligula sodales venenatis. Nunc id tincidunt tellus.
            
            Pellentesque ligula risus, suscipit nec lobortis id, aliquet vitae ipsum. Duis eget sagittis lacus. Aenean suscipit iaculis lectus, laoreet pulvinar mi cursus quis. Nam in nibh varius, imperdiet ante quis, consequat urna. Nunc aliquet vestibulum felis, quis tristique ligula placerat sit amet. Nam pharetra commodo ipsum, ut mollis nisi vulputate nec. Proin ultricies ac augue euismod finibus. Aenean porttitor purus sodales arcu varius, at volutpat sapien laoreet. Maecenas blandit accumsan ex. Duis venenatis id mi eget rhoncus. Mauris feugiat, lorem nec congue euismod, nibh massa cursus enim, nec sollicitudin neque odio bibendum turpis. Ut dolor mauris, condimentum at eros sit amet, consectetur pretium ante. Proin pellentesque lorem dictum ligula lacinia, eget laoreet lacus accumsan. Nullam sem quam, iaculis et elit a, porta feugiat lectus.',
            'slug' => str_slug('First Post Title'),
            'category_id' => 1,
            'featured' => 'uploads/posts/15518720844.jpg'
        ]);

        $post1->tags()->sync([1,2]);

        $post2 = Post::create([
            'title' => 'Second Post Title',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate mauris nisl, at bibendum lacus bibendum ac. Integer facilisis varius ligula. Ut volutpat eros eu magna scelerisque, non dictum eros volutpat. Maecenas ut lacus vel lectus lobortis venenatis. Donec eu ipsum nisi. Vestibulum sollicitudin ut lacus a viverra. Nulla venenatis purus ultricies nunc convallis dictum. Praesent est mi, euismod id pretium a, euismod ut leo. Sed gravida malesuada dui, sit amet ornare enim vulputate efficitur.

            Pellentesque fermentum metus nisl, ut finibus nunc pulvinar sed. Pellentesque vitae ipsum eu justo ultricies rhoncus vitae et justo. Nam dictum mauris at diam molestie convallis. Vestibulum fermentum laoreet tellus, id euismod neque congue id. Morbi sollicitudin non turpis ut vehicula. Sed ut ornare ipsum, laoreet lobortis ipsum. Aenean fermentum vulputate arcu. Curabitur sit amet maximus neque. Nunc porttitor dolor leo, vitae placerat ipsum viverra eu. Curabitur porttitor scelerisque sem at maximus. Sed congue mattis dignissim. Nunc consequat cursus semper. Ut non dui eu sem malesuada pharetra.
            
            Cras luctus justo arcu, eget tempor diam tristique nec. Mauris feugiat orci imperdiet felis tempus fermentum. Suspendisse quis nunc ut leo vehicula malesuada eu quis risus. Donec nisi augue, faucibus porta interdum et, mollis eu tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer convallis ligula et quam venenatis, maximus aliquam lorem lacinia. Etiam euismod condimentum risus in malesuada. Duis euismod magna quis tortor vulputate mattis. Phasellus quis diam eget tortor elementum finibus. Phasellus at diam quis ligula feugiat vulputate sit amet sed lorem. Praesent hendrerit porta nibh. In vestibulum interdum enim id bibendum. Nunc eget augue quis nunc malesuada cursus.
            
            Sed fermentum vehicula fermentum. Mauris lobortis maximus suscipit. Sed ac mauris lorem. Aliquam maximus mollis tortor convallis aliquam. Sed tincidunt tempus consectetur. Proin mollis nibh sodales semper sagittis. Nullam fermentum, lectus sit amet rhoncus sagittis, elit leo malesuada ante, quis eleifend erat tellus non odio. Aenean facilisis lorem vel ligula sodales venenatis. Nunc id tincidunt tellus.
            
            Pellentesque ligula risus, suscipit nec lobortis id, aliquet vitae ipsum. Duis eget sagittis lacus. Aenean suscipit iaculis lectus, laoreet pulvinar mi cursus quis. Nam in nibh varius, imperdiet ante quis, consequat urna. Nunc aliquet vestibulum felis, quis tristique ligula placerat sit amet. Nam pharetra commodo ipsum, ut mollis nisi vulputate nec. Proin ultricies ac augue euismod finibus. Aenean porttitor purus sodales arcu varius, at volutpat sapien laoreet. Maecenas blandit accumsan ex. Duis venenatis id mi eget rhoncus. Mauris feugiat, lorem nec congue euismod, nibh massa cursus enim, nec sollicitudin neque odio bibendum turpis. Ut dolor mauris, condimentum at eros sit amet, consectetur pretium ante. Proin pellentesque lorem dictum ligula lacinia, eget laoreet lacus accumsan. Nullam sem quam, iaculis et elit a, porta feugiat lectus.',
            'slug' => str_slug('Second Post Title'),
            'category_id' => 2,
            'featured' => 'uploads/posts/15518720844.jpg'
        ]);

        $post2->tags()->sync([3]);

        $post3 = Post::create([
            'title' => 'Third Post Title',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate mauris nisl, at bibendum lacus bibendum ac. Integer facilisis varius ligula. Ut volutpat eros eu magna scelerisque, non dictum eros volutpat. Maecenas ut lacus vel lectus lobortis venenatis. Donec eu ipsum nisi. Vestibulum sollicitudin ut lacus a viverra. Nulla venenatis purus ultricies nunc convallis dictum. Praesent est mi, euismod id pretium a, euismod ut leo. Sed gravida malesuada dui, sit amet ornare enim vulputate efficitur.

            Pellentesque fermentum metus nisl, ut finibus nunc pulvinar sed. Pellentesque vitae ipsum eu justo ultricies rhoncus vitae et justo. Nam dictum mauris at diam molestie convallis. Vestibulum fermentum laoreet tellus, id euismod neque congue id. Morbi sollicitudin non turpis ut vehicula. Sed ut ornare ipsum, laoreet lobortis ipsum. Aenean fermentum vulputate arcu. Curabitur sit amet maximus neque. Nunc porttitor dolor leo, vitae placerat ipsum viverra eu. Curabitur porttitor scelerisque sem at maximus. Sed congue mattis dignissim. Nunc consequat cursus semper. Ut non dui eu sem malesuada pharetra.
            
            Cras luctus justo arcu, eget tempor diam tristique nec. Mauris feugiat orci imperdiet felis tempus fermentum. Suspendisse quis nunc ut leo vehicula malesuada eu quis risus. Donec nisi augue, faucibus porta interdum et, mollis eu tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer convallis ligula et quam venenatis, maximus aliquam lorem lacinia. Etiam euismod condimentum risus in malesuada. Duis euismod magna quis tortor vulputate mattis. Phasellus quis diam eget tortor elementum finibus. Phasellus at diam quis ligula feugiat vulputate sit amet sed lorem. Praesent hendrerit porta nibh. In vestibulum interdum enim id bibendum. Nunc eget augue quis nunc malesuada cursus.
            
            Sed fermentum vehicula fermentum. Mauris lobortis maximus suscipit. Sed ac mauris lorem. Aliquam maximus mollis tortor convallis aliquam. Sed tincidunt tempus consectetur. Proin mollis nibh sodales semper sagittis. Nullam fermentum, lectus sit amet rhoncus sagittis, elit leo malesuada ante, quis eleifend erat tellus non odio. Aenean facilisis lorem vel ligula sodales venenatis. Nunc id tincidunt tellus.
            
            Pellentesque ligula risus, suscipit nec lobortis id, aliquet vitae ipsum. Duis eget sagittis lacus. Aenean suscipit iaculis lectus, laoreet pulvinar mi cursus quis. Nam in nibh varius, imperdiet ante quis, consequat urna. Nunc aliquet vestibulum felis, quis tristique ligula placerat sit amet. Nam pharetra commodo ipsum, ut mollis nisi vulputate nec. Proin ultricies ac augue euismod finibus. Aenean porttitor purus sodales arcu varius, at volutpat sapien laoreet. Maecenas blandit accumsan ex. Duis venenatis id mi eget rhoncus. Mauris feugiat, lorem nec congue euismod, nibh massa cursus enim, nec sollicitudin neque odio bibendum turpis. Ut dolor mauris, condimentum at eros sit amet, consectetur pretium ante. Proin pellentesque lorem dictum ligula lacinia, eget laoreet lacus accumsan. Nullam sem quam, iaculis et elit a, porta feugiat lectus.',
            'slug' => str_slug('Third Post Title'),
            'category_id' => 1,
            'featured' => 'uploads/posts/15518720844.jpg'
        ]);

        $post3->tags()->sync([2,3]);
    }
}
