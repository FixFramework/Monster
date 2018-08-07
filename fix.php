<?php
/*
  ______ _______   __  ______ _____           __  __ ________          ______  _____  _  __
 |  ____|_   _\ \ / / |  ____|  __ \    /\   |  \/  |  ____\ \        / / __ \|  __ \| |/ /
 | |__    | |  \ V /  | |__  | |__) |  /  \  | \  / | |__   \ \  /\  / | |  | | |__) | ' /
 |  __|   | |   > <   |  __| |  _  /  / /\ \ | |\/| |  __|   \ \/  \/ /| |  | |  _  /|  <
 | |     _| |_ / . \  | |    | | \ \ / ____ \| |  | | |____   \  /\  / | |__| | | \ \| . \
 |__  __|_____/__ \__ |_____ _______/______\_____ |_|______|   \/  \/   \____/|_|  \_|_|\_\
 |  \/  |/ __ \| \ | |/ ____|__   __|  ____|  __ \
 | \  / | |  | |  \| | (___    | |  | |__  | |__) |
 | |\/| | |  | | . ` |\___ \   | |  |  __| |  _  /
 | |  | | |__| | |\  |____) |  | |  | |____| | \ \
 |_|  |_|\____/|_| \_|_____/   |_|  |______|_|  \_\

 * Developer    :   Cengiz AKCAN
 * Github       :   cengizakcan
 * Version      :   Monster

*/

error_reporting(0);

require("Fix/External/autoload.php");

use Fix\Kernel\Kernel;

(    new Kernel("MONSTER")    )::fix("MASTER");