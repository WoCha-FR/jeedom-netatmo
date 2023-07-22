# Plugin mqttNetatmo

## Descripción

Este plugin permite recuperar datos de los productos Weather y Aircaire de Netatmo vía MQTT.

También puede recuperar datos de sus estaciones meteorológicas Netatmo favoritas.

## Requisitos previos

- Debes tener una cuenta de desarrollador Netatmo (gratuita).
- Este plugin requiere [MQTT Manager](https://market.jeedom.com/index.php?v=d&p=market_display&id=4213), un plugin oficial y gratuito.

## Instalación

- Descarga el plugin desde el market
- Activar el plugin

# Cuenta de desarrollador Netatmo

- Vaya a [dev.netatmo](https://dev.netatmo.com/)
- Cree una cuenta si aún no tiene una.
- Una vez conectado a su cuenta, haga clic en "My Apps".

![MyApps](../images/myapps.png)

- A continuación, haga clic en el botón "Create" de la esquina superior derecha.

![CreateButton](../images/create.png)

- Rellene el formulario de creación y haga clic en "Save".

![Createform](../images/createform.png)

- Una vez validado el formulario, en la parte inferior aparecerán los dos datos necesarios para configurar el plugin.

![ClientInfo](../images/clientinfo.png)

# Parámetros de configuración :

![Configuration](../images/configuration.png)

- **Tema Raíz**: El tema raíz que Jeedom debe escuchar.
- **Modo**: Remoto o Local. Ver más abajo.
- **Client ID**: Información obtenida durante el paso anterior en el sitio Netatmo.
- **Client Secret**: Información obtenida durante el paso anterior en el sitio Netatmo.
- **Estaciones favoritas** : Activar la recuperación de estaciones meteorológicas favoritas.
- **Identificación de Netatmo** : Enlace a la autenticación Netatmo.

## Modos Distante y Local :

- **Modo remoto**: Tienes otro servidor ejecutando [netatmo-mqtt](https://github.com/WoCha-FR/netatmo-mqtt). Este debe estar configurado para conectarse al broker mqtt utilizado por **MQTT Manager**.
- **Modo Local** : El demonio nodeJS corre en Jeedom, por lo que necesitas instalar las dependencias.

## Configuración de su cuenta NETATMO (sólo en modo local)

- El demonio debe iniciarse para realizar la autenticación.
- **ATENCIÓN** : Debes estar conectado a tu jeedom a través de su dirección IP local
- Haga clic en "Abrir": Accederá a la página de autorización de Netatmo.
- Haga clic en "SÍ, ACEPTO" al final de la página.
- ¡Se acabó!

# Equipamiento

Se puede acceder a los equipos desde el menú Plugins → Objetos conectados.

Los equipos se crean cuando son descubiertos por MQTT Manager.

![Equipamiento](../images/mesequipements.png)

## Configuration des équipements

Haga clic en un equipo para ver sus detalles:

- **Nombre del equipo**: nombre de su equipo recuperado de RING.
- **Objeto padre**: indica el objeto padre al que pertenece el equipo.
- **Categoría**: permite elegir la categoría del equipo.
- **Activar**: permite activar su equipo.
- **Visible**: hace que su equipo sea visible en el cuadro de mandos.
- **Tipo**: el tipo de módulo (sólo lectura).
- **Identificador**: el identificador único del módulo.

![InfoEquipamiento](../images/infoequipement.png)

## Pedidos

Para cada equipo, puede ver los pedidos creados por la detección automática.

![ControlesEquipos](../images/commandesequipement.png)

# Página de salud

El plugin tiene una página de "Salud" que te permite ver la actividad del equipo de un vistazo.

![EquipamientoSanitario](../images/sante.png)
