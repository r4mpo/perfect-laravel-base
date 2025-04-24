<?php

namespace App\Services\Produtos;

use App\DTOs\Default\ResponseDTO;
use App\Services\DefaultService;

class DetalharService extends DefaultService
{
    protected string $mensagem_nao_encontrada = 'Produtos não foram encontrados. Tente novamente.';

    public function __construct()
    {
        parent::__construct();
    }
    
    public function detalhar($id): ResponseDTO
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