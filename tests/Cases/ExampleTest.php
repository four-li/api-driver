<?php

declare(strict_types=1);
/**
 * You know, for fast.
 *
 * @link     https://www.open.ctl.pub
 * @document https://doc.open.ctl.pub
 */
namespace HyperfTest\Cases;

use Fourli\ApiDriver\Codes;

/**
 * @internal
 * @coversNothing
 */
class ExampleTest extends AbstractTestCase
{
    public function testExample()
    {
        $codes = make(Codes::class);

        $res = $codes->test();

        $this->assertTrue($res);
    }
}
