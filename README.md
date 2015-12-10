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

Como usar los servicios del bundle?

Cada servicio dentro del bundle tiene un .yml separado
para usar el respectivo servicio. Solo hay que importar
el .yml del servicio que se desea utilizar en el config.yml 
del sistema.

Entre ellos:

service_helpers_object_relation: 
retorna la diferencia de elementos entre arreglos, y los elementos comunes entre 2 arreglos.

service_slugify: 
filtra en una cadena de caracteres los caracteres raros, como acentos o simbolos.

service_mailer: 
servicio que utiliza el servicio mailer para enviar correo electronicos.
