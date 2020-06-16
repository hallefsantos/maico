/* ==========================================================================
  Define UI Vars
  ========================================================================== */
const formPesquisaCep = document.getElementById('pesquisa-cep'),
      cep = document.getElementById('cep'),
      loader = document.querySelector('.loader'),
      navbar = document.querySelector('.nav'),
      menuButton = document.getElementById('js-open-menu');


/* ====================================
  Estados Brasil JSON.
  ==================================== */
const estadosBrasil = {
  UF: [
    {nome: "Acre", sigla: "AC"},
    {nome: "Alagoas", sigla: "AL"},
    {nome: "Amapá", sigla: "AP"},
    {nome: "Amazonas", sigla: "AM"},
    {nome: "Bahia", sigla: "BA"},
    {nome: "Ceará", sigla: "CE"},
    {nome: "Distrito Federal", sigla: "DF"},
    {nome: "Espírito Santo", sigla: "ES"},
    {nome: "Goiás", sigla: "GO"},
    {nome: "Maranhão", sigla: "MA"},
    {nome: "Mato Grosso", sigla: "MT"},
    {nome: "Mato Grosso do Sul", sigla: "MS"},
    {nome: "Minas Gerais", sigla: "MG"},
    {nome: "Pará", sigla: "PA"},
    {nome: "Paraíba", sigla: "PB"},
    {nome: "Paraná", sigla: "PR"},
    {nome: "Pernambuco", sigla: "PE"},
    {nome: "Piauí", sigla: "PI"},
    {nome: "Rio de Janeiro", sigla: "RJ"},
    {nome: "Rio Grande do Norte", sigla: "RN"},
    {nome: "Rio Grande do Sul", sigla: "RS"},
    {nome: "Rondônia", sigla: "RO"},
    {nome: "Roraima", sigla: "RR"},
    {nome: "Santa Catarina", sigla: "SC"},
    {nome: "São Paulo", sigla: "SP"},
    {nome: "Sergipe", sigla: "SE"},
    {nome: "Tocantins", sigla: "TO"}
  ]
}

/* ==========================================================================
  Event Listeners
  ========================================================================== */
formPesquisaCep.addEventListener('submit', (e) => {
  e.preventDefault();
  pesquisaCep();
});

menuButton.addEventListener('click', chamarMenu);


/* ==========================================================================
  Functions
  ========================================================================== */

// Chama o menu
function chamarMenu(e){
  e.preventDefault();
  document.body.classList.toggle('menu-opened');
  navbar.classList.add('scrolled');

}

// Pesquisa o cep ao clicar
async function pesquisaCep(){
  const valorCep = cep.value;
  const erroDiv = document.querySelector('.pesquisa-cep .erro');

  if(valorCep !== ''){
    loader.style.display = 'block';
    const data = await pesquisaCepApi(valorCep);
    
    
    if(!data.erro === true) {
      const uf = data.uf;
  
      estadosBrasil.UF.forEach(estado => {
        if(uf === estado.sigla){
          setTimeout(() => {
            // console.log(`https://maico.com.br/${removeCaracteres(estado.nome)}`);
            window.location.href = `https://maico.com.br/${removeCaracteres(estado.nome)}`;
            loader.style.display = 'none';
          }, 2000);
          
          
        }
      });
    } else {
      mostrarErros(erroDiv, 'erro-laranja', '<i class="fas fa-exclamation-triangle"></i> CEP Inválido');
    }
  } else {
    mostrarErros(erroDiv, 'erro-vermelho', '<i class="fas fa-exclamation-triangle"></i> Por favor preencha o seu CEP');
  }
}

// Pesquisa o cep na API
async function pesquisaCepApi(valorCep){
  const res = await fetch(`https://cors-anywhere.herokuapp.com/https://viacep.com.br/ws/${valorCep}/json/`);
  const data = await res.json();
  return data;
}

// Mostra erros
function mostrarErros(div, classe, mensagem){
  div.classList.add("ativo", classe);
  div.innerHTML = mensagem;

  setTimeout(() => {
    esconderErro(div);
  }, 5000);
}

function esconderErro(div){
  div.classList.remove('ativo');
}

function removeCaracteres(url){
  return url.normalize('NFD').replace(/[\u0300-\u036f]/g, '').replace(/[^\w\-]+/g, '-').toLowerCase();
}

// OnScroll event handler
const onScroll = () => {

  // Get scroll value
  const scroll = document.documentElement.scrollTop;

  if (scroll > 5) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
}


var swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  // autoplay: {
  //   delay: 3000,
  //   disableOnInteraction: false,
  // },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  // navigation: {
  //   nextEl: '.swiper-button-next',
  //   prevEl: '.swiper-button-prev',
  // },
});

// Use either onScroll or throttledOnScroll
window.addEventListener('scroll', onScroll);