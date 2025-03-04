<?php

namespace App\Services\Auth;

use App\DTO\Default\ResponseDTO;
use App\Services\DefaultService;

class DetalhesService extends DefaultService
{
    protected string $mensagem_nao_encontrada = 'Credenciais e/ou sessões inválidas. Tente novamente.';

    public function __construct()
    {
        parent::__construct();
    }
    
    public function detalhes(): ResponseDTO
    {
        try {
            $resposta_db = auth()->user();
            $resposta = $this->montar_resposta($resposta_db, $resposta_db, $this->mensagem_nao_encontrada);
            $this->definir_dados_resposta($resposta);
        } catch (\Exception $e) {
            $this->lidar_com_excecao($e);
        } finally {
            return $this->dados_resposta([]);
        }
    }
}