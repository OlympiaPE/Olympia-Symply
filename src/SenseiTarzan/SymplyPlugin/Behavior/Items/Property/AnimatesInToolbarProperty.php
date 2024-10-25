<?php

declare(strict_types=1);

namespace SenseiTarzan\SymplyPlugin\Behavior\Items\Property;

use pocketmine\nbt\tag\ByteTag;
use SenseiTarzan\SymplyPlugin\Behavior\Items\Enum\PropertyName;

class AnimatesInToolbarProperty extends ItemProperty
{
	public function __construct(bool $value = true)
	{
		parent::__construct(PropertyName::ANIMATES_IN_TOOLBAR, new ByteTag($value ? 1 : 0));
	}
}
