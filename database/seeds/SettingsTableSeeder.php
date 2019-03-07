<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'site_name' => 'First laravel Blog',
            'contact_number' => '100 200 300 88',
            'contact_email' => 'admin@me.com',
            'address' => 'Zurich, Switzerland',
            'footer_information' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum, arcu vitae convallis dignissim, sem lacus malesuada tellus, ut sollicitudin arcu ante quis mauris. Cras nec convallis metus. Nam lectus massa, sodales nec consectetur nec, vestibulum id elit. Integer eget enim eget neque consectetur blandit vel vel nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas purus est, pretium eu nibh non, mollis dignissim dolor. Quisque non laoreet nisi, vitae vestibulum ante. Integer dignissim est nec aliquam scelerisque. Vestibulum imperdiet facilisis augue ac ullamcorper. Suspendisse volutpat, orci eu volutpat suscipit, metus dolor convallis massa, ac ornare nulla nisi eu odio. Mauris euismod enim vel magna vestibulum aliquet. Aenean tempus sodales massa eu vehicula. Aliquam gravida erat ex, vel euismod sapien sollicitudin vel. Pellentesque porttitor libero vitae augue consequat, auctor mattis eros molestie. Fusce lorem ex, interdum sed porttitor at, sodales in nibh.

            Maecenas gravida diam in turpis luctus, auctor rutrum nulla convallis. Curabitur laoreet justo ut dignissim eleifend. Nullam nulla lorem, placerat a rhoncus eu, lobortis non ligula. Suspendisse malesuada id elit porttitor vestibulum. Phasellus in interdum turpis, in elementum odio. Morbi sagittis interdum consectetur. Cras euismod tempus odio, in varius dui tempor et. Praesent ac consectetur velit, a lacinia erat. Cras eget blandit libero. Curabitur mi risus, rhoncus vel lacus convallis, luctus euismod sem. Fusce pellentesque, sapien et aliquam tincidunt, velit nibh mollis sapien, non porttitor risus tellus non massa. Curabitur bibendum ornare justo ut viverra.'
        ]);
    }
}
