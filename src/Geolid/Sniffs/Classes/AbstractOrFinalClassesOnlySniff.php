<?php

declare(strict_types=1);

namespace Geolid\Phpcs\Sniffs\Classes;

use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Files\File;

final class AbstractOrFinalClassesOnlySniff implements Sniff
{
    public const CODE_MISSING_ABSTRACT_OR_FINAL = 'MissingAbstractOrFinal';

    public function register(): array
    {
        return [
            T_CLASS,
        ];
    }

    public function process(File $phpcsFile, $stackPtr): void
    {
        if ($phpcsFile->findPrevious([T_ABSTRACT, T_FINAL], $stackPtr)) {
            return;
        }

        $fix = $phpcsFile->addFixableError(
            'Class must be declared "Abstract" or "Final".',
            $stackPtr,
            self::CODE_MISSING_ABSTRACT_OR_FINAL
        );

        if (!$fix) {
            return;
        }

        $phpcsFile->fixer->beginChangeset();
        $phpcsFile->fixer->addContent($stackPtr - 1, 'final ');
        $phpcsFile->fixer->endChangeset();
    }
}
