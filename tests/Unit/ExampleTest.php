<?php

declare(strict_types=1);

use Kadirzengin215\PhpSkeleton\Example;

test('can say hello', function (): void {
    $example = new Example();

    expect($example->sayHello())->toBe('Hello, World!');
});
