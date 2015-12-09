# ComunBundle
## Comun Bundle ofrece soluciones a circunstancias comunes en el desarrollo con Symfony

### Require:
``` yaml
"gonzakpo/comun": "1.0.*@dev"
```
### AppKernel:
``` php
new Tecspro\Bundle\ComunBundle\TecsproComunBundle(),
```
### Use Gedmo install bundle Stof extension.
``` yaml
"stof/doctrine-extensions-bundle": "v1.1.0",
```
``` php
use Tecspro\Bundle\ComunBundle\Entity\TecsproGedmo;

class miClass extends TecsproGedmo {}
```

## Author
Gonzalo Alonso - gonkpo@gmail.com
### Collaborators
Chino - emmanuel_cabral@hotmail.com
