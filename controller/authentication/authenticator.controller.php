<?php
class Authenticatorctr implements LoggerInterface{
    private static $instance = null;
    private $launcher;
    private $logger;
    private $username;
    private $svcUtil;

    public static function getInstance($launcher) {
        if (self::$instance == null) {
            self::$instance = new Authenticatorctr($launcher);
        }
        return self::$instance;
    }

    private function __construct($launcher) {
        $this->launcher = $launcher;
        $this->logger = $this->launcher->getLoggerObject();
        $this->username = $this->launcher->getDefaultSessionUsername();
        $this->svcUtil = $this->launcher->CallServiceUtil();
    }

    public function DebugMessage(string $message): void{
        $this->logger->WriteLog($this->launcher->getLogPaths()['authLogs'], $this->username, "Authctr - " . $message,'DEBUG');
    }

    public function InfoMessage(string $message): void{
        $this->logger->WriteLog($this->launcher->getLogPaths()['authLogs'], $this->username, "Authctr - " . $message,'INFO');
    }

    public function ErrorMessage(string $message): void{
        $this->logger->WriteLog($this->launcher->getLogPaths()['authLogs'], $this->username, "Authctr - " . $message,'ERROR');
    }

    public function LoginPage() {

        if (isset($_POST['auth'])&&!empty($_POST['auth'])) {
            $this->DebugMessage('Login Attempt Detected.');
            $res = $this->svcUtil->CallAuthenticationService()->authenticateUser($_POST['auth']['username'], $_POST['auth']['password']);
            if (count($res)>0) {
                echo "<script>alert('Login Successful! Welcome ".$res[0]['nama']."');</script>";
            } else {
                echo "<script>alert('Login Failed! Invalid username or password.');</script>";
            }
        }

        $data['title'] = "Login - Salvina Hijab";
        $data['base_url'] = $this->launcher->baseUrl;
        $data['homedir'] = $this->launcher->homedir;
        $this->DebugMessage('Accessing Login Page');
        $this->launcher->View("authentication/vlogin.homepage",$data);
    }
}