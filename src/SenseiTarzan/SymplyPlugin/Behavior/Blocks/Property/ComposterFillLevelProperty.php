<?php

/*
 *
 *            _____ _____         _      ______          _____  _   _ _____ _   _  _____
 *      /\   |_   _|  __ \       | |    |  ____|   /\   |  __ \| \ | |_   _| \ | |/ ____|
 *     /  \    | | | |  | |______| |    | |__     /  \  | |__) |  \| | | | |  \| | |  __
 *    / /\ \   | | | |  | |______| |    |  __|   / /\ \ |  _  /| . ` | | | | . ` | | |_ |
 *   / ____ \ _| |_| |__| |      | |____| |____ / ____ \| | \ \| |\  |_| |_| |\  | |__| |
 *  /_/    \_\_____|_____/       |______|______/_/    \_\_|  \_\_| \_|_____|_| \_|\_____|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author AID-LEARNING
 * @link https://github.com/AID-LEARNING
 *
 */

declare(strict_types=1);

namespace SenseiTarzan\SymplyPlugin\Behavior\Blocks\Property;

use pocketmine\data\bedrock\block\BlockStateNames;
use pocketmine\nbt\tag\IntTag;
use pocketmine\nbt\tag\ListTag;
use function array_map;
use function sort;
use const SORT_NUMERIC;

final class ComposterFillLevelProperty extends BlockProperty
{
	/**
	 * @param int[] $composterFillLevel
	 */
	public function __construct(array $composterFillLevel = [])
	{
		sort($composterFillLevel, SORT_NUMERIC);
		parent::__construct(BlockStateNames::COMPOSTER_FILL_LEVEL, new ListTag(array_map(fn(int $number) => new IntTag($number), $composterFillLevel)));
	}
}
