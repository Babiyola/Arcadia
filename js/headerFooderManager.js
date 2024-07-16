class specialHeader extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
         <header class="header">
            <div class="logo">
                <a href="index.html">
                  <img src="assets/imagezoo/logo1.png" alt="logo" width="100" height="100">
                 </a>
            </div>
            <input type="checkbox" id="check">
            <label for="check" class="icons">
                <i class='bx bx-menu' id="menu-icon"></i>
                <i class='bx bx-x' id="close-icon"></i>
            </label>
            <nav class="navbar">
                <a href="index.html" style="--i:0">Accueil</a>
                <a href="service.html" style="--i:1">Nos services</a>
                <a href="Habitats.html" style="--i:2">Habitats</a>
                <a href="connection.html" style="--i:3">Connection</a>
                <a href="contact.html" style="--i:4">Contact</a>
            </nav>
        </header>`;
    }
}

class specialFooter extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <section id="copy-right">
            <div class="copy-right-sec"> 
                <p>Arcadia @copyrights, All rights reserved<br> Politique de gestion des cookies | Mention légales</p>

            </div>
        </section>`;
    }
}

customElements.define('special-header', specialHeader);
customElements.define('special-footer', specialFooter);
