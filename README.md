1. write terminal that: composer init
   
2. open composer.json file and put that code
                                             "autoload": {
                                                  "psr-4": {
                                                      "PhpunitUnitTesting\\": "classes/"
                                                  }
                                              },
   instead of autoload
   
3. write terminal that: composer dump autoload -o
4. Also write terminal: composer require --dev phpunit/phpunit ^9.6

So let me test write to terminal: ./vendor/bin/phpunit tests --colors --testdox

Congratulations, everything is working 👍 🎉🎉🎉
