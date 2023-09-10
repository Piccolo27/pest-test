<?php

use function Pest\Laravel\get;

it('gives back successful response for home page', function () {
    // Act and Assert
    get(route('home'))
        ->assertOk();
});
