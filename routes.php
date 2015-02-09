<?php
/**
 * Created by PhpStorm.
 * User: teoria
 * Date: 3/12/14
 * Time: 5:41 PM
 */

$routes = array(
    '/' => '',

    '/assuntosTree' => 'AssuntosController:getTree@get',

    '/filtro' => 'FiltroController:getFiltro@post',

    '/permissao' => 'PermissaoController:hasPermission@post',
    '/logar' => 'LoginController:logar@post',
    '/simulados/:id' => 'SimuladoController:simuladoById@get',
    '/gabarito/:id' => 'SimuladoController:gabarito@get',
    '/rankings/:id' => 'RankingController:getRanking@get',
    '/aluno/:id' => 'RankingController:getAluno@get',
    '/estatistica(/:start/:limit)' => 'EstatisticaController:getEstatistica@get',
    '/materiais' => array(
            "get" => 'MateriaisController:getMateriais',
            "post" => 'MateriaisController:buscaMateriais',
    ),
    '/logout' => 'SairController:getSair@get',
    '/esqueciSenha/' => 'EsqueciSenhaController:getSenha@post',
    '/mudarSenha/:cod' => 'EsqueciSenhaController:trocaSenha@get',
    '/novaSenha' => 'EsqueciSenhaController:novaSenha@post',
    '/cadastro' => 'UsuarioController:cadastro@post',
    '/sugestoes' => 'ContatoController:contatoEnviar@post',
    '/sugestoes/resposta' => 'ContatoController:contatoEnviarResposta@post',
    '/configuracoes' => array(
        "get" => 'UsuarioController:getUsuariosDados',
        "post" => 'UsuarioController:atualizarUsuario'
    ),
    '/simulados' => array(
        "get" =>   'SimuladoController:simuladoAll@get',
        "post" => 'SimuladoController:responderSimulado@post'
     ),
     '/relatorioLog' => 'LogController:retornaMaiorAcesso@get',
     
     '/usuarios/byTurma/:id' => 'UsuarioController:selectByIdTurma@get',
     '/getTurmas' => 'TurmasController:selectAll@get',
     '/questoes' => 'QuestaoController:getQuestoes@get',

    // ADMIN
    
     /* Materiais */
    '/admin/materiais(/:i)' => 'adminMaterialController:getMateriais@get', 
    '/admin/adicionarMaterial' => 'adminMaterialController:adicionarMaterial@get',
    '/admin/inserirMaterial' => 'adminMaterialController:insereMaterial@post',
    '/admin/deletarMaterial/:id' => 'adminMaterialController:deletarMaterial@get',
    '/admin/editarMaterial/:id' => 'adminMaterialController:editarMaterial@get',
    '/admin/atualizaMaterial' => 'adminMaterialController:atualizaMaterial@post',

    /* TAG */ 
    
    '/admin/tags(/:start/:limit)' => 'adminTagController:getTags@get', 
    '/admin/inserirTag' => 'adminTagController:inserir@post',
    '/admin/alterarTag' => 'adminTagController:alterar@post',
    '/admin/deletarTag/:id' => 'adminTagController:deletar@get',
    '/admin/tag/byquestao/:id' => 'adminTagController:getTagByQuestao@get',
     
    /* Usuários */
    
    '/admin/usuarios(/:i)' => 'adminUsuarioController:getUsuariosAdm@get',
    '/admin/adicionarUsuario' => 'adminUsuarioController:adicionarUsuarioAdmin@get',
    '/admin/inserirUsuario' => 'adminUsuarioController:inserirUsuarioAdmin@post',
    '/admin/deletarUsuario/:id' => 'adminUsuarioController:deletarUsuarioAdmin@get',
    '/admin/editarUsuario/:id(/:msg)' => 'adminUsuarioController:editarUsuarioAdmin@get',
    '/admin/alterarUsuario/' => 'adminUsuarioController:alterarUsuarioAdmin@post',

    
    '/admin/estatistica/:id' => 'adminEstatisticaController:getEstatisticaByUser@get',
    '/admin/estilo/:id' => 'adminFelderController:relatorioFelderByUser@get',
    '/gerarSenhaAlunos' => 'UsuarioController:gerarSenhaAlunos@get',
    
    '/admin/logar' => 'adminLoginController:logar@post',
    '/admin/logout' => 'adminSairController:sair@get',
    '/admin/permissao' => 'adminPermissaoController:hasPermission@post',
    
    /* Simulado */
    
    '/admin/simulados' => 'adminSimuladoController:simuladoAll@get',
    '/admin/inserirSimulado' => 'adminSimuladoController:inserirSimulado@post',
    '/admin/alterarSimulado(/:id)' => 'adminSimuladoController:alterarSimulado@post',
    '/admin/deletarSimulado/:id' => 'adminSimuladoController:deletar@get',
    '/admin/gabarito/:id' => 'SimuladoController:gabaritoAdmin@get',
    '/admin/comparativoErro/:idusuario' => 'adminEstatisticaController:comparativoErro@get',
    '/admin/simuladoById/:idsimulado' =>   'adminSimuladoController:getSimuladoById@get',
    '/admin/relatorioProfessor' => 'adminEstatisticaController:relatorioProfessor@get',
        
    
    '/mensagens' => 'NoticiaController:selectNoticiasUsuario@get',
    '/mensagem/:id' => 'NoticiaController:selectNoticiaByIdNoticia@get',
    '/inserirMensagem' => 'NoticiaController:inserirNoticias@post',
    '/deletarMensagem/:id' => 'NoticiaController:delete@delete',
    '/alterarMensagem' => 'NoticiaController:update@post',
    '/mensagens/byuser/:id' => 'NoticiaController:selectNoticiasPeloProfessor@get',
    '/mensagensNaoDirecionadas' => 'NoticiaController:selectNoticiasNaoPessoais@get',
    '/admin/getTipoAluno/:tipo' => 'NoticiaController:getTipoAluno@get',
    
    // FELDER
    
    '/felder' => 'FelderController:cadastrarFelder@post',
    '/estilo'=>'FelderController:relatorioFelder@get',
    '/felderTodos' => 'adminFelderController:selectFelderTodos@get',
    '/selectEmailAll' => 'UsuarioController:selecionarEmailAll@get',
    '/inserirQuestao' => 'QuestaoController:redirecionarPagina@get',
    '/questaoInsert' => 'QuestaoController:questaoInsert@post',
    '/admin/getQuestao/:id' => 'QuestaoController:getQuestaoById@get',
    '/admin/editarQuestao' => 'QuestaoController:editarQuestao@post',
    '/admin/removerQuestao/:idquestao' => 'QuestaoController:removerQuestao@get',
    '/admin/getRanking(/:id)' => 'EstatisticaController:getRanking@get',
    '/admin/getRankingTodos(/:id)' => 'EstatisticaController:getRankingTodos@get',
    '/admin/getMedia(/:id)' => 'EstatisticaController:getMedia@get',
    '/admin/getGenero(/:id)' => 'EstatisticaController:getGenero@get',
    '/admin/getTag(/:id)' => 'EstatisticaController:getTag@get',
    '/admin/getHistogramaQuestao(/:id)' => 'EstatisticaController:getHistogramaQuestao@get',
    '/admin/questoesDados' => 'QuestaoController:getQuestoesDados@get',
    '/admin/assuntosTree' => 'QuestaoController:montarArvoreAssuntos@get',
    '/admin/inserirTag' => 'adminTagController:inserir@post',
    '/contarQuestao' => 'QuestaoController:contadorQuestao@post',
    '/filtrarQuestao' => 'QuestaoController:filtrarQuestoes@post',
    '/admin/montarArvore' => 'adminTagController:montarArvoreAssuntos@get',
    '/ccc' => 'QuestaoController:redireciona@get',
    '/cadastroCompleto/:id' => 'LoginController:cadastroCompleto@get',
    '/verificarIgual/:textoQuestao' => 'QuestaoController:verificarQuestaoIgual@get',
    '/enem' => array(
        'get' => 'EnemController:renderView',
        'post' => 'EnemController:insertEnem'
    )


    /*'/demo' => array(
        "get" =>  Main:test2,
        "post" => "Main:test3"
    )*/
    

    


);

