<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2021 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\SurnameTradition;

use Fisharebest\Webtrees\TestCase;

/**
 * Test harness for the class SpanishSurnameTradition
 */
class PolishSurnameTraditionTest extends TestCase
{
    /** @var SurnameTraditionInterface */
    private $surname_tradition;

    /**
     * Prepare the environment for these tests
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->surname_tradition = new PolishSurnameTradition();
    }

    /**
     * Test whether married surnames are used
     *
     * @covers \Fisharebest\Webtrees\SurnameTradition\PolishSurnameTradition
     * @covers \Fisharebest\Webtrees\SurnameTradition\PatrilinealSurnameTradition
     *
     * @return void
     */
    public function testMarriedSurnames(): void
    {
        self::assertTrue($this->surname_tradition->hasMarriedNames());
    }

    /**
     * Test whether surnames are used
     *
     * @covers \Fisharebest\Webtrees\SurnameTradition\PolishSurnameTradition
     * @covers \Fisharebest\Webtrees\SurnameTradition\PatrilinealSurnameTradition
     *
     * @return void
     */
    public function testSurnames(): void
    {
        self::assertTrue($this->surname_tradition->hasSurnames());
    }

    /**
     * Test new son names
     *
     * @covers \Fisharebest\Webtrees\SurnameTradition\PolishSurnameTradition
     * @covers \Fisharebest\Webtrees\SurnameTradition\PatrilinealSurnameTradition
     *
     * @return void
     */
    public function testNewSonNames(): void
    {
        self::assertSame(
            [
                'NAME' => '/White/',
                'SURN' => 'White',
            ],
            $this->surname_tradition->newChildNames('John /White/', 'Mary /Black/', 'M')
        );
    }

    /**
     * Test new daughter names
     *
     * @covers \Fisharebest\Webtrees\SurnameTradition\PolishSurnameTradition
     * @covers \Fisharebest\Webtrees\SurnameTradition\PatrilinealSurnameTradition
     *
     * @return void
     */
    public function testNewDaughterNames(): void
    {
        self::assertSame(
            [
                'NAME' => '/White/',
                'SURN' => 'White',
            ],
            $this->surname_tradition->newChildNames('John /White/', 'Mary /Black/', 'F')
        );
    }

    /**
     * Test new daughter names
     *
     * @covers \Fisharebest\Webtrees\SurnameTradition\PolishSurnameTradition
     * @covers \Fisharebest\Webtrees\SurnameTradition\PatrilinealSurnameTradition
     *
     * @return void
     */
    public function testNewDaughterNamesInflected(): void
    {
        self::assertSame(
            [
                'NAME' => '/Whitecka/',
                'SURN' => 'Whitecki',
            ],
            $this->surname_tradition->newChildNames('John /Whitecki/', 'Mary /Black/', 'F')
        );
        self::assertSame(
            [
                'NAME' => '/Whitedzka/',
                'SURN' => 'Whitedzki',
            ],
            $this->surname_tradition->newChildNames('John /Whitedzki/', 'Mary /Black/', 'F')
        );
        self::assertSame(
            [
                'NAME' => '/Whiteska/',
                'SURN' => 'Whiteski',
            ],
            $this->surname_tradition->newChildNames('John /Whiteski/', 'Mary /Black/', 'F')
        );
        self::assertSame(
            [
                'NAME' => '/White??ka/',
                'SURN' => 'White??ki',
            ],
            $this->surname_tradition->newChildNames('John /White??ki/', 'Mary /Black/', 'F')
        );
    }

    /**
     * Test new child names
     *
     * @covers \Fisharebest\Webtrees\SurnameTradition\PolishSurnameTradition
     * @covers \Fisharebest\Webtrees\SurnameTradition\PatrilinealSurnameTradition
     *
     * @return void
     */
    public function testNewChildNames(): void
    {
        self::assertSame(
            [
                'NAME' => '/White/',
                'SURN' => 'White',
            ],
            $this->surname_tradition->newChildNames('John /White/', 'Mary /Black/', 'U')
        );
    }

    /**
     * Test new child names
     *
     * @covers \Fisharebest\Webtrees\SurnameTradition\PolishSurnameTradition
     * @covers \Fisharebest\Webtrees\SurnameTradition\PatrilinealSurnameTradition
     *
     * @return void
     */
    public function testNewChildNamesWithNoParentsNames(): void
    {
        self::assertSame(
            ['NAME' => '//'],
            $this->surname_tradition->newChildNames('', '', 'U')
        );
    }

    /**
     * Test new father names
     *
     * @covers \Fisharebest\Webtrees\SurnameTradition\PolishSurnameTradition
     * @covers \Fisharebest\Webtrees\SurnameTradition\PatrilinealSurnameTradition
     *
     * @return void
     */
    public function testNewFatherNames(): void
    {
        self::assertSame(
            [
                'NAME' => '/White/',
                'SURN' => 'White',
            ],
            $this->surname_tradition->newParentNames('John /White/', 'M')
        );
    }

    /**
     * Test new father names
     *
     * @covers \Fisharebest\Webtrees\SurnameTradition\PolishSurnameTradition
     * @covers \Fisharebest\Webtrees\SurnameTradition\PatrilinealSurnameTradition
     *
     * @return void
     */
    public function testNewFatherNamesInflected(): void
    {
        self::assertSame(
            [
                'NAME' => '/Whitecki/',
                'SURN' => 'Whitecki',
            ],
            $this->surname_tradition->newParentNames('Mary /Whitecka/', 'M')
        );
        self::assertSame(
            [
                'NAME' => '/Whitedzki/',
                'SURN' => 'Whitedzki',
            ],
            $this->surname_tradition->newParentNames('Mary /Whitedzka/', 'M')
        );
        self::assertSame(
            [
                'NAME' => '/Whiteski/',
                'SURN' => 'Whiteski',
            ],
            $this->surname_tradition->newParentNames('Mary /Whiteska/', 'M')
        );
        self::assertSame(
            [
                'NAME' => '/White??ki/',
                'SURN' => 'White??ki',
            ],
            $this->surname_tradition->newParentNames('Mary /White??ka/', 'M')
        );
    }

    /**
     * Test new mother names
     *
     * @covers \Fisharebest\Webtrees\SurnameTradition\PolishSurnameTradition
     * @covers \Fisharebest\Webtrees\SurnameTradition\PatrilinealSurnameTradition
     *
     * @return void
     */
    public function testNewMotherNames(): void
    {
        self::assertSame(
            ['NAME' => '//'],
            $this->surname_tradition->newParentNames('John /White/', 'F')
        );
    }

    /**
     * Test new parent names
     *
     * @covers \Fisharebest\Webtrees\SurnameTradition\PolishSurnameTradition
     * @covers \Fisharebest\Webtrees\SurnameTradition\PatrilinealSurnameTradition
     *
     * @return void
     */
    public function testNewParentNames(): void
    {
        self::assertSame(
            ['NAME' => '//'],
            $this->surname_tradition->newParentNames('John /White/', 'U')
        );
    }

    /**
     * Test new husband names
     *
     * @covers \Fisharebest\Webtrees\SurnameTradition\PolishSurnameTradition
     * @covers \Fisharebest\Webtrees\SurnameTradition\PatrilinealSurnameTradition
     *
     * @return void
     */
    public function testNewHusbandNames(): void
    {
        self::assertSame(
            ['NAME' => '//'],
            $this->surname_tradition->newSpouseNames('Mary /Black/', 'M')
        );
    }

    /**
     * Test new wife names
     *
     * @covers \Fisharebest\Webtrees\SurnameTradition\PolishSurnameTradition
     * @covers \Fisharebest\Webtrees\SurnameTradition\PatrilinealSurnameTradition
     *
     * @return void
     */
    public function testNewWifeNames(): void
    {
        self::assertSame(
            [
                'NAME'   => '//',
                '_MARNM' => '/White/',
            ],
            $this->surname_tradition->newSpouseNames('John /White/', 'F')
        );
    }

    /**
     * Test new spouse names
     *
     * @covers \Fisharebest\Webtrees\SurnameTradition\PolishSurnameTradition
     * @covers \Fisharebest\Webtrees\SurnameTradition\PatrilinealSurnameTradition
     *
     * @return void
     */
    public function testNewSpouseNames(): void
    {
        self::assertSame(
            ['NAME' => '//'],
            $this->surname_tradition->newSpouseNames('Chris /Green/', 'U')
        );
    }
}
