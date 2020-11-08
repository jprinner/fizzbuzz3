<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase {

    public function testInputNoArgs(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get();
        $this->assertSame("1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz", $actual);
    }

    public function testInputOneArgThatIsLessThanMax(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(1);
        $this->assertSame("1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz", $actual);
    }

    public function testInputOneArgThatIsGreaterThanMax(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(21);
        $this->assertSame("Error: Max input is less than the min.", $actual);
    }

    public function testInputNonNumericArgs(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get("test", "test");
        $this->assertSame("Error: Not a valid number.", $actual);
    }

    public function testMaxInputSmallerThanMinInput(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get("20", "1");
        $this->assertSame("Error: Max input is less than the min.", $actual);
    }

    public function testInput0(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(0,0);
        $this->assertSame("0", $actual);
    }

    public function testInput1(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(1,1);
        $this->assertSame("1", $actual);
    }

    public function testInput2(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(2,2);
        $this->assertSame("2", $actual);
    }

    public function testInput3(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(3,3);
        $this->assertSame("lucky", $actual);
    }

    public function testInput5(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(5,5);
        $this->assertSame("buzz", $actual);
    }

    public function testInput13(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(13,13);
        $this->assertSame("lucky", $actual);
    }

    public function testInput15(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(15,15);
        $this->assertSame("fizzbuzz", $actual);
    }

    public function testInput30(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(30,30);
        $this->assertSame("lucky", $actual);
    }

    public function testInput1_20(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(1,20);
        $this->assertSame("1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz", $actual);
    }

    public function testFizzCountForInput1_30(): void {
        $fizzbuzz = new FizzBuzz;
        $result = $fizzbuzz->get(1,30);
        $result_count = $fizzbuzz->countFizzBuzz($result);
        $actual = $result_count['fizz'];
        $this->assertSame(7, $actual);
    }

    public function testBuzzCountForInput1_30(): void {
        $fizzbuzz = new FizzBuzz;
        $result = $fizzbuzz->get(1,30);
        $result_count = $fizzbuzz->countFizzBuzz($result);
        $actual = $result_count['buzz'];
        $this->assertSame(4, $actual);
    }

    public function testFizzBuzzCountForInput1_30(): void {
        $fizzbuzz = new FizzBuzz;
        $result = $fizzbuzz->get(1,30);
        $result_count = $fizzbuzz->countFizzBuzz($result);
        $actual = $result_count['fizzbuzz'];
        $this->assertSame(1, $actual);
    }

    public function testLuckyCountForInput1_30(): void {
        $fizzbuzz = new FizzBuzz;
        $result = $fizzbuzz->get(1,30);
        $result_count = $fizzbuzz->countFizzBuzz($result);
        $actual = $result_count['lucky'];
        $this->assertSame(4, $actual);
    }

    public function testIntegerCountForInput1_30(): void {
        $fizzbuzz = new FizzBuzz;
        $result = $fizzbuzz->get(1,30);
        $result_count = $fizzbuzz->countFizzBuzz($result);
        $actual = $result_count['integer'];
        $this->assertSame(14, $actual);
    }
}