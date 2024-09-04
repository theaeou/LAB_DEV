<?php declare(strict_types = 1);

namespace PHPStan\PhpDocParser\Ast\Type;

use PHPStan\PhpDocParser\Ast\NodeAttributes;
use function implode;

class ArrayShapeNode implements TypeNode
{

	public const KIND_ARRAY = 'array';
	public const KIND_LIST = 'list';

	use NodeAttributes;

	/** @var ArrayShapeItemNode[] */
	public $items;

	/** @var bool */
	public $sealed;

	/** @var self::KIND_* */
	public $kind;

<<<<<<< HEAD
	/** @var ArrayShapeUnsealedTypeNode|null */
	public $unsealedType;

=======
>>>>>>> origin/master
	/**
	 * @param ArrayShapeItemNode[] $items
	 * @param self::KIND_* $kind
	 */
<<<<<<< HEAD
	public function __construct(
		array $items,
		bool $sealed = true,
		string $kind = self::KIND_ARRAY,
		?ArrayShapeUnsealedTypeNode $unsealedType = null
	)
=======
	public function __construct(array $items, bool $sealed = true, string $kind = self::KIND_ARRAY)
>>>>>>> origin/master
	{
		$this->items = $items;
		$this->sealed = $sealed;
		$this->kind = $kind;
<<<<<<< HEAD
		$this->unsealedType = $unsealedType;
=======
>>>>>>> origin/master
	}


	public function __toString(): string
	{
		$items = $this->items;

		if (! $this->sealed) {
<<<<<<< HEAD
			$items[] = '...' . $this->unsealedType;
=======
			$items[] = '...';
>>>>>>> origin/master
		}

		return $this->kind . '{' . implode(', ', $items) . '}';
	}

}
