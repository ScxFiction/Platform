<?php namespace Modules\User\Repositories;

interface AuthenticationRepository
{
    /**
     * Authenticate a user
     * @param array $credentials
     * @param bool $remember Remember the user
     * @return mixed
     */
    public function login(array $credentials, $remember = false);

    /**
     * Register a new user.
     * @param array $user
     * @return bool
     */
    public function register(array $user);

    /**
     * Activate the given used id
     * @param int $userId
     * @param string $code
     * @return mixed
     */
    public function activate($userId, $code);

    /**
     * Assign a role to the given user.
     * @param \Modules\User\Repositories\UserRepository $user
     * @param \Modules\User\Repositories\RoleRepository $role
     * @return mixed
     */
    public function assignRole($user, $role);

    /**
     * Log the user out of the application.
     * @return mixed
     */
    public function logout();

    /**
     * Create an activation code for the given user
     * @param $user
     * @return mixed
     */
    public function createActivation($user);

    /**
     * Create a reminders code for the given user
     * @param $user
     * @return mixed
     */
    public function createReminderCode($user);

    /**
     * Completes the reset password process
     * @param $user
     * @param string $code
     * @param string $password
     * @return bool
     */
    public function completeResetPassword($user, $code, $password);
}
