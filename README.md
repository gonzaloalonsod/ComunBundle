# ComunBundle
## Comun Bundle ofrece soluciones a circunstancias comunes en el desarrollo con Symfony

### Composer:
```cli
php composer.phar require gonzakpo/comun
```
### AppKernel:
``` php
new Tecspro\Bundle\ComunBundle\TecsproComunBundle(),
```
## Como usar los servicios del bundle?

Cada servicio dentro del bundle tiene un .yml separado para usar el respectivo servicio. Solo hay que importar el .yml del servicio que se desea utilizar en el config.yml del sistema.
```yaml
services:
    tecspro_comun.slugify:
        class: Tecspro\Bundle\ComunBundle\Services\Slugify
    tecspro_comun.helpers_object_relation:
        class: Tecspro\Bundle\ComunBundle\Services\HelpersObjectRelation
    tecspro_comun.comun_mailer:
        class: Tecspro\Bundle\ComunBundle\Services\ComunMailer
```

## Entre ellos:

service_helpers_object_relation: 
retorna la diferencia de elementos entre arreglos, y los elementos comunes entre 2 arreglos.
``` php
$helpersObjectRelation = $this->get('tecspro_comun.helpers_object_relation');

$originalEntities = $helpersObjectRelation->getOriginalEntity($entities);

$entitiesAdd = $helpersObjectRelation->getEntitiesToAdd($entities, $originalEntities);

$entitiesRemove = $helpersObjectRelation->getEntitiesToRemove($entities, $originalEntities);
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
#### Incluir en el type del formulario (estos ejemplos permiten solo numeros):
#### Opcion 1
``` php
->add('campo', null, array(
    'attr'  => array(
        ...
        'class' => 'mwsValidaPatron',
        'mwspatron' => '[0-9]',
    )
))
```
#### Opcion 2
``` php
->add('campo', null, array(
    'attr'  => array(
        ...
        'onkeypress' => 'return validaPatron(event, "[0-9]")',
    )
))
```

### Reemplazar caracter
#### Incluir en la vista:
``` js
<script src="{{ asset('bundles/tecsprocomun/js/reemplaza_valor.js') }}"></script>
```
#### Incluir en el type del formulario (este ejemplo reemplaza . por ,):
``` php
->add('campo', null, array(
    'attr'  => array(
        ...
        'class' => 'mwsReemplazaValor',
        'mwsreemplazar'    => '.',
        'mwsreemplazarpor' => ',',
    )
))
```

## Author
Gonzalo Alonso - gonkpo@gmail.com
### Collaborators
Chino - emmanuel_cabral@hotmail.com
