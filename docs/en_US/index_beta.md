# Plugin mqttNetatmo

## Description

This plugin enables you to retrieve data from Netatmo's Weather and Aircaire products via MQTT.

## Prerequisites

- You must have a Netatmo developer account (free).
- This plugin requires [MQTT Manager](https://market.jeedom.com/index.php?v=d&p=market_display&id=4213), an official and free plugin.

## Installation

- Download the plugin from the market
- Activate the plugin

# Netatmo Developer Account

- Go to [dev.netatmo](https://dev.netatmo.com/)
- Create an account if you do not already have one.
- Once connected to your account, click on "My Apps".

![MyApps](../images/myapps.png)

- Then click on the "Create" button in the top right-hand corner.

![CreateButton](../images/create.png)

- Fill in the creation form and click on "Save".

![Createform](../images/createform.png)

- Once the form has been validated, the two pieces of information you'll need to configure the plugin will appear at the bottom of the form.

![ClientInfo](../images/clientinfo.png)

# Configuration parameters :

![Configuration](../images/configuration.png)

- **Root Topic**: Root topic that Jeedom should listen to.
- **Mode**: Remote or Local. See below.
- **Client ID**: Information obtained from the Netatmo website in the previous step.
- **Client Secret**: Information obtained during the previous step on the Netatmo site.
- **Username**: Email address of your Netatmo Developer account.
- **Password**: Password of your Netatmo Developer account.

## Distant & Local modes :

- **Remote mode**: You have another server running [mqtt4netatmo](https://www.npmjs.com/package/mqtt4netatmo). This must be configured to connect to the mqtt broker used by **MQTT Manager**.
- **Local Mode** : The nodeJS daemon runs on Jeedom, so you need to install the dependencies.

# Equipment

Devices can be accessed from the Plugins → Connected Objects menu.

Devices are created when they are discovered by MQTT Manager.

![Equipment](../images/mesequipements.png)

## Equipment configuration

Click on a piece of equipment to view its information:

- **Equipment name**: Name of your equipment retrieved from RING.
- **Parent object**: indicates the parent object to which the equipment belongs.
- **Category**: Allows you to choose the category of the equipment.
- **Activate**: enables you to make your equipment active.
- **Visible**: makes your equipment visible on the dashboard.
- **Type**: the type of module (read-only).
- **Identifier**: the unique identifier of the module.

![InfoEquipment](../images/infoequipement.png)

## Commands

For each piece of equipment, you can see the commands created by auto-discovery.

![CommandsEquipment](../images/commandesequipement.png)

# Health page

The plugin has a "Health" page that lets you see equipment activity at a glance.

![HealthEquipment](../images/sante.png)
