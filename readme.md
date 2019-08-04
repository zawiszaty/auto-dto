# AUTO DTO
[![CircleCI](https://circleci.com/gh/zawiszaty/auto-dto/tree/master.svg?style=svg)](https://circleci.com/gh/zawiszaty/auto-dto/tree/master)
### Generate DTO from class
#### Example 

```php
class FakeDTO extends DTO
{
    public function __construct(object $class)
    {
        parent::__construct($class,FakeClass::class);
    }
}
```
##### How to Use
```php
$dateTime = new \DateTime();
$fakeClass = new FakeClass(1, 'test', $dateTime);
$fakeDTO = new FakeDTO($fakeClass);
$this->assertSame(1, $fakeDTO->id);
$this->assertSame('test', $fakeDTO->name);
$this->assertSame($dateTime, $fakeDTO->createdAt);
```
And class have te same property with base class and the same property value