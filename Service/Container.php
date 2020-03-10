<?php
class Container
{
    private $config;
    private $pdo;
    private $DBM;
    private $viewService;
    private $messageService;
    private $imageLoader;
    private $uploadService;
    private $authentication;

    /**
     * @param Config $config
     */
    public function __construct( Config $config )
    {
        $this->config = $config;

        $this->getDBM();
        $this->getMessageService();
        $this->getAuthentication();
    }

    /**
     * @return PDO
     */
    public function getPdo()
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO($this->config->getDbDsn(), $this->config->getDbUser(), $this->config->getDbPass());
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->pdo;
    }

    /**
     * @return DBManager
     */
    public function getDBM()
    {
        if ( $this->DBM === null ){
            $this->DBM = new DBManager( $this->getPDO() );
        }
        return $this->DBM;
    }

    /**
     * @return ViewService
     */
    public function getViewService()
    {
        if ( $this->viewService === null ){
            $this->viewService = new ViewService( $this->config->getApplicationFolder(), $this->getDBM());
        }
        return $this->viewService;
    }

    /**
     * @return ImageLoader
     */
    public function getImageLoader()
    {
        if ( $this->imageLoader === null ){
            $this->imageLoader = new ImageLoader( $this->getDBM() );
        }
        return $this->imageLoader;
    }    

    /**
     * @return MessageService
     */
    public function getMessageService()
    {
        if ( $this->messageService === null ){
            $this->messageService = new MessageService( $this->getViewService() );
        }
        return $this->messageService;
    }

    /**
     * @return UploadService
     */
    public function getUploadService()
    {
        if ( $this->uploadService === null ){
            $this->uploadService = new UploadService( $this->getMessageService() );
        }
        return $this->uploadService;
    }

    /**
     * @return Authentication
     */
    public function getAuthentication()
    {
        if ( $this->authentication === null ){
            $this->authentication = new Authentication( $this->getDBM(), $this->getMessageService() );
        }
        return $this->authentication;
    }
}