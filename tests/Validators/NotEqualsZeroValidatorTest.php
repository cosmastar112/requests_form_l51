<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Validators\NotEqualsZeroValidator;

class NotEqualsZeroValidatorTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testZero($input, $expectedResult)
    {
        $validator = new NotEqualsZeroValidator();
        $result = $validator->validate(null, $input, null, null);

        $this->assertEquals($expectedResult, $result);
    }

    public function additionProvider()
    {
        return [
            'Zero as number' => [0, false],
            'Zero as string' => ['0', false],
            'Any number' => [1, true],
        ];
    }
}
