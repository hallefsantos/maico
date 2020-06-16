<?php get_header(); ?>

<header class="header header-home">
   <nav class="nav">
      <div class="container">
         <a class="logo" href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_url')?>/assets/img/maico-logo.jpg" alt="Logo Maico">
         </a>
         <ul class="menu">
            <li><a href="#">aparelhos auditivos</a></li>
            <li><a href="#">acessórios</a></li>
            <li><a href="#">onde comprar</a></li>
            <li><a href="#">perda auditiva</a></li>
            <li><a href="#">suporte</a></li>
            <li><a href="#">0800 877 2020</a></li>
         </ul>

         <ul class="social">
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
         </ul>

         <a id="js-open-menu" class="menu-button">
            <i class="menu-icon"></i>
         </a>
      </div>

      <div class="menu-mobile">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, aliquid!</p>
      </div>
   </nav>

   <div class="container">

      <div class="row justify-content-between">
         <div class="col-md-6">
            <a id="logo" href="<?php bloginfo('url'); ?>">
               <img src="<?php bloginfo('template_url')?>/assets/img/maico-logo.jpg" alt="Logo Maico">
            </a>
         </div>
         <div class="col-md-4">
            <h1><strong>#ouvir bem</strong> <br>para viver melhor!</h1>

            <p>As novas tecnologias dos aparelhos auditivos são capazes de se conetectar com o mundo permitindo você escutar milhares de detalhes.</p>

            <p>Descubra como a MAICO pode melhorar sua audiação proporcinando mais qualidade de vida.</p>

         </div>
      </div>

      <div class="row">
         <div class="col-md-6">
            <div class="header__atendimento">
               <h3>Atendimento presencial</h3>
               <ul>
                  <li><a href="#">Quero falar com alguém</a></li>
                  <li><a href="#">Quero testar o aparelho</a></li>
                  <li><a href="#">Conheço uma pessoa que usa</a></li>
                  <li><a href="#">Tenho algumas dúvidas</a></li>
               </ul>
            </div>

            <form class="pesquisa-cep" id="pesquisa-cep">
               <strong>Queremos atender você</strong>
               <div class="form-group">
                  <input type="text" id="cep" placeholder="INSIRA SEU CEP">
                  <button type="submit"><i class="fas fa-chevron-right"></i></button>
                  <div class="loader">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </div>
               <div class="erro"></div>
            </form>
         </div>
         <div class="col-md-6">
         </div>
      </div>
   </div>
   
</header>

<main>

   <div class="home-principal">
      <div class="container">

         <div class="row">

            <!-- primeira coluna /begin/ -->
            <div class="col-lg-5">
               <img src="<?php bloginfo('template_url')?>/assets/img/maico-aparelhos-principal.png" alt=""
                  title="A maico aparelhos auditivos oferece modelos modernos que se adaptam em diferentes ambientes equalizando as frequências, aliviando ruídos.">
               <h3 class="home-principal__titulo">A maico aparelhos auditivos oferece modelos modernos que se adaptam em
                  diferentes ambientes equalizando as frequências, aliviando ruídos.</h3>

               <p>Você conhece sua audição? <br>
                  Compreender a fala, especialmente em situações difíceis de escutar, é um dos maiores desafios para
                  quem tem problemas auditivos. </p>
               <p>Às vezes, a voz parece pouco clara, distorcida ou fraca, enquanto o ruído de fundo é percebido como
                  irritante e predominante. Muitas vezes subestimamos a importância da audição: <strong>no entanto,
                     sentir-se bem é fundamental para uma boa qualidade de vida</strong>. </p>
               <p>Descubra como o seu aparelho auditivo funciona, o que você pode fazer para protegê-lo e como ajudá-lo
                  a se sentir melhor.</p>
            </div>
            <!-- primeira coluna /end/ -->

            <!-- segunda coluna /begin/ -->
            <div class="col-lg-7">

               <!-- destaques /begin/ -->
               <div class="destaques">
                  <div class="destaques__destaque">
                     <h2 class="destaques__destaque__titulo">Audição</h2>
                     <div class="destaques__destaque__box">
                        <p>A vida e os ambientes sonoros à nossa volta são dinâmicos e em constante mudança.</p>

                        <p>O novo e veloz microchip de Capto é capaz de se adaptar às condições de escuta mais diversas
                           e oferecer rapidamente à amplificação adequada às circunstâncias.</p>

                        <p>A ação integrada das três funções de KALEIDOS permitem analisar o ambiente 500 vezes por
                           segundo, identificar a correta proveniência dos sons, reduzir o ruído e amplificar
                           corretamente o sinal da fala e da música, para uma escuta clara e sem esforço, em qualquer
                           lugar.</p>
                     </div>
                  </div>

                  <div class="destaques__destaque">
                     <h2 class="destaques__destaque__titulo">Tecnologia</h2>
                     <div class="destaques__destaque__box">
                        <p>Até agora os aparelhos auditivos analisavam o sinal sonoro com base na sua intensidade e modulação.</p>

                        <p>Hoje, ao invés, KALEIDOS analisa as referências harmônicas e a  Relação Sinal-Ruído (SNR), permitindo ao aparelho auditivo responder de forma dinâmica às mudanças específicas do ambiente.</p>

                        <p>Um enorme passo tecnológico: dos limites pré-configurados das classificações ambientais, chegase à real liberdade de escuta em todos os ambientes sonoros.</p>
                     </div>
                  </div>

                  <div class="destaques__destaque">
                     <h2 class="destaques__destaque__titulo">Adaptação</h2>
                     <div class="destaques__destaque__box">
                        <p>A vida e os ambientes sonoros à nossa volta são dinâmicos e em constante mudança.</p>

                        <p>O novo e veloz microchip de Capto é capaz de se adaptar às condições de escuta mais diversas e oferecer rapidamente à amplificação adequada às circunstâncias.</p>

                        <p>A ação integrada das três funções de KALEIDOS permitem analisar o ambiente 500 vezes por segundo, identificar a correta proveniência dos sons, reduzir o ruído e amplificar corretamente o sinal da fala e da música, para uma escuta clara e sem esforço, em qualquer lugar.</p>
                     </div>
                  </div>
               </div>
               <!-- destaques /end/ -->

               <!-- destaques slide /begin/ -->
               <div class="swiper-container home-principal__slide">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <h3 class="home-principal__titulo">Maico está presente na Europa e no Brasil</h3>
                        <img src="<?php bloginfo('template_url')?>/assets/img/maico-mapa.jpg" alt="">
                     </div>
                     <div class="swiper-slide">
                        <h3 class="home-principal__titulo">Maico está presente na Europa e no Brasil</h3>
                        <img src="<?php bloginfo('template_url')?>/assets/img/maico-mapa.jpg" alt="">
                     </div>
                     <div class="swiper-slide">
                        <h3 class="home-principal__titulo">Maico está presente na Europa e no Brasil</h3>
                        <img src="<?php bloginfo('template_url')?>/assets/img/maico-mapa.jpg" alt="">
                     </div>
                  </div>
                  <!-- Add Pagination -->
                  <div class="swiper-pagination"></div>
                  <!-- Add Arrows -->
                  <!-- <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div> -->
               </div>
               <!-- destaques slide /end/ -->

            </div>
            <!-- segunda coluna /end/ -->

         </div>
      </div>
   </div>

   <div class="funcoes-extraordinarias">
      <div class="container">
         <h2>
            <span>Um aparelho auditivo com</span>
            funções extraordinárias
         </h2>

         <div class="row funcoes">

            <div class="col-lg-3 col-md-4 col-sm-6 col-6 funcoes__funcao">
               <a href="#">
                  <div class="funcoes__funcao__img">
                     <img src="<?php bloginfo('template_url')?>/assets/img/maico-funcao-adaptacao-ambientes-icone.png"
                        alt="Adaptação para diferentes ambientes" title="Adaptação para diferentes ambientes">
                  </div>
                  <h3 class="funcoes__funcao__titulo">Adaptação para <br>diferentes ambientes</h3>
               </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6 funcoes__funcao">
               <a href="#">
                  <div class="funcoes__funcao__img">
                     <img
                        src="<?php bloginfo('template_url')?>/assets/img/maico-funcao-extensor-faixa-dinamico-icone.png"
                        alt="Adaptação para diferentes ambientes" title="Adaptação para diferentes ambientes">
                  </div>
                  <h3 class="funcoes__funcao__titulo">Função extensor <br>de faixa dinâmico</h3>
               </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6 funcoes__funcao">
               <a href="#">
                  <div class="funcoes__funcao__img">
                     <img
                        src="<?php bloginfo('template_url')?>/assets/img/maico-funcao-processamento-dinamico-fala-icone.png"
                        alt="Adaptação para diferentes ambientes" title="Adaptação para diferentes ambientes">
                  </div>
                  <h3 class="funcoes__funcao__titulo">Processamento <br>dinâmico de fala</h3>
               </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6 funcoes__funcao">
               <a href="#">
                  <div class="funcoes__funcao__img">
                     <img
                        src="<?php bloginfo('template_url')?>/assets/img/maico-funcao-controle-dinamico-ruido-icone.png"
                        alt="Adaptação para diferentes ambientes" title="Adaptação para diferentes ambientes">
                  </div>
                  <h3 class="funcoes__funcao__titulo">Controle <br>dinâmico de ruído</h3>
               </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6 funcoes__funcao">
               <a href="#">
                  <div class="funcoes__funcao__img">
                     <img src="<?php bloginfo('template_url')?>/assets/img/maico-funcao-tinnitus-icone.png"
                        alt="Adaptação para diferentes ambientes" title="Adaptação para diferentes ambientes">
                  </div>
                  <h3 class="funcoes__funcao__titulo">Tinnitus sound <br>support</h3>
               </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6 funcoes__funcao">
               <a href="#">
                  <div class="funcoes__funcao__img">
                     <img src="<?php bloginfo('template_url')?>/assets/img/maico-funcao-alivio-zumbido-icone.png"
                        alt="Adaptação para diferentes ambientes" title="Adaptação para diferentes ambientes">
                  </div>
                  <h3 class="funcoes__funcao__titulo">Alívio de <br>zumbido</h3>
               </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6 funcoes__funcao">
               <a href="#">
                  <div class="funcoes__funcao__img">
                     <img src="<?php bloginfo('template_url')?>/assets/img/maico-funcao-atenuacao-icone.png"
                        alt="Adaptação para diferentes ambientes" title="Adaptação para diferentes ambientes">
                  </div>
                  <h3 class="funcoes__funcao__titulo">Atenuação <br>de frequência</h3>
               </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6 funcoes__funcao">
               <a href="#">
                  <div class="funcoes__funcao__img">
                     <img src="<?php bloginfo('template_url')?>/assets/img/maico-funcao-conectividade-icone.png"
                        alt="Adaptação para diferentes ambientes" title="Adaptação para diferentes ambientes">
                  </div>
                  <h3 class="funcoes__funcao__titulo">Conectividade <br>sem fio</h3>
               </a>
            </div>

         </div>
      </div>
   </div>

</main>

<?php get_footer(); ?>