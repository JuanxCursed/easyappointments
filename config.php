<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Online Appointment Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) Alex Tselegidis
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Easy!Appointments Configuration File
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */
class Config
{
    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    const BASE_URL = getenv('SERVICE_FQDN_EASYAPPOINTMENTS_80');
    const LANGUAGE = 'portuguese-br';
    const DEBUG_MODE = getenv('DEBUG_MODE');

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------

    const DB_HOST = getenv('DB_HOST');
    const DB_NAME = getenv('DB_NAME');
    const DB_USERNAME = getenv('DB_USERNAME');
    const DB_PASSWORD = getenv('DB_PASSWORD');

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE = getenv('GOOGLE_SYNC_FEATURE'); 
    const GOOGLE_CLIENT_ID = getenv('GOOGLE_CLIENT_ID');
    const GOOGLE_CLIENT_SECRET = getenv('GOOGLE_CLIENT_SECRET');
}
