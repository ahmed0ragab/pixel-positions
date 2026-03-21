<?php

use App\Models\Employer;
use App\Models\Job;


test('it belongs to an employer', function () {
    // AAA
    // Arrange

    // need employer
   $employer = Employer::factory()->create();
   $job = Job::factory()->create([
        'employer_id'=>$employer->id
   ]);


    // Act

        expect($job->employer->is($employer))->toBeTrue();                 //access employer related to job

    // Assert

    // expect(true)->toBeFalse();
});


test('expected results to be 2',function(){
        $results = 1+1;

        // expect($results)->toBe(2);

        $this->assertSame(2,$results);


});

it('can have tag',function(){
    // arrange
    $job = Job::factory()->create();
    $job->tag('frontend');
   expect($job->tags)->toHaveCount(1);
});
