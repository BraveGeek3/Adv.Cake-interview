<?php

declare(strict_types=1);

require __DIR__ . '/../src/revertCharacters.php';

use PHPUnit\Framework\TestCase;
use function App\RevertCharacters\revertCharacters;


final class revertCharactersTest extends TestCase
{

    public function testCanRevertEmojis(): void {
        $str = '😀😁😂🤣';
        $resStr = '🤣😂😁😀';
        $this->assertSame($resStr, revertCharacters($str));
    }

    public function testCheckPalindrome(): void
    {
        $str = 'abcba';
        $this->assertSame($str, revertCharacters($str));
    }

    public function testSpecifiedCharacters(): void
    {
        $str = '\n\r\t\v';
        $resStr = "v\\t\\r\\n\\";
        $this->assertSame($resStr, revertCharacters($str));
    }
}

