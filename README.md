## Text converter

#### Installation
```
composer require englishdom\convertor
```

#### Using
Set different input adapter. Default input adapter `Text`.
```
$converter = new Converter();
$converter->setInput(new MyInputAdapter());
```
Set different output adapter. Default output adapter `Text`.
```
$converter = new Converter();
$converter->setOutput(new MyOutputAdapter());
``` 
Set different filters. Default filters `Dash`,`Quotes`,`Apostrophe`
```
$converter = new Converter();
$converter->setFilters([new MyFilter(), new MyFilterOth()]);
``` 
#### Convert text
```
$converter = new Converter();
$response = $converter->convert('text');
```