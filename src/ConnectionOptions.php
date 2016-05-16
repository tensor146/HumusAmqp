<?php
/**
 * Copyright (c) 2016. Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 *  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 *  "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 *  LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 *  A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 *  OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 *  SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 *  LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 *  DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 *  THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 *  (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 *  OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *  
 *  This software consists of voluntary contributions made by many individuals
 *  and is licensed under the MIT license.
 */

declare (strict_types=1);

namespace Humus\Amqp;

/**
 * Class ConnectionOptions
 * @package Humus\Amqp
 */
class ConnectionOptions extends AbstractOptions
{
    /**
     * @var string
     */
    protected $host = 'localhost';

    /**
     * @var int
     */
    protected $port = 5672;

    /**
     * @var string
     */
    protected $login = 'guest';

    /**
     * @var string
     */
    protected $password = 'guest';

    /**
     * @var string
     */
    protected $vhost = '/';

    /**
     * @var bool
     */
    protected $persistent = false;

    /**
     * @var float
     */
    protected $readTimeout = 1.00; // secs

    /**
     * @var float
     */
    protected $writeTimeout = 1.00; // secs

    /**
     * @param string $host
     */
    public function setHost(string $host)
    {
        $this->host = $host;
    }

    /**
     * @return string
     */
    public function getHost() : string
    {
        return $this->host;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }

    /**
     * @param bool $persistent
     */
    public function setPersistent(bool $persistent)
    {
        $this->persistent = $persistent;
    }

    /**
     * @return bool
     */
    public function getPersistent() : bool
    {
        return $this->persistent;
    }

    /**
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->port = $port;
    }

    /**
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }

    /**
     * @param float $readTimeout
     */
    public function setReadTimeout(float $readTimeout)
    {
        $this->readTimeout = $readTimeout;
    }

    /**
     * @return float
     */
    public function getReadTimeout() : float
    {
        return $this->readTimeout;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getLogin() : string
    {
        return $this->login;
    }

    /**
     * @param string $vhost
     */
    public function setVhost(string $vhost)
    {
        $this->vhost = $vhost;
    }

    /**
     * @return string
     */
    public function getVhost() : string
    {
        return $this->vhost;
    }

    /**
     * @param float $writeTimeout
     */
    public function setWriteTimeout(float $writeTimeout)
    {
        $this->writeTimeout = $writeTimeout;
    }

    /**
     * @return float
     */
    public function getWriteTimeout() : float
    {
        return $this->writeTimeout;
    }
}

