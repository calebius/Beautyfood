<?php
// Iniciar a sessão
session_start();

// Armazenar dados do PHP em variáveis
$carrinho = json_encode($_SESSION['carrinho']);
$total = json_encode($_SESSION['total']);
?>

<!DOCTYPE HTML>
              <html>
                <head>
                  <title>Beautyfood</title>
                  <meta charset="utf-8" />
                  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
                  <!-- <link rel="stylesheet" href="css/estilos.css"/> -->
                      <link rel="stylesheet" href="assets\css\estilos.css">
                  <link rel="icon" href=img/pngwing.com.png>
                </head>
                <body class="homepage is-preload">
                  <div id="page-wrapper">

                  <!-- Header -->
                  <section id="header">
                  <div class="container">

                          <!-- Logo -->
                  <h1 id="logo">Beautyfood</h1>
                  <p>CALEB, DAVI, JOSUE</p>
                          <!-- Nav -->
                  <nav id="nav" align="center">
                  <ul>
                      <li><a href="#cafe" class="icon solid fa-home"><span>Café</span></a></li>
                      <li><a href="#almoco" class="icon fa-chart-bar" ><span>Pratos</span></a></li>
                      <li><a href="#doces" class="icon solid fa-cog" href="left-sidebar.html" ><span>Sobremesas</span></a></li>
                      <li><a href="#lanches" class="icon solid fa-sitemap" href="no-sidebar.html"><span>Lanches</span></a></li>
                  </ul>
                  </nav>
                  </div>
                  </section>

                    <!-- Features -->
                      <section id="features">
                      <div class="container">
                      <header>
                      <h2 >CARDÁPIO</strong>!</h2>
                      </header>
                      <div class="row aln-center">
                      <div class="col-4 col-6-medium col-12-small">
                  
                    <!-- CAFE -->
                        <section>
                          <a href="#" id="cafe" class="image featured"><img src="img/Overnight.jpg"  alt="" /></a>
                          <header>
                            <h3>Overnight</h3>
                          </header>
                          <p><strong> R$ 15,00 </strong></p>
                          <p> Salada com frutas vermelhas, mirtilo, iogurte, <br> banana, nozes, aveia e cereais.</p>
                          <button onclick="pao('Overnight', 15, 'img/Overnight.jpg')" >adicionar ao carrinho</button>
                        </section>

                        </div>
                        <div class="col-4 col-6-medium col-12-small">
                      
                              <!-- CAFE -->
                              <section>
                                <a href="#" class="image featured"><img src="img/farofa-de-cuscuz-destaque-essa-receita-funciona-1.jpg" alt="" /></a>
                                <header>
                                  <h3>Cuscuz temperado</h3>
                                </header>
                                <p><strong> R$ 20,00 </strong></p>
                                <p> Massa de milho amanteigada com bacon, tomate,<br> queijo coalho, salsinha e ovos.</p>
                                <button onclick="pao('Cuscuz Temperado', 20, 'img/farofa-de-cuscuz-destaque-essa-receita-funciona-1.jpg')" >adicionar ao carrinho</button>
                              </section>

                          </div>
                    <div class="col-4 col-6-medium col-12-small">
                            <!-- CAFE -->
                    <section class="caixa">
                          <a href="#" class="image featured"><img src="img/paopizza.jpg" alt="" /></a>                              <header>
                           <h3>Pão pizza</h3>
                            </header>
                             <p><strong> R$ 10,00 (cada) </strong></p>
                             <p> pão assado coberto por queijo mussarela <br> tomate, salsinha e orégano.</p>
                              <button onclick="pao('Pão pizza', 10, 'img/pp.jpg')" >adicionar ao carrinho</button>
                            </section>

                        </div>
                      
                        <div class="col-4 col-6-medium col-12-small">

                          
                          <!-- almoço -->
                          <section>
                            <a href="#" id="almoco" class="image featured"><img src="img/macarrao.jpg" alt="" /></a>
                            <header>
                              <h3> Macarronada</h3>
                            </header>
                            <p> R$ 20,00 </p>
                            <p> Macarronada com molho de tomate, <br>queijo e calabresa, </p>
                            <button onclick="pao('Macarronada', 20, 'img/macarrao.jpg')" >adicionar ao carrinho</button>
                          </section>

                      </div>
                      <div class="col-4 col-6-medium col-12-small">

                              <!-- almoço -->
                                <section>
                                  <a href="#" class="image featured" ><img src="img/lasanha2.jpg" alt="" /></a>
                                  <section id="almoco">
                                  <header>
                                    <h3>Lasanha à Bolonhesa</h3>
                                  </header>
                                    <p> R$ 30,00 </p>
                                    <p> Lasanha com carne moída e <br> molho à bolonhesa.</p>
                                  <button onclick="pao('Lasanha', 100, 'img/lasanha2.jpg')" >adicionar ao carrinho</button>
                                </section>
                                  
                            </div>
                            <div class="col-4 col-6-medium col-12-small">

                              <!-- almoço -->
                                <section>
                                  <a href="#" class="image featured"><img src="img/fettuccine Alfredo.jpg" alt="" /></a>
                                  <header>
                                    <h3>Fettuccine</h3>
                                  </header>
                                  <p> R$ 50,00 </p>
                                  <p>Macarronada de creme branco com camarão e torradinhas.</p>
                                  <button onclick="pao('Fettuccine', 50, 'img/fettuccine Alfredo.jpg')" >adicionar ao carrinho</button>
                                </section>

                            </div>
                            <div class="col-4 col-6-medium col-12-small">

                              <!-- almoço -->
                                <section id="doces">
                                  <a href="#" class="image featured" ><img src="img/brownie.jpg" alt="" /></a>
                                  <header>
                                    <h3>Brownie</h3>
                                  </header>
                                   <p> R$ 12,00 </p>
                                  <p>Fatias de brownie cremoso com chocolate de caramelo</p>
                                  <button onclick="pao('Brownie', 12, 'img/brownie.jpg')" >adicionar ao carrinho</button>
                                </section>

                            </div>
                            <div class="col-4 col-6-medium col-12-small">

                              <!-- sobremesas-->
                                <section>
                                  <a href="#" class="image featured"><img src="img/mousse.jpg" alt="" /></a>
                                  <header>
                                    <h3>mousse de maracujá</h3>
                                  </header>
                                  <p> R$ 15,00 </p>
                                   <p> mousse cremoso com <br> calda de maracujá </p>
                                  <button onclick="pao('Mousse de maracujá', 15, 'img/mousse.jpg')" >adicionar ao carrinho</button>
                                </section>

                            </div>
                            <div class="col-4 col-6-medium col-12-small">

                              <!-- sobremesas -->
                                <section>
                                    <a href="#" class="image featured"><img src="img/panquecas.jpg" alt="" /></a>
                                   <section >
                                  <header>
                                   <h3>panquecas</h3>
                                  </header>
                                     <p><strong> R$ 15,00 </strong></p>
                                     <p> Cinco panquecas fofinhas, com xarope de marble <br>original e acompanhamentos de frutas que preferir</p>
                                   <button onclick="pao('Panquecas', 15, 'img/panquecas.jpg')" >adicionar ao carrinho</button>
                                  </section>
                                  </div>
                                 <div class="col-4 col-6-medium col-12-small">

                              <!-- sobremesas -->

                              <section id="lanches">
                                  <a href="#" class="image featured"><img src="img/tortalimao.jpg" alt="" /></a>
                                  <header>
                                    <h3>Torta de limão</h3>
                                  </header>
                                  <p> R$ 20,00 </p>
                                  <p>Torta de limão cremosa.</p>
                                  <p> Rende 20 fatias</p>
                                  <button onclick="pao('Torta de limão', 20, 'img/tortalimao.jpg')" >adicionar ao carrinho</button>
                                </section>

                            </div>
                            <div class="col-4 col-6-medium col-12-small">

                              <!-- sobremesas -->
                                <section>
                                  <a href="#" class="image featured"><img src="img/bolo.jpg" alt="" /></a>
                                  <header>
                                    <h3>Bolo decorado</h3>
                                  </header>
                                  <p> R$ 35,00 </p>
                                  <p> Um bolo de chocolate decorado.</p>
                                  <p> Rende 20 fatias</p>
                                  <button onclick="pao('Bolo', 35, 'img/bolo.jpg')" >adicionar ao carrinho</button>
                                </section>

                            </div>
                            <div class="col-4 col-6-medium col-12-small">

                              <!-- lanche -->
                                <section>
                                  <a href="#" class="image featured"><img src="img/cenoura.jpg" alt="" /></a>
                                  <header>
                                    <h3>bolo</h3>
                                  </header>
                                  <p> R$ 25,00 </p>
                                  <p> Um bolo de cenoura com chocolate, misto.</p>
                                  <p> Rende 20 fatias</p>
                                  <button onclick="pao('Bolo de cenoura', 25, 'img/cenoura.jpg')" >adicionar ao carrinho</button>
                                </section>

                            </div>
                        <section id="carrinho">
                            <h2>Carrinho de compras <img src="img/carrinho-de-compras.ico" alt="aaa" class="carrinho-icon"></h2>
                            <ul id="itensCarrinho"></ul>
                            <p> <span id="totalCarrinho">0</span></p>
                          <button onclick="mostrarInformacao()"> Comprar </button>
                           <div id="informacaoAdicional">
                             <section id="header1">
                               <div class="container">
                                 AAAAAAAAAAAAAAAAAAAAAAA
                               </div>
                             </section>
                           </div>
                        </section>
                          </div>
                        </div>
                      </section>
                    <!-- lanche -->
                      <section id="footer">
                        <div class="container">
                          <header>
                            <h2>Questions or comments? <strong>Get in touch:</strong></h2>
                          </header>
                          <div class="row">
                            <div class="col-6 col-12-medium">
                              <section>
                                <form method="post" action="#">
                                  <div class="row gtr-50">
                                    <div class="col-6 col-12-small">
                                      <input name="name" placeholder="Name" type="text" />
                                    </div>
                                    <div class="col-6 col-12-small">
                                      <input name="email" placeholder="Email" type="text" />
                                    </div>
                                    <div class="col-12">
                                      <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                      <a href="#" class="form-button-submit button icon solid fa-envelope">Send Message</a>
                                    </div>
                                  </div>
                                </form>
                              </section>
                            </div>
                            <div class="col-6 col-12-medium">
                              <section>
                                <div class="row">
                                  <div class="col-6 col-12-small">
                                    <ul class="icons">
                                      <li class="icon solid fa-home">
                                        1234 Somewhere Road<br />
                                        Nashville, TN 00000<br />
                                        USA
                                      </li>
                                      <li class="icon solid fa-phone">
                                        (000) 000-0000
                                      </li>
                                      <li class="icon solid fa-envelope">
                                        <a href="#">beautyfooddelivery@gmail.com</a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="col-6 col-12-small">
                                    <ul class="icons">
                                      <li class="icon brands fa-twitter">
                                        <a href="#">@untitled</a>
                                      </li>
                                      <li class="icon brands fa-instagram">
                                        <a href="#">instagram.com/untitled</a>
                                      </li>
                                      <li class="icon brands fa-dribbble">
                                        <a href="#">dribbble.com/untitled</a>
                                      </li>
                                      <li class="icon brands fa-facebook-f">
                                        <a href="#">facebook.com/untitled</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </section>
                            </div>
                          </div>
                        </div>
                        <div id="copyright" class="container">
                          <ul class="links">
                            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                          </ul>
                        </div>
                      </section>

                  </div>
                    <script src="JavaScript.js"></script>
                </body>
              </html>