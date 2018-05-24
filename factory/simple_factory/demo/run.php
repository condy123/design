<?php
/**
 * Created by PhpStorm.
 * Author: MeeQi
 * Date: 2018/5/24
 * Time: 下午3:35
 */

require 'Vehicle.php';
require 'VehicleFactory.php';

VehicleFactory::build('Car')->drive();
VehicleFactory::build('Ship')->drive();
