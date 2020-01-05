<?php
ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";
// require __DIR__ . "/Source/Config/Db.php";

use  CoffeeCode\Router\Router;
use Source\Models\OrcamentoModel;

$route = new Router(SITE['root']);

// if(!isset($_SESSION))session_start(); //verifica se a sessão aberta

// Conectar com o banco de dados
// if ($_SERVER['SERVER_NAME'] == 'localhost')
//     require './Source/Config/config_dev.php';
// else
//     require './Source/Config/config_prod.php';


// Db::conectar($dbname, $user, $password, $host);
       
        
/**
 * APP
 */
$route->namespace("Source\Controllers");

/**
 * web
 */
$route->group(null);
//$route->get("/", "Web:home");
$route->get("/", "Web:home", "web.home");
$route->get("/login", "Web:logout", "web.logout");
$route->get("/contato", "Web:contact", "web.contato");
$route->get("/teste", "Web:layout", "web.layout");
$route->post("/login", "Web:login", "web.login");
$route->get("/home","Web:inicio", "web.inicio");
$route->get("/logout","Web:logout", "web.logout");

/**
 * web
 * etiquetas
 */
$route->group("etiqueta");
$route->get("/","Atendimento:etiqueta");
$route->get("/busca","Atendimento:buscaEtiqueta");

/**
 * web
 * Atendimento de empresas
 */
$route->group("atendimento");
$route->get("/", "Atendimento:atendimento");
$route->get("/plano", "Atendimento:plano");
$route->post("/plano", "Atendimento:adicionar");
$route->post("/empresa", "webEmpresa:buscar");
$route->post("/autoEnsaio", "Atendimento:carregaEnsaio");
$route->post("/auto", "Atendimento:carregaNorma");
$route->post("/os", "OrcamentoController:adicionar");
$route->post("/os/excluir", "OrcamentoController:excluir");


/**
 * controller: Composicao
 * Composições
 */
$route->group("comp");
$route->get("/", "CompController:home");
$route->get("/add", "CompController:incluir");
$route->post("/add", "CompController:adicionar");
$route->put("/edit/{id}", "CompController:editar");
$route->post("/excluir", "CompController:excluir");
$route->get("/{id}/editar", "CompController:editar");

/**
 * webEmpresa
 * Empresa
 */
$route->group("empresa");
$route->get("/", "WebEmpresa:empresa");
$route->get("/add", "WebEmpresa:incluir");
$route->post("/add", "WebEmpresa:adicionar");
$route->get("/edit/{id}", "WebEmpresa:editar");
$route->post("/edit", "WebEmpresa:atualizar");
$route->post("/excluir", "WebEmpresa:excluir");
$route->get("/{id}/editar", "WebEmpresa:editar");
//$route->post("/busca/?{id}","WebEmpresa:buscar");
/**
 * NormaController
 * acesso responsavel pelas normas 
 */
$route->group("ensaio");
$route->get("/","EnsaioController:ensaios");
$route->post("/add","EnsaioController:adicionar");
$route->get("/editar/{id}","EnsaioController:editar");
$route->post("/edit","EnsaioController:atualizar");
$route->post("/excluir","EnsaioController:excluir");


/**
 * controller: Equipamentos
 * Composições
 */
$route->group("equipamento");
$route->get("/", "EquipController:todos");
$route->get("/add", "EquipController:incluir");
$route->post("/add", "EquipController:adicionar");
$route->get("/editar/{id}", "EquipController:editar");
$route->post("/excluir", "EquipController:excluir");
$route->post("/edit", "EquipController:editar");
/**
 * controller: FuncionarioController
 * Funcionarios
 */
$route->group("func");
$route->get("/", "FuncionarioController:todos");
$route->get("/add", "FuncionarioController:adicionar");
$route->post("/add", "FuncionarioController:adicionar");
$route->put("/edit/{id}", "FuncionarioController:editar");
$route->post("/excluir", "FuncionarioController:excluir");
$route->get("/conta", "FuncionarioController:conta");

/**
 * NormaController
 * acesso responsavel pelas normas 
 */
$route->group("norma");
$route->get("/","NormaController:normas");
$route->get("/editar/{id}","NormaController:editar");
$route->post("/add","NormaController:adicionar");
$route->post("/edit","NormaController:atualizar");
$route->post("/excluir","NormaController:excluir");





$route->group("autocomplete");
$route->get("/?", "WebEmpresa:buscar");
/**
 * ERROR
 */
$route->group("ops");
$route->get("/{errcode}", "Web:error");

/**
 * PROCESS
 */
$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();