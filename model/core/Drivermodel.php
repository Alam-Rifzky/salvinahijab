<?php
class Drivermdl implements LoggerInterface {
    private $launcher;
    private $username;
    private $dbhost=null;
    public function __construct($launcher) {
        $this->launcher = $launcher;
        $this->username = $this->launcher->getDefaultSessionUsername();
    }

    public function DebugMessage(string $message): void{
        $logger = $this->launcher->getLoggerObject();
        $logger->WriteLog($this->launcher->getLogPaths()['userLogs'], $this->username, "Model - " . $message,'DEBUG');
    }

    public function InfoMessage(string $message): void{
        $logger = $this->launcher->getLoggerObject();
        $logger->WriteLog($this->launcher->getLogPaths()['userLogs'], $this->username, "Model - " . $message,'INFO');
    }

    public function ErrorMessage(string $message): void{
        $logger = $this->launcher->getLoggerObject();
        $logger->WriteLog($this->launcher->getLogPaths()['userLogs'], $this->username, "Model - " . $message,'ERROR');
    }

    public function OpenConnection(){
		try {
			if ($this->dbhost==null) {
                $this->InfoMessage('Setting up database driver.');
                $this->DebugMessage('Opening database connection.');
				$this->dbhost = new PDO('mysql:host='. $this->launcher->databasehost .';dbname='. $this->launcher->database,$this->launcher->databaseusername,$this->launcher->databasepassword);
				$this->dbhost->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
			}
			return $this->dbhost;	
		} catch (PDOException $e) {
            $this->ErrorMessage($e->getMessage());
			die ('Database Connection Error..');
		}
	}

    public function getLauncher(){
        return $this->launcher;
    }


}