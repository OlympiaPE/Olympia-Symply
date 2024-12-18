<?php

declare(strict_types=1);

namespace SenseiTarzan\SymplyPlugin\Behavior\Blocks\Property;

use pocketmine\nbt\tag\IntTag;
use pocketmine\nbt\tag\ListTag;
use SenseiTarzan\SymplyPlugin\Behavior\Blocks\Enum\PropertyName;
use function array_map;
use function sort;
use const SORT_NUMERIC;

final class CustomLevelProperty extends BlockProperty
{
    /**
     * @param int[] $customLevel
     */
    public function __construct(array $customLevel = [])
    {
        sort($customLevel, SORT_NUMERIC);
        parent::__construct(PropertyName::CUSTOM_LEVEL, new ListTag(array_map(fn(int $number) => new IntTag($number), $customLevel)));
    }
}