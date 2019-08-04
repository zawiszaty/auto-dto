# AUTO DTO
[![CircleCI](https://circleci.com/gh/zawiszaty/auto-dto/tree/master.svg?style=svg)](https://circleci.com/gh/zawiszaty/auto-dto/tree/master)
### Generate DTO from class
#### Example 

```php
class FakeObjectDTO extends ObjectDTO
{
    public function __construct(object $class)
    {
        parent::__construct($class,FakeClass::class);
    }
}
/// OR
class FakeArrayDTO extends ArrayDTO
{
    public function __construct(array $params)
    {
        parent::__construct($params, FakeClass::class);
    }
}
```
##### How to Use
```php
$dateTime = new \DateTime();
$fakeClass = new FakeClass(1, 'test', $dateTime);
$fakeDTO = new FakeObjectDTO($fakeClass);

$this->assertSame(1, $fakeDTO->id);
$this->assertSame('test', $fakeDTO->name);
$this->assertSame($dateTime, $fakeDTO->createdAt);

/// OR

$dateTime = new \DateTime();
$fakeDTO = new FakeArrayDTO([
    'id' => 1,
    'name' => 'test',
    'createdAt' => $dateTime
]);
$this->assertSame(1, $fakeDTO->id);
$this->assertSame('test', $fakeDTO->name);
$this->assertSame($dateTime, $fakeDTO->createdAt);
```
And class have the same properties with base class and the same properties value