<?php

declare(strict_types=1);

namespace SenseiTarzan\SymplyPlugin\Behavior\Items\Property;

use pocketmine\nbt\tag\ByteTag;
use SenseiTarzan\SymplyPlugin\Behavior\Items\Enum\PropertyName;

class CanDestroyToolbarProperty extends ItemProperty
{
	public function __construct(bool $value = true)
	{
		parent::__construct(PropertyName::CAN_DESTROY_TOOLBAR, new ByteTag($value ? 1 : 0));
	}
}
