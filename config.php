<?php

/*
*  Copyright (c) Codiad & Kent Safranski (codiad.com), distributed
*  as-is and without warranty under the MIT License. See
*  [root]/license.txt for more. This information must remain intact.
*/

//////////////////////////////////////////////////////////////////
// CONFIG
//////////////////////////////////////////////////////////////////

// PATH TO CODIAD
define("BASE_PATH", dirname(__FILE__));

// THEME : default, modern or clear (look at /themes)
define("THEME", "Codiad-Theme-Feisty");

// ABSOLUTE PATH
define("WHITEPATHS", '/');

// SESSIONS (e.g. 7200)
$cookie_lifetime = "21600";

// External Authentification
define("AUTH_PATH", "auth.php");

//////////////////////////////////////////////////////////////////
// ** DO NOT EDIT CONFIG BELOW **
//////////////////////////////////////////////////////////////////

// PATHS
define("COMPONENTS", BASE_PATH . "/components");
define("PLUGINS", BASE_PATH . "/plugins");
define("THEMES", BASE_PATH . "/themes");
define("DATA", BASE_PATH . "/data");
define("WORKSPACE", BASE_PATH . "/workspace");
