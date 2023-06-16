<?php
/* This file is part of Jeedom.
*
* Jeedom is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Jeedom is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
*/

if (!isConnect('admin')) {
  throw new Exception('401 Unauthorized');
}
$plugin = plugin::byId('mqttNetatmo');
$eqLogics = eqLogic::byType($plugin->getId());
?>

<table class="table table-condensed tablesorter" id="table_healthrfxcom">
  <thead>
    <tr>
      <th>{{Image}}</th>
      <th>{{Station}}</th>
      <th>{{Module}}</th>
      <th>{{ID}}</th>
      <th>{{Batterie}}</th>
      <th>{{Dernière communication}}</th>
      <th>{{Date création}}</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($eqLogics as $eqLogic) {
      echo '<tr>';
      if($eqLogic->getImage() !== false){
        echo '<td><img height="65" width="55" src="' . $eqLogic->getImage() . '"/></td>';
      }else{
        echo '<td><img height="65" width="55" src="' . $plugin->getPathImgIcon() . '"/></td>';
      }
      echo '<td><span class="label label-primary" style="font-size : 1em;">' . $eqLogic->getConfiguration('station') . '</span></td>';
      echo '<td><a href="' . $eqLogic->getLinkToConfiguration() . '" style="text-decoration: none;">' . $eqLogic->getHumanName(true) . '</a></td>';
      echo '<td><span class="label label-info" style="font-size : 1em;">' . $eqLogic->getLogicalId() . '</span></td>';
      $battery_status = '<span class="label label-success" style="font-size : 1em;">{{OK}}</span>';
      if ($eqLogic->getStatus('battery') < 20 && $eqLogic->getStatus('battery') != '') {
        $battery_status = '<span class="label label-danger" style="font-size : 1em;">' . $eqLogic->getStatus('battery') . '%</span>';
      } elseif ($eqLogic->getStatus('battery') < 60 && $eqLogic->getStatus('battery') != '') {
        $battery_status = '<span class="label label-warning" style="font-size : 1em;">' . $eqLogic->getStatus('battery') . '%</span>';
      } elseif ($eqLogic->getStatus('battery') > 60 && $eqLogic->getStatus('battery') != '') {
        $battery_status = '<span class="label label-success" style="font-size : 1em;">' . $eqLogic->getStatus('battery') . '%</span>';
      } else {
        $battery_status = '<span class="label label-primary" style="font-size : 1em;" title="{{Secteur}}"><i class="fa fa-plug"></i></span>';
      }
      echo '<td>' . $battery_status . '</td>';
      echo '<td><span class="label label-info" style="font-size : 1em;">' . $eqLogic->getStatus('lastCommunication') . '</span></td>';
      echo '<td><span class="label label-info" style="font-size : 1em;">' . $eqLogic->getConfiguration('createtime') . '</span></td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
