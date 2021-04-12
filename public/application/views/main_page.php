<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ta funfando</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<style>
.pro-cons{
    display: inline-flex;
    margin-top: 10px;
    margin-bottom: 10px;
    place-content: center;
}

.pro-cons > div{
    display: block;
    margin-left: 20px;
    margin-right: 20px;
    width: 500px;
    height: auto;
}

.footer{
    border: 1px solid black;
    background-color: #f7f7f7;
}
</style>
<body>
    <div class="container container-fluid header" role="banner" style="position: sticky;">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <h1>Outros FrameWorks PHP que poderiam ser mencionados na aula</h1>
                <h4>Atenção: estarei usando PHP 7.3 de referência</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                
            </div>
        </div>
    </div>
    <hr>
    <br>
    <div class="container container-fluid content">
        <div class="row">
            <!-- Codeigniter -->
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <h1>CodeIgniter</h1>
                <div class="pro-cons">
                    <div class="pros card">
                        <div class="card-content">
                            <div class="card-header">
                                <h1 class="title">Prós</h1>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Simplicidade de instalação</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Facilidade de utilização</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Fácil implementação em hospedagens comuns</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Não precisa da linha de comando</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Compatibilidade com servidores</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Desempenho ótimo</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Documentação ótima</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Fácil de encontrar soluções na internet</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="cons card">
                        <div class="card-content">
                            <div class="card-header">
                                <h1 class="title">Contras</h1>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Desatualizado quanto as tendências do PHP, e dos desenvolvedores</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Suporte com versões novas desanimador</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Tudo o que há de novo no Laravel como diferencial acaba virando um “Contra” o CodeIgniter</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Laravel -->
        <div class="row">
            <h1>Laravel</h1>
             <div class="pro-cons">
                <div class="pros card">
                    <div class="card-content">
                        <div class="card-header">
                            <h1 class="title">Prós</h1>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Implementação nativa do Composer</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Fácil escalabilidade do sistema</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Ferramentas e recursos formam um workflow funcional e completo</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Facilidade de manutenção do projeto</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Linha de comando</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Documentação ótima</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Fácil de encontrar soluções na internet</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Blade</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Elixir</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Homestead</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Migrations</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Artisan</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="cons card">
                    <div class="card-content">
                        <div class="card-header">
                            <h1 class="title">Contras</h1>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Complexidade da estrutura de trabalho dificulta a instalação em geral</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Rodar Laravel em hospedagens comuns não é&nbsp;produtivo</span></li>
                                <li style="font-weight: 400;">Quantidade de recursos reflete em uma quantidade de conteúdo maior para se aprender</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h1>CakePHP</h1>
            <div class="pro-cons">
                <div class="pros card">
                    <div class="card-content">
                        <div class="card-header">
                            <h1 class="title">Prós</h1>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Grande biblioteca de componentes;</li>
                                <li><strong>Convenção de código</strong>. Essa pode ser considerada tanto uma vantagem como uma desvantagem, a depender do seu projeto e do seu objetivo, uma vez que o ato de codar se torna muito simples, mas também cria limites na criatividade do programador;</li>
                                <li>Ainda tem uma <strong>comunidade muito ativa</strong>;</li>
                                <li><strong>Facilidade de aprendizado</strong>. Com isso, o Programador que o usa também consegue rodar rapidamente uma feature ou uma aplicação. Apesar de essa ter sido colocada como um vantagem, há quem diga que existem frameworks mais fáceis de aprender do o CakePHP;</li>
                                <li>Tem suporte para <strong>arquitetura MVC</strong>;</li>
                                <li>Recursos para evitar cross site scripting (XSS), entre outros medidas de segurança;</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="cons card">
                    <div class="card-content">
                        <div class="card-header">
                            <h1 class="title">Contras</h1>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Baixo nível de customização</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 footer">
                Fontes:
                <ul>
                    <li>
                        <a href="https://www.hostgator.com.br/blog/php-frameworks/">Hostgator</a>
                    </li>
                    <li>
                        <a href="http://dev.rbtech.info/codeigniter-vs-laravel-melhor/">RBTech</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>