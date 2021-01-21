<?php

namespace ConnectDb\Database;

use PDO;
use PDOException;
use ConnectDb\Database\SetUpConnect;

class Connect extends SetUpConnect
{

    /**
     * Faz a conexão com o banco
     *
     * @return void
     */
    private function connectDb()
    {
        $setup = $this->configure();
        
        try {
            return new PDO(
                "{$setup['dsn']}",
                "{$setup['username']}",
                "{$setup['passwd']}",
            );
        } catch (PDOException $exception) {
            throw new PDOException($exception->getMessage());
        }
    }

    /**
     * Faz com que a conexão seja pública
     *
     * @return object|PDO
     */
    public function getConnect()
    {
        return $this->connectDb();
    }
}