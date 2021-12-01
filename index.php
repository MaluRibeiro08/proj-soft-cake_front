<?php
    $root = explode('/', $_SERVER['REQUEST_URI'])[1];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soft Cake</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <link rel="stylesheet" href="./public/styles/global.css">
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/7cbb7ae6e7.js" crossorigin="anonymous"></script>
    <script src="./script.js" defer></script>
</head>
<body>
    <?php require('./components/header/header.php'); ?>
    <main>
        <section id="principal">
            <div class="conteudo">
                <img src="./public/images/logo2.svg" alt="Soft Cake">
                <p>O Soft Cake é um site de vendas de bolos veganos, com diversas opções de personalização.</p>
            </div>
            <a href="#informacoes">
                <i class="fa-solid fa-angles-down"></i>
            </a>
        </section>
        <section id="informacoes">
            <div class="card">
                <div class="icone">
                    <i class="fas fa-clock"></i>
                </div>
                <h2>10:00 am - 7:00 pm</h2>
                <p>Horário comercial</p>
            </div>
            <div class="card">
                <div class="icone">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h2>10:00 am - 7:00 pm</h2>
                <p>Horário comercial</p>
            </div>
            <div class="card">
                <div class="icone">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h2>10:00 am - 7:00 pm</h2>
                <p>Horário comercial</p>
            </div>
        </section>
        <section id="catalogo">
            <h3>Catálogo</h3>
            <header>
                <div class="pesquisa">
                    <input type="text" placeholder="Insira o nome do produto">
                    <button>
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <select name="filtro" id="filtro">
                    <option value="mais-vendidos">Mais vendidos</option>
                    <option value="menos-vendidos">Menos vendidos</option>
                    <option value="melhor-avaliados">Melhor avaliados</option>
                </select>
            </header>
            <main>
                <div class="filtro-ingredientes">
                    <div>
                        <input type="checkbox" name="ingrediente" id="1" checked>
                        <label for="1">Morango</label>
                    </div>
                    <div>
                        <input type="checkbox" name="ingrediente" id="2" checked>
                        <label for="2">Chocolate</label>
                    </div>
                    <div>
                        <input type="checkbox" name="ingrediente" id="3" checked>
                        <label for="3">Caramelo</label>
                    </div>
                </div>
                <div class="listagem">
                    <div class="produtos">
                        <div class="card-produto">
                            <img src="https://images.unsplash.com/photo-1614174486496-344ef3e9d870?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80" alt="Bolo de chocolate">
                            <div class="informacoes">
                                <div class="titulo">
                                    <h4>Bolo de chocolate</h4>
                                    <h5>R$10</h5>
                                </div>
                                <div class="estrelas">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <button>
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="paginacao">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#" class="next">Próximo ></a>
                    </div>
                </div>
            </main>
        </section>
        <section id="unidades">
            <h3>Unidades</h3>
            <div id="mapa"></div>
            <a href="./unidades">Ver lista completa ></a>
        </section>
        <section id="faq">
            <h3>Perguntas frequentes</h3>
            <div>
                <img src="/<?= $root ?>/public/images/question.svg" alt="">
                <div class="perguntas">
                    <div class="item-pergunta">
                        <button aria-expanded="false">Como posso trabalhar com vocês?<i class="fas fa-plus"></i></button>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                    <div class="item-pergunta">
                        <button aria-expanded="false">Pergunta 2<i class="fas fa-plus"></i></button>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                    <div class="item-pergunta">
                        <button aria-expanded="false">Pergunta 3<i class="fas fa-plus"></i></button>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        const mapa = L.map('mapa').setView([-23.5439192, -46.8327736,17], 15)

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(mapa)

        const icone = L.icon({
            iconUrl: './public/images/map-marker.svg',
            iconSize: [50, 58],
            iconAnchor: [29, 58],
        })

        function adicionarMarker({ id, name, lat, lng }) {
            const popup = L.popup({
                closeButton: false,
                className: 'map-popup',
                minHeight: 35,
                offset: [1, -55]
            }).setContent(
                `${name} <a class="unidade" href="./unidades?id=${id}"> > </a>`
            )

            L.marker([lat, lng], { icon: icone }).addTo(mapa).bindPopup(popup)
        }

        const unidades = [
            {
                id: 1,
                name: 'Carapicuíba',
                lat: -23.5439192,
                lng: -46.8327736,
            }
        ];

        unidades.forEach((unidade) => {
            adicionarMarker(unidade)
        });
    </script>
</body>
</html>