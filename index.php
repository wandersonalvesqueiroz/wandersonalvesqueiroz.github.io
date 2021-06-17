<?php

$skills = [
    "Banco de Dados" => [
        [
            "name" => 'Oracle',
            "progress" => 80
        ],
        [
            "name" => 'MySQL',
            "progress" => 70
        ],
        [
            "name" => 'SQL Server',
            "progress" => 50
        ],
        [
            "name" => 'Postgres',
            "progress" => 40
        ]
    ],
    "Linguagens de Programação" => [
        [
            "name" => 'PHP',
            "progress" => 100
        ],
        [
            "name" => 'Javascript | jQuery | Ajax',
            "progress" => 80
        ],
        [
            "name" => 'CSS3',
            "progress" => 90
        ],
        [
            "name" => 'HTML5',
            "progress" => 100
        ],
        [
            "name" => 'Java',
            "progress" => 20
        ]
    ],
    "Frameworks" => [
        [
            "name" => 'Yii',
            "progress" => 70
        ],
        [
            "name" => 'Laravel',
            "progress" => 50
        ],
        [
            "name" => 'Codeigniter',
            "progress" => 60
        ],
        [
            "name" => 'Joomla',
            "progress" => 90
        ],
        [
            "name" => 'Wordpress',
            "progress" => 40
        ],
        [
            "name" => 'Node JS',
            "progress" => 20
        ],
        [
            "name" => 'React',
            "progress" => 20
        ],
        [
            "name" => 'React Native',
            "progress" => 20
        ],
        [
            "name" => 'Angular JS',
            "progress" => 20
        ],
        [
            "name" => 'Primeface',
            "progress" => 30
        ]
    ],
    "Outros" => [
        [
            "name" => 'Photoshop | Illustrator | InDesign',
            "progress" => 70
        ],
        [
            "name" => 'Projetos e Instalações de Redes | Intranet',
            "progress" => 50
        ]
    ]
];

$experiences = [
    [
        "company" => 'Monetizze',
        "title" => 'Desenvolvedor PHP Sênior',
        "period" => '10/2020 – ATUAL',
        "jobdesc" => [
            'Desenvolver melhorias e corrigir sistema em framework PHP próprio ' .
                'implementando códigos e funcionalidades com auxílio de jQuery e Javascript.',
            'Utilização de Git para versionamentos e Banco de dados MySQL.'
        ]
    ],
    [
        "company" => 'Reply',
        "title" => 'Desenvolvedor PHP Sênior',
        "period" => '10/2018 – 09/2020',
        "jobdesc" => [
            'Desenvolver e corrigir sistema baseado no framework Yii com ' .
                'Bootstrap, DHTMLX e ferramenta Javascript própria adicionando ' .
                'implementando códigos e funcionalidades com auxílio de jQuery e Javascript.',
            'Dar suporte ao cliente. Utilização de Git para versionamentos e Banco de dados ' .
                'Oracle.'
        ]
    ],
    [
        "company" => 'SDrummond Soluções em Tecnologia Eirelli',
        "title" => 'Programador PHP',
        "period" => '(09/2013 – 10/2018)',
        "jobdesc" => [
            'Desenvolver sites em CMS Joomla adicionando implementando' .
                'códigos e personalizando templates e funcionalidades com auxílio de jQuery e' .
                'Javascript, além de desenvolver layouts com Photoshop e Illustrator.',
            'Customizar e otimizar sites PHP, HTML5 e CSS3. Utilização de SVN Tortoise' .
                'para versionamentos. Configuração de Servidores de hospedagem para' .
                'websites e e-mails.'
        ]
    ],
    [
        "company" => 'Bijouterias Fio de Ouro',
        "title" => 'Técnico em Informática',
        "period" => '(06/2012 - 06/2013)',
        "jobdesc" => [
            'Administrar redes, dar suporte a computadores, impressoras e outros' .
                'equipamentos, treinar usuários alterar e corrigir aplicações.'
        ]
    ],
    [
        "company" => 'Attps Informática',
        "title" => 'Estagiário de Implantação',
        "period" => '(01/2012 - 06/2012)',
        "jobdesc" => [
            'Corrigir e alterar sistema interligado aos bancos de dados Oracle e' .
                'SQL Server, realizar testes e homologação.'
        ]
    ],
    [
        "company" => 'Companhia do Strass',
        "title" => 'Gerente',
        "period" => '(12/2006 - 07/2010)',
        "jobdesc" => [
            'Planejar, organizar e supervisionar todas as atividades comerciais da' .
                'empresa, visando a atingir os objetivos estabelecidos de volume de vendas,' .
                'participação de mercado e qualidade do atendimento.'
        ]
    ]
];

$educations = [
    [
        "name" => 'FAMINAS - BH',
        "degree" => 'Bacharelado',
        "period" => '2010 - 2014',
        "course" => 'Sistemas de Informação',
        "locale" => 'Belo Horizonte - Minas Gerais'
    ]
];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wanderson Alves de Queiroz - Desenvolvedor</title>

    <meta name="author" content="Wanderson Alves de Queiroz" />
    <meta name="description" content="Currículo Wanderson Alves de Queiroz">

    <meta property="og:title" content="Wanderson">
    <meta property="og:description" content="Currículo Wanderson Alves de Queiroz">

    <meta name="twitter:title" content="Wanderson">
    <meta name="twitter:description" content="Currículo Wanderson Alves de Queiroz">

    <!-- favicon -->
    <link href="favicon.png" rel=icon>

    <!-- font-awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
    <div id="main-wrapper">
        <!-- Page Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>

        <div class="columns-block">
            <div class="left-col-block blocks">
                <header class="header">
                    <div class="content text-center">
                        <h1>Wanderson Alves de Queiroz</h1>

                        <p class="lead">Desenvolvedor</p>
                        <ul class="social-icon">
                            <li><a href="https://web.facebook.com/wandersonmg18" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/wandersonalvesqueiroz" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https://github.com/wandersonalvesqueiroz" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="profile-img"></div>
                </header>
                <!-- .header-->
            </div>


            <div class="right-col-block blocks">
                <section class="intro section-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2>Resumo</h2>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p>
                                    Em busca de novos desafios constantemente, atuo com tecnologias desde 2013 onde comecei com um estágio em banco de dados Oracle e Sql Server,
                                    adquirindo conhecimentos que ainda hoje me ajudam em minhas atividades. Posteriormente comecei um novo estágio em PHP, fui efetivado após 1
                                    ano e fiquei aproximadamente por 5 anos, onde participei de vários projetos desde a criação de pequenos sites empresariais até sistemas mais complexos,
                                    aprendi muito sobre outras tecnologias como Javascript, jQuery, Ajax, Json, Api Rest, Laravel, CMS Joomla, Wordpress, Magento.
                                    Passei por um curto período em outra empresa onde aprendi a trabalhar com PHP puro, através de um Framework próprio utilizado por eles, que me deu uma nova
                                    visão sobre a linguagem. Após todas essas experiências, tive a oportunidade de atuar em um sistema de alta complexidade relacionadas as regras onde atuei
                                    solucionando problemas em PHP e Oracle, utilizando metodologias ágeis e controles de versionamento Git. Além de todos esses projetos e tecnologias,
                                    sempre me encontrei com outros projetos fora do meu trabalho fixo onde utilizo todas as experiências adquiridas fundidas aos novos conhecimentos que
                                    venho adquirindo em linguagens como Node.js, React e React Native, me motivando a cada vez mais a me desenvolver e aprimorar.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-wrapper skills-wrapper gray-bg">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2>Skills</h2>
                                </div>
                            </div>
                        </div>
                        <!--.row-->
                        <div class="row">
                            <div class="col-md-12">
                                <?php foreach ($skills as $skill => $key) : ?>
                                    <div class="progress-wrapper">
                                        <h3><?= $skill ?></h3>
                                        <?php foreach ($key as $k) : ?>
                                            <div class="progress-item">
                                                <span class="progress-title"><?= $k['name'] ?></span>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?= $k['progress'] ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $k['progress'] ?>%;">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!--.row -->
                    </div>
                    <!-- .container-fluid -->
                </section>
                <!-- .skills-wrapper -->

                <section class="section-wrapper section-experience">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2>Experiências</h2>
                                </div>
                            </div>
                        </div>
                        <!--.row-->
                        <div class="row">
                            <div class="col-md-12">
                                <?php foreach ($experiences as $experience) : ?>
                                    <div class="content-item">
                                        <small><?= $experience['period'] ?></small>
                                        <h3><?= $experience['title'] ?></h3>
                                        <h4><?= $experience['company'] ?></h4>
                                        <?php foreach ($experience['jobdesc'] as $jobdesc) : ?>
                                            <p><?= $jobdesc ?></p>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!-- .container-fluid -->

                </section>
                <!-- .section-experience -->

                <section class="section-wrapper section-education gray-bg">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2>Formação</h2>
                                </div>
                            </div>
                        </div>
                        <!--.row-->
                        <div class="row">
                            <div class="col-md-12">
                                <?php foreach ($educations as $education) : ?>
                                    <div class="content-item">
                                        <small><?= $education['period'] . ' - ' . $education['degree'] ?></small>
                                        <h3><?= $education['course'] ?></h3>
                                        <h4><?= $education['name'] ?></h4>
                                        <p><?= $education['locale'] ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                    <!-- .container-fluid -->

                </section>
                <!-- .section-education -->

                <section class="section-contact section-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2>Contato</h2>
                                </div>
                            </div>
                        </div>
                        <!--.row-->
                        <div class="row">
                            <div class="col-md-12">
                                <address>
                                    <strong>Telefone/Whatsapp</strong><br>
                                    +55 (31) 99318-2668
                                </address>
                                <address>
                                    <strong>E-mail</strong><br>
                                    <a href="mailto:#">wandersonmg18@gmail.com</a>
                                </address>
                            </div>
                        </div>
                    </div>
                    <!--.container-fluid-->
                </section>
                <!--.section-contact-->

                <footer class="footer gray-bg">
                    <div class="copyright-section">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copytext">&copy; <?= date("Y") ?> Todos os direitos reservados</div>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!-- .container-fluid -->
                    </div>
                    <!-- .copyright-section -->
                </footer>
                <!-- .footer -->
            </div>
            <!-- .right-col-block -->
        </div>
        <!-- .columns-block -->
    </div>
    <!-- #main-wrapper -->

    <!-- jquery -->
    <script src="js/jquery-2.1.4.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>