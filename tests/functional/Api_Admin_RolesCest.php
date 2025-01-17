<?php

class Api_Admin_RolesCest extends CestAbstract
{
    /**
     * @before setupComplete
     * @before login
     */
    public function manageRoles(FunctionalTester $I): void
    {
        $I->wantTo('Manage roles via API.');

        $this->testCrudApi(
            $I,
            '/api/admin/roles',
            [
                'name' => 'Super Administrator',
                'permissions' => [
                    'global' => [
                        App\Enums\GlobalPermissions::All->value,
                    ],
                ],
            ],
            [
                'name' => 'Test Super Administrator',
            ]
        );
    }
}
