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

namespace Fisharebest\Webtrees\Census;

use Fisharebest\Webtrees\TestCase;

/**
 * Test harness for the class CensusOfDenmark1930
 */
class CensusOfDenmark1940Test extends TestCase
{
    /**
     * Test the census place and date
     *
     * @covers \Fisharebest\Webtrees\Census\CensusOfDenmark1940
     *
     * @return void
     */
    public function testPlaceAndDate(): void
    {
        $census = new CensusOfDenmark1940();

        self::assertSame('Danmark', $census->censusPlace());
        self::assertSame('05 NOV 1940', $census->censusDate());
    }

    /**
     * Test the census columns
     *
     * @covers \Fisharebest\Webtrees\Census\CensusOfDenmark1940
     * @covers \Fisharebest\Webtrees\Census\AbstractCensusColumn
     *
     * @return void
     */
    public function testColumns(): void
    {
        $census  = new CensusOfDenmark1940();
        $columns = $census->columns();

        self::assertCount(15, $columns);
        self::assertInstanceOf(CensusColumnSurnameGivenNames::class, $columns[0]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[1]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[2]);
        self::assertInstanceOf(CensusColumnSexMK::class, $columns[3]);
        self::assertInstanceOf(CensusColumnBirthDaySlashMonth::class, $columns[4]);
        self::assertInstanceOf(CensusColumnBirthYear::class, $columns[5]);
        self::assertInstanceOf(CensusColumnBirthPlace::class, $columns[6]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[7]);
        self::assertInstanceOf(CensusColumnConditionDanish::class, $columns[8]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[9]);
        self::assertInstanceOf(CensusColumnRelationToHead::class, $columns[10]);
        self::assertInstanceOf(CensusColumnOccupation::class, $columns[11]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[12]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[13]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[14]);

        self::assertSame('Navn', $columns[0]->abbreviation());
        self::assertSame('N??rv??rende', $columns[1]->abbreviation());
        self::assertSame('Frav??rende', $columns[2]->abbreviation());
        self::assertSame('K??n', $columns[3]->abbreviation());
        self::assertSame('F??dselsdag', $columns[4]->abbreviation());
        self::assertSame('F??dselsaar', $columns[5]->abbreviation());
        self::assertSame('F??dested', $columns[6]->abbreviation());
        self::assertSame('Statsbergerferhold', $columns[7]->abbreviation());
        self::assertSame('Civilstand', $columns[8]->abbreviation());
        self::assertSame('Indgaaelse', $columns[9]->abbreviation());
        self::assertSame('Stilling i familien', $columns[10]->abbreviation());
        self::assertSame('Erhverv', $columns[11]->abbreviation());
        self::assertSame('Virksomhedens', $columns[12]->abbreviation());
        self::assertSame('Hustruen', $columns[13]->abbreviation());
        self::assertSame('D??tre', $columns[14]->abbreviation());

        self::assertSame('', $columns[0]->title());
        self::assertSame('Hvis den i Rubrik 1 opf??rte Person er midleritidg n??rv??rende d.v.s. har fast Bop??l ????? (er optaget under en anden Address i Folkeregistret), anf??res her den faste Bop??ls Adresse (Kommunens Navn og den fuldst??ndige Adresse i denne; for Udl??ndinge dog kun Landets Navn).', $columns[1]->title());
        self::assertSame('Hvis den i Rubrik 1 opf??rte Person er midleritidg frav??rende d.v.s. har fast Bop??l paa T??llingsstedet (er optaget underdenne Address i Folkeregistret), men den 5. Novemer ikke er til Stede paa T??llingsstedet, anf??res her ???frav??rende??? og Adressen paa det midlertidige Opholdssted (ved Ophold i Udlandet anf??res jun Landets Navn).', $columns[2]->title());
        self::assertSame('K??n Mand (M) Kvinde (K)', $columns[3]->title());
        self::assertSame('', $columns[4]->title());
        self::assertSame('', $columns[5]->title());
        self::assertSame('', $columns[6]->title());
        self::assertSame('', $columns[7]->title());
        self::assertSame('??gteskabelig Stillinge. Ugift (U), Gift (G), Enkemand eller Enke (E), Separeret (S), Fraskilt (F).', $columns[8]->title());
        self::assertSame('Date for det nuv??rende ??gteskabs Indgaaelse. NB." RUbrikken udfyldes ikke al Enkemaend, Enker, Separerede eller Fraskilte.', $columns[9]->title());
        self::assertSame('', $columns[10]->title());
        self::assertSame('', $columns[11]->title());
        self::assertSame('Virksomhedens (Branchens) Art', $columns[12]->title());
        self::assertSame('Besvares kun af Hustruen og hjemmeboende B??rn over 14 Aar', $columns[13]->title());
        self::assertSame('Besvares kun af hjemmeboende D??tre over 14 Aar', $columns[14]->title());
    }
}
