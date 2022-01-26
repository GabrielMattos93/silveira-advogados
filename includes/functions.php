<?php

//Tìtulo da Página
function titulo()
{
    (isset($_GET['url'])) ? $pagina = $_GET['url'] : $pagina = 'home';
    switch ($pagina):
        case 'home':
            $titulo =  'Silveira Advogados | Escritório de Advocacia no Rj';
            break;
        case 'institucional':
            $titulo =  'Institucional - Quem é Silveira Advogados?';
            break;
        case 'servico':
            $titulo =  'Servico - Os principais serviços que oferecemos.';
            break;

        case 'equipe':
            $titulo =  'Especialistas - Veja a equipe de especialistas pronto para atender sua causa';
            break;

        case 'areas-de-atuacao':
            $titulo =  'Áreas de Atuação - Atuamos nas principais áreas do direito, somos especialistas em direito criminal';
            break;

          case 'contato':
                $titulo =  'Contate-nos - Fale conosco e agende seu atendimento online.';
                break;

            case 'privacidade':
                    $titulo =  'Política de Privacidade dos Dados - Silveira Advogados';
                    break;
    endswitch;
    return $titulo;
}

//Meta - Description
function meta_description()
{
    (isset($_GET['url'])) ? $pagina = $_GET['url'] : $pagina = 'home';
    switch ($pagina):
        case 'home':
            $description =  'Estamos em atuação a mais de 15 anos, ajudando a viablizar ideias e analisar riscos jurídicos. Possuimos um alto padrão de qualidade e excelência.';
            break;
        case 'institucional':
            $description =  'Institucional - Estamos em atuação a mais de 15 anos, ajudando a viablizar ideias e analisar riscos jurídicos. Possuimos um alto padrão de qualidade e excelência.';
            break;
        case 'servico':
            $description =  'Servico - Estamos em atuação a mais de 15 anos, ajudando a viablizar ideias e analisar riscos jurídicos. Possuimos um alto padrão de qualidade e excelência.';
            break;

        case 'equipe':
            $description =  'Especialistas - Estamos em atuação a mais de 15 anos, ajudando a viablizar ideias e analisar riscos jurídicos. Possuimos um alto padrão de qualidade e excelência.';
            break;

        case 'areas-de-atuacao':
            $description =  'Áreas de Atuação - Estamos em atuação a mais de 15 anos, ajudando a viablizar ideias e analisar riscos jurídicos. Possuimos um alto padrão de qualidade e excelência.';
            break;

          case 'contato':
            $description =  'Contate-nos - Estamos em atuação a mais de 15 anos, ajudando a viablizar ideias e analisar riscos jurídicos. Possuimos um alto padrão de qualidade e excelência.';
                break;
    endswitch;
    return $description;
}
