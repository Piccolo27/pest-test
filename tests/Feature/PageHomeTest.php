<?php

use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\get;

uses(RefreshDatabase::class);

it('shows courses overview', function () {
    // Arrange
    Course::factory()->create(['title' => 'Course A', 'description' => 'Description A']);
    Course::factory()->create(['title' => 'Course B', 'description' => 'Description B']);
    Course::factory()->create(['title' => 'Course C', 'description' => 'Description C']);


    // Act & Assert
    get(route('home'))
        ->assertSeeText([
            'Course A',
            'Description A',
            'Course B',
            'Description B'
        ]);
});


it('shows only released courses', function () {

});

it('shows courses by released dates', function () {

});
