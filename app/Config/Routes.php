<?php

namespace Config;

$routes = Services::routes();
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();


// Home
$routes->get('/', 'Home::index');

// Administrador (NOK)
$routes->get("ConAdm", "Dados::telaConsultaAdm");

// Animal cliente
$routes->get("cadA", "Dados::cadastrarAnimal");
$routes->post("CadA2", "Dados::cadastrarAnimal2");
$routes->get("ConAnimalCli", "Dados::consultaAnimaisCli");
$routes->post("ConAnimalCli", "Dados::consultaAnimaisCli2");

// Animal usuario
$routes->get("ConAnimal", "Dados::consultaAnimais");
$routes->post("ConAnimal", "Dados::consultaAnimais2");
$routes->get("AltAnimal/(:num)", "Dados::alterarAnimal/$1");
$routes->post("AltAnimal/(:num)", "Dados::alterarAnimal2/$1");
$routes->get("IntAnimal/(:num)", "Dados::inativarAnimais/$1");
$routes->get("AtvAnimal/(:num)", "Dados::ativarAnimais/$1");


// Agendamento
$routes->get("ConAgendamento", "Dados::consultaAgendamento");
$routes->post("ConAgendamento", "Dados::consultaAgendamento2");
$routes->get("AltAgendamento/(:num)", "Dados::alterarAgendamento/$1");
$routes->post("AltAgendamento/(:num)", "Dados::alterarAgendamento2/$1");

// Atendimento
$routes->get("cadAtendimento", "Dados::cadastrarAtendimento");
$routes->post("cadAtendimento", "Dados::cadastrarAtendimento2");
$routes->get("ConAtendimento", "Dados::consultaAtendimento"); 
$routes->post("ConAtendimento", "Dados::consultaAtendimento2"); 
$routes->get("removeAtendimento/(:num)", "Dados::removerAtendimento/$1"); 
$routes->post("removeAtendimento/(:num)", "Dados::removerAtendimento/$1"); 
$routes->get("AltAtendimento/(:num)", "Dados::alterarAtendimento/$1"); 
$routes->post("AltAtendimento/(:num)", "Dados::alterarAtendimento2/$1"); 

// Cliente
$routes->get("cadC", "Dados::cadastrarC"); 
$routes->post("CadastrarC2", "Dados::cadastrarC2"); 
$routes->get("ConCli", "Dados::consultaCli"); 
$routes->post("ConCli", "Dados::consultaCli2"); 
$routes->get("AltCliente/(:num)", "Dados::alterarCliente/$1"); 
$routes->post("AltCliente/(:num)", "Dados::alterarCliente2"); 
$routes->get("IntCliente/(:num)", "Dados::inativarCliente/$1");
$routes->get("AtivCliente/(:num)", "Dados::ativarCliente/$1");

// Login
$routes->post("LoginFC", "Dados::loginCli2"); 
$routes->get("LoginFC", "Dados::loginCli2"); 
$routes->get("logout", "Dados::logout"); 
$routes->get("LoginU", "Dados::loginUsuario"); 
$routes->post("LoginU", "Dados::loginUsuario2"); 

// Ocupação
$routes->get("cadOcupacao", "Dados::cadastrarOcupacao"); 
$routes->post("cadOcupacao", "Dados::cadastrarOcupacao2"); 
$routes->get("ConOcupacao", "Dados::consultaOcupacao"); 
$routes->post("ConOcupacao", "Dados::consultaOcupacao2"); 
$routes->get("removeOcupacao/(:num)", "Dados::removerOcupacao/$1"); 
$routes->post("removeOcupacao/(:num)", "Dados::removerOcupacao/$1"); 
$routes->get("AltOcupacao/(:num)", "Dados::alterarOcupacao/$1"); 
$routes->post("AltOcupacao/(:num)", "Dados::alterarOcupacao2/$1"); 
$routes->get("AltOcupacao/(:num)", "Dados::alterarOcupacao/$1"); 
$routes->post("AltOcupacao/(:num)", "Dados::alterarOcupacao2/$1"); 

// Serviço (Atribuição)
$routes->get("cadServico", "Dados::cadastrarServico"); 
$routes->post("cadServico", "Dados::cadastrarServico2"); 
$routes->get("ConServico", "Dados::consultaServico"); 
$routes->post("ConServico", "Dados::consultaServico2"); 
$routes->get("removeServico/(:num)", "Dados::removerServico/$1"); 
$routes->post("removeServico/(:num)", "Dados::removerServico/$1"); 
$routes->get("AltServico/(:num)", "Dados::alterarServico/$1"); 
$routes->post("AltServico/(:num)", "Dados::alterarServico2/$1"); 

// Tipo Serviço 
$routes->get("cadTipoServ", "Dados::cadastrarTipoServ"); 
$routes->post("cadTipoServ", "Dados::cadastrarTipoServ2"); 
$routes->get("ConTipoServico", "Dados::consultaTipoServico"); 
$routes->post("ConTipoServico", "Dados::consultaTipoServico2"); 
$routes->get("removeTipoServico/(:num)", "Dados::removerTipoServico/$1"); 
$routes->post("removeTipoServico/(:num)", "Dados::removerTipoServico/$1"); 
$routes->get("AltTipoServico/(:num)", "Dados::alterarTipoServico/$1"); 
$routes->post("AltTipoServico/(:num)", "Dados::alterarTipoServico2/$1"); 

// Usuario
$routes->get("cadU","Dados::cadastrarU"); 
$routes->post("cadU2","Dados::cadastrarU2");
$routes->get("ConUsuario", "Dados::consultaUsuario"); 
$routes->post("ConUsuario", "Dados::consultaUsuario2"); 
$routes->get("AltUsuario/(:num)", "Dados::alterarUsuario/$1"); 
$routes->post("AltUsuario/(:num)", "Dados::alterarUsuario2/$1"); 
$routes->get("IntUsuario/(:num)", "Dados::inativarUsuario/$1");
$routes->get("AtivUsuario/(:num)", "Dados::ativarUsuario/$1");


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
