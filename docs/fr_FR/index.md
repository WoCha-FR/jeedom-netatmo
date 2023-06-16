# Plugin mqttNetatmo

## Description

Ce plugin permet de récuperer les données des produits Weather et Aircaire de Netatmo via MQTT.

## Pré-Requis

- Vous devez disposer d'un compte développeur Netatmo (gratuit).
- Ce plugin requiert [MQTT Manager](https://market.jeedom.com/index.php?v=d&p=market_display&id=4213), plugin officiel et gratuit.

## Installation 

- Télécharger le plugin depuis le market
- Activer le plugin

# Compte Developpeur Netatmo

- Rendez-vous sur le site [dev.netatmo](https://dev.netatmo.com/)
- Créer un compte si vous n'en avez pas déjà un.
- Une fois connecté à votre compte, cliquez sur "My Apps"

![MyApps](../images/myapps.png)

- Cliquez ensute sur le bouton "Create" en haut à droite

![CreateButton](../images/create.png)

- Remplisser le formulaire de création et cliquez sur "Save"

![Createform](../images/createform.png)

- Une fois le formulaire validé, vous allez voir apparaitre en bas du formulaire les deux informations dont vous allez avoir besoin pour configurer le plugin.

![ClientInfo](../images/clientinfo.png)

# Paramètres de configuration :

![Configuration](../images/configuration.png)

- **Topic racine** : Sujet racine que Jeedom doit écouter.
- **Mode** : Distant ou Local. Voir plus bas.
- **Client ID** : Information obtenue lors de l'étape précédente sur le site de Netatmo.
- **Client Secret** : Information obtenue lors de l'étape précédente sur le site de Netatmo.
- **Nom d'utilisateur** : Adresse mail de votre compte Développeur Netatmo
- **Mot de passe** : Mot de passe de votre compte Développeur Netatmo

## Les modes Distant & Local :

- **Mode Distant** : Vous avez un autre serveur qui exécute [mqtt4netatmo](https://www.npmjs.com/package/mqtt4netatmo). Ce dernier doit être configuré pour se connecter au broker mqtt utilisé par **MQTT Manager**
- **Mode Local** : Le démon nodeJS s'exécute sur Jeedom, vous devez donc installer les dépendances.

# Equipements

Les équipements sont accessibles à partir du menu Plugins → Objets connectés.

Les équipements sont crées lors de leur découverte par MQTT Manager.

![Equipements](../images/mesequipements.png)

## Configuration des équipements

En cliquant sur un équipement, vous retrouverez ses informations :

- **Nom de l’équipement** : Nom de votre équipement récupéré depuis RING.
- **Objet parent** : indique l’objet parent auquel appartient l’équipement.
- **Catégorie** : permet de chosir la catégorie de l'équipement.
- **Activer** : permet de rendre votre équipement actif.
- **Visible** : rend votre équipement visible sur le dashboard.
- **Type** : le type de module (en lecture seule).
- **Identifiant** : l'identifiant unique du module.

![InfoEquipement](../images/infoequipement.png)

## Les commandes

Pour chaque équipements, vous pouvez voir les commandes créér par l'auto-découverte.

![CommandesEquipement](../images/commandesequipement.png)

# Page santé

Le plugin dispose d'un page "Santé" qui permet de voir d'un coup d'oeil l'activité des équipements.

![SanteEquipements](../images/sante.png)
