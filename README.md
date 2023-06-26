# SOLID-Principle-in-PHP
SOLID is an acronym for 5 important design principle when doing OOP `Object-Oriented Programming`. These 05 principles were introduced by Robert C.Martin (Uncle Bob) in his 2000 paper Design Principles and Design Patterns. The actual `S.O.L.I.D` acronym was, however identified later by Micheal Feathers.

```text
S = Single Responsibility Principle
O = Open Closed Principle
L = Liskov Substitution Principle
I = Interface Segregation Principle
D = Dependency Inversion Principle
```

### PHP CS Fixer
- [Define the @psr-12 rules](.php-cs-fixer.json)
- [Define the @config files](.php-cs-fixer.php)

```shell
#Step 01:
mkdir -p tools/php-cs-fixer
#Step 02:
touch .php-cs-fixer.json
#Step 03:
touch .php-cs-fixer.php
#Step 04:
composer require --working-dir=tools/php-cs-fixer friendsofphp/php-cs-fixer
#Step 05:
tools/php-cs-fixer/vendor/bin/php-cs-fixer fix
```


### Single Responsibility Principle
A class should have one and only one reason to change.
- Makes the class easier to maintain
- Potentially makes class reusable
- Easier to test
