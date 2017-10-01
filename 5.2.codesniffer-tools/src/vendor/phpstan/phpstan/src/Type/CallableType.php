<?php declare(strict_types = 1);

namespace PHPStan\Type;

class CallableType implements Type
{

	/**
	 * @return string|null
	 */
	public function getClass()
	{
		return null;
	}

	/**
	 * @return string[]
	 */
	public function getReferencedClasses(): array
	{
		return [];
	}

	public function combineWith(Type $otherType): Type
	{
		if ($otherType instanceof self) {
			return $this;
		}

		if ($otherType instanceof ArrayType && $otherType->isPossiblyCallable()) {
			return $this;
		}

		return TypeCombinator::combine($this, $otherType);
	}

	public function accepts(Type $type): bool
	{
		if ($type instanceof self) {
			return true;
		}

		if ($type instanceof ArrayType && $type->isPossiblyCallable()) {
			return true;
		}

		if ($type instanceof StringType) {
			return true;
		}

		if ($type->getClass() === 'Closure') {
			return true;
		}

		if ($type->getClass() !== null && method_exists($type->getClass(), '__invoke')) {
			return true;
		}

		if ($type instanceof UnionType) {
			return UnionTypeHelper::acceptsAll($this, $type);
		}

		return $type instanceof MixedType;
	}

	public function describe(): string
	{
		return 'callable';
	}

	public function canAccessProperties(): bool
	{
		return false;
	}

	public function canCallMethods(): bool
	{
		return true;
	}

	public function isDocumentableNatively(): bool
	{
		return true;
	}

}
