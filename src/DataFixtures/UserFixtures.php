<?php 
namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
	private $passwordEncoder;

	public function __construct(UserPasswordEncoderInterface $passwordEncoder)
	{
		$this->passwordEncoder = $passwordEncoder;
	}
	public function load(ObjectManager $manager)
	{
		$user = new User();
		$user->setEmail('admin@gmail.com');
		$user->setUsername('admin');
		$user->setRoles(['ROLE_ADMIN']);
		$user->setIsVerified(true);
		$user->setPassword($this->passwordEncoder->encodePassword(
				$user,
				'admin'
		));
		$manager->persist($user);
		$user2 = new User();
		$user2->setUsername('user');
		$user2->setEmail('user@gmail.com');
		$user2->setRoles(['ROLE_MANAGER']);
		$user2->setIsVerified(true);
		$user2->setPassword($this->passwordEncoder->encodePassword(
			$user2,
			'user'
		));
		$manager->persist($user2);
		$user3 = new User();
		$user3->setUsername('dg');
		$user3->setEmail('dg@gmail.com');
		$user3->setRoles(['ROLE_DG']);
		$user3->setIsVerified(true);
		$user3->setPassword($this->passwordEncoder->encodePassword(
			$user3,
			'dg'
		));
		$manager->persist($user3);
		$manager->flush();
	}


}