<?php
/**
 * Class UserResponseBuilder
 *
 * @author Diego Wagner <diegowagner4@gmail.com>
 * http://www.discoverytecnologia.com.br
 */
namespace Dsc\MercadoLivre\Resources\User;

use Dsc\MercadoLivre\Http\ResponseBuilder;

class UserResponseBuilder extends ResponseBuilder
{
    /**
     * @var string
     */
    const TARGET = User::class;

    /**
     * @return User
     */
    public function __invoke()
    {
        return $this->serializer->deserialize($this->response->getContents(), self::TARGET);
    }
}