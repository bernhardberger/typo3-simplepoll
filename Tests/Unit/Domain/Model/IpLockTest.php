<?php

namespace Pixelink\Simplepoll\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Alex Bigott <support@pixel-ink.de>, Pixel Ink
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \Pixelink\Simplepoll\Domain\Model\IpLock.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Alex Bigott <support@pixel-ink.de>
 */
class IpLockTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Pixelink\Simplepoll\Domain\Model\IpLock
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Pixelink\Simplepoll\Domain\Model\IpLock();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getAddressReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAddress()
		);
	}

	/**
	 * @test
	 */
	public function setAddressForStringSetsAddress() {
		$this->subject->setAddress('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'address',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTimestampReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getTimestamp()
		);
	}

	/**
	 * @test
	 */
	public function setTimestampForDateTimeSetsTimestamp() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setTimestamp($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'timestamp',
			$this->subject
		);
	}
}
