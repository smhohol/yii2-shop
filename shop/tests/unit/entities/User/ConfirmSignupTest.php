<?php
namespace shop\tests\unit\entities\User;

use Codeception\Test\Unit;
use shop\entities\User\User;

class ConfirmSignupTest extends Unit
{
    public function testSuccess()
    {
        $user = new User([
            'status' => User::STATUS_INACTIVE,
            'verification_token' => 'token',
        ]);

        $user->confirmEmailVerification();
        $this->assertEmpty($user->verification_token);
        $this->assertTrue($user->isActive());
    }

    public function testAlreadyActive()
    {
        $user = new User([
            'status' => User::STATUS_ACTIVE,
            'verification_token' => null,
        ]);

        $this->expectExceptionMessage('user is already active.');
        $user->confirmEmailVerification();
    }
}