<?php
/**
 * Single Responsibility Principle in PHP
 * 
 * Each class should be stored in a folder called Services/User/*.
 */

// Located in Services/User/UserAuthenticatorService.php
class UserAuthenticatorService
{
	public function isAllowedToAccessAdmin( User $user ): bool
	{
		// ...
	}
}

// Located in Services/User/UserFormatterService.php
class UserFormatterService
{
	public function serialize( User $user ): string
	{
		// ...
	}
}

// Located in Services/User/UserSessionService.php
class UserSessionService
{
	public function invalidate( User $user ): void
	{
		// ...
	}
}

// Located in Services/User/UserUpdatorService.php
class UserUpdatorService
{
	public function updateFromAPI( User $user): User
	{
		// ...
	}
}