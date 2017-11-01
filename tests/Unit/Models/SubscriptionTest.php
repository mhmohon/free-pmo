<?php

namespace Tests\Unit\Models;

use App\Entities\Partners\Customer;
use App\Entities\Projects\Project;
use App\Entities\Subscriptions\Subscription;
use Tests\TestCase as TestCase;

class SubscriptionTest extends TestCase
{
    /** @test */
    public function it_has_domain_name_attribute()
    {
        $subscription = factory(Subscription::class)->create(['domain_name' => 'Subscription 1 Domain Name']);
        $this->assertEquals('Subscription 1 Domain Name', $subscription->domain_name);
    }

    /** @test */
    public function it_has_project_relation()
    {
        $subscription = factory(Subscription::class)->create();
        $this->assertTrue($subscription->project instanceof Project);
    }

    /** @test */
    public function it_has_vendor_relation()
    {
        $subscription = factory(Subscription::class)->create();
        $this->assertTrue($subscription->vendor instanceof Customer);
    }
}
