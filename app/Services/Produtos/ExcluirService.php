<?php

namespace App\Services\Produtos;

use App\DTO\Default\ResponseDTO;
use App\Services\DefaultService;

class ExcluirService extends DefaultService
{
    protected string $mensagem_nao_encontrada = 'Produtos não foram excluídos. Tente novamente.';

    public function __construct()
    {
        parent::__construct();
    }
    
    public function excluir($id): ResponseDTO
    {
        try {
            // 
        } catch (\Exception $e) {
            $this->lidar_com_excecao($e);
        } finally {
            return $this->dados_resposta([]);
        }
    }
}