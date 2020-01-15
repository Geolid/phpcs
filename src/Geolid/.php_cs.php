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
        'method_argument_space' => [
            'on_multiline' => 'ensure_fully_multiline',
        ],
        'native_function_invocation' => [
            'include' => ['@compiler_optimized'],
            'scope' => 'all',
            'strict' => true,
        ],
        'native_function_type_declaration_casing' => true,
        'new_with_braces' => true,
        'no_unused_imports' => true,
        'nullable_type_declaration_for_default_null_value' => true,
        'ordered_imports' => [
            'sort_algorithm' => 'alpha',
        ],
        'return_type_declaration' => [
            'space_before' => 'none',
        ],
        'short_scalar_cast' => true,
        'single_trait_insert_per_statement' => true,
        'trailing_comma_in_multiline_array' => true,
    ])
    ->setRiskyAllowed(true)
;
