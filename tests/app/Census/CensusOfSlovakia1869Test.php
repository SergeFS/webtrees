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
 * Test harness for the class CensusOfSlovakia1869
 */
class CensusOfSlovakia1869Test extends TestCase
{
    /**
     * Test the census place and date
     *
     * @covers \Fisharebest\Webtrees\Census\CensusOfSlovakia1869
     *
     * @return void
     */
    public function testPlaceAndDate(): void
    {
        $census = new CensusOfSlovakia1869();

        self::assertSame('Slovensko', $census->censusPlace());
        self::assertSame('31 DEC 1869', $census->censusDate());
    }

    /**
     * Test the census columns
     *
     * @covers \Fisharebest\Webtrees\Census\CensusOfSlovakia1869
     * @covers \Fisharebest\Webtrees\Census\AbstractCensusColumn
     *
     * @return void
     */
    public function testColumns(): void
    {
        $census  = new CensusOfSlovakia1869();
        $columns = $census->columns();

        self::assertCount(20, $columns);
        self::assertInstanceOf(CensusColumnNull::class, $columns[0]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[1]);
        self::assertInstanceOf(CensusColumnFullName::class, $columns[2]);
        self::assertInstanceOf(CensusColumnRelationToHead::class, $columns[3]);
        self::assertInstanceOf(CensusColumnSexMZ::class, $columns[4]);
        self::assertInstanceOf(CensusColumnBirthYear::class, $columns[5]);
        self::assertInstanceOf(CensusColumnReligion::class, $columns[6]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[7]);
        self::assertInstanceOf(CensusColumnOccupation::class, $columns[8]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[9]);
        self::assertInstanceOf(CensusColumnBirthPlace::class, $columns[10]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[11]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[12]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[13]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[14]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[15]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[16]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[17]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[18]);
        self::assertInstanceOf(CensusColumnNull::class, $columns[19]);

        self::assertSame('??. b.', $columns[0]->abbreviation());
        self::assertSame('??. os.', $columns[1]->abbreviation());
        self::assertSame('Meno', $columns[2]->abbreviation());
        self::assertSame('Vz??ah', $columns[3]->abbreviation());
        self::assertSame('Poh.', $columns[4]->abbreviation());
        self::assertSame('Nar.', $columns[5]->abbreviation());
        self::assertSame('N??b.', $columns[6]->abbreviation());
        self::assertSame('Stav', $columns[7]->abbreviation());
        self::assertSame('Povolanie', $columns[8]->abbreviation());
        self::assertSame('Zamestnanie', $columns[9]->abbreviation());
        self::assertSame('Rodisko', $columns[10]->abbreviation());
        self::assertSame('Dom.', $columns[11]->abbreviation());
        self::assertSame('Cudz.', $columns[12]->abbreviation());
        self::assertSame('P. do??.', $columns[13]->abbreviation());
        self::assertSame('P. trv.', $columns[14]->abbreviation());
        self::assertSame('Vz. do??.', $columns[15]->abbreviation());
        self::assertSame('Vz. dlho.', $columns[16]->abbreviation());
        self::assertSame('????t.', $columns[17]->abbreviation());
        self::assertSame('P??s.', $columns[18]->abbreviation());
        self::assertSame('Poz.', $columns[19]->abbreviation());

        self::assertSame('Poradov?? ????slo bytu', $columns[0]->title());
        self::assertSame('Poradov?? ????slo osoby', $columns[1]->title());
        self::assertSame('Priezvisko a krstn?? meno, titul', $columns[2]->title());
        self::assertSame('Postavenie (rodinn?? vz??ah k hlave dom??cnosti)', $columns[3]->title());
        self::assertSame('Pohlavie', $columns[4]->title());
        self::assertSame('Rok narodenia', $columns[5]->title());
        self::assertSame('N??bo??enstvo', $columns[6]->title());
        self::assertSame('Rodinsk?? stav', $columns[7]->title());
        self::assertSame('Povolanie', $columns[8]->title());
        self::assertSame('Okolnosti zamestnania', $columns[9]->title());
        self::assertSame('Rodisko - ??t??t/krajina, stolica/okres/s??dlo/vidiek, mesto/obec', $columns[10]->title());
        self::assertSame('Pr??slu??nos?? k obci - zdej????', $columns[11]->title());
        self::assertSame('Pr??slu??nos?? k obci - cudz??', $columns[12]->title());
        self::assertSame('Pr??tomn?? do??asne - do jedn??ho mesiaca', $columns[13]->title());
        self::assertSame('Pr??tomn?? trvalo', $columns[14]->title());
        self::assertSame('Vzdialen?? do??asne - do jedn??ho mesiaca', $columns[15]->title());
        self::assertSame('Vzdialen?? dlhodobo - nad jeden mesiac', $columns[16]->title());
        self::assertSame('Osoba vie ????ta??', $columns[17]->title());
        self::assertSame('Osoba vie ????ta?? a p??sa??', $columns[18]->title());
        self::assertSame('Pozn??mka', $columns[19]->title());
    }
}
