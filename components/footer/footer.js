class Footer extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `
        <footer>
            <div class="container">
              <div class="cabecalho">
                <h1>Soft Cake</h1>
                <a href="#">Início</a>
                <a href="#">Catálogo</a>
                <a href="#">Sobre nós</a>
                <a href="#">Contate-nos</a>
              </div>
              <div class="conteudo">
                <div class="social">
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-youtube"></i>
                  <i class="fab fa-instagram"></i>
                  <i class="fab fa-twitter"></i>
                </div>
                <div class="navegacao">
                  <div class="coluna">
                    <a href="#">Telefone</a>
                    <a href="#">Ajuda</a>
                    <a href="#">Contratação</a>
                  </div>
                  <div class="coluna">
                    <a href="#">(11) 4761-4593</a>
                    <a href="#">sac@softcake.com</a>
                    <a href="#">softcake.trabalheconosco@gmail.com</a>
                  </div>
                  <div class="coluna">
                    <a href="#">Termos de uso</a>
                    <a href="#">Política de privacidade</a>
                  </div>
                </div>
              </div>
              <span>2021 © Todos os direitos reservados à MIPE Apps</span>
            </div>
        </footer>
      `;
    }
}

customElements.define('main-footer', Footer);