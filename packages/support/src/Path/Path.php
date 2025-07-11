<?php

declare(strict_types=1);

namespace Tempest\Support\Path;

use Stringable;
use Tempest\Support\Arr\ImmutableArray;
use Tempest\Support\Filesystem;
use Tempest\Support\Str\ManipulatesString;
use Tempest\Support\Str\StringInterface;

/**
 * Represents a file system path and provides access to convenience methods.
 */
final class Path implements StringInterface
{
    use ManipulatesString;

    public function __construct(Stringable|string ...$paths)
    {
        $this->value = namespace\normalize(...$paths);
    }

    protected function createOrModify(Stringable|string $string): self
    {
        return new static($string);
    }

    /**
     * Returns information about the path. See {@see pathinfo()}.
     */
    public function info(int $flags = PATHINFO_ALL): string|array
    {
        return pathinfo($this->value, $flags);
    }

    /**
     * Returns the entire path.
     */
    public function path(): self
    {
        return $this->createOrModify($this->value);
    }

    /**
     * Keeps only the directory name.
     */
    public function dirname(): self
    {
        return $this->createOrModify($this->info(PATHINFO_DIRNAME));
    }

    /**
     * Keeps only the filename.
     */
    public function filename(): self
    {
        return $this->createOrModify($this->info(PATHINFO_FILENAME));
    }

    /**
     * Keeps only the basename.
     */
    public function basename(string $suffix = ''): self
    {
        return $this->createOrModify($this->info(PATHINFO_BASENAME))->stripEnd($suffix);
    }

    /**
     * Keeps only the extension.
     */
    public function extension(): self
    {
        return $this->createOrModify($this->info(PATHINFO_EXTENSION));
    }

    /**
     * Appends a glob and returns an immutable array with the resulting paths.
     */
    public function glob(string $pattern): ImmutableArray
    {
        return new ImmutableArray(glob(namespace\normalize($this->value, $pattern)));
    }

    /**
     * Determines whether the path is a directory.
     */
    public function isDirectory(): bool
    {
        return Filesystem\is_directory($this->value);
    }

    /**
     * Determines whether the path is a file.
     */
    public function isFile(): bool
    {
        return Filesystem\is_file($this->value);
    }

    /**
     * Determines whether the path exists on the local filesystem.
     */
    public function exists(): bool
    {
        return Filesystem\exists($this->value);
    }
}
