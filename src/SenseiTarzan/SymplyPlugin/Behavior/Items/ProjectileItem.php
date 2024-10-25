<?php

declare(strict_types=1);

namespace SenseiTarzan\SymplyPlugin\Behavior\Items;

use pocketmine\item\Item as PMItem;
use pocketmine\item\ProjectileItem as PMProjectileItem;
use ReflectionProperty;
use SenseiTarzan\SymplyPlugin\Behavior\Common\Enum\CategoryCreativeEnum;
use SenseiTarzan\SymplyPlugin\Behavior\Common\Enum\GroupCreativeEnum;
use SenseiTarzan\SymplyPlugin\Behavior\Items\Builder\ItemBuilder;
use SenseiTarzan\SymplyPlugin\Behavior\Items\Info\ItemCreativeInfo;

abstract class ProjectileItem extends PMProjectileItem  implements ICustomItem
{
    /**
     * The entity to be fired as a projectile. If no namespace is specified, it is assumed to be minecraft.
     */
    abstract public function getProjectileEntity(): string;

    public function getIdentifier(): ItemIdentifier
    {
        $identifier = (new ReflectionProperty(PMItem::class, "identifier"))->getValue($this);
        assert($identifier instanceof ItemIdentifier);
        return $identifier;
    }

    public function getItemBuilder(): ItemBuilder
    {
        return ItemBuilder::create()->setItem($this)
            ->setDefaultMaxStack()
            ->setDefaultName()
            ->setCreativeInfo(new ItemCreativeInfo(CategoryCreativeEnum::ALL, GroupCreativeEnum::NONE))
            ->setThrowableComponent();
            //->setProjectileComponent();
    }
}