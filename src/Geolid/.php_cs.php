<?php

declare(strict_types=1);

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'blank_line_before_statement' => [
            'statements' => ['return'],
        ],
        'cast_spaces' => [
            'space' => 'single',
        ],
        'compact_nullable_typehint' => true,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'native_function_invocation' => [
            'include' => ['@compiler_optimized'],
            'scope' => 'all',
            'strict' => true,
        ],
        'new_with_braces' => true,
        'no_unused_imports' => true,
        'return_type_declaration' => [
            'space_before' => 'none',
        ],
        'short_scalar_cast' => true,
        'trailing_comma_in_multiline_array' => true,
    ])
    ->setRiskyAllowed(true)
;
