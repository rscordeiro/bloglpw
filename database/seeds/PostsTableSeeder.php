<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Teste 1',
                'slug' => 'teste-1',
                'draft' => 0,
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci quam, gravida quis efficitur at, porttitor et ex. Ut pretium congue arcu et iaculis. Ut imperdiet dictum libero, non blandit tellus rhoncus sed. Etiam vel lacus nisl. Mauris odio enim, fermentum eu lorem eget, viverra mollis dui. Phasellus nec augue nisl. Curabitur aliquet dui in odio finibus facilisis.
                Sed posuere gravida nunc, vitae luctus odio rutrum eget. Ut luctus magna sit amet orci laoreet porta. Nulla massa tortor, consequat ut consectetur sit amet, egestas ut eros. Morbi posuere nunc eleifend diam luctus, sit amet porttitor urna hendrerit. Mauris tellus nulla, facilisis ut volutpat eget, feugiat imperdiet libero. Maecenas venenatis sit amet nunc sed pretium. Donec efficitur dapibus neque, nec pulvinar arcu. Morbi ac augue ac ipsum vehicula pellentesque vel ac diam. Maecenas ex nibh, lobortis eu sem sed, dapibus convallis nibh. Integer non diam ligula. Pellentesque at massa metus. Nunc pretium, diam ac eleifend scelerisque, augue tortor sollicitudin magna, a placerat augue mi nec erat. Aenean auctor felis vel elit cursus luctus. Aenean elit sem, suscipit id luctus quis, lacinia sed metus.",
                'created_at' => '2019-06-02 12:20:00'
            ],
            [
                'title' => 'Teste 2',
                'slug' => 'teste-2',
                'draft' => 0,
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci quam, gravida quis efficitur at, porttitor et ex. Ut pretium congue arcu et iaculis. Ut imperdiet dictum libero, non blandit tellus rhoncus sed. Etiam vel lacus nisl. Mauris odio enim, fermentum eu lorem eget, viverra mollis dui. Phasellus nec augue nisl. Curabitur aliquet dui in odio finibus facilisis. 
                Sed posuere gravida nunc, vitae luctus odio rutrum eget. Ut luctus magna sit amet orci laoreet porta. Nulla massa tortor, consequat ut consectetur sit amet, egestas ut eros. Morbi posuere nunc eleifend diam luctus, sit amet porttitor urna hendrerit. Mauris tellus nulla, facilisis ut volutpat eget, feugiat imperdiet libero. Maecenas venenatis sit amet nunc sed pretium. Donec efficitur dapibus neque, nec pulvinar arcu. Morbi ac augue ac ipsum vehicula pellentesque vel ac diam. Maecenas ex nibh, lobortis eu sem sed, dapibus convallis nibh. Integer non diam ligula. Pellentesque at massa metus. Nunc pretium, diam ac eleifend scelerisque, augue tortor sollicitudin magna, a placerat augue mi nec erat. Aenean auctor felis vel elit cursus luctus. Aenean elit sem, suscipit id luctus quis, lacinia sed metus.",
                'created_at' => '2019-06-02 12:20:00'
            ],
            [
                'title' => 'Teste 3',
                'slug' => 'teste-3',
                'draft' => 1,
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci quam, gravida quis efficitur at, porttitor et ex. Ut pretium congue arcu et iaculis. Ut imperdiet dictum libero, non blandit tellus rhoncus sed. Etiam vel lacus nisl. Mauris odio enim, fermentum eu lorem eget, viverra mollis dui. Phasellus nec augue nisl. Curabitur aliquet dui in odio finibus facilisis.
                Sed posuere gravida nunc, vitae luctus odio rutrum eget. Ut luctus magna sit amet orci laoreet porta. Nulla massa tortor, consequat ut consectetur sit amet, egestas ut eros. Morbi posuere nunc eleifend diam luctus, sit amet porttitor urna hendrerit. Mauris tellus nulla, facilisis ut volutpat eget, feugiat imperdiet libero. Maecenas venenatis sit amet nunc sed pretium. Donec efficitur dapibus neque, nec pulvinar arcu. Morbi ac augue ac ipsum vehicula pellentesque vel ac diam. Maecenas ex nibh, lobortis eu sem sed, dapibus convallis nibh. Integer non diam ligula. Pellentesque at massa metus. Nunc pretium, diam ac eleifend scelerisque, augue tortor sollicitudin magna, a placerat augue mi nec erat. Aenean auctor felis vel elit cursus luctus. Aenean elit sem, suscipit id luctus quis, lacinia sed metus.",
                'created_at' => '2019-06-02 12:20:00'
            ],
        ]);
    }
}