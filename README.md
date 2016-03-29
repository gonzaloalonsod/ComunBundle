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
### Use Gedmo bundle Stof extension.
#### AppKernel:
``` php
new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
```
#### Configure:
``` yaml
stof_doctrine_extensions:
    default_locale: es_AR
    orm:
        default:
            #tree: true
            timestampable: true
            #loggable: true
```
#### Entity:
``` php
use Tecspro\Bundle\ComunBundle\Entity\TecsproGedmo;

class miClass extends TecsproGedmo {}
```
## Como usar los servicios del bundle?

Cada servicio dentro del bundle tiene un .yml separado
para usar el respectivo servicio. Solo hay que importar
el .yml del servicio que se desea utilizar en el config.yml 
del sistema.

## Entre ellos:

service_helpers_object_relation: 
retorna la diferencia de elementos entre arreglos, y los elementos comunes entre 2 arreglos.
``` php
$helpersObjectRelation = $this->get('tecspro_comun.helpers_object_relation');

$array_resultado_A   = $helpersObjectRelation->getEntitiesToRemove($array_a, $array_b);

$array_resultado_B = $helpersObjectRelation->getEntitiesToAdd($array_b, $array_a);
```
service_slugify: 
filtra en una cadena de caracteres los caracteres raros, como acentos o simbolos.

service_mailer: 
servicio que utiliza el servicio mailer para enviar correo electronicos.
Se le debe 
``` php
$services_comunmailer = $this->get('tecspro_comun.comun_mailer');

$services_comunmailer->send_mailer($asunto, $remitente, $destinatarios, $mensaje);
```
## Funciones JS:
### Controlar patron en un input formulario
#### Incluir en la vista:
``` js
<script src="{{ asset('bundles/tecsprocomun/js/controla_patron.js') }}"></script>
```
#### Incluir en el type del formulario (este ejemplo permite solo numeros):
``` php
->add('campo', null, array(
    'attr'  => array(
        ...
        'onkeypress' => 'return validaPatron(event, "[0-9]")',
    )
))
```

## Author
Gonzalo Alonso - gonkpo@gmail.com
### Collaborators
Chino - emmanuel_cabral@hotmail.com