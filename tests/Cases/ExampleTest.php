<?php

declare(strict_types=1);
/**
 * You know, for fast.
 *
 * @link     https://ctl.pub
 * @document https://doc.ctl.pub
 */
namespace HyperfTest\Cases;

use Fourli\ApiDriver\Codes;
use Hyperf\Utils\Context;

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
