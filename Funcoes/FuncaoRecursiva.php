<?php

/* Funções Recursivas 
Funções recursivas são funções que podem ser chamadas dentro de outra função. São utilizadas 
em situações mais complexas excepcionais. */

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Início: Diretor Comercial 
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //Início: Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    //Término: Gerente de Vendas
                )
            ),
            //Término: Diretor Comercial
            
            //Início: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //Início: Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            //Início: Supervisor de Suprimentos 
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos'
                            )
                            //Término: Supervisor de Suprimentos 
                        )
                    ),
                    //Término: Gerente de Compras

                    //Início: Gerente Financeiro 
                    array(
                        'nome_cargo' => 'Gerente Financeiro',
                        'subordinados' => array(
                            //Início: Supervisor de Contas a Pagar 
                            array(
                                'nome_cargo' => 'Supervisor de Contas a Pagar'
                            )
                            //Término: Supervisor de Contas a Pagar 
                        )
                    )
                    //Término: Gerente Financeiro 
                )
            )
            //Término: Diretor Financeiro

        )
    )
);

function exibe($cargos) {

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= '<li>';

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= exibe($cargo['subordinados']);

        }

        $html .= '</li>';

    }

    $html .= '</ul>';

    return $html;

}

echo exibe($hierarquia);

?>