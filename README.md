# ComunBundle
## Comun Bundle ofrece soluciones a circunstancias comunes en el desarrollo con Symfony

### Require:
``` yaml
"gonzakpo/comun": "1.0.*@dev"
```

### Use Gedmo install bundle Stof extension.
``` yaml
"stof/doctrine-extensions-bundle": "v1.1.0",
```
``` php
use Tecspro\Bundle\ComunBundle\Entity\TecsproGedmo;

class miClass extends TecsproGedmo {}
```
