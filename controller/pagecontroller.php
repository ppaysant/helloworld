<?php

namespace OCA\HelloWorld\Controller;

use \OCP\AppFramework\Controller;

class PageController extends Controller {

    public function __construct($appName, IRequest $request, IConfig $settings, $userId){
        parent::__construct($appName, $request);
        $this->settings = $settings;
        $this->userId = $userId;
    }


    /**
     * ATTENTION!!!
     * The following comments turn off security checks
     * Please look up their meaning in the documentation:
     * http://doc.owncloud.org/server/master/developer_manual/app/appframework/controllers.html
     *
     * @NoAdminRequired
     * @NoCSRFRequired
     */
    public function index() {
        return $this->render('main', array(
            'uid'           => $this->userId,
            'appVersion'    => $this->settings->getAppValue($this->appName, 'installed_version'),
            'userLastLogin' => date('d/m/Y H:i:s', $this->settings->getUserValue($this->userId, 'login', 'lastLogin')),
        ));
    }


}